<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Sistem Desa</span>
    </a>


    <!-- Sidebar -->
    <?php
    $loginModel = new \App\Models\LoginModel();
    $user = $loginModel->getId(session()->get('id_pengguna'));
    ?>

    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name=<?= $user['nama_pengguna'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>

            <div class="info">
                <a href="#" class="d-block"><?= $user['nama_pengguna'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Kelola Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/penduduk" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Data Penduduk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kartu-keluarga" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Data Kartu Keluarga</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Sirkulasi Penduduk
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('/lahir') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Data Lahir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/meninggal') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Data Meninggal</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('/pendatang') ?>" class=" nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Data Pendatang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/pindah') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Data Pindah</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Kelola Surat
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?= base_url('/surat/domisili') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Su-Ket Domisili</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/surat/lahir') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Su-Ket Kelahiran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/surat/mati') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Su-Ket Kematian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/surat/datang') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Su-Ket Pendatang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/surat/pindah') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Su-Ket Pindah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/surat/download') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Download Surat</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="<?= base_url('/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-arrow-circle-right"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->


</aside>