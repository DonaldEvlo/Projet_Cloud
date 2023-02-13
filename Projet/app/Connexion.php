<?php
    try{
        $db = new PDO('mysql:host=mysql_c;dbname=will;charset=utf8','will','will');
    }
    catch(Exception $e)
    {
        die('Erreur de con : '.$e-> getMessage());
    }
    
?>
