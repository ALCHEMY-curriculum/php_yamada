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
      
        $members = [];
        $members[] = '川﨑';
        $members[1] = 'ゴリラ';
        $members[2] = 'ゴリラ・ゴリラ';
        $members[3] = 'ゴリラ・ゴリラ・ゴリラ';
        $members[4] = 'ゴリラ・ゴリラ・ゴリラ・ゴリラ';
        $members[5] = 'ゴリラ・ゴリラ・ゴリラ・ゴリラ・ゴリラ';

        echo '<br>'; 
        echo '一次元配列課題';
        echo '<br>';  

        for ($i = 0; $i < count($members); $i++) {
            echo "Name ".$members[$i]. '<br>';
        }
        echo '<br>';  
        foreach ($members as $member) {
            echo "Name ".$member. '<br>';
  }
  
        $Line = [];

        $yamanoteLine = ['品川', '池袋', '大塚'];
        $denntoLine = ['三茶', '駒澤大学', '桜新町'];

        $Line[0][] = $yamanoteLine;

        $Line[0][1] = $denntoLine;
        echo '<br>'; 
        echo '多次元配列課題';
        echo '<br>'; 
        for ($i = 0; $i < count($Line); $i++) {
            for ($t = 0; $t < count($Line[$i]); $t++) {
                    foreach ($Line[$i][$t] as $station) {
                        echo "駅名 " . $station . '<br>';
                    }
            }
        }
        $experiences = [
            'firstSkill' => 'html',
            'secondSkill' => 'css',
            'thirdSkill' => 'js',
            'fourthSkill' => 'react',
        ];

        echo '<br>'; 
        echo '連想配列課題';
        echo '<br>';

        foreach ($experiences as $skills => $skill) {
            echo $skills.": " . $skill . '<br>';
        }

        

        ?>
                </div>
            </body>
        </html>
