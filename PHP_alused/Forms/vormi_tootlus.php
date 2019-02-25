<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 25.02.2019
 * Time: 11:59
 */
foreach ($_GET as $nimetus => $vaartus){
    if ($_GET[$nimetus] == 0){
        header('Location: index.html');
    }

}
extract($_GET);

/*$nimi = $_GET['nimi'];
$parool = $_GET['parool']*/
    echo 'Tere ' . $nimi . '!<br>';
    echo 'Sinu parooliks on ' . $parool;
