<?php
//defineerime funktsiooni nimega paarsuskontroll

function paarsuseKontroll ($arv){
    if($arv %2 == 0) {
        echo $arv . 'on paaris<br>';
    } else {
        echo $arv . 'on paaritu<br>';
    }
}
//kutsume funktsiooni tööle
for ($arv=0; $arv <=10; $arv ++){
    paarsuseKontroll($arv);
}
