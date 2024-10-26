<?php
$baza = mysqli_connect("localhost", "root", "", "vezbe");
$rezultat = $baza->query("SELECT * FROM riznica");
$riznica = $rezultat->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($riznica as $ime): ?>
        <div>
            <h1> <?= $ime['ime'] ?></h1>
            <p><?= $ime['pisac'] ?></p>
            <p><?= $ime['cena'] ?></p>
    


            <a href="riznica.php?id=<?= $ime['id'] ?>">Pogledaj proizvod</a>
        </div>
    <?php endforeach; ?>
</body>

</html>