<?php
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;
echo '<br>';

mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg);
$sp = mktime(18,10,02,07,24,1999);
echo date('d.m.Y', $sp);
?>