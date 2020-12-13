@extends('layouts.client.app')

@section('title','home')
@section('content')
    <section class="tabs-content pro-content" >
        <div class="container">
            <div class="products-area">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="pro-heading-title">
                            <h2>  Main Categories </h2>
                            <p>CURRENTLY WE HAVE TILES OF THESE CATEGORIES</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="tabs-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade active show" id="featured">
                                <div class="tab-carousel-js">

                                @foreach($categories as $category)
                                    <div class="slick ">
                                        <div class="product">
                                            <article>
                                                <div class="thumb">
                                                    <div class="product-hover d-none d-lg-block d-xl-block">
                                                        <div class="icons">
                                                        </div>
                                                        <div class="icons">
                                                        </div>
                                                        <a  href="{{route('categoryDetail',[$category->id])}}" class="btn btn-block  btn-secondary cart swipe-to-top" products_id="14" data-toggle="tooltip" data-placement="bottom" title="Details">View Details</a>
                                                    </div>
                                                    <div class="mobile-icons d-lg-none d-xl-none">
                                                        <div class="icons">
                                                            <div class="icon-liked">
                                                                <a class="icon active swipe-to-top is_liked" products_id="14">
                                                                    <i class="fas fa-heart"></i>
                                                                </a>
                                                            </div>
                                                            <div class="icon modal_show " products_id ="14">
                                                                <i class="fas fa-eye"></i>
                                                            </div>
                                                            <a onclick="myFunction3(14)" class="icon">
                                                                <i class="fas fa-align-right" data-fa-transform="rotate-90"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <img class="img-fluid" src="{{url('black/images').'/'.$category->thumbnail}}" alt="Redragon Usb Gaming Mouse">
                                                </div>

                                                <div class="content">
                                                     <span class="tag">
                                                       Computers & Accessories
                                                     </span>
                                                    <h5 class="title text-center"><a href="product-detail/redragon-usb-gaming-mouse.html">Redragon Usb Gaming Mouse</a></h5>
                                                    <div class="expand-detail">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      </div>
                                                    <div class="price">
                                                        &nbsp;{{$category->name}}&nbsp;

                                                    </div>
                                                </div>


{{--                                                <div class="mobile-buttons d-lg-none d-xl-none">--}}
{{--                                                    <button type="button" class="btn  btn-secondary cart" products_id="14">Add to Cart</button>--}}
{{--                                                </div>--}}
                                            </article>
                                        </div>
                                    </div>
                                @endforeach
                                    <div class="">
                                        <div class="product">
                                            <article>
                                                <div class="btn-all">
                                                    <a href="shop68c3.html?type=topseller" class="btn btn-secondary swipe-to-top">View All</a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>

                                </div>
                                <!-- 1st tab -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="new-products-content pro-content" >
        <div class="container">
            <div class="products-area">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="pro-heading-title">
                            <h2>Brands/Companies </h2>
                            <p>WE ARE WORKING WITH THESE BRANDS AND COMPANIES</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($companies as $company)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Product -->
                        <div class="product">
                            <article>
                                <div class="thumb">
                                    <div class="badges">
                                    </div>
                                    <div class="product-hover d-none d-lg-block d-xl-block">
                                        <div class="icons">

                                        </div>
                                        <div class="icons">

                                        </div>
                                        <a href="{{route('companyDetails',[$company->id])}}" class="btn btn-block  btn-secondary cart swipe-to-top" products_id="32" data-toggle="tooltip" data-placement="bottom" title="Details">View Details</a>


                                    </div>
                                    <div class="mobile-icons d-lg-none d-xl-none">
                                        <div class="icons">
                                            <div class="icon-liked">

                                                <a class="icon active swipe-to-top is_liked" products_id="32">
                                                    <i class="fas fa-heart"></i>
                                                </a>

                                            </div>

                                            <div class="icon modal_show " products_id ="32">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                            <a onclick="myFunction3(32)" class="icon">
                                                <i class="fas fa-align-right" data-fa-transform="rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="{{url('black/images').'/'.$company->thumbnail}}" alt="OTOKY 2018 Sport watch">
                                </div>

                                <div class="content">
      <span class="tag">
        Watches
      </span>
                                    <h5 class="title text-center"><a href="product-detail/otoky-2018-sport-watch.html">OTOKY 2018 Sport watch</a></h5>
                                    <div class="expand-detail">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      </div>
                                    <div class="price">
                                        {{$company->name}}

                                    </div>
                                </div>


                                <div class="mobile-buttons d-lg-none d-xl-none">
                                    <button type="button" class="btn  btn-secondary cart" products_id="32">Add to Cart</button>
                                </div>
                            </article>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
