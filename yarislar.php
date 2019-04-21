<?php
	include("assets/engine/yaris.php");
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
              <li><a href="katilimcilar.php">Katılımcılar</a></li>
              <li><a href="antrenmanlar.php">Antrenmanlar</a></li>
              <li class="aktif"><a href="#">Yarışlar</a></li>
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
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="katilimcilar.php">Katılımcılar</a></li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="antrenmanlar.php">Antrenmanlar</a></li>
                                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Yarışlar</a></li>
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
                          <h1>Yarışlar</h1>
                          <a href="#" class="text-info" data-toggle="modal" data-target="#yarmodal">▶Yarış tarihlerini öğrenmek için tıklayınız.</a>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="table-responsive-md">
                              <table class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>Sıra No</th>
                                          <th>Yarış Tarihi</th>
                                          <th>Yarış Adı</th>
                                          <th>Sonuçlar</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                            if(mysqli_num_rows($sql)){
                                        ?>
                                        
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
																						echo $row["tarih"];
																					?>
																				</td>
																				<td>
																					<?php
																						echo tr_strtoupper($row["ad"]);
																					?>
																				</td>
                                        <td>
																					<a href="#" class="text-muted float-left" data-toggle="modal" data-target="#mymodal<?php echo $row['id']; ?>">Sonuçları görmek için tıklayınız.<br /></a>
																					<?php
																					    include 'modals/yarmodal.php';
																					?>
																				</td>
  																		</tr>
  																		<?php
  																			}
  																		?>
  										<?php
                                            }
                                        ?>
                                        <?php
                                            if(!mysqli_num_rows($sql)) {
                                        ?>
                                            <p class="text-light bg-info text-center">Henüz yapılmış yarış bulunmamaktadır.</p>
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
                          <li class="list-inline-item"><a href="katilimcilar.php">Katılımcılar</a></li>
                          <li class="list-inline-item"><a href="antrenmanlar.php">Antrenmanlar</a></li>
                          <li class="list-inline-item"><a href="#">Yarışlar</a></li>
                          <li class="list-inline-item"><a href="iletisim.php">İletişim</a></li>
                      </ul>
                      <p class="copyright" style="color:#264554;">PD45 © 2018</p>
                  </footer>
              </div>
          </div>
      </div>
      <div class="modal fade" role="dialog" tabindex="-1" id="yarmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Yarış Tarihleri</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body"><p class="lead text-center">29 Temmuz<br/>1. Etap KULA 100 KM</p>
                    <hr><p class="lead text-center">5 Ağustos<br/>2. Etap Uşak 161 KM</p>
                    <hr><p class="lead text-center">12 Ağustos<br/>3. Etap Çiftlik 220 KM</p>
                    <hr><p class="lead text-center">19 Ağustos<br/>4. Etap Afyon Yarı Final 300 KM</p>
                    <hr><p class="lead text-center">26 Ağustos<br/>5. Etap Konya Final 450 KM</p></div>
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
