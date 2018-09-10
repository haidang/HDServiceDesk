<!DOCTYPE html>
  <html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="UTF-8">
    <title>@hasSection('htmlheader_title')@yield('htmlheader_title') - @endif{{ HDConfigs::getByKey('sitename') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset("vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <!-- <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('vendor/almasaeed2010/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Toastr -->
    <link href="{{ asset('public/AdminLTE/plugins/CodeSeven-toastr/build/toastr.css')}}"  rel="stylesheet"/>
    <!-- PACE -->
    <link href="{{ asset('vendor/almasaeed2010/adminlte/plugins/pace/pace.css')}}" rel="stylesheet" />
    @hasSection('anotherCSS')@yield('anotherCSS')@endif
    <!-- Theme style -->
    <link href="{{ asset('vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css')}}" rel="stylesheet" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset('public/css/common.css')}}" rel="stylesheet" type="text/css" />
  </head>
  <body class="hold-transition fixed skin-blue sidebar-mini {{ Session::get('sidebarState') }}">
  <div class="wrapper">
    <!-- Main Header -->
    @include('layouts.partials.header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('layouts.partials.sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          @yield('content')
      </div><!-- /.content-wrapper -->
      <!-- Main Footer -->
      @include('layouts.partials.footer')
  </div><!-- ./wrapper -->
  <!-- jQuery 2.1.3 -->
  <script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- FastClick -->
  <script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js') }}" type="text/javascript"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('public/AdminLTE/plugins/CodeSeven-toastr/toastr.js')}}"></script>
  <!-- PACE -->
  <script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/PACE/pace.js')}}"></script>
  <script src="{{ asset('public/js/HDServiceDesk.js') }}" type="text/javascript"></script>
  @hasSection('anotherScripts')@yield('anotherScripts')@endif
  <!-- <script src="{{ asset('vendor/almasaeed2010/adminlte/dist/js/demo.js') }}"></script> -->
  <script type="text/javascript">
    var urlStoreSidebarState = '{{ route('storeSidebarState') }}';
  </script>
  </body>
</html>
