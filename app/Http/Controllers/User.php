<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordChangeRequest;
use Sentinel;
use View;
use Redirect;
use Route;

class User extends Controller
{

	public function Login()
	{
		return View::make('User/Login');
	}

	public function Authenticate(LoginRequest $request)
	{
		$input = $request->only('username','password');

		Sentinel::authenticateAndRemember($input);

		return Redirect::action('Dashboard@Tenants');
	}

	public function ChangePassword()
	{
		return View::make('User/ChangePassword');
	}

	public function StoreNewPasssword(PasswordChangeRequest $request)
	{
		$hasher = Sentinel::getHasher();
		$input 	= $request->only('password', 'old_password');
		
		$oldPassword 	= $input->password;
		$password 		= $input->old_password;
		$user 			= Sentinel::getUser();

		if (!$hasher->check($oldPassword, $user->password)) {
			Session::flash('error', 'Check input is correct.');
			return View::make('User/ChangePassword');
		}

		Sentinel::update($user, array('password' => $password));

		return Redirect::action('User@PasswordChangeSuccess')->withFlashMessage('Password Successfully Changed!');
	}

	function PasswordChangeSuccess()
	{
		return '';
	}
}
