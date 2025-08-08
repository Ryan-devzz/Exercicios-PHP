<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nota1 = 10;
    $nota2 = 5;
    $nota3 = 3;

    $media = ($nota1 + $nota2 + $nota3)/3;
    if ($media >= 7){
        echo "Aluno aprovado com media " .$media;
    }else{
    echo "Aluno reprovado com media " .$media;
    }
    ?>
</body>
</html>