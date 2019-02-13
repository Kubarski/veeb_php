<?php
for ($kord = 1 ; $kord <= 10; $kord++) {
    header ('Refresh: 5');
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
</style>
<?php

    //genereerime juhusliku arvu
    $arv = rand(0,100);
    //arvutame jääk kahega jagamisel
    $jaak = $arv % 2;
    //kontrollime kui jääk on 0 - paaris arv
    if($jaak == 0){
    echo '<div class="paaris">'.$arv.'</div>';
    } else {
    echo '<div class="paaritu">'.$arv.'</div>';
    }
    ?>