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
                        <p class="text-center mb-5"><?=$this->session->userdata('umkm')?></p>
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
                        <form action="<?=base_url('Admin/saveDataItems')?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <input type="hidden" name="id" id="id" value="<?=$data->id_barang?>">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?=$data->nama_barang?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Harga Barang</label>
                                        <input type="number" class="form-control" name="harga_barang" id="harga_barang" value="<?=$data->harga_barang?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Kategori Barang</label>
                                        <select name="kategori_barang" id="kategori_barang" class="form-control">
                                            <option value="#">- Pilih Kategori Barang -</option>
                                            <?php
                                            foreach ($kategori as $data_kategori) 
                                            {
                                            ?>
                                                <option value="<?=$data_kategori->id_kategori?>" <?=$data_kategori->id_kategori == $data->kategori_barang ? 'selected' : ''?> ><?=$data_kategori->nama_kategori?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">UMKM Penjual</label>
                                        <input type="text" class="form-control" name="penjual" id="penjual" readonly value="<?=$data->nama_umkm?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Deskripsi Barang</label>
                                        <textarea name="deskripsi_barang" id="deskripsi_barang" cols="30" rows="10" class="form-control"><?=$data->deskripsi_barang?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Gambar Barang </label>
                                        <input type="file" name="gambar" id="gambar" class="form-control-file">
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