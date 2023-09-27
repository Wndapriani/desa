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
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-table"></i> Data Penduduk
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <a href="<?= base_url('/penduduk/create') ?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Tambah Data</a>
                        </div>
                        <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Alamat</th>
                                    <th>No KK</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($penduduk as $key => $p) : ?>

                                    <tr>
                                        <td>
                                            <?= $key + 1; ?>
                                        </td>
                                        <td>
                                            <?= $p['nik']; ?>
                                        </td>
                                        <td>
                                            <?= $p['nama']; ?>
                                        </td>
                                        <td>
                                            <?= $p['jekel']; ?>
                                        </td>
                                        <td>
                                            <?= $p['desa']; ?>
                                            RT
                                            <?= $p['rt']; ?>/ RW
                                            <?= $p['rw']; ?>.
                                        </td>
                                        <td>
                                            <?= empty($p['no_kk']) ? '-' : $p['no_kk']  ?> -
                                            <?= empty($p['kepala']) ? '-' : $p['kepala']  ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('penduduk/view/' . $p['id_pend']) ?>" title="Detail" class="btn btn-info btn-sm">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <a href="<?= base_url('penduduk/edit/' . $p['id_pend']) ?>" title=" Ubah" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url('penduduk/delete/' . $p['id_pend']) ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                                </>
                                        </td>
                                    </tr>

                                <?php
                                endforeach;
                                ?>
                            </tbody>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>