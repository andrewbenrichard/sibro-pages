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
    @include('includes.pilot.head')
</head>

<body>


    {{-- @include('includes.pilot.header') --}}

    <main>

        @yield('content')
    </main>
    @include('includes.pilot.footer')
</body>

</html>