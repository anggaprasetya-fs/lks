<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Company Profile !</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/css/all.css">
    <link rel="shortcut icon" href="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid align-items-center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-white">
            <a href="<?=base_url('Home')?>" class="navbar-brand d-flex align-items-center">
                <h2 style="color: #563d7c;" class="font-weight-bold mt-1">Jualan Yuk!</h2>
            </a>
        </nav>
    </div>

    <section id="services" class="my-5 d-flex">
        <div class="container-fluid align-items-center text-center">
            <form action="<?=base_url('Home/filter')?>" name="form_filter" id="form_filter" method="POST">
                <div class="row my-0 mx-2">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <select name="filter_kategori" id="filter_kategori" class="form-control">
                                <option value="#" selected>- Pilih Kategori -</option>
                                <?php
                                foreach ($kategori as $data_kategori) 
                                {
                                ?>
                                    <option value="<?=$data_kategori->id_kategori?>"><?=$data_kategori->nama_kategori?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <select name="filter_penjual" id="filter_penjual" class="form-control">
                                <option value="#" selected>- Pilih Penjual -</option>
                                <?php
                                foreach ($umkm as $data_umkm) 
                                {
                                ?>
                                    <option value="<?=$data_umkm->id_user?>"><?=$data_umkm->nama_umkm?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn btn-success btn-m btn-block" type="submit">Filter</button>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="<?=base_url('Login')?>" class="btn btn-primary btn-m btn-block">Login</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="<?=base_url('Register')?>" class="btn btn-warning btn-m btn-block">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form> 
        </div>
    </section>

    <section id="services" class="my-5 d-flex">
        <div class="container-fluid">
            <div class="row my-4 mx-2">
                <div class="col-lg-12 d-flex flex-column">
                    <h3 style="color: #563d7c;" class="font-weight-bold align-items-start text-center">Semua Barang Jualan Kami</h3>
                    <div class="row align-items-start text-center">
                        <?php
                        foreach($data_all as $data)
                        {
                        ?>
                        <div class="col-lg-2 mt-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="mx-5 my-5">
                                        <img src="<?=base_url().$data->gambar_barang?>" alt="" class="img-fluid">
                                    </div>
                                    <h3><?=$data->nama_barang?></h3>
                                    <p><?=$data->deskripsi_barang?></p>
                                    <p class="mt-2 text-italic font-weight-bold"> Dijual oleh : <?=$data->nama_umkm?><br>Harga: Rp. <?=number_format($data->harga_barang, 0, '.', '.')?></p>
                                    <a href="" class="font-weight-bold"><span>Beli Sekarang</span> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <footer class="page-footer font-small">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© <?=date('Y')?> Copyright
            <a href="https://smkn1blitar.sch.id"> Peserta LKS SMKN 1 Blitar</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>