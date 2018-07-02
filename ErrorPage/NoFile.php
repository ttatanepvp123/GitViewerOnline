<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Error :: NoRepo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <h1 class="ERROR">ERROR NoFile</h1>
    <p class="ERROR">
        le fichier que vous demandez n'existe pas ou le chemin est mal ortographer<br>
        the file you are requesting does not exist or the path is bad ortographer
    </p>
    </p>
    <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>">
        <button class="button-Error">Go To HomePage</button>
    </a>
</body>
</html>