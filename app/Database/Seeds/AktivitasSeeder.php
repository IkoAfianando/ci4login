<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class AktivitasSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'tanggal' => Time::now(),
				'petugas' => $faker->name,
				'bidang' => $faker->postcode(),
				'kegiatan' => $faker->streetAddress(),
				'modul' => $faker->postcode(),
				'aktivitas' => $faker->city(),
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('aktivitas')->insert($data);
		}
	}
}