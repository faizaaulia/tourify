<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tourify</title>
    
    @include('includes.style')

    @stack('styles')
</head>

<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    @include('includes.script')

    @stack('scripts')
</body>

</html>