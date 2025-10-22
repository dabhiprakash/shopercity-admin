@extends('seller.layouts.master')
@section('content')
    <section class="pt-0">
        <div class="container-fluid p-0">
            <div class="custom-row">
                <div class="sidebar-col">
                    @include('seller.layouts.sidebar')
                </div>
                <div class="content-col">
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Saved Listings</h2>
                            </div>
                            <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg')  }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg')  }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg')  }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg')  }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg')  }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg')  }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg')  }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg')  }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title d-flex mt-5">
                                <h2>Watched Items</h2>
                            </div>
                            <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg')  }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg')  }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg')  }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg')  }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg')  }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg')  }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg')  }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg')  }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
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
