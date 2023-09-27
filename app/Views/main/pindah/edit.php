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
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-edit"></i> Ubah Data
                </h3>
            </div>
            <form action="<?= base_url('pindah/update/' . $pindah['id_pindah']) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Sistem</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id_pindah" name="id_pindah" value="<?php echo $pindah['id_pindah']; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pindah['nama']; ?>" readonly required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tgl Pindah</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl_pindah" name="tgl_pindah" value="<?php echo $pindah['tgl_pindah']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sebab</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="alasan" name="alasan" value="<?php echo $pindah['alasan']; ?>" required>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
                    <a href="<?= base_url('/pindah') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </section>
</div>

<?= $this->endSection() ?>