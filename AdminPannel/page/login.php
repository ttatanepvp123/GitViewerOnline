<?php
if(!empty($include)) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminPannel - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <form method="POST" action="?page=ValideLogin">
        <input class="input-text" type="password" name="password">
        <input class="input-submit" type="submit">
    </form>
</body>
</html>
<?php
}
?>