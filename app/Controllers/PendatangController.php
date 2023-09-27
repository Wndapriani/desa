<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendatangModel;
use App\Models\PendudukModel;

class PendatangController extends BaseController
{
    protected $pendatangModel;

    public function __construct()
    {
        $this->pendatangModel = new PendatangModel();
    }

    public function index()
    {
        $data['pendatang'] = $this->pendatangModel->getAll();
        return view('main/datang/index', $data);
    }

    public function create()
    {

        $penduduk = new PendudukModel();
        $data['penduduk'] = $penduduk->findAll();

        return view('main/datang/create', $data);
    }

    public function store()
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama_datang' => $this->request->getPost('nama_datang'),
            'jekel' => $this->request->getPost('jekel'),
            'tgl_datang' => $this->request->getPost('tgl_datang'),
            'pelapor' => $this->request->getPost('pelapor')
        ];

        $this->pendatangModel->insert($data);

        return redirect()->to('/pendatang')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penduduk = new PendudukModel();
        $data['penduduk'] = $penduduk->findAll();
        $data['pendatang'] = $this->pendatangModel->find($id);
        return view('main/datang/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama_datang' => $this->request->getPost('nama_datang'),
            'jekel' => $this->request->getPost('jekel'),
            'tgl_datang' => $this->request->getPost('tgl_datang'),
            'pelapor' => $this->request->getPost('pelapor')
        ];

        $this->pendatangModel->update($id, $data);

        return redirect()->to('/pendatang')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->pendatangModel->delete($id);

        return redirect()->to('/pendatang')->with('success', 'Data berhasil dihapus.');
    }
}
