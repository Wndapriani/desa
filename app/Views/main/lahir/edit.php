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
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-edit"></i> Ubah Data
                </h3>
            </div>
            <form action="<?= base_url('lahir/update/' . $lahir['id_lahir']) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Sistem</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id_lahir" name="id_lahir" value="<?php echo $lahir['id_lahir']; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $lahir['nama']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tgl Lahir</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl_lh" name="tgl_lh" value="<?php echo $lahir['tgl_lh']; ?>" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select name="jekel" id="jekel" class="form-control">
                                <option value="">-- Pilih jekel --</option>
                                <?php
                                //menhecek data yg dipilih sebelumnya
                                if ($lahir['jekel'] == "LK") echo "<option value='LK' selected>LK</option>";
                                else echo "<option value='LK'>LK</option>";

                                if ($lahir['jekel'] == "PR") echo "<option value='PR' selected>PR</option>";
                                else echo "<option value='PR'>PR</option>";
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keluarga</label>
                        <div class="col-sm-6">
                            <select name="id_kk" id="id_kk" class="form-control select2bs4" required>
                                <option selected="">- Pilih -</option>
                                <?php foreach ($kk as $key => $row) : ?>
                                    <option value="<?php echo $row['id_kk'] ?>" <?= $lahir['id_kk'] == $row['id_kk'] ? "selected" : null ?>>
                                        <?php echo $row['no_kk'] ?>
                                        -
                                        <?php echo $row['kepala'] ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
                    <a href="<?= base_url('lahir/') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </section>
</div>

<?= $this->endSection() ?>