<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$posts = [
    '18/12/2021' => [
        [
            'title' => 'Ho Fame',
            'author' => 'Asdrubale',
            'text' => 'oggi ho proprio fame'
        ],
        [
            'title' => 'Ho più fame',
            'author' => 'Asdrubale',
            'text' => 'adesso ho ancora più fame'
        ],
    ],
    '20/12/2021' => [
        [
            'title' => 'sto per morire di fame',
            'author' => 'Asdrubale',
            'text' => 'ormai ho solo fame'
        ]
    ],
    '25/12/2021' => [
        [
            'title' => 'ho mangiato',
            'author' => 'Asdrubale',
            'text' => 'ho trovato un gatto e me lo sono mangiato'
        ],
        [
            'title' => 'perché ho mangiato',
            'author' => 'Asdrubale',
            'text' => 'perhcè mi sono mangiato un gatto'
        ],
        [
            'title' => 'non mangiero mai più',
            'author' => 'Asdrubale',
            'text' => 'ho divorto quel gatto mi sento in colpa non mangiero più'
        ]
    ],
];
$key = array_keys($posts);
for ($x = 0; $x < count($posts); $x++) {
    for ($i = 0; $i < count($posts[$key[$x]]); $i++) {
        echo 'data ' . $key[$x] . '<br>'. $posts[$key[$x]][$i]['title'] . '<br>'. $posts[$key[$x]][$i]['author'] . '<br>'. $posts[$key[$x]][$i]['text'] . '<br>'. '<br>';
    }
}

?>
    
</body>
</html>