<?php
include 'config.php';
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
} else if ($_SESSION["role"] != "admin") {
    $_SESSION["nowallowed"] = TRUE;
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>TASBD | Stockholder </title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://github.com/soffandluffy//metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="index.php">
                        <h1 class="text-white">Stockholder</h1>
                    </a>
                    <!--end::Logo-->
                    <!--begin::Aside toggler-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                        data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
                        <span class="svg-icon svg-icon-1 rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.5"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside toggler-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::Aside Menu-->
                    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                            id="#kt_aside_menu" data-kt-menu="true">
                            <div class="menu-item">
                                <div class="menu-content pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="index.php">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <path
                                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                    fill="#000000" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a class="menu-link" href="employee.php">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotone/Design/Difference.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <path
                                                    d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z M17,16 L17,10 C17,8.34314575 15.6568542,7 14,7 L8,7 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L17,16 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <path
                                                    d="M9.27272727,9 L13.7272727,9 C14.5522847,9 15,9.44771525 15,10.2727273 L15,14.7272727 C15,15.5522847 14.5522847,16 13.7272727,16 L9.27272727,16 C8.44771525,16 8,15.5522847 8,14.7272727 L8,10.2727273 C8,9.44771525 8.44771525,9 9.27272727,9 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Company</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link active" href="employee.php">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotone/Design/Layers.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <path
                                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <path
                                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Employee</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="stock.php">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-top-panel-6.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1" />
                                                    <rect fill="#000000" opacity="0.3" x="2" y="11" width="19"
                                                        height="10" rx="1" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Stock</span>
                                </a>
                            </div>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Aside mobile toggle-->
                        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                                <span class="svg-icon svg-icon-2x mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                            <path
                                                d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside mobile toggle-->
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="index.php" class="d-lg-none">
                                <h3 class="h-30px">Stockholder</h3>
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                    data-kt-drawer-name="header-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                    data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                                        id="#kt_header_menu" data-kt-menu="true">
                                        <div class="menu-item me-lg-1">
                                            <a class="menu-link py-3" href="index.php">
                                                <span class="menu-title">Dashboard</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Toolbar wrapper-->
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                            <img src="codelogo.png" alt="metronic" />
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="codelogo.png" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                                            <?php echo $_SESSION['name']; ?>
                                                            <span
                                                                class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"><?php echo $_SESSION['role']; ?></span>
                                                        </div>
                                                        <a href="#"
                                                            class="fw-bold text-muted text-hover-primary fs-7"><?php echo $_SESSION['username']; ?></a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="logout.php" class="menu-link px-5">Sign Out</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                    <!--begin::Heaeder menu toggle-->
                                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3"
                                        title="Show header menu">
                                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                            id="kt_header_menu_mobile_toggle">
                                            <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z"
                                                            fill="black" />
                                                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z"
                                                            fill="black" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Heaeder menu toggle-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Employee List</h1>
                                <!--end::Title-->
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-200 border-start mx-4"></span>
                                <!--end::Separator-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="index.php" class="text-muted text-hover-primary">Home</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Employee</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-dark">Employee List</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-employee-table-filter="search"
                                                class="form-control form-control-solid w-250px ps-15"
                                                placeholder="Search Employee" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-employee-table-toolbar="base">
                                            <!--begin::Add employee-->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_add_employee">
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <rect fill="#000000" x="4" y="11" width="16" height="2"
                                                            rx="1" />
                                                        <rect fill="#000000" opacity="0.5"
                                                            transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)"
                                                            x="4" y="11" width="16" height="2" rx="1" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Add Employee
                                            </button>
                                            <!--end::Add employee-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_employee_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-125px text-center">Employee ID</th>
                                                <th class="min-w-125px text-center">Company</th>
                                                <th class="min-w-125px text-center">Employee Name</th>
                                                <th class="text-end min-w-70px">Actions</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            <?php
                                                $query = "SELECT e.id_employee, c.id_company, c.name as companyname, e.name FROM employee e INNER JOIN company c ON e.id_company = c.id_company;";
                                                $result = mysqli_query($con, $query);
                                                while($data = mysqli_fetch_array($result)) {
                                            ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php echo $data["id_employee"]; ?>
                                                </td>
                                                <td class="text-center"><?php echo $data["companyname"]; ?></td>
                                                <td class="text-center"><?php echo $data["name"]; ?></td>
                                                <!--begin::Action=-->
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-flip="top-end">Actions
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_edit_employee<?php echo $data["id_employee"]; ?>">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_delete_employee<?php echo $data["id_employee"]; ?>">Delete</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                                <!--end::Action=-->
                                                <!--begin::Modal - Employee - Delete-->
                                                <div class="modal fade" tabindex="-1" aria-hidden="true"
                                                    id="kt_modal_delete_employee<?php echo $data["id_employee"]; ?>">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Form-->
                                                            <form class="form" action="employee.php" method="POST">
                                                                <!--begin::Modal header-->
                                                                <div class="modal-header">
                                                                    <!--begin::Modal title-->
                                                                    <h2 class="fw-bolder">Delete Employee</h2>
                                                                    <!--end::Modal title-->
                                                                    <!--begin::Close-->
                                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                        data-bs-dismiss="modal">
                                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                        <span class="svg-icon svg-icon-1">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                                    fill="#000000">
                                                                                    <rect fill="#000000" x="0" y="7"
                                                                                        width="16" height="2" rx="1" />
                                                                                    <rect fill="#000000" opacity="0.5"
                                                                                        transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                        x="0" y="7" width="16"
                                                                                        height="2" rx="1" />
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <!--end::Modal header-->
                                                                <!--begin::Modal body-->
                                                                <div class="modal-body py-10 px-lg-17">
                                                                    <h3 class="text-danger">Are you sure you want to
                                                                        delete this employee?
                                                                    </h3>
                                                                    <input type="hidden" name="id_employee"
                                                                        value="<?php echo $data["id_employee"]; ?>">
                                                                    <input type="hidden" name="method" value="DELETE">
                                                                </div>
                                                                <!--end::Modal body-->
                                                                <!--begin::Modal footer-->
                                                                <div class="modal-footer flex-center">
                                                                    <!--begin::Button-->
                                                                    <button type="reset" class="btn btn-light me-3"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                    <!--end::Button-->
                                                                    <!--begin::Button-->
                                                                    <button type="submit" class="btn btn-primary">
                                                                        <span class="indicator-label">Delete</span>
                                                                        <span class="indicator-progress">Please wait...
                                                                            <span
                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                    </button>
                                                                    <!--end::Button-->
                                                                </div>
                                                                <!--end::Modal footer-->
                                                            </form>
                                                            <!--end::Form-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Modal - Employee - Delete-->
                                                <!--begin::Modal - Employee - Edit-->
                                                <div class="modal fade" tabindex="-1" aria-hidden="true"
                                                    id="kt_modal_edit_employee<?php echo $data["id_employee"]; ?>">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Form-->
                                                            <form class="form" action="employee.php" method="POST">
                                                                <!--begin::Modal header-->
                                                                <div class="modal-header">
                                                                    <!--begin::Modal title-->
                                                                    <h2 class="fw-bolder">Edit Employee</h2>
                                                                    <!--end::Modal title-->
                                                                    <!--begin::Close-->
                                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                        data-bs-dismiss="modal">
                                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                        <span class="svg-icon svg-icon-1">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                                    fill="#000000">
                                                                                    <rect fill="#000000" x="0" y="7"
                                                                                        width="16" height="2" rx="1" />
                                                                                    <rect fill="#000000" opacity="0.5"
                                                                                        transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                        x="0" y="7" width="16"
                                                                                        height="2" rx="1" />
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <!--end::Modal header-->
                                                                <!--begin::Modal body-->
                                                                <div class="modal-body py-10 px-lg-17">
                                                                    <!--begin::Scroll-->
                                                                    <div class="scroll-y me-n7 pe-7"
                                                                        data-kt-scroll="true"
                                                                        data-kt-scroll-activate="{default: false, lg: true}"
                                                                        data-kt-scroll-max-height="auto"
                                                                        data-kt-scroll-dependencies="#kt_modal_edit_employee_header"
                                                                        data-kt-scroll-wrappers="#kt_modal_edit_employee_scroll"
                                                                        data-kt-scroll-offset="300px">
                                                                        <!--begin::Input group-->
                                                                        <div class="mb-10">
                                                                            <!--begin::Label-->
                                                                            <label class="form-label fw-bold">Company
                                                                                :</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <div>
                                                                                <select name="id_company"
                                                                                    class="form-select form-select-solid"
                                                                                    data-kt-select2="true"
                                                                                    data-placeholder="Select Company"
                                                                                    data-dropdown-parent="#kt_modal_edit_employee<?php echo $data["id_employee"]; ?>">
                                                                                    <option></option>
                                                                                    <?php
                                                                                        $query2 = "SELECT id_company,name FROM company";
                                                                                        $result2 = mysqli_query($con, $query2);
                                                                                        while($emp = mysqli_fetch_array($result2)) {
                                                                                            if($emp["id_company"] == $data["id_company"]) {
                                                                                    ?>
                                                                                    <option
                                                                                        value="<?php echo $emp['id_company']; ?>"
                                                                                        selected>
                                                                                        <?php echo $emp['name']; ?>
                                                                                    </option>
                                                                                    <?php
                                                                                            } else {
                                                                                                ?>
                                                                                    <option
                                                                                        value="<?php echo $emp['id_company']; ?>">
                                                                                        <?php echo $emp['name']; ?>
                                                                                    </option>
                                                                                    <?php
                                                                                            }
                                                                                        }
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fs-6 fw-bold mb-2">Name</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input type="text"
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" name="name"
                                                                                value="<?php echo $data["name"]; ?>" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                        <input type="hidden" name="id_employee"
                                                                            value="<?php echo $data["id_employee"]; ?>">
                                                                        <input type="hidden" name="method" value="EDIT">
                                                                    </div>
                                                                    <!--end::Scroll-->
                                                                </div>
                                                                <!--end::Modal body-->
                                                                <!--begin::Modal footer-->
                                                                <div class="modal-footer flex-center">
                                                                    <!--begin::Button-->
                                                                    <button type="reset" class="btn btn-light me-3"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                    <!--end::Button-->
                                                                    <!--begin::Button-->
                                                                    <button type="submit" class="btn btn-primary">
                                                                        <span class="indicator-label">Update</span>
                                                                        <span class="indicator-progress">Please wait...
                                                                            <span
                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                    </button>
                                                                    <!--end::Button-->
                                                                </div>
                                                                <!--end::Modal footer-->
                                                            </form>
                                                            <!--end::Form-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Modal - Employee - Edit-->
                                            </tr>
                                            <?php

                                                }
                                            ?>

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                            <!--begin::Modals-->

                            <!--begin::Modal - Employee - Add-->
                            <div class="modal fade" id="kt_modal_add_employee" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Form-->
                                        <form class="form" action="employee.php" id="kt_modal_add_employee_form"
                                            method="POST">
                                            <!--begin::Modal header-->
                                            <div class="modal-header" id="kt_modal_add_employee_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bolder">Add a Employee</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div id="kt_modal_add_employee_close"
                                                    class="btn btn-icon btn-sm btn-active-icon-primary"
                                                    data-bs-dismiss="modal">
                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                fill="#000000">
                                                                <rect fill="#000000" x="0" y="7" width="16" height="2"
                                                                    rx="1" />
                                                                <rect fill="#000000" opacity="0.5"
                                                                    transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                    x="0" y="7" width="16" height="2" rx="1" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body py-10 px-lg-17">
                                                <!--begin::Scroll-->
                                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_employee_scroll"
                                                    data-kt-scroll="true"
                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                    data-kt-scroll-max-height="auto"
                                                    data-kt-scroll-dependencies="#kt_modal_add_employee_header"
                                                    data-kt-scroll-wrappers="#kt_modal_add_employee_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-bold">Company :</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div>
                                                            <select name="id_company"
                                                                class="form-select form-select-solid"
                                                                data-kt-select2="true" data-placeholder="Select Company"
                                                                data-dropdown-parent="#kt_modal_add_employee">
                                                                <option></option>
                                                                <?php
                                                                    $query = "SELECT id_company,name FROM company";
                                                                    $result = mysqli_query($con, $query);
                                                                    while($data = mysqli_fetch_array($result)) {
                                                                ?>
                                                                <option value="<?php echo $data['id_company']; ?>">
                                                                    <?php echo $data['name']; ?>
                                                                </option>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-bold mb-2">Name</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="" name="name" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <input type="hidden" name="method" value="INSERT" />
                                                </div>
                                                <!--end::Scroll-->
                                            </div>
                                            <!--end::Modal body-->
                                            <!--begin::Modal footer-->
                                            <div class="modal-footer flex-center">
                                                <!--begin::Button-->
                                                <button type="reset" id="kt_modal_add_employee_cancel"
                                                    class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" id="kt_modal_add_employee_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Modal footer-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Modal - Employee - Add-->
                            <!--end::Modals-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2021©</span>
                            <a href="https://github.com/soffandluffy/" target="_blank"
                                class="text-gray-800 text-hover-primary">Soffan MA</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/employee.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <?php

        function callSwal($message, $type, $allow) {
            echo '
                <script type="text/javascript">

                    $(document).ready(function(){

                        Swal.fire({
                            text: "'.$message.'",
                            icon: "'.$type.'",
                            buttonsStyling: !1,
                            showConfirmButton: '.$allow.',
                            allowOutsideClick: '.$allow.',
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    });
                </script>
                ';
        }

        if(isset($_SESSION["addsuccess"])) {
            callSwal("Employee added", 'success', true);
            unset($_SESSION["addsuccess"]);
        } else if(isset($_SESSION["updatesuccess"])) {
            callSwal("Employee updated", 'success', true);
            unset($_SESSION["updatesuccess"]);
        } else if(isset($_SESSION["deletesuccess"])) {
            callSwal("Employee deleted", 'success', true);
            unset($_SESSION["deletesuccess"]);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_POST["method"] == "INSERT") {
                try {
                    $name = $_POST["name"];
                    $stmt = mysqli_prepare($con, "INSERT INTO employee VALUES('', ? , ?)");
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "is", $param_idcompany, $param_name);
                    $param_idcompany = trim($_POST["id_company"]);
                    $param_name = $name;
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Records deleted successfully. Redirect to landing page
                        $_SESSION["addsuccess"] = true;
                        header("Refresh:0");
                    } else{
                        callSwal("Something went wrong", 'error', true);
                    }
                    // Close statement
                    mysqli_stmt_close($stmt);

                    // Close connection
                    mysqli_close($link);
                } catch (Exception $e) {
                    callSwal($e, 'error', true);
                }
            } elseif ($_POST["method"] == "EDIT") {
                try {
                    $name = $_POST["name"];
                    $stmt = mysqli_prepare($con, "UPDATE employee SET name = ?, id_company = ? WHERE id_employee = ?");
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "sii", $param_name,$param_idcompany, $param_id);
                    $param_name = $name;
                    $param_idcompany = trim($_POST["id_company"]);
                    $param_id = trim($_POST["id_employee"]);
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Records deleted successfully. Redirect to landing page
                        $_SESSION["updatesuccess"] = true;
                        header("Refresh:0");
                    } else{
                        callSwal("Something went wrong", 'error', true);
                    }
                    // Close statement
                    mysqli_stmt_close($stmt);

                    // Close connection
                    mysqli_close($link);
                } catch (Exception $e) {
                    callSwal($e, 'error', true);
                }

            } elseif ($_POST["method"] == "DELETE") {
                try {
                    $stmt = mysqli_prepare($con, "DELETE FROM employee WHERE id_employee = ?");
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "i", $param_id);
                    $param_id = trim($_POST["id_employee"]);
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Records deleted successfully. Redirect to landing page
                        $_SESSION["deletesuccess"] = true;
                        header("Refresh:0");
                    } else{
                        callSwal("Something went wrong", 'error', true);
                    }
                    // Close statement
                    mysqli_stmt_close($stmt);

                    // Close connection
                    mysqli_close($link);
                } catch (Exception $e) {
                    callSwal($e, 'error', true);
                }
            }
        }

    ?>
</body>
<!--end::Body-->

</html>