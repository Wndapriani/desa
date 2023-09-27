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
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-edit"></i> Ubah Data
                </h3>
            </div>
            <form action="<?= base_url('/penduduk/update/') . $penduduk['id_pend'] ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Sistem</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id_pend" name="id_pend" value="<?= $penduduk['id_pend']; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $penduduk['nik']; ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $penduduk['nama']; ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">TTL</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tempat_lh" name="tempat_lh" value="<?= $penduduk['tempat_lh']; ?>" />
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl_lh" name="tgl_lh" value="<?= $penduduk['tgl_lh']; ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select name="jekel" id="jekel" class="form-control">
                                <option value="">-- Pilih jekel --</option>
                                <?php
                                //menhecek data yg dipilih sebelumnya
                                if ($penduduk['jekel'] == "LK") echo "<option value='LK' selected>LK</option>";
                                else echo "<option value='LK'>LK</option>";

                                if ($penduduk['jekel'] == "PR") echo "<option value='PR' selected>PR</option>";
                                else echo "<option value='PR'>PR</option>";
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Desa</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="desa" name="desa" value="<?= $penduduk['desa']; ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">RT/RW</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $penduduk['rt']; ?>" />
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $penduduk['rw']; ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="agama" name="agama" value="<?= $penduduk['agama']; ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-3">
                            <select name="kawin" id="kawin" class="form-control">
                                <option value="">-- Pilih Status --</option>
                                <?php
                                //menhecek data yg dipilih sebelumnya
                                if ($penduduk['kawin'] == "Sudah") echo "<option value='Sudah' selected>Sudah</option>";
                                else echo "<option value='Sudah'>Sudah</option>";

                                if ($penduduk['kawin'] == "Belum") echo "<option value='Belum' selected>Belum</option>";
                                else echo "<option value='Belum'>Belum</option>";

                                if ($penduduk['kawin'] == "Cerai Mati") echo "<option value='Cerai Mati' selected>Cerai Mati</option>";
                                else echo "<option value='Cerai Mati'>Cerai Mati</option>";

                                if ($penduduk['kawin'] == "Cerai Hidup") echo "<option value='Cerai Hidup' selected>Cerai Hidup</option>";
                                else echo "<option value='Cerai Hidup'>Cerai Hidup</option>";
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $penduduk['pekerjaan']; ?>" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
                    <a href="<?= base_url('penduduk') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </section>
</div>

<?= $this->endSection() ?>