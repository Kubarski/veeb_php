<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 20.02.2019
 * Time: 14:58
 */

$raamat1 = array (
    'nimi' => 'Elus',
    'hind' => 16.95,
    'autor' => 'Jaana Maling',
    'keel' => 'eesti',
    'zanr' =>'Biograafiad ja memuaarid'
);
$raamat2 = array (
        'nimi' => 'Ma abiellusin sinuga',
        'hind' => 4.00,
        'autor' => 'Walter Trobisch',
        'keel' => 'inglise',
        'zanr' =>'Eneseabi'
    );

$raamat3 = array (
     'nimi' => 'Nimed marmortahvlil',
     'hind' => 17.60,
     'autor' => 'Albert Kivikas',
     'keel' => 'eesti',
     'zanr' =>'Ilukirjandus'
);
    echo '<pre>';
    print_r($raamat1);
    echo '</pre>';

    echo '<pre>';
    print_r($raamat2);
    echo '</pre>';

    echo '<pre>';
    print_r($raamat3);
    echo '</pre>';

foreach ($raamat1 as $nimi=>$vaartus){
    echo $nimi.' - '.$vaartus.'<br>';
}
echo '<hr>';
foreach ($raamat2 as $nimi=>$vaartus){
    echo $nimi.' - '.$vaartus.'<br>';
}
echo '<hr>';
foreach ($raamat3 as $nimi=>$vaartus){
    echo $nimi.' - '.$vaartus.'<br>';
}
echo '<hr>';


