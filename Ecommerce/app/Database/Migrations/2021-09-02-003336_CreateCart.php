<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCart extends Migration
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
			'user_id'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
			'state'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'		 => 'active'
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
		$this->forge->createTable('carts');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('carts');
	}
}
