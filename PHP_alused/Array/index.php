<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 20.02.2019
 * Time: 14:58
 */
    $porsad = array(
        array (
        'Peppa',
        'naine',
        4,
        1.04
    ),
        array(
        'George',
        'mees',
        2,
        0.95
    ));
$porsad[0][] = 'punane';
$porsad[1][] = 'sinine';

//  echo $porsas[0][0].'<br>';
//  echo $porsas[0][1].'<br>';
//  echo $porsas[0][2].'<br>';
// echo $porsas[0][3].'<br>';

    echo '<hr>';

    for ($i =0; $i < count($porsad); $i ++){
        for ($j = 0; $j < count($porsad[$i]) ; $j++){
            echo $porsad[$i][$j] . '<br>';
        }
    }

    echo '<hr>';
foreach ($porsad as $porsas)
    foreach ($porsad as $element){
        echo $element.'<br>';
    }
    echo '<hr>';