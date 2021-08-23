<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengembalian extends Migration
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
		'barang'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'id_barang' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'jumlah' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'nomor' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'jumlah' => [
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
    $this->forge->createTable('pengembalian');
	}

	public function down()
	{
    		$this->forge->dropTable('pengembalian');
	}
}