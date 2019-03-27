return '"'.addSlashes($val).'"';
}
// discount to menu price
function discount($price, $procent){
return round($price - ($price * $procent) / 100.0, 2);
}
?>