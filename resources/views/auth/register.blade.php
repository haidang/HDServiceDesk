@extends('layouts.auth')

@section('content')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{ route('home') }}"><b>{{ HDConfigs::getByKey('sitename_1') }}</b> {{ HDConfigs::getByKey('sitename_2') }}</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">{{ trans('auth.registerNewUser')}}</p>
    <form action="{{ url('/register') }}" method="post">
      <div class="form-group has-feedback{{ $errors->has('UserName') ? ' has-error' : '' }}">
        <input name="UserName" id="UserName" type="text" class="form-control" placeholder="{{ trans('auth.username')}}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('UserName'))<span class="help-block"><strong>{{ $errors->first('UserName') }}</strong></span>@endif
      </div>
      <div class="form-group has-feedback{{ $errors->has('Password') ? ' has-error' : '' }}">
        <input name="Password" id="Password" type="password" class="form-control" placeholder="{{ trans('passwords.pass')}}">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('Password'))<span class="help-block"><strong>{{ $errors->first('Password') }}</strong></span>@endif
      </div>
      <div class="form-group has-feedback{{ $errors->has('rePassword') ? ' has-error' : '' }}">
        <input name="rePassword" id="rePassword" type="password" class="form-control" placeholder="{{ trans('passwords.repass')}}">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        @if ($errors->has('rePassword'))<span class="help-block"><strong>{{ $errors->first('rePassword') }}</strong></span>@endif
      </div>
      <div class="form-group has-feedback{{ $errors->has('FirstName') ? ' has-error' : '' }}">
        <input name="FirstName" id="FirstName" type="text" class="form-control" placeholder="{{ trans('auth.firstname')}}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('FirstName'))<span class="help-block"><strong>{{ $errors->first('FirstName') }}</strong></span>@endif
      </div>
      <div class="form-group has-feedback{{ $errors->has('LastName') ? ' has-error' : '' }}">
        <input name="LastName" id="LastName" type="text" class="form-control" placeholder="{{ trans('auth.lastname')}}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('LastName'))<span class="help-block"><strong>{{ $errors->first('LastName') }}</strong></span>@endif
      </div>
      <div class="form-group has-feedback{{ $errors->has('mobile') ? ' has-error' : '' }}">
        <input name="mobile" id="mobile" type="text" class="form-control" placeholder="{{ trans('auth.mobile')}}">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        @if ($errors->has('mobile'))<span class="help-block"><strong>{{ $errors->first('mobile') }}</strong></span>@endif
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> {{ trans('auth.agreeto')}} <a href="#">{{ trans('auth.term')}}</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('auth.register')}}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- {{ trans('commons.Or')}} -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="{{ url('/login')}}" class="text-center">{{ trans('auth.alreadyaccount')}}</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('vendor/almasaeed2010/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
@endsection
