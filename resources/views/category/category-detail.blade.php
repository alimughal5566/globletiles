@extends('layouts.client.app')

@section('title','Category Details')
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
                <h2>Category Details</h2>
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

                                                    <script type="text/javascript">
                                                        window.onload = function() {


                                                        }
                                                        jQuery(document).on('click', '#apply_options_btn', function(e){
                                                            if (jQuery('input:checkbox.filters_box:checked').length > 0) {
                                                                jQuery('#filters_applied').val(1);
                                                                jQuery('#apply_options_btn').removeAttr('disabled');
                                                            } else {
                                                                jQuery('#filters_applied').val(0);
                                                                jQuery('#apply_options_btn').attr('disabled',true);
                                                            }
                                                            jQuery('#load_products_form').submit();
                                                            jQuery('#test').submit();

                                                        })


                                                        //sortby
                                                        document.getElementById('sortbytype').addEventListener('change',function(){
                                                            jQuery("#load_products_form").submit();

                                                        });

                                                        //sortby
                                                        document.getElementById('sortbylimit').addEventListener('change',function(){
                                                            jQuery("#load_products_form").submit();

                                                        });

                                                        //Display grid/list 3 Column
                                                        jQuery(document).ready(function () {


                                                            // jQuery('#list_3column').on('click', function(){
                                                            //     jQuery( '#swap .col-12' ).removeClass( 'griding' );
                                                            //     jQuery( '#swap .col-12' ).removeClass( 'col-lg-4' );
                                                            //     jQuery( '#swap .col-12' ).removeClass( 'col-sm-6' );
                                                            //     jQuery( '#swap .col-12' ).addClass( 'listing' );
                                                            //     jQuery( this ).addClass( 'active' );
                                                            //     jQuery( '#grid_3column' ).removeClass( 'active' );
                                                            // });
                                                            // jQuery('#grid_3column').on('click', function(){
                                                            //     jQuery( '#swap .col-12' ).removeClass( 'listing' );
                                                            //     jQuery( '#swap .col-12' ).addClass( 'col-lg-4' );
                                                            //     jQuery( '#swap .col-12' ).addClass( 'col-sm-6' );

                                                            //     jQuery( '#swap .col-12' ).addClass( 'griding' );
                                                            //     jQuery( this ).addClass( 'active' );
                                                            //     jQuery( '#list_3column' ).removeClass( 'active' );
                                                            // });

                                                            jQuery('#list').on('click', function(){
                                                                jQuery( '#products_style' ).val( 'list' );
                                                                jQuery( '#swap .col-12' ).removeClass( 'griding' );
                                                                jQuery( '#swap .col-12' ).removeClass( 'col-lg-4' );
                                                                jQuery( '#swap .col-12' ).removeClass( 'col-sm-6' );
                                                                jQuery( '#swap .col-12' ).addClass( 'listing' );
                                                                jQuery( this ).addClass( 'active' );
                                                                jQuery( '#grid' ).removeClass( 'active' );

                                                                jQuery( '#cart_button32' ).show();
                                                                jQuery( '#view_button32' ).show();
                                                                jQuery( '#added_button32' ).show();
                                                                jQuery( '#cart_button232' ).show();
                                                                jQuery( '#view_button232' ).show();
                                                                jQuery( '#added_button232' ).show();
                                                                jQuery( '#out_button32' ).show();


                                                                jQuery( '#cart_button31' ).show();
                                                                jQuery( '#view_button31' ).show();
                                                                jQuery( '#added_button31' ).show();
                                                                jQuery( '#cart_button231' ).show();
                                                                jQuery( '#view_button231' ).show();
                                                                jQuery( '#added_button231' ).show();
                                                                jQuery( '#out_button31' ).show();


                                                                jQuery( '#cart_button30' ).show();
                                                                jQuery( '#view_button30' ).show();
                                                                jQuery( '#added_button30' ).show();
                                                                jQuery( '#cart_button230' ).show();
                                                                jQuery( '#view_button230' ).show();
                                                                jQuery( '#added_button230' ).show();
                                                                jQuery( '#out_button30' ).show();


                                                                jQuery( '#cart_button29' ).show();
                                                                jQuery( '#view_button29' ).show();
                                                                jQuery( '#added_button29' ).show();
                                                                jQuery( '#cart_button229' ).show();
                                                                jQuery( '#view_button229' ).show();
                                                                jQuery( '#added_button229' ).show();
                                                                jQuery( '#out_button29' ).show();


                                                                jQuery( '#cart_button28' ).show();
                                                                jQuery( '#view_button28' ).show();
                                                                jQuery( '#added_button28' ).show();
                                                                jQuery( '#cart_button228' ).show();
                                                                jQuery( '#view_button228' ).show();
                                                                jQuery( '#added_button228' ).show();
                                                                jQuery( '#out_button28' ).show();


                                                                jQuery( '#cart_button27' ).show();
                                                                jQuery( '#view_button27' ).show();
                                                                jQuery( '#added_button27' ).show();
                                                                jQuery( '#cart_button227' ).show();
                                                                jQuery( '#view_button227' ).show();
                                                                jQuery( '#added_button227' ).show();
                                                                jQuery( '#out_button27' ).show();


                                                                jQuery( '#cart_button26' ).show();
                                                                jQuery( '#view_button26' ).show();
                                                                jQuery( '#added_button26' ).show();
                                                                jQuery( '#cart_button226' ).show();
                                                                jQuery( '#view_button226' ).show();
                                                                jQuery( '#added_button226' ).show();
                                                                jQuery( '#out_button26' ).show();


                                                                jQuery( '#cart_button25' ).show();
                                                                jQuery( '#view_button25' ).show();
                                                                jQuery( '#added_button25' ).show();
                                                                jQuery( '#cart_button225' ).show();
                                                                jQuery( '#view_button225' ).show();
                                                                jQuery( '#added_button225' ).show();
                                                                jQuery( '#out_button25' ).show();


                                                                jQuery( '#cart_button24' ).show();
                                                                jQuery( '#view_button24' ).show();
                                                                jQuery( '#added_button24' ).show();
                                                                jQuery( '#cart_button224' ).show();
                                                                jQuery( '#view_button224' ).show();
                                                                jQuery( '#added_button224' ).show();
                                                                jQuery( '#out_button24' ).show();


                                                                jQuery( '#cart_button22' ).show();
                                                                jQuery( '#view_button22' ).show();
                                                                jQuery( '#added_button22' ).show();
                                                                jQuery( '#cart_button222' ).show();
                                                                jQuery( '#view_button222' ).show();
                                                                jQuery( '#added_button222' ).show();
                                                                jQuery( '#out_button22' ).show();


                                                                jQuery( '#cart_button21' ).show();
                                                                jQuery( '#view_button21' ).show();
                                                                jQuery( '#added_button21' ).show();
                                                                jQuery( '#cart_button221' ).show();
                                                                jQuery( '#view_button221' ).show();
                                                                jQuery( '#added_button221' ).show();
                                                                jQuery( '#out_button21' ).show();


                                                                jQuery( '#cart_button20' ).show();
                                                                jQuery( '#view_button20' ).show();
                                                                jQuery( '#added_button20' ).show();
                                                                jQuery( '#cart_button220' ).show();
                                                                jQuery( '#view_button220' ).show();
                                                                jQuery( '#added_button220' ).show();
                                                                jQuery( '#out_button20' ).show();


                                                                jQuery( '#cart_button19' ).show();
                                                                jQuery( '#view_button19' ).show();
                                                                jQuery( '#added_button19' ).show();
                                                                jQuery( '#cart_button219' ).show();
                                                                jQuery( '#view_button219' ).show();
                                                                jQuery( '#added_button219' ).show();
                                                                jQuery( '#out_button19' ).show();


                                                                jQuery( '#cart_button18' ).show();
                                                                jQuery( '#view_button18' ).show();
                                                                jQuery( '#added_button18' ).show();
                                                                jQuery( '#cart_button218' ).show();
                                                                jQuery( '#view_button218' ).show();
                                                                jQuery( '#added_button218' ).show();
                                                                jQuery( '#out_button18' ).show();


                                                                jQuery( '#cart_button17' ).show();
                                                                jQuery( '#view_button17' ).show();
                                                                jQuery( '#added_button17' ).show();
                                                                jQuery( '#cart_button217' ).show();
                                                                jQuery( '#view_button217' ).show();
                                                                jQuery( '#added_button217' ).show();
                                                                jQuery( '#out_button17' ).show();

                                                            });
                                                            jQuery('#grid').on('click', function(){

                                                                jQuery( '#products_style' ).val( 'grid' );

                                                                jQuery( '#swap .col-12' ).removeClass( 'listing' );
                                                                jQuery( '#swap .col-12' ).addClass( 'col-lg-4' );
                                                                jQuery( '#swap .col-12' ).addClass( 'col-sm-6' );

                                                                jQuery( '#swap .col-12' ).addClass( 'griding' );
                                                                jQuery( this ).addClass( 'active' );
                                                                jQuery( '#list' ).removeClass( 'active' );

                                                                jQuery( '#cart_button32' ).hide();
                                                                jQuery( '#view_button32' ).hide();
                                                                jQuery( '#added_button32' ).hide();
                                                                jQuery( '#cart_button232' ).hide();
                                                                jQuery( '#view_button232' ).hide();
                                                                jQuery( '#added_button232' ).hide();
                                                                jQuery( '#out_button32' ).hide();


                                                                jQuery( '#cart_button31' ).hide();
                                                                jQuery( '#view_button31' ).hide();
                                                                jQuery( '#added_button31' ).hide();
                                                                jQuery( '#cart_button231' ).hide();
                                                                jQuery( '#view_button231' ).hide();
                                                                jQuery( '#added_button231' ).hide();
                                                                jQuery( '#out_button31' ).hide();


                                                                jQuery( '#cart_button30' ).hide();
                                                                jQuery( '#view_button30' ).hide();
                                                                jQuery( '#added_button30' ).hide();
                                                                jQuery( '#cart_button230' ).hide();
                                                                jQuery( '#view_button230' ).hide();
                                                                jQuery( '#added_button230' ).hide();
                                                                jQuery( '#out_button30' ).hide();


                                                                jQuery( '#cart_button29' ).hide();
                                                                jQuery( '#view_button29' ).hide();
                                                                jQuery( '#added_button29' ).hide();
                                                                jQuery( '#cart_button229' ).hide();
                                                                jQuery( '#view_button229' ).hide();
                                                                jQuery( '#added_button229' ).hide();
                                                                jQuery( '#out_button29' ).hide();


                                                                jQuery( '#cart_button28' ).hide();
                                                                jQuery( '#view_button28' ).hide();
                                                                jQuery( '#added_button28' ).hide();
                                                                jQuery( '#cart_button228' ).hide();
                                                                jQuery( '#view_button228' ).hide();
                                                                jQuery( '#added_button228' ).hide();
                                                                jQuery( '#out_button28' ).hide();


                                                                jQuery( '#cart_button27' ).hide();
                                                                jQuery( '#view_button27' ).hide();
                                                                jQuery( '#added_button27' ).hide();
                                                                jQuery( '#cart_button227' ).hide();
                                                                jQuery( '#view_button227' ).hide();
                                                                jQuery( '#added_button227' ).hide();
                                                                jQuery( '#out_button27' ).hide();


                                                                jQuery( '#cart_button26' ).hide();
                                                                jQuery( '#view_button26' ).hide();
                                                                jQuery( '#added_button26' ).hide();
                                                                jQuery( '#cart_button226' ).hide();
                                                                jQuery( '#view_button226' ).hide();
                                                                jQuery( '#added_button226' ).hide();
                                                                jQuery( '#out_button26' ).hide();


                                                                jQuery( '#cart_button25' ).hide();
                                                                jQuery( '#view_button25' ).hide();
                                                                jQuery( '#added_button25' ).hide();
                                                                jQuery( '#cart_button225' ).hide();
                                                                jQuery( '#view_button225' ).hide();
                                                                jQuery( '#added_button225' ).hide();
                                                                jQuery( '#out_button25' ).hide();


                                                                jQuery( '#cart_button24' ).hide();
                                                                jQuery( '#view_button24' ).hide();
                                                                jQuery( '#added_button24' ).hide();
                                                                jQuery( '#cart_button224' ).hide();
                                                                jQuery( '#view_button224' ).hide();
                                                                jQuery( '#added_button224' ).hide();
                                                                jQuery( '#out_button24' ).hide();


                                                                jQuery( '#cart_button22' ).hide();
                                                                jQuery( '#view_button22' ).hide();
                                                                jQuery( '#added_button22' ).hide();
                                                                jQuery( '#cart_button222' ).hide();
                                                                jQuery( '#view_button222' ).hide();
                                                                jQuery( '#added_button222' ).hide();
                                                                jQuery( '#out_button22' ).hide();


                                                                jQuery( '#cart_button21' ).hide();
                                                                jQuery( '#view_button21' ).hide();
                                                                jQuery( '#added_button21' ).hide();
                                                                jQuery( '#cart_button221' ).hide();
                                                                jQuery( '#view_button221' ).hide();
                                                                jQuery( '#added_button221' ).hide();
                                                                jQuery( '#out_button21' ).hide();


                                                                jQuery( '#cart_button20' ).hide();
                                                                jQuery( '#view_button20' ).hide();
                                                                jQuery( '#added_button20' ).hide();
                                                                jQuery( '#cart_button220' ).hide();
                                                                jQuery( '#view_button220' ).hide();
                                                                jQuery( '#added_button220' ).hide();
                                                                jQuery( '#out_button20' ).hide();


                                                                jQuery( '#cart_button19' ).hide();
                                                                jQuery( '#view_button19' ).hide();
                                                                jQuery( '#added_button19' ).hide();
                                                                jQuery( '#cart_button219' ).hide();
                                                                jQuery( '#view_button219' ).hide();
                                                                jQuery( '#added_button219' ).hide();
                                                                jQuery( '#out_button19' ).hide();


                                                                jQuery( '#cart_button18' ).hide();
                                                                jQuery( '#view_button18' ).hide();
                                                                jQuery( '#added_button18' ).hide();
                                                                jQuery( '#cart_button218' ).hide();
                                                                jQuery( '#view_button218' ).hide();
                                                                jQuery( '#added_button218' ).hide();
                                                                jQuery( '#out_button18' ).hide();


                                                                jQuery( '#cart_button17' ).hide();
                                                                jQuery( '#view_button17' ).hide();
                                                                jQuery( '#added_button17' ).hide();
                                                                jQuery( '#cart_button217' ).hide();
                                                                jQuery( '#view_button217' ).hide();
                                                                jQuery( '#added_button217' ).hide();
                                                                jQuery( '#out_button17' ).hide();



                                                            });


                                                        });

                                                        //load more products
                                                        jQuery(document).on('click', '#load_products', function(e){
                                                            jQuery('#loader').css('display','flex');
                                                            var page_number = jQuery('#page_number').val();
                                                            var total_record = jQuery('#total_record').val();
                                                            var products_style = jQuery('#products_style').val();
                                                            var formData = jQuery("#load_products_form").serialize();
                                                            jQuery.ajax({
                                                                headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
                                                                url: 'http://laravel2.themes-coder.net/filterProducts',
                                                                type: "POST",
                                                                data: formData,
                                                                success: function (res) {
                                                                    if(jQuery.trim().res==0){
                                                                        jQuery('#load_products').hide();
                                                                        jQuery('#loaded_content').show();
                                                                    }else{
                                                                        page_number++;
                                                                        jQuery('#page_number').val(page_number);
                                                                        jQuery('#swap .row').append(res);
                                                                        var record_limit = jQuery('#record_limit').val();
                                                                        var showing_record = page_number*record_limit;
                                                                        if(total_record<=showing_record){
                                                                            jQuery('.showing_record').html(total_record);
                                                                            jQuery('#load_products').hide();
                                                                            jQuery('#loaded_content').show();
                                                                        }else{
                                                                            jQuery('.showing_record').html(showing_record);
                                                                        }
                                                                    }

                                                                    if(products_style == 'list'){
                                                                        jQuery( '#swap .col-12' ).removeClass( 'griding' );
                                                                        jQuery( '#swap .col-12' ).removeClass( 'col-lg-4' );
                                                                        jQuery( '#swap .col-12' ).removeClass( 'col-sm-6' );
                                                                        jQuery( '#swap .col-12' ).addClass( 'listing' );
                                                                    }else{
                                                                        jQuery( '#swap .col-12' ).removeClass( 'listing' );
                                                                        jQuery( '#swap .col-12' ).addClass( 'col-lg-4' );
                                                                        jQuery( '#swap .col-12' ).addClass( 'col-sm-6' );
                                                                        jQuery( '#swap .col-12' ).addClass( 'griding' );
                                                                    }

                                                                    jQuery('#loader').hide();
                                                                },
                                                            });
                                                        });

                                                    </script>
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
                                                                <a class="btn btn-block  btn-secondary cart swipe-to-top"  data-toggle="tooltip" data-placement="bottom" href="{{route('addToCart',[$product->id])}}" title="Add to Cart">Add to Cart</a>


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
                                                            <a href="{{route('addToCart',[$product->id])}}" class="btn  btn-secondary cart">Add to Cart</a>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        @endforeach

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
