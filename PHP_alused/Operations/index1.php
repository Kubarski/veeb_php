<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 18.02.2019
 * Time: 14:32
 */
$cel = 17;
    $far = (9/5) * $cel + 32;
$vormindatud = sprintf('Vastuse: %0.2f', $far);
    echo 'Temperatuur Kreekas Celsiuses on : '.$cel. '<br>';
    echo 'Temperatuur Kreekas Fahrenheitides on : '.$vormindatud. '<br>';
    ?>
</body>
</html>
