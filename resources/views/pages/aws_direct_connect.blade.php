@extends('layouts.app')

@section('content')

<style>
    .aws-direct-connect {
        font-size: 1.25rem
    }

    .aws-direct-connect .border-top {
        border-width: 3px !important;
        border-color: #f17126 !important;
    }
    
    .benefits-title {
        color: #f17126;
        font-size: 1.6rem;
    }

    @media (min-width: 992px) {
        .benefits-title {
            min-height: 66px;
        }
    }
</style>

<?php if (App::isLocale('vi')) { ?>

@include('../pages/aws_direct_connect_vi')

<?php } if (App::isLocale('en')) { ?>

@include('../pages/aws_direct_connect_en')

<?php } ?>

@endsection