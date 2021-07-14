@extends('clients.layouts.master')
@section('content')
	<!-- Slider -->
    @include('clients.home.slide')


	<!-- About -->
    @include('clients.home.home_about')


	<!-- Bureau -->
    @include('clients.home.home_bureau')


	<!-- Events -->
    @include('clients.home.home_event')
@stop