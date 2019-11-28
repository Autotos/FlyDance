<?php
    $num = 3;
    $location = 'desk';
    $format = 'There are %d apples on the %s.<br><br>';
    printf($format, $num, $location);
    echo sprintf($format, $num, $location);

    $s = 'bigmarten';
    echo sprintf("[%10s]<br>", $s);
    echo sprintf("[%-10s]<br>", $s);
    echo sprintf("[% 10s]<br>", $s);
    echo sprintf("[%010s]<br>", $s);
    echo sprintf("[%'#10s]<br>", $s);
    $money = 23.10;
    echo sprintf("￥%5.1f<br>", $money);
    echo sprintf("￥%.2f<br>", $money);
?>