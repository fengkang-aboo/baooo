<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],
	'weibo' => [
	    'client_id' => env('WEIBO_KEY'),
	    'client_secret' => env('WEIBO_SECRET'),
	    'redirect' => env('WEIBO_REDIRECT_URI'),  
	],
	'qq' => [
	    'client_id' => env('QQ_KEY'),
	    'client_secret' => env('QQ_SECRET'),
	    'redirect' => env('QQ_REDIRECT_URI'),  
	], 
	'weixin_web' => [
	    'client_id' => env('WEIXINWEB_KEY'),
	    'client_secret' => env('WEIXINWEB_SECRET'),
	    'redirect' => env('WEIXINWEB_REDIRECT_URI'),  
	    'auth_base_uri' => 'https://open.weixin.qq.com/connect/qrconnect',
	], 

];
