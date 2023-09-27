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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-edit"></i> Tambah Data
                    </h3>
                </div>
                <form action="<?= base_url('/kartu-keluarga') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No KK</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No KK" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kpl Keluarga</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="kepala" name="kepala" placeholder="Kpl Keluarga" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="desa" name="desa" placeholder="Desa" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">RT/RW</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" required>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="kec" name="kec" placeholder="Kecamatan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="kab" name="kab" placeholder="Kabupaten" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Provinsi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="prov" name="prov" placeholder="Provinsi" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                        <a href="<?= base_url('/kartu-keluarga') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>