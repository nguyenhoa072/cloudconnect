@extends('layouts.app')

@section('content')
    <style>
        @media (min-width: 992px) {
            .aws-public-support-statement-text {
                font-size: 1.25rem;
            }
        }

    </style>

    <div class="aws-direct-connect">
        <div class="banner">
            <img src="/images/aws-direct-connect/banner.png" alt="" class="img-fluid">
        </div>

        <?php if (App::isLocale('vi')) { ?>

        <div class="container-fluid container-lg">
            <div class="row my-xl-5 my-4">
                <div class="col-sm-3">
                    <p class="mb-lg-4 mb-4">
                        <img src="/images/aws-public-support-statement/aws-technology.png" alt="aws technology"
                            class="img-fluid">
                    </p>
                    <p class="mb-lg-4 mb-4">
                        <img src="/images/aws-public-support-statement/aws-certified.png" alt="aws certified"
                            class="img-fluid">
                    </p>
                    <p class="mb-md-0 mb-4">
                        <img src="/images/aws-public-support-statement/aws-service-delivery.png" alt="aws service delivery"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-sm-9 aws-public-support-statement-text">
                    <p>
                        Amazon Web Services (AWS) là một nền tảng dịch vụ đám mây an toàn cho phép các doanh nghiệp có được
                        ngay lập tức sức mạnh tính toán, lưu trữ cơ sở dữ liệu, phân phối nội dung và các chức năng khác để
                        giúp họ mở rộng quy mô và phát triển.
                    </p>
                    <p>
                        FPT Telecom International, Đối tác Công nghệ Tiên tiến của AWS, đã phát triển giải pháp Kết nối Đám
                        mây để cung cấp và quản lý AWS Direct Connect. Chúng tôi cung cấp các dịch vụ kết nối nền tảng để
                        đẩy nhanh quá trình chuyển đổi kỹ thuật số của doanh nghiệp và di chuyển qua đám mây.
                    </p>
                    <p>
                        Giải pháp của chúng tôi kết nối các doanh nghiệp tại Việt Nam với các đám mây quốc tế phổ biến và
                        đáng tin cậy nhất, cung cấp cho khách hàng gói thiết bị mạng, kênh truyền, máy chủ và dịch vụ đồng
                        địa điểm hoàn chỉnh tại thị trường nước ngoài với các lựa chọn tài chính linh hoạt.
                    </p>
                    <p>
                        Khách hàng của chúng tôi tận dụng bí quyết này để chuyển đổi thành công sang đám mây, đồng thời
                        tránh bất kỳ cấu hình mạng hoặc cơ sở hạ tầng phức tạp nào.
                    </p>
                    <p>
                        FPT Telecom International cung cấp các giải pháp Kết nối đám mây, Tư vấn và Dịch vụ quản lý hạ tần
                        Đám mây AWS.
                    </p>
                </div>
            </div>
        </div>

        <?php } if (App::isLocale('en')) { ?>

        <div class="container-fluid container-lg">
            <div class="row my-xl-5 my-4">
                <div class="col-sm-3">
                    <p class="mb-lg-4 mb-4">
                        <img src="/images/aws-public-support-statement/aws-technology.png" alt="aws technology"
                            class="img-fluid">
                    </p>
                    <p class="mb-lg-4 mb-4">
                        <img src="/images/aws-public-support-statement/aws-certified.png" alt="aws certified"
                            class="img-fluid">
                    </p>
                    <p class="mb-md-0 mb-4">
                        <img src="/images/aws-public-support-statement/aws-service-delivery.png" alt="aws service delivery"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-sm-9 aws-public-support-statement-text">
                    <p>
                        Amazon Web Services (AWS) is a secure cloud services platform that enables businesses to instantly
                        acquire compute power, database storage, content delivery, and other functionality to help them
                        scale and grow.
                    </p>
                    <p>
                        FPT Telecom International, an AWS Advanced Technology Partner, has developed a Cloud Connectivity
                        solution for AWS Direct Connect provisioning and management. We provide foundational connectivity
                        services to accelerate enterprise digital transformation and cloud migration.
                    </p>
                    <p>
                        Our solution connects businesses in Vietnam to the most popular and trusted international Clouds,
                        providing our customers with a complete bundle of network equipment, transmission channels, servers,
                        and co-location service in foreign markets with flexible financing options.
                    </p>
                    <p>
                        Our clients leverage this know-how to successfully transition to the cloud, while avoid any complex
                        networking or infrastructure configuration.
                    </p>
                    <p>
                        FPT Telecom International offers Cloud Connectivity solutions, Consulting, and Managed AWS Cloud
                        Services.
                    </p>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>

@endsection

@section('js')

    <script>

    </script>

@endsection
