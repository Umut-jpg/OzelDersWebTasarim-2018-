<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Proje Tema</title>

    <!-- CSS VE JS   -->

    <link rel="stylesheet" href="<?=public_url('OzeldersTema/css/fontawesome.css')?>
    <link rel="stylesheet" href="<?=public_url('OzeldersTema/css/style.css')?>">
    <script src="<?=public_url('OzeldersTema/js/scrollreveal.min.js')?>"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


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
<div class="container">
    <div class="bg-dark  text-center py-4 mt-5" style="color:red">
        <h3  style="color:white; margin-top: 50px" ><em>İLETİŞİM SAYFASI</em></h3>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d770809.0860158126!2d28.45174621544522!3d41.003964328513874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1585945348713!5m2!1str!2str" width="500" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>

        <div class="col-md-6 col-sm-12">
            <form action="https://formspree.io/xknqjjok" method="post">
                <div class="card mt-4">
                    <div class="card-body p-3">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user text-danger"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Ad Soyad" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-envelope text-danger"></i>
                                    </div>
                                </div>
                                <input type="email" class="form-control" name="_replyto" placeholder="E-Posta" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-tag text-danger"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="numara" placeholder="Telefon Numaranız" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-comment text-danger"></i>
                                </div>
                            </div>
                            <textarea class="form-control" name="adres" placeholder="Lütfen Adresinizi Yazınız" rows="2" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-tag text-danger"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="konu" placeholder="Konu" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-comment text-danger"></i>
                                </div>
                            </div>
                            <textarea class="form-control" name="yazı" placeholder="Lütfen Mesajınızı Buraya Yazın.." rows="6" required></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="GÖNDER" name="send" class="btn btn-danger btn-block">
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<div class="bg-dark p-5">
    <div class="container">
        <div class="row">

            <div class="col-md-6 text-white text-center  col-md-6 offset-md-3">
                <h3>Geri Dönüş</h3>
                <hr class="border-light">

                <p class="lead text-center">Ekibimiz 7/24 bize gönderilen formları kontrol etmektedir. Bizimle iletişime geçmek istediğiniz taktirde ekibimiz gün içinde size dönüş sağlayacaktır.</p>

            </div>

        </div>
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
</body>