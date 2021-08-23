<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
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
                        'skpd' => [
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ],
                        'jabatan' => [
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ],
                        'telepon' => [
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
                $this->forge->createTable('contact');
        }

        public function down()
        {
                $this->forge->dropTable('contact');
        }
}