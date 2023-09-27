<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Penduduk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Penduduk</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-user"></i> Detail Penduduk
                </h3>
                </h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 150px">
                                <b>NIK</b>
                            </td>
                            <td>:
                                <?= $penduduk['nik']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Nama</b>
                            </td>
                            <td>:
                                <?= $penduduk['nama']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>TTL</b>
                            </td>
                            <td>:
                                <?= $penduduk['tempat_lh']; ?>
                                /
                                <?= $penduduk['tgl_lh']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Jenis Kelamin</b>
                            </td>
                            <td>:
                                <?= $penduduk['jekel']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Alamat</b>
                            </td>
                            <td>:
                                <?= $penduduk['desa']; ?>, RT
                                <?= $penduduk['rt']; ?>/ RW
                                <?= $penduduk['rw']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Agama</b>
                            </td>
                            <td>:
                                <?= $penduduk['agama']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Status Kawin</b>
                            </td>
                            <td>:
                                <?= $penduduk['kawin']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Pekerjaan</b>
                            </td>
                            <td>:
                                <?= $penduduk['pekerjaan']; ?>
                            </td>
                        </tr>


                    </tbody>
                </table>
                <div class="card-footer">
                    <a href="<?= base_url('penduduk') ?>" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>