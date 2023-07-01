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

$Line = [];


$yamanoteLine = ['品川', '池袋', '大塚'];


$denntoLine = ['三茶', '駒澤大学', '桜新町'];

$Line[0][] = $yamanoteLine;

$Line[0][1] = $denntoLine;

echo '<pre>';
var_dump($Line);
echo '</pre>';

?>
        </div>
    </body>
</html>
