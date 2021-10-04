<?php
//Helper
function refresh($url = null, $id = null)
{
    if ($id == null) {
        echo '<META HTTP-EQUIV="Refresh" content = "0; URL=/' . $url . '">';
    } else {
        echo '<META HTTP-EQUIV="Refresh" content = "0; URL=/' . $url . '/' . $id . '">';
    }
}

function cutString($string, $limit)
{
    $string = trim($string);
    $string = strip_tags($string);
    $size = strlen($string);
    $result = '';
    if ($size <= $limit) {
        return $string;
    } else {
        $string = substr($string, 0, $limit);
        $word = explode(' ', $string);
        $result = implode(' ', $word);
        $result .= '..';
    }
    return $result;
}

function isEmailUsed($email)
{
    // True 	=> Ya existe este correo en la DB
    // False 	=> Puede agregarse ese correo
    $c = User::find_by_sql("SELECT email FROM users WHERE email = '$email'");
    if (count($c) >= 1) {
        if ($c[0]->email == $_SESSION['semail']) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }

}

function ifLogin()
{
    if (!$_SESSION['sid']) {
        //no está logueado
        refresh('cms');
        exit();
    }
}

function quitar_tildes($cadena)
{
    $no_permitidas = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "À", "Ã", "Ì", "Ò", "Ù", "Ã™", "Ã ", "Ã¨", "Ã¬", "Ã²", "Ã¹", "ç", "Ç", "Ã¢", "ê", "Ã®", "Ã´", "Ã»", "Ã‚", "ÃŠ", "ÃŽ", "Ã”", "Ã›", "ü", "Ã¶", "Ã–", "Ã¯", "Ã¤", "«", "Ò", "Ã", "Ã„", "Ã‹");
    $permitidas = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "n", "N", "A", "E", "I", "O", "U", "a", "e", "i", "o", "u", "c", "C", "a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "u", "o", "O", "i", "a", "e", "U", "I", "A", "E");
    $texto = str_replace($no_permitidas, $permitidas, $cadena);
    return $texto;
}

function toMil($num)
{
    echo number_format($num, 0, ',', '.');
}
