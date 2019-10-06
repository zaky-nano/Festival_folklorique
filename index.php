<?php
/*

include("_debut.inc.php");
include("connexion_festival.php");
include("sessions.php");



 if (isset($_SESSION['nom']) AND isset($_SESSION['id']) ) { 
 echo '<a class="msg_bienvenue"><h2>Bienvenue : Votre nom d\'établissement est ' . $_SESSION['nom'] . '</h2></a><p>';
} 



$bdd=connect();
if (!$bdd)
{
   ajouterErreur("Echec de la connexion au serveur MySql");
   afficherErreurs();
   exit();
}

echo " <br> 
<table width='80%' cellspacing='0' cellpadding='0' align='center'>
   <tr>  
      <td class='texteAccueil'>
         Cette application web permet de gérer l'hébergement des groupes de musique 
         durant le festival Folklores du Monde.
      </td>
   </tr>
   <tr>
      <td>&nbsp;
      </td>
   </tr>
   <tr>
      <td class='texteAccueil'>
          Elle offre les services suivants :
      </td>
   </tr>
   <tr>
      <td>&nbsp;
      </td>
   </tr>
   <tr>
      <td class='texteAccueil'>
      <ul>
         <li>Gérer les établissements (caractéristiques et capacités d'accueil) acceptant d'héberger les groupes de musiciens.
         <p>
	      </p>
         <li>Consulter, réaliser ou modifier les attributions des chambres aux groupes dans les établissements.
      </ul>
      </td>
   </tr>
</table>";


if(isset($_POST['formulaireconnexion'])) {
   $nom = $_POST['nom'];
   $id = $_POST['id'];
   if(!empty($nom) AND !empty($id)) {
    $queryuser = $bdd->prepare("SELECT * FROM etablissement WHERE nom = ? AND id = ?");
    $queryuser->execute(array($nom, $id));
    $userexist = $queryuser->rowCount();
   if($userexist == 1) {
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

*/



include("sessions.php");

include "_debut.inc.php";
include "connexion_festival.php";

if (isset($_SESSION['id_admin']) ) { 



		echo '<a class="resultat"><h2>Connexion réussie, Identifiant Administrateur: ' . $_SESSION['id_admin'] . ' </h2></a><p>';
}
if (isset($erreur) AND !isset($_SESSION['id_admin']) ) { 



		echo '<a class="resultat"><h2>Erreur: ' . $erreur . ' </h2></a><p>';
}


echo " <br> 
<table width='80%' cellspacing='0' cellpadding='0' align='center'>
   <tr>  
      <td class='texteAccueil'>
         Cette application web permet de gérer l'hébergement des groupes de musique 
         durant le festival Folklores du Monde.
      </td>
   </tr>
   <tr>
      <td>&nbsp;
      </td>
   </tr>
   <tr>
      <td class='texteAccueil'>
          Elle offre les services suivants :
      </td>
   </tr>
   <tr>
      <td>&nbsp;
      </td>
   </tr>
   <tr>
      <td class='texteAccueil'>
      <ul>
         <li>Gérer les établissements (caractéristiques et capacités d'accueil) acceptant d'héberger les groupes de musiciens.
         <p>
	      </p>
         <li>Consulter, réaliser ou modifier les attributions des chambres aux groupes dans les établissements.
      </ul>
      </td>
   </tr>
</table>";





?>

