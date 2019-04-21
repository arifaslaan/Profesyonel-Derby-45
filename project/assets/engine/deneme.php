<?php
    include("connection.php");
    $stt = $_GET['stt'];
    $carduid = $_GET['carduid'];
    if($stt=="onbus" || $stt=="onclass" || $stt=="onschool" || $stt=="oncafeteria"){
        $sql = "SELECT count FROM `status` WHERE carduid='$carduid' AND statu='$stt' ORDER BY id DESC";
        $sql = mysqli_query($link, $sql);
        $sql = mysqli_fetch_assoc($sql);
        $count = $sql['count'];
        if($count == 0 || $count == -1){
            $sql = "INSERT INTO `status` (`id`, `statu`, `carduid`, `time`, `count`) VALUES (NULL, '$stt', '$carduid', CURRENT_TIMESTAMP, 1);";
            $sql = mysqli_query($link, $sql);
            if($sql){
                echo "tamam";
            }
        }
        if($count == 1 || $count == -1){
            $sql = "INSERT INTO `status` (`id`, `statu`, `carduid`, `time`, `count`) VALUES (NULL, '$stt', '$carduid', CURRENT_TIMESTAMP, 0);";
            $sql = mysqli_query($link, $sql);
            if($sql){
                echo "tamam";
            }
        }
    }
    else{
        $sql = "INSERT INTO `status` (`id`, `statu`, `carduid`, `time`) VALUES (NULL, '$stt', '$carduid', CURRENT_TIMESTAMP);";
        $sql = mysqli_query($link, $sql);
        if($sql){
            echo "tamam";
        }
    }
?>