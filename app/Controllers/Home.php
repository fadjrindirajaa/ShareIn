<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// $barangada = $this->barangAdaModel->findAll();
		echo view('index');
	}

	public function beranda()
	{
		$data = [
			'title' => 'Beranda'
		];

		echo view('user/layout/header', $data);
		echo view('user/layout/navbar');
		echo view('user/layout/sidebar', $data);
		echo view('user/beranda');
		echo view('user/layout/footer');
	}

	public function about()
	{
		$data = [
			'title' => 'Tentang Kami'
		];
		echo view('user/layout/header', $data);
		echo view('user/layout/navbar');
		echo view('user/layout/sidebar', $data);
		echo view('user/about');
		echo view('user/layout/footer');
	}
}
