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
    <body class="antialiased m-6">
        <div >
        <?php
   

$eto=[
    '午',
    '未',
    '申',
    '酉',
    '戌',
    '亥',
    '子',
    '丑',
    '寅',
    '卯',
    '辰',
    '巳',
];
$year=1990;
$currentYear = date('Y');
echo "課題1) 西暦1990年から今年までの干支を一覧で表示してください";
echo "<br>";

echo '<table>';
for($i=0;$i<=($currentYear-$year);$i++){
    echo '<tr>';
    echo'<td style="padding: 1rem"class=" border-2">' .$year+$i. '</td>';
    echo'<td style="padding: 1rem"class=" border-2">' .$eto[$i% 12].'</td>';
    echo '</tr>';
}
echo '</table>';



//関数は別ファイルでの指定があるのでphp_basic18.phpに記載します//
include "/Users/a15/Developer/php/php-laravel-theme/resources/views/php_basic_18.blade.php";

echo "<br>";
echo "課題2) 任意の数までの素数を割り出し、一覧表示してください";
echo "<br>";

displayPrimeNumberTable(100);

        ?>
        </div>
    </body>
</html>
