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
            $datang = $model->find($id);
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $nomor = -1;
                foreach ($datang as $key => $datadatang) {                    
                    if($id == $datadatang["id_datang"]){
                        $nomor += 1;
                        $ininomor = $nomor;
                    }
                    $nomor += 1;
                }
            }
            $data['ininomor'] = $ininomor += 1;
            $data['data'] = $model->find($id);
            return view('main/surat/pdf/cetak_datang', $data);
        } elseif ($type === 'domisili') {
            $model = new PendudukModel();
            $domisili = $model->find($id);
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $nomor = -1;
                foreach ($domisili as $key => $datadomisili) {                    
                    if($id == $datadomisili["id_pend"]){
                        $nomor += 1;
                        $ininomor = $nomor;
                    }
                    $nomor += 1;
                }
            }
            $data['ininomor'] = $ininomor += 1;
            $data['data'] = $model->find($id);
            return view('main/surat/pdf/cetak_domisili', $data);
        } elseif ($type === 'lahir') {
            $model = new LahirModel();
            $lahir = $model->find($id);
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $nomor = -1;
                foreach ($lahir as $key => $datalahir) {                    
                    if($id == $datalahir["id_lahir"]){
                        $nomor += 1;
                        $ininomor = $nomor;
                    }
                    $nomor += 1;
                }
            }
            $data['ininomor'] = $ininomor += 1;
            $data['data'] = $model->find($id);
            return view('main/surat/pdf/cetak_lahir', $data);
        } elseif ($type === 'mati') {
            $model = new MeninggalModel();
            $mati = $model->find($id);
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $nomor = -1;
                foreach ($mati as $key => $datamati) {                    
                    if($id == $datamati["id_mendu"]){
                        $nomor += 1;
                        $ininomor = $nomor;
                    }
                    $nomor += 1;
                }
            }
            $mati = $model->find($id);
            $data['data'] = $model->getIdJoinPdf($mati['id_mendu']);
            $data['ininomor'] = $ininomor += 1;
            return view('main/surat/pdf/cetak_mati', $data);
        } elseif ($type === 'pindah') {
            $model = new PindahModel();
            $pindah = $model->find($id);
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $nomor = -1;
                foreach ($pindah as $key => $datalahir) {                    
                    if($id == $datalahir["id_pindah"]){
                        $nomor += 1;
                        $ininomor = $nomor;
                    }
                    $nomor += 1;
                }
            }
            $data['ininomor'] = $ininomor += 1;
            $data['data'] = $model->getIdJoinPdf($pindah[0]['id_pindah']);
            return view('main/surat/pdf/cetak_pindah', $data);
        }
    }
}
