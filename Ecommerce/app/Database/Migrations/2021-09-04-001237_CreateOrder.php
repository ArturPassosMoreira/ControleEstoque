<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrder extends Migration
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
			'number'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '32'
			],
			'status'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '32'
			],
			'user_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'billpayer_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'shipping_address_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'notes'						=> [
				'type'           => 'TEXT'
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
		$this->forge->createTable('orders');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('orders');
	}
}
