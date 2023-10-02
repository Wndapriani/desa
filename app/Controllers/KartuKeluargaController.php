<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;

class KartuKeluargaController extends BaseController
{

    public function index()
    {
        $tbKkModel = new KartuKeluargaModel();
        $data['kk'] = $tbKkModel->findAll();

        return view('main/kk/index', $data);
    }

    public function create()
    {
        return view('main/kk/create');
    }

    public function store()
    {
        $tbKkModel = new KartuKeluargaModel();

        $data = [
            'no_kk' => $this->request->getPost('no_kk'),
            'kepala' => $this->request->getPost('kepala'),
            'desa' => $this->request->getPost('desa'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'kec' => $this->request->getPost('kec'),
            'kab' => $this->request->getPost('kab'),
            'prov' => $this->request->getPost('prov'),
        ];

        $tbKkModel->insert($data);

        return redirect()->to(site_url('kartu-keluarga'));
    }

    public function edit($id)
    {
        $tbKkModel = new KartuKeluargaModel();
        $data['kk'] = $tbKkModel->find($id);

        return view('main/kk/edit', $data);
    }

    public function update($id)
    {
        $tbKkModel = new KartuKeluargaModel();

        $data = [
            'no_kk' => $this->request->getPost('no_kk'),
            'kepala' => $this->request->getPost('kepala'),
            'desa' => $this->request->getPost('desa'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'kec' => $this->request->getPost('kec'),
            'kab' => $this->request->getPost('kab'),
            'prov' => $this->request->getPost('prov'),
        ];

        $tbKkModel->update($id, $data);

        return redirect()->to(site_url('kartu-keluarga'));
    }

    public function delete($id)
    {
        $tbKkModel = new KartuKeluargaModel();
        $tbKkModel->delete($id);

        return redirect()->to(site_url('kartu-keluarga'));
    }

    public function createAnggota($id)
    {
        $tbKkModel = new KartuKeluargaModel();
        $tbPendModel = new PendudukModel();

        $data['kk'] = $tbKkModel->find($id);
        $data['anggota'] = $tbKkModel->penduduk($id);
        $data['penduduk'] = $tbPendModel->findAll();
        return view('main/kk/anggota', $data);
    }

    public function storeAnggota($id)
    {
        $request = service('request');
        $tbKkModel = new AnggotaModel();

        $data = [
            'id_kk' => $id,
            'id_pend' => $request->getPost('id_pend'),
            'hubungan' => $request->getPost('hubungan'),
        ];

        $tbKkModel->save($data);
        return redirect()->to(site_url('kartu-keluarga/anggota/') . $id);
    }

    public function deleteAnggota($id)
    {
        $tbKkModel = new AnggotaModel();
        $tbKkModel->delete($id);

        return redirect()->back();
    }
}
