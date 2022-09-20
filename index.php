<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>HeHe boy</title>
</head>

<body>
    <h1>Date & Heure :</h1>
    <div class="dateheure">
        <p class="alors g1">Nous somme le : </p>
        <div class="alors g2">
        <?php
        date_default_timezone_set('Europe/Paris');  
        setlocale(LC_TIME, 'fra_fra');
        echo strftime('%A %d %B %Y, %H:%M');
        ?>
        </div>
    </div>

</body>

</html>

