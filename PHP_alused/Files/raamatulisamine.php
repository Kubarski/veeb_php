<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 02.03.2019
 * Time: 11:50
 */

$andmed = file_get_contents('raamatud.txt');
$andmed .="\n\n".$_GET['nimi']."\n".$_GET['hind']."\n".$_GET['autor']."\n".$_GET['keel']."\n".$_GET['žanr'];
file_put_contents('raamatud.txt', $andmed);
echo  'Raamat lisatud!';
?>