<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class AuditSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'skpd' => $faker->name,
				'telepon' => $faker->phoneNumber(),
				'tanggal' => Time::now(),
				'auditor' => $faker->name,
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('audit')->insert($data);
		}
	}
}