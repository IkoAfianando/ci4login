<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{	
	protected $db, $builder, $adminModel; 

	public function __construct()
	{
		$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('users');
		$this->adminModel = new AdminModel();
	}

	public function __invoke()
	{}

	public function index()
	{	
		$data['title'] = 'User List';
		
		//$users = new \Myth\Auth\Models\UserModel();
		//$data['users'] = $users->findAll();

		$this->builder->select('users.id as userid, username, email, name');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$query = $this->builder->get();

		$data['users'] = $query->getResult();
		
		return view('admin/index', $data);

	}

	public function detail($id = 0)
	{	
		$data['title'] = 'User Detail';

		$this->builder->select('users.id as userid, username, email, fullname, user_image, name');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$this->builder->where('users.id', $id);
		$query = $this->builder->get();

		$data['users'] = $query->getRow();

		if (empty($data['users'])) {
			return redirect()->to('/admin');
		}
		
		return view('admin/detail', $data);

	}

	public function create()
	{
		$data = [
			'title' => 'Form tambah data User'
		];

		return view('admin/create', $data);
	}

	// public function save()
	// {
	// 	$this->adminModel->save([
	// 		'email' => $this->request->getVar('email'),
	// 		'username' => $this->request->getVar('username'),
	// 		'password' => $this->request->getVar('password'),
	// 		'gambar' => $this->request->getVar('user_image')
	// 	]);

	// 	return redirect()->to('/admin');
	// }

	public function delete($id)
      {     
		$this->adminModel->delete($id);
		return redirect()->to('/admin');
            // //cari gambar berdasarkan id
            // $komik = $this->komikModel->find($id);

            // //cek jika file gambar default
            // if($komik['sampul'] != 'default.png'){

            //       unlink('img/' . $komik['sampul']);
            //       // hapus gambar
            // }

            // $this->komikModel->delete($id);

            // session()->setFlashdata('hapus', 'Data Berhasil di hapus.');

            // return redirect()->to('admin/');
      }
}