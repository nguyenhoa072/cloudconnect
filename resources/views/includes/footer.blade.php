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
            <div class="col-lg-2 col-md-4 col-6 py-4 pe-xl-4">
                <img src="{{ asset('images/system/fpt-telecom-international-y.png') }}" alt=""
                    class="img-fluid" />
                <a class="d-block mt-4" target="_blank" href="http://online.gov.vn/Home/WebDetails/89099">
                    <img alt="" title="" src="{{ asset('images/home/logoSaleNoti.png') }}" class="img-fluid"/>
                </a>
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
            <div class="col-xl-2 col-lg-3 col-6 py-4 pe-xl-4">
                <img src="{{ asset('images/system/fpt-telecom-international-y.png') }}" alt=""
                    class="img-fluid" />
                <a class="d-block mt-4" target="_blank" href="http://online.gov.vn/Home/WebDetails/89099">
                    <img alt="" title="" src="{{ asset('images/home/logoSaleNoti.png') }}" class="img-fluid"/>
                </a>
            </div>
            <div class="col-lg-auto col-6 footer-top-menu p-4">
                <ul class="list-unstyled m-0 text-uppercase">
                    <li class="mb-1"><a href="{{ url('/vi') }}">Trang ch???</a></li>
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
                    <li class="mb-2"><a href="{{ url('/vi/contact') }}">Li??n h???</a></li>
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
                        <h6><i class="fa fa-map-marker fa-fw fa-lg"></i> H??? Ch?? Minh</h6>
                        <p class="font-weight-light">
                            L?? L.29B-31B-33B, ???????ng T??n Thu???n, T??n Thu???n EPZ, Ph?????ng T??n Thu???n ????ng, Qu???n 7, TP.HCM,
                            Vi???t Nam.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <h6>
                            <i class="fa fa-map-marker fa-fw fa-lg"></i> H?? N???i
                        </h6>
                        <p class="font-weight-light">
                            L???u 12A, To?? Nh?? TNR Building, 54A Nguy???n Ch?? Thanh, Qu???n Ba ????nh, H?? N???i, Vi???t Nam.
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
                            S??? gi???y ch???ng nh???n ????ng k?? kinh doanh: <br>
                            <b>0305793402 do S??? K??? Ho???ch v?? ?????u T?? Th??nh Ph??? H??? Ch?? Minh c???p l???n ?????u ng??y 22/5/2008</b>
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
                    &copy; <?php echo date('Y'); ?> B???N QUY???N THU???C V??? C??NG TY TNHH M???T TH??NH VI??N VI???N TH??NG QU???C T??? FPT
                </p>
            </div>
            <div class="col-auto ps-xl-5 ms-auto">
                <nav class="nav justify-content-center">
                    <a class="nav-link" href="{{ url('/vi/policy-and-regulations') }}">Ch??nh s??ch</a>
                    <a class="nav-link" href="{{ url('/vi/privacy-policy') }}">Ch??nh s??ch b???o m???t</a>
                    <a class="nav-link" href="{{ url('/vi/terms-of-use') }}">??i???u kho???n s??? d???ng</a>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php } ?>
