<?php include("sessions.php"); ?>
 
<html>
   <head>
      <title>Connexion à Festival Folklores du Monde</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
	  <?php if (!isset($_SESSION['id_admin']) AND !isset($_SESSION['mdp_admin']) ) {
         echo '<h2>Connexion à Festival Folklores du Monde</h2>
         <br /><br />
         <form method="POST" action="">
		 
		 <label for="id_admin">identifiant administrateur:</label>
		 <input type="text" name="id_admin" placeholder="identifiant administrateur" />
		 
		 
		 <label for="id">mot de passe administrateur :</label>
            <input type="password" name="mdp_admin" placeholder="mot de passe administrateur" />
            <br /><br />
            <input type="submit" name="formulaireconnexion" value="Se connecter " /><br /><br />
         </form>
		 
		  </form>';}?>
         <div style="text-align:center">
         
                
<a href="creationEtablissement.php?action=demanderCreEtab">Ajouter un nouvel établissement</a>

	  </div> </br> </br>

         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
		</div>
   </body>
</html>
		 
		 
		 
		 
		 
        