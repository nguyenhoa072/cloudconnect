@extends('layouts.app')

@section('content')

<style>
    
    .azure_expressroute {
        font-size: 1.25rem;
    }

    .azure_expressroute .banner {
        position: relative;
        background: url(/images/azure-expressroute/banner.png) no-repeat center;
        background-size: cover;
    }

    .azure_expressroute .border-top {
        border-width: 3px !important;
        border-color: #f17126 !important;
    }

    .azure_expressroute .bgi {
        background: url(/images/azure-expressroute/bg.png) no-repeat right center;
        background-size: cover;
        color: #fff;
    }

    .azure_expressroute .aer{
        border-radius: 10px;
        box-shadow: 0 0 5px 5px rgba(21, 105, 178, .1);
    }
</style>

<?php if (App::isLocale('vi')) { ?>

@include('../pages/azure_expressroute_vi')

<?php } if (App::isLocale('en')) { ?>

@include('../pages/azure_expressroute_en')

<?php } ?>

@endsection