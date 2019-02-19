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
    //kui arv jagatud 2'ga on 0 siis on paaritu muul juhul paaris
    if($arv % $jagaja != 0 ) {
    echo '<div class="paaritu">'.$arv.'</div>';
    } else {
    echo '<div class="paaris">'.$arv.'</div>';
    }
    ?>