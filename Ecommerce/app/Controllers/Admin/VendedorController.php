<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class VendedorController extends BaseController
{
	public function index()
	{
		if (session()->isLoggedId) {
			$data = [
				'title' => 'Vendedores',
				'subtitle' => 'Lista de vendedores'
			];
			return view('Admin\Comercial\Vendedores', $data);
		} 

		return redirect()->route('login');
	}
}
