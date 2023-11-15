<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin" class="brand-link">
        <img src="<?= base_url() ?>/img/logo_simantra.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span>SIMANTRA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/img/profil.jpeg" class="img-circle elevation-3" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Marchellina Berty</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <?php if (in_groups('admin')) { ?>
                    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                        <div>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>
                        </div>
                    </div>
                    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                        <div>
                            <li class="nav-item ">
                                <a class="nav-link ">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>
                                        Data Master
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="nav-icon fas fa-columns"></i>
                                            <p>
                                                Data Mitra
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url() ?>mitra_lapangan" class="nav-link active">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Mitra Lapangan</p>
                                                </a>
                                            </li>

                                        </ul>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url() ?>mitra_pengolahan" class="nav-link active">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Mitra Pengolahan</p>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>kegiatan" class="nav-link">
                                            <i class="nav-icon fas fa-columns"></i>
                                            <p>
                                                Data Kegiatan
                                            </p>
                                        </a>
                                    </li>>
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>kegiatan_mitra" class="nav-link">
                                            <i class="nav-icon fas fa-columns"></i>
                                            <p>
                                                Data Kegiatan Mitra
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>bobot_kriteria" class="nav-link">
                                            <i class="nav-icon fas fa-columns"></i>
                                            <p>
                                                Data Bobot & Kriteria
                                            </p>
                                        </a>
                                    </li>

                        </div>

                    </div>
                    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                        <div>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-icon fas fa-columns"></i>
                                    <p>
                                        Data Penilaian
                                    </p>
                                </a>
                            </li>
                        </div>
                    </div>


                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>/nilai_kegiatan_mitra" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nilai Kegiatan Mitra</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>/rekap_niali_mitra" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekap Nilai Mitra</p>
                            </a>
                        </li>

                    </ul>
                    </li>
                    <li class="nav-item">
                        <a href="rangking" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Data Rangking
                            </p>
                        </a>
                    </li>
            </ul>
            </li>

            <li class="nav-item">
                <a href="user" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Data User
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
        <?php } ?>
        <?php if (in_groups('pml')) { ?>
            <li class="nav-item">
                <a href="pilih_kegiatan" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Input Penilaian
                    </p>
                </a>
            </li>
        <?php } ?>
        <li class="nav-item">
            <a href="profil" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                    Data Profile
                </p>
            </a>
        </li>



        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>