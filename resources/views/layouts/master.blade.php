<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @include('partials.stylesheet.home')
    @yield('stylesheet')
   {!! Html::style('css/style.css') !!}

</head>
<body class="@yield('class-body', 'nav-md' )" >
    <div class="container body">
        <div class="main_container">
            @include('partials.sidebar')
            @include('partials.header')
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include('partials.messages')
                        @yield('content')
                    </div>
                </div>
            </div>

            @include('partials.footer')
        </div>
    </div>

    @include('partials.scripts.home')
    @yield('script')
    {{ Html::script('js/custom.js') }}

</body>
</html>
