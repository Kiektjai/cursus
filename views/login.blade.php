@extends('base')

@section('browsertitle')
Login
@stop

@section('content')
<div class="row">
  <div class="col-md-2 well">

  </div>
  <div class="col-md-8">
    <h3>Log in</h3>
    <hr>
    <form name="loginform" id="loginform" action="/login" method="post" class="form-horizontal">
      <input type="hidden" name="_token" value="{!! htmlspecialchars($signer->getSignature()) !!}">
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control email required" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control required" name="password" id="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>
      <hr>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-2">

  </div>
</div>
@stop

@section('bottomjs')
<script>
$(document).ready(function(){
  $("#loginform").validate();
});
</script>
@stop
