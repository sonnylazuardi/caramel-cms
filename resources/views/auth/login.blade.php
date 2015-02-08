@extends('app')

@section('content')
<div class="row">
	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	    <p>Please input your credential below...</p>

	    @if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		
	    <form name="loginForm" id="loginForm" novalidate="" method="post">
	    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        <div class="row control-group">
	            <div class="form-group col-xs-12 floating-label-form-group controls">
	                <label>Email Address</label>
	                <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required="" data-validation-required-message="Please enter your email address." value="{{ old('email') }}">
	                <p class="help-block text-danger"></p>
	            </div>
	        </div>
	        <div class="row control-group">
	            <div class="form-group col-xs-12 floating-label-form-group controls">
	                <label>Password</label>
	                <input type="password" class="form-control" placeholder="Password" name="password" id="phone" required="" data-validation-required-message="Please enter your password.">
	                <p class="help-block text-danger"></p>
	            </div>
	        </div>
	        <div class="row control-group">
	            <div class="form-group col-xs-12 controls">
	            	<label>
	            		<br>
						<input type="checkbox" name="remember"> Remember Me
					</label>
	            </div>
	        </div>
	        <br>
	        <div id="success"></div>
	        <div class="row">
	            <div class="form-group col-xs-12">
	                <button type="submit" class="btn btn-default">Login</button> 
	                <a href="{{url('/password/email')}}">Forgot Your Password?</a>
	            </div>
	        </div>
	    </form>
	</div>
</div>

@endsection
