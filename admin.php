<?php
/****************************************************
 * Page d'administration protégée par un mot de passe
 * Code libre d'utilisation
 * Auteur : Xhyar, http://www.developpez.net/forums/u983690/xhyar/
 * Code écrit le 19/06/2016
 ***************************************************/
 
// Paramètres du programme
 
$user = "Admin";                   // Nom d'utilisateur
$mdp = "xJiEo8ei817Pa1TiS8E0";     // Mot de passe


// On vérifie si l'utilisateur a envoyé des informations de connexion
if(isset($_POST['login'], $_POST['password']))
{
  // On compare les informations de connexion
  if($_POST['login']===$user and $_POST['password']===$mdp)
  {
    // Les informations de connexion sont bonnes, on affiche le contenu protégé
    ?>
      <!-- Insérez ici le contenu à protéger --->
      <!DOCTYPE html>
      <html lang="fr">
      <head>
        <meta charset="UTF-8">
        <title>Connexion réussie !</title>
      </head>
      <body>
      
        <p> Connexion réussie ! Bienvenue sur votre espacé protégé ! </p>
        
      </body>
      </html>
      <!-- Fin du contenu à protéger --->
    <?php
  }
  else
  {
    // Les informations de connexion sont incorrectes, on affiche une page d'erreur
    
    ?>
    
    <!-- Insérez ici une page d'erreur -->
    <!DOCTYPE html>
    <html lang="fr">
    <head>
      <meta charset="UTF-8">
      <title>Accès non-autorisé !</title>
    </head>
    <body>
      
      <p> Les informations de connexion sont invalides ! Accès refusé ! </p>
        
    </body>
    </html>
    <!-- Fin de la page d'erreur -->
    
    <?php

  }
  
  // On quitte le programme
  exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page de connexion</title>
  <style type="text/css">
    /* Insérez ici du code CSS pour donner un style à votre page de connexion ! :-P */
      html
      {
        text-align:center;
        font-family:"Consolas", monospace;
      }
      body
      {
        margin:auto;
        margin-top:20px;
        width:620px;
        border:1px dashed #000;
        padding:50px;
      }
      form
      {
        text-align:left;
      }
    /* Fin code CSS */
  </style>
</head>
<body>

  <h3> Connexion requise pour l'accès au contenu protégé : </h3>
  
  <hr><br>
  
  <form action="" method="post">
  
    <p> Nom d'utilisateur : </p>
    <input type="text" name="login" required autofocus maxlength="50">
    
    <p> Mot de passe : </p>
    <input type="password" name="password" required maxlength="100">
    
    <p>&nbsp;</p>
    <input type="submit" value=" Valider ">
    
  </form>
  
</body>
</html>