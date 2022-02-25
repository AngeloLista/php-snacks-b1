<!--
Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';
?>

<body>
    <h1>Snack 1</h1>
    <p>Name:
        <?php
        // Name length validation
        if (strlen($name) > 3) {
            echo $name;
        } else {
            echo '!!!ATTENZIONE!!! Il nome deve essere più lungo di 3 caratteri';
        } ?>
    </p>
    <p>E-mail:
        <?php
        if (empty($email)) {
            echo 'Nessuna E-Mail ricevuta';
        } else {
            // E-mail characters validation
            if (strpos($email, '@') && strpos($email, '.')) {
                echo $email;
            } else {
                echo "L'E-mail inserita non è valida. Deve contenere un '.' e '@'.";
            }
        }
        ?>
    </p>
    <p>Age:
        <?php
        // Value type validation
        if (is_numeric($age)) {
            echo $age;
        } else {
            echo 'Il numero inserito non è valido.';
        }
        ?>
    </p>

    <p>
        <?php
        if ((strlen($name) > 3) && (strpos($email, '@') && strpos($email, '.')) && is_numeric($age)) {
            echo 'ACCESSO RIUSCITO';
        } else {
            echo 'ACCESSO NEGATO';
        }
        ?>
    </p>

</body>

</html>