<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class ContactSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'nama' => $faker->name,
				'telepon' => $faker->phoneNumber(),
				'jabatan' => $faker->company(),
				'skpd' => $faker->country(),
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('contact')->insert($data);
		}
	}
}