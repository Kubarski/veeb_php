<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 20.02.2019
 * Time: 14:58
 */

$raamatud = array ( array(
    'nimi' => 'Elus',
    'hind' => 16.95,
    'autor' => 'Jaana Maling',
    'keel' => 'eesti',
    'zanr' =>'Biograafiad ja memuaarid'
),
array (
        'nimi' => 'Ma abiellusin sinuga',
        'hind' => 4.00,
        'autor' => 'Walter Trobisch',
        'keel' => 'inglise',
        'zanr' =>'Eneseabi'
    ),
    array (
     'nimi' => 'Nimed marmortahvlil',
     'hind' => 17.60,
     'autor' => 'Albert Kivikas',
     'keel' => 'eesti',
     'zanr' =>'Ilukirjandus'
));
function tabeliPais($andmed){
    echo '<thead>';
    echo '<tr>';
    foreach ($andmed as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
}
function tabeliRida($andmed){
    echo '<tr>';
    foreach ($andmed as $elemendiNimetus => $elemendiVaartus){
        echo '<td>'.$elemendiVaartus.'</td>';
    }
    echo '</tr>';
}
function tabel($andmed){
    echo '<table>';
    tabeliPais(array_keys($andmed[0]));
    echo '<tbody>';
    foreach ($andmed as $element){
        tabeliRida($element);
    }
    echo '</tbody>';
    echo '</table>';
}
tabel($raamatud);




