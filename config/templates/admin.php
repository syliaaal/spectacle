<?php
function ajouter($nom,$prenom, $prix, $desc){
    $sql = "INSERT INTO produit (nom,prenom,prix,description) VALUES (:nom,:prenom,:email,:mot_passe)";
    $db = config::getConnexion();
    try{
        $req = $db->prepare($sql);
        $req->bindValue(':nom', $nom);
        $req->bindVlaue(':prenom', $prenom);
        $req->bindVlaue(':mail', $mail);
        $req->bindVlaue(':mot_passe', $mot_passe);
        $req->execute();

    }
}