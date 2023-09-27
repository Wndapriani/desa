<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pendatang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Pendatang</li>
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
            <form action="<?= base_url('pendatang/update/' . $pendatang['id_datang']) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Sistem</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id_datang" name="id_datang" value="<?php echo $pendatang['id_datang']; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $pendatang['nik']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_datang" name="nama_datang" value="<?php echo $pendatang['nama_datang']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select name="jekel" id="jekel" class="form-control">
                                <option value="">-- Pilih jekel --</option>
                                <?php
                                //menhecek data yg dipilih sebelumnya
                                if ($pendatang['jekel'] == "LK") echo "<option value='LK' selected>LK</option>";
                                else echo "<option value='LK'>LK</option>";

                                if ($pendatang['jekel'] == "PR") echo "<option value='PR' selected>PR</option>";
                                else echo "<option value='PR'>PR</option>";
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tgl Datang</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl_datang" name="tgl_datang" value="<?php echo $pendatang['tgl_datang']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pelapor</label>
                        <div class="col-sm-6">
                            <select name="pelapor" id="prlapor" class="form-control select2bs4" required>
                                <option selected="">- Pilih -</option>
                                <?php
                                foreach ($penduduk as $key => $row) :
                                ?>
                                    <option value="<?php echo $row['id_pend'] ?>" <?= $pendatang['pelapor'] == $row['id_pend'] ? "selected" : null ?>>
                                        <?php echo $row['nik'] ?>
                                        -
                                        <?php echo $row['nama'] ?>
                                    </option>
                                <?php
                                endforeach
                                ?>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="card-footer">
                    <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
                    <a href="<?= base_url('/pendatang') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </section>
</div>

<?= $this->endSection() ?>