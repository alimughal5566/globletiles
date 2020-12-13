
@include('layouts.client.header');
<!-- NOTIFICATION CONTENT -->
<style>
    .top-alert {
        position: fixed;
        top: 0px;
        width: 100%;
        z-index: 100000;
        left: 0;
        padding: 20px;
        display: inline-block;
        text-align: center;
    }
    .top-alert .alert {
        width: auto !important;
        height: 100%;
        display: inline;
        position: relative;
        margin: 0;
    }
    .top-alert .alert .close {
        position: absolute;
        top: 11px;
        right: 10px;
        color: inherit;
    }

</style>
<!-- END NOTIFICATION CONTENT -->
<!-- End Header Content -->
<!-- NOTIFICATION CONTENT -->
<style>
    .top-alert {
        position: fixed;
        top: 0px;
        width: 100%;
        z-index: 100000;
        left: 0;
        padding: 20px;
        display: inline-block;
        text-align: center;
    }
    .top-alert .alert {
        width: auto !important;
        height: 100%;
        display: inline;
        position: relative;
        margin: 0;
    }
    .top-alert .alert .close {
        position: absolute;
        top: 11px;
        right: 10px;
        color: inherit;
    }

</style>
@if(Session::has('success'))
    <p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
<!-- Products content -->
@yield('content')
<!-- Products content -->


<!-- Footer content -->

@include('layouts.client.footer')

<!-- Button trigger modal -->

<!-- Product Modal -->

<a href="web/index.html#" id="back-to-top" class="btn-secondary swipe-to-top" title="Back to top">&uarr;</a>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="container" id="products-detail">

                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Include js plugin -->

<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />

<script src="../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<script src="{{asset('assets/js/scripts.js')}}"></script>

<script>

    jQuery(document).ready(function() {
        jQuery('#loader').hide();
    });

</script>

</body>
</html>
