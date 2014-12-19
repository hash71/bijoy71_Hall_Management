<!DOCTYPE html>

<html lang="en">

@include('layouts.default.metaHead')

<body>

    <section id="container" >

        @include('layouts.default.header')

        @include('layouts.default.sidebar')


        @yield('index')
        @yield('usersIndex')
        @yield('usersCreate')
        @yield('studentsIndex')
        @yield('studentsCreate')

    </section>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->

    {{HTML::script('assets/js/jquery.js')}}
    {{HTML::script('assets/js/bootstrap.min.js')}}
    {{HTML::script('assets/js/jquery.dcjqaccordion.2.7.js')}}
    {{HTML::script('assets/js/jquery.scrollTo.min.js')}}
    {{HTML::script('assets/js/jquery.slimscroll.js')}}
    {{HTML::script('assets/js/jquery.nicescroll.js')}}

    <!--common script init for all pages-->
    {{HTML::script('assets/js/scripts.js')}}



</body>
</html>
