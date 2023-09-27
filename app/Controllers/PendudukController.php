<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendudukModel;

class PendudukController extends BaseController
{
    public function index()
    {
        $pendudukModel = new PendudukModel();
        $data['penduduk'] = $pendudukModel->getAll();

        // echo '<pre>';
        // print_r($data['penduduk']);
        // echo '</pre>';

        return view('main/penduduk/index', $data);
    }

    public function view($id)
    {
        $pendudukModel = new PendudukModel();
        $data['penduduk'] = $pendudukModel->find($id);

        return view('main/penduduk/detail', $data);
    }

    public function create()
    {
        return view('main/penduduk/create');
    }

    public function store()
    {
        $pendudukModel = new PendudukModel();

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lh' => $this->request->getPost('tempat_lh'),
            'tgl_lh' => $this->request->getPost('tgl_lh'),
            'jekel' => $this->request->getPost('jekel'),
            'desa' => $this->request->getPost('desa'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'agama' => $this->request->getPost('agama'),
            'kawin' => $this->request->getPost('kawin'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ];

        $pendudukModel->insert($data);

        return redirect()->to(site_url('penduduk'));
    }

    public function edit($id)
    {
        $pendudukModel = new PendudukModel();
        $data['penduduk'] = $pendudukModel->find($id);

        return view('main/penduduk/edit', $data);
    }

    public function update($id)
    {
        $pendudukModel = new PendudukModel();

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lh' => $this->request->getPost('tempat_lh'),
            'tgl_lh' => $this->request->getPost('tgl_lh'),
            'jekel' => $this->request->getPost('jekel'),
            'desa' => $this->request->getPost('desa'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'agama' => $this->request->getPost('agama'),
            'kawin' => $this->request->getPost('kawin'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ];

        $pendudukModel->update($id, $data);

        return redirect()->to(site_url('penduduk'));
    }

    public function delete($id)
    {
        $pendudukModel = new PendudukModel();
        $pendudukModel->delete($id);

        return redirect()->to(site_url('penduduk'));
    }
}
