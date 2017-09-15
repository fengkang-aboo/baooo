<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function test()
	{
		//$checkstep = \App\Checkstep::find(34);
		//dump($checkstep->project->checkedApplicants()[0]->id);

		$user = \App\User::find(2);
		$user->projectFinishAvg();

	}
	public function index()
	{
		$this->data['in'] = 'w';
		return view('index',$this->data);

	}
	public function blackarc20()
	{
		$this->data['in'] = 'w';
		return view('blackarc20',$this->data);

	}
	public function blackarc360()
	{
		$this->data['in'] = 'w';
		return view('blackarc360',$this->data);

	}
	public function think()
	{
		$this->data['in'] = 'w';
		return view('think',$this->data);

	}
	public function culture1()
	{
		$this->data['in'] = 'w';
		return view('culture1',$this->data);

	}
	public function service1()
	{
		$this->data['in'] = 'w';
		return view('service1',$this->data);

	}
	public function service2()
	{
		$this->data['in'] = 'w';
		return view('service2',$this->data);

	}
	public function service3()
	{
		$this->data['in'] = 'w';
		return view('service3',$this->data);

	}
	public function service4()
	{
		$this->data['in'] = 'w';
		return view('service4',$this->data);

	}
	public function service5()
	{
		$this->data['in'] = 'w';
		return view('service5',$this->data);

	}
	public function service6()
	{
		$this->data['in'] = 'w';
		return view('service6',$this->data);

	}
	public function service7()
	{
		$this->data['in'] = 'w';
		return view('service7',$this->data);

	}
	public function service8()
	{
		$this->data['in'] = 'w';
		return view('service8',$this->data);

	}
	public function service9()
	{
		$this->data['in'] = 'w';
		return view('service9',$this->data);

	}
	public function literature()
	{
		$this->data['in'] = 'w';
		return view('literature',$this->data);

	}
	public function music()
	{
		$this->data['in'] = 'w';
		return view('music',$this->data);

	}
	public function culture()
	{
		$this->data['in'] = 'w';
		return view('culture',$this->data);

	}
	public function culture3()
	{
		$this->data['in'] = 'w';
		return view('culture3',$this->data);

	}
	public function culture2()
	{
		$this->data['in'] = 'w';
		return view('culture2',$this->data);

	}
	public function culture4()
	{
		$this->data['in'] = 'w';
		return view('culture4',$this->data);

	}
	public function culture5()
	{
		$this->data['in'] = 'w';
		return view('culture5',$this->data);

	}
	public function show0()
	{
		$this->data['in'] = 'w';
		return view('show0',$this->data);

	}
		public function show1()
	{
		$this->data['in'] = 'w';
		return view('show1',$this->data);

	}
		public function show2()
	{
		$this->data['in'] = 'w';
		return view('show2',$this->data);

	}
		public function show3()
	{
		$this->data['in'] = 'w';
		return view('show3',$this->data);

	}
		public function show4()
	{
		$this->data['in'] = 'w';
		return view('show4',$this->data);

	}
		public function show5()
	{
		$this->data['in'] = 'w';
		return view('show5',$this->data);

	}
		public function show6()
	{
		$this->data['in'] = 'w';
		return view('show6',$this->data);

	}
		public function show7()
	{
		$this->data['in'] = 'w';
		return view('show7',$this->data);

	}
		public function show8()
	{
		$this->data['in'] = 'w';
		return view('show8',$this->data);

	}
		public function show9()
	{
		$this->data['in'] = 'w';
		return view('show9',$this->data);

	}
		public function show10()
	{
		$this->data['in'] = 'w';
		return view('show10',$this->data);

	}
		public function show11()
	{
		$this->data['in'] = 'w';
		return view('show11',$this->data);

	}
		public function show12()
	{
		$this->data['in'] = 'w';
		return view('show12',$this->data);

	}
		public function show13()
	{
		$this->data['in'] = 'w';
		return view('show13',$this->data);

	}
		public function show14()
	{
		$this->data['in'] = 'w';
		return view('show14',$this->data);

	}
		public function show15()
	{
		$this->data['in'] = 'w';
		return view('show15',$this->data);

	}
		public function show16()
	{
		$this->data['in'] = 'w';
		return view('show16',$this->data);

	}
		public function show17()
	{
		$this->data['in'] = 'w';
		return view('show17',$this->data);

	}
		public function show18()
	{
		$this->data['in'] = 'w';
		return view('show18',$this->data);

	}
		public function show19()
	{
		$this->data['in'] = 'w';
		return view('show19',$this->data);

	}
		public function show20()
	{
		$this->data['in'] = 'w';
		return view('show20',$this->data);

	}
		public function show21()
	{
		$this->data['in'] = 'w';
		return view('show21',$this->data);

	}
		public function show22()
	{
		$this->data['in'] = 'w';
		return view('show22',$this->data);

	}
		public function show23()
	{
		$this->data['in'] = 'w';
		return view('show23',$this->data);

	}
		public function show24()
	{
		$this->data['in'] = 'w';
		return view('show24',$this->data);

	}
		public function show25()
	{
		$this->data['in'] = 'w';
		return view('show25',$this->data);

	}
		public function show26()
	{
		$this->data['in'] = 'w';
		return view('show26',$this->data);

	}
		public function show27()
	{
		$this->data['in'] = 'w';
		return view('show27',$this->data);

	}
		public function show28()
	{
		$this->data['in'] = 'w';
		return view('show28',$this->data);

	}
		public function show29()
	{
		$this->data['in'] = 'w';
		return view('show29',$this->data);

	}
		public function show30()
	{
		$this->data['in'] = 'w';
		return view('show30',$this->data);

	}
		public function show31()
	{
		$this->data['in'] = 'w';
		return view('show31',$this->data);

	}
		public function show32()
	{
		$this->data['in'] = 'w';
		return view('show32',$this->data);

	}
		public function show33()
	{
		$this->data['in'] = 'w';
		return view('show33',$this->data);

	}
		public function show34()
	{
		$this->data['in'] = 'w';
		return view('show34',$this->data);

	}
		public function show35()
	{
		$this->data['in'] = 'w';
		return view('show35',$this->data);

	}
		public function show36()
	{
		$this->data['in'] = 'w';
		return view('show36',$this->data);

	}
		public function show37()
	{
		$this->data['in'] = 'w';
		return view('show37',$this->data);

	}
		public function show38()
	{
		$this->data['in'] = 'w';
		return view('show38',$this->data);

	}
		public function show39()
	{
		$this->data['in'] = 'w';
		return view('show39',$this->data);

	}
		public function show40()
	{
		$this->data['in'] = 'w';
		return view('show40',$this->data);

	}
		public function show41()
	{
		$this->data['in'] = 'w';
		return view('show41',$this->data);

	}
		public function show42()
	{
		$this->data['in'] = 'w';
		return view('show42',$this->data);

	}
		public function show43()
	{
		$this->data['in'] = 'w';
		return view('show43',$this->data);

	}
		public function show44()
	{
		$this->data['in'] = 'w';
		return view('show44',$this->data);

	}
		public function show45()
	{
		$this->data['in'] = 'w';
		return view('show45',$this->data);

	}
		public function show46()
	{
		$this->data['in'] = 'w';
		return view('show46',$this->data);

	}
		public function show47()
	{
		$this->data['in'] = 'w';
		return view('show47',$this->data);

	}


		public function inner1()
	{
		$this->data['in'] = 'w';
		return view('inner1',$this->data);

	}
		public function inner2()
	{
		$this->data['in'] = 'w';
		return view('inner2',$this->data);

	}
		public function inner3()
	{
		$this->data['in'] = 'w';
		return view('inner3',$this->data);

	}
		public function inner4()
	{
		$this->data['in'] = 'w';
		return view('inner4',$this->data);

	}
		public function inner5()
	{
		$this->data['in'] = 'w';
		return view('inner5',$this->data);

	}
		public function inner6()
	{
		$this->data['in'] = 'w';
		return view('inner6',$this->data);

	}
	public function invite0()
	{
		$this->data['in'] = 'w';
		return view('invite0',$this->data);

	}
	public function invite1()
	{
		$this->data['in'] = 'w';
		return view('invite1',$this->data);

	}
	public function invite2()
	{
		$this->data['in'] = 'w';
		return view('invite2',$this->data);

	}
	public function invite3()
	{
		$this->data['in'] = 'w';
		return view('invite3',$this->data);

	}
	public function invite4()
	{
		$this->data['in'] = 'w';
		return view('invite4',$this->data);

	}
	public function invite5()
	{
		$this->data['in'] = 'w';
		return view('invite5',$this->data);

	}
	public function invite6()
	{
		$this->data['in'] = 'w';
		return view('invite6',$this->data);

	}
	public function invite8()
	{
		$this->data['in'] = 'w';
		return view('invite8',$this->data);

	}
	public function invite9()
	{
		$this->data['in'] = 'w';
		return view('invite9',$this->data);

	}
	public function invite10()
	{
		$this->data['in'] = 'w';
		return view('invite10',$this->data);

	}
	public function invite11()
	{
		$this->data['in'] = 'w';
		return view('invite11',$this->data);

	}
	public function invite12()
	{
		$this->data['in'] = 'w';
		return view('invite12',$this->data);

	}
	public function contact0()
	{
		$this->data['in'] = 'w';
		return view('contact0',$this->data);

	}
	public function contact1()
	{
		$this->data['in'] = 'w';
		return view('contact1',$this->data);

	}
	public function contact2()
	{
		$this->data['in'] = 'w';
		return view('contact2',$this->data);

	}
	public function contact3()
	{
		$this->data['in'] = 'w';
		return view('contact3',$this->data);

	}


	public function search(Request $request){
		$keyword = $request->input('s');
		$this->data['keyword'] = $keyword;
		$this->data['projects']= \App\Project::where('title','like',"%".$keyword."%")->paginate(5);
		$this->data['collections']= \App\Collection::where('title','like',"%".$keyword."%")->paginate(5);
		$this->data['users']= \App\User::where('username','like',"%".$keyword."%")->orWhere('tel','like',"%".$keyword."%")->paginate(5);
		$this->data['works']= \App\Work::where('desc','like',"%".$keyword."%")->paginate(8);

		$this->data['tab'] = 1;
		if($this->data['projects']->count() >0){
			$this->data['tab'] = 3;
		}
		if($this->data['collections']->count() >0){
			$this->data['tab'] = 3;
		}
		if($this->data['users']->count() >0){
			$this->data['tab'] = 2;
		}
		if($this->data['works']->count() >0){
			$this->data['tab'] = 1;
		}
		return view('search',$this->data);
	}
	public function registercode()
	{
		$tel = \Request::input('tel');
		$code = rand4number();
		$smscode = \App\Smscode::firstOrCreate(['tel'=>$tel]);
		$smscode->code = $code;
		$smscode->sms = "您的验证码是：".$code."。请不要把验证码泄露给其他人。";
		$smscode->save();
		$res = sendSms($tel,"您的验证码是：".$code."。请不要把验证码泄露给其他人。");
		$res = xml_to_array($res);
		if($res['SubmitResult']['code'] == '2'){
			return array('status'=>1,'msg'=>'success','data'=>null);
		}else if($res['SubmitResult']['code'] == '4081'){
			return array('status'=>0,'msg'=>'同一手机号一分钟之内发送超过1条','data'=>null);
		}else{
			return array('status'=>0,'msg'=>'发送失败请稍后重试','data'=>null);
		}
	}
	public function checktelcode(){
		$tel = \Request::input('tel');
		$telcode = \Request::input('telcode');
		if(empty($tel)||empty($telcode)){
			return 'false';
		}
		$count = \App\Smscode::where(['tel'=>$tel,'code'=>$telcode])->count();
		return $count >= 1?"true":"false";

	}
	public function checkregisted(){
		$tel = \Request::input('tel');
		$username = \Request::input('username');
		if(empty($tel) && empty($username)){
			return "false";
		}
		if(!empty($tel) && \App\User::where(['tel'=>$tel])->count() > 0){
			return "false";
		}
		if(!empty($username) && \App\User::where(['username'=>$username])->count() > 0){
			return "false";
		}
		return "true";

	}

}
