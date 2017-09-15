<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use App\Http\AuthenticatesAndRegistersUsersCustom;

use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsersCustom;
	protected $loginPath = '/';
	protected $redirectTo = '/';
	protected $redirectAfterLogout = '/';
	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function weibo(){
		return Socialite::with('weibo')->redirect();
	}
	public function qq(){
		return Socialite::with('qq')->redirect();
	}
	public function weixin(){
		return Socialite::with('weixinweb')->redirect();
	}
	public function weibocallback(){
		try {
		    $oauthUser = Socialite::with('weibo')->user();
			$user = \App\User::firstOrCreate(['oauth_type' => 'weibo',"oauth_id"=>$oauthUser->getId()]);
			$user->avatar = $oauthUser->getAvatar();
			$user->name = $oauthUser->getNickname();
			$user->save();
			\Auth::login($user,true);
			//return redirect($this->redirectPath());
			return redirect(url('/subscribes'));
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			return redirect(url('/'));
		}
	}
	public function qqcallback(){
		try {
		    $oauthUser = Socialite::with('qq')->user();
			$user = \App\User::firstOrCreate(['oauth_type' => 'qq',"oauth_id"=>$oauthUser->getId()]);
			$user->avatar = $oauthUser->getAvatar();
			$user->name = $oauthUser->getNickname();
			$user->save();
			\Auth::login($user,true);
			//return redirect($this->redirectPath());
			return redirect(url('/subscribes'));
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			return redirect(url('/'));
		}
	}
	public function weixincallback(){
		try {
		    $oauthUser = Socialite::with('weixinweb')->stateless()->user();
			$user = \App\User::firstOrCreate(['oauth_type' => 'weixin',"oauth_id"=>$oauthUser->user['unionid']]);
			$user->avatar = $oauthUser->getAvatar();
			$user->name = $oauthUser->getNickname();
			$user->save();
			\Auth::login($user,true);
			//return redirect($this->redirectPath());
			return redirect(url('/subscribes'));
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			return redirect(url('/'));
		}
	}
}
