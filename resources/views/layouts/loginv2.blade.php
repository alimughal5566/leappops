<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- set the encoding of your site -->
    <meta charset="UTF-8">
    <!-- set the viewport width and initial-scale on mobile devices  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="120x120"
          href="{{ LP_ASSETS_PATH }}/adminimages/apple-touch-icon.png?v={{ LP_VERSION }}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ LP_ASSETS_PATH }}/adminimages/favicon-32x32.png?v={{ LP_VERSION }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ LP_ASSETS_PATH }}/adminimages/favicon-16x16.png?v={{ LP_VERSION }}">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    @hasSection('page_title')
        <title>@yield('page_title')</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <link href="{{ LP_ASSETS_PATH }}/external/bootstrap4/css/bootstrap.min.css?v={{ LP_VERSION }}" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,400i,500,600,700&display=swap"
          rel="stylesheet">

    @if(env('APP_ENV') == config('app.env_local'))
        <link href="{{asset('login/css/appv2.css?v='.LP_VERSION)}}" rel="stylesheet" type="text/css">
    @else
        <link href="{{secure_asset('login/css/appv2.css?v='.LP_VERSION)}}" rel="stylesheet" type="text/css">
    @endif

    @foreach ($view->assets_css as $css)
        <link href="{{ $css."?v=".LP_VERSION }}" rel="stylesheet" type="text/css">
    @endforeach

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P5P8JXV');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5P8JXV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</head>
<body class="{{ implode(' ', $view->body_class) }}">
    @yield('content')

    <script type="text/javascript" src="{{ LP_ASSETS_PATH }}/external/jquery-3.2.1.min.js?v={{ LP_VERSION }}"></script>
    <script type="text/javascript"
            src="{{ LP_ASSETS_PATH }}/external/bootstrap4/js/bootstrap.min.js?v={{ LP_VERSION }}"></script>
    <script type="text/javascript"
            src="{{ LP_ASSETS_PATH }}/external/validation/jquery.validate.js?v={{ LP_VERSION }}"></script>
    <script type="text/javascript" src="{{ LP_ASSETS_PATH }}/js/custom-steele.js?v={{ LP_VERSION }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var site = {
            baseUrl: "{{ LP_BASE_URL }}",
            baseDir: "{{ public_path() }}"
        };
    </script>
    @foreach ($view->assets_js as $js)
        <script type="text/javascript" src="{{ $js."?v=".LP_VERSION }}"></script>
    @endforeach
</body>
</html>
