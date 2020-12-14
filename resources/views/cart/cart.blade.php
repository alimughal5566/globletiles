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
                                    <thead>
                                    <tr>
                                    <th>Product Id</th>
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(session('cart'))
{{--                                        @dd(session('cart')[19]['name'])--}}
                                    @foreach(session('cart') as $key => $data)

                                        <tr>
                                        <th>{{@$key}}</th>
                                        <th><img src="{{url('black/images').'/'.$data['photo']}}" alt=""style="width: 100px;height: 100px"></th>

                                        <th>{{@$data['name']}}</th>
                                        <th>{{@$data['quantity']}}</th>
                                        <th onclick="total($data['price'])">{{@$data['price']}}</th>
                                        <th>
                                            <a href="{{route('deleteCart',[$key])}}" class="btn-sm btn-outline-danger">Delete</a>

                                        </th>


                                    </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </form>
                            <div class="col-12 col-lg-12 mb-4">
                                <div class="row justify-content-between click-btn">
                                    <div class="col-12 col-lg-4">
                                    </div>
                                    <div class="col-12 col-lg-7 align-right mt-2">
                                        <div class="row">
                                            <a  href="{{route('welcome')}}" class="btn btn-secondary swipe-to-top">CONTINUE SHOPPING</a>
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
                            @if(\Illuminate\Support\Facades\Auth::user())
                            <a href="{{route('checkOut')}}" class="btn btn-secondary m-btn col-12 swipe-to-top">Proceed To Checkout</a>
                            @else
                                <a href="{{route('login')}}" class="btn btn-secondary m-btn col-12 swipe-to-top">Proceed To Checkout</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</section>
@endsection
