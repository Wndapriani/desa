<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kartu Keluarga</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Kartu Keluarga</li>
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
                        <i class="fa fa-table"></i> Data KK
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <a href="<?= base_url('/kartu-keluarga/create') ?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Tambah Data</a>
                        </div>
                        <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NO KK</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Alamat</th>
                                    <th>Anggota KK</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kk as $key => $data) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $key + 1; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['no_kk']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['kepala']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['desa']; ?>
                                            RT
                                            <?php echo $data['rt']; ?>/ RW
                                            <?php echo $data['rw']; ?>.
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('kartu-keluarga/anggota/' . $data['id_kk'])  ?>" title="Anggota KK" class="btn btn-info btn-sm">
                                                <i class="fa fa-users"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('kartu-keluarga/edit/' . $data['id_kk'])  ?>" title="Ubah" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url('kartu-keluarga/delete/' . $data['id_kk'])  ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
                <!-- /.card-body -->
            </div>
    </section>
</div>

<?= $this->endSection() ?>