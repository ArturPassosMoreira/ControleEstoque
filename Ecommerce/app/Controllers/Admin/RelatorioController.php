<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class RelatorioController extends BaseController
{
	public function index()
	{
		if (session()->isLoggedId) {
			$data = [
				'title' => 'Relatorios',
				'subtitle' => 'Lista de relatórios'
			];
			return view('Admin\Catalog\Products', $data);
		} 

		return redirect()->route('login');
	}
}
