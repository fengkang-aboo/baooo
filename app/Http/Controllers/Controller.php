<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use App\Http\ValidatesRequestsCustom;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequestsCustom;

}
