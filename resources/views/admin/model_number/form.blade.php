<div class="modal-header">
    <h4 class="modal-title">{{ (isset($model_number_id) && $model_number_id != ''? 'Update' : 'Create' )  }}  Model Number</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="post" id="model-number-form"  autocomplete="off">
                @csrf
                <input type="hidden" name="model_number_id" class="model_number_id" value="{{ (isset($model_number_id) && $model_number_id != '') ? $model_number_id : ''}}"/>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Manufacturer</label>
                                <select class="form-control select2-show-search" name="manufacturer" class="manufacturer">
                                    <option value="">-Select manufacturer-</option>
                                        @if(isset($model_number) && $model_number->manufactures )
                                            <option value="{{ $model_number->manufactures->id}}" selected>{{ $model_number->manufactures->name }}</option>
                                        @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Model Number</label>
                                <input type="text" class="form-control" name="model_number" value="{{ isset($model_number->model_number) ? $model_number->model_number : '' }}" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Description (Optional)</label>
                                <textarea type="text" class="form-control" name="description" placeholder="Description">{{ isset($model_number->description) ? $model_number->description : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <button type="submit" id="submit-user" class="btn btn-primary">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>{{ (isset($model_number_id) && $model_number_id != ''? 'Update' : 'Save')  }}
                    </button>
                    <a href="javascript:void(0)" title="Cancel" class="btn btn-danger mr-1" data-dismiss="modal">
                        <i class="ft-x"></i> Close
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
