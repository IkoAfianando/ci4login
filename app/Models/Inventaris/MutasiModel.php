<?php

namespace App\Models\Inventaris;

use CodeIgniter\Model;

class MutasiModel extends Model
{
      protected $table  = 'mutasi';
      protected $useTimestamp = 'true';
      // protected $allowedFields = ['nama', 'telepon'];

      // public function search($keyword)
      // {
      //       $builder = $this->table('mutasi');
      //       $builder->like('kode', $keyword);
      //       $builder->like('id_peminjaman', $keyword);
      //       return $builder;
      //       // return $this->table('mutasi')->like('kode', $keyword)->orlike('id_peminjaman', $keyword);
      // }

      // public function cari($kunci)
      // {
      //       $builder = $this->table('mutasi');
      //       $builder->like('kode_berita', $kunci);
      //       $builder->like('jenis_berita', $kunci);
      //       return $builder;
      //       // return $this->table('mutasi')->like('kode', $keyword)->orlike('id_peminjaman', $keyword);
      // }
}