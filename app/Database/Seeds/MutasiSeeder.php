<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class MutasiSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'kode' => $faker->name,
				'id_peminjaman' => $faker->country(),
				'nama' => $faker->name,
				'nomor' => $faker->postcode(),
				'jumlah' => $faker->postcode(),
				'lokasi' => $faker->city(),
				'penanggung_jawab' => $faker->name,
				'penerima' => $faker->name,
				'keterangan' => $faker->streetAddress(),
				'kode_berita' => $faker->streetAddress(),
				'lokasi_berita' => $faker->citySuffix(),
				'jenis_berita' => $faker->address(),
				'nomor_berita' => $faker->streetAddress(),
				'penanggung_jawab_berita' => $faker->name(),
				'tanggal_berita' => Time::now(),
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('mutasi')->insert($data);
		}
	}
}