<div class="modal-header">
    <h4 class="modal-title">{{ (isset($category_id) && $category_id != ''? 'Update' : 'Create' )  }}  Category</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="post" id="category-form"  autocomplete="off">
                @csrf
                <input type="hidden" name="category_id" class="category_id" value="{{ (isset($category_id) && $category_id != '') ? $category_id : ''}}"/>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ isset($category->name) ? $category->name : '' }}" placeholder="Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <button type="submit" id="submit-user" class="btn btn-primary">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>{{ (isset($category_id) && $category_id != ''? 'Update' : 'Save')  }}
                    </button>
                    <a href="javascript:void(0)" title="Cancel" class="btn btn-danger mr-1" data-dismiss="modal">
                        <i class="ft-x"></i> Close
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
