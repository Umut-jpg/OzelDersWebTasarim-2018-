<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title><?=$row['post_title']?></title>

    <!--CSS VE JS  -->
    <link rel="stylesheet" href="<?=public_url('OzeldersTema/css/fontawesome.css')?>
    <link rel="stylesheet" href="<?=public_url('OzeldersTema/css/style.css')?>">
    <script src="<?=public_url('OzeldersTema/js/scrollreveal.min.js')?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>




</head>
<body>
<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container" >





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

<section class="jumbotron text-center bg-dark mt-5">
    <div class="container text-danger" >

        <h1><?=$row['post_title']?></h1>

    </div>
</section>

<div class="row">
    <div class="col-md-12">

        <div class="card mb-3">

            <div class="card-header text-danger ">
                <h5><strong><?=$row['post_title']?></strong></h5>
                <div class="date text-secondary">

                    <?=timeConvert($row['post_date'])?>
                </div>
            </div>

            <div class="card-body">
               <?=htmlspecialchars_decode($row['post_content'])?>
            </div>
        </div>
 </div>
</div>

</div>
</div>

</body>
</html>