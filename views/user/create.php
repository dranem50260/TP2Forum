<form action="?module=user&action=insert" method="post">
     <label for="nom">
          Nom 
          <input type="text" id="nom" name="nom" minlength="2" maxlength="25" value="" required>
     </label>
     <label for="nomutil">
          Nom d'utilisateur 
          <input type="email" id="nomutil" name="nomutil" maxlength="45" value="" required>
     </label>
     <label for="mpasse">
          Mot de passe 
     <input type="password" id="mpasse" name="mpasse" minlength="6" maxlength="45" value="" required >
     </label>
     <label for="naissance">
          Date de naissance 
     <input type="text" id="naissance" name="naissance" maxlength="10" placeholder="aaaa-mm-jj" value="">
     </label>
     <br>
     <p><input type="submit" value="Soumettre"/></p>
</form>