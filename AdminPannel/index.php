<?php
session_start();
if(empty($_SESSION['Valide'])) {
    if (empty($_GET['page'])) {
        $include = TRUE;
        include("page/login.php");
        exit();
    } else {
        if ($_GET['page'] == "ValideLogin"){
            $include = TRUE;
            include("page/ValideLogin.php");
            exit();
        } else {
            $include = TRUE;
            include("page/login.php");
            exit();
        }
    }
} else if ($_SESSION['Valide'] == TRUE) {
    if(empty($_GET['page'])){
        $include = TRUE;
        include("page/index.php");
    } else if($_GET['page'] == "ValideLogin") {
        //header('Location: http://'.$_SERVER['HTTP_HOST'].'/AdminPannel');
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/GitViewerOnline/AdminPannel');
    } else if($_GET['page'] == "PassWordChange") {
        $include = TRUE;
        include("page/PassWordChange.php");
    } else if($_GET['page'] == "CreateRepository") {
        $include = TRUE;
        include("page/CreateRepository.php");
    } 
} else {
    $include = TRUE;
    include("page/login.php");
    exit();
}
?>