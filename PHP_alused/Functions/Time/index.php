<?php

//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo 'Tänane kuupäev on:';
echo $paev.'.'.$kuu.' '.$aasta;
echo '<br>';

//möödunud kuupäevade hankimine
mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg);
$sp = mktime(18,10,02,07,24,1999);
echo 'Mina sündisin:';
echo date('d.m.Y', $sp);
echo '<br>';

//Aegade arvutamine
echo 'Kell on 60 sekundi pärast: ';
echo date('d.m.Y G:i' , time()+60);	//60sek pärast
echo '<br>';
echo 'Kell on ühe tunni pärast: ';
echo date('d.m.Y G:i' , time()+60*60);		//1h pärast
echo '<br>';
echo 'Kell on 24 tunni pärast: ';
echo date('d.m.Y G:i' , time()+60*60*24);	//24h pärast
echo '<br>';

//Aastate, kuude ja päevade arvutamine
$sp = mktime(0,0,0, 07-5,24-3, 1999-4);
echo date('d.m.Y', $sp);
echo '<br>';

//Näited inglise keelsete lausetega
//näited kuvatakse sekundites alates aastast 1970
date_default_timezone_set('Europe/Tallinn');
echo strtotime("now");
echo '<br>';
echo strtotime("tomorrow");
echo '<br>';
echo strtotime("yesterday");
echo '<br>';
echo strtotime("26 May 1995");
echo '<br>';
echo strtotime("+3 day");
echo '<br>';
echo strtotime("+40 week");
echo '<br>';
echo strtotime("+8 week 6 days 2 hours 25 seconds");
echo '<br>';
echo strtotime("next Friday");
echo '<br>';
echo strtotime("last Monday");
echo '<br>';
echo strtotime("2am + 9 Hours");
echo '<br>';
echo strtotime("now + 6 fortnights");
echo '<br>';
echo strtotime("9am yesterday");
echo '<br>';
echo strtotime("3am 23 days ago");
echo '<br>';

//kuupäevade valideerimine
if(checkdate(02,30,2019)){
    echo ('Kuupäev on korras!');
} else{
    echo ('kuupäev on sisestatud valesti!');
}

?>