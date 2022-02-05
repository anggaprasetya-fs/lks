<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/css/all.css">
    <link rel="shortcut icon" href="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid align-items-center my-5">
        <div class="row">
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body text-center">
                        <span>Anda Login Sebagai :</span>
                        <div class="row mt-2 align-items-center text-center">
                            <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/testimonials/testimonials-4.jpg" class="rounded mx-auto d-block img-fluid img-thumbnail" width="100px" height="100px">
                        </div>
                        <p class="text-center mb-1"><?=$this->session->userdata('fullname')?></p>
                        <a href="<?=base_url('Admin/logout')?>" class="btn btn-danger mb-5"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                        <div class="row mx-2 my-2">
                            <a href="<?=base_url('Admin')?>" class="btn btn-primary btn-block"><i class="fas fa-clipboard"></i> List Data Items</a>
                        </div>
                        <div class="row mx-2 my-2">
                            <a href="<?=base_url('User')?>" class="btn btn-primary btn-block"><i class="fas fa-clipboard"></i> List Data Users</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <?php if($this->session->flashdata('successInsertData'))
                {    
                ?>
                    <div class="alert alert-success" role="alert">
                        <?=$this->session->flashdata('successInsertData');?>
                    </div>  
                <?php
                }
                ?>
                <?php if($this->session->flashdata('UserLoggedIn'))
                {    
                ?>
                    <div class="alert alert-success" role="alert">
                        Welcome, <?=$this->session->flashdata('UserLoggedIn');?>
                    </div>  
                <?php
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="<?=base_url('User/Add')?>" class="btn btn-success"><i class="fas fa-plus"></i> Add Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark text-center">
                                <th>#</th>
                                <th>USERNAME</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>ROLE</th>
                                <th>CREATED AT</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $data) 
                                {
                                ?>
                                    <tr>
                                        <td width="70px" class="text-center"><?=$no++?>.</td>
                                        <td width="200px"><?=$data->user_name?></td>
                                        <td width="100px"><?=$data->user_first_name?></td>
                                        <td width="100px"><?=$data->user_last_name?></td>
                                        <td width="100px"><?=$data->user_role?></td>
                                        <td width="120px" class="text-center"><?=$data->user_created_at?></td>
                                        <td width="150px" class="text-center">
                                            <a href="<?=base_url('User/edit/'.$data->user_id)?>" type="submit" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                            <a href="<?=base_url('User/delete/'.$data->user_id)?>" type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
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