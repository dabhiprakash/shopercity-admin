@extends('admin.layouts.master')
@section('content')
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Faqs</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{ admin_url('faq/setup') }}" class="btn btn-primary mr-3 setup-user">Create New Faq</a>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
    <div class="row">
        @if($faqs->isNotEmpty())
            <div class="col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
                            @php $no = 1 @endphp
                            @foreach($faqs as $k => $faq)

                                <div class="acc-card mb-4">
                                    <div class="acc-header" id="heading{{ $k }}" role="tab">
                                        <h5 class="mb-0">
                                            <a aria-controls="collapse{{ $k }}" aria-expanded="true" data-toggle="collapse" href="#collapse{{ $k }}">
                                             {{ $no }} ) &nbsp; {{ $faq->question }}<span class="float-right acc-angle"><i class="fe fe-chevron-right"></i></span>
                                            </a>
                                        </h5>
                                    </div>
                                    <div aria-labelledby="heading{{ $k }}" class="collapse" data-parent="#accordion" id="collapse{{ $k }}" role="tabpanel">
                                        <div class="acc-body">
                                            @php echo $faq->answer @endphp
                                            <br/><br/>
                                            <div>
                                                <a class="btn btn-sm btn-primary" href="{{ admin_url('faq/setup/'.encrypt_it($faq?->id)) }}"><span class="feather feather-edit faq-edit"></span></a>
                                                <a class="btn btn-sm btn-danger faq-delete" faq_id="{{ encrypt_it($faq?->id) }}"><span class="feather feather-trash" ></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php $no++ @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>Faq not found</h5>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <!--End Row-->

@stop
