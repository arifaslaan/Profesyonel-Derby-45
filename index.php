<!DOCTYPE html>
<html>

<head>
    <meta name="author" content="Arif ASLAN">
    <meta name="description" content="Profesyonel Derby 45 | Kolombodrum Yarışları">
    <meta name="keywords" content="kolombodrum, güvercin, yarış">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesyonel Derby 45 | Kolombodrum Yarışları</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div id="preloader">
        <div id="myloader">
            <p class="text-center text-muted animate-flicker">Yükleniyor<br><i class="icon ion-ios-cloud"></i><i class="icon ion-ios-cloud"></i><i class="icon ion-ios-cloud"></i></p>
        </div>
    </div>
    <div id="sidenavbox">
        <div class="align-self-end" id="sidenavclose"><a class="text-danger" onclick="closeNav()"><i class="icon ion-ios-close"></i></a></div>
        <div>
            <ul class="list-unstyled" id="sidenav">
              <li class="aktif"><a href="#">Anasayfa</a></li>
              <li><a href="katilimcilar.php">Katılımcılar</a></li>
              <li><a href="antrenmanlar.php">Antrenmanlar</a></li>
              <li><a href="yarislar.php">Yarışlar</a></li>
              <li><a href="iletisim.php">İletişim</a></li>
            </ul>
        </div>
    </div>
    <div id="mymain">
      <section id="backimg"></section>
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-md-3 d-flex justify-content-center">
                      <section id="logoimg" class="centered"></section>
                  </div>
                  <div class="col align-self-center">
                      <nav class="navbar navbar-light navbar-expand-lg float-right">
                          <div class="container"><button class="navbar-toggler" onclick="openNav()"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Anasayfa</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="katilimcilar.php">Katılımcılar</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="antrenmanlar.php">Antrenmanlar</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="yarislar.php">Yarışlar</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                                </ul>
                            </div>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
          </div>
      </div>
      <div class="container" id="myslider">
          <div class="carousel slide" data-ride="carousel" id="carousel-1">
              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/slider8.jpg" alt="Slide Image"></div>
                  <div class="carousel-item"><img class="w-100 d-block" src="assets/img/slider7.jpg" alt="Slide Image"></div>
                  <div class="carousel-item"><img class="w-100 d-block" src="assets/img/slider5.jpg" alt="Slide Image"></div>
                  <div class="carousel-item"><img class="w-100 d-block" src="assets/img/slider4.jpg" alt="Slide Image"></div>
                  <div class="carousel-item"><img class="w-100 d-block" src="assets/img/slider3.jpg" alt="Slide Image"></div>
              </div>
              <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                      data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
              <ol class="carousel-indicators">
                  <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-1" data-slide-to="1"></li>
                  <li data-target="#carousel-1" data-slide-to="2"></li>
                  <li data-target="#carousel-1" data-slide-to="3"></li>
                  <li data-target="#carousel-1" data-slide-to="4"></li>
              </ol>
          </div>
      </div>
      <div>
          <div class="container" id="icerik">
              <div class="row no-gutters" id="backrow">
                  <div class="col-md-4 backcol">
                      <h2 class="text-center"><i class="icon ion-speedometer"></i><br>Hızlı</h2>
                      <p class="text-center">Kolombodrum yarışlarını teknolojiyle entegre bir hale getirerek her türlü bilgiye en hızlı şekilde ulaşmanızı sağlıyoruz.<br></p>
                  </div>
                  <div class="col-md-4 col-xl-4 backcol backcol2">
                      <h2 class="text-center"><i class="icon ion-android-checkmark-circle"></i><br>Güvenilir</h2>
                      <p class="text-center">Kuşlarınız ve bilgilerinizi en iyi şekilde korumaya çalışıyoruz. Şeffaf ve net hizmetimizle herşey kontrol altında!<br></p>
                  </div>
                  <div class="col-md-4 backcol">
                      <h2 class="text-center"><i class="icon ion-ios-infinite"></i><br>Tecrübeli</h2>
                      <p class="text-center">Yıllardır süren tecrübemizle kuşlarınızı eğitiyor onların bakımlarını bilinçli bir şekilde gerçekleştiriyoruz.<br></p>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-basic" style="color:#264554;">
          <footer>
              <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/Profesyonel-Derby-45-250442608721952"><i class="icon ion-social-facebook"></i></a></div>
              <ul class="list-inline">
                  <li class="list-inline-item"><a href="#">Anasayfa</a></li>
                  <li class="list-inline-item"><a href="katilimcilar.php">Katılımcılar</a></li>
                  <li class="list-inline-item"><a href="antrenmanlar.php">Antrenmanlar</a></li>
                  <li class="list-inline-item"><a href="yarislar.php">Yarışlar</a></li>
                  <li class="list-inline-item"><a href="iletisim.php">İletişim</a></li>
              </ul>
              <p class="copyright" style="color:#264554;">PD45 © 2018</p>
          </footer>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/sidenav.js"></script>
    <script src="assets/js/loader.js"></script>
</body>

</html>
