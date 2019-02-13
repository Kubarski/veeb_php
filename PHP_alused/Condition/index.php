<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 13.02.2019
 * Time: 14:14
 */
//genereerime juhusliku arvu
$arv = rand(0,100);
//arvutame jääk kahega jagamisel
$jaak = $arv % 2;
//kontrollime kui jääk on 0 - paaris arv
if($jaak == 0) {
    echo 'paaris';
} else {
    echo 'paaritu';
}
?>