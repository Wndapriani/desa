<?php

namespace App\Controllers;

use App\Models\KartuKeluargaModel;
use App\Models\LahirModel;
use App\Models\MeninggalModel;
use App\Models\PendudukModel;
use App\Models\PindahModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $penduduk =  new PendudukModel();
        $kk =  new KartuKeluargaModel();
        $lahir = new LahirModel();
        $mati = new MeninggalModel();
        $datang = new PendudukModel();
        $pindah = new PindahModel();

        $laki = $penduduk->where('jekel', 'LK')->countAllResults();
        $prem = $penduduk->where('jekel', 'PR')->countAllResults();
        $pend =  $penduduk->where('status', 'ada')->countAllResults();

        $data['pend'] = $pend;
        $data['kartu'] = $kk->countAll();
        $data['laki'] = $laki;
        $data['prem'] = $prem;
        $data['lahir'] = $lahir->countAll();
        $data['mendu'] = $mati->countAll();
        $data['datang'] = $datang->countAll();
        $data['pindah'] = $pindah->countAll();

        return view('Dashboard', $data);
    }
}
