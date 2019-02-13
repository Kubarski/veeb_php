<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 13.02.2019
 * Time: 14:14
 */
//muutujate loomine
$eesnimi = 'Katriin';
$perenimi = 'Kubarski';
$vanus = 19;
$kaal = 54.5;
$sugu = 'naine';

//var_dump($eesnimi); //muutuja sisu test vaatamine
switch ($sugu) {
    case 'mees';
        echo '<p style=":color: blue">';
        break;
    case 'naine';
        echo '<p style=":color: red">';
        break;
    default;
        echo '<p style=":color: green">';
        break;
}
Echo 'Minu eesnimi on '.$eesnimi. '<br>';
Echo 'Minu eesnimi on '.$perenimi. '<br>';
Echo 'Ma olen '.$vanus. ' aastat vana<br>';
Echo 'Ma kaalun '.$kaal. 'kg <br>';
Echo </p>;
?>