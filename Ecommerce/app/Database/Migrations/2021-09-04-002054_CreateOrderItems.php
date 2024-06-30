<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderItems extends Migration
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
			'order_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'product_type'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'product_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'name'       	=> [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'quantity'       => [
				'type'           => 'INT',
				'constraint'     => 11
			],
			'price'					=> [
				'type'           => 'DECIMAL',
				'constraint' 	 => 15.4
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
		$this->forge->createTable('order_items');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('order_items');
	}
}
