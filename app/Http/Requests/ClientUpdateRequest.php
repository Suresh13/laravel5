<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientUpdateRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'full_name'=>'required|alpha',
	        'email_address'=>'required|email',
	        'phone_number'=>'required|numeric'
		];
	}
}
