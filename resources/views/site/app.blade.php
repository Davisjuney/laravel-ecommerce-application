<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('site.partials.styles')
</head>
<body>   
@yield('hero')
@section('header')
    @include('site.partials.header')
@show 

@yield('content')
@include('site.partials.footer')
@include('site.partials.scripts')
</body>
</html>
