<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
	public function index()
	{
		if (session()->isLoggedId) {
			$data = [
				'title' => 'Dashboard'
			];
			return view('Admin\Home\Home', $data);
		} 

		return redirect()->route('login');
	}
}
