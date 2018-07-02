<?php 
if(!empty($include)) {
    $o = fopen("password.cfg","r");
    $l = fgets($o);
    $l = str_replace("\n", "", $l);
    $l = str_replace("\r", "", $l);
    if (password_verify($_POST['password'], $l)) {
        session_start();
        $_SESSION['Valide'] = TRUE;
        //header('Location: http://'.$_SERVER['HTTP_HOST'].'/AdminPannel');
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/GitViewerOnline/AdminPannel');
    } else {
        ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminPannel - Error Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    </head>
    <body>
        <h1 class="AdminPannel Error-MSG">PassWord UnValide</h1>
        <p class="AdminPannel Error-MSG">Your password is not Valide </p>
        <a class="AdminPannel Error-link-button" href="<?php /*echo 'http://'.$_SERVER['HTTP_HOST'].'/AdminPannel';*/ echo 'http://'.$_SERVER['HTTP_HOST'].'/GitViewerOnline/AdminPannel';?>">
            <button class="AdminPannel button-Error">Go To login</button>
        </a>
    </body>
    </html>
        <?php
    }
}
?>