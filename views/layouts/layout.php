<!DOCTYPE html>
<html lang="fr">
<head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">     
     <meta charset="utf-8">
     <link rel='stylesheet' href='resources/css/style.css' type='text/css' media='all' />
     <title>TP2</title>
<head>
<body>

     <nav class="nav" onclick="turnonoff(id)">          
          <a href="?module=forum&action=index" id="findex" class="anchor findex">Lire les articles</a>
          <a href="?module=forum&action=login" id="flogin" class="anchor flogin">Se connecter</a>
          <a href="?module=forum&action=create" id="fcreate" class="anchor fcreate">Ajouter un article</a>
          <a href="?module=user&action=index" id="uindex" class="anchor uindex">Lister les utilisateurs</a>
          <a href="?module=user&action=create" id="ucreate" class="anchor ucreate ">Saisir un utilisateur</a>
     </nav>

     <main class="container">
          <?php echo $content; ?>
     </main>

     <!-- Pour manipuler le menu... éventuellement
          <script>
          function turnonoff() {
               let fIndex = getElementByid(findex);
               let fLogin = getElementByid(flogin);
               let fCreate = getElementByid(fcreate);
               let uIndex = getElementByid(uindex);
               let uCreate = getElementByid(ucreate);   

          }
     </script>
     -->
  </body>
</html>

