<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

    <style type="text/css">
        html,body {
            font-family: 'Open Sans', sans-serif !important;
            position: relative;
            height: 100%;
            font-size: 100%;
            color: #212121;
            background-color: #f5f5f5;
        }

        .gCard-cover {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .gCard-cover > .gCard-cover-item {
            width: 100%;
        }

        .card {
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
            border: 1px solid #fff;
            -webkit-box-shadow: 0 7px 30px 0 rgba(0,0,0,.1);
            box-shadow: 0 7px 30px 0 rgba(0,0,0,.1);
        }

        .card-header {
            background-color: transparent;
            font-size: 18px;
        }

        label {
            font-size: 14px;
            opacity: .7;
        }

        .form-control {
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            border: 1px solid #e3e1e0;
        }

        .form-control:focus {
            border: 1px solid #d3d1d0;
        }

        .btn {
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: 14px;
        }
        
        small > a {
            color: #212121;
            opacity: .5;
        }

    </style>
</head>
<body>
<div class="gCard-cover">
    <div class="gCard-cover-item">
        <div class="container">
            <!-- Related Rented Row -->
            <div class="row">
                <div class="col-md-4 m-auto">
                    <div class="card mb-0">
                        <div class="card-header text-center">
                            Login
                        </div>
                        <div class="card-body p-4">
                            <form action="<?php echo base_url('login/aksi_login'); ?>" id="" method="post">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group mt-4">
                                    <button class="btn btn-block btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="form-group text-center mt-5">
                        <small class="text-center mt-0">
                            <a href="">Belum punya akun? Daftar disini</a>
                        </small>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</body>
</html>