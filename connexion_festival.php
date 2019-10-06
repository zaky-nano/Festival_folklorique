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
   $id_admin = $_POST['id_admin'];
   $mdp_admin = sha1($_POST['mdp_admin']);
   if(!empty($id_admin) AND !empty($mdp_admin)) {
    $queryuser = $bdd->prepare("SELECT * FROM administrateur WHERE id_admin = ? AND mdp_admin = ?");
    $queryuser->execute(array($id_admin, $mdp_admin));
    $userexist = $queryuser->rowCount();
   if($userexist == 1 ) {
         $userinfo = $queryuser->fetch();
		 $_SESSION['id_admin'] = $userinfo['id_admin'];
		 $_SESSION['mdp_admin'] = $userinfo['mdp_admin'];
         /*
		 $_SESSION['adresseRue'] = $userinfo['adresseRue'];
         $_SESSION['codePostal'] = $userinfo['codePostal'];
         $_SESSION['ville'] = $userinfo['ville'];
         $_SESSION['tel'] = $userinfo['tel'];
         $_SESSION['adresseElectronique'] = $userinfo['adresseElectronique'];
         $_SESSION['type'] = $userinfo['type'];  
		 $_SESSION['civiliteResponsable'] = $userinfo['civiliteResponsable'];
         $_SESSION['id_adminResponsable'] = $userinfo['id_adminResponsable'];
         $_SESSION['preid_adminResponsable'] = $userinfo['preid_adminResponsable'];
         $_SESSION['id_adminbreChambresOffertes	'] = $userinfo['id_adminbreChambresOffertes	'];
		*/
        header("Location: index.php");

		
      } else {
         $erreur = "Mauvais identifiant administrateur ou mot de passe administrateur !";
      }  


      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
   
   
   

?>