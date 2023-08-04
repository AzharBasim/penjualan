<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mitra Jaya Manufacture</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url().'assets/css/all.min.css'?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url().'assets/css/sb-admin.css'?>" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

    <!-- Custom background image for the login page -->
    <!-- <style>
        body {
            background-image: url("<?php echo base_url().'assets/img/bg.jpg'?>");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style> -->

  </head>

  <body class="bg-dark">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-light text-black shadow">
                    <div class="card-body">
                        <div class="text-center">
                            <img width="365px" src="<?php echo base_url().'assets/img/logo.jpeg'?>" class="img-fluid mb-4" alt="Logo">
                        </div>
                        <form action="<?php echo base_url().'administrator/cekuser'?>" method="post">
                            <div class="form-group">
                                <label for="username" class="h4">Username</label>
                                <input type="text" id="username" name="username" class="form-control" required="required" autofocus="autofocus">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="h4">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required="required">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label form-check-inline" for="rememberMe">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remember Password</label>
                            </div>
                            <button class="btn-lg btn-primary btn-block" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/jquerys/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.bundle.min.js'?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/jquery-easing/jquery.easing.min.js'?>"></script>

  </body>

</html>
