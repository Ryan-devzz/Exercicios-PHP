<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 5;
    $resto = ($a % 2);

    if ($resto == 0){
        echo "O numero inserido é par";
    }else{
        echo "O numero inserido é impar";
    }

    ?>
</body>
</html>