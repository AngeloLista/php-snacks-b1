<!-- 
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 5</title>
</head>

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

?>

<body>

    <div class="gray-box">
        <ul>
            <li><?php echo $db['teachers'][0]['name'] . ' ' . $db['teachers'][0]['lastname'] ?></li>
            <li><?php echo $db['teachers'][1]['name'] . ' ' . $db['teachers'][1]['lastname'] ?></li>
        </ul>
    </div>
    <div class="green-box">
        <ul>
            <li><?php echo $db['pm'][0]['name'] . ' ' . $db['pm'][0]['lastname'] ?></li>
            <li><?php echo $db['pm'][1]['name'] . ' ' . $db['pm'][1]['lastname'] ?></li>
        </ul>
    </div>
</body>

</html>