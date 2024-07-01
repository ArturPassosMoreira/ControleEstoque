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

	public function listar() {
		return $this->response->setJSON([
			"data" => [
				[
					"id" => 1, 
					"nome" => "Mochila Infantil", 
					"tipo" => "Costa", 
					"personagem" => "Sonic", 
					"quantidade" => 10, 
					"tamanho" => "P", 
					"reparticoes" => 2
				],
				[
					"id" => 2, 
					"nome" => "Mochila Infantil", 
					"tipo" => "Costa", 
					"personagem" => "Batman", 
					"quantidade" => 100, 
					"tamanho" => "M", 
					"reparticoes" => 2
				]
			]
		]);
	}
}
