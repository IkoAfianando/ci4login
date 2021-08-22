<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class PelaporanSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'nama' => $faker->name,
				'telepon' => $faker->phoneNumber(),
				'keterangan' => $faker->name,
				'koord' => $faker->name,
				'tiket_id' => $faker->name,
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('pelaporan')->insert($data);
		}
	}
}