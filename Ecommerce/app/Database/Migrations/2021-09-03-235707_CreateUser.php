<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
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
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'type'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'		 => 'client'
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'remember_token'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
                'null'           => true
			],
			'is_active'       => [
				'type'           => 'TINYINT',
				'constraint'	 => 1,
				'default'        => 1
			],
			'last_login_at'  	 => [
				'type'           => 'DATETIME',
				'null'			 => true
			],
			'email_verified_at'  	 => [
				'type'           => 'TIMESTAMP',
				'null'     		 => true
			],
			'login_count'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'default'       => 0
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
		$this->forge->createTable('users');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
