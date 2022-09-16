<h3>Mise à jour</h3>
<br>
<form action="index.php?module=user&action=edit" method="post">
    <input  type="hidden" name="idutilisateur" value="<?php echo $data['user']['idutilisateur']; ?>">
        <label>
            Nom
            <input type="text" name="nom" value="<?php echo $data['user']['nom']; ?>">
        </label>
        <label>
            Nom d'utilisateur
            <input type="email" name="nomutil" value="<?php echo $data['user']['nomutil']; ?>">
        </label>
        <label>
            Date de naissance
            <input type="date" name="naissance" value="<?php echo date_format(date_create($data['user']['naissance']),"Y-m-d") ?>">
        </label>
        <br>
     <input type="submit" value="Soumettre">
</form>
 