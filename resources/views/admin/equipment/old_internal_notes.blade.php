<div class="modal-header">
    <h4 class="modal-title">Internal notes</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="post" id="equipment-form"  autocomplete="off">
                @csrf
                <input type="hidden" name="equipment_id" class="equipment_id" value="{{ (isset($equipment_id) && $equipment_id != '') ? $equipment_id : ''}}"/>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Note</label>
                                <textarea rows="5" class="form-control" name="note">{{ ($equipment->note ? $equipment->note : '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <button type="submit" id="submit-user" class="btn btn-primary">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>{{ (isset($user_id) && $user_id != ''? 'Update' : 'Save')  }}
                    </button>
                    <a href="javascript:void(0)" title="Cancel" class="btn btn-danger mr-1" data-dismiss="modal">
                        <i class="ft-x"></i> Close
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
