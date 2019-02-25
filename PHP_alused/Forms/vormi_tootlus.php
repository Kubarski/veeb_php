<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 25.02.2019
 * Time: 11:59
 */

extract ($_GET);

foreach ($_GET as $nimetus => $vaartus){
    echo $nimetus.'=>'.$vaartus.'<br>';
}
$sRuumala = (3.14 * $raadius * $raadius * $korgus);
echo 'Silindri ruumala on '.$sRuumala.'<br>';

$koRuumala = (3.14 * $raadius * $raadius * $korgus * 0.3);
echo 'Koonuse ruumala on '.$koRuumala.'<br>';

$keRuumala = (1.3 * 3.14 * $raadius * $raadius * $korgus);
echo 'Kera ruumala on '.$keRuumala.'<br>';

//foreach ($_GET as $nimetus => $vaartus){
//    if (strlen($_GET[$nimetus]) == 0 ){
//        header('Location: index.html');
//        exit;
//    };
