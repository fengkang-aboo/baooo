<?php namespace App\Http;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;

trait AuthenticatesAndRegistersUsersCustom {

	/**
	 * The Guard implementation.
	 *
	 * @var \Illuminate\Contracts\Auth\Guard
	 */
	protected $auth;

	/**
	 * The registrar implementation.
	 *
	 * @var \Illuminate\Contracts\Auth\Registrar
	 */
	protected $registrar;

	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getRegister()
	{
		if(isMobile()){
			return view('mobile.auth.register');
		}else{
			return view('mobile.auth.register');

			//return view('auth.register');
		}
	}

	/**
	 * Handle a registration request for the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postRegister(Request $request)
	{
		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			/*$this->throwValidationException(
				$request, $validator
			);*/
			return view('errors',['message'=>'注册失败']);
		}

		$tel = \Request::input('tel');
		$telcode = \Request::input('telcode');
		
		$sms = \App\Smscode::where(['tel'=>\Request::input('tel'),'code'=>\Request::input('telcode')])->get();
		if(count($sms) <= 0){
			return view('errors',['message'=>'验证码错误']);
		}

		$existuser = \App\User::where('tel',$request->input('tel'))->orWhere('username',$request->input('username'))->count();
		if($existuser > 0){
			return view('errors',['message'=>'用户名/手机号已经存在']);
		}

		
		//$user = \App\User::firstOrCreate(["username"=>$request->input('username'),"tel"=>$request->input('tel'),"role_id"=>$request->input('type'),"multi"=>$request->input("numtype"),'password'=>bcrypt($request->input('password')) ]);
		$user = \App\User::firstOrCreate(["username"=>$request->input('username'),"tel"=>$request->input('tel'),"role_id"=>$request->input('type'),"multi"=>null,'password'=>bcrypt($request->input('password')) ]);
		$user->save();
		\App\Smscode::where(['tel'=>\Request::input('tel'),'code'=>\Request::input('telcode')])->delete();

		\Auth::login($user,true);
		return redirect(url('/'));
	}

	/**
	 * Show the application login form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogin()
	{
		return redirect('/#login');
		// if(isMobile()){
		// 	return view('mobile.auth.login');
		// }else{
		// 	return view('auth.login');
		// }
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'username' => 'required', 'password' => 'required',
		]);

		//$credentials = $request->only('username', 'password');
		if (\Auth::attempt(['tel'=> $request->username, 'password' => $request->password]) || \Auth::attempt(['username'=> $request->username, 'password' => $request->password]))
		{
			if(\Request::ajax()){
				return array('status'=>1,'msg'=>"success",'data'=>null);
			}else{
				return redirect(url('/'));
			}
		}else{
			if(\Request::ajax()){
				return array('status'=>0,'msg'=>"用户名与密码不匹配。",'data'=>null);
			}else{
				return view("errors",['message'=>"用户名与密码不匹配。"]);
			}
		}
	}

	/**
	 * Get the failed login message.
	 *
	 * @return string
	 */
	protected function getFailedLoginMessage()
	{
		return '用户名与密码不匹配。';
	}

	/**
	 * Log the user out of the application.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogout()
	{
		$this->auth->logout();

		return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
	}

	/**
	 * Get the post register / login redirect path.
	 *
	 * @return string
	 */
	public function redirectPath()
	{
		if (property_exists($this, 'redirectPath'))
		{
			return $this->redirectPath;
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
	}

	/**
	 * Get the path to the login route.
	 *
	 * @return string
	 */
	public function loginPath()
	{
		return property_exists($this, 'loginPath') ? $this->loginPath : '/auth/login';
	}

}
