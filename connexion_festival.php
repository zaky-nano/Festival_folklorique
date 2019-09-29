<?php
include("sessions.php");

include("_gestionBase.inc.php");
include("formulaire_conn.php");

 

$bdd=connect();
if (!$bdd)
{
   ajouterErreur("Echec de la connexion au serveur MySql");
   afficherErreurs();
   exit();
}



if(isset($_POST['formulaireconnexion'])) {
   $nom = $_POST['nom'];
   $id = $_POST['id'];
   if(!empty($nom) AND !empty($id)) {
    $queryuser = $bdd->prepare("SELECT * FROM etablissement WHERE nom = ? AND id = ?");
    $queryuser->execute(array($nom, $id));
    $userexist = $queryuser->rowCount();
   if($userexist == 1 ) {
         $userinfo = $queryuser->fetch();
		 $_SESSION['id'] = $userinfo['id'];
		 $_SESSION['nom'] = $userinfo['nom'];
         $_SESSION['adresseRue'] = $userinfo['adresseRue'];
         $_SESSION['codePostal'] = $userinfo['codePostal'];
         $_SESSION['ville'] = $userinfo['ville'];
         $_SESSION['tel'] = $userinfo['tel'];
         $_SESSION['adresseElectronique'] = $userinfo['adresseElectronique'];
         $_SESSION['type'] = $userinfo['type'];  
		 $_SESSION['civiliteResponsable'] = $userinfo['civiliteResponsable'];
         $_SESSION['nomResponsable'] = $userinfo['nomResponsable'];
         $_SESSION['prenomResponsable'] = $userinfo['prenomResponsable'];
         $_SESSION['nombreChambresOffertes	'] = $userinfo['nombreChambresOffertes	'];

        header("Location: index.php");

		
      } else {
         $erreur = "Mauvais nom d'établissement ou d'identifiant établissement !";
      }  


      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
   
   
   

?>