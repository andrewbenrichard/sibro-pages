<!DOCTYPE html>
<html lang="zxx">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DLZBQ88N6Y"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DLZBQ88N6Y');
</script>

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