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
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Mario',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Vincenzo',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Maria',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Anna',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Rosaria',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.'
        ]
    ],
];
?>

<body>
    <h1>Posts</h1>
    <ul>
        <?php foreach ($posts as $key => $date) : ?>
            <li>
                <h3>Data: <?= $key ?></h3>
            </li>
            <ul>
                <?php foreach ($date as $post) : ?>
                    <li><strong>Post Title:</strong> <?= $post['title'] ?></li>
                    <li><strong>Post Author:</strong> <?= $post['author'] ?></li>
                    <li><strong>Post Text:</strong> <?= $post['text'] ?></li>
                    <hr>
                <?php endforeach; ?>
            </ul>

        <?php endforeach; ?>
    </ul>

</body>

</html>