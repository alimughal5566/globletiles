@extends('layouts.client.app')

@section('title','Product Details')
@section('content')
    <!-- END NOTIFICATION CONTENT -->
    <div class="container-fuild">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>

{{--                    <li class="breadcrumb-item active"><a href="../shop2c12.html?category=cameras-audio-video"></a></li>--}}
                    <li class="breadcrumb-item active">{{$detail->name}}</li>
                </ol>
            </div>
        </nav>
    </div>
    <section class="pro-content">
        <div class="container">
            <div class="page-heading-title">
                <h2>{{$detail->name}}
                </h2>
            </div>
        </div>
    </section>
    <section class="product-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6  ">
                    <div class="slider-wrapper pd2">
                        <div class="slider-for">

                            <a class="slider-for__item ex1 fancybox-button" href="../images/media/2020/02/large15822971497EmRq21302.jpg" data-fancybox-group="fancybox-button">
                                <img src="{{url('black/images').'/'.$detail->thumbnail}}" alt="Zoom Image" />
                            </a>


                        </div>

                        <div class="slider-nav">
                            <div class="slider-nav__item justify-content-between">
                                <img src="{{url('black/images').'/'.$detail->thumbnail}}" alt="Zoom Image"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="badges">




                            </div>

                            <h5 class="pro-title">{{$detail->name}}</h5>

                            <div class="price">
                                <price class="total_price">Rs: {{$detail->price}}</price>

                            </div>

                            <div class="pro-infos">
                                <div class="pro-single-info"><b>Product ID :</b>{{$detail->name}}</div>
                                <div class="pro-single-info"><b>Categroy  :</b>



                                    <a href=../shop7738.html?category=Cameras, Audio & Video>{{$detail->category->name}}</a>                </div>

{{--                                <div class="pro-single-info"><b>Available :</b>--}}

{{--                                    <span class="text-secondary">InStock</span>--}}


{{--                                </div>--}}

{{--                                <div class="pro-single-info" id="min_max_setting"><b>Min Order Limit: :</b><a href="#">1</a></div>--}}

                            </div>


                                    <a class="btn btn-secondary btn-lg swipe-to-top add-to-Cart"    href="{{route('addToCart',[$detail->id])}}">Add to Cart</a>


                            <div class="pro-sub-buttons">
                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_email"></a>
                                </div>
                                <script async src="../../static.addtoany.com/menu/page.js"></script>
                                <!-- AddToAny END -->

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="nav nav-pills" role="tablist">
                                <a class="nav-link nav-item  active" href="#description" id="description-tab" data-toggle="pill" role="tab">Descriptions</a>
                                <a class="nav-link nav-item" href="#review" id="review-tab" data-toggle="pill" role="tab" >Category</a>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active show" id="description" aria-labelledby="description-tab">
                                    <p>{{$detail->description}}</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade " id="review" aria-labelledby="review-tab">
                                    <div class="reviews">
                                        <div class="review-bubbles">
                                            <p>{{$detail->category->name}}</p>

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
    <section class="product-content pro-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="pro-heading-title">
                        <h2> Related Products                </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis felis tempus feugiat maximus.                </div>
                </div>

            </div>
        </div>
        <div class="general-product">
            <div class="container p-0">
                <div class="product-carousel-js">

                    <div class="slik">
                        <div class="product">
                            <article>
                                <div class="thumb">
                                    <div class="badges">
                                    </div>
                                    <div class="product-hover d-none d-lg-block d-xl-block">
                                        <div class="icons">

                                            <a class="icon active swipe-to-top is_liked" products_id="10" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                                                <i class="fas fa-heart"></i>
                                            </a>

                                            <div class="icon swipe-to-top modal_show " products_id ="10" data-toggle="tooltip" data-placement="bottom" title="Quick View">
                                                <i class="fas fa-eye"></i>
                                            </div>

                                            <a onclick="myFunction3(10)" class="icon swipe-to-top"  data-toggle="tooltip" data-placement="bottom" title="Compare"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                        </div>
                                        <a href="{{route('addToCart',[$detail->id])}}" class="btn btn-block  btn-secondary cart swipe-to-top"   data-toggle="tooltip" data-placement="bottom" title="Add to Cart">Add to Cart</a>


                                    </div>
                                    <div class="mobile-icons d-lg-none d-xl-none">
                                        <div class="icons">
                                            <div class="icon-liked">

                                                <a class="icon active swipe-to-top is_liked" products_id="10">
                                                    <i class="fas fa-heart"></i>
                                                </a>

                                            </div>

                                            <div class="icon modal_show " products_id ="10">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                            <a onclick="myFunction3(10)" class="icon">
                                                <i class="fas fa-align-right" data-fa-transform="rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../images/media/2020/02/medium1582297027fu4gW21802.jpg" alt="T3 Bluetooth Wireless Gamepad">
                                </div>

                                <div class="content">
      <span class="tag">
        Cameras, Audio & Video
      </span>
                                    <h5 class="title text-center"><a href="t3-bluetooth-wireless-gamepad.html">T3 Bluetooth Wireless Gamepad</a></h5>
                                    <div class="expand-detail">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      </div>
                                    <div class="price">
                                        $&nbsp;62&nbsp;

                                    </div>
                                </div>


                                <div class="mobile-buttons d-lg-none d-xl-none">
                                    <a href="{{route('addToCart',[$detail->id])}}" class="btn  btn-secondary cart" >Add to Cart</a>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="slik">
                        <div class="product">
                            <article>
                                <div class="thumb">
                                    <div class="badges">







                                    </div>
                                    <div class="product-hover d-none d-lg-block d-xl-block">
                                        <div class="icons">

                                            <a class="icon active swipe-to-top is_liked" products_id="9" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                                                <i class="fas fa-heart"></i>
                                            </a>

                                            <div class="icon swipe-to-top modal_show " products_id ="9" data-toggle="tooltip" data-placement="bottom" title="Quick View">
                                                <i class="fas fa-eye"></i>
                                            </div>

                                            <a onclick="myFunction3(9)" class="icon swipe-to-top"  data-toggle="tooltip" data-placement="bottom" title="Compare"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                        </div>
                                        <a  class="btn btn-block  btn-secondary cart swipe-to-top" products_id="9" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">Add to Cart</a>


                                    </div>
                                    <div class="mobile-icons d-lg-none d-xl-none">
                                        <div class="icons">
                                            <div class="icon-liked">

                                                <a class="icon active swipe-to-top is_liked" products_id="9">
                                                    <i class="fas fa-heart"></i>
                                                </a>

                                            </div>

                                            <div class="icon modal_show " products_id ="9">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                            <a onclick="myFunction3(9)" class="icon">
                                                <i class="fas fa-align-right" data-fa-transform="rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../images/media/2020/02/medium1582296377GhXYJ21802.jpg" alt="Portable MP3 Player">
                                </div>

                                <div class="content">
      <span class="tag">
        Cameras, Audio & Video
      </span>
                                    <h5 class="title text-center"><a href="portable-mp3-player.html">Portable MP3 Player</a></h5>
                                    <div class="expand-detail">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      </div>
                                    <div class="price">
                                        $&nbsp;69&nbsp;

                                    </div>
                                </div>


                                <div class="mobile-buttons d-lg-none d-xl-none">
                                    <a href="{{route('addToCart',[$detail->id])}}" class="btn  btn-secondary cart" >Add to Cart</a>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="slik">
                        <div class="product">
                            <article>
                                <div class="thumb">
                                    <div class="badges">
                                        <span class="badge badge-danger"  data-toggle="tooltip" data-placement="bottom" title="12% off">12%</span>
                                        </div>
                                    <div class="product-hover d-none d-lg-block d-xl-block">
                                        <div class="icons">

                                            <a class="icon active swipe-to-top is_liked" products_id="7" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                                                <i class="fas fa-heart"></i>
                                            </a>

                                            <div class="icon swipe-to-top modal_show " products_id ="7" data-toggle="tooltip" data-placement="bottom" title="Quick View">
                                                <i class="fas fa-eye"></i>
                                            </div>

                                            <a onclick="myFunction3(7)" class="icon swipe-to-top"  data-toggle="tooltip" data-placement="bottom" title="Compare"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                        </div>
                                        <a class="btn btn-block   btn-secondary cart swipe-to-top"  href="{{route('addToCart',[$detail->id])}}" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">Add to Cart</a>
                                    </div>
                                    <div class="mobile-icons d-lg-none d-xl-none">
                                        <div class="icons">
                                            <div class="icon-liked">

                                                <a class="icon active swipe-to-top is_liked" products_id="7">
                                                    <i class="fas fa-heart"></i>
                                                </a>

                                            </div>

                                            <div class="icon modal_show " products_id ="7">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                            <a onclick="myFunction3(7)" class="icon">
                                                <i class="fas fa-align-right" data-fa-transform="rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../images/media/2020/02/medium1582294883fkVVg21902.jpg" alt="3D stereo wireless earphone">
                                </div>

                                <div class="content">
                                <span class="tag">
                                  Cameras, Audio & Video
                                </span>
                                    <h5 class="title text-center"><a href="3d-stereo-wireless-earphone.html">3D stereo wireless earphone</a></h5>
                                    <div class="expand-detail">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      </div>
                                    <div class="price">
                                        $&nbsp;35&nbsp;
                                        <span> $40</span>
                                    </div>
                                </div>
                                <div class="mobile-buttons d-lg-none d-xl-none">
                                    <a href="{{route('addToCart',[$detail->id])}}" class="btn  btn-secondary cart">Add to Cart</a>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        function addtocart(product_id){
             let id =product_id;
             alert(id)
        $.get('{{route('addToCart',"+id+")}}' , function (response) {
            if (response == '1') {
                $('.loadr').addClass('d-none');
                window.location.replace(globalPublicPath + "/Advertiser/Dashboard/Manage-Campaign?id=q");
            }
        });
        }
    </script>
@endsection
