<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('kravmagaperigueux@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@kravmagaperigueux@gmail.com');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>