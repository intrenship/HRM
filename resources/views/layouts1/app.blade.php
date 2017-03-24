<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('/js/materialize.min.js')}}"></script>

<script type="text/javascript">
	(function ($){
		$(function (){
			$('.button-collapse').sideNav();
		});
		
		})(jQuery);
</script>
@section('js')

@show
<html lang="en">

@section('htmlheader')
    @include('layouts1.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('layouts1.partials.mainheader')

    @include('layouts1.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('layouts1.partials.controlsidebar')

    @include('layouts1.partials.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('layouts1.partials.scripts')
@show

</body>
</html>
