<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ViewerFile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="prism.css" />
    <script src="prism.js"></script>
</head>
<body>
    <?php echo 'language : '.GetLangage($dir); ?>
    <pre class="language-<?php echo strtolower(GetLangage($dir))?>">
    <?php
        echo '<code class="CodeRead">';
        echo HTMLCONVERT(file_get_contents("repo/".$Repo.$dir, FILE_USE_INCLUDE_PATH));
        echo '</code>';
    ?>
    </pre>
</body>
</html>