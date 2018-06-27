<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Repo : <?php echo $Repo ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div class="widget-main-top">
        <p><?php echo $Repo.$dir ?></p>
    </div>
    <div class="widget-main">
    <?php
        $listFile = scandir("repo/".$Repo.$dir);
        $max = sizeof($listFile);
        $tmp = false;
        for ($i=0; $i < $max - 2; $i++) { 
            if ($tmp) {
                echo '<hr class="FileListe">';
            }
            echo '<div class="FileList">';
            if ($dir == "/") {
                echo '<a href="http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$listFile[$i + 2].'">';
            } else {
                echo '<a href="http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'/'.$listFile[$i + 2].'">';
            }
            echo '<p class="FileListe Language-'.GetLangage($listFile[$i + 2]).'">'.$listFile[$i + 2].'</p>';
            echo '</a>';
            echo '</div>';
            $tmp = true;
        }
    ?>
    </div>
</body>
</html>