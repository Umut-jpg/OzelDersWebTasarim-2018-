<!DOCTYPE html>
<html lang="en">
<!-- CSS VE JS   -->
<head>
    <meta charset="UTF-8">
    <title><?=$meta['title']?></title>
    <?php if(isset($meta['description'])):?>
    <meta name="description" content="<?= $meta['description']?>">
    <?php endif;?>
    <?php if(isset($meta['keywords'])):?>
        <meta name="keywords" content="<?= $meta['keywords']?>">
    <?php endif;?>
    <link rel="stylesheet" href="<?=public_url('OzeldersTema/css/fontawesome.css')?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=public_url('OzeldersTema/css/style.css')?>">
    <script src="<?=public_url('OzeldersTema/js/scrollreveal.min.js')?>"></script>
</head>
<body>

<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container" >
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>


        </button>



        <div class="navbar-brand">
            <img src=<?=public_url('/OzeldersTema/img/logo.jpg')?> class="w-25" alt="">
            <?=setting('logo')?>
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
                <input type="text" class="form-control mr-3 ">
                <button class="btn btn-outline-info " style="color:white">Git</button>
                </form>
            </div>

    </div>
    <a href="<?=site_url('admin')?>" class="btn btn-danger " style="color:white">Yönetici Giriş</a>
   </nav>
    <header id="headeralanı">
    <div class="overlay">
        <div class="container">
            <div class="row text-center mainContent">
                <div class="col my-auto">
                    <h1 style="color:white; margin-top: 200px;" class="display-3"><span></span> <?=setting('buyukyazı')?></h1>
                    <p class="text-muted"><em><?=setting('kucukyazı')?></em></p>
                    <a href="<?=setting('beyazbuttonurl')?>" class="btn btn-outline-primary"><?=setting('beyazbutton')?></a>
                    <a href="<?=setting('mavibuttonurl')?>" class="btn btn-primary"><?=setting('mavibutton')?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark p-5">
        <div class="container">
            <div class="row " >
                <div class="col-md-6 ">
                    <img src="<?=public_url('OzeldersTema/img/mat1.jpeg')?>" class="img-fluid img-thumbnail" alt="";>
                </div>
                <div class="col-md-6 text-white">
                    <h3>MatematikDeneme </h3>
                    <hr class="border-light">
                    <p class="lead">TYT ve AYT’ de Matematik derslerindeki eksikleriniz için; konu hâkimiyeti tam, pedagojik formasyona sahip ders verenler seçilip özel derse yönlendiriliyor. Bizden destek almaya karar verdiğinizde işini iyi yapan öğretmenlerle eksiklerinizi tamamlar, başarıya ulaşırsınız.</p>
                    <a href="<?=site_url('makale')?>" class="btn btn-danger " role="button" aria-disabled="true">Makalelerimize Göz At</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-info p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6  order-md-2 ">
                    <img src="<?=public_url('/OzeldersTema/img/tr1.jpeg')?>" class="img-fluid img-thumbnail rounded-circle" alt="";>
                </div>
                <div class="col-md-6 text-white order-md-1">
                    <h3>Türkçe Deneme </h3>
                    <hr class="border-light">
                    <p class="lead">LGS sınavlarına; Türkçe dersi için özel öğretmen sağlıyoruz. Liselere giriş sınavlarına ders veren öğretmenlerimizin büyük bir kısmı özel kurslar ve özel okullar gibi kurumsal yerlerde eğitmenlik yapan özel ders verenlerden oluşmaktadır. İsterseniz size öğretmen önerebiliriz.. </p>
                    <a href="<?=site_url('makale')?>" class="btn btn-light " role="button" aria-disabled="true">Makalelerimize Göz At</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light p-5">
        <div class="container">
            <div class="row " >
                <div class="col-md-6 ">
                    <div id="carouselExampleInterval" class="carousel slide  mx-auto  "  data-ride="carousel  " style="width: 1000px;"    >
                        <div class="carousel-inner"    >
                            <div class="carousel-item active" data-interval="10000">

                                <img src="<?=public_url('OzeldersTema/img/slıder1.jpg')?>" class="d-block w-100" alt="..."  >
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="<?=public_url('OzeldersTema/img/slıder22.jpg')?>" class="d-block w-100" alt="..."  >
                            </div>
                            <div class="carousel-item">
                                <img src="<?=public_url('OzeldersTema/img/slıder3.jpg')?>" class="d-block w-100" alt="..."  >
                            </div>
                            <div class="carousel-item">
                                <img src="<?=public_url('OzeldersTema/img/slıder4.jpg')?>" class="d-block w-100" alt="..." >
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
            </div>
        </div>
    </div>
    <div class="col-md-11 text-dark text-center">
        <h3 >Kurumsal ve Başarılı </h3>
        <hr class="border-dark">
        <p class="lead">11 yılda yaklaşık 200 özel öğretmenle 1100 ailede 1330 öğrenciye 33.000 seans özel ders desteği verdik. Profesyonel öğretmenlerle çalışır ve deneyimlerinden faydalanırsınız. Öğrencinizi başarıya ulaştıran sonuç odaklı programlar yaparız. İstediğiniz derste başarıyı tadarsınız.</p>

    </div>
    </>
    <div class="jumbotron mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">


                    <img src="<?=public_url('OzeldersTema/img/resim11.jpg')?>" alt="">
                    <h3>Özel Ders</h3>
                    <p>Takviye ihtiyacı duyulan bir derste, derse hâkim öğretmenin öğrenciye birebir olarak verdiği...</p>
                    <a href="<?=site_url('makale/ozelderss')?>" class="btn btn-danger" role="button" aria-disabled="true">Devamını incele</a>

                </div>
                <div class="col-md-4 text-center">
                    <img src="<?=public_url('OzeldersTema/img/resim22.jpg')?>" alt="">
                    <h3>Özel Ders Avantajları</h3>
                    <p>Alacağınız birebir ders hizmetinin avantajlarını merak mı ediyorsunuz? Akademik, iletişim, ekonomiklik...</p>
                    <a href="<?=site_url('makale/ozeldersfayda')?>" class="btn btn-danger" role="button" aria-disabled="true">Devamını incele</a>
                </div>

                <div class="col-md-4 text-center">
                    <img src="<?=public_url('OzeldersTema/img/resim3.jpg')?>" alt="">
                    <h3>Özel Dersin Hedefleri</h3>
                    <p>Özelders projenin yakın dönem hedeflerini öğrenmek ister misiniz? Hizmet verdiği ilçelerde... </p>
                    <a href="<?=site_url('makale/ozeldershedef')?>" class="btn btn-danger" role="button" aria-disabled="true">Devamını incele</a>
                </div>
            </div>
        </div>
    </div>
    <section id="ekıp" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 e1">
                    <div class="card text-center">
                        <div class="card-block">
                            <img src="<?=public_url('OzeldersTema/img/1.jpg')?>" class="img-fluid rounded-circle my-4">
                            <h3>Ahmet A.</h3>
                            <p>2002 yılında başladığım öğretmenlik mesleğini,Başta Okul ve Dershane olmak üzere 14 yıl icra ettim. Türkiye'nin önde gelen dershane zincirlerinde matematik zümre sorumlusu olarak görev aldım. Özellikle matematik alanında kullanılan birçok yayının hazırlanmasında öncülük ettim. </p>
                        </div>


                    </div>
                </div>
                <div class="col-md-3 e2">
                    <div class="card text-center">
                        <div class="card-block">
                            <img src="<?=public_url('OzeldersTema/img/2.jpg')?>" class="img-fluid rounded-circle my-4">
                            <h3>Ayşe Y.</h3>
                            <p>12 yıldır ilköğretim ve lise seviyesinde matematik ve geometri dersleri veriyorum. Bir devlet okulunda matematik öğretmeni olarak çalışıyorum. Matematik eğitimi üzerine yüksek lisans derslerimi tamamladım, fakat tez aşamasında bıraktım</p>
                        </div>


                    </div>
                </div>
                <div class="col-md-3 e3">
                    <div class="card text-center">
                        <div class="card-block">
                            <img src="<?=public_url('OzeldersTema/img/3.jpg')?>" class="img-fluid rounded-circle my-4">
                            <h3>Yılmaz Y.</h3>
                            <p>Ankara ve İstanbulda Çeşitli dershanelerde çalıştım. 2005 yılından beri aktif olarak i 9, 10, 11, 12 ve üniversiteye hazırlık kapsamında öğretmenlik mesleğimi gerçekleştiriyorum. Şuan  sınavla öğrenci alan bir Proje okulunda görev yapmaktayım.</p>
                        </div>


                    </div>
                </div>
                <div class="col-md-3 e4">
                    <div class="card text-center">
                        <div class="card-block">
                            <img src="<?=public_url('OzeldersTema/img/4.jpg')?>" class="img-fluid rounded-circle my-4">
                            <h3>Mert Y.</h3>
                            <p>Üniversitenin ilk yıllarından itibaren Matematik alanında birebir özel ders vermekteyim.2015 yılından itibaren de Milli Eğitim de Matematik öğretmeni olarak görev yapmaktayım. Müfredata ve yeni sınav sistemine iyi derecede hâkimim.Derslerimizi öğrencinin evi ,öğretmenin evinde işleyebiliriz</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
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

<script>

    window.sr = ScrollReveal();
    sr.reveal('.mainContent', { duration:2500 });
    window.sr = ScrollReveal();
    sr.reveal('.container', { duration:1500 });

    sr.reveal('.e1',{
        duration:1800,
        origin:'left',
        viewFactor:0.2
    });
    sr.reveal('.e2',{
        duration:1800,
        origin:'left',
        delay:400,
        viewFactor:0.2
    });
    sr.reveal('.e3',{
        duration:1800,
        origin:'left',
        delay:600,
        viewFactor:0.2
    });
    sr.reveal('.e4',{
        duration:1800,
        delay:800,
        origin:'left',
        viewFactor:0.2
    });

</script>
</html>