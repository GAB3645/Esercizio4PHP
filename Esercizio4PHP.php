<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size: 30px;">
    <?php

    $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel feugiat ante. Nullam imperdiet nisl sit amet odio tincidunt ultrices. Aliquam luctus quam turpis, sit amet tincidunt nisl pellentesque id. Nunc vel purus quis erat tempus auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla quis enim dignissim, congue nulla vitae, pulvinar leo. In pellentesque a leo in efficitur. Integer vitae libero dictum, ultrices lectus sit amet, euismod justo.";


    echo "<p style='color:green;'>$str</p> <br>";

    echo "<p style='color:blue;'>" . strtoupper($str) ."</p> <br>";

    echo "<span style='color:red;'>" . strlen($str) ."</span> <br> <br>";

    echo "<span style='color:yellow;'>" . str_word_count($str) ."</span>";





    ?>

</body>
</html>