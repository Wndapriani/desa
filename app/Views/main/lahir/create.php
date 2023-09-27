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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-edit"></i> Tambah Data
                    </h3>
                </div>
                <form action="<?= base_url('lahir/store') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Bayi" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tgl Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="tgl_lh" name="tgl_lh" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-3">
                                <select name="jekel" id="jekel" class="form-control">
                                    <option>- Pilih -</option>
                                    <option>LK</option>
                                    <option>PR</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Keluarga</label>
                            <div class="col-sm-6">
                                <select name="id_kk" id="id_kk" class="form-control select2bs4" required>
                                    <option selected="selected">- Pilih KK -</option>
                                    <?php foreach ($kk as $key => $row) : ?>
                                        <option value="<?php echo $row['id_kk'] ?>">
                                            <?php echo $row['no_kk'] ?>
                                            -
                                            <?php echo $row['kepala'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                        </div>
                        <div class="card-footer">
                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                            <a href="?page=data-lahir" title="Kembali" class="btn btn-secondary">Batal</a>
                        </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>