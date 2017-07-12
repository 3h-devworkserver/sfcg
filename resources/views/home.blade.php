@extends('layouts.app')

@section('stylesheet')
    @include('partials.stylesheet.home')
{{--    @include('partials.stylesheet.datatables')--}}
@endsection

@section('class-body')
    nav-md
@endsection

@section('content')

    @include('partials.sidebar')
    @include('partials.header')

    <div class="right_col" role="main">
        <div class="">
            @if(Session::has('message'))
                <div class="alert alert-success">  {!!    Session::get('message') !!}</div>
            @endif

            @include('projectcrud')

        </div>
    </div>
    @include('partials.footer')

@endsection

@section('script')
    @include('partials.scripts.home')
{{--    @include('partials.scripts.datatables')--}}

@endsection