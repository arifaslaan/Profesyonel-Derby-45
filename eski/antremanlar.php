<?php
	include("engine/cachestart.php");
?>
<?php
	include("engine/kayitlarsorting.php");
	include("".$mycache."");
	function tr_strtoupper($text)
    {
        $search=array("ç","i","ı","ğ","ö","ş","ü");
        $replace=array("Ç","İ","I","Ğ","Ö","Ş","Ü");
        $text=str_replace($search,$replace,$text);
        $text=strtoupper($text);
        return $text;
    }
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
			<a> Sitemiz Beta/Test aşamasındadır. Karşılaştığınız hataları ve önerilerinizi "info@profesyonelderby45.com" e-posta adresine gönderebilirsiniz.</a>
		</div>
		<div id="mysidenav" class="sidenav">
  	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="index.php">ANASAYFA</a>
			<a href="#">YARIŞLAR</a>
			<a href="katilimcilar.php" >KATILIMCILAR</a>
			<a href="antremanlar.php" class="aktif">ANTREMANLAR</a>
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
          <div class="mymenubox borderrad">
						<div class="mymenu">
							<a href="index.php">ANASAYFA</a>
	            <a href="#">YARIŞLAR</a>
	            <a href="katilimcilar.php">KATILIMCILAR</a>
	            <a href="antremanlar.php" class="aktif">ANTREMANLAR</a>
	            <a href="#">İLETİŞİM</a>
						</div>
						<div class="mymobilmenu">
							<div class="mobilmenutext"><a href="javascript:void(0)" onclick="openNav()">MENU</a></div>
						</div>
            </div>
        </div>
    </div>
</div>
            <div class="container margin-top-20">
                
        <div class="row contentboxstyle">
            
           <div class="row marginauto width100" style="min-height: 600px;">
              
            <div class="col width100">
              
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
  <script type="text/javascript">
    $(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });
    $('.filterable .filters input').keyup(function(e){
        var code = e.keyCode || e.which;
        if (code == '9') return;
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        $table.find('tbody .no-result').remove();
        $rows.show();
        $filteredRows.hide();
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">Kayıt Bulunamadı.</td></tr>'));
        }
    });
    });
  </script>
</html>
<?php
	include("engine/cachestop.php");
?>