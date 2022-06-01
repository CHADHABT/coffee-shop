<?php
    if(isset($_POST['btn-valider'])){//si on clice sur le btn alors
        //Nous allons verifier les informations

    if(isset($_POST['email']) && isset($_POST['password']))
    {
    //Nous allons mettre l'email et le mot de passe ds des variables
    $email = $_POST['email'];
    $mdp = $_POST['password'];
    $erreur ="";
    //Nous allons verifier si les informations entrée sont correctes
    //connexion a la base de donnée:
    $nom_serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe ="";
    $nom_bd = "coffee-shop";
    $con = mysqli_connect($nom_serveur , $utilisateur , $mot_de_passe ,$nom_bd);
    $alert = "<script> window.alert('Verify your adress and password !');</script>";
    //requete pour selectionner l'utilisateurs qui a pour email et mot de passe les identifiants saisies
    $req = mysqli_query($con , "SELECT * FROM coffee_shop WHERE email='$email' AND password='$mdp' ");
    $num_ligne = mysqli_num_rows($req); //compter le nombre de lignes ayant rapport a la requete sql  
    if($num_ligne > 0){
        header("Location: index.php#menu"); //on sera redirigé vers le menu
    }else{//sinon
        echo $alert ;


    }
    
    }
}

?>


<?php
    include('header.php');
?>

<?php
    include('_home.php');
?>

<?php
    include('_about.php');
?>

<?php
    include('_shop.php');
?>
<?php
    include('_menu.php');
?>

<?php
include('_gallery.php');
?>

<?php
include('_contact.php');
?>


<?php
    include('footer.php');
?>