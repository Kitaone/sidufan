<?php 
use Illuminate\Support\Facades\URL;
use App\Models\Apps;
$apps = Apps::get();
?>
<header id="page-topbar" style="padding-top: 5px; padding-bottom: 5px;">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{url('assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{url('assets/images/logo-dark.png')}}" alt="" height="17">
                        </span>
                    </a>
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{url('assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{url('assets/images/logo-light.png')}}" alt="" height="17">
                        </span>
                    </a>
                </div>
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span>
                        </span>
                        <span>
                        </span>
                        <span>
                        </span>
                    </span>
                </button>
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon">
                        </span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options">
                        </span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar style="max-height: 320px;">
                            <div class="dropdown-header">
                                <h6 class="text-overflow text-muted mb-0 text-uppercase">
                                    Recent Searches
                                </h6>
                            </div>
                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">
                                    how to setup 
                                    <i class="mdi mdi-magnify ms-1">
                                    </i>
                                </a>
                                <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">
                                    buttons 
                                    <i class="mdi mdi-magnify ms-1">
                                    </i>
                                </a>
                            </div>
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-1 text-uppercase">
                                    Pages
                                </h6>
                            </div>
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2">
                                </i>
                                <span>
                                    Analytics Dashboard
                                </span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2">
                                </i>
                                <span>
                                    Help Center
                                </span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2">
                                </i>
                                <span>
                                    My account settings
                                </span>
                            </a>
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-2 text-uppercase">
                                    Members
                                </h6>
                            </div>
                            <div class="notification-list">
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{url('assets/images/users/avatar-2.jpg')}}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">
                                                Angela Bernier
                                            </h6>
                                            <span class="fs-11 mb-0 text-muted">
                                                Manager
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{url('assets/images/users/avatar-3.jpg')}}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">
                                                David Grasso
                                            </h6>
                                            <span class="fs-11 mb-0 text-muted">
                                                Web Designer
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{url('assets/images/users/avatar-5.jpg')}}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">
                                                Mike Bunch
                                            </h6>
                                            <span class="fs-11 mb-0 text-muted">
                                                React Developer
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-center pt-3 pb-1">
                            <a href="pages-search-results.html" class="btn btn-primary btn-sm">
                                View All Results 
                                <i class="ri-arrow-right-line ms-1">
                                </i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22">
                        </i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="mdi mdi-magnify">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-category-alt fs-22'>
                        </i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fw-semibold fs-15">
                                        Web Apps 
                                    </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="{{url::to('/sia/choose-app')}}" class="btn btn-sm btn-soft-info">
                                        View All Apps
                                        <i class="ri-arrow-right-s-line align-middle">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="row g-0">
                                <?php foreach ($apps as $row): ?>
                                <div class="col-4">
                                    <a class="dropdown-icon-item" href="{{url::to('sia/module/'.base64_encode($row->id))}}">
                                        <?php echo $row->icon != null ? '<i class="'.$row->icon.'"></i>' : '' ?>
                                        <span>
                                            {{$row->name}}
                                        </span>
                                    </a>
                                </div>
                                <?php endforeach ?>
                                <!-- <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="{{url('assets/images/brands/github.png')}}" alt="Github">
                                        <span>
                                            GitHub
                                        </span>
                                    </a>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'>
                        </i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>