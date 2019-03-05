<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 04.03.2019
 * Time: 10:14
 */

//Kuupäeva 20.03.2013 kuvamine
$sp = mktime(12,31,0,03,20,2013);
echo date('d.m.Y G:i', $sp);
echo '<br>';
//-----------------------------------------------------------

//nädalapäevade massiiv
$eesti_nadalaPaevad = array(
    1=>'esmaspäev',
    'teisipäev',
    'kolmapäev',
    'neljapäev',
    'reede',
    'laupäev',
    'pühapäev'
);
$paevSonaga = $eesti_nadalaPaevad[date('N')];
$paevNumbriga =date('d');
$kuud = date ('m');
$aasta = date('Y');
echo  $paevSonaga .', ' .date('d.m.Y');
echo '<br>';
//-----------------------------------------------

//jaanipäeva päevade arvutamine
$now = time(); // praegune kellaaeg
//jaanipäev
$your_date = strtotime("2019-06-24");
//arvutan välja ajavahe
$datediff = $your_date - $now;
//ümardan arvu päevadeni
echo ' 2019 aasta jaanipäevani jäänud  päevade arv on: '.round($datediff / (60 * 60 * 24));
echo '<br>';
//-----------------------------------------------------------

//mina vs metsheina vanus
$metshein = mktime(0,0,0,06,11,1980);
$mina = mktime(0,0,0,07,24,1999);
echo "Metsheina sünnipäev on ".date('d.m.Y', $metshein).'<br>';
echo "Minu sünnipäev on ".date('d.m.Y', $mina).'<br>';
$vanusevahe = $mina - $metshein;
$vahe = round($vanusevahe / (60 * 60 *24 * 364));
echo "Metshein on minust $vahe aastat vanem";
echo '<br>';
//------------------------------------------------------------

//Maailma lõpp saabub 29.02.2016
if(checkdate(02,29,2016)){
    echo ('Jah, 29.02.2016 saabub maailma lõpp!');
} else{
    echo ('Ei, 29.02.2016 ei saabu maailma lõppu!');
}
echo '<br>';
//-------------------------------------------------------------

//Tervituse kood
date_default_timezone_set('Europe/Tallinn');
$hetkel = new Datetime('now');
$hommikul = new DateTime('06:00');
$lounal = new DateTime('12:00');
$ohtul = new DateTime('17:00');
if($hetkel >= $hommikul && $hetkel <= $lounal){
    echo 'Tere hommikust!';
} if ($hetkel >= $lounal && $hetkel <= $ohtul){
    echo 'Tere päevast!';
}   else {
    echo 'Tere õhtust!';
}

