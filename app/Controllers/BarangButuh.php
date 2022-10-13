<?php

namespace App\Controllers;

use App\Models\BarangButuhModel;

class BarangButuh extends BaseController
{

	public $nama;
	protected $barangButuhModel;

	public function __construct()
	{
		$this->barangButuhModel = new BarangButuhModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Barang Dibutuhkan',
			'barang_butuh' => $this->barangButuhModel->getBarangButuh()
		];
		echo view('user/layout/header', $data);
		echo view('user/layout/navbar');
		echo view('user/layout/sidebar', $data);
		echo view('user/barangbutuh');
		echo view('user/layout/footer');
	}

	public function formbutuh(){
        helper('form');

        session();
        $data = [
			'title' => 'Barang Dibutuhkan',
			'title2' => 'Form Kebutuhan Barang',
            'validation' => \Config\Services::validation()
        ];
        echo view('user/layout/header', $data);
		echo view('user/layout/navbar');
		echo view('user/layout/sidebar', $data);
		echo view('user/formbutuh', $data);
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
            // return redirect()->to('/barangbutuh/formbutuh')->withInput()->with('validation', $validation);
            return redirect()->to('/barangbutuh/formbutuh')->withInput();
        }

		// ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // pindahkan file ke folder img
		$fileFoto->move('img_butuh');
		// ambil nama file foto
		$namaFoto = $fileFoto->getName();

		$this->barangButuhModel->save([
			'nama' => $this->request->getVar('nama'),
			'nama_barang' => $this->request->getVar('nama_barang'),
			'kota_asal' => $this->request->getVar('kota_asal'),
			'no_hp' => $this->request->getVar('no_hp'),
			'foto' => $namaFoto
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

		return redirect()->to('/barangbutuh/index');
	}
}
