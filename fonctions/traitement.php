<?php

    function connexion($login){
            if(require("bdd.php")){
                $query = $conn->prepare("SELECT * FROM user WHERE email = ?");
                $query->execute([$login]);
                $user = $query->fetch();
                return $user;
                $query->closeCursor();
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

    function getOneProduit($id){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM produit WHERE id = ?");
            $query->execute([$id]);
            $produit = $query->fetchAll(PDO::FETCH_OBJ);
            return $produit;
            $query->closeCursor();
        }
    }

    function ajoutProduit($libelle, $prix, $desc, $image){
        if(require("bdd.php")){
            $query = $conn->prepare("INSERT INTO produit (libelle, prix, description, photo) VALUES (?, ?, ?, ?)");
            $query->execute([$libelle, $prix, $desc, $image]);
            $query->closeCursor();
        }
    }

    function ajoutUser($prenom, $nom, $email, $password, $photo){
        if(require("bdd.php")){
            $query = $conn->prepare("INSERT INTO user (prenom, nom, email, password, photo) VALUES (?, ?, ?, ?, ?)");
            $query->execute([$prenom, $nom, $email, $password, $photo]);
            $query->closeCursor();
        }
    }

    function modifiProfil($prenom, $nom, $email, $id, $photo){
        if(require("bdd.php")){
            $query = $conn->prepare("UPDATE user SET prenom = ?, nom = ?, email = ?, photo = ? WHERE id = ?");
            $query->execute([$prenom, $nom, $email, $photo, $id]);
            /*$produit = $query->fetchAll(PDO::FETCH_OBJ);
            return $produit;*/
            $query->closeCursor();
        }
    }

    function supprimerProduit($id){
        if(require("bdd.php")){
            $query = $conn->prepare("DELETE FROM produit WHERE id = ?");
            $query->execute([$id]);
            $query->closeCursor();
        }
    }

?>