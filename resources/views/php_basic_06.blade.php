<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased m-8">
        <div >
        <?php

$true = true; // 変数の復習のため、変数$trueに true を代入しています
$false = false;

$a = $true && $true;
$b = $true && $false;
$c = $true && $true && $true;
$d = $true && $false && $false;
$e = $true && ($true || $false);

var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
var_dump($c);
echo '<br>';
var_dump($d);
echo '<br>';
var_dump($e);

?>
        </div>
    </body>
</html>
