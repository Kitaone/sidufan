<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>
        Sistem Penilaian Online Terpadu | Al Azhar
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{url('assets/images/logo.png')}}">
    <script src="{{url('assets/js/layout.js')}}">
    </script>
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
    <div id="layout-wrapper">
        @include('layouts.header')
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px">
                            </lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>
                                    Are you sure ?
                                </h4>
                                <p class="text-muted mx-4 mb-0">
                                    Are you sure you want to remove this Notification ?
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">
                                Yes, Delete It!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.nav')
        <div class="vertical-overlay">
        </div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">
                                    Sistem Penilaian Oneline Terpadu
                                </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">
                                            <a href="javascript: void(0);">
                                                Pages
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            Sistem Penilaian Oneline Terpadu
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line">
        </i>
    </button>
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">
                    Loading...
                </span>
            </div>
        </div>
    </div>
    <script src="{{url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}">
    </script>
    <script src="{{url('assets/libs/simplebar/simplebar.min.js')}}">
    </script>
    <script src="{{url('assets/libs/node-waves/waves.min.js')}}">
    </script>
    <script src="{{url('assets/libs/feather-icons/feather.min.js')}}">
    </script>
    <script src="{{url('assets/js/pages/plugins/lord-icon-2.1.0.js')}}">
    </script>
    <script src="{{url('assets/js/plugins.js')}}">
    </script>
    <script src="{{url('assets/js/app.js')}}">
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
    });
    </script>
    @yield('script')
</body>

</html>