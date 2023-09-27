<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Datang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Surat Datang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-file"></i> Su-Ket Pendatang
                        </h3>
                    </div>
                    <form action="<?= base_url('surat-cetak/datang') ?>" method="get" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pendatang</label>
                                <div class="col-sm-6">
                                    <select name="id" id="id" class="form-control select2bs4" required>
                                        <option selected="selected">- Pilih Data -</option>
                                        <?php
                                        foreach ($pendatang as $key => $row) :
                                        ?>
                                            <option value="<?php echo $row['id_datang'] ?>">
                                                <?php echo $row['nik'] ?>
                                                -
                                                <?php echo $row['nama_datang'] ?>
                                            </option>
                                        <?php
                                        endforeach
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <input target="_blank" formtarget="_blank" type="submit" name="Cetak" value="Cetak" class="btn btn-info"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>