<style>
    .footer-top a {
        transition: all .3s;
    }

    .footer-top a:hover {
        color: #fff;
        text-decoration: none;
        text-shadow: 0 0 0 #fff;
    }

</style>

<?php 

$locale = Config::get('app.locale');
$urlCur =  URL::current();

if ($locale == 'vi')
   $urlCur = str_replace("vi", "en", $urlCur);
else {
   $urlCur = str_replace("en", "vi", $urlCur);
}

if (App::isLocale('en')) { ?>

<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 py-4 pe-xl-5">
                <img src="{{ asset('images/system/fpt-telecom-international-y.png') }}" alt=""
                    class="img-fluid" />
            </div>
            <div class="col-lg-auto col-6 footer-top-menu p-4">
                <ul class="list-unstyled m-0 text-uppercase">
                    <li class="mb-1"><a href="{{ url('/en') }}">Home</a></li>
                    <li class="mb-1"><a href="{{ url('/en/aws-direct-connect') }}">AWS DIRECT CONNECT</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ url('/en/microsoft-azure-expressroute') }}">AZURE EXPRESSROUTE</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ url('/en/google-cloud-interconnect') }}">
                            Google Cloud Interconnect
                        </a>
                    </li>
                    <li class="mb-2"><a href="{{ url('/en/contact') }}">Contact Us</a></li>
                    <li>
                        <a class="nav-link p-0" href="{{ url($urlCur) }}">
                            <img width="40" src="{{ asset('images/system/lang-vn.png') }}" alt=""
                                class="rounded-circle">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg pt-4">
                <div class="row">
                    <div class="col-sm-6">
                        <h6><i class="fa fa-map-marker fa-fw fa-lg"></i> HO CHI MINH CITY</h6>
                        <p class="font-weight-light">
                            Lot L.29B-31B-33B, Street Tan Thuan, Tan Thuan EPZ, East Tan Thuan Ward, District 7, HCM
                            City, Vietnam.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <h6>
                            <i class="fa fa-map-marker fa-fw fa-lg"></i> HANOI
                        </h6>
                        <p class="font-weight-light">
                            Floor 12A, TNR Building, 54A Nguyen Chi Thanh, Ba Dinh District, Hanoi, Vietnam.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-4">
                        <p class="mb-1">
                            Hotline: <a href="tel:19006973"><strong>1900 6973</strong></a>
                            &#151;
                            Cloud Connect Hotline:
                            <a href="tel:0907451357"><strong>090.745.1357</strong></a>
                        </p>
                        <p class="mb-1">
                            Email: <a
                                href="mailto:fti.cloudconnect@fpt.com.vn"><strong>fti.cloudconnect@fpt.com.vn</strong></a>
                        </p>
                        <p class="mb-1">
                            Business registration certificate number: <br>
                            <b>0305793402 first issued by Ho Chi Minh City Department of Planning and Investment dated
                                22/5/2008</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer" class="py-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto me-xl-5">
                <p class="my-2 text-center">COPYRIGHT &copy; <?php echo date('Y'); ?>, FPT TELECOM INTERNATIONAL</p>
            </div>
            <div class="col-auto ps-xl-5 ms-auto">
                <nav class="nav justify-content-center">
                    <a class="nav-link" href="{{ url('/en/policy-and-regulations') }}">Policy And
                        Regulations</a>
                    <a class="nav-link" href="{{ url('/en/privacy-policy') }}">Privacy Policy</a>
                    <a class="nav-link" href="{{ url('/en/terms-of-use') }}">Terms Of Use</a>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php } if (App::isLocale('vi')) { ?>

<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-6 py-4 pe-xl-5">
                <img src="{{ asset('images/system/fpt-telecom-international-y.png') }}" alt=""
                    class="img-fluid" />
            </div>
            <div class="col-lg-auto col-6 footer-top-menu p-4">
                <ul class="list-unstyled m-0 text-uppercase">
                    <li class="mb-1"><a href="{{ url('/vi') }}">Trang chủ</a></li>
                    <li class="mb-1">
                        <a href="{{ url('/vi/aws-direct-connect') }}">AWS DIRECT CONNECT</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ url('/vi/microsoft-azure-expressroute') }}">AZURE EXPRESSROUTE</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ url('/vi/google-cloud-interconnect') }}">
                            Google Cloud Interconnect
                        </a>
                    </li>
                    <li class="mb-2"><a href="{{ url('/vi/contact') }}">Liên hệ</a></li>
                    <li>
                        <a class="nav-link p-0" href="{{ url($urlCur) }}">
                            <img width="40" src="{{ asset('images/system/lang-en.png') }}" alt=""
                                class="rounded-circle">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg pt-4">
                <div class="row">
                    <div class="col-sm-6">
                        <h6><i class="fa fa-map-marker fa-fw fa-lg"></i> Hồ Chí Minh</h6>
                        <p class="font-weight-light">
                            Lô L.29B-31B-33B, Đường Tân Thuận, Tân Thuận EPZ, Phường Tân Thuận Đông, Quận 7, TP.HCM,
                            Việt Nam.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <h6>
                            <i class="fa fa-map-marker fa-fw fa-lg"></i> Hà Nội
                        </h6>
                        <p class="font-weight-light">
                            Lầu 12A, Toà Nhà TNR Building, 54A Nguyễn Chí Thanh, Quận Ba Đình, Hà Nội, Việt Nam.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-4">
                        <p class="mb-1">
                            Hotline: <a href="tel:19006973"><strong>1900 6973</strong></a>
                            &#151;
                            Cloud Connect Hotline:
                            <a href="tel:0907451357"><strong>090.745.1357</strong></a>
                        </p>
                        <p class="mb-1">
                            Email: <a
                                href="mailto:fti.cloudconnect@fpt.com.vn"><strong>fti.cloudconnect@fpt.com.vn</strong></a>
                        </p>
                        <p class="mb-1">
                            Số giấy chứng nhận đăng ký kinh doanh: <br>
                            <b>0305793402 do Sở Kế Hoạch và Đầu Tư Thành Phố Hồ Chí Minh cấp lần đầu ngày 22/5/2008</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer" class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-auto pe-xl-5">
                <p class="my-2 text-center">
                    &copy; <?php echo date('Y'); ?> BẢN QUYỀN THUỘC VỀ CÔNG TY TNHH MỘT THÀNH VIÊN VIỄN THÔNG QUỐC TẾ FPT
                </p>
            </div>
            <div class="col-auto ps-xl-5 ms-auto">
                <nav class="nav justify-content-center">
                    <a class="nav-link" href="{{ url('/vi/policy-and-regulations') }}">Chính sách</a>
                    <a class="nav-link" href="{{ url('/vi/privacy-policy') }}">Chính sách bảo mật</a>
                    <a class="nav-link" href="{{ url('/vi/terms-of-use') }}">Điểu khoản sử dụng</a>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php } ?>
