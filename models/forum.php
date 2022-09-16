<?php
function forum_model_list(){
     // echo ("Dans models/forum.php --> forum_model_list" . "<br>");
     require (CONNEX_DIR);
     $sql = "Select *, nom FROM forum inner join utilisateurs on (utilisateurs_id = idutilisateur) order by titre";
     $result = mysqli_query($con, $sql);
     $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
     mysqli_close($con);
     return $result;
}

function forum_model_insert($request){
     // echo ("Dans models/forum.php --> forum_model_insert" . "<br>");
     require (CONNEX_DIR);
     foreach ($request as $key => $value) {
          $$key = mysqli_real_escape_string($con, $value);
     }
     $sql = "INSERT INTO forum (titre, texte, date, utilisateurs_id) VALUES ('$titre', '$texte', '$date', '$utilisateurs_id)";
     mysqli_query($con, $sql);
     mysqli_close($con);
}

function forum_model_view($request){
     // echo ("Dans models/forum.php --> forum_model_view" . "<br>");
     require (CONNEX_DIR);
     foreach($request as $key=>$value){
          $$key=mysqli_real_escape_string($con, $value);
     }
     // echo("REQUEST[$request]");
     $sql = "Select * FROM forum where idarticle = '$id'";
     // echo("SQL [$sql]");
     $result = mysqli_query($con, $sql);
     $result = mysqli_fetch_assoc($result);
     mysqli_close($con);
     return $result;
}

function forum_model_edit($request){
     // echo ("Dans models/forum.php --> forum_model_edit" . "<br>");
     require (CONNEX_DIR);
     foreach ($request as $key => $value) {
          $$key = mysqli_real_escape_string($con, $value);
     }
     $sql="UPDATE forum SET titre='$titre', 
          texte='$texte', date= '$date' 
          WHERE idarticle = '$idarticle'";
     // echo $sql;
     $result = mysqli_query($con, $sql);
     mysqli_close($con);
     }

function forum_model_delete($request){
     // echo ("Dans models/forum.php --> forum_model_delete" . "<br>");
     require (CONNEX_DIR);
     $userId = mysqli_real_escape_string($con, $_POST['idarticle']);
     $sql = "DELETE FROM forum WHERE idarticle = '$idarticle'";
     $result = mysqli_query($con, $sql);
     mysqli_close($con);
}

function forum_model_login( $request, $mode ) {  
     // mode: -1: deconnecter  0: check  1: connecter
          // Quête de l'ID
          require (CONNEX_DIR);
          foreach ($request as $key => $value) {
               $$key = mysqli_real_escape_string($con, $value);
          }
          $sql = "SELECT idutilisateur FROM utilisateurs
               WHERE nom='$nomutil'";
          // echo("SQL[$sql]<br>");
          $result = mysqli_query($con, $sql);
          // echo("# rangs[$result->num_rows]<br>");
          $rang = mysqli_fetch_array($result);
          $idutilisateur = $rang['idutilisateur'];
          // echo("ID[$idutilisateur]<br>");

          // Traitement de l'ID
          switch ($mode) {
               case -1: 
                    $sql = "UPDATE utilisateurs 
                              SET connexion = 0
                              WHERE idutilisateur = '$idutilisateur;'";
                    $result = mysqli_query($con, $sql);
                    echo("Kill connect :" . ($result ? "Succès" : "Échec") );         
                    break;
               case  0:
                    return ($rang['connexion'] > 0 ); 
                    break;
               case  1: 
                    $sql = "UPDATE utilisateurs 
                              SET connexion = 1
                              WHERE idutilisateur = '$idutilisateur;'";
                    $result = mysqli_query($con, $sql);
                    echo("SET connect :" . ($result ? "Succès" : "Échec") );         
                    break;
          } // switch
     
          mysqli_close($con);
     
     }

?>