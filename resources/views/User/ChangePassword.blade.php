@extends('layouts.Master')

@section('title', 'Register')

@section('content')


		<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Change Password</h3>
					</div>
					<div class="panel-body">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>

						{{ Form::open(['action' => 'User@StoreNewPassword']) }}
						<fieldset>
							@if (session()->has('flash_message'))
									<div class="form-group">
										<p>{{ session()->get('flash_message') }}</p>
									</div>
							@endif
							<div class="form-group">
								{!! Form::password('old_password', ['placeholder' => 'Old Password', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>
							<!-- Password field -->
							<div class="form-group">
								{!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>
							<!-- Password Confirmation field -->
							<div class="form-group">
								{!! Form::password('password_confirmation', ['placeholder' => 'Password Confirm', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>
							<div class="form-group">
							  {{ Form::submit('Change Password', array('class' => 'btn')) }}
							</div>
						</fieldset>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection