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
    <body class="antialiased">
        <div >
        <?php


$members = [];

$members[] = '川﨑';
$members[1] = 'ゴリラ';
$members[2] = 'ゴリラ・ゴリラ';
$members[3] = 'ゴリラ・ゴリラ・ゴリラ';
$members[4] = 'ゴリラ・ゴリラ・ゴリラ・ゴリラ';
$members[5] = 'ゴリラ・ゴリラ・ゴリラ・ゴリラ・ゴリラ';

foreach ($members as $member) {
    echo "Name ".$member. '<br>';
  }



?>
        </div>
    </body>
</html>
