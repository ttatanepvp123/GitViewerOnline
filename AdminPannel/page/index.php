<?php
if(!empty($include)) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminPannel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <h1 class="AdminPannel-Title">AdminPannel - Main Menu</h1>
    <h3 class="AdminPannel Sub-Title">Create Repository</h3>
    <form method="POST" action="?page=CreateRepository">
        <input type="text" name="Name-Repository" placeholder="My-Repository" class="AdminPannel input-center input-text">
        <input type="submit" class="AdminPannel input-center input-submit">
    </form>
    <h3 class="AdminPannel Sub-Title">Change PassWord</h3>
    <form method="POST" action="?page=PassWordChange">
        <input type="password" name="Pass" placeholder="password" class="AdminPannel input-center input-text">
        <input type="submit" class="AdminPannel input-center input-submit">
    </form>
</body>
</html>
<?php
}
?>