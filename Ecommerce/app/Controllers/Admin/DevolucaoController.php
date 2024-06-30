<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DevolucaoController extends BaseController
{
	public function index()
	{
		if (session()->isLoggedId) {
			$data = [
				'title' => 'Devoluções',
				'subtitle' => 'Lista de devoluções'
			];
			return view('Admin\Venda\Devolucoes', $data);
		} 

		return redirect()->route('login');
	}
}
