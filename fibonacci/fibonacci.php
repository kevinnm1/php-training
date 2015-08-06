<?php

function fib($limit) {
    $n1 = 0;
    $n2 = 1;
    $arr = array();
    $arr[] = 1;
    for ($i = 0; $i < $limit; $i++) {
        $suma = $n1 + $n2;
        $n1 = $n2;
        $n2 = $suma;
        $arr[] = $suma;
    }
    return $arr;
}
?>

<table border="3">
    <th>Fibonacci</th>
    <tbody>
        <?php
            $limite=fib(7);
            $cantidad=  count($limite);
            for ($i=0; $i<$cantidad ; $i++ ){
                echo "<tr><td>$limite[$i]</tr></td>";
                   
            }
        ?>
    </tbody>
</table>