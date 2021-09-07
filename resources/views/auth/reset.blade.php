<!DOCTYPE html>
<html>

<!-- Mirrored from themesdesign.in/admiry/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 06:00:28 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>TCKLE | Admin</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- DataTables -->
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    @toastr_css

</head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                    
                            <h3>Tckle</h3>
                        </a>
                    </h3>

                    <h4 class="text-muted text-center font-18"><b>Admin Reset Password</b></h4>

                    <div class="p-3">
                    <form class="form-horizontal m-t-20" action="{{route('resetuser')}}" method="POST">
                        @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="email" class="form-control" type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="code" class="form-control" type="text" required="" placeholder="Verification Code">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="password" class="form-control" type="password" required="" placeholder="New Password">
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Update Password</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-md-12 m-t-20 text-center">
                                    Already Registered ? 
                                    <a href="{{route('user.login')}}" class="text-muted">
                                        Login
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/tether.min.js')}}"></script><!-- Tether for Bootstrap -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<!-- Required datatable js -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/pages/datatables.init.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{asset('assets/pages/dashborad.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>

@toastr_js
@toastr_render
@yield('scripts')
</body>

<!-- Mirrored from themesdesign.in/admiry/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 06:01:04 GMT -->

</html>