<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class DinasSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i = 0; $i < 100; $i++){
			
			$data = [
				'tanggal_sppd' => Time::now(),
				'tujuan' => $faker->country(),
				'bidang' => $faker->city(),
				'anggota' => $faker->name,
				'tanggal_dinas' => Time::now(),
				'nota_dinas' => Time::now(),
				'keterangan' => $faker->streetAddress(),
				'tanggal_tugas' => Time::now(),
				'surat_tugas' => Time::now(),
				'dasar_surat' => $faker->streetAddress(),
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()

				
			];
			$this->db->table('dinas')->insert($data);
		}
	}
}