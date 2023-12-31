<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lahir</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Lahir</li>
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
                        <i class="fa fa-table"></i> Data Kelahiran
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <a href="<?= base_url('/lahir/create') ?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Tambah Data</a>
                        </div>
                        <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tgl Lahir</th>
                                    <th>Jekel</th>
                                    <th>Keluarga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($lahir as $key => $data) :
                                ?>

                                    <tr>
                                        <td>
                                            <?php echo $key + 1; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nama']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['tgl_lh']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['jekel']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['no_kk']; ?>-
                                            <?php echo $data['kepala']; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('lahir/edit/' . $data['id_lahir'])  ?>" title="Ubah" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url('lahir/delete/' . $data['id_lahir']); ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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
                <!-- /.card-body -->
            </div>
    </section>
</div>

<?= $this->endSection() ?>