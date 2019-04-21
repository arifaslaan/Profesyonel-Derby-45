<?php
	$sor = @$_GET["sor"];
?>
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
              <li><a href="index.php">Anasayfa</a></li>
              <li><a href="katilimcilar.php">Katılımcılar</a></li>
              <li><a href="antrenmanlar.php">Antrenmanlar</a></li>
              <li><a href="yarislar.php">Yarışlar</a></li>
              <li class="aktif"><a href="#">İletişim</a></li>
            </ul>
        </div>
    </div>
    <div id="mymain">
      <div id="otherbackimg">
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
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Anasayfa</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="katilimcilar.php">Katılımcılar</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="antrenmanlar.php">Antrenmanlar</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="yarislar.php">Yarışlar</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">İletişim</a></li>
                                </ul>
                            </div>
                        </div>
                      </nav>
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
          </div>
      </div>
      <div id="mydiv">
          <div style="margin-bottom: 10px">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <h1>İletişim</h1>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <form method="POST" action="assets/engine/mailsend.php" enctype="multipart/form-data" name="ilt-ekle">
                              <div class="input-group input-group-lg"><input class="form-control" type="text" required="" placeholder="Ad" autofocus="" name="ad"></div>
                              <div class="input-group input-group-lg"><input class="form-control" type="text" required="" placeholder="Soyad" name="soyad"></div>
                              <div class="input-group input-group-lg"><input class="form-control" type="text" required="" placeholder="E-Posta" name="eposta"></div>
                              <div class="input-group input-group-lg"><textarea class="form-control form-control-lg" required="" placeholder="Mesajınız" maxlength="450" name="mesaj"></textarea></div>
                              <button class="btn btn-success btn-block btn-lg" type="submit">Gönder</button>
                          </form>
                          <?php
                            	if($sor=='true'){
                          ?>
                                <p class="text-center text-success"><strong>Mesajınızı aldık. Teşekkür ederiz :)</strong></p>
                          <?php
                            	}
                          ?>
                          <?php
                            	if($sor=='false'){
                          ?>
                                <p class="text-center text-warning"><strong>Mesajınızı alamadık:( Ama bize mail atabilirsiniz.</strong></p>
                                <p class="text-center text-warning"><strong>info@profesyonelderby45.com</strong></p>
                          <?php
                            	}
                          ?>
                      </div>
                      <div class="col-md-6 d-flex flex-column justify-content-center">
                          <p class="text-right text-muted"><strong><em>Profesyonel Derby 45 Ekibi</em></strong><em>&nbsp;olarak, amacımız siz spor severlere daima en iyi hizmeti sunmak olmuştur. Teknolojiyi ve kolombodrum yarışlarındaki tecrübemizi kullanarak size en güzel deneyimleri ve kazançları sağlamak için buradayız. Aklınıza takılan her şey için bize ulaşabilirsiniz.</em><br>İyi
                              günler dileriz...<br>❤<br></p>
                          <p class="text-center text-muted"><strong>Telefon Numaralarımız</strong></p>
                          <p class="text-center text-muted" style="font-size:24px;">0533 774 1541 - 0535 442 9019 - 0535 277 2966</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="footer-basic">
                  <footer>
                      <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/Profesyonel-Derby-45-250442608721952"><i class="icon ion-social-facebook"></i></a></div>
                      <ul class="list-inline">
                          <li class="list-inline-item"><a href="index.php">Anasayfa</a></li>
                          <li class="list-inline-item"><a href="katilimcilar.php">Katılımcılar</a></li>
                          <li class="list-inline-item"><a href="#">Antrenmanlar</a></li>
                          <li class="list-inline-item"><a href="yarislar.php">Yarışlar</a></li>
                          <li class="list-inline-item"><a href="iletisim.php">İletişim</a></li>
                      </ul>
                      <p class="copyright" style="color:#264554;">PD45 © 2018</p>
                  </footer>
              </div>
          </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/sidenav.js"></script>
<script src="assets/js/loader.js"></script>
</body>

</html>
