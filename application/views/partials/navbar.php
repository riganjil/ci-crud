<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('/') ?>"><img src="https://gerai.republika.co.id/files/gerai/images/logon.png" alt="" class="img-fluid" width="80"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('category/news') ?>">E-Paper</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('category/sepak-bola') ?>">Foto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('category/sepak-bola') ?>">Kliping</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('category/sepak-bola') ?>">Belajar Al-Quran</a>
                </li>
                <?php if ($this->session->userdata('status') == 'login') { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $this->session->userdata("nama"); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoryLink">
                            <a class="dropdown-item" href="<?php echo base_url('profil') ?>">Profil</a>
                            <a class="dropdown-item" href="<?php echo base_url('login/logout') ?>">Logout</a>
                        </div>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="clearfix"></div>