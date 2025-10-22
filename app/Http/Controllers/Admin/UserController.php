<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\BlockEmail;
use App\Models\Equipment;
use App\Models\Tag;
use App\Models\EquipmentMedia;
use Validator;
use Auth;

class UserController extends MasterController
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {

            $search         = $request->search;
            $start          = intval($request->start);
            $length         = intval($request->length);
            $order          = $request->order;

            $column_array   = array(
                '0' => 'id',
                '1' => 'name',
                '2' => 'email',
                '3' => 'phone',
                '4' => 'address',
            );

            $order_field = 'users.id';

            $users          = User::select('users.*');
            $filter_count   = $total_count = $users->count();

            if (isset($request->search['value']) && $request->search['value'] != '') {
                $search     = $request->search['value'];
                $users->where(function ($query) use ($search) {
                    $query->where('users.name', 'LIKE', '%' . $search . '%');
                    $query->orWhere('users.email', 'LIKE', '%' . $search . '%');
                    $query->orWhere('users.phone', 'LIKE', '%' . $search . '%');
                    $query->orWhere('users.address', 'LIKE', '%' . $search . '%');
                });
            }
            $filter_count = $users->count();

            if (!empty($order)) {
                $order_field =  $column_array[$order[0]['column']];
                $order_value = $order[0]['dir'];
                $users->orderBy($order_field, $order_value);
            }

            $records     = $users->skip($start)->take($length)->get();

            $vendors    = array();

            foreach ($records as $key => $value) {
                $row_data               = array();

                $status         = ($value->allow_login == 1) ? "<span class='badge badge-success'>Yes</span>" : "<span class='badge badge-danger'>No</span>";

                $row_data['id']             = $value->id;
                $row_data['name']           = $value->name;
                $row_data['email']          = $value->email;
                $row_data['phone']          = $value->phone;
                $row_data['address']        = $value->address;

                $row_data['action'] = '<a href="#" class=" btn btn-primary text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="feather feather-more-vertical"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu" style="">
                                            <li class="view-user" data-id="' . encrypt_it($value->id) . '"><a href="'.admin_url('users/view/'.encrypt_it($value->id)).'"><i class="feather feather-eye mr-2"></i>View</a></li>
                                            <li class="setup-user" data-id="' . encrypt_it($value->id) . '"><a href="javascript:void(0)"><i class="feather feather-edit-2 mr-2 edit-task"></i>Edit</a></li>
                                            <li class="delete-user" data-id="' . encrypt_it($value->id) . '"><a href="javascript:void(0)"><i class="feather feather-trash-2 mr-2"></i>Delete</a></li>
                                            <li class="suspend-user" data-id="' . encrypt_it($value->id) . '"><a href="javascript:void(0)"><i class="fa fa-times-circle-o mr-2"></i>Suspend user</a></li>
                                            <li class="block-user" data-id="' . encrypt_it($value->id) . '"><a href="javascript:void(0)"><i class="fa fa-ban mr-2"></i>Block user</a></li>
                                            <li data-id="' . encrypt_it($value->id) . '"><a href="'.admin_url('users/equipment/'.encrypt_it($value->id)).'"><i class="fa fa-plus-square mr-2"></i>Add new equipment</a></li>
                                        </ul>';

                $vendors[]              = $row_data;
            }

            $datatable_data['recordsTotal']       = $total_count;
            $datatable_data['recordsFiltered']    = $filter_count;
            $datatable_data['data']               = $vendors;

            return $datatable_data;

        } else {
            $data['js_files'] = array(
                'js/admin/users.js',
            );
            return view('admin.user.users', $data);
        }
    }

    public function detail() {
        $data['js_files'] = array(
                'js/admin/users.js',
            );

        return view('admin.user.user_profile');
    }


    public function setup(Request $request) {
        if ($request->isMethod('post')) {
            $user_id  = $request->id;
            $user_data= array();

            if ($user_id != '') {
                $user_data['user'] = User::find(decrypt_it($user_id));
            }
            $user_data['user_id']    = $user_id;

            $return['status']   = true;
            $return['html']     = view('admin.user.form', $user_data)->render();
        } else {
            $return['status']   = false;
        }

        echo json_encode($return);
    }

    public function commit(Request $request) {

        try {
            if ($request->isMethod('post')) {
                $validation_array = [
                    'name'          => 'required',
                    'email'          => 'required|email',
                ];
                if ($request->user_id == "") {
                    $validation_array['password'] = 'required';
                }

                $validator = Validator::make($request->all(), $validation_array);
                if ($validator->passes()) {
                    $data    = array(
                        'name'          => $request->name,
                        'email'         => $request->email,
                        'phone'         => $request->phone,
                        'address'       => $request->address,
                        'business_name' => $request->business_name,
                    );
                    $user_id                      = decrypt_it($request->user_id);

                    if ($user_id == '') {
                        $data['password']           = bcrypt($request->password);
                        $vendor                     = User::create($data);

                        $return['status']           = true;
                        $return['message']          = "User added successfully";
                    } else {

                        if (isset($request->password) && $request->password != "") {
                            $data['password'] = bcrypt($request->password);
                        }

                        User::where('id', $user_id)->update($data);

                        $return['status']           = true;
                        $return['message']          = "User updated successfully";
                    }
                } else {
                    $return['status']               = false;
                    $return['message']              = $validator->errors()->first();
                }
            } else {
                $return['status']                   = false;
                $return['message']                  = "Method not found";
            }
            echo json_encode($return);
        } catch (\Throwable $th) {

            dd($th->getMessage());

        }
    }

    public function delete(Request $request) {
        $user_id   = decrypt_it($request->id);

        $user = User::findOrFail($user_id);

        if($user->delete()) {
            $return['status']   = true;
            $return['message']  = 'User deleted successfully';
        } else {
            $return['status']   = false;
            $return['message']  = 'Something went wrong';
        }

        echo json_encode($return);

    }

    public function duplicate(Request $request) {
        $email          = $request->email;
        $user_id       = decrypt_it($request->user_id);

        if (isset($email) && ($email != "")) {
            $result = User::where('email', $email);
            if (isset($user_id) && ($user_id > 0)) {
                $result->where('id','!=',$user_id);
            }
            $count = $result->withTrashed()->get()->count();
        }
        $return = TRUE;

        if ($count > 0) {
            $return = FALSE;
        }
        echo json_encode($return);
    }

    public function view(Request $request) {

        $user_id  = $request->id;

        if ($user_id != '') {
            $data['user'] = User::find(decrypt_it($user_id));
        }

        $data['user_id']    = $user_id;

        $data['js_files'] = array(
                'js/admin/users.js',
            );
        return view('admin.user.view', $data);
    }

    public function suspend(Request $request) {
        $user_id   = decrypt_it($request->id);

        $user = User::findOrFail($user_id);

        if($user->suspend == 0) {
            if($user->update(['suspend' => 1])) {
                $return['status']   = true;
                $return['message']  = 'User suspended';
            } else {
                $return['status']   = false;
                $return['message']  = 'Something went wrong';
            }
        } else {
            $return['status']   = true;
            $return['message']  = 'User already suspended';
        }

        echo json_encode($return);

    }

    public function block_email(Request $request) {
        $user_id   = decrypt_it($request->id);

        $user = User::findOrFail($user_id);
        $email = $user->email;
        $block = BlockEmail::where('email', $email)->first();

        if(is_null($block)) {
            if($user->delete()) {
                BlockEmail::create(['email' => $email]);

                $return['status']   = true;
                $return['message']  = 'User Blocked';
            } else {
                $return['status']   = false;
                $return['message']  = 'Something went wrong';
            }
        } else {
            $return['status']   = false;
            $return['message']  = 'User has already blocked';
        }

        echo json_encode($return);

    }

    public function equipment(Request $request) {

        $data['user_id'] = $request->id;

        $data['js_files'] = array(
                'js/admin/users.js',
        );

        return view('admin.user.add_equipment', $data);
    }

    public function equipment_commit(Request $request) {
        try {
            if ($request->isMethod('post')) {

                $validation_array = [
                    'category'  => 'required',
                    'subcategory'   => 'required',
                    'manufacturer'   => 'required',
                    'model_number'   => 'required',
                    'title'   => 'required',
                    'condition'   => 'required',
                    'price'   => 'required',
                    'zip'   => 'required',
                    'description'   => 'required',
                    'year_build'   => 'required',
                ];

                $validator = Validator::make($request->all(), $validation_array);
                if ($validator->passes()) {

                    $user_id    = decrypt_it($request->user_id);

                    $data    = array(
                        'user_id'          =>  $user_id,
                        'category'          => $request->category,
                        'subcategory'         => $request->subcategory,
                        'manufacturer'         => $request->manufacturer,
                        'model_number'       => $request->model_number,
                        'title' => $request->title,
                        'condition' => $request->condition,
                        'price' => $request->price,
                        'zip' => $request->zip,
                        'description' => $request->description,
                        'year_build' => $request->year_build,
                        'weight1' => $request->weight1,
                        'weight2' => $request->weight2,
                    );

                    $equipment  = Equipment::create($data);
                    Session::flash('success', 'Equipment created successfully');

                    if($equipment) {
                        $tags = $request->tags;

                        if(!empty($tags)) {
                            $tData = [];
                            foreach($tags as $key => $value) {
                                $tData[] = [ 'equipment' => $equipment->id, 'tag' => $value];
                            }
                            tag::insert($tData);
                        }

                        if(!empty($request->file('upload'))) {
                            foreach ($request->file('upload') as $file) {
                                 if (! empty($file)) {
                                    $image = $file->store('equipment/'.md5($equipment->id), 'public');
                                    $c_image_data['media']  = image_convert_webp($image);
                                    $c_image_data['equipment']  = $equipment->id;
                                    $c_image_data['type'] = 'image';
                                    EquipmentMedia::create($c_image_data);
                                }
                            }
                        }
                    }
                    return redirect()->back();
                } else {
                    return redirect()->back();
                }
            } else {
                Session::flash('error','Method not found');
                 return redirect(admin_url());
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }

    }

}
