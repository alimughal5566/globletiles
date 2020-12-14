@extends('layouts.client.app')

@section('title','Check Out')

@section('content')
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CheckOut</li>
            </ol>
        </div>
    </nav>
</div>
<section class="page-area pro-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="col-12"><h4 class="heading login-heading">Order Information</h4></div>
                <div class="registration-process">


                    <form name="signup" enctype="multipart/form-data"  action="{{route('placeOrder')}}" method="post">
                        @csrf
                            <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>First Name</label></div>
                            <div class="input-group col-12">
                                <input required name="firstName" type="text" class="form-control field-validate" value="{{Auth::user()->f_name}}" id="firstName" placeholder="Please enter your first name" >
                                <span class="help-block" hidden>Please enter your first name</span>
                            </div>
                        </div>
                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>Last Name</label></div>
                            <div class="input-group col-12">
                                <input required name="lastName" type="text" class="form-control field-validate field-validate" id="lastName" placeholder="Please enter your first name" value="{{Auth::user()->l_name}}">
                                <span class="help-block" hidden>Please enter your last name</span>
                            </div>
                        </div>
                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>Email Address</label></div>
                            <div class="input-group col-12">
                                <input required name="email" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Your Email or Username" value="{{Auth::user()->email}}">
                                <span class="help-block" hidden>Please enter your valid email address</span>
                            </div>
                        </div>
                        <div class="from-group mb-3">
                            <div class="col-12"> <label for="inlineFormInputGroup"><strong style="color: red;">*</strong>Address</label></div>
                            <div class="input-group col-12">
                                <input required name="address" id="address" type="address" class="form-control"  placeholder="Please enter your address" value="{{Auth::user()->address}}">
                                <span class="help-block" hidden>Please enter your address</span>

                            </div>
                        </div>
                        <div class="from-group mb-3">
                            <div class="col-12" > <label for="inlineFormInputGroup"><strong  style="color: red;">*</strong>Payment</label></div>
                            <div class="input-group col-12">
                                <select class="form-control field-validate" name="payment" id="inlineFormCustomSelect" required>
                                    <option selected value="">Choose...</option>
                                    <option value="cod" >Cash On Delivery</option>
                                    <option value="online"  disabled>Online</option>
                                </select>
                                <span class="help-block" hidden>Select Payment Method</span>
                            </div>
                        </div>
                        <div class="from-group mb-3">
                            <div class="input-group col-12">
                                <input required style="margin:4px;"class="form-controlt checkbox-validate" type="checkbox">
                                 you are okay with our  &nbsp;<a href="{{route('terms')}}"> Terms and Services</a>, <a href="{{route('terms')}}"> Privacy Policy</a>  &nbsp; and &nbsp; <a href="{{route('terms')}}"> Refund Policy </a>.
                                <span class="help-block" hidden>Please accept our terms and conditions</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <button type="submit" class="btn btn-light swipe-to-top">Create an Account</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
