@extends('layouts.app')

@section('content')

    <style>
        .bgi {
            background: url(/images/azure-expressroute/bg.png) no-repeat right center;
            background-size: cover;
            color: #fff;
        }

        .color-blue {
            color: #0070c0;
        }

    </style>

    @include('../pages/banner')

    <?php if (App::isLocale('vi')) { ?>

    <div class="container">
        <h3 class="color-blue">Directly connect to Google Cloud Platform with FPT Cloud Connect</h3>
        <p class="text-center"><img src="" alt=""></p>
        <p>
            Next-generation connectivity services provide the performance, speed, and control you need to conduct smart
            cloud business. <br>
            Connecting to Google Cloud Platform is made easy via our Software Defined Networking technology and Google Cloud
            Partner Interconnect integration. <br>
            Forget about high latency, slow provisioning, and security concerns. Say hello to cloud networking solutions
            that are quick and simple.
        </p>
        <h3 class="color-blue">Access one of the leading cloud services in the world</h3>
        <p>
            Unlock your business’s potential with connectivity to world-class applications by Google. <br>
            Our worldwide peering services make it simple to connect to G Suite / Google Workspace. <br>
            From a single interconnection point, you can easily establish an any-to-any secure environment between your
            Google Cloud Platform instances and other cloud providers. <br>
            With a verified Google Cloud Interconnect Partner - FPT Telecom International, you can adopt, create, and deploy
            your network in GCP in just a mouse click.
        </p>
        <h3 class="color-blue">FPT Telecom International is the Official Google Cloud Interconnect Service Provider in Vietnam</h3>
        <p>
            <img src="/images/google-cloud-interconnect/googel-cloud-partner.png" alt="Pineapple" class="ms-md-4 img-fluid"
                style="height: 170px; float: right;">
            With more than 25 years of experience in providing telecommunications services in Vietnam, FPT Telecom now
            provides a unique experience for our customers through our own FPT Cloud Connect service, giving you a greater
            control of your pre- and post-sales activities. The on-demand connectivity model removes the complexity of
            connecting to Google Cloud Platform (GCP) with one simple service. <br>
            Enterprises using GCP through the Google Cloud Interconnect provided by FPT Cloud Connect benefit from the speed
            and agility of the Cloud in networking. <br>
            We make it simple! Providing you with the faster and more secure way to serve your new Cloud demand, we
            contribute to accelerating Cloud adoption around the world.
        </p>
        <h3 class="color-blue">How it works</h3>
        <p>
            FPT Cloud Connect is a service that provides a private connection between customers' on-premises infrastructure
            or an infrastructure in a colocation environment in Vietnam to global Cloud providers with no restrictions on
            countries or providers. FPT Cloud Connect uses MPLS Layer 2 / Layer 3 protocol.
        </p>
        <p><img src="/images/google-cloud-interconnect/map.png" class="img-fluid" alt=""></p>
    </div>
    <div class="container-fluid bgi py-5">
        <h3 class="text-center my-4">Secure, high-throughput, low latency connections that bypass the Internet</h3>
    </div>
    <div class="container">

        <h3 class="text-center">
            We provide Google Cloud Partner Interconnect connections <br> (bandwidth managed by FPT Telecom)
        </h3>
        <ul>
            <li>More bandwidth options: 50M-100M-200M-300M-400M-500M-1G-2G-5G-10G.</li>
            <li>Provision and QoS by FPT Telecom.</li>
            <li>Each Google Cloud Interconnect connection has a predefined VLAN and bandwidth.</li>
            <li>Only 1 virtual Interface allowed per Google Cloud Interconnect connection.</li>
        </ul>
        <h3 class="text-center">That’s why FPT Cloud Connect</h3>
        <div class="row"></div>
        <h3 class="color-blue">Google Cloud Platform at your doorstep </h3>
        <p>
            Get closer to the cloud with FPT Telecom International. Contact us to understand more of the solution and lower
            your Cloud networking costs.
        </p>
        <div class="my-xl-5 my-4 text-end">
            <a href="https://cloudconnect.vn/vi/aws-public-support-statement"
                class="btn btn-success btn-lg px-4 font-weight-bold wow headShake">
                REQUEST A CONSULTATION
            </a>
        </div>
    </div>

    <?php } if (App::isLocale('en')) { ?>

    @include('../pages/index_en')

    <?php } ?>

@endsection
