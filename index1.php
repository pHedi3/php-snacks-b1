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
    $games = [
        [ 
            'casa' => 'Milano',
            'ospite' => 'Cagliari',
            'pCasa' =>  45,
            'pOspite'  => 67,
        ],
        [
            'casa' => 'Livorno',
            'ospite' => 'Gela',
            'pCasa' =>  74,
            'pOspite'  => 87,
        ],
        [
            'casa' => 'Bologna',
            'ospite' => 'Roma',
            'pCasa' =>  57,
            'pOspite'  => 68,
        ],
        [
            'casa' => 'Torino',
            'ospite' => 'Bolzano',
            'pCasa' =>  98,
            'pOspite'  => 56,
        ],
    ];

    for ($x = 0; $x < count($games); $x++) {
        echo "{$games[$x]['casa']} - {$games[$x]['ospite']} | {$games[$x]['pCasa']}-{$games[$x]['pOspite']}" . '<br>';
    };

    ?>

    
</body>
</html>