<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dinas extends Migration
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
		'tanggal_sppd'       => [
			  'type'       => 'DATETIME',
			  'null' 	   => TRUE,
		],
		'tujuan'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'bidang'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'anggota'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'tanggal_dinas'       => [
			  'type'       => 'DATETIME',
			  'null' 	   => TRUE,
		],
		'nota_dinas'         => [
			  'type'       => 'DATETIME',
			  'null' 	   => TRUE,
		],
		'keterangan'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'tanggal_tugas'       => [
			  'type'       => 'DATETIME',
			  'null' 	   => TRUE,
		],
		'surat_tugas' => [
			  'type' => 'DATETIME',
			  'null' => TRUE,
		],
		'dasar_surat' => [
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
    $this->forge->createTable('dinas');
	}

	public function down()
	{
    		$this->forge->dropTable('dinas');
	}
}