<?php

function GetLangage($nom)
{
    $file = explode('.', $nom);
    $extension = $file[sizeof($file) - 1];
    if ($extension == "c") {
        return "C";
    } else if ($extension == "cpp"){
        return "C++";
    } else if ($extension == "h") {
        return "C";
    } else if ($extension == "hpp"){
        return "C++";
    } else if ($extension == "php"){
        return "PHP";
    } else if ($extension == "css"){
        return "CSS";
    } else if ($extension == "html"){
        return "HTML";
    } else if ($extension == "json"){
        return "JSON";
    } else if ($extension == "js"){
        return "JAVASCRIPT";
    } else if ($extension == "java"){
        return "JAVA";
    } else if ($extension == "rb"){
        return "RUBY";
    } else if ($extension == "md"){
        return "MARKDOWN";
    } else if ($extension == "exe"){
        return "BINARY WINDOWS";
    } else if ($extension == "bat"){
        return "BASH WINDOWS";
    } else if ($extension == "sh"){
        return "BASH UNIX";
    } else if ($extension == "py"){
        return "PYTHON";
    } else {
        return "unkown";
    }
}

function HTMLCONVERT($code){
    $code = str_replace('&', '&amp', $code);
    $code = str_replace('<', '&lt', $code);
    $code = str_replace('>', '&gt', $code);
    $code = str_replace('   '/* TAB */, '&nbsp;&nbsp;&nbsp;&nbsp;', $code);
    $code = nl2br($code, TRUE);
    return $code;
}

?>