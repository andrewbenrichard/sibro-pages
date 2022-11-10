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
        <div class="rs-breadcrumbs inner-bg1">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumbs-wrap">
                        <h1 class="page-title">
                            {{$title}}
                        </h1>
                        <div class="breadcrumbs-title">
                            <span><a title="Go to Sasly HTML Template" href="/">Home</a></span>
                            <span class="post">{{$title}}</span>
                        </div>
                    </div>
                    <div class="bnr-inner-shape">
                        <div class="multi-shapes one">
                            <img class="horizontal3" src="/assets/images/breadcrumbs/shapes/b-sp1.png" alt="">
                        </div>
                        <div class="multi-shapes two">
                            <img class="spiner" src="/assets/images/breadcrumbs/shapes/b-sp2.png" alt="">
                        </div>
                        <div class="multi-shapes three">
                            <img class="rotated-style" src="/assets/images/breadcrumbs/shapes/b-sp3.png" alt="">
                        </div>
                        <div class="multi-shapes four">
                            <img class="horizontal2" src="/assets/images/breadcrumbs/shapes/b-sp4.png" alt="">
                        </div>
                        <div class="multi-shapes five">
                            <img class="scale" src="/assets/images/breadcrumbs/shapes/b-sp5.png" alt="">
                        </div>
                        <div class="multi-shapes six">
                            <img class="horizontal2" src="/assets/images/breadcrumbs/shapes/b-sp6.png" alt="">
                        </div>
                        <div class="multi-shapes seven">
                            <img class="veritcal2" src="/assets/images/breadcrumbs/shapes/b-sp7.png" alt="">
                        </div>
                        <div class="multi-shapes eight">
                            <img class="horizontal4" src="/assets/images/breadcrumbs/shapes/b-sp8.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        @yield('content')
    </div>
    @include('includes.footer')
    @include('includes.scripts')
</body>

</html>