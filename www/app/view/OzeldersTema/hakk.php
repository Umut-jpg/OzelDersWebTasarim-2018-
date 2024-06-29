<!DOCTYPE html>
<html lang="en">
<html lang="en">
<!-- CSS VE JS   -->
<head>
    <meta charset="UTF-8">
    <title>Proje Tema</title>
    <link rel="stylesheet" href="css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scrollreveal.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container" >
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>


        </button>



        <div class="navbar-brand">
            <img src="<?=public_url('/OzeldersTema/img/logo.jpg')?>" class="w-25" alt="">
            ÖZEL DERS
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto " >

                <li class="nav-item">
                    <a href="<?=site_url()?>" nav class="navbar  navbar-dark  text-white"  class="nav-link">AnaSayfa</a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('hakk')?>" nav class="navbar  navbar-dark  text-white"  class="nav-link">Hakkımda</a>

                </li>
                <li class="nav-item">
                    <a href="<?=site_url('basvuru')?>" nav class="navbar  navbar-dark text-white"  class="nav-link">Başvuru</a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('makale')?>" nav class="navbar  navbar-dark text-white"  class="nav-link">Makaleler</a>
                </li>

            </ul>
            <form action="" class="form-inline">
                <input type="text" class="form-control mr-3">
                <button class="btn btn-outline-info" style="color:white">Git</button>

            </form>
        </div>
    </div>
    <a href="<?=site_url('admin')?>" class="btn btn-danger " style="color:white">Yönetici Giriş</a>
</nav>
<div>
    <img src="<?=public_url('/OzeldersTema/img/hakkımızda2.png')?>" class="w-100" alt="" style="height:450px ;">
</div>
<div class="bg-dark p-5">
    <div class="container">
        <div class="row">

            <div class="col-md-6 text-white text-center  col-md-6 offset-md-3">
                <h3>Hakkımızda</h3>
                <hr class="border-light">
                <p class="lead text-center"><?=setting('hakk')?></p>

            </div>

        </div>
    </div>
    <div id="carouselExampleInterval" class="carousel slide  mx-auto  "  data-ride="carousel  " style="width: 650px;"    >
        <div class="carousel-inner"    >
            <div class="carousel-item active" data-interval="10000">
                <img src="<?=public_url('/OzeldersTema/img/slıder3-1.jpg')?>" class="d-block w-100" alt="..." style="height: 400px;" >
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="<?=public_url('/OzeldersTema/img/slıder2-1.jpg')?>" class="d-block w-100" alt="..." style="height: 400px;" >
            </div>
            <div class="carousel-item">
                <img src="<?=public_url('/OzeldersTema/img/slıder1-1.jpg')?>" class="d-block w-100" alt="..." style="height: 400px;" >
            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Önceki</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Sonraki</span>
        </a>

    </div>
</div>
<footer class="bg-danger p-2 ">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-white ">
                <h5 >SOSYAL MEDYA HESAPLARIMIZ</h5>
                <hr class="border-light">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="<?=setting('facebook')?>" class="nav-link  text-white bg-dark ">FACEBOOK</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=setting('twitter')?>" class="nav-link text-white bg-info">TWİTTER</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=setting('instagram')?>" class="nav-link text-white bg-primary">İNSTAGRAM</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>