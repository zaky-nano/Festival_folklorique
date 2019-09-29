<html>
   <head>
      <title>Connexion à Festival Folklores du Monde</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion à Festival Folklores du Monde</h2>
         <br /><br />
         <form method="POST" action="">
         <label for="nom">nom établissement:</label>
         <input type="text" placeholder="Votre nom" nom="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
         <label for="id">identifiant établissement :</label>
         <input type="password" placeholder="Votre mot de passe" nom="id" name="id" value="<?php if(isset($id)) { echo $id; } ?>" />
         <input type="submit" name="formulaireconnexion" value="Se connecter" /> </br> </br>
         
         </form>
         <div style="text-align:center">
         
               <a href="Inscription_MZshop.php">S'inscrire</a>
         </div> </br> </br>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>