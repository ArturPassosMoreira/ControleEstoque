<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PedidoController extends BaseController
{
	public function index()
	{
		if (session()->isLoggedId) {
			$data = [
				'title' => 'Pedidos',
				'subtitle' => 'Lista de pedidos'
			];
			return view('Admin\Venda\Pedidos', $data);
		} 

		return redirect()->route('login');
	}
}
