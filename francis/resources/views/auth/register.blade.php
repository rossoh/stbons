@extends('app')

@if(in_array($_SERVER['REMOTE_ADDR'], Config::get('app.ip_whitelist')))

@section('content')

<style>
body {
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 20px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="topof2"] {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="bottomof2"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.password-top {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.password-bottom {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>


<div class="container">

<form class="form-signin" method="POST" action="/auth/register">
	{!! csrf_field() !!}
	<h3 class="form-signin-heading">Register as a new user</h3>
	<label for="inputName" class="sr-only">Name</label>
	<input type="topof2" id="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>
	<input type="bottomof2" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
	<label for="inputPassword" class="sr-only">Password</label>
	<input type="password" id="password" name="password" class="form-control password-top" placeholder="Password" required>
	<label for="confirmPassword" class="sr-only">Confirm password</label>
	<input type="password" id="password_confirmation" name="password_confirmation" class="form-control password-bottom" placeholder="Re-enter password" required>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  </form>

@endsection('content')

@else 
	
@endif