@extends('layouts.master')
@section('content')

@include('errors.regerrors')

<div id="login" class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <div class="account-wall">
                <h1 class="text-center login-title">Gruntstyle Intranet Logins <i class="fa fa-lock"></i> </h1>
                <form class="form-signin" action="/auth/login" method="post">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="text" class="form-control" placeholder="Email" name="email" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <label class="checkbox pull-left remember-me">
                        <input type="checkbox" value="remember"> Remember me
                    </label>
                    <a href="/password/reset" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <!-- <a href="/auth/register" class="text-center new-account">Create an account </a> -->
        </div>
    </div>
</div>
@stop
