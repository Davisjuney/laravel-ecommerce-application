<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ecommerce">
    @include('site.partials.new.styles')
</head>
<body data-spy="scroll" data-target="#navbar-menu">
    @include('site.partials.header')
    @include('site.partials.new.hero')
    @include('site.partials.new.features')
    @yield('content')
    @include('site.partials.new.footer')
    <!-- Back to top -->
    <a href="#" class="back-to-top"> <i class="zmdi zmdi-chevron-up"> </i> </a>
    @include('site.partials.new.scripts')
</body>
</html>