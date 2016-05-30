@extends('layouts.Master')

@section('title', 'Register')

@section('content')
		<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Register</h3>
					</div>
					<div class="panel-body">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>

						 {!! Form::open(['action' => 'Registration@Store']) !!}
						<fieldset>

							@if (session()->has('flash_message'))
								<div class="form-group">
									<p>{{ session()->get('flash_message') }}</p>
								</div>
							@endif

							<!-- Email field -->
							<div class="form-group">
								{!! Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>

							<!-- Password field -->
							<div class="form-group">
								{!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>

							<!-- Password Confirmation field -->
							<div class="form-group">
								{!! Form::password('password_confirmation', ['placeholder' => 'Password Confirm', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>

							<!-- First name field -->
							<div class="form-group">
								{!! Form::text('first_name', null, ['placeholder' => 'First Name', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>

							<!-- Middle name field -->
							<div class="form-group">
								{!! Form::text('middle_name', null, ['placeholder' => 'Middle Name', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>

							<!-- Last name field -->
							<div class="form-group">
								{!! Form::text('last_name', null, ['placeholder' => 'Last Name', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>

							<!-- Submit field -->
							<div class="form-group">
								{!! Form::submit('Create Account', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
							</div>

						</fieldset>
						{!! Form::close() !!}

					</div>
				</div>


			</div>
		</div>
	</div>

@endsection
