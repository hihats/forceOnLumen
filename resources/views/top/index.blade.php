@extends('layout')

@section('content')
<h4>Sign in</h4>
<form action='{{ url("login") }}' method="post">
  <div class="row">
    <div class="ten columns">
      <label for="login">User</label>
      <input class="u-full-width" type="text" name="email">
    </div>
  </div>
  <div class="row">
    <div class="ten columns">
      <label for="login">Password</label>
      <input class="u-full-width" type="password" name="password">
    </div>
  </div>
  <input class="button" type="submit" value="Login">
</form>
@stop
