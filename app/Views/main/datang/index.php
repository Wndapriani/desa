<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Datang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Datang</li>
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
                        <i class="fa fa-table"></i> Data Pendatang
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <a href="<?= base_url('pendatang/create') ?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Tambah Data</a>
                        </div>
                        <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jekel</th>
                                    <th>Tanggal</th>
                                    <th>Pelapor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($pendatang as $key => $data) :
                                ?>

                                    <tr>
                                        <td>
                                            <?php echo $key + 1; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nik']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nama_datang']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['jekel']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['tgl_datang']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nama']; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('pendatang/edit/') . $data['id_datang']; ?>" title="Ubah" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url('pendatang/delete/') . $data['id_datang']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                                </>
                                        </td>
                                    </tr>

                                <?php
                                endforeach
                                ?>
                            </tbody>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </section>
</div>

<?= $this->endSection() ?>