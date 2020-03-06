<!DOCTYPE html>
<html lang="en">

    @include('layout.head')

    <body>
        <div class="probootstrap-loader"></div>

        @include('layout.header')

        @yield('content')

        @include('layout.footer')

        <script src="js/scripts.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
