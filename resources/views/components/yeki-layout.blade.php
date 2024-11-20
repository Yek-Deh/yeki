<!DOCTYPE html>
<html lang="en">

@include('layouts.header')
<body class="container">
@include('layouts.navbar')
{{--@yield('content')--}}
{{$content}}
@include('layouts.footer')
</body>
</html>
