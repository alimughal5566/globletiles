@extends('layouts.client.app')

@section('title','contect us')
@section('content')
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content">

    <div class="container">
        <div class="page-heading-title">
            <h2> Contact Us
            </h2>

        </div>
    </div>

    <section class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="form-start">


                                <form enctype="multipart/form-data" action="http://laravel2.themes-coder.net/processContactUs" method="post">
                                    <input name="_token" value="jizWWRfrbVpaEojwYkjWPxom8gGrhhglIlxKTHab" type="hidden">
                                    <label class="first-label" for="email">Full Name</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="name" name="name" placeholder="Please enter your name." aria-describedby="inputGroupPrepend" required>
                                        <div class="help-block error-content invalid-feedback" hidden>Please enter your name.</div>

                                    </div>
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <input type="email"  name="email" class="form-control" id="validationCustomUsername" placeholder="Enter Email here.." aria-describedby="inputGroupPrepend" required>
                                        <div class="help-block error-content invalid-feedback" hidden>Please enter your valid email address</div>
                                    </div>
                                    <label for="email">Message</label>
                                    <textarea type="text" name="message"  placeholder="write your message here..." rows="5" cols="56"></textarea>
                                    <div class="help-block error-content invalid-feedback" hidden>Please enter your message.</div>

                                    <button type="submit" class="btn btn-secondary swipe-to-top">Submit <i class="fas fa-location-arrow"></i>

                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <div id="map" style="height:400px; margin-top: 5px;">

                            </div>
                            <script>
                                var map;
                                function initMap() {
                                    map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: -34.397, lng: 150.644},
                                        zoom: 8
                                    });
                                }
                            </script>
                            <p class="info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                </p>
                        </div>
                        <div class="col-12 col-lg-3">

                            <div class="">
                                <ul class="contact-info pl-0 mb-0"  >
                                    <li> <i class="fas fa-mobile-alt"></i><span><a href="#">+92 312 1234567</a></span> </li>
                                    <li> <i class="fas fa-map-marker"></i><span><a href="#">Ecommerce<br>Demo Store 3654123</a></span> </li>
                                    <li> <i class="fas fa-envelope"></i><span> <a href="mailto:vectorcoder@gmail.com">vectorcoder@gmail.com</a> </span> </li>
                                    <li> <i class="fas fa-tty"></i><span> <a href="#">+92 312 1234567</a> </span> </li>

                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</section>
@endsection
