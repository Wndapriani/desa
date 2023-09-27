<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <?php echo $pend;  ?>
                            </h3>

                            <p>Penduduk</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?= base_url('/penduduk'); ?>" class="small-box-footer">Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                <?php echo $kartu;  ?>
                            </h3>

                            <p>Kartu Keluarga</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-card"></i>
                        </div>
                        <a href="/kartu-keluarga" class="small-box-footer">Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>
                                <?php echo $laki;  ?>
                            </h3>

                            <p>Laki-laki</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-male"></i>
                        </div>
                        <a href="/penduduk" class="small-box-footer">Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                <?php echo $prem;  ?>
                            </h3>

                            <p>Perempuan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-female"></i>
                        </div>
                        <a href="/penduduk" class="small-box-footer">Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <?php echo $lahir;  ?>
                            </h3>

                            <p>Lahir</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-happy"></i>
                        </div>
                        <a href="/lahir" class="small-box-footer">Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                <?php echo $mendu;  ?>
                            </h3>

                            <p>Meninggal</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-sad"></i>
                        </div>
                        <a href="/meninggal" class="small-box-footer">Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>
                                <?php echo $pindah; ?>
                            </h3>

                            <p>Pendatang</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-download"></i>
                        </div>
                        <a href="/pendatang" class="small-box-footer">Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                <?php echo $pindah;  ?>
                            </h3>

                            <p>Pindah</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-upload"></i>
                        </div>
                        <a href="/pindah" class="small-box-footer">Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>


<?= $this->endSection() ?>