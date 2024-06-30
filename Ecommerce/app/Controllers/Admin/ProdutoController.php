<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProdutoController extends BaseController
{
	public function index()
	{
		if (session()->isLoggedId) {
			$data = [
				'title' => 'Produtos',
				'subtitle' => 'Lista de produtos'
			];
			return view('Admin\Estoque\Produtos', $data);
		} 

		return redirect()->route('login');
	}
}
