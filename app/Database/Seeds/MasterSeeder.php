<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class MasterSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('en_US');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'nama' => $faker->name,
				'kode' => $faker->country(),
				'jenis' => $faker->company(),
				'satuan' => $faker->city(),
				'harga' => $faker->postcode(),
				'keterangan' => $faker->streetAddress(),
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('master')->insert($data);
		}
	}
}