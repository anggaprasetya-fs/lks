<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/css/all.css">
    <link rel="shortcut icon" href="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid align-items-center my-5">
        <div class="row">
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <span>Anda Login Sebagai :</span>
                        <div class="row mt-2 align-items-center text-center">
                            <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/testimonials/testimonials-4.jpg" class="rounded mx-auto d-block img-fluid img-thumbnail" width="100px" height="100px">
                        </div>
                        <p class="text-center mb-5"><?=$this->session->userdata('fullname')?></p>
                        <div class="row mx-2">
                            <a href="<?=base_url('Admin')?>" class="btn btn-primary btn-block"><i class="fas fa-clipboard"></i> List Data Items</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Items</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        foreach ($edit as $data) 
                        {
                        ?>
                        <form action="<?=base_url('User/saveDataItems')?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <input type="hidden"  name="id" id="id" value="<?=$data->user_id?>">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?=$data->user_name?>" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?=$data->user_first_name?>" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?=$data->user_last_name?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Role</label>
                                        <select class="form-control" name="role" id="role" class="form-control">
                                            <option value="#" selected>- Choose Section -</option>
                                            <option value="Master" <?=$data->user_role == 'Master' ? 'selected' : ''?>>Master</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Password <span class="text-danger">* Fill if needed to change</span></label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <button class="btn btn-success btn-m" type="submit"><i class="fas fa-check"></i> Edit Data</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>