<?php


try {
    $bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage 
    ();


    
    include_once './templates/erreur500.php';
    die();
    
}

?>
