<?php
if(!empty($include)) {
    if(!empty($_POST['Pass'])) {
        $hash = password_hash($_POST['Pass'] ,PASSWORD_BCRYPT);
        $monfichier = fopen('password.cfg', 'r+');
        ftruncate($monfichier,0);
        fputs($monfichier, $hash);
        fclose($monfichier);
    }
}
?>