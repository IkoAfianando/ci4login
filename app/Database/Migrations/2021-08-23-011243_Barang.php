<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
	public function up()
	{
	$this->forge->addField([
		'id'          => [
			  'type'           => 'INT',
			  'constraint'     => 11,
			  'unsigned'       => true,
			  'auto_increment' => true,
		],
		'no'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'kode' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'transaksi' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'penerima' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'barang' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'jenis' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'quantity' => [
			  'type' => 'INT',
			  'constraint' => 100,
			  'unsigned'   => true,
		],
		'harga' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'gambar_barang' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'keterangan' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'created_at' => [
			'type'	=> 'DATETIME',
			'null'	=> TRUE
		],
		'updated_at' => [
			'type'	=> 'DATETIME',
			'null'	=> TRUE
		]

    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('barang');
	}

	public function down()
	{
    		$this->forge->dropTable('barang');
	}
}