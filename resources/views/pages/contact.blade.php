@extends('layouts/app',['title' => 'contact'])

@section('default')
  <div class="container">
  	<div class="row">
  		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
  			 <h2>Get In Touch</h2>
  			 <p class="text-muted">
  			 	<strong>If you having trouble with this services please
  			 	<a href="mailto:your-account@helpful.io" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</span></strong>
  			 </p>
  			 <form action="/contact" method="post">
  			 	{{ csrf_field()}}
  			 	<div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
  			 		<label for="name" class="control-label">Name</label>
  			 		<input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" required="required">
  			 		{!! $errors->first('name','<span class="text-danger">:message</span>')!!}
  			 	</div>
  			 	<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
  			 		<label for="email" class="control-label">Email</label>
  			 		<input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" required="required">
  			 		{!! $errors->first('email','<span class="text-danger">:message</span>')!!}
  			 	</div>
  			 	<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
		                <textarea class="form-control" name="message" rows="10" cols="10" required="required">{{ old('message') }}</textarea>
		                {!! $errors->first('message', '<span class="text-danger">:message</span>') !!}
		        </div>
		        <div class="form-group">
		                <button type="submit" class="btn btn-primary">Submit Enquiry &raquo;</button>
		            </div>
  			 </form>
  		</div>
  	</div>
  </div>
@endsection()