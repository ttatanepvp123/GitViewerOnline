<?php
require("./tool.php");//import Fonction Tool
if (empty($_GET['Repo'])) {
    include("ErrorPage/Welcome.html");
    exit();
} else {
    $Repo = $_GET["Repo"];//GetRepo
    $Repo = str_replace('../', '', $Repo);//patch Exploit ../
    if(empty($Repo)){
        include("ErrorPage/NoRepo.php");
        exit();
    } else if ($Repo == '/') {
        include("ErrorPage/NoRepo.php");
        exit();
    }
}
if (empty($_GET['Dir'])) {
    $dir = '/';
} else {
    $dir = $_GET["Dir"];
    $dir = str_replace('../', '', $dir);
    $dir = '/'.$dir;
}
if(is_dir("repo/".$Repo) == 0){
    include("ErrorPage/NoRepo.php");
    exit();
}
$type = is_dir("repo/".$Repo.$dir);
if ($type == 0) {
    if(is_file("repo/".$Repo.$dir) == 0) {
        include("ErrorPage/NoFile.php");
        exit();
    }
}
if ($type == 1) {
    include("RepoExplorer.php");
} else {
    include("FileViewer.php");
}
?>