<?php

use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

function asset_url($path = "")
{
    $full_path = url('/public');

    if ($path != '') {
        $full_path = url('/public/' . $path);
    }

    return $full_path;
}
// function admin_url($path = ""){
//     $full_path = url('/admin');

//     if ($path != '') {
//         $full_path = url('/admin/'.$path);
//     }
//     return $full_path;
// }
if (!function_exists('admin_url')) {
    function admin_url($path = "")
    {
        $adminUrl = config('app.admin_url');
        return $path ? "{$adminUrl}/{$path}" : "{$adminUrl}/";
    }
}

function p($data, $continue = false)
{
    echo '<pre>';
    print_r($data);

    if (!$continue) {
        die;
    }
}
function encrypt_it($string)
{
    $key    = 'RestaurantBuyOuts';
    $result = '';

    for ($i = 0, $k = strlen($string); $i < $k; $i++) {
        $char       = substr($string, $i, 1);
        $keychar    = substr($key, ($i % strlen($key)) - 1, 1);
        $char       = chr(ord($char) + ord($keychar));
        $result     .= $char;
    }

    return base64_encode($result);
}

function decrypt_it($string)
{
    $result = '';
    $key    = 'RestaurantBuyOuts';
    $string = base64_decode($string);

    for ($i = 0, $k = strlen($string); $i < $k; $i++) {
        $char       = substr($string, $i, 1);
        $keychar    = substr($key, ($i % strlen($key)) - 1, 1);
        $char       = chr(ord($char) - ord($keychar));
        $result     .= $char;
    }

    return $result;
}

function image_convert_webp($path)
{
    $source = getcwd() . '/public/storage/' . $path;
    if (file_exists($source)) {

        $file_info = pathinfo($source);

        $new_file_name = $file_info['filename'] . '.webp';
        $destination = $file_info['dirname'] . '/' . $new_file_name;

        $folder_info = pathinfo($path);
        $new_path = $folder_info['dirname'] . '/' . $new_file_name;

        $result = file_get_contents($source);
        file_put_contents($destination, $result);

        if (file_exists($destination)) {
            unlink($source);
            return $new_path;
        }
    }
}

function sendMailToAdmin($from = "", $email_data = array())
{
    try {
        $to         = config('mail.from.address');
        $from_name  = config('mail.from.name');
        Mail::send('email_templates.contact-us', $email_data, function ($message) use ($to, $from, $from_name) {
            $message->to($to)->subject('New Contact Inquiry')->from($from, $from_name);
        });
        return [
            'status' => true,
            'message' => 'Mail sent',
        ];
    } catch (TransportExceptionInterface $e) {
        return [
            'status' => false,
            'message' => 'Mail could not be sent. ' . $e->getMessage(),
        ];
    }
}
