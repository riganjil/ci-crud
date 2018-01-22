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
                        <img class="d-block w-100"
                             src="http://static.republika.co.id/uploads/images/inpicture_slide/0.22438400-1510891743-830-556.jpeg"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="http://static.republika.co.id/uploads/images/inpicture_slide/0.22438400-1510891743-830-556.jpeg"
                             alt="Second slide">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card col-sm-4">
        <div class="card-body p-0">
            <ul class="list-unstyled mt-1">
                <a href="">
                    <li class="media">
                        <img class="mr-3"
                             src="http://static.republika.co.id/uploads/images/110x80/lava-mengalir-dari-gunung-berapi-mayon-seperti-terlihat-dari-_180117130001-986.jpg"/>
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
                        <img class="mr-3"
                             src="http://static.republika.co.id/uploads/images/110x80/0.03047800-1516628356-830-556.jpeg">
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
                        <img class="mr-3"
                             src="http://static.republika.co.id/uploads/images/110x80/0.27361700-1516540395-830-556.jpeg">
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
                        <img class="mr-3"
                             src="http://static.republika.co.id/uploads/images/110x80/0.03047800-1516628356-830-556.jpeg">
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
                        <img class="mr-3"
                             src="http://static.republika.co.id/uploads/images/110x80/0.27361700-1516540395-830-556.jpeg">
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
                        <img class="mr-3"
                             src="http://static.republika.co.id/uploads/images/110x80/0.03047800-1516628356-830-556.jpeg">
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

<!-- Related Projects Row -->
<h5 class="my-3">Related Articles</h5>
<div class="card-deck">
    <?php foreach ($data->result_array() as $row) { ?>
        <div class="card">
            <a href="<?php echo base_url('news/'. $row['id']) ?>">
                <img class="card-img-top" src="<?php echo $row['gambar'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['judul'] ?></h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </a>
        </div>
    <?php } ?>

    <div class="card">
        <img class="card-img-top" src="http://placehold.it/500x300" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">News title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
            </p>
        </div>
    </div>

    <div class="card">
        <img class="card-img-top" src="http://placehold.it/500x300" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">News title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
            </p>
        </div>
    </div>

    <div class="card">
        <img class="card-img-top" src="http://placehold.it/500x300" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">News title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
            </p>
        </div>
    </div>
</div>
<!-- /.row -->