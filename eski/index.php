<?php
	include("engine/cachestart.php");
?>
<?php
	include("engine/naturalurunler.php");
  include("engine/benzingurunler.php");
  include("engine/mainslider.php");
?>
<html>
  <head>
    <meta name="author" content="Arif ASLAN">
    <meta name="description" content="Profesyonel Derby 45 | Kolombodrum Yarışları">
    <meta name="keywords" content="kolombodrum, güvercin, yarış">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profesyonel Derby 45 | Kolombodrum Yarışları</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
		<div id="preloader">
    	<div id="status">&nbsp;</div>
		</div>
		<div class="betabox">
			<a> Sitemiz Beta/Test aşamasındadır. Karşılaştığınız hataları ve önerilerinizi "info@profesyonelderby45.com" e-posta adresine gönderebilirsiniz.</a><p></p>
			<p> Antremandan gelen kuşların listesi için <a href="5km_gelen1.html" target="_blank" >tıklayınız!</a>
			<br></p>
			<p>Antremana giden kuşların listesi için <a href="5km_giden1.html" target="_blank" >tıklayınız!</a> </p>
			<p>2. Antremana giden kuşların listesi için <a href="5km_giden2.html" target="_blank" >tıklayınız!</a> </p>
			<p>2. Antremana gelen kuşların listesi için <a href="5km_gelen2.html" target="_blank" >tıklayınız!</a> </p>
		</div>
		<div id="mysidenav" class="sidenav">
  	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="#" class="aktif">ANASAYFA</a>
			<a href="#">YARIŞLAR</a>
			<a href="katilimcilar.php">KATILIMCILAR</a>
			<a href="antremanlar.php">ANTREMANLAR</a>
			<a href="#">İLETİŞİM</a>
  	</div>
    <div class="container">
      <div class="myheaderbox borderrad-bot-10">
        <div class="row width100 marginauto">
          <div class="col col-lg-2 myflag">
            <div class="myflagbox"></div>
          </div>
          <div class="col width100">
            <div class="mylogobox"></div>
          </div>
          <div class="col col-lg-2 myflag">
            <div class="myflagbox2"></div>
          </div>
        </div>
      </div>
      <div class="container margin-top-2">
        <div class="row">
          <div class="mymenubox">
						<div class="mymenu">
							<a href="#" class="aktif">ANASAYFA</a>
	            <a href="#">YARIŞLAR</a>
	            <a href="katilimcilar.php">KATILIMCILAR</a>
	            <a href="antremanlar.php">ANTREMANLAR</a>
	            <a href="#">İLETİŞİM</a>
						</div>
						<div class="mymobilmenu">
							<div class="mobilmenutext"><a href="javascript:void(0)" onclick="openNav()">MENU</a></div>
						</div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner borderrad-bot-10">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
              </div>
              <?php
                while($mainsliderrow=mysqli_fetch_assoc($mainslidersql)){
              ?>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo $mainsliderrow['pic'] ?>" alt="Second slide">
              </div>
              <?php
                }
              ?>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container margin-top-20">
        <div class="row contentboxstyle">
          <div class="col">
            <div class="mytextbox colorblue">
              <h3>ORTAK YARIŞ ORGANİZASYONU!</h3>
              <p>
                21 ile 45 günlük yavrularınızı
                bize yollayın sizin için bakımlarını ve
                antremanlarını yaptıralım!
              </p>
            </div>
          </div>
          <div class="col">
            <div class="mytextbox colorpurple">
              <h3>TÜRKİYE ŞAMPİYONUNU ARIYOR!</h3>
              <p>
                Kolombodrum yarışları ile Türkiye şampiyonunu arıyor!
                Sende katıl, sende kazan!
              </p>
            </div>
          </div>
          <div class="col">
            <div class="mytextbox colorred">
              <h3>SİZİN İÇİN EN İYİLERLE ÇALIŞIYORUZ!</h3>
              <p>
                Kuşlarınız bizim için çok değerli, bu yüzden
                onlar için en iyisini seçip en uygun şekilde kullanıyoruz!
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container margin-top-20">
        <div class="row contentboxstyle">
          <div class="row contentboxtext">
            <h4>Yarış Güzergahımız</h4>
          </div>
          <div class="row width100 marginauto">
            <div class="col">
              <div class="mymapbox"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container margin-top-20">
        <div class="row contentboxstyle">
          <div class="row contentboxtext">
            <h4>Etaplar ve Ödüllerimiz</h4>
          </div>
          <div class="row marginauto">
            <div class="col">
              <div class="mypricebox colorpurple">
                <div class="mypricetopbox colorpurple2">
                  <h5>1. Etap Kula -100KM-</h5>
                </div>
                <div class="mypricebottombox">
                  <p>Etap 1.'sine 1500 TL</p>
                  <p>Etap 2.'sine 1000 TL</p>
                  <p>Etap 3.'süne 750 TL</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mypricebox colorgreen">
                <div class="mypricetopbox colorgreen2">
                  <h5>2. Etap Uşak -161KM-</h5>
                </div>
                <div class="mypricebottombox">
                  <p>Etap 1.'sine 2000 TL</p>
                  <p>Etap 2.'sine 1500 TL</p>
                  <p>Etap 3.'süne 1000 TL</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mypricebox colorred">
                <div class="mypricetopbox colorred2">
                  <h5>3. Etap Çiftlik -220KM-</h5>
                </div>
                <div class="mypricebottombox">
                  <p>Etap 1.'sine 2500 TL</p>
                  <p>Etap 2.'sine 2000 TL</p>
                  <p>Etap 3.'süne 1500 TL</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mypricebox colorblue">
                <div class="mypricetopbox colorblue2">
                  <h5>4. Etap Afyon -280KM-</h5>
                </div>
                <div class="mypricebottombox">
                  <p>Etap 1.'sine 3000 TL</p>
                  <p>Etap 2.'sine 2500 TL</p>
                  <p>Etap 3.'süne 2000 TL</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row width100 marginauto">
            <div class="col">
              <div class="myfinalpricebox colorcream">
                <div class="myfinalpricetopbox colorcream2">
                  <h5>5. Etap Final Konya -450KM-</h5>
                </div>
                <div class="row marginauto margintop40">
                  <div class="col borderright textcenter">
                    <b>
                      <h5>Etap 1.'sine <a>20000</a> TL</h5>
                      <h5>Etap 2.'sine 8000 TL</h5>
                      <h5>Etap 3.'süne 4000 TL</h5>
                    </b>
                  </div>
                  <div class="col borderright textcenter">
                    <b>
                      <h5>Etap 4.'süne 3000 TL</h5>
                      <h5>Etap 5.'sine 2000 TL</h5>
                      <h5>Etap 6.'sına 1500 TL</h5>
                    </b>
                  </div>
                  <div class="col textcenter">
                    <b>
                      <h5>
                        Not: Final etabı 7.'den 30.'ya kadar,
                        <i>"1000 kuş ve üzerinde"</i>, 7.'den 50.'ye kadar
                        500 TL ödül verilecektir!
                      </h5>
                    </b>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container margin-top-20">
        <div class="row contentboxstyle">
          <div class="row contentboxtext">
            <h4>Kurallarımız</h4>
          </div>
          <div class="row marginauto">
            <div class="col">
							<div class="mypricebox coloryellow">
								<div class="mypricetopbox coloryellow2">
                  <h5>1. Kural</h5>
                </div>
                <div class="mypricebottombox2">
									<p>
										Organizasyona gönderilecek kuşlar
										kesinikle TGF veya yabancı ülkelerin
										Federasyon künyesini taşımalıdır.
									</p>
                </div>
              </div>
            </div>
            <div class="col">
							<div class="mypricebox coloryellow">
                <div class="mypricetopbox coloryellow2">
                  <h5>2. Kural</h5>
                </div>
                <div class="mypricebottombox2">
									<p>
										Profesyonel Derby 45 kuş alım
										tarihleri 15 Şubat 30 Nisan arasıdır.
									</p>
                </div>
              </div>
            </div>
            <div class="col">
							<div class="mypricebox coloryellow">
                <div class="mypricetopbox coloryellow2">
                  <h5>3. Kural</h5>
                </div>
                <div class="mypricebottombox2">
                  <p>
										Organizasyona katılacak kuşlar 21 ile
										45 günlük yavru olmalıdır.
									</p>
                </div>
              </div>
            </div>
          </div>
					<div class="row marginauto">
            <div class="col">
							<div class="mypricebox coloryellow">
                <div class="mypricetopbox coloryellow2">
                  <h5>4. Kural</h5>
                </div>
                <div class="mypricebottombox2">
									<p>
										Hasta ve fizik yetersizliği olan kuşlar kesinlikle kabul edilmez.
									</p>
                </div>
              </div>
            </div>
            <div class="col">
							<div class="mypricebox coloryellow">
                <div class="mypricetopbox coloryellow2">
                  <h5>5. Kural</h5>
                </div>
                <div class="mypricebottombox2">
									<p>
										İlk antremana kadar kümes üstünde kaybolan kuşlar
										tespit edilerek yerine en kısa sürede ücretsiz
										kuş verilmesi sağlanacaktır.
									</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mypricebox coloryellow">
                <div class="mypricetopbox coloryellow2">
                  <h5>6. Kural</h5>
                </div>
                <div class="mypricebottombox2">
                  <p>
										Klasman hesaplaması giden kuşların %30'u olarak hesaplanacaktır.
									</p>
                </div>
              </div>
            </div>
          </div>
					<div class="row marginauto">
            <div class="col">
							<div class="mypricebox coloryellow">
                <div class="mypricetopbox coloryellow2">
                  <h5>7. Kural</h5>
                </div>
                <div class="mypricebottombox2">
									<p>
										Organizasyon sonucu ihaleye çıkan kuşların satış masrafları
										düşülür. Kalan ücretin %50’si kuş sahibine %50’si organizasyona
										verilir. Açık arttırma sonrası satılmayan kuşlar, kuş sahibine
										100 TL karşılığı sunulacaktır. Kuşu almamak kuş sahibinin tercihidir.
										Pedigresi gönderilmeyen kuşların satış bedelinin %10‘u
										kuş sahibinin payından düşülür.
									</p>
                </div>
              </div>
            </div>
          </div>
					<div class="row marginauto">
            <div class="col">
							<div class="mypricebox coloryellow">
                <div class="mypricetopbox coloryellow2">
                  <h5>8. Kural</h5>
                </div>
                <div class="mypricebottombox2">
									<p>
										Kuş bakım ücreti kuş tesliminden sonra en fazla
						        20 gün içerisinde ödenmek zorundadır. Kuş
						        bakım ücretini ödemeyen katılımcının kuşu antreman
						        ve yarışa kesinlikle gönderilmez ve kuş direk olarak
						        organizasyona kalır.
									</p>
									<p>
										NOT: Parası ödenmeyen kuşları
						        organizasyon sahibi istediği taktirde parasını ödeyen
						        kişi üzerine aktif edebilir. Kuş sahibi
						        herhangi bir hak talep edemez!
									</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container margin-top-20">
        <div class="row contentboxstyle">
          <div class="row contentboxtext">
            <h4>Tavsiye Ettiğimiz ve Kullandığımız Natural Ürünleri</h4>
          </div>
          <div class="row marginauto width100">
            <div class="col width100">
              <div class="mynaturalcontent">
                <div class="mynaturalslider">
                  <?php
    								while($naturalrow=mysqli_fetch_assoc($naturalsql)){
    							?>
                  <div class="naturalitems">
                    <div class="card" style="width: 100%; height:100%;">
                      <img class="card-img-top" src="<?php echo $naturalrow['pic'];?>">
                      <div class="card-block text-center">
                        <h5 class="card-title"><?php echo $naturalrow['name'];?></h5>
                        <a href="<?php echo $naturalrow['link'];?>" target="_blank" class="card-link">Detaylı İncele</a>
                      </div>
                    </div>
                  </div>
                  <?php
                    }
    							?>
                </div>
                <div class="naturalcontrollers">
                  <button type="button" class="btn btn-secondary naturalprev"><span class="oi oi-chevron-left"></span></button>
                  <button type="button" class="btn btn-secondary naturalnext"><span class="oi oi-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container margin-top-20">
        <div class="row contentboxstyle">
          <div class="row contentboxtext">
            <h4>Tavsiye Ettiğimiz ve Kullandığımız Benzing Ürünleri</h4>
          </div>
          <div class="row marginauto width100">
            <div class="col width100">
              <div class="mybenzingcontent">
                <div class="mybenzingslider">
                  <?php
    								while($benzingrow=mysqli_fetch_assoc($benzingsql)){
    							?>
                  <div class="benzingitems">
                    <div class="card" style="width: 100%; height:100%;">
                      <img class="card-img-top" src="<?php echo $benzingrow['pic'];?>">
                      <div class="card-block text-center">
                        <h5 class="card-title"><?php echo $benzingrow['name'];?></h5>
                        <a href="<?php echo $benzingrow['link'];?>" target="_blank" class="card-link">Detaylı İncele</a>
                      </div>
                    </div>
                  </div>
                  <?php
                    }
    							?>
                </div>
                <div class="benzingcontrollers">
                  <button type="button" class="btn btn-secondary benzingprev"><span class="oi oi-chevron-left"></span></button>
                  <button type="button" class="btn btn-secondary benzingnext"><span class="oi oi-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
			<div class="myfooterbox borderradtop10 margin-top-20">
	      <div class="row width100 marginauto">
					<div class="col col-lg-2 myflag">
						<div class="myflagbox"></div>
					</div>
					<div class="col margin-top-20">
						<div class="row marginauto width100 textcenter">
							<h2><b>Profesyonel Derby 45</b></h2>
						</div>
						<div class="row marginauto width100 textcenter">
							<p>Tüm hakları saklıdır.</p>
						</div>
					</div>
					<div class="col col-lg-2 myflag">
						<div class="myflagbox2"></div>
					</div>
	      </div>
    	</div>
  </body>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.mynaturalslider').slick({
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: ".mynaturalcontent .naturalprev",
        nextArrow: ".mynaturalcontent .naturalnext",
        responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 475,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
      });
      $('.mybenzingslider').slick({
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: ".mybenzingcontent .benzingprev",
        nextArrow: ".mybenzingcontent .benzingnext",
        responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
      });
    });
  </script>
	<script>
		function openNav() {
			document.getElementById("mysidenav").style.width = "40%";
			document.body.style.marginLeft = "50%";
		}

		function closeNav() {
			document.getElementById("mysidenav").style.width = "0";
			document.body.style.marginLeft = "0";
		}
	</script>
	<script type="text/javascript">
    $(window).load(function() {
	    $('#status').fadeOut();
	    $('#preloader').delay(350).fadeOut('slow');
    })
	</script>
	<script type="text/javascript">
    $(function(){
			$.footerheight = function() {
				var width = $(window).width();
				if(width<405){
					$(".myfooterbox").css({
						"height" : "140px"
					});
				}
				else{
					$(".myfooterbox").css({
						"height" : "120px"
					});
				}
			}
			$.footerheight();
			$(window).bind("resize", function(){
				$.footerheight();
			});
		});
	</script>
</html>
<?php
	include("engine/cachestop.php");
?>