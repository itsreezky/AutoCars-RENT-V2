<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>Market - AutoCars</title>

    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--                 Stylesheets                    -->
    <!-- ===============================================-->

    @include('Component.assets.css')

</head>

<body>

    <!-- ===============================================-->
    <!--                 SweetAlert                    -->
    <!-- ===============================================-->

    @include('Component.public.alert')

    <!-- ===============================================-->
    <!--                   Main Content                 -->
    <!-- ===============================================-->

    <main class="main" id="top">

        <!-- ===============================================-->
        <!--               Section Topbar                   -->
        <!-- ===============================================-->

        @include('Component.public.topbar')

        <!-- ===============================================-->
        <!--                 Section Menu                   -->
        <!-- ===============================================-->

        @include('Component.public.menu')

        <div class="ecommerce-homepage pt-2 mb-9">

            <!-- ===============================================-->
            <!--               Section Wishlist                 -->
            <!-- ===============================================-->

            @include('Component.market.rent')

            <!-- ===============================================-->
            <!--                 Support Chat                   -->
            <!-- ===============================================-->

            @if (Auth::user())

            @include('Component.public.support')

            @endif

        </div>

        <!-- ===============================================-->
        <!--                 About                         -->
        <!-- ===============================================-->

        @include('Component.public.about')

    </main>

    <!-- ===============================================-->
    <!--               Customize WebApps                -->
    <!-- ===============================================-->

    @include('Component.public.customize')

    <!-- ===============================================-->
    <!--                   JavaScripts                  -->
    <!-- ===============================================-->

    @include('Component.assets.js')

</body>

</html>
