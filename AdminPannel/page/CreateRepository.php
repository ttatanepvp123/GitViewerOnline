<?php
if(!empty($include)) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminPannel - CreateRepository</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <p>Result Command : <br></p>
    <div class="AdminPannel console-Theme">
        <?php
        if(!empty($include)) {
            if(PHP_OS == "WINNT"){
                $command = 'cd ../repo && md '.$_POST['Name-Repository'].' && cd '.$_POST['Name-Repository'].' && git init';
                $output = shell_exec($command);
                echo $command.'<br>'.$output.'<br>';
            } else {
                $command = 'cd ../repo && mkdir '.$_POST['Name-Repository'].' && cd '.$_POST['Name-Repository'].' && git init';
                $output = shell_exec($command);
                echo $command.'<br>'.$output.'<br>';
            }
        }
        ?>
        <a href="<?php /*echo 'http://'.$_SERVER['HTTP_HOST'].'/AdminPannel';*/ echo 'http://'.$_SERVER['HTTP_HOST'].'/GitViewerOnline/AdminPannel';?>">
    </div>
    <button class="AdminPannel Button">RETURN TO AdminPannel</button>
</body>
</html>
<?php
}
?>