<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Nom d'utilisateur</th>
      <th>Date de Naissance</th>
      
      <th>Éditer</th>
      <th>Effacer</th>
    </tr>
  <thead>
  <tbody>
  <?php foreach($data as $row) { ?>
    <tr>
      <td><?php echo $row['nom'] ?></td>
      <td><?php echo $row['nomutil'] ?></td>
      <td><?php echo date_format(date_create($row['naissance']),"Y/m/d") ?></td>
      
      <td><a href="?module=user&action=view&id=<?php echo $row['idutilisateur']; ?>">Éditer</a></td>
      <td><form action="?module=user&action=delete" method="post"><input type="hidden" name="userId" value="<?php echo $row['idutilisateur'] ?>"><input type="submit" Value="Effacer"></form></td>
    </tr>
  <?php } ?>
  <tbody>
</table>

