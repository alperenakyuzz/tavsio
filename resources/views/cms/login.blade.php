<!DOCTYPE html>
<html lang="tr">
<!--begin::Head-->
<head>
    <meta charset="utf-8"/>
    <title>Tavsio.com | CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="robots" content="noindex">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--begin::Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{url('backend/assets/css/pages/login/classic/login-3.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{url('backend/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('backend/assets/plugins/custom/prismjs/prismjs.bundle.css')}}"rel="stylesheet" type="text/css"/>
    <link href="{{url('backend/assets/css/style.bundle.css')}}"rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{url('backend/assets/css/themes/layout/header/base/light.css')}}"rel="stylesheet" type="text/css"/>
    <link href="{{url('backend/assets/css/themes/layout/header/menu/light.css')}}"rel="stylesheet" type="text/css"/>
    <link href="{{url('backend/assets/css/themes/layout/brand/dark.css')}}"rel="stylesheet" type="text/css"/>
    <link href="{{url('backend/assets/css/themes/layout/aside/dark.css')}}"rel="stylesheet" type="text/css"/>
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{url('backend/img/favicon.png')}}"/>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
             style="background-image: url({{url('backend/assets/media/bg/bg-1.jpg')}})">
            <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="#">
                        <img src="" class="max-h-100px" alt=""/>
                    </a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div class="login-signin">
                    <div class="mb-10">
                        <p class="opacity-60 font-weight-bold">Hesabınıza giriş yapmak için bilgilerinizi girin:</p>
                    </div>
                    <form class="form" id="kt_login_signin_form">
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                                type="text" placeholder="E-posta Adresi" name="email" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                                type="password" placeholder="Şifre" name="password"/>
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                                    <input type="checkbox" name="remember"/>
                                    <span></span>Beni Hatırla</label>
                            </div>
                        </div>
                        <div class="form-group text-center mt-10">
                            <button id="kt_login_signin_submit"
                                    class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Giriş
                                Yapınız
                            </button>
                        </div>
                    </form>
                    <div class="mt-10">
                        <a href="javascript:;" class="text-white font-weight-bold">tavsio.com</a>
                        <span class="opacity-70 mr-4">Copyright @ {{date('Y')}}. Tüm hakları saklıdır</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {"breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400},
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{url('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('backend/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{url('backend/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Theme Bundle-->
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
<!--end::Global Config-->
<!--begin::Page Scripts(used by this page)-->
<script src="https://www.google.com/recaptcha/api.js?render=6LdufSgaAAAAANPcHwoEKfvcwRZaUvbCyd77PlZQ"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LdufSgaAAAAANPcHwoEKfvcwRZaUvbCyd77PlZQ', { action: 'homepage'}).then(function(token) {
            $('#kt_login_signin_form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
        });
    });
</script>
<script src="{{url('backend/assets/js/pages/custom/login/login-general.js?v=1.0.9')}}"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
