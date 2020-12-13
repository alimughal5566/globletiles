@extends('layouts.client.app')

@section('title','Company Details')
@section('content')
    <!-- Shop Page One content -->
    <div class="container-fuild">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ol>
            </div>
        </nav>
    </div>



    <section class="pro-content">
        <div class="container">
            <div class="page-heading-title">
                <h2>Company Details</h2>
            </div>
        </div>

        <section class="shop-content shop-two">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3  d-lg-block d-xl-block right-menu">
                        <div class="right-menu-categories">
{{--side category--}}
                            <a class=" main-manu"href=shope9f5.html?category=music-and-video-games> <img class="img-fuild" src="images/media/2020/02/oset421211.png"> Music and video games</a>
                        </div>



                        <form enctype="multipart/form-data" name="filters" id="test" method="get">
                            <input type="hidden" name="min_price" id="min_price" value="0">
                            <input type="hidden" name="max_price" id="max_price" value="501">
                            <input type="hidden" name="filters_applied" id="filters_applied" value="0">

                            <script>

                                jQuery(function () {

                                    var $range = jQuery(".js-range-slider"),
                                        $inputFrom = jQuery(".js-input-from"),
                                        $inputTo = jQuery(".js-input-to"),
                                        instance,
                                        min = 0,
                                        max = 501,
                                        from = 0,
                                        to = 0;
                                    $range.ionRangeSlider({
                                        type: "double",
                                        min: min,
                                        max: max,
                                        from: 0,
                                        to: 501,
                                        prefix: 'Rp. ',
                                        onStart: updateInputs,
                                        onChange: updateInputs,
                                        step: 1,
                                        prettify_enabled: true,
                                        prettify_separator: ".",
                                        values_separator: " - ",
                                        force_edges: true


                                    });

                                    instance = $range.data("ionRangeSlider");

                                    function updateInputs (data) {
                                        from = data.from;
                                        to = data.to;

                                        $inputFrom.prop("value", from);
                                        $inputTo.prop("value", to);
                                    }

                                    $inputFrom.on("input", function () {
                                        var val = $(this).prop("value");

                                        // validate
                                        if (val < min) {
                                            val = min;
                                        } else if (val > to) {
                                            val = to;
                                        }

                                        instance.update({
                                            from: val
                                        });
                                    });

                                    $inputTo.on("input", function () {
                                        var val = $(this).prop("value");

                                        // validate
                                        if (val < from) {
                                            val = from;
                                        } else if (val > max) {
                                            val = max;
                                        }

                                        instance.update({
                                            to: val

                                        });
                                    });

                                });

                                function getComboA(selectObject) {
                                    var value = selectObject.value;
                                    console.log(value);
                                }
                            </script>
                        </form>




                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="products-area">
                            <div class="top-bar">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-6">
                                                <div class="block">
                                                    <label>Display</label>
                                                    <div class="buttons">
                                                        <a href="javascript:void(0);" id="grid"><i class="fas fa-th-large"></i></a>
                                                        <a href="javascript:void(0);" id="list"><i class="fas fa-list"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">


                                                <form class="form-inline justify-content-end" id="load_products_form">
                                                    <input type="hidden"  name="load_products" value="1">

                                                    <input type="hidden"  name="products_style" id="products_style" value="grid">


                                                    <div class="form-group">
                                                        <label>Sort</label>
                                                        <div class="select-control">
                                                            <select name="type" id="sortbytype" class="form-control">
                                                                <option value="desc" >Newest</option>
                                                                <option value="atoz" >A - Z</option>
                                                                <option value="ztoa" >Z - A</option>
                                                                <option value="hightolow" >Price: High To Low</option>
                                                                <option value="lowtohigh" >Price: Low To High</option>
                                                                <option value="topseller" >Top Seller</option>
                                                                <option value="special" >Special Products</option>
                                                                <option value="mostliked" >Most Liked</option>
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label>Limit</label>
                                                        <div class="select-control">
                                                            <select class="form-control"name="limit"id="sortbylimit">
                                                                <option value="15" >15</option>
                                                                <option value="30" >30</option>
                                                                <option value="60" >60</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <section id="swap" class="shop-content" >
                                <div class="products-area">
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-12 col-lg-4 col-sm-6 griding">
                                            <div class="product">
                                                <article>
                                                    <div class="thumb">
                                                        <div class="badges">
                                                        </div>
                                                        <div class="product-hover d-none d-lg-block d-xl-block">
                                                            <div class="icons">

                                                                <a class="icon active swipe-to-top is_liked" products_id="17" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                                                                    <i class="fas fa-heart"></i>
                                                                </a>

                                                                <div class="icon swipe-to-top modal_show " products_id ="17" data-toggle="tooltip" data-placement="bottom" title="View Detail">
                                                                    <a href="{{route('ProductDetails',[$product->id])}}"><i class="fas fa-eye"></i></a>
                                                                </div>

                                                                <a onclick="myFunction3(17)" class="icon swipe-to-top"  data-toggle="tooltip" data-placement="bottom" title="Compare"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                                            </div>
                                                            <b class="btn btn-block  btn-secondary cart swipe-to-top" href="{{route('addToCart',[$product->id])}}" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">Add to Cart</button>


                                                        </div>
                                                        <div class="mobile-icons d-lg-none d-xl-none">
                                                            <div class="icons">
                                                                <div class="icon-liked">

                                                                    <a class="icon active swipe-to-top is_liked" products_id="17">
                                                                        <i class="fas fa-heart"></i>
                                                                    </a>

                                                                </div>

                                                                <div class="icon modal_show " products_id ="17">
                                                                    <i class="fas fa-eye"></i>
                                                                </div>
                                                                <a onclick="myFunction3(17)" class="icon">
                                                                    <i class="fas fa-align-right" data-fa-transform="rotate-90"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <img class="img-fluid" src="{{url('black/images').'/'.$product->thumbnail}}" alt="110V 220V Household Appliances">
                                                    </div>

                                                    <div class="content">
      <span class="tag">
      Category: {{$product->category->name}}
      </span>
                                                        <h5 class="title text-center"><a href="{{route('ProductDetails',[$product->id])}}">Model:{{$product->name}}</a></h5>
                                                        <div class="expand-detail">
                                                            <p>{{$product->description}}</p>      </div>
                                                        <div class="price">
                                                           Rs : {{$product->price}}

                                                        </div>
                                                    </div>


                                                    <div class="mobile-buttons d-lg-none d-xl-none">
                                                        <a class="btn  btn-secondary cart" href="{{route('addToCart',[$product->id])}}">Add to Cart</button>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        @endforeach
                                        <script>
                                            function myFunction3(product_id) {
                                                jQuery(function ($) {
                                                    jQuery.ajax({
                                                        beforeSend: function (xhr) { // Add this line
                                                            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                                                        },
                                                        url: 'http://laravel2.themes-coder.net/addToCompare',
                                                        type: "POST",
                                                        data: {"product_id":product_id,"_token": "jizWWRfrbVpaEojwYkjWPxom8gGrhhglIlxKTHab"},
                                                        success: function (res) {
                                                            var obj = JSON.parse(res);
                                                            var message = obj.message;

                                                            if(obj.success!=0){
                                                                $('#compare').html(res);
                                                                message = "Product is ready to compare!";
                                                            }
                                                            notificationWishlist(message);
                                                        },
                                                    });
                                                });
                                            }
                                        </script>

                                    </div>
                                </div>
                            </section>
                        </div>


                        <div class="float-right">
                            {{$products->links()}}
                        </div>

                    </div>



                </div>
            </div>

            </div>
        </section>

    </section>

    </section>


    <script>
        function myFunction3(product_id) {
            jQuery(function ($) {
                jQuery.ajax({
                    beforeSend: function (xhr) { // Add this line
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                    },
                    url: 'http://laravel2.themes-coder.net/addToCompare',
                    type: "POST",
                    data: {"product_id":product_id,"_token": "jizWWRfrbVpaEojwYkjWPxom8gGrhhglIlxKTHab"},
                    success: function (res) {
                        var obj = JSON.parse(res);
                        var message = obj.message;

                        if(obj.success!=0){
                            $('#compare').html(res);
                            message = "Product is ready to compare!";
                        }
                        notificationWishlist(message);
                    },
                });
            });
        }
    </script>

@endsection
