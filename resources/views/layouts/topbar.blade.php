<!-- ============== Topbar Start  ================== -->
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

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
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
                        src="{{ (isset(Auth::user()->avatar) && Auth::user()->avatar != '') ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
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
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('translation.Profile')</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i>
                        <span class="align-middle">@lang('translation.Messages')</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i>
                        <span class="align-middle">@lang('translation.Taskboard')</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('translation.Help')</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('translation.Balance'): <b>$6951.02</b></span></a>
                    <a class="dropdown-item d-flex align-items-center" href=""><i
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
</header>
<!-- ============== Topbar End  ================== -->
