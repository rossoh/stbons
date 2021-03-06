@extends('app')

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
  margin-bottom: 10px;
}
.form-signin-info {
	margin-bottom: 15px;
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
.form-signin input[type="username"] {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>

<div class="container">

  <form class="form-signin" method="POST" action="/auth/login">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<h2 class="form-signin-heading">Please sign in</h2>
	<h4 class="form-signin-info, text-muted">The signin details are on the letter about the Big Science Challenge</h4>
	<label for="inputUsername" class="sr-only">Username</label>
		<input type="username" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
	<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="password" name="password" class="form-control" placeholder="Password"  type="password" required>
	<div class="checkbox">
	  <label>
		<input type="checkbox" value="remember"> Remember me
	  </label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>

</div>

@endsection('content')