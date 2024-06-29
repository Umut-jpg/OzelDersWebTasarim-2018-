<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAKALELER</title>

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
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>


        </button>



        <div class="navbar-brand">
            <img src=<?=public_url('/OzeldersTema/img/logo.jpg')?>  class="w-25" alt="">
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
    <img src=<?=public_url('/OzeldersTema/img/makaleler.png')?>  class="w-100" alt="" style="height:450px ;">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h3 class="pb-3 mt-5">Son Paylaşımlar</h3>
            <?php foreach ($query as $row): ?>
            <div class="card mb-3">
                <div class="card-header text-danger">
                    <h5><strong><?=$row['post_title']?></strong></h5>
                    <div class="date text-secondary ">
                        <?=timeConvert($row['post_date'])?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <?=htmlspecialchars_decode($row['post_short_content'])?>
                    </div>
                    <a href="<?=site_url('makale/' . $row['post_url'])?>" class="btn btn-dark">Makaleyi Görüntüle</a>
                </div>
            </div>
            <?php endforeach; ?>
            <?php if($totalRecord > $pageLimit):?>
            <div class="pagination-container text-center mb-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">

                           <?=$db->showPagination(site_url('makale?'.$pageParam.'=[page]'),'active',true)?>

                    </ul>
                </nav>
            </div>
            <?php endif;?>
        </div>
        <div class="col-md-4 mt-5">

            <div class="list-group ">
                <a href="<?=site_url('hakk')?>" class="list-group-item list-group-item-action list-group-item-danger mt-5 ">Hakkımızda</a>


                <a href="<?=site_url('basvuru')?>" class="list-group-item list-group-item-action list-group-item-primary">Başvuru/İletişim</a>



            </div>
            <div class="col-12 col-md pb-3 " >
                <h5 class="mt-3 pb-3">Sosyal Medya Hesaplarımız</h5>
                <button  type=button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1" ></i> Facebook</button><br>
                <button type="button" class="btn btn-tw mt-3"><i class="fab fa-twitter pr-1"></i> Twitter</button><br>
                <button type="button" class="btn btn-ins mt-3"><i class="fab fa-instagram pr-1"></i> Instagram</button><br>
                <button type="button" class="btn btn-yt mt-3"><i class="fab fa-youtube pr-1"></i> Youtube</button>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md pr-5 ">
                    <h4 class="text-danger">Hakkımızda Kısa Bilgi</h4>
                    <p class="small">
                        Ozelders.com öğretmenleri ortalama 9 yıllık bir dershane ve özel ders tecrübesine sahiptirler. Birlikte çalıştığımız öğretmenler hemen hepsi Çapa Anadolu Öğretmen Lisesi’ nin ardından Boğaziçi Üniversitesi Eğtim Fakültesi’ nin çeşitli bölümlerinden mezun olmuşlardır. Kariyerlerinde özel okullar, etüt eğitim merkezleri, dershaneler, özel ders merkezleri bulunan öğretmenlerimiz bu tecrübelerini YGS-LYS, AP, IB, SAT v.b sınavlara hazırlanan öğrencilerine aktarabilmek için oldukça istekli ve özverili bir şekilde kariyerlerine devam etmektedirler.
                    </p>
                </div>

            </div>
        </footer>
    </div>
</div>
</div>

</body>
</html>