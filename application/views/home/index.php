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
    <div class="container align-items-center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-white">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30">
                <h2 style="color: #563d7c;" class="font-weight-bold mt-1">FlexItOut.</h2>
            </a>
        
            <div class="collapse navbar-collapse justify-content-end font-weight-bold" id="navbarMaster">
                <div class="navbar-nav my-3 mr-0">
                    <li class="nav-item <?=$this->uri->segment(1) != 'Home' ? '' : 'active'?>">
                        <a href="<?=base_url('Home')?>" class="nav-link"><span class="text-primary">Home</span></a>
                    </li>
                    <li class="nav-item <?=$this->uri->segment(1) == 'Home#about' ? 'active' : ''?>">
                        <a href="#about" class="nav-link"><span class="text-primary">About</span></a>
                    </li>
                    <li class="nav-item <?=$this->uri->segment(1) == 'Home#services' ? 'active' : ''?>">
                        <a href="#services" class="nav-link"><span class="text-primary">Services</span></a>
                    </li>
                    <li class="nav-item <?=$this->uri->segment(1) == 'Home#team' ? 'active' : ''?>">
                        <a href="#team" class="nav-link"><span class="text-primary">Team</span></a>
                    </li>
                    <li class="nav-item <?=$this->uri->segment(1) == 'Home#contact' ? 'active' : ''?>">
                        <a href="#contact" class="nav-link"><span class="text-primary">Contact</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('Login')?>" class="nav-link btn btn-primary"><span class="text-white font-weight-bold">Login</span></a>
                    </li>
                </div>
            </div>
        </nav>
    </div>
    
    <section id="hero" class="mt-5 d-flex">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column align-self-center">
                    <h1 style="color: #563d7c;" class="font-weight-bold">We offer modern solutions for growing your business</h1>
                    <h4>We are team of talented designers making websites with Bootstrap</h4>
                    <div class="row mt-3">
                        <div class="col-md-12 my-2">
                            <a type="button" href="#home" class="btn btn-lg btn-primary font-weight-bold"><span>Get Started</span> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column align-self-start">
                    <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/hero-img.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="my-5 d-flex">
        <div class="container">
            <div class="card border-0">
                <div class="row my-4 mx-2">
                    <div class="col-lg-6 d-flex flex-column align-items-center">
                        <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/about.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 d-flex flex-column align-items-start">
                        <h3 style="color: #563d7c;" class="font-weight-bold">About Us</h3>
                        <h5 class="mt-2">Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h5>
                        <span class="mt-2">Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti</span>
                        <a href="#" class="btn btn-primary btn-lg mt-5 font-weight-bold">Read More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 d-flex" style="background-color: gray;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow-sm p-3 mb-5 rounded border-0">
                        <div class="card-body d-flex flex-column">
                            <div class="row align-items-center">
                                <div class="col-md-auto text-primary text-center">
                                    <i class="far fa-smile fa-3x"></i>
                                </div>
                                <div class="col-md-auto text-center" style="color: #563d7c;">
                                    <h1>232</h1>
                                    <span>Happy Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow-sm p-3 mb-5 rounded border-0">
                        <div class="card-body d-flex flex-column">
                            <div class="row align-items-center">
                                <div class="col-md-auto text-warning text-center">
                                    <i class="fas fa-poll-h fa-3x"></i>
                                </div>
                                <div class="col-md-auto text-center" style="color: #563d7c;">
                                    <h1>521</h1>
                                    <span>Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow-sm p-3 mb-5 rounded border-0">
                        <div class="card-body d-flex flex-column">
                            <div class="row align-items-center">
                                <div class="col-md-auto text-success text-center">
                                    <i class="fas fa-headset fa-3x"></i>
                                </div>
                                <div class="col-md-auto text-center" style="color: #563d7c;">
                                    <h1>1249</h1>
                                    <span>Hours of Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow-sm p-3 mb-5 rounded border-0">
                        <div class="card-body d-flex flex-column">
                            <div class="row align-items-center">
                                <div class="col-md-auto text-danger text-center">
                                    <i class="fas fa-users fa-3x"></i>
                                </div>
                                <div class="col-md-auto text-center" style="color: #563d7c;">
                                    <h1>64</h1>
                                    <span>Hard Workers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="my-5 d-flex">
        <div class="container">
            <div class="row my-4 mx-2">
                <div class="col-lg-12 d-flex flex-column">
                    <h3 style="color: #563d7c;" class="font-weight-bold align-items-start text-center">Our Services</h3>
                    <div class="row align-items-center text-center">
                        <div class="col-lg-4 mt-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="jumbotron mx-5 my-5 bg-primary">
                                        <i class="far fa-comments fa-6x text-white"></i>
                                    </div>
                                    <h3>Nesciunt Mete</h3>
                                    <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur</p>
                                    <a href="" class="font-weight-bold"><span>Read More</span> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="jumbotron mx-5 my-5 bg-danger">
                                        <i class="far fa-comments fa-6x text-white"></i>
                                    </div>
                                    <h3>Eosle Commodi</h3>
                                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                                    <a href="" class="font-weight-bold"><span>Read More</span> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="jumbotron mx-5 my-5 bg-success">
                                        <i class="far fa-comments fa-6x text-white"></i>
                                    </div>
                                    <h3>Ledo Markt</h3>
                                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti</p>
                                    <a href="" class="font-weight-bold"><span>Read More</span> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <section id="team" class="my-5 d-flex" style="background-color: grey;">
        <div class="container">
            <div class="row my-5 mx-3">
                <div class="col-lg-12 d-flex flex-column">
                    <h3 style="color: white;" class="font-weight-bold align-items-start text-center">Our Teams</h3>
                    <div class="row align-items-center text-center">
                        <div class="col-lg-3 mt-3">
                            <div class="card rounded">
                                <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/team/team-1.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 style="color: #563d7c;">Walter White</h3>
                                    <span class="text-secondary">Chief Executive Officer</span>
                                    <p class="mt-4 font-italic">Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card rounded">
                                <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/team/team-2.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 style="color: #563d7c;">Sarah Jhonson</h3>
                                    <span class="text-secondary">Product Manager</span>
                                    <p class="mt-4 font-italic">Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card rounded">
                                <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/team/team-3.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 style="color: #563d7c;">William Anderson</h3>
                                    <span class="text-secondary">CTO</span>
                                    <p class="mt-4 font-italic">Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card rounded">
                                <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/team/team-4.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 style="color: #563d7c;">Amanda Jepson</h3>
                                    <span class="text-secondary">Accountant</span>
                                    <p class="mt-4 font-italic">Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 d-flex" id="contact">
        <div class="container">
            <div class="card border-0">
                <div class="my-5 mx-2">
                    <h3 class="text-center" style="color: #563d7c;">Contact Us</h3>
                    <form action="#" id="form-contact">
                        <div class="row my-3 mx-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" required name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email" required name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row my-3 mx-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" required name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 mb-1 mx-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row my-0 mx-2">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-success btn-block btn-m">Send Message <i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </form>
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