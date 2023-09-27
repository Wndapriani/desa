<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pindah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Pindah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-table"></i> Data Pindah
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <div>
                        <a href="<?= base_url('pindah/create') ?>" class="btn btn-primary">
                            <i class="fa fa-edit"></i> Tambah Data</a>
                    </div>
                    <br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Alasan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pindah as $key => $data) :
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $key + 1; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['nik']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['nama']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['tgl_pindah']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['alasan']; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('pindah/edit/') .  $data['id_pindah']; ?>" title="Ubah" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?php echo base_url('pindah/delete/')  . $data['id_pindah']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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