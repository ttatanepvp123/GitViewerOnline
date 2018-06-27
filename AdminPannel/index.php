<?php
if(empty($_GET['page'])){
    include("page/index.php");
} else if($_GET['page'] == "CreateRepository"){
    include("page/CreateRepository.php");
}
?>