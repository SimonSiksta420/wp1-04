<?php
$age = 5;


if ($age >= 18) { 
    $answer = "Děkujeme za váš nákup";
    $image = "https://www.alkohol.cz/images/preview/thumb_340_380_1415796458_belveder-3l.jpg";
}
else {
    $answer = "Na alkohol jsi moc mladý";
    $image = "https://images-na.ssl-images-amazon.com/images/I/612QR%2BbKZ6L._AC_SY450_.jpg";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Věk chlapce: <?= $age ?> </h1>

<?= $answer; ?>
<img src= <?= $image; ?> alt="Alcohol" width="300" height="300"

</body>
</html>