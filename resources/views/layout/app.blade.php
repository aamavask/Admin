<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>

    @include('layout.navbar')
    @include('layout.right_sidebar')
    @yield('content')
    

    @include('layout.footer')

   @include('layout.scripts')
</body>
</html>