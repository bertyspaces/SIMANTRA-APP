<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="nav-icon fas fa-user-circle mx-2"></i> <?= user()->username ?>
            </a>


            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <span class="dropdown-item dropdown-header">
                    <?php $roles = user()->getRoles(); ?>
                    <?php foreach ($roles as $role) : ?>
                        <?= $role ?>
                    <?php endforeach; ?>
                </span>
                <div class="dropdown-divider"></div>
                <a href="<?=base_url()?>profil" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> Profile
                    <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                </a>

                <a href="/logout" class="dropdown-item dropdown-footer bg-danger">logout</a>
            </div>
        </li>
    </ul>
</nav>