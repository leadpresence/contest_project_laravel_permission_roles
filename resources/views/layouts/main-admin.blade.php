<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>National Inventors Challenge :: @yield('title', 'Home')</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/charts-c3/plugin.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/morrisjs/morris.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/charts-c3/plugin.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/sweetalert/sweetalert.css" />

    <!-- Custom Css -->

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.min.css">

</head>

<body class="theme-blush">

    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="NIC"></div>
        <p>Please wait...</p>
    </div>
</div> -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Main Search -->
    <div id="search">
        <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>


    @include('includes.aside-left-admin')

    <!-- Right Sidebar -->
    @include('includes.aside-right-admin')


    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                        <!-- <a href="edit_profile" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-edit"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @include('includes.message')

                @yield("content")
            </div>
        </div>
    </section>

</body>

<!-- Jquery Core Js -->
<script src="{{ asset('/') }}assets/js/pages/blog/blog.js"></script>

<script src="{{ asset('/') }}assets/bundles/libscripts.bundle.js"></script>
<!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{ asset('/') }}assets/bundles/vendorscripts.bundle.js"></script>
<!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{ asset('/') }}assets/bundles/mainscripts.bundle.js"></script>
<script src="{{ asset('/') }}assets/plugins/dropify/js/dropify.min.js"></script>
<script src="{{ asset('/') }}assets/js/pages/forms/dropify.js"></script>

<script src="{{ asset('/') }}assets/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('/') }}assets/js/pages/tables/footable.js"></script><!-- Custom Js -->

<script src="{{ asset('/') }}assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
<script src="{{ asset('/') }}assets/js/pages/charts/sparkline.js"></script>
<script src="{{ asset('/') }}assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('/') }}assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script><!-- USA Map Js -->
<script src="{{ asset('/') }}assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="{{ asset('/') }}assets/bundles/c3.bundle.js"></script>
<script src="{{ asset('/') }}assets/plugins/echart/echarts.min.js"></script>
<script type="text/javascript">
         $(function () {
             $('#datetimepicker5').datetimepicker({
                 defaultDate: "11/1/2013",
                 disabledDates: [
                     moment("12/25/2013"),
                     new Date(2013, 11 - 1, 21),
                     "11/22/2013 00:53"
                 ]
             });
         });
      </script>

<script src="{{ asset('/') }}assets/js/pages/charts/echart.js"></script>
<script src="{{ asset('/') }}assets/js/pages/ui/sweetalert.js"></script>
<script src="{{ asset('/') }}assets/plugins/sweetalert/sweetalert.min.js"></script>
<!-- Jquery DataTable Plugin Js --> 
<script src="{{ asset('/') }}assets/bundles/datatablescripts.bundle.js"></script>
<script src="{{ asset('/') }}assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="{{ asset('/') }}assets/js/pages/tables/jquery-datatable.js"></script>
<script src="{{ asset('/') }}assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="{{ asset('/') }}assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
<script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js -->

<script src="assets/plugins/select2/select2.min.js"></script> <!-- Select2 Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 
</body>

</html>
