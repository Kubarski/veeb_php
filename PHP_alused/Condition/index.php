<?php
for ($kord = 1 ; $kord <= 10; $kord++) {
    header ('Refresh: 2');
    echo $kord;
}
?>
<style>
    div {
        margin: auto;
        width: 100px;
        height: 100px;
        font-size: 75px;
        padding-top: 20px;
        text-align: center;
    }
    .paaris{
        background: red;
    }
    .paaritu{
        background: green;
    }
    .algarv{
        background: deepskyblue;
    }
    .tavaline{
        background: lightslategray;
    }
</style>
<?php

    //genereerime juhusliku arvu vahemikus 0 kuni 100
    $arv = rand(0,100);
    //defineerime jagaja algväärtuse
    $jagaja = 2;
    //nii kaua kui jaak jagamisel ei ole 0 võtame jargmise jagaja väärtuse
    while ($arv % $jagaja !=0) {
        $jagaja++;
    }
    if($arv == $jagaja ) {
    echo '<div class="algarv">'.$arv.'</div>';
    } else {
    echo '<div class="tavaline">'.$arv.'</div>';
    }
    ?>