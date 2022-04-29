<!DOCTYPE html>
<html lang="en">

    @include('layouts.header')

    <body>
        @include('layouts.preloader')
        @include('layouts.navtop')



    <!--Start#hero-->
    <section id="hero">
        @include('layouts.mainheader')
        @include('layouts.player')
    </section><!--End#hero-->


    <!-- Start episods Section -->
    <section id="episods" class="episods ">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
    <!-- End episods Section -->


        @include('layouts.about')

{{--     @include('layouts.teams')--}}

{{--    @include('layouts.footersec')--}}

        @yield('customJs')

    @include('layouts.footer')


    </body>

</html>
