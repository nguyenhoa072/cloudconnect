<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="FPT Telecom International">
    <meta name="description"
        content="FPT Cloud Connect là một giải pháp tiên tiến cho doanh nghiệp thông qua đường kết nối chuyên biệt đến các ứng dụng dịch vụ một cách đơn giản, hiệu quả và bảo mật, dựa trên các nhà cung cấp điện toán đám mây phổ biến nhất trên thị trường hiện nay.">
    <meta name="keywords"
        content="FPT Cloud Connect, Aws Direct Connect, Microsoft Azure Expressroute, Google Cloud Interconnect, Inter Connect, Express Connect, FPT Telecom International">

    <!-- ROBOTS -->
    <meta name="googlebot" content="noarchive">
    <meta name="robots" content="noarchive">

    <!-- FACEBOOK OPEN GRAPH -->
    <meta property="fb:app_id" content="" />
    <meta property="og:site_name" content="cloudconnect.vn" />
    <meta property="og:type" content="website" />
    <meta property="og:rich_attachment" content="true" />
    <?php if (App::isLocale('vi')) { ?>
    <meta property="og:title"
        content="FPT Cloud Connect, Aws Direct Connect, Microsoft Azure Expressroute, Google Cloud Interconnect, Inter Connect, Express Connect, FPT Telecom International" />
    <meta property="og:url" content="<?php echo $urlCur = URL::current(); ?>" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:image" content="{{ asset('images/banner/fpt-cloud-connect-vi.png') }}" />
    <meta property="og:description"
        content="FPT Cloud Connect là một giải pháp tiên tiến cho doanh nghiệp thông qua đường kết nối chuyên biệt đến các ứng dụng dịch vụ một cách đơn giản, hiệu quả và bảo mật, dựa trên các nhà cung cấp điện toán đám mây phổ biến nhất trên thị trường hiện nay." />
    <?php } if (App::isLocale('en')) { ?>
    <meta property="og:title"
        content="FPT Cloud Connect, Aws Direct Connect, Microsoft Azure Expressroute, Inter Connect, Express Connect, FPT Telecom International" />
    <meta property="og:url" content="<?php echo $urlCur = URL::current(); ?>" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:image" content="{{ asset('images/banner/fpt-cloud-connect.png') }}" />
    <meta property="og:description"
        content="FPT Cloud Connect is the enhanced enterprise solution with completely private access to application services in a simple, effective and secured manner, based on the most popular cloud services providers." />
    <?php } ?>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/favicons/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicons/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicons/favicon.png') }}">

    <title>
        @if (isset($title))
            {{ __('messages.' . $title) . ' - ' . config('app.name') }}
        @else
            {{ config('app.name', 'FTP Cloud Connect') }}
        @endif
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('../includes/header')
    @yield('content')
    @include('../includes/footer')
    <a href="#" class="scroll-top"><i class="fa fa-long-arrow-up fa-lg"></i></a>

    <!-- Scripts -->
    <script src="{{ asset('js/frontend.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmfxRua_XT-f_8rpwvzM6cQ3-0BeSvGNQ"></script>
    @yield('js')
</body>

</html>
