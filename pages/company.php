<?php

    function salam ($company){
        return "Selamat Datang! di $company";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1><?= salam ("Javaneese Batik");?></h1><br>
    <p>
        Perusahaan ini telah berdiri sejak 1887, dan telah ikut serta dalam mengembangkan perekonomian Indonesia
    </p>
</body>
</html>