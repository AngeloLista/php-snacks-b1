<!--
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo.
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<?php
$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem cum nihil at praesentium blanditiis dolorum nemo repellendus atque doloremque quae optio soluta beatae, vitae suscipit facere nesciunt est officiis ipsa.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem cum nihil at praesentium blanditiis dolorum nemo repellendus atque doloremque quae optio soluta beatae, vitae suscipit facere nesciunt est officiis ipsa.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem cum nihil at praesentium blanditiis dolorum nemo repellendus atque doloremque quae optio soluta beatae, vitae suscipit facere nesciunt est officiis ipsa.';
$result = [];
foreach (explode('.', $testo) as $newParagraph) {
    $result[] = $newParagraph;
}

?>

<body>
    <ul>
        <?php foreach ($result as $paragraph) : ?>
            <li>
                <p><?php echo $paragraph ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>