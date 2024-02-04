<?php
    session_start();
    include("../../data/config/config.php");

    //connexion
    if (isset($_POST["connexion"]) && $_POST["identifiant"] !=''){
        $identifiant=$_POST['identifiant'];
        $sql="SELECT * FROM tb_user WHERE identifiant='$identifiant' LIMIT 1";
        $user = mysqli_query($mysqli,$sql);

        if(mysqli_num_rows($user)>0){
            if((isset($_POST['nouvel-utilisateur']))){
                //la case à cocher est cochée mais que l’utilisateur existe déjà
                $_SESSION['message2']=" L’identifiant renseigné existe déjà.
                                        Connectez-vous sans cocher 'Pas encore inscrit.e ?' !";
                header("location:../../index.php?gestion=connexion");
            }else{
                //la case à cocher n’est pas cochée et l’utilisateur existe déjà
                $d=mysqli_fetch_array($user);
                $_SESSION['id']=$d['id'];
                $_SESSION['identifiant']=$d['identifiant']; 
                header("Location:../../index.php?identifiant=$identifiant");
            }

        }else{
            if((isset($_POST['nouvel-utilisateur']))){
            // la case à cocher est cochée et que l’utilisateur n’existe pas
            $_SESSION['newUser']="Bienvenu, vous vous êtes un nouvel utilisateur 
                                et vous avez réussi à créer votre identifiant. Reconnectez-vous!";
            $sql_addUser ="INSERT INTO tb_user(identifiant) VALUES('$identifiant')";
            mysqli_query($mysqli,$sql_addUser);
            header("location:../../index.php?gestion=connexion");
            }else{
             //la case à cocher n’est pas cochée et que l’utilisateur n’existe pas
                $_SESSION['message1']="L’identifiant n'existe pas,
                                        cochez-vous pour créer votre nouvel identifiant!";
                header("location:../../index.php?gestion=connexion");
            }
        }
    }else{
        $_SESSION['message3']="Vous devez entrer votre identifiant. Connectez-vous à votre compte!!!!!";
                header("location:../../index.php?gestion=connexion");
    }

    //deconnexion
        if(isset($_POST['deconnexion'])){
            unset($_SESSION['id']);
            unset($_SESSION['identifiant']);
            header("location:../../index.php?");
        }
