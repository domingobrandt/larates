<?php
namespace ux-camp\Http\Controllers;

use ux-camp\Http\Controllers\Controller;

class TestingController extends Controller {

	public function testing($param){
		return 'Estoy dentro de testingController y recibi este parametro'. $param;
	}
}