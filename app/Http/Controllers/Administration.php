<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Property;
use App\Owner;
use App\Tenant;
use App\Phone;

class Administration extends Controller
{
	//
	public function index()
	{
		return "";
	}

	public function AddProperty(Requests $request)
	{
		$property = new Property; 

		$property->owner_id 	= $request->owner_id;
		$property->city 		= $request->city;
		$property->area 		= $request->area;
		$property->address 		= $request->address;
		$property->rent 		= $request->rent;
		$property->available 	= $request->available;
		$property->description 	= $request->description;
	
		$property->save();
	}

	public function AddOwner(Requests $request)
	{
		$owner = new Owner;

		$owner->first_name 	= $request->first_name;
		$owner->middle_name = $request->middle_name;
		$owner->last_name 	= $request->last_name;

		$owner->save();

		foreach ($request->contacts as $contact) {
			$phone = new Phone;

			$phone->holder_id 		= $owner->id;
			$phone->owner_or_tenant = 'owner';
			$phone->phone 			= $contact;

			$phone->save();
		}
	}

	public function AddTenant(Requests $request)
	{
		$tenant = new Tenant;

		$tenant->first_name 	= $request->first_name;
		$tenant->middle_name 	= $request->middle_name;
		$tenant->last_name 		= $request->last_name;
		$tenant->with_rent 		= $request->rent;
		$tenant->searching_area = $request->area;

		$tenant->save();

		foreach ($request->contacts as $contact) {
			$phone = new Phone;

			$phone->holder_id 		= $tenant->id;
			$phone->owner_or_tenant = 'tenant';
			$phone->phone 			= $contact;

			$phone->save();
		}
	}
}
