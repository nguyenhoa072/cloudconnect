<?php 
$locale = Config::get('app.locale');
$urlCur =  URL::current();

if ($locale == 'vi')
   $urlCur = str_replace("/vi", "/en", $urlCur);
else {
   $urlCur = str_replace("/en", "/vi", $urlCur);
}

if (App::isLocale('en')) { ?>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{url('/en')}}">
                <img class="logo" src="{{asset('images/system/cloud-connect-fpt.png')}}" height="80" alt=""
                    class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsMenu">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarsMenu">
                <div class="ml-auto text-lg-right">
                    <ul class="navbar-nav">
                        <li class="{{request()->is('*en') ? 'nav-item active' : 'nav-item'}}">
                            <a class="nav-link" href="{{url('/en')}}">Home</a>
                        </li>
                        <li class="{{request()->is('*/aws-direct-connect') ? 'nav-item active' : 'nav-item'}}">
                            <a class="nav-link" href="{{ url('/en/aws-direct-connect') }}">AWS DIRECT CONNECT</a>
                        </li>
                        <li class="{{request()->is('*/microsoft-azure-expressroute') ? 'nav-item active' : 'nav-item'}}">
                            <a class="nav-link" href="{{ url('/en/microsoft-azure-expressroute') }}">AZURE EXPRESSROUTE</a>
                        </li>
                        <li class="{{request()->is('*/contact') ? 'nav-item active' : 'nav-item'}}">
                            <a class="nav-link" href="{{url('/en/contact')}}">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav lang d-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url($urlCur)}}">
                                <img src="{{asset('images/system/lang-vn.png')}}" alt=""
                                    class="rounded-circle img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lang d-none d-lg-block">
                <a class="nav-link pr-0" href="{{url($urlCur)}}">
                    <img src="{{asset('images/system/lang-vn.png')}}" alt="" class="rounded-circle img-fluid">
                </a>
            </div>
        </div>
    </nav>
</header>
<?php } if (App::isLocale('vi')) { ?>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{url('/vi')}}">
                <img class="logo" src="{{asset('images/system/cloud-connect-fpt-vn.png')}}" height="80" alt=""
                    class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsMenu">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarsMenu">
                <div class="ml-auto text-lg-right">
                    <ul class="navbar-nav">
                        <li class="{{request()->is('*vi') ? 'nav-item active' : 'nav-item'}}">
                            <a class="nav-link" href="{{url('/vi')}}">Trang chủ</a>
                        </li>
                        <li class="{{request()->is('*/aws-direct-connect') ? 'nav-item active' : 'nav-item'}}">
                            <a class="nav-link" href="{{ url('/vi/aws-direct-connect') }}">AWS DIRECT CONNECT</a>
                        </li>
                        <li class="{{request()->is('*/microsoft-azure-expressroute') ? 'nav-item active' : 'nav-item'}}">
                            <a class="nav-link" href="{{ url('/vi/microsoft-azure-expressroute') }}">AZURE EXPRESSROUTE</a>
                        </li>
                        <li class="{{request()->is('*/contact') ? 'nav-item active' : 'nav-item'}}">
                            <a class="nav-link" href="{{url('/vi/contact')}}">Liên hệ</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav lang d-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url($urlCur)}}">
                                <img src="{{asset('images/system/lang-en.png')}}" alt=""
                                    class="rounded-circle img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lang d-none d-lg-block">
                <a class="nav-link pr-0" href="{{url($urlCur)}}">
                    <img src="{{asset('images/system/lang-en.png')}}" alt="" class="rounded-circle img-fluid">
                </a>
            </div>
        </div>
    </nav>
</header>
<?php } ?>