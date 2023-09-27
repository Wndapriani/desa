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
                        <i class="fa fa-users"></i> Anggota KK
                    </h3>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('/kartu-keluarga/anggota/') . $kk['id_kk'] ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No KK | KPl Keluarga</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="no_kk" name="no_kk" value="<?php echo $kk['no_kk']; ?>" readonly />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="kepala" name="kepala" value="<?php echo $kk['kepala']; ?>" readonly />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $kk['desa']; ?>, RT <?php echo $kk['rt']; ?> RW <?php echo $kk['rw']; ?> (<?php echo $kk['kec']; ?> - <?php echo $kk['kab']; ?> - <?php echo $kk['prov']; ?>)" readonly />
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label">Anggota</label>
                            <div class="col-sm-4">
                                <select name="id_pend" id="id_pend" class="form-control select2bs4" required>
                                    <option value="" selected="selected">- Penduduk -</option>
                                    <?php foreach ($penduduk as $key => $row) : ?>
                                        <option value="<?php echo $row['id_pend'] ?>">
                                            <?php echo $row['nik'] ?>
                                            -
                                            <?php echo $row['nama'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="hubungan" id="hubungan" class="form-control" required>
                                    <option value="">- Hub Keluarga -</option>
                                    <option value="Kepal Keluarga">Kepala Keluarga</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Orang Tua">Orang Tua</option>
                                    <option value="Mertu">Mertua</option>
                                    <option value="Menant">Menantu</option>
                                    <option value="Cucu">Cucu</option>
                                    <option value="Famili lain">Famili Lain</option>
                                </select>
                            </div>
                            <input type="submit" name="Simpan" value="Tambah" class="btn btn-success">
                        </div>
                    </form>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jekel</th>
                                        <th>Hub Keluarga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($anggota as $key => $data) :

                                    ?>

                                        <tr>
                                            <td>
                                                <?php echo $data['nik']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['nama']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['jekel']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['hubungan']; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('/kartu-keluarga/anggota/delete/') . $data['id_anggota']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
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
                <div class="card-footer">
                    <a href="<?= base_url('/kartu-keluarga') ?>" title="Kembali" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>