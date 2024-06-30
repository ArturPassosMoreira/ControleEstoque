<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAddress extends Migration
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
			'type'       => [
				'type'           => 'ENUM',
				'constraint'     => ['billing', 'business', 'contract', 'mailing', 'pickup', 'residential', 'shipping', ''],
                'null'        	 => true,
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'post_code'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '12',
				'null'           => true,
			],
			'city'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => true
			],
			'address'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'number'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'null'           => true,
			],
			'complement'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '80',
				'null'           => true,
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
		$this->forge->createTable('addresses');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('addresses');
	}
}
