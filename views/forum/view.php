<h3>Mise à jour</h3>
<br>
<form action="index.php?module=forum&action=edit" method="post">
    <input  type="number" name="idarticle" value="<?php echo $data['user']['idarticle']; ?>">
        <label for="titre">
            Titre
            <input type="text" name="titre" value="<?php echo $data['user']['titre']; ?>">
        </label>
        <label>
            Nom de l'auteur
            <input type="text" name="utilisateurs_id" value="<?php echo $data['user']['utilisateurs_id']; ?>">
        </label>
        <label>
            Date de parution
            <input type="date" name="date" value="<?php echo date_format(date_create($data['user']['date']),"Y-m-d") ?>">
        </label>
        <br>
     <input type="submit" value="Soumettre">
</form>
 