<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelaporan extends Migration
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
                        'telepon' => [
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ],
                        'Keterangan' => [
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ],
                        'koord' => [
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ],
                        'status' => [
                                'type' => 'INT',
                                'constraint' => 4,
                        ],
                        'tiket_id' => [
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
                $this->forge->createTable('pelaporan');
        }

        public function down()
        {
                $this->forge->dropTable('pelaporan');
        }
}