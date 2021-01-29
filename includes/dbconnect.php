<?php 

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=bodyfit","root","");
    }
    catch(PDOException $pdo){
        die("Unsuccessful connection");
    }
    
?>

