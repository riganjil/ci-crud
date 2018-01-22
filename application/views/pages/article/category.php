
<!-- Related Projects Row -->
<h3 class="my-4">Articles</h3>
<div class="row">
    <?php foreach($data->result_array() as $row){ ?>
    <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
            <img class="img-fluid" src="<?php echo $row['gambar'] ?>" alt="">
            <small><?php echo $row['judul'] ?></small>
        </a>
    </div>
    <?php } ?>

</div>
<!-- /.row -->