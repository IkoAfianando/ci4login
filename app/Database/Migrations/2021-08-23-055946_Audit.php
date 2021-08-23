<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Audit extends Migration
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
		'skpd'       => [
			  'type'       => 'VARCHAR',
			  'constraint' => '255',
		],
		'telepon' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'tanggal' => [
			  'type' => 'VARCHAR',
			  'constraint' => '255',
		],
		'auditor' => [
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
    $this->forge->createTable('audit');
	}

	public function down()
	{
    		$this->forge->dropTable('audit');
	}
}