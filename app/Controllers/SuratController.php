<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LahirModel;
use App\Models\MeninggalModel;
use App\Models\PendatangModel;
use App\Models\PendudukModel;
use App\Models\PindahModel;

class SuratController extends BaseController
{
    public function surat($type)
    {
        if ($type === 'datang') {
            $model = new PendatangModel();
            $data['pendatang'] = $model->findAll();
            return view('main/surat/surat_datang', $data);
        } elseif ($type === 'domisili') {
            $model = new PendudukModel();
            $data['penduduk'] = $model->findAll();
            return view('main/surat/surat_domisili', $data);
        } elseif ($type === 'lahir') {
            $model = new LahirModel();
            $data['lahir'] = $model->findAll();
            return view('main/surat/surat_lahir', $data);
        } elseif ($type === 'mati') {
            $model = new MeninggalModel();
            $data['mati'] = $model->getAll();
            return view('main/surat/surat_mati', $data);
        } elseif ($type === 'pindah') {
            $model = new PindahModel();
            $data['pindah'] = $model->getAll();
            return view('main/surat/surat_pindah', $data);
        } else if ($type === 'download') {
            return view('main/surat/surat_download');
        }
    }

    public function cetak($type)
    {
        $id = $this->request->getPost('id');

        if ($type === 'datang') {
            $model = new PendatangModel();
            $data['data'] = $model->find($id);

            return view('main/surat/pdf/cetak_datang', $data);
        } elseif ($type === 'domisili') {
            $model = new PendudukModel();
            $data['data'] = $model->find($id);
            return view('main/surat/pdf/cetak_domisili', $data);
        } elseif ($type === 'lahir') {
            $model = new LahirModel();
            $data['data'] = $model->find($id);
            return view('main/surat/pdf/cetak_lahir', $data);
        } elseif ($type === 'mati') {
            $model = new MeninggalModel();
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
            }
            $mati = $model->find($id);
            $data['data'] = $model->getIdJoinPdf($mati['id_mendu']);
            return view('main/surat/pdf/cetak_mati', $data);
        } elseif ($type === 'pindah') {
            $model = new PindahModel();
            $pindah = $model->find($id);
            $data['data'] = $model->getIdJoinPdf($pindah[0]['id_pindah']);
            return view('main/surat/pdf/cetak_pindah', $data);
        }
    }
}
