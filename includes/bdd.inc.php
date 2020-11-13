<?php 
    try 
    {
       $bdd = new PDO('mysql:host=localhost;dbname=logintest', 'root', '');
    }
    catch (Exception $e)
    {
        die($e->getMessage());
    }
?>