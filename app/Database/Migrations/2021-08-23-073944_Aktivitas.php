<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aktivitas extends Migration
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
		'tanggal' => [
			'type'	=> 'DATETIME',
			'null'	=> TRUE
		],
		'petugas'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'bidang' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'kegiatan' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'modul' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'aktivitas' => [
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
    $this->forge->createTable('aktivitas');
	}

	public function down()
	{
    		$this->forge->dropTable('aktivitas');
	}
}