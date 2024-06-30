<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomerAddress extends Migration
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
			'customer_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'address_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
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
		$this->forge->createTable('customer_addresses');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('customer_addresses');
	}
}
