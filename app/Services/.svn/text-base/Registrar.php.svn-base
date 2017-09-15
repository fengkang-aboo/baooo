<?php namespace App\Services;

use App\User;
use App\Userextend;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'username' => 'required|min:2|max:30',
			'password' => 'required|confirmed|min:6',
			'tel' => 'required',
			'telcode' => 'required',
			'type' => 'required',
			/*'numtype' => 'required',*/
			"right"     => "accepted",
		],[],[
			"name"		=> '名称或企业名称',
	    	"right"     => '《触客平台服务协议》',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$user = User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'contact_email' => $data['email'],
			'role_id' => $data['role_id'],
			'password' => bcrypt($data['password']),
		]);
		Userextend::create(['user_id'=>$user->id]);
		return $user;
	}

}
