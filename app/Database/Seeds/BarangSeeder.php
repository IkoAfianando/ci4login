<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class BarangSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('en_UG');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'nomor' => $faker->name(),
				'kode' => $faker->name(),
				'transaksi' => $faker->buildingNumber(),
				'penerima' => $faker->firstNameMale(),
				'barang' => $faker->state(),
				'jenis' => $faker->city(),
				'quantity' => $faker->buildingNumber(),
				'harga' => $faker->postcode(),
				'keterangan' => $faker->catchPhrase(),
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('barang')->insert($data);
		}
	}
}