@extends('layouts.app')

@section('content')

@include('../pages/banner')

<?php if (App::isLocale('vi')) { ?>

@include('../pages/index_vi')

<?php } if (App::isLocale('en')) { ?>

@include('../pages/index_en')

<?php } ?>

@endsection