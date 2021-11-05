<?php

$locale = Config::get('app.locale');
$urlCur = URL::current();

if ($locale == 'vi') {
    $urlCur = str_replace('/vi', '/en', $urlCur);
} else {
    $urlCur = str_replace('/en', '/vi', $urlCur);
}

?>

<header id="header" class="px-xxl-5">
    <nav class="navbar navbar-expand-xl navbar-light bg-white">
        <div class="container-fluid">

            <?php if (App::isLocale('en')) { ?>

            <a class="navbar-brand ms-xl-3" href="{{ url('/en') }}">
                <img class="logo" src="{{ asset('images/system/cloud-connect-fpt.png') }}" height="80" alt=""
                    class="img-fluid">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarsMenu">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarsMenu">
                <div class="ms-auto">
                    <ul class="navbar-nav">
                        <li class="{{ request()->is('*en') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/en') }}">Home</a>
                        </li>
                        <li class="{{ request()->is('*/aws-direct-connect') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/en/aws-direct-connect') }}">AWS DIRECT
                                CONNECT</a>
                        </li>
                        <li
                            class="{{ request()->is('*/microsoft-azure-expressroute') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/en/microsoft-azure-expressroute') }}">AZURE
                                EXPRESSROUTE</a>
                        </li>
                        <li
                            class="{{ request()->is('*/google-cloud-interconnect') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/en/google-cloud-interconnect') }}">
                                Google Cloud Interconnect</a>
                        </li>
                        <li class="{{ request()->is('*/contact') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/en/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav lang d-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url($urlCur) }}">
                                <img src="{{ asset('images/system/lang-vn.png') }}" alt=""
                                    class="rounded-circle img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lang d-none d-xl-block">
                <a class="d-block mx-3" href="{{ url($urlCur) }}">
                    <img src="{{ asset('images/system/lang-vn.png') }}" alt="" class="rounded-circle img-fluid">
                </a>
            </div>

            <?php } if (App::isLocale('vi')) { ?>

            <a class="navbar-brand ms-xl-3" href="{{ url('/vi') }}">
                <img class="logo" src="{{ asset('images/system/cloud-connect-fpt-vn.png') }}" height="80"
                    alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsMenu">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarsMenu">
                <div class="ms-auto">
                    <ul class="navbar-nav">
                        <li class="{{ request()->is('*vi') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/vi') }}">Trang chủ</a>
                        </li>
                        <li class="{{ request()->is('*/aws-direct-connect') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/vi/aws-direct-connect') }}">
                                AWS DIRECT CONNECT</a>
                        </li>
                        <li
                            class="{{ request()->is('*/microsoft-azure-expressroute') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/vi/microsoft-azure-expressroute') }}">
                                AZURE EXPRESSROUTE</a>
                        </li>
                        <li
                            class="{{ request()->is('*/google-cloud-interconnect') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/vi/google-cloud-interconnect') }}">
                                Google Cloud Interconnect</a>
                        </li>
                        <li class="{{ request()->is('*/contact') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/vi/contact') }}">Liên hệ</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav lang d-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url($urlCur) }}">
                                <img src="{{ asset('images/system/lang-en.png') }}" alt=""
                                    class="rounded-circle img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lang d-none d-xl-block">
                <a class="d-block mx-3" href="{{ url($urlCur) }}">
                    <img src="{{ asset('images/system/lang-en.png') }}" alt="" class="rounded-circle img-fluid">
                </a>
            </div>

            <?php } ?>

        </div>
    </nav>
</header>
