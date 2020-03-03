<?php
$age = 20;


if ($age >= 18) { 
    $answer = "Děkujeme za váš nákup"
}
else {
    $answer = "Na alkohol jsi moc mladý"
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
<?= $answer; ?>
</body>
</html>