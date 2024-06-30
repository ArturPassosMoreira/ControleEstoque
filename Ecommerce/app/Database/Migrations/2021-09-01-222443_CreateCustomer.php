<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomer extends Migration
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
			'firstname'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'lastname'       => [
				'type'           => 'VARCHAR',
				'constraint'	 => '255',
				'null'           => true,
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'phone'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '22',
				'null'			 => true,
			],
			'is_active'       => [
				'type'           => 'TINYINT',
				'constraint'     => 1,
				'default'        => 1,
			],
			'last_purchase_at'  => [
				'type'           => 'DATETIME',
				'null'     		 => true,
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true
			],
			'deleted_at' => [
				'type'           => 'DATETIME',
				'null'           => true
			],
           
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('customers');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('customers');
	}
}
