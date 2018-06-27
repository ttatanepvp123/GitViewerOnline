<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ViewerFile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="," />
    <script src="main.js"></script>
</head>
<body>
    <?php
        echo 'language : '.GetLangage($dir);
        echo '<code class="CodeRead">';
        echo '<p>';
        echo HTMLCONVERT(file_get_contents("repo/".$Repo.$dir, FILE_USE_INCLUDE_PATH));
        echo '</p>';
        echo '</code>';
    ?>
</body>
</html>