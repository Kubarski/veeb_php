<?php
require_once 'db_conf.php';

function dbconnect($h, $u, $p, $db){
    $connect = mysqli_connect($h, $u, $p, $db);
    if($connect == false){
        echo 'Probleem andmebaasi ühendamisega<br>';
        exit;
    }
    return $connect;
}

function query ($conn, $sql){
    $result = mysqli_query($conn, $sql);
    if ($result == false){
        echo 'Probleem päringuga: <b>'.$sql.'</b><br>';
        echo mysqli_error($conn).'<br>';
        echo mysqli_errno($conn).'<br>';
    }
    return $result;
}
$connectIKT = dbconnect(HOST, USER, PASS, DB );
$sql = 'SELECT NOW()';
$sqlResult = query($connectIKT, $sql);
