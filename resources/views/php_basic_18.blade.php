
<?php

function checkPrimeNumber($num) {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function displayPrimeNumberTable($num) {
    $Array = [];
    echo '<table>';
    for ($i = 2; $i <= $num; $i++) {
        if (checkPrimeNumber($i)) {
            array_push($Array,$i);
            echo '<tr>';
            echo '<td style="padding: 1rem" class="border-2">' . '素数' . '</td>';
            echo '<td style="padding: 1rem" class="border-2">' . $i . '</td>';
            echo '</tr>';
        }
    }
    echo '</table>';
    echo "<br>";
    foreach ($Array as $value) {
        echo $value . ',';
    }
}
?>