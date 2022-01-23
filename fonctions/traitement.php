<?php

    function connexion($login, $password){
            if(require("bdd.php")){
                $query = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
                $query->execute([$login, $password]);
                $user = $query->fetch();
                return $user;
                $req->closeCursor();
            }
    }

    function getProfil($id){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM user WHERE id = ?");
            $query->execute([$id]);
            $user = $query->fetch();
            return $user;
            $query->closeCursor();
        }
    }

    function getProduit(){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM produit");
            $query->execute();
            $produit = $query->fetchAll(PDO::FETCH_OBJ);
            return $produit;
            $query->closeCursor();
        }
    }

    function ajoutUser($prenom, $nom, $email, $password){
        if(require("bdd.php")){
            $query = $conn->prepare("INSERT INTO user (prenom, nom, email, password) VALUES (?, ?, ?, ?)");
            $query->execute([$prenom, $nom, $email, $password]);
            $query->closeCursor();
        }
    }

    function modifiProfil($prenom, $nom, $email, $id){
        if(require("bdd.php")){
            $query = $conn->prepare("UPDATE user SET prenom = ?, nom = ?, email = ? WHERE id = ?");
            $query->execute([$prenom, $nom, $email, $id]);
            /*$produit = $query->fetchAll(PDO::FETCH_OBJ);
            return $produit;*/
            $query->closeCursor();
        }
    }

?>