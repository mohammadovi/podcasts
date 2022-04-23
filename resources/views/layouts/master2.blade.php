<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
@include('layouts.preloader')
@include('layouts.navtop')



<!--Start#hero-->
<section id="heroSecond" class=" mb-2">
    @yield('content')
</section><!--End#hero-->

@include('layouts.footer')
</body>

</html>
