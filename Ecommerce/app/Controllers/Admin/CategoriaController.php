<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CategoriaController extends BaseController
{
	public function index()
	{
		if (session()->isLoggedId) {
			$data = [
				'title' => 'Categorias',
				'subtitle' => 'Lista de categorias de produtos'
			];
			return view('Admin\Estoque\Categorias', $data);
		} 

		return redirect()->route('login');
	}
}
