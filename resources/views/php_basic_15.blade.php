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
        $items = [
            'cola' => 140,
            'orange' => 150,
            'monster' => 200,
            ];
        function checkItem ($name,$money){
            if ($name>=$money){
                return true;
        }else{
                return false;
        }
        }
        echo "関数結果";
        echo "<br>";
        var_dump(checkItem($items['cola'],150));
        echo "<br>";
        var_dump(checkItem($items['orange'],150));
        echo "<br>";
        var_dump(checkItem($items['monster'],150));

        ?>

        </div>
    </body>
</html>
