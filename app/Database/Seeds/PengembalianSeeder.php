<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class PengembalianSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'barang' => $faker->countryCode(),
				'id_barang' => $faker->country(),
				'jumlah' => $faker->postcode(),
				'nomor' => $faker->postcode(),
				'keterangan' => $faker->streetAddress(),
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('pengembalian')->insert($data);
		}
	}
}