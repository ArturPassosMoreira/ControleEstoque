<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriarCategoria extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'produtoNome'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'produtoTipo'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			'tamanho'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '5'
			],
			'divisoria'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
			'valor'       => [
				'type'           => 'DECIMAL',
				'constraint'     => 15.4
			],
			'criado_em' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'atualizado_em' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'excluido_en' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
           
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('categorias');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('categorias');
	}
}
