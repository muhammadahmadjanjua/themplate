<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="22">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="22">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item collapsed" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content" aria-expanded="false">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="dropdown d-none d-lg-block ms-2">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="false"
                    aria-expanded="false">
                    <span>@lang('translation.Components')</span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-xl p-2">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="dropdown-item" href="#!">@lang('translation.Alerts')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Buttons')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Cards')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Dropdowns')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Lightbox')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Modals')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Range_Slider')</a>
                        </div>
                        <div class="col-md-6">
                            <a class="dropdown-item" href="#!">@lang('translation.Progress_Bars')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Sweet-Alert')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Tabs_&_Accordions')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Typography')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.General')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Rating')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Notifications')</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown dropdown-mega d-none d-lg-block">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="false"
                    aria-expanded="false">
                    <span>@lang('translation.Categories')</span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu p-2 dropdown-megamenu">
                    <div class="row">
                        <div class="col">
                            <h5 class="font-size-14 mx-4 mt-2">@lang('translation.Computers_&_Accessories')</h5>
                            <a class="dropdown-item" href="#!">@lang('translation.Laptops_&_Tablets')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Desktop_Computers')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Networking_Products_(NAS)')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Monitors')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Bags,_Cases__Sleeves')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Batteries')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Charges__Adapters')</a>
                        </div>
                        <div class="col">
                            <h5 class="font-size-14 ms-4 mt-2">@lang('translation.Smartphones_&_Tablets')</h5>
                            <a class="dropdown-item" href="#!">@lang('translation.Apple_iPhone')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Android_Smartphones')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Phablets')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Apple_iPad')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Android_Tablets')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Tablets_with_Keyboard')</a>
                        </div>
                        <div class="col">
                            <h5 class="font-size-14 ms-4 mt-2">@lang('translation.Television_&_Video')</h5>
                            <a class="dropdown-item" href="#!">@lang('translation.TV_Sets')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Home_Theater_Systems')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.DVD_Players_&_Recorders')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.DVD-VCR_Combos')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Projectors')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Projection_Screens')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Satelite_Television')</a>
                        </div>
                        <div class="col">
                            <h5 class="font-size-14 ms-4 mt-2">@lang('translation.Cameras,_Photo_&_Video')</h5>
                            <a class="dropdown-item" href="#!">@lang('translation.Point_&_Shoot_Digital_Cameras')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.DSLR_Cameras')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Mirrorless_Cameras')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Body_Mounted_Cameras')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Camera_Lenses')</a>
                            <a class="dropdown-item" href="#!">@lang('translation.Video_Studio')</a>
                        </div>
                        <div class="col">
                            <div class="py-lg-2 pr-lg-2">
                                <img src="{{ URL::asset('assets/images/illustrator/1.png') }}" alt=""
                                    class="img-fluid mx-auto" style="max-height: 250px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="icon-sm" data-feather="search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <form class="p-2">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded bg-light border-0"
                                    placeholder="@lang('translation.Search...')">
                                <i class="mdi mdi-magnify search-icon"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    @switch(Session::get('lang'))
                        @case('ru')
                            <img src="{{ URL::asset('/assets/images/flags/russia.jpg') }}" alt="Header Language"
                                height="16">
                        @break
                        @case('it')
                            <img src="{{ URL::asset('/assets/images/flags/italy.jpg') }}" alt="Header Language"
                                height="16">
                        @break
                        @case('de')
                            <img src="{{ URL::asset('/assets/images/flags/germany.jpg') }}" alt="Header Language"
                                height="16">
                        @break
                        @case('es')
                            <img src="{{ URL::asset('/assets/images/flags/spain.jpg') }}" alt="Header Language"
                                height="16">
                        @break
                        @default
                            <img src="{{ URL::asset('/assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
                    @endswitch
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <a href="{{ url('index/en') }}" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="{{ URL::asset('/assets/images/flags/us.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="{{ url('index/es') }}" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="{{ URL::asset('/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/de') }}" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="{{ URL::asset('/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/it') }}" class="dropdown-item notify-item language" data-lang="it">
                        <img src="{{ URL::asset('/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/ru') }}" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="{{ URL::asset('/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">Russian</span>
                    </a>

                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="icon-sm" data-feather="grid"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <div class="p-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> @lang('translation.Web_Apps')</h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small fw-semibold text-decoration-underline">
                                    @lang('translation.View_All')</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 270px;">
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('assets/images/brands/slack.png') }}" alt="slack">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">@lang('translation.Slack')</h6>
                                    <p class="font-size-12 text-muted mb-0">
                                        @lang('translation.This_is_your_moment._Let’s_reinvent_work.')
                                    </p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('assets/images/brands/behance.png') }}" alt="behance">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">@lang('translation.Behance')<span
                                            class="badge bg-warning badge-pill ml-1">@lang('translation.Free')</span>
                                    </h6>
                                    <p class="font-size-12 text-muted mb-0">
                                        @lang('translation.Showcase_your_work.')</p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('assets/images/brands/dribbble.png') }}" alt="dribbble">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">@lang('translation.Dribbble')</h6>
                                    <p class="font-size-12 text-muted mb-0">
                                        @lang('translation.Dribbble_is_the_world’s_leading_community_for_creatives_to_share,_grow,_and_get_hired.')
                                    </p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('assets/images/brands/dropbox.png') }}" alt="dropbox">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">@lang('translation.Dropbox')</h6>
                                    <p class="font-size-12 text-muted mb-0">
                                        @lang('translation.Keep_life_organized_and_work_moving—all_in_one_place')
                                    </p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('assets/images/brands/mail_chimp.png') }}"
                                        alt="mail_chimp">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">@lang('translation.Mail_Chimp')<span
                                            class="badge bg-danger badge-pill ml-1">@lang('translation.Premium')</span>
                                    </h6>
                                    <p class="font-size-12 text-muted mb-0">
                                        @lang('translation.The_best_value_for_your_digital_marketing_budget')
                                    </p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('assets/images/brands/github.png') }}" alt="github">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">@lang('translation.Github')</h6>
                                    <p class="font-size-12 text-muted mb-0">
                                        @lang('translation.Where_the_world_builds_software')</p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                    </div><!-- end simplebar -->
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="bell"></i>
                    <span class="noti-dot bg-danger"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> @lang('translation.Notifications')
                                </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small">
                                    @lang('translation.Mark_all_as_read')</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <h6 class="dropdown-header bg-light">@lang('translation.New')</h6>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}"
                                        class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">@lang('translation.Justin_Verduzco')</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">
                                            @lang('translation.Your_task_changed_an_issue_from_"In_Progress"_to_')<span
                                                class="badge badge-soft-success">@lang('translation.Review')</span>
                                        </p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i>
                                            @lang('translation.1_hours_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="uil-shopping-basket"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">@lang('translation.New_order_has_been_placed')
                                    </h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">
                                            @lang('translation.Open_the_order_confirmation_or_shipment_confirmation.')
                                        </p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i>
                                            @lang('translation.5_hours_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h6 class="dropdown-header bg-light">@lang('translation.Earlier')</h6>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span
                                            class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                            <i class="uil-truck"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">@lang('translation.Your_item_is_shipped')</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">
                                            @lang('translation.Here_is_somthing_that_you_might_light_like_to_know.')
                                        </p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i>
                                            @lang('translation.1_day_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                        class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">@lang('translation.Salena_Layfield')</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">
                                            @lang('translation.Yay_!_Everything_worked!')</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i>
                                            @lang('translation.3_days_ago')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i>
                            <span>@lang('translation.View_More..')</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle">
                    <i class="icon-sm" data-feather="settings"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ isset(Auth::user()->profile_pic) ? asset('/assets/images/profile/' . Auth::user()->profile_pic) : asset('/assets/images/users/avatar-1.jpg') }}"
                        alt="Header Avatar">
                    <span class="ms-2 d-none d-sm-block user-item-desc">
                        <span class="user-name">{{ Auth::user()->name }}</span>
                        <span class="user-sub-title">Administrator</span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 bg-primary border-bottom">
                        <h6 class="mb-0 text-white">{{ Auth::user()->name }}</h6>
                        <p class="mb-0 font-size-11 text-white-50 fw-semibold">{{ Auth::user()->email }}</p>
                    </div>
                    <a class="dropdown-item" href="{{ URL::asset('pages-profile') }}"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('translation.Profile')</span></a>
                    <a class="dropdown-item" href="{{ URL::asset('apps-chat') }}"><i
                            class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i>
                        <span class="align-middle">@lang('translation.Messages')</span></a>
                    <a class="dropdown-item" href="{{ URL::asset('apps-kanban-board') }}"><i
                            class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i>
                        <span class="align-middle">@lang('translation.Taskboard')</span></a>
                    <a class="dropdown-item" href="{{ URL::asset('pages-faqs') }}"><i
                            class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('translation.Help')</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ URL::asset('pages-profile') }}"><i
                            class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('translation.Balance'): <b>$6951.02</b></span></a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ URL::asset('user-settings') }}"><i
                            class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('translation.Settings')</span><span
                            class="badge badge-soft-success ms-auto">@lang('translation.New')</span></a>
                    <a class="dropdown-item" href="{{ URL::asset('auth-lockscreen-basic') }}"><i
                            class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('translation.Lock_screen')</span></a>

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i>
                        @lang('translation.Logout')
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="monitor"></i>
                                <span data-key="t-dashboards">@lang('translation.Dashboards')</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                <a href="{{ URL::asset('index') }}" class="dropdown-item"
                                    data-key="t-sales">@lang('translation.Sales')</a>
                                <a href="{{ URL::asset('dashboards-analytics') }}" class="dropdown-item"
                                    data-key="t-analytics">@lang('translation.Analytics')</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="package"></i>
                                <span data-key="t-elements">@lang('translation.Elements')</span>
                                <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                aria-labelledby="topnav-uielement">
                                <div class="ps-2 p-lg-0">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>
                                                <div class="menu-title">Components</div>
                                                <div class="row g-0">
                                                    <div class="col-lg-5">
                                                        <div>
                                                            <a href="{{ URL::asset('ui-alerts') }}"
                                                                class="dropdown-item"
                                                                data-key="t-alerts">@lang('translation.Alerts')</a>
                                                            <a href="{{ URL::asset('ui-buttons') }}"
                                                                class="dropdown-item"
                                                                data-key="t-buttons">@lang('translation.Buttons')</a>
                                                            <a href="{{ URL::asset('ui-cards') }}"
                                                                class="dropdown-item"
                                                                data-key="t-cards">@lang('translation.Cards')</a>
                                                            <a href="{{ URL::asset('ui-carousel') }}"
                                                                class="dropdown-item"
                                                                data-key="t-carousel">@lang('translation.Carousel')</a>
                                                            <a href="{{ URL::asset('ui-dropdowns') }}"
                                                                class="dropdown-item"
                                                                data-key="t-dropdowns">@lang('translation.Dropdowns')</a>
                                                            <a href="{{ URL::asset('ui-grid') }}"
                                                                class="dropdown-item"
                                                                data-key="t-grid">@lang('translation.Grid')</a>
                                                            <a href="{{ URL::asset('ui-images') }}"
                                                                class="dropdown-item"
                                                                data-key="t-images">@lang('translation.Images')</a>
                                                            <a href="{{ URL::asset('ui-modals') }}"
                                                                class="dropdown-item"
                                                                data-key="t-modals">@lang('translation.Modals')</a>
                                                            <a href="{{ URL::asset('ui-offcanvas') }}"
                                                                class="dropdown-item"
                                                                data-key="t-offcanvas">@lang('translation.Offcanvas')</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div>
                                                            <a href="{{ URL::asset('ui-placeholders') }}"
                                                                class="dropdown-item"
                                                                data-key="t-placeholders">@lang('translation.Placeholders')</a>
                                                            <a href="{{ URL::asset('ui-progressbars') }}"
                                                                class="dropdown-item"
                                                                data-key="t-progress-bars">@lang('translation.Progress_Bars')</a>
                                                            <a href="{{ URL::asset('ui-tabs-accordions') }}"
                                                                class="dropdown-item"
                                                                data-key="t-tabs-accordions">@lang('translation.Tabs_&_Accordions')</a>
                                                            <a href="{{ URL::asset('ui-typography') }}"
                                                                class="dropdown-item"
                                                                data-key="t-typography">@lang('translation.Typography')</a>
                                                            <a href="{{ URL::asset('ui-video') }}"
                                                                class="dropdown-item"
                                                                data-key="t-video">@lang('translation.Video')</a>
                                                            <a href="{{ URL::asset('ui-general') }}"
                                                                class="dropdown-item"
                                                                data-key="t-general">@lang('translation.General')</a>
                                                            <a href="{{ URL::asset('ui-colors') }}"
                                                                class="dropdown-item"
                                                                data-key="t-colors">@lang('translation.Colors')</a>
                                                            <a href="{{ URL::asset('ui-utilities') }}"
                                                                class="dropdown-item"
                                                                data-key="t-utilities">@lang('translation.Utilities')</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div>
                                                <div class="menu-title">Extended</div>
                                                <div>
                                                    <a href="{{ URL::asset('extended-lightbox') }}"
                                                        class="dropdown-item"
                                                        data-key="t-lightbox">@lang('translation.Lightbox')</a>
                                                    <a href="{{ URL::asset('extended-rangeslider') }}"
                                                        class="dropdown-item"
                                                        data-key="t-range-slider">@lang('translation.Range_Slider')</a>
                                                    <a href="{{ URL::asset('extended-sweet-alert') }}"
                                                        class="dropdown-item"
                                                        data-key="t-sweet-alert">@lang('translation.SweetAlert_2')</a>
                                                    <a href="{{ URL::asset('extended-rating') }}"
                                                        class="dropdown-item"
                                                        data-key="t-rating">@lang('translation.Rating')</a>
                                                    <a href="{{ URL::asset('extended-notifications') }}"
                                                        class="dropdown-item"
                                                        data-key="t-notifications">@lang('translation.Notifications')</a>
                                                    <a href="{{ URL::asset('extended-swiperslider') }}"
                                                        class="dropdown-item"
                                                        data-key="t-swiperslider">@lang('translation.Swiper_Slider')</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="grid"></i>
                                <span data-key="t-apps">@lang('translation.Apps')</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                <a href="{{ URL::asset('apps-calendar') }}" class="dropdown-item"
                                    data-key="t-calendar">@lang('translation.Calendar')</a>
                                <a href="{{ URL::asset('apps-chat') }}" class="dropdown-item"
                                    data-key="t-chat">@lang('translation.Chat')</a>
                                <a href="{{ URL::asset('apps-kanban-board') }}" class="dropdown-item"
                                    data-key="t-kanban">@lang('translation.Kanban_Board')</a>
                                <a href="{{ URL::asset('apps-file-manager') }}" class="dropdown-item"
                                    data-key="t-filemanager">@lang('translation.File_Manager')</a>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-email">@lang('translation.Email')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                        <a href="{{ URL::asset('email-inbox') }}" class="dropdown-item"
                                            data-key="t-inbox">@lang('translation.Inbox')</a>
                                        <a href="{{ URL::asset('email-read') }}" class="dropdown-item"
                                            data-key="t-read-email">@lang('translation.Read_Email')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-contacts">@lang('translation.Contacts')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                        <a href="{{ URL::asset('contacts-grid') }}" class="dropdown-item"
                                            data-key="t-user-grid">@lang('translation.User_Grid')</a>
                                        <a href="{{ URL::asset('contacts-list') }}" class="dropdown-item"
                                            data-key="t-user-list">@lang('translation.User_List')</a>
                                        <a href="{{ URL::asset('user-settings') }}" class="dropdown-item"
                                            data-key="t-user-settings">@lang('translation.User_Settings')</a>
                                    </div>
                                </div>

                                <a href="{{ URL::asset('apps-gallery') }}" class="dropdown-item"
                                    data-key="t-gallery">@lang('translation.Gallery')</a>


                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-projects"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-projects">@lang('translation.Projects')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-projects">
                                        <a href="{{ URL::asset('projects-grid') }}" class="dropdown-item"
                                            data-key="t-p-grid">@lang('translation.Projects_Grid')</a>
                                        <a href="{{ URL::asset('projects-list') }}" class="dropdown-item"
                                            data-key="t-p-list">@lang('translation.Projects_List')</a>
                                        <a href="{{ URL::asset('projects-overview') }}" class="dropdown-item"
                                            data-key="t-p-overview">@lang('translation.Project_Overview')</a>
                                        <a href="{{ URL::asset('projects-create') }}" class="dropdown-item"
                                            data-key="t-create-new">@lang('translation.Create_New')</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="layers"></i>
                                <span data-key="t-components">@lang('translation.Components')</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                <a href="{{ URL::asset('widgets') }}" class="dropdown-item"
                                    data-key="t-widgets">@lang('translation.Widgets')</a>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-forms">@lang('translation.Forms')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                        <a href="{{ URL::asset('form-elements') }}" class="dropdown-item"
                                            data-key="t-basic-elements">@lang('translation.Basic_Elements')</a>
                                        <a href="{{ URL::asset('form-validation') }}" class="dropdown-item"
                                            data-key="t-validation">@lang('translation.Validation')</a>
                                        <a href="{{ URL::asset('form-advanced') }}" class="dropdown-item"
                                            data-key="t-advanced-plugins">@lang('translation.Advanced_Plugins')</a>
                                        <a href="{{ URL::asset('form-editors') }}" class="dropdown-item"
                                            data-key="t-editors">@lang('translation.Editors')</a>
                                        <a href="{{ URL::asset('form-uploads') }}" class="dropdown-item"
                                            data-key="t-file-upload">@lang('translation.File_Upload')</a>
                                        <a href="{{ URL::asset('form-wizard') }}" class="dropdown-item"
                                            data-key="t-wizard">@lang('translation.Wizard')</a>
                                        <a href="{{ URL::asset('form-mask') }}" class="dropdown-item"
                                            data-key="t-mask">@lang('translation.Mask')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-tables">@lang('translation.Tables')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="{{ URL::asset('tables-basic') }}" class="dropdown-item"
                                            data-key="t-bootstrap-basic">@lang('translation.Bootstrap_Basic')</a>
                                        <a href="{{ URL::asset('tables-advanced') }}" class="dropdown-item"
                                            data-key="t-advanced-tables">@lang('translation.Advance_Tables')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-apex-charts">@lang('translation.Apex_Charts')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                        <a href="{{ URL::asset('charts-line') }}" class="dropdown-item"
                                            data-key="t-line">@lang('translation.Line')</a>
                                        <a href="{{ URL::asset('charts-area') }}" class="dropdown-item"
                                            data-key="t-area">@lang('translation.Area')</a>
                                        <a href="{{ URL::asset('charts-column') }}" class="dropdown-item"
                                            data-key="t-column">@lang('translation.Column')</a>
                                        <a href="{{ URL::asset('charts-bar') }}" class="dropdown-item"
                                            data-key="t-bar">@lang('translation.Bar')</a>
                                        <a href="{{ URL::asset('charts-mixed') }}" class="dropdown-item"
                                            data-key="t-mixed">@lang('translation.Mixed')</a>
                                        <a href="{{ URL::asset('charts-timeline') }}" class="dropdown-item"
                                            data-key="t-timeline">@lang('translation.Timeline')</a>
                                        <a href="{{ URL::asset('charts-candlestick') }}" class="dropdown-item"
                                            data-key="t-candlestick">@lang('translation.chart_candlestick')</a>
                                        <a href="{{ URL::asset('charts-boxplot') }}" class="dropdown-item"
                                            data-key="t-boxplot">@lang('translation.Boxplot')</a>
                                        <a href="{{ URL::asset('charts-bubble') }}" class="dropdown-item"
                                            data-key="t-bubble">@lang('translation.Bubble')</a>
                                        <a href="{{ URL::asset('charts-scatter') }}" class="dropdown-item"
                                            data-key="t-scatter">@lang('translation.Scatter')</a>
                                        <a href="{{ URL::asset('charts-heatmap') }}" class="dropdown-item"
                                            data-key="t-heatmap">@lang('translation.Heatmap')</a>
                                        <a href="{{ URL::asset('charts-treemap') }}" class="dropdown-item"
                                            data-key="t-treemap">@lang('translation.Treemap')</a>
                                        <a href="{{ URL::asset('charts-pie') }}" class="dropdown-item"
                                            data-key="t-pie">@lang('translation.Pie')</a>
                                        <a href="charts-radialbar" class="dropdown-item"
                                            data-key="t-radialbar">@lang('translation.Radialbar')</a>
                                        <a href="{{ URL::asset('charts-radar') }}" class="dropdown-item"
                                            data-key="t-radar">@lang('translation.Radar')</a>
                                        <a href="{{ URL::asset('charts-polararea') }}" class="dropdown-item"
                                            data-key="t-polararea">@lang('translation.Polararea')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-icons">@lang('translation.Icons')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                        <a href="{{ URL::asset('icons-unicons') }}" class="dropdown-item"
                                            data-key="t-unicons">@lang('translation.Unicons')</a>
                                        <a href="{{ URL::asset('icons-feathericons') }}" class="dropdown-item"
                                            data-key="t-feather-icons">@lang('translation.Feather_icons')</a>
                                        <a href="{{ URL::asset('icons-boxicons') }}" class="dropdown-item"
                                            data-key="t-boxicons">@lang('translation.icon_boxicons')</a>
                                        <a href="{{ URL::asset('icons-materialdesign') }}" class="dropdown-item"
                                            data-key="t-material-design">@lang('translation.Material_Design')</a>
                                        <a href="{{ URL::asset('icons-fontawesome') }}" class="dropdown-item"
                                            data-key="t-font-awesome">@lang('translation.Font_Awesome_5')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-maps">@lang('translation.Maps')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                        <a href="{{ URL::asset('maps-google') }}" class="dropdown-item"
                                            data-key="t-google">@lang('translation.Google')</a>
                                        <a href="{{ URL::asset('maps-vector') }}" class="dropdown-item"
                                            data-key="t-vector">@lang('translation.Vector')</a>
                                        <a href="{{ URL::asset('maps-leaflet') }}" class="dropdown-item"
                                            data-key="t-leaflet">@lang('translation.Leaflet')</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="icon nav-icon" data-feather="file"></i>
                                <span data-key="t-extra-pages">@lang('translation.Extra_pages')</span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-pricing"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-pricing">@lang('translation.Pricing')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pricing">
                                        <a href="{{ URL::asset('pricing-basic') }}" class="dropdown-item"
                                            data-key="t-basic">@lang('translation.Basic')</a>
                                        <a href="{{ URL::asset('pricing-table') }}" class="dropdown-item"
                                            data-key="t-table">@lang('translation.Table')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoices"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-invoices">@lang('translation.Invoices')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                        <a href="{{ URL::asset('invoices-list') }}" class="dropdown-item"
                                            data-key="t-invoice-list">@lang('translation.Invoice_List')</a>
                                        <a href="{{ URL::asset('invoices-detail') }}" class="dropdown-item"
                                            data-key="t-invoice-detail">@lang('translation.Invoice_Detail')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-timeline"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-timeline">@lang('translation.Timeline')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-timeline">
                                        <a href="{{ URL::asset('timeline-center') }}" class="dropdown-item"
                                            data-key="t-center-view">@lang('translation.Center_View')</a>
                                        <a href="{{ URL::asset('timeline-left') }}" class="dropdown-item"
                                            data-key="t-left-view">@lang('translation.Left_View')</a>
                                        <a href="{{ URL::asset('timeline-horizontal') }}" class="dropdown-item"
                                            data-key="t-horizontal-view">@lang('translation.Horizontal_View')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-authentication">@lang('translation.Authentication')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-auth-basic" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span data-key="t-basic">@lang('translation.Basic')</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-auth-basic">
                                                <a href="{{ URL::asset('auth-signin-basic') }}"
                                                    class="dropdown-item"
                                                    data-key="t-signin">@lang('translation.Sign_In')</a>
                                                <a href="{{ URL::asset('auth-signup-basic') }}"
                                                    class="dropdown-item"
                                                    data-key="t-signup">@lang('translation.Sign_Up')</a>
                                                <a href="{{ URL::asset('auth-signout-basic') }}"
                                                    class="dropdown-item"
                                                    data-key="t-signout">@lang('translation.Sign_Out')</a>
                                                <a href="{{ URL::asset('auth-lockscreen-basic') }}"
                                                    class="dropdown-item"
                                                    data-key="t-lock-screen">@lang('translation.Lock_Screen')</a>
                                                <a href="{{ URL::asset('auth-forgotpassword-basic') }}"
                                                    class="dropdown-item"
                                                    data-key="t-forgot-password">@lang('translation.Forgot_Password')</a>
                                                <a href="{{ URL::asset('auth-resetpassword-basic') }}"
                                                    class="dropdown-item"
                                                    data-key="t-reset-password">@lang('translation.Reset_Password')</a>
                                                <a href="{{ URL::asset('auth-emailverification-basic') }}"
                                                    class="dropdown-item"
                                                    data-key="t-email-verification">@lang('translation.Email_Verification')</a>
                                                <a href="{{ URL::asset('auth-2step-basic') }}" class="dropdown-item"
                                                    data-key="t-2step-verification">@lang('translation.2-step_Verification')</a>
                                                <a href="{{ URL::asset('auth-thankyou-basic') }}"
                                                    class="dropdown-item"
                                                    data-key="t-thankyou">@lang('translation.Thank_you')</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-auth-cover" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span data-key="t-cover">@lang('translation.Cover')</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-auth-cover">
                                                <a href="{{ URL::asset('auth-signin-cover') }}"
                                                    class="dropdown-item"
                                                    data-key="t-signin">@lang('translation.Sign_In')</a>
                                                <a href="{{ URL::asset('auth-signup-cover') }}"
                                                    class="dropdown-item"
                                                    data-key="t-signup">@lang('translation.Sign_Up')</a>
                                                <a href="{{ URL::asset('auth-signout-cover') }}"
                                                    class="dropdown-item"
                                                    data-key="t-signout">@lang('translation.Sign_Out')</a>
                                                <a href="{{ URL::asset('auth-lockscreen-cover') }}"
                                                    class="dropdown-item"
                                                    data-key="t-lock-screen">@lang('translation.Lock_Screen')</a>
                                                <a href="{{ URL::asset('auth-forgotpassword-cover') }}"
                                                    class="dropdown-item"
                                                    data-key="t-forgot-password">@lang('translation.Forgot_Password')</a>
                                                <a href="{{ URL::asset('auth-resetpassword-cover') }}"
                                                    class="dropdown-item"
                                                    data-key="t-reset-password">@lang('translation.Reset_Password')</a>
                                                <a href="{{ URL::asset('auth-emailverification-cover') }}"
                                                    class="dropdown-item"
                                                    data-key="t-email-verification">@lang('translation.Email_Verification')</a>
                                                <a href="{{ URL::asset('auth-2step-cover') }}" class="dropdown-item"
                                                    data-key="t-2step-verification">@lang('translation.2-step_Verification')</a>
                                                <a href="{{ URL::asset('auth-thankyou-cover') }}"
                                                    class="dropdown-item"
                                                    data-key="t-thankyou">@lang('translation.Thank_you')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-error-pages">@lang('translation.Error_Pages')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-error">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-404"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span>404</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-404">
                                                <a href="{{ URL::asset('error-404-basic') }}" class="dropdown-item"
                                                    data-key="t-basic">@lang('translation.Basic')</a>
                                                <a href="{{ URL::asset('error-404-cover') }}" class="dropdown-item"
                                                    data-key="t-cover">@lang('translation.Cover')</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-500"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span>500</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-500">
                                                <a href="{{ URL::asset('error-500-basic') }}" class="dropdown-item"
                                                    data-key="t-basic">@lang('translation.Basic')</a>
                                                <a href="{{ URL::asset('error-500-cover') }}" class="dropdown-item"
                                                    data-key="t-cover">@lang('translation.Cover')</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span data-key="t-utility">@lang('translation.Utility')</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                        <a href="{{ URL::asset('pages-starter') }}" class="dropdown-item"
                                            data-key="t-starter-page">@lang('translation.Starter_Page')</a>
                                        <a href="{{ URL::asset('pages-profile') }}" class="dropdown-item"
                                            data-key="t-profile">@lang('translation.Profile')</a>
                                        <a href="{{ URL::asset('pages-maintenance') }}" class="dropdown-item"
                                            data-key="t-maintenance">@lang('translation.Maintenance')</a>
                                        <a href="{{ URL::asset('pages-comingsoon') }}" class="dropdown-item"
                                            data-key="t-coming-soon">@lang('translation.Coming_Soon')</a>
                                        <a href="{{ URL::asset('pages-faqs') }}" class="dropdown-item"
                                            data-key="t-faqs">@lang('translation.FAQs')</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link arrow-none" href="{{ URL::asset('layouts-horizontal') }}">
                                <i class="icon nav-icon" data-feather="layout"></i>
                                <span data-key="t-horizontal">@lang('translation.Horizontal')</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>

</header>
