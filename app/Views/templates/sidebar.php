<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="<?= base_url() ?>img/logo-sidebar.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-bold">SIMANTRA-BPS</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info text-secondary  fw-bold">
                <i class="nav-icon fas fa-user-circle mx-2"></i><a href="#" class=""> <?= user()->username ?></a>
            </div>
        </div> -->

        <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search" style="color: blue;">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
            <div class="sidebar-search-results">
                <div class="list-group"><a href="#" class="list-group-item">
                        <div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div>
                        <div class="search-path"></div>
                    </a></div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if (in_groups('admin')) { ?>
                    <!-- menu dashboard -->
                    <li class="nav-item">
                        <a href="<?= base_url() ?>admin" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <!-- menu data master -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-server"></i>
                            <p>
                                Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>data_mitra" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Data Mitra</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>kegiatan" class="nav-link">
                                    <i class="nav-icon fas fa-calendar"></i>
                                    <p>Data Kegiatan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>bobot_kriteria/index" class="nav-link">
                                    <i class="nav-icon fas fa-tasks"></i>
                                    <p>Data Bobot & kriteria</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>rating_kriteria/" class="nav-link">
                                    <i class="nav-icon fas fa-tasks"></i>
                                    <p>Data Rating Kriteria</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- section menu manajemen -->
                    <li class="nav-header">MANAJEMENT</li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>kegiatan_mitra/index" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>Data Kegiatan Mitra</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>data_fsaw/index" class="nav-link">
                            <i class="nav-icon fas fa-user-check"></i>
                            <p>Data Penilaian FSAW</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>admin/manajemenUser" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>Data Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-header">ADMINISTRATOR</li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>nilai_kegiatan_mitra/index" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Nilai Kegiatan Mitra</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Ranking</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>rekap_nilai_mitra" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Rekap Nilai Mitra</p>
                        </a>
                    </li>
                <?php } ?>
                <?php if (in_groups('pml') || in_groups('ipds')) { ?>
                    <li class="nav-header">MAIN</li>
                    <li class="nav-item">
                        <a href="penilaian" class="nav-link">
                            <i class="fas fa-clipboard-list nav-icon"></i>
                            <p>Penilaian</p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

    </div>
</aside>