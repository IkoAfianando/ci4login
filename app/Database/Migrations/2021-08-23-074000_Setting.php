<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Setting extends Migration
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
		'bidang'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'aksi' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'kegiatan' => [
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
    $this->forge->createTable('setting');
	}

	public function down()
	{
    		$this->forge->dropTable('setting');
	}
}