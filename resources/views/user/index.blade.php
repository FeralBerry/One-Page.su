@extends('layouts.user.layout')
@section('header')
    @include('layouts.user.header')
@endsection
@section('left_sidebar')
    @include('layouts.user.left_sidebar')
@endsection
@section('right_sidebar')
    @include('layouts.user.right_sidebar')
@endsection
@section('breadcrumb')
    @include('layouts.user.breadcrumb')
@endsection
@section('content')
    @include('user.section.index.index')
@endsection
@section('footer')
    @include('layouts.user.footer')
@endsection
@section('demo-options')
    @include('layouts.user.demo-option')
@endsection

