<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 20.02.2019
 * Time: 14:58
 */
    $peppa = array (
        'nimi'=>'Peppa',
        'sugu'=>'naine',
        'vanus'=>4,
        'pikkus'=>1.04
    );

    $george = array (
        'nimi'=>'George',
        'sugu'=>'mees',
        'vanus'=>2,
        'pikkus'=>0.95
        );
echo $peppa['nimi'].' on '.$peppa['vanus']. 'aastat vana <br>';
echo $george['nimi'].' on '.$george['vanus']. 'aastat vana <br>';


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

foreach ($peppa as $nimi=>$vaartus){
    echo $nimi.' - '.$vaartus.'<br>';
}
echo '<hr>';
foreach ($george as $nimi=>$vaartus){
    echo $nimi.' - '.$vaartus.'<br>';
}
echo '<hr>';

$porsad = array();
$porsad[] = $peppa;
$porsad[] = $george;
echo '<pre>';
print_r($porsad);
echo '</pre>';


$porsad = array ();
$porsad ['peppa'] = $peppa;
$porsad ['george'] = $george;

$porsad['peppa']['lemmik varv'] = 'punane';
$porsad['george']['lemmik varv'] = 'sinine';

foreach ($porsad as $porsaseNimi=>$porsaseAndmed){
    echo '<b>'. $porsaseNimi.'</b><br>';

}
foreach ($porsad as $porsaseNimi=>$porsaseAndmed){
    echo '<b>'.$porsaseNimi.'</b><br>';
    echo '<ul>';
    foreach ($porsaseAndmed as $nimetus=>$vaartus){
        echo '<li>'.$nimetus.' - '.$vaartus.'</li>';
    }
    echo '</ul>';
}

foreach ($porsad as $porsaseNimi=>$porsaseAndmed){
    echo '<b>'.$porsaseNimi.'</b><br>';
    echo '<ul>';
    foreach ($porsaseAndmed as $nimetus=>$vaartus){
        echo '<li>'.$nimetus.' - '.$vaartus.'</li>';
    }
    echo '</ul>';
}
