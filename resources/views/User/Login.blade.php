@extends('layouts.Master')

@section('title', 'Login')

@section('content')


		<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Login</h3>
					</div>
					<div class="panel-body">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>

						 {!! Form::open(['action' => 'User@Authenticate']) !!}
						<fieldset>

							@if (session()->has('flash_message'))
								<div class="form-group">
									<p>{{ session()->get('flash_message') }}</p>
								</div>
							@endif

							<!-- Email field -->
							<div class="form-group">
								{!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>

							<!-- Password field -->
							<div class="form-group">
								{!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required'])!!}
							</div>

							<!-- Submit field -->
							<div class="form-group">
								{!! Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
							</div>

						</fieldset>
						{!! Form::close() !!}

					</div>
				</div>


			</div>
		</div>
	</div>

@endsection