<?php
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = false; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->do_debug = 0;
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = "mail.profesyonelderby45.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "info@profesyonelderby45.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "*qqqaaa*"; // Mail adresimizin sifresi
$mail->SetFrom("info@profesyonelderby45.com", "Müşteri İletişim"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress("info@profesyonelderby45.com"); // Mailin gönderileceği alıcı adres
$mail->Subject = "Müşteri İletişim"; // Email konu başlığı
$mail->Body =  "Gönderen Adı: ".$_POST["ad"]."<br>";
$mail->Body .=  "Gönderen Soyadı: ".$_POST["soyad"]."<br>";
$mail->Body .=  "E-Posta: ".$_POST["eposta"]."<br>";
$mail->Body .=  "Mesaj: ".$_POST["mesaj"]."<br>";
if(!$mail->Send()){
	header("Location:../../iletisim.php?sor=false");
} else {
	header("Location:../../iletisim.php?sor=true");
}
?>