<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Error :: NoRepo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1 class="ERROR">ERROR : No Repository</h1>
    <p class="ERROR">
        le repo que vous avez demandée n'est pas valide<br>
        the repo you requested is not valid
    </p>
    <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>">
        <button class="button-Error">Go To HomePage</button>
    </a>
</body>
</html>