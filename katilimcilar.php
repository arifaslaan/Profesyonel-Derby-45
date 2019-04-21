<?php
	include("assets/engine/kayitlarsorting.php");
	function tr_strtoupper($text)
  {
      $search=array("ç","i","ı","ğ","ö","ş","ü");
      $replace=array("Ç","İ","I","Ğ","Ö","Ş","Ü");
      $text=str_replace($search,$replace,$text);
      $text=strtoupper($text);
      return $text;
  }
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
              <li class="aktif"><a href="#">Katılımcılar</a></li>
              <li><a href="antrenmanlar.php">Antrenmanlar</a></li>
              <li><a href="yarislar.php">Yarışlar</a></li>
              <li><a href="iletisim.php">İletişim</a></li>
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
                                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Katılımcılar</a></li>
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
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
          </div>
      </div>
      <div id="mydiv">
          <div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <h1>Katılımcılar</h1><a href="#" class="text-muted float-left" data-toggle="modal" data-target="#mymodal">▶Kurallarımızı okumak için lütfen tıklayınız.</a><a href="#" class="text-info float-right" data-toggle="modal" data-target="#mymodal2">▶ Ödüller ve güzergah bilgisi için tıklayınız.</a></div>
                  </div>
                  <p class="text-light bg-info">Sayfada arama yapmak için tarayıcınızın CTRL+F fonsiyonunu kullanabilirsiniz.</p>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="table-responsive-md">
                              <table class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>Sıra No</th>
                                          <th>Ad</th>
                                          <th>Soyad</th>
                                          <th>Künye No</th>
                                          <th>Şehir</th>
                                          <th>Ülke</th>
                                          <th>Durum</th>
                                      </tr>
                                  </thead>
                                  <tbody>
																		<?php
																			while($row=mysqli_fetch_assoc($sql)){
																		?>
																		<tr>
																				<td>
																				<?php
																					echo $row["num"];
																				?>
																			</td>
																			<td>
																				<?php
																					echo tr_strtoupper($row["ad"]);
																				?>
																			</td>
																			<td>
																				<?php
																					echo tr_strtoupper($row["soyad"]);
																				?>
																			</td>
																			<td>
																				<?php
																					echo $row['kunyeno'];
																				?>
																			</td>
																			<td>
																				<?php
																					echo $row["sehir"];
																				?>
																			</td>
																			<td>
																				<?php
																					echo $row["ulke"];
																				?>
																			</td>
																			<td>
																				<?php
																					echo $row['durum'];
																				?>
																			</td>
																		</tr>
																		<?php
																			}
																		?>
                                  </tbody>
                              </table>
                          </div>
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
                          <li class="list-inline-item"><a href="#">Katılımcılar</a></li>
                          <li class="list-inline-item"><a href="antrenmanlar.php">Antrenmanlar</a></li>
                          <li class="list-inline-item"><a href="yarislar.php">Yarışlar</a></li>
                          <li class="list-inline-item"><a href="iletisim.php">İletişim</a></li>
                      </ul>
                      <p class="copyright" style="color:#264554;">PD45 © 2018</p>
                  </footer>
              </div>
          </div>
      </div>
      <div class="modal fade" role="dialog" tabindex="-1" id="mymodal2">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Ödüller ve Güzergahlar</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                  <div class="modal-body"><img class="img-thumbnail" src="assets/img/brosur2.jpg"></div>
                  <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Kapat</button></div>
              </div>
          </div>
      </div>
      <div class="modal fade" role="dialog" tabindex="-1" id="mymodal">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Kurallarımız</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                  <div class="modal-body">
                      <div class="container">
                          <h4>1. Kural</h4>
                          <p>Organizasyona gönderilecek kuşlar kesinikle TGF veya yabancı ülkelerin Federasyon künyesini taşımalıdır.<br></p>
                          <hr>
                      </div>
                      <div class="container">
                          <h4>2. Kural</h4>
                          <p>Profesyonel Derby 45 kuş alım tarihleri 15 Şubat 30 Nisan arasıdır.<br></p>
                          <hr>
                      </div>
                      <div class="container">
                          <h4>3. Kural</h4>
                          <p>Organizasyona katılacak kuşlar 21 ile 45 günlük yavru olmalıdır.<br></p>
                          <hr>
                      </div>
                      <div class="container">
                          <h4>4. Kural</h4>
                          <p>Hasta ve fizik yetersizliği olan kuşlar kesinlikle kabul edilmez.<br></p>
                          <hr>
                      </div>
                      <div class="container">
                          <h4>5. Kural</h4>
                          <p>İlk antrenmana kadar kümes üstünde kaybolan kuşlar tespit edilerek yerine en kısa sürede ücretsiz kuş verilmesi sağlanacaktır.<br></p>
                          <hr>
                      </div>
                      <div class="container">
                          <h4>6. Kural</h4>
                          <p>Klasman hesaplaması giden kuşların %30'u olarak hesaplanacaktır.<br></p>
                          <hr>
                      </div>
                      <div class="container">
                          <h4>7. Kural</h4>
                          <p>Organizasyon sonucu ihaleye çıkan kuşların satış masrafları düşülür. Kalan ücretin %50’si kuş sahibine %50’si organizasyona verilir. Açık arttırma sonrası satılmayan kuşlar, kuş sahibine 100 TL karşılığı sunulacaktır. Kuşu almamak
                              kuş sahibinin tercihidir. Pedigresi gönderilmeyen kuşların satış bedelinin %10‘u kuş sahibinin payından düşülür.<br></p>
                          <hr>
                      </div>
                      <div class="container">
                          <h4>8. Kural</h4>
                          <p>Kuş bakım ücreti kuş tesliminden sonra en fazla 20 gün içerisinde ödenmek zorundadır. Kuş bakım ücretini ödemeyen katılımcının kuşu antrenman ve yarışa kesinlikle gönderilmez ve kuş direk olarak organizasyona kalır.<br><br><strong>NOT: Parası ödenmeyen kuşları organizasyon sahibi istediği taktirde parasını ödeyen kişi üzerine aktif edebilir. Kuş sahibi herhangi bir hak talep edemez!</strong><br></p>
                          <hr>
                      </div>
                  </div>
                  <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Kapat</button></div>
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
