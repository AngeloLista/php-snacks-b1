<!--
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Mario',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Vincenzo',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Maria',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Anna',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Rosaria',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<body>
    <h1>test</h1>
    <?php var_dump($posts['10/01/2019']) ?>



    <h1>Posts</h1>
    <ul>
        <?php foreach ($posts as $date) : ?>
            <li> Data: <?= $date ?></li>
            <ul>
                <?php foreach ($date as $post) : ?>
                    <li style="color: green;"> Post Author: <?= $post['author'] ?></li>
                    <li style="color: red;"> Post Title: <?= $post['title'] ?></li>
                    <li style="color: blue"> Post Text: <?= $post['text'] ?></li>
                <?php endforeach; ?>
            </ul>

        <?php endforeach; ?>
    </ul>

</body>

</html>