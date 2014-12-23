@extends('layouts.master')

@section('content')
<div class="row top_distance">
	<div class="col-lg-4 col-lg-offset-4 well">
		<h1>Ini Yogi Bukan?</h1>
		@if (Session::has('alert'))
			<div class="alert alert-info">
				<div class="container">
					{{Session::get('alert')}}
				</div>
			</div>
		@endif
		
		{{Form::open(['route' => 'sessions.store'])}}
	
			<div class="form-group">
				{{Form::label('username', 'Username')}}
				{{Form::text('username', null, ['class'=>'form-control'])}}
				{{$errors->first('username')}}
			</div>

			<div class="form-group">
				{{Form::label('password', 'Password')}}
				{{Form::password('password', ['class'=>'form-control'])}}
				{{$errors->first('password')}}
			</div>
			<div class="form-group">
				{{Form::submit('Login', ['class'=>'btn btn-primary form-control'])}}
			</div>
		{{Form::close()}}
	</div>
</div>
@stop