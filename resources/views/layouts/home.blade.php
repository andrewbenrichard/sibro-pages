<!DOCTYPE html>
<html lang="zxx">


<head>
    @include('includes.head')
</head>

<body class="defult-home">

    <div class="offwrap"></div>

    <div class="main-content">

        <div class="full-width-header">
            @include('includes.header')

        </div>

        @yield('content')
    </div>
    @include('includes.footer')
    @include('includes.scripts')
</body>

</html>