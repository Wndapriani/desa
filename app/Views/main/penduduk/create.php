<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Penduduk</h1>
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
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-edit"></i> Tambah Data
                    </h3>
                </div>
                <form action="<?= site_url('/penduduk') ?>" method="post">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penduduk" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">TTL</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="tempat_lh" name="tempat_lh" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="tgl_lh" name="tgl_lh" placeholder="Tanggal Lahir" required>
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
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                            <div class="col-sm-3">
                                <select name="kawin" id="kawin" class="form-control">
                                    <option>- Pilih -</option>
                                    <option>Sudah</option>
                                    <option>Belum</option>
                                    <option>Cerai Mati</option>
                                    <option>Cerai Hidup</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-info">
                        <a href="<?= base_url('penduduk') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>

<?= $this->endSection() ?>