
<h2 class="mt-4"><?php echo $data->judul ?></h2>
<!-- Portfolio Item Row -->
<div class="card-group row mt-3">
    <div class="card col-sm-8">
        <div class="card-body p-0">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $data->gambar ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $data->gambar ?>" alt="Second slide">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body p-2">
            <p style="font-size: 14px;text-align: justify;line-height: 26px">
                <?php echo $data->isi ?>
            </p>
        </div>
    </div>

    <div class="card col-sm-4">
        <div class="card-body p-0">
            <ul class="list-unstyled mt-1">
                <a href="">
                    <li class="media">
                        <img class="mr-3" src="http://static.republika.co.id/uploads/images/110x80/lava-mengalir-dari-gunung-berapi-mayon-seperti-terlihat-dari-_180117130001-986.jpg" />
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </li>
                </a>

                <a href="">
                    <li class="media my-4">
                        <img class="mr-3" src="http://static.republika.co.id/uploads/images/110x80/0.03047800-1516628356-830-556.jpeg">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </li>
                </a>

                <a href="">
                    <li class="media">
                        <img class="mr-3" src="http://static.republika.co.id/uploads/images/110x80/0.27361700-1516540395-830-556.jpeg">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </li>
                </a>

                <a href="">
                    <li class="media my-4">
                        <img class="mr-3" src="http://static.republika.co.id/uploads/images/110x80/0.03047800-1516628356-830-556.jpeg">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </li>
                </a>

                <a href="">
                    <li class="media">
                        <img class="mr-3" src="http://static.republika.co.id/uploads/images/110x80/0.27361700-1516540395-830-556.jpeg">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </li>
                </a>

                <a href="">
                    <li class="media my-4">
                        <img class="mr-3" src="http://static.republika.co.id/uploads/images/110x80/0.03047800-1516628356-830-556.jpeg">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
