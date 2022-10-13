<?php

namespace App\Controllers;

use App\Models\BarangAdaModel;

class BarangAda extends BaseController
{

	public $nama;
	protected $barangAdaModel;

	public function __construct()
	{
		$this->barangAdaModel = new BarangAdaModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Barang Tersedia',
			'barang_ada' => $this->barangAdaModel->getBarangAda()
		];
		echo view('user/layout/header', $data);
		echo view('user/layout/navbar');
		echo view('user/layout/sidebar', $data);
		echo view('user/barangada');
		echo view('user/layout/footer');
	}

	public function formdonasi(){
        helper('form');

        session();
        $data = [
			'title' => 'Barang Tersedia',
			'title2' => 'Form Donasi',
            'validation' => \Config\Services::validation()
        ];
        echo view('user/layout/header', $data);
		echo view('user/layout/navbar');
		echo view('user/layout/sidebar', $data);
		echo view('user/formdonasi', $data);
		echo view('user/layout/footer');
    }

	public function save()
	{
		if(!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama harus diisi']
            ],
            'nama_barang' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama Barang harus diisi']
            ],
            'kota_asal' => [
                'rules' => 'required',
                'errors' => ['required' => 'Kota Asal harus diisi']
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => ['required' => 'No Handphone harus diisi']
			],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
					'uploaded' => 'Pilih foto barang terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar.',
                    'is_image' => 'Yang anda pilih bukan gambar.',
                    'mime_in' => 'Yang anda pilih bukan gambar.'
                ]
            ]
        ])){
            // $validation = \Config\Services::validation();
            // return redirect()->to('/barangada/formdonasi')->withInput()->with('validation', $validation);
            return redirect()->to('/barangada/formdonasi')->withInput();
        }

		// ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // pindahkan file ke folder img
		$fileFoto->move('img_ada');
		// ambil nama file foto
		$namaFoto = $fileFoto->getName();

		$this->barangAdaModel->save([
			'nama' => $this->request->getVar('nama'),
			'nama_barang' => $this->request->getVar('nama_barang'),
			'kota_asal' => $this->request->getVar('kota_asal'),
			'no_hp' => $this->request->getVar('no_hp'),
			'foto' => $namaFoto
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

		return redirect()->to('/barangada/index');

		// $data = [
		// 	'title' => 'Barang Tersedia',
		// 	'barang_ada' => $this->barangAdaModel->getBarangAda()
		// ];
		// echo view('user/layout/header', $data);
		// echo view('user/layout/navbar');
		// echo view('user/layout/sidebar', $data);
		// echo view('user/barangada', $data);
		// echo view('user/layout/footer');
	}
}
