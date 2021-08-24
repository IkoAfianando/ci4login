<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mutasi extends Migration
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
		'kode'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'id_peminjaman' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'nama' => [
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
		'lokasi' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'penanggung_jawab' => [
			  'type' => 'INT',
			  'constraint' => '255',
			  
		],
		'penerima' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'status' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'keterangan' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'kode_berita' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'lokasi_berita' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'jenis_berita' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'nomor_berita' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'penanggung_jawab_berita' => [
			'type' => 'VARCHAR',
			'constraint' => '255',
	    	],
		'tanggal_berita' => [
			'type' => 'DATETIME',
			'null' => TRUE,
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
    $this->forge->createTable('mutasi');
	}

	public function down()
	{
    		$this->forge->dropTable('mutasi');
	}
}