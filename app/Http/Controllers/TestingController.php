<?php
namespace Laratest\Http\Controllers;

use Laratest\Http\Controllers\Controller;

class TestingController extends Controller {

	public function testing($param){
		return 'Estoy dentro de testingController y recibi este parametro'. $param;
	}
}