<div class="vertical-menu">

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
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="22">
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm-light.png') }}" alt="" height="22">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-dashboards">@lang('translation.Dashboards')</li>

                <li>
                    <a href="index">
                        <i class="icon nav-icon" data-feather="monitor"></i>
                        <span class="menu-item" data-key="t-sales">@lang('translation.Sales')</span>
                        <span class="badge rounded-pill badge-soft-secondary">5+</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="icon nav-icon" data-feather="pie-chart"></i>
                        <span class="menu-item" data-key="t-analytics">@lang('translation.Analytics')</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">@lang('translation.Applications')</li>

                <li>
                    <a href="#">
                        <i class="icon nav-icon" data-feather="calendar"></i>
                        <span class="menu-item" data-key="t-calendar">@lang('translation.Calendar')</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="icon nav-icon" data-feather="message-square"></i>
                        <span class="menu-item" data-key="t-chat">@lang('translation.Chat')</span>
                        <span class="badge rounded-pill badge-soft-danger"
                            data-key="t-hot">@lang('translation.Hot')</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="icon nav-icon" data-feather="trello"></i>
                        <span class="menu-item" data-key="t-kanban">@lang('translation.Kanban_Board')</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="icon nav-icon" data-feather="folder"></i>
                        <span class="menu-item" data-key="t-filemanager">@lang('translation.File_Manager')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="mail"></i>
                        <span class="menu-item" data-key="t-email">@lang('translation.Email')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-inbox">@lang('translation.Inbox')</a></li>
                        <li><a href="#" data-key="t-read-email">@lang('translation.Read_Email')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="book"></i>
                        <span class="menu-item" data-key="t-contacts">@lang('translation.Contacts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-user-grid">@lang('translation.User_Grid')</a></li>
                        <li><a href="#" data-key="t-user-list">@lang('translation.User_List')</a></li>
                        <li><a href="#" data-key="t-user-settings">@lang('translation.User_Settings')</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="icon nav-icon" data-feather="image"></i>
                        <span class="menu-item" data-key="t-gallery">@lang('translation.Gallery')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="briefcase"></i>
                        <span class="menu-item" data-key="t-projects">@lang('translation.Projects')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-p-grid">@lang('translation.Projects_Grid')</a></li>
                        <li><a href="#" data-key="t-p-list">@lang('translation.Projects_List')</a></li>
                        <li><a href="#"
                                data-key="t-p-overview">@lang('translation.Project_Overview')</a></li>
                        <li><a href="#" data-key="t-create-new">@lang('translation.Create_New')</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-layouts">@lang('translation.Layouts')</li>

                <li>
                    <a href="layouts-horizontal">
                        <i class="icon nav-icon" data-feather="layout"></i>
                        <span class="menu-item" data-key="t-horizontal">@lang('translation.Horizontal')</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-pages">@lang('translation.Pages')</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-feather="user"></i>
                        <span class="menu-item" data-key="t-authentication">@lang('translation.Authentication')</span>
                        <span class="badge rounded-pill bg-info">9</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-signin">@lang('translation.Sign_In')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#" data-key="t-basic">@lang('translation.Basic')</a></li>
                                <li><a href="#" data-key="t-cover">@lang('translation.Cover')</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-signup">@lang('translation.Sign_Up')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#" data-key="t-basic">@lang('translation.Basic')</a></li>
                                <li><a href="#" data-key="t-cover">@lang('translation.Cover')</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-signout">@lang('translation.Sign_Out')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#" data-key="t-basic">@lang('translation.Basic')</a></li>
                                <li><a href="#" data-key="t-cover">@lang('translation.Cover')</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-lock-screen">@lang('translation.Lock_Screen')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#" data-key="t-basic">@lang('translation.Basic')</a>
                                </li>
                                <li><a href="#" data-key="t-cover">@lang('translation.Cover')</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-forgot-password">@lang('translation.Forgot_Password')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#"
                                        data-key="t-basic">@lang('translation.Basic')</a></li>
                                <li><a href="#"
                                        data-key="t-cover">@lang('translation.Cover')</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-reset-password">@lang('translation.Reset_Password')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#" data-key="t-basic">@lang('translation.Basic')</a>
                                </li>
                                <li><a href="#" data-key="t-cover">@lang('translation.Cover')</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-email-verification">@lang('translation.Email_Verification')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#"
                                        data-key="t-basic">@lang('translation.Basic')</a></li>
                                <li><a href="#"
                                        data-key="t-cover">@lang('translation.Cover')</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-2step-verification">@lang('translation.2-step_Verification')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#" data-key="t-basic">@lang('translation.Basic')</a></li>
                                <li><a href="#" data-key="t-cover">@lang('translation.Cover')</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-thankyou">@lang('translation.Thank_you')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#" data-key="t-basic">@lang('translation.Basic')</a></li>
                                <li><a href="#" data-key="t-cover">@lang('translation.Cover')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="alert-circle"></i>
                        <span class="menu-item" data-key="t-error-pages">@lang('translation.Error_Pages')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="#" data-key="t-error-404-basic">@lang('translation.404_Basic')</a>
                        </li>
                        <li><a href="#" data-key="t-error-404-cover">@lang('translation.404_Cover')</a>
                        </li>
                        <li><a href="#" data-key="t-error-500-basic">@lang('translation.500_Basic')</a>
                        </li>
                        <li><a href="#" data-key="t-error-500-cover">@lang('translation.500_Cover')</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="file-text"></i>
                        <span class="menu-item" data-key="t-utility">@lang('translation.Utility')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-starter-page">@lang('translation.Starter_Page')</a></li>
                        <li><a href="#" data-key="t-profile">@lang('translation.Profile')</a></li>
                        <li><a href="#" data-key="t-maintenance">@lang('translation.Maintenance')</a>
                        </li>
                        <li><a href="#" data-key="t-coming-soon">@lang('translation.Coming_Soon')</a>
                        </li>
                        <li><a href="#" data-key="t-faqs">@lang('translation.FAQs')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="tag"></i>
                        <span class="menu-item" data-key="t-pricing">@lang('translation.Pricing')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-basic">@lang('translation.Basic')</a></li>
                        <li><a href="#" data-key="t-table">@lang('translation.Table')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="file"></i>
                        <span class="menu-item" data-key="t-invoices">@lang('translation.Invoices')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-invoice-list">@lang('translation.Invoice_List')</a></li>
                        <li><a href="#"
                                data-key="t-invoice-detail">@lang('translation.Invoice_Detail')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="award"></i>
                        <span class="menu-item" data-key="t-timeline">@lang('translation.Timeline')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-center-view">@lang('translation.Center_View')</a></li>
                        <li><a href="#" data-key="t-left-view">@lang('translation.Left_View')</a></li>
                        <li><a href="#"
                                data-key="t-horizontal-view">@lang('translation.Horizontal_View')</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-components">@lang('translation.Components')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="package"></i>
                        <span class="menu-item" data-key="t-ui-elements">@lang('translation.UI_Elements')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-alerts">@lang('translation.Alerts')</a></li>
                        <li><a href="#" data-key="t-buttons">@lang('translation.Buttons')</a></li>
                        <li><a href="#" data-key="t-cards">@lang('translation.Cards')</a></li>
                        <li><a href="#" data-key="t-carousel">@lang('translation.Carousel')</a></li>
                        <li><a href="#" data-key="t-dropdowns">@lang('translation.Dropdowns')</a></li>
                        <li><a href="#" data-key="t-grid">@lang('translation.Grid')</a></li>
                        <li><a href="#" data-key="t-images">@lang('translation.Images')</a></li>
                        <li><a href="#" data-key="t-modals">@lang('translation.Modals')</a></li>
                        <li><a href="#" data-key="t-offcanvas">@lang('translation.Offcanvas')</a></li>
                        <li><a href="#" data-key="t-placeholders">@lang('translation.Placeholders')</a>
                        </li>
                        <li><a href="#" data-key="t-progress-bars">@lang('translation.Progress_Bars')</a>
                        </li>
                        <li><a href="#-accordions"
                                data-key="t-tabs-accordions">@lang('translation.Tabs_&_Accordions')</a>
                        </li>
                        <li><a href="#" data-key="t-typography">@lang('translation.Typography')</a></li>
                        <li><a href="#" data-key="t-video">@lang('translation.Video')</a></li>
                        <li><a href="#" data-key="t-general">@lang('translation.General')</a></li>
                        <li><a href="#" data-key="t-colors">@lang('translation.Colors')</a></li>
                        <li><a href="#" data-key="t-utilities">@lang('translation.Utilities')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="cpu"></i>
                        <span class="menu-item" data-key="t-extend-ui">@lang('translation.Extended_UI')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-lightbox">@lang('translation.Lightbox')</a></li>
                        <li><a href="#"
                                data-key="t-range-slider">@lang('translation.Range_Slider')</a></li>
                        <li><a href="#-alert" data-key="t-sweetalert">@lang('translation.SweetAlert_2')</a>
                        </li>
                        <li><a href="#" data-key="t-rating">@lang('translation.Rating')</a></li>
                        <li><a href="#"
                                data-key="t-notifications">@lang('translation.Notifications')</a></li>
                        <li><a href="#"
                                data-key="t-swiperslider">@lang('translation.Swiper_Slider')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets">
                        <i class="icon nav-icon" data-feather="grid"></i>
                        <span class="menu-item" data-key="t-widgets">@lang('translation.Widgets')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="edit-3"></i>
                        <span class="menu-item" data-key="t-forms">@lang('translation.Forms')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-basic-elements">@lang('translation.Basic_Elements')</a>
                        </li>
                        <li><a href="#" data-key="t-validation">@lang('translation.Validation')</a></li>
                        <li><a href="#"
                                data-key="t-advanced-plugins">@lang('translation.Advanced_Plugins')</a></li>
                        <li><a href="#" data-key="t-editors">@lang('translation.Editors')</a></li>
                        <li><a href="#" data-key="t-file-upload">@lang('translation.File_Upload')</a></li>
                        <li><a href="#" data-key="t-wizard">@lang('translation.Wizard')</a></li>
                        <li><a href="#" data-key="t-mask">@lang('translation.Mask')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="database"></i>
                        <span class="menu-item" data-key="t-tables">@lang('translation.Tables')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-bootstrap-basic">@lang('translation.Bootstrap_Basic')</a>
                        </li>
                        <li><a href="#"
                                data-key="t-advanced-tables">@lang('translation.Advance_Tables')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="bar-chart-2"></i>
                        <span class="menu-item" data-key="t-apex-charts">@lang('translation.Apex_Charts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-line">@lang('translation.Line')</a></li>
                        <li><a href="#" data-key="t-area">@lang('translation.Area')</a></li>
                        <li><a href="#" data-key="t-column">@lang('translation.Column')</a></li>
                        <li><a href="#" data-key="t-bar">@lang('translation.Bar')</a></li>
                        <li><a href="#" data-key="t-mixed">@lang('translation.Mixed')</a></li>
                        <li><a href="#" data-key="t-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="#" data-key="t-candlestick">Candlestick</a></li>
                        <li><a href="#" data-key="t-boxplot">@lang('translation.Boxplot')</a></li>
                        <li><a href="#" data-key="t-bubble">@lang('translation.Bubble')</a></li>
                        <li><a href="#" data-key="t-scatter">@lang('translation.Scatter')</a></li>
                        <li><a href="#" data-key="t-heatmap">@lang('translation.Heatmap')</a></li>
                        <li><a href="#" data-key="t-treemap">@lang('translation.Treemap')</a></li>
                        <li><a href="#" data-key="t-pie">@lang('translation.Pie')</a></li>
                        <li><a href="#" data-key="t-radialbar">@lang('translation.Radialbar')</a></li>
                        <li><a href="#" data-key="t-radar">@lang('translation.Radar')</a></li>
                        <li><a href="#" data-key="t-polararea">@lang('translation.Polararea')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="archive"></i>
                        <span class="menu-item" data-key="t-icons">@lang('translation.Icons')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-unicons">@lang('translation.Unicons')</a></li>
                        <li><a href="#"
                                data-key="t-feather-icons">@lang('translation.Feather_icons')</a></li>
                        <li><a href="#" data-key="t-boxicons">Boxicons</a></li>
                        <li><a href="#"
                                data-key="t-material-design">@lang('translation.Material_Design')</a></li>
                        <li><a href="#"
                                data-key="t-font-awesome">@lang('translation.Font_Awesome_5')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="map-pin"></i>
                        <span class="menu-item" data-key="t-maps">@lang('translation.Maps')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-google">@lang('translation.Google')</a></li>
                        <li><a href="#" data-key="t-vector">@lang('translation.Vector')</a></li>
                        <li><a href="#" data-key="t-leaflet">@lang('translation.Leaflet')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="share-2"></i>
                        <span class="menu-item" data-key="t-multi-level">@lang('translation.Multi_Level')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow"
                                data-key="t-level-1.2">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);"
                                        data-key="t-level-2.1">@lang('translation.Level_2.1')</a></li>
                                <li><a href="javascript: void(0);"
                                        data-key="t-level-2.2">@lang('translation.Level_2.2')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
