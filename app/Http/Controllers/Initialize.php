<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use Sentinel;


class Initialize extends Controller
{
	public function Init()
	{
		Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Super Admin',
			'slug' => 'superadmin',
			'permissions' => [
				'property.add'   			=> true,
				'property.delete' 			=> true,
				'property.edit'   			=> true,
				'property.view.inactive' 	=> true,
				'property.view.active'   	=> true,
				'user.create' 				=> true,
				'user.edit'					=> true,
			]
		]);

		Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Admin',
			'slug' => 'admin',
			'permissions' => [
				'property.add'   			=> true,
				'property.edit'   			=> true,
				'property.view.inactive' 	=> true,
				'property.view.active'   	=> true,
			]
		]);

		Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Brick',
			'slug' => 'brick',
			'permissions' => [
				'property.edit'   			=> true,
				'property.view.active'   	=> true,
			]
		]);

		return Redirect::
	}
}
