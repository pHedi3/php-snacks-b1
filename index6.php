<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .teachers {
            background-color: grey;
        }
        .pm {
            background-color: green;
        }
    </style>
</head>
<body>
<?php
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];
    echo "<div class='teachers'>";
 for ($x = 0; $x < count($db['teachers']); $x++ ) {
     echo "{$db['teachers'][$x]['name']} {$db['teachers'][$x]['lastname']} <br> ";
 }
 echo '</div>';
 echo "<div class='pm'>";
 for ($x = 0; $x < count($db['pm']); $x++ ) {
     echo "{$db['pm'][$x]['name']} {$db['pm'][$x]['lastname']} <br> ";
 }
 echo '</div>';

?>

    
</body>
</html>