<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Master extends Migration
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
		'nama'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'kode' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'jenis' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'satuan' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'harga' => [
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
    $this->forge->createTable('master');
	}

public function down()
{
    $this->forge->dropTable('master');
}

}