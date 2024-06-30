<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriarProduto extends Migration
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
			'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'sku'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'price'       => [
				'type'           => 'DECIMAL',
				'null'           => true,
			],
			'description'       => [
				'type'           => 'TEXT',
				'constraint'     => 15.4,
				'null'           => true,
			],
			'state'       => [
				'type'           => 'ENUM',
				'constraint'     => ['draft', 'inactive', 'active', 'unavailable', 'retired'],
                'default'        => 'active',
			],
			'meta_keywords'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'meta_description'  	 => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'unit_sold'  	 => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'last_sale_at'  => [
				'type'           => 'DATETIME',
				'null'     		 => true
			],
			'stock'  	 => [
				'type'           => 'DECIMAL',
				'constraint'     => 15.4
			],
			'category_id'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
			'brand_id'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
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
		$this->forge->createTable('products');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
