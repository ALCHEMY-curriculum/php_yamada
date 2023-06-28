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

echo '<table>';
for ($i = 1; $i <= 31; $i++) {
  if ($i % 7 === 1) {
    echo '<tr>';
  }
  
  if ($i  === 1 || $i === 8 || $i === 15 || $i === 22 || $i === 29) {
    echo '<td style="padding: 1rem"class="bg-red-600 border-2">' . $i.'（日）'. '</td>';
  }elseif($i % 7 === 0){
    echo '<td style="padding: 1rem"class="bg-blue-600 border-2">' . $i.'（土）' . '</td>';
    echo '</tr>';
  }else{
    echo '<td style="padding: 1rem" class="border-2">' . $i . '</td>';
  }
  
}
echo '</table>';


?>
        
        </div>
    </body>
</html>
