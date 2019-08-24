<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        @include('layouts.partials.head')
    </head>
    <body class="stretched clearfix no-transition">
        @include('layouts.partials.nav')
        @yield('content')
        @include('layouts.partials.footer')
        @include('layouts.partials.footer-scripts')
    </body>
</html>