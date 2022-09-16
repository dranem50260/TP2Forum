<form action="?module=forum&action=insert" method="post">
     <label for="titre">
          Titre 
          <input type="text" id="titre" name="titre" minlength="5" maxlength="100" value="Entrez le titre de cet article" required>
     </label>
     <label for="texte">
          Texte de l'article 
          <input type="text" id="texte" name="texte" maxlength="1000" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit..." required>
     </label>
     <label for="date">
          Date de publication 
          <input type="text" id="date" name="date" maxlength="10" placeholder="aaaa-mm-jj" value="" required>
     </label>
     <label for="utilisateurs_id">
          <input type="hidden" id="utilisateurs_id" name="utilisateurs_id">
     </label>
     <br>
     
     <p><input type="submit" value="Soumettre"/></p>
</form>