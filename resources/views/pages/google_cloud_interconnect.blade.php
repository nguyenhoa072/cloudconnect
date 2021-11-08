@extends('layouts.app')

@section('content')

    <style>
        .google-cloud {
            font-size: 1.25rem;
        }

        .google-cloud .banner {
            position: relative;
            background: url(/images/banner/google-cloud-partner.png) no-repeat center;
            background-size: cover;
        }

        .bgi {
            background: url(/images/azure-expressroute/bg.png) no-repeat right center;
            background-size: cover;
            color: #fff;
        }

        .color-blue {
            color: #0070c0;
        }

        .color-blue span {
            border-top: 3px solid #898989;
            display: inline-block;
        }

        .aer {
            border-radius: 10px;
            box-shadow: 0 0 5px 5px rgba(21, 105, 178, .1);
        }

    </style>

    <div class="google-cloud wow animate__animated animate__fadeInUp">
        <?php if (App::isLocale('vi')) { ?>

        <div class="banner py-5">
            <div class="container py-xl-5">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-9">
                        <h2 class="fw-bold mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            Phương pháp tối ưu nhất để kết nối Google Cloud Platform (GCP) 
                        </h2>
                        <p class="h3 mb-xl-5 mb-4 fw-light lh-sm wow animate__animated animate__fadeInUp"
                            data-wow-delay=".2s">
                            Truy cập bảo mật và riêng tư trong thời gian thực tới Google Cloud Platform từ bất cứ đâu tại Việt Nam.
                        </p>
                        <div class="wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <a href="/vi/contact"
                                class="btn btn-success btn-lg px-4 fw-bold text-uppercase wow animate__animated animate__headShake"
                                data-wow-delay=".8s">
                                Yêu cầu tư vấn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3
                class="color-blue h2 fw-bold mt-lg-5 mt-4 wow animate__animated animate__animate__animated animate__fadeInUp">
                <span class="">Kết nối trực tiếp với Google Cloud Platform bằng FPT Cloud Connect</span>
            </h3>
            <p class="text-center my-5 wow animate__animated animate__fadeInUp">
                <img class="w-75" src="/images/google-cloud-interconnect/fpt-cloud-connect.png" alt="">
            </p>
            <p class="wow animate__animated animate__fadeInUp">
                Các dịch vụ kết nối thế hệ tiếp theo cung cấp hiệu suất, tốc độ và khả năng kiểm soát mà khách hàng cần để tiến hành hoạt động kinh doanh trên đám mây thông minh.<br>Kết nối với Google Cloud Platform được thực hiện dễ dàng thông qua công nghệ Software Defined Networking và tích hợp Google Cloud Partner Interconnect.<br>Hãy quên đi những lo ngại về độ trễ cao, triển khai chậm và rủi ro bảo mật. Chúng tôi mang lại cho khách hàng một giải pháp mạng đám mây cực kỳ nhanh chóng và đơn giản.
            </p>
            <h3
                class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 wow animate__animated animate__animate__animated animate__fadeInUp">
                <span>Kết nối tới một trong những dịch vụ đám mây hàng đầu trên thế giới</span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp">
                Khai phá tiềm năng của doanh nghiệp với khả năng kết nối với các ứng dụng đẳng cấp thế giới của Google.<br>
                Các dịch vụ mạng ngang hàng trên toàn thế giới của chúng tôi giúp việc kết nối với G Suite / Google Workspace trở nên đơn giản, nhanh chóng và thuận tiện.<br>
                Từ một điểm kết nối duy nhất, khách hàng có thể dễ dàng thiết lập một môi trường an toàn bất kỳ giữa các Google Cloud Platform instance và các nhà cung cấp dịch vụ đám mây khác.<br>
                Với việc trở thành đối tác Google Cloud Interconnect Partner uy tín, FPT Telecom International giúp khách hàng có thể áp dụng, khởi tạo và triển khai mạng của mình trong GCP chỉ bằng một cú nhấp chuột.
            </p>
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 wow animate__animated animate__fadeInUp">
                <span>FPT Telecom International là đối tác cung cấp dịch vụ Google Cloud Interconnect chính thức tại Việt Nam</span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp">
                <img src="/images/google-cloud-interconnect/googel-cloud-partner.png" alt="" class="ms-md-4 img-fluid"
                    style="max-height: 200px; float: right;">
                    Với 25 năm kinh nghiệm cung cấp các giải pháp, dịch vụ viễn thông tại Việt Nam, chúng tôi cung cấp trải nghiệm độc đáo cho khách hàng thông qua dịch vụ FPT Cloud Connect, cho phép khách hàng kiểm soát tốt hơn các hoạt động trước và sau bán.<br>Mô hình kết nối theo yêu cầu đã loại bỏ sự phức tạp khi kết nối với Google Cloud Platform (GCP) chỉ bằng một dịch vụ đơn giản.
                    Các Doanh nghiệp sử dụng GCP được hưởng lợi từ tốc độ và sự linh hoạt của Cloud trong kết nối mạng.
                    <br>Chúng tôi cung cấp những giải pháp đơn giản! Khách hàng sẽ được trải nghiệm cách nhanh hơn, bảo mật hơn khi sử dụng các giải pháp “lên mây” và việc sử dụng các nền tảng điện toán đám mây trên toàn thế giới trở nên nhanh chóng.
            </p>
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 wow animate__animated animate__fadeInUp">
                <span>Cách thức hoạt động </span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp">
                FPT Cloud Connect là dịch vụ cung cấp kết nối riêng giữa cơ sở hạ tầng tại chỗ của khách hàng hoặc cơ sở hạ tầng trong Trung tâm dữ liệu tại Việt Nam với các nhà cung cấp Cloud toàn cầu, không giới hạn quốc gia hoặc nhà cung cấp. FPT Cloud Connect sử dụng giao thức MPLS Layer 2 / Layer 3.
            </p>
            <p class="mb-lg-5 mb-4 wow animate__animated animate__fadeInUp">
                <img src="/images/google-cloud-interconnect/map.png" class="img-fluid" alt="">
            </p>
        </div>

        <div class="container-fluid bgi py-5 wow animate__animated animate__fadeIn">
            <h3 class="text-center h2 fw-bold my-4 wow animate__animated animate__backInDown">
                <span>Kết nối an toàn, thông lượng cao, độ trễ thấp và bỏ qua Internet</span>
            </h3>
        </div>

        <div class="container">
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 text-center wow animate__animated animate__fadeInUp">
                Chúng tôi cung cấp giải pháp Google Cloud Partner Interconnect connections <br> (được quản lý băng thông bởi FPT Telecom) 
            </h3>
            <ul>
                <li class="wow animate__animated animate__fadeInUp">Băng thông đa dạng hơn: 50M-100M-200M-300M-400M-500M-1G-2G-5G-10G.</li>
                <li class="wow animate__animated animate__fadeInUp">Quản lý và QoS bởi FPT Telecom.</li>
                <li class="wow animate__animated animate__fadeInUp">Mỗi kết nối Google Cloud Interconnect được định sẵn VLAN và băng thông.</li>
                <li class="wow animate__animated animate__fadeInUp">Chỉ cho phép 01 virtual Interface trên mỗi kết nối Google Cloud Interconnect.</li>
            </ul>
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-3 text-center wow animate__animated animate__fadeInUp">
                <span>Vì sao lựa chọn FPT Cloud Connect?</span>
            </h3>
            <div class="row g-xl-5 g-4 justify-content-center text-center">
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                        <img src="/images/azure-expressroute/icon-like.png" alt="Fast, reliable, and secure connections"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Kết nối nhanh chóng, đáng tin cậy và an toàn </span></h3>
                        <p>
                            Việc có kết nối trực tiếp với đám mây cung cấp độ tin cậy cao hơn, tốc độ nhanh hơn, độ trễ thấp hơn và bảo mật cao hơn các kết nối Internet thông thường.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInDown" data-wow-delay="0.4s">
                        <img src="/images/azure-expressroute/icon-hand.png" alt="Avoid complexity and added costs"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Tránh phức tạp và tránh tăng thêm chi phí</span></h3>
                        <p>
                            Trong một số trường hợp, việc chuyển dữ liệu giữa các hệ thống lưu trữ tại chỗ và GCP có thể mang lại lợi ích đáng kể về chi phí mà không làm tắc nghẽn kết nối Internet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInRight" data-wow-delay="0.6s">
                        <img src="/images/azure-expressroute/icon-connect.png" alt="Build hybrid applications"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Xây dựng các ứng dụng Hybrid</span></h3>
                        <p>
                            Với các kết nối có thể đoán trước, đáng tin cậy và thông lượng cao; khách hàng có thể xây dựng các ứng dụng trải dài cơ sở hạ tầng lưu trữ tại chỗ và GCP mà không ảnh hưởng đến hiệu suất mạng.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInBottomLeft" data-wow-delay="0.8s">
                        <img src="/images/azure-expressroute/icon-extend.png" alt="Extend your datacenter"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Mở rộng trung tâm dữ liệu của khách hàng</span></h3>
                        <p>
                            Thêm tài nguyên tính toán và dung lượng lưu trữ trên đám mây, đồng thời tận hưởng quy mô và tính kinh tế của public cloud mà không cần phải lo lắng về bảo mật.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInUpBig" data-wow-delay="1.2s">
                        <img src="/images/azure-expressroute/icon-d.png" alt="Service Level Agreement"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Cam kết chất lượng dịch vụ (SLA)</span></h3>
                        <p>
                            Với kết nối riêng tư tới GCP, khách hàng có được sự yên tâm về SLA của chất lượng mạng FPT, thứ không thể đạt được nếu sử dụng đường truyền Internet
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInBottomRight" data-wow-delay="1s">
                        <img src="/images/azure-expressroute/icon-connect.png" alt="Service Level Agreement"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Tính linh hoạt</span></h3>
                        <p>
                            Khi nhu cầu sử dụng GCP của khách hàng thay đổi, FPT Cloud Connect có thể dễ dàng điều chỉnh mức băng thông của doanh nghiệp lên hoặc xuống để phù hợp với nhu cầu sử dụng cụ thể của doanh nghiệp.
                        </p>
                    </div>
                </div>
            </div>
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 pt-2 wow animate__animated animate__fadeInUp">
                <span>Trải nghiệm Google Cloud Platform như ở hạ tầng on-premises </span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp">
                Đến gần hơn với đám mây với FPT Telecom International. Liên hệ với chúng tôi để hiểu thêm về giải pháp và giảm thiểu chi phí mạng đám mây của bạn.
            </p>
            <div class="my-xl-5 my-4 text-end">
                <a href="https://cloudconnect.vn/vi/aws-public-support-statement"
                    class="btn btn-success px-4 fw-bold wow animate__animated animate__headShake">
                    YÊU CẦU TƯ VẤN
                </a>
            </div>
        </div>

        <?php } if (App::isLocale('en')) { ?>

        <div class="banner py-5">
            <div class="container py-xl-5">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-9 pe-lg-5">
                        <h2 class="fw-bold mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            The easiest way to connect to Google Cloud Platform (GCP)
                        </h2>
                        <p class="h3 mb-xl-5 mb-4 fw-light lh-sm wow animate__animated animate__fadeInUp"
                            data-wow-delay=".2s">
                            Secure & private real-time access to Google Cloud Platform from wherever you are in Vietnam.
                        </p>
                        <div class="wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <a href="/vi/contact"
                                class="btn btn-success btn-lg px-4 fw-bold text-uppercase wow animate__animated animate__headShake"
                                data-wow-delay=".8s">
                                REQUEST A CONSULTATION</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3
                class="color-blue h2 fw-bold mt-lg-5 mt-4 wow animate__animated animate__animate__animated animate__fadeInUp">
                <span class="">Directly connect to Google Cloud Platform with FPT Cloud Connect</span>
            </h3>
            <p class="text-center my-5 wow animate__animated animate__fadeInUp">
                <img class="w-75" src="/images/google-cloud-interconnect/fpt-cloud-connect.png" alt="">
            </p>
            <p class="wow animate__animated animate__fadeInUp">
                Next-generation connectivity services provide the performance, speed, and control you need to conduct smart
                cloud business. <br> Connecting to Google Cloud Platform is made easy via our Software Defined Networking
                technology and Google Cloud Partner Interconnect integration. <br> Forget about high latency, slow
                provisioning, and security concerns. Say hello to cloud networking solutions that are quick and simple.
            </p>
            <h3
                class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 wow animate__animated animate__animate__animated animate__fadeInUp">
                <span>Access one of the leading cloud services in the world</span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp">
                Unlock your business’s potential with connectivity to world-class applications by Google. <br>
                Our worldwide peering services make it simple to connect to G Suite / Google Workspace. <br>
                From a single interconnection point, you can easily establish an any-to-any secure environment between your
                Google Cloud Platform instances and other cloud providers. <br>
                With a verified Google Cloud Interconnect Partner - FPT Telecom International, you can adopt, create, and
                deploy your network in GCP in just a mouse click.
            </p>
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 wow animate__animated animate__fadeInUp">
                <span>FPT Telecom International is the Official Google Cloud Interconnect Service Provider in Vietnam</span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp">
                <img src="/images/google-cloud-interconnect/googel-cloud-partner.png" alt="" class="ms-md-4 img-fluid"
                    style="max-height: 200px; float: right;">
                With more than 25 years of experience in providing telecommunications services in Vietnam, FPT Telecom now
                provides a unique experience for our customers through our own FPT Cloud Connect service, giving you a
                greater control of your pre- and post-sales activities. The on-demand connectivity model removes the
                complexity of connecting to Google Cloud Platform (GCP) with one simple service. <br> Enterprises using GCP
                through the Google Cloud Interconnect provided by FPT Cloud Connect benefit from the speed and agility of
                the Cloud in networking. <br> We make it simple! Providing you with the faster and more secure way to serve
                your new Cloud demand, we contribute to accelerating Cloud adoption around the world.
            </p>
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 wow animate__animated animate__fadeInUp">
                <span>How it works</span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp">
                FPT Cloud Connect is a service that provides a private connection between customers' on-premises
                infrastructure or an infrastructure in a colocation environment in Vietnam to global Cloud providers with no
                restrictions on countries or providers. FPT Cloud Connect uses MPLS Layer 2 / Layer 3 protocol.
            </p>
            <p class="mb-lg-5 mb-4 wow animate__animated animate__fadeInUp">
                <img src="/images/google-cloud-interconnect/map.png" class="img-fluid" alt="">
            </p>
        </div>

        <div class="container-fluid bgi py-5 wow animate__animated animate__fadeIn">
            <h3 class="text-center h2 fw-bold my-4 wow animate__animated animate__backInDown">
                <span>Secure, high-throughput, low latency connections that bypass the Internet</span>
            </h3>
        </div>

        <div class="container">
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 text-center wow animate__animated animate__fadeInUp">
                We provide Google Cloud Partner Interconnect connections <br> (bandwidth managed by FPT Telecom)
            </h3>
            <ul>
                <li class="wow animate__animated animate__fadeInUp">
                    More bandwidth options: 50M-100M-200M-300M-400M-500M-1G-2G-5G-10G.
                </li>
                <li class="wow animate__animated animate__fadeInUp">
                    Provision and QoS by FPT Telecom.
                </li>
                <li class="wow animate__animated animate__fadeInUp">
                    Each Google Cloud Interconnect connection has a predefined VLAN and bandwidth.
                </li>
                <li class="wow animate__animated animate__fadeInUp">
                    Only 1 virtual Interface allowed per Google Cloud Interconnect connection.
                </li>
            </ul>
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-3 text-center wow animate__animated animate__fadeInUp">
                <span>That’s why FPT Cloud Connect?</span>
            </h3>
            <div class="row g-xl-5 g-4 justify-content-center text-center">
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                        <img src="/images/azure-expressroute/icon-like.png" alt="Fast, reliable, and secure connections"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Fast, reliable, and secure connections</span></h3>
                        <p>
                            Direct connections to the cloud offer more reliability, faster speeds, lower latencies, and
                            higher security than typical Internet connections.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInDown" data-wow-delay="0.4s">
                        <img src="/images/azure-expressroute/icon-hand.png" alt="Avoid complexity and added costs"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Avoid complexity and added costs</span></h3>
                        <p>
                            In some cases, transferring data between on-premises systems and Azure can yield significant
                            cost benefits without clogging your Internet connection.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInRight" data-wow-delay="0.6s">
                        <img src="/images/azure-expressroute/icon-connect.png" alt="Build hybrid applications"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Build hybrid applications</span></h3>
                        <p>
                            With predictable, reliable, and high-throughput connections; you can build applications that
                            span on-premises infrastructure and Azure without conceding network performance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInBottomLeft" data-wow-delay="0.8s">
                        <img src="/images/azure-expressroute/icon-extend.png" alt="Extend your datacenter"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Extend your datacenter</span></h3>
                        <p>
                            Add compute and storage capacity in the cloud and enjoy the scale and economics of the public
                            cloud without having to compromise on security.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInUpBig" data-wow-delay="1.2s">
                        <img src="/images/azure-expressroute/icon-d.png" alt="Service Level Agreement"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Service Level Agreement</span></h3>
                        <p>
                            With a private connection to Azure, you get the peace of mind of a network SLA, something that
                            is unavailable with Internet transmissions.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="aer p-3 h-100 wow animate__animated animate__fadeInBottomRight" data-wow-delay="1s">
                        <img src="/images/azure-expressroute/icon-connect.png" alt="Service Level Agreement"
                            class="img-fluid">
                        <h3 class="fw-bold mt-2">Elasticity</span></h3>
                        <p>
                            As your usage of GCP changes, FPT Cloud Connect can easily adjust your bandwidth levels, scaling it up or down to match your GCP usage.
                        </p>
                    </div>
                </div>
            </div>
            <h3 class="color-blue h2 fw-bold mt-lg-5 mt-4 mb-lg-4 mb-2 pt-2 wow animate__animated animate__fadeInUp">
                <span>Google Cloud Platform at your doorstep</span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp">
                Get closer to the cloud with FPT Telecom International. Contact us to understand more of the solution and
                lower your Cloud networking costs.
            </p>
            <div class="my-xl-5 my-4 text-end">
                <a href="https://cloudconnect.vn/vi/aws-public-support-statement"
                    class="btn btn-success px-4 fw-bold wow animate__animated animate__headShake">
                    REQUEST A CONSULTATION
                </a>
            </div>
        </div>
        
        <?php } ?>
    </div>
    

@endsection
