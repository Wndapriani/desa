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
                    <i class="fa fa-edit"></i> Ubah Data
                </h3>
            </div>
            <form action="<?= base_url('/kartu-keluarga/update/' . $kk['id_kk']) ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Sistem</label>
                        <div class="col-sm-3">
                            <input type='text' class="form-control" id="id_kk" name="id_kk" value="<?php echo $kk['id_kk']; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No KK</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="<?php echo $kk['no_kk']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kpl Keluarga</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kepala" name="kepala" value="<?php echo $kk['kepala']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Desa</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="desa" name="desa" value="<?php echo $kk['desa']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">RT/RW</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rt" name="rt" value="<?php echo $kk['rt']; ?>" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rw" name="rw" value="<?php echo $kk['rw']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kec" name="kec" value="<?php echo $kk['kec']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kabupaten</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kab" name="kab" value="<?php echo $kk['kab']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="prov" name="prov" value="<?php echo $kk['prov']; ?>" required>
                        </div>
                    </div>


                </div>
                <div class="card-footer">
                    <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
                    <a href="<?= base_url('kartu-keluarga') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </section>
</div>

<?= $this->endSection() ?>