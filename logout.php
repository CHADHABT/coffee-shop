<?php
    session_start();//si la session existe déjà: lire les info correspondantes 
                    //sinon la session n'existe pas créer une nouvelle session 
    session_unset();//pour supprimer les variables de la session 
    session_destroy();

    header("Location: index.php");
?>