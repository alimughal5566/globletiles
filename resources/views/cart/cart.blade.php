@extends('layouts.client.app')

@section('title','Cart Details')
@section('content')
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
            </ol>
        </div>
    </nav>
</div>
<!-- start-->
<section class="pro-content">
    <div class="container">
        <div class="page-heading-title">
            <h2>Shopping cart</h2>
        </div>
    </div>

    <section class=" cart-content">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-12 cart-area cart-page-one">
                    <div class="row">

                        <div class="col-12 col-lg-9">
                            <form method='POST' id="update_cart_form" action='http://laravel2.themes-coder.net/updateCart' >
                                <table class="table top-table">
                                </table>
                            </form>
                            <div class="col-12 col-lg-12 mb-4">
                                <div class="row justify-content-between click-btn">
                                    <div class="col-12 col-lg-4">
                                        <form id="apply_coupon" class="form-validate">
                                            <div class="row">
                                                <div class="input-group">
                                                    <input type="text" name="coupon_code" class="form-control" id="coupon_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="coupon-code">

                                                    <div class="">
                                                        <button class="btn btn-secondary swipe-to-top" type="submit" id="coupon-code">APPLY</button>
                                                    </div>
                                                </div>
                                                <div id="coupon_error" class="help-block" style="display: none;color:red;"></div>
                                                <div  id="coupon_require_error" class="help-block" style="display: none;color:red;">Please enter a valid coupon code</div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-lg-7 align-right">
                                        <div class="row">
                                            <a  href="shop.html" class="btn btn-secondary swipe-to-top">CONTINUE SHOPPING</a>
                                            <button class="btn btn-light swipe-to-top" id="update_cart">Update Cart</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <table class="table right-table">
                                <thead>
                                <tr>
                                    <th scope="col" colspan="2" align="center">Order Summary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Sub Total</th>
                                    <td align="right">
                                        $0
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Discount (Coupon)</th>
                                    <td align="right">$0</td>
                                </tr>
                                <tr class="item-price">
                                    <th scope="row">Total</th>
                                    <td align="right" >$0</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="login.html" class="btn btn-secondary m-btn col-12 swipe-to-top">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</section>

@endsection
