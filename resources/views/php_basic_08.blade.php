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
   

   <?php
   $minutesNow = date('i');
   $value = 0;
   
   if ($minutesNow % 2 === 1) {
      echo "奇数です";
   } else {
      echo "偶数です";
   }
   echo '<br>';
   
   switch ($value) {
      case 0:
        print_r("0 (数値)");
          break;
      case "0":
        print_r("\"0\" (文字列)");
          break;
      default:
      print_r("default");
   }
   ?>
   
    </body>
</html>
