<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/css/all.css">
    <link rel="shortcut icon" href="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="<?=base_url('Register/registerNewUser')?>" method="POST">
            <div class="row my-5">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 align-self-center">
                    <?php
                    if ($this->session->flashdata('UserNotLogin')) 
                    {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?=$this->session->flashdata('UserNotLogin');?>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($this->session->flashdata('UserNotFound')) 
                    {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?=$this->session->flashdata('UserNotFound');?>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($this->session->flashdata('LoggedOut')) 
                    {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?=$this->session->flashdata('LoggedOut');?>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($this->session->flashdata('successInsertData')) 
                    {
                    ?>
                        <div class="alert alert-success" role="alert">
                            <?=$this->session->flashdata('successInsertData');?>
                        </div>
                    <?php
                    }
                    ?>
                    <h2 class="text-center">Register Akun Baru</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Nama User</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Nama UMKM</label>
                                <input type="text" class="form-control" id="nama_umkm" name="nama_umkm" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Lokasi UMKM</label>
                                <input type="text" class="form-control" id="lokasi_umkm" name="lokasi_umkm" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="align-items-end">
                        <button type="submit" class="btn btn-success btn-m">Register</button>
                        <span>Sudah Punya Akun <a href="<?=base_url('Login')?>">LOGIN</a></span>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>