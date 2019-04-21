<?php
    include("connection.php");
    setlocale(LC_TIME, 'tr_TR');
    $sql = "SELECT statu, unix_timestamp(time) FROM `status` WHERE carduid=123457 ORDER BY id DESC";
    $sql = mysqli_query($link, $sql);
    $sql = mysqli_fetch_assoc($sql);
    $stt = $sql['statu'];
    if($stt = "sirada"){
        $nowtime = time();
        $sqltime = $sql['unix_timestamp(time)'];
        $echotime = $nowtime - $sqltime;
        $echotime = round($echotime / 60);
        echo $echotime.' dakikadır sırasında!';
    }
    
    
    
    /*$sql = "SELECT unix_timestamp(time) FROM `status` WHERE carduid=123457 AND statu='sirada' ORDER BY id DESC";
    $sql2 = "SELECT unix_timestamp(time) FROM `status` WHERE carduid=123457 AND statu='siradadegil' ORDER BY id DESC";
    $sql = mysqli_query($link, $sql);
    $sql2 = mysqli_query($link, $sql2);
    $sql = mysqli_fetch_assoc($sql);
    $sql2 = mysqli_fetch_assoc($sql2);
    $time1 = $sql['unix_timestamp(time)'];
    $time2 = $sql2['unix_timestamp(time)'];
    $time3 = $time2 - $time1;
    $time3 = round($time3 / 60);
    echo $time3.' dakika';*/
?>