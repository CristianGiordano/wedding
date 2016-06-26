<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CRISTIAN &amp; LUCY</title>

    <link rel="icon" href="/images/favicon.jpg">

    @include('partials.styles')
</head>

<body class="@yield('body.classes')">

@include('partials.preloader')

@include('partials.navigation')

@yield('navigation.after')

<section id="content">

   @yield('content')

</section>

@include('partials.footer')

@include('partials.scripts')

</body>
</html>