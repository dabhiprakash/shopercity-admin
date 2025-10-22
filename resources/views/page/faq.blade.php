@extends('layouts.master')
@section('content')
<section class="faq-box-contain section-b-space">
        <div class="container box_container">
            <div class="page_title">
                <h2>FAQs</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefaq1">
                                        What is RestaurantBuyouts.com?
                                        <i class="fa-solid fa-angle-down" ></i>
                                    </button>
                                </h2>
                                <div id="collapsefaq1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>RestaurantBuyouts.com is a platform where individuals and businesses can buy and sell used commercial restaurant equipment. It was built to support both single-item sellers and those looking to liquidate full kitchens.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefaq2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapsefaq2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
