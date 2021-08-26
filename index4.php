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
        $class = [
            [
                'name' => 'Carlo',
                'surname' => 'Pani',
                'voti' => [12, 30, 25]
            ],
            [                
                'name' => 'Marco',
                'surname' => 'Tardi',
                'voti' => [12, 18, 19]
            ],
            [
                'name' => 'Pedro',
                'surname' => 'Garzia',
                'voti' => [24, 30, 27]
            ]
        ];
        
        for ($x = 0; $x < count($class); $x++) {
            for ($i = 0; $i < count($class[$x]['voti']); $i++) {
                $sum += $class[$x]['voti'][$i];
            };
            echo $class[$x]['name'] . ' ' . $class[$x]['surname'] . ' ' . number_format($sum / count($class[$x]['voti']), 2) ;
        };



    ?>
    
</body>
</html>