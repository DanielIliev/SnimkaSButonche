<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\RegistrationFormRequest;
use Sentinel;

class Registration extends Controller
{
	public function Create()
	{
		return view('Registration');
	}

	public function Store(RegistrationFormRequest $request)
	{
		$input = $request->only('email', 'password', 'first_name', 'middle_name', 'last_name');
		$username = $input['first_name'].'.'.$input['middle_name'].'.'.$input['last_name'];
		$input = array_add($input, 'username', $username);

		$user = Sentinel::registerAndActivate($input);
		
		$usersRole = Sentinel::findRoleByName('Users');

		$usersRole->users()->attach($user);

		return Redirect::action('Registration@Success')->withFlashMessage('User Successfully Created!');
	}

	public function Success()
	{
		return '';
	}
}
