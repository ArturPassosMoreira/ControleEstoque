<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ClienteController extends BaseController
{
	public function index()
	{
		if (session()->isLoggedId) {
			$data = [
				'title' => 'Clientes',
				'subtitle' => 'Lista de clientes'
			];
			return view('Admin\Comercial\Clientes', $data);
		} 

		return redirect()->route('login');
	}
}
