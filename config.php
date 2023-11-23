<?php
//code de verif
if(isset($_POST['email']) && isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];



   $nom_serveur= "localhost";
   $utilisateur = "root";
   $mot_de_passe = "";
   $name_bd = "FORM";
   $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe,$name_bd);

   //selection des user
    $req = mysqli_query($con, "SELECT * FROM utilisateurs WHERE email= '$email' AND password='$password'");
    $num_ligne = mysqli_num_rows($req);
    if($num_ligne > 1){
        header("Location : bienvenu.php");
    }
}


?>