<style>
    .status-text {
        font-weight: 500;
    }
</style>

<div class="modal-header">
    <h4 class="modal-title">Upload Model Number File</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="post" id="model-mumber-bulk-form"  autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12 progress-div mb-5 d-none">
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 0%">0%</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="bulk_import" class="form-control" style="height:45px;">
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <div class="status-text text-secondary" id="statusText">Select a file to upload</div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" id="submit-user" class="btn btn-primary">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>Upload
                    </button>
                    <a href="javascript:void(0)" title="Cancel" class="btn btn-danger mr-1" data-dismiss="modal">
                        <i class="ft-x"></i> Close
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>
