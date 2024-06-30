<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCartItems extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'cart_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
			'product_type'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'product_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
			'quantity'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
			'price'       => [
				'type'           => 'DECIMAL',
				'constraint'     => 15.4
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'deleted_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
           
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('cart_items');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('cart_items');
	}
}
