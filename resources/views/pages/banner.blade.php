<div id="bannerHome" class="carousel slide banner" data-ride="carousel">
    <div class="carousel-inner">
        <?php if (App::isLocale('vi')) { ?>

        <div class="carousel-item active">
            <div class="mx-auto">
                <img src="{{asset('images/banner/fpt-cloud-connect-vi.png')}}" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div class="mx-auto">
                <img src="{{asset('images/banner/fpt-telecom-international-vi.png')}}" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div class="mx-auto">
                <a href="{{ url('/vi/aws-direct-connect') }}">
                    <img src="{{asset('images/banner/aws-direct-connect-vi.png')}}" class="img-fluid" alt="...">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="mx-auto">
                <a href="{{ url('/vi/microsoft-azure-expressroute') }}">
                    <img src="{{asset('images/banner/microsoft-azure-expressroute-vi.png')}}" class="img-fluid" alt="...">
                </a>
            </div>
        </div>

        <?php } if (App::isLocale('en')) { ?>

        <div class="carousel-item active">
            <div class="mx-auto">
                <img src="{{asset('images/banner/fpt-cloud-connect.png')}}" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div class="mx-auto">
                <img src="{{asset('images/banner/fpt-telecom-international.png')}}" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div class="mx-auto">
                <a href="{{ url('/en/aws-direct-connect') }}">
                    <img src="{{asset('images/banner/aws-direct-connect.png')}}" class="img-fluid" alt="...">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="mx-auto">
                <a href="{{ url('/en/microsoft-azure-expressroute') }}">
                    <img src="{{asset('images/banner/microsoft-azure-expressroute.png')}}" class="img-fluid" alt="...">
                </a>
            </div>
        </div>

        <?php } ?>

    </div>
    <a class="carousel-control-prev" href="#bannerHome" role="button" data-slide="prev">
        <img src="{{asset('images/system/arrow-left.png')}}" alt="" width="40">
    </a>
    <a class="carousel-control-next" href="#bannerHome" role="button" data-slide="next">
        <img src="{{asset('images/system/arrow-right.png')}}" alt="" width="40">
    </a>
</div>
