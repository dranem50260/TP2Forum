<?php
function user_model_list(){
     echo ("Dans models/user.php --> user_model_list" . "<br>");
     require (CONNEX_DIR);
     $sql = "Select * FROM utilisateurs order by nom";
     $result = mysqli_query($con, $sql);
     $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
     mysqli_close($con);
     return $result;
}

function user_model_insert($request){
     echo ("Dans models/user.php --> user_model_insert" . "<br>");
     require (CONNEX_DIR);
     foreach ($request as $key => $value) {
          $$key = mysqli_real_escape_string($con, $value);
     }
     $password_hash = password_hash($mpasse, PASSWORD_BCRYPT);
     $sql = "INSERT INTO utilisateurs (nom, nomutil, mpasse, naissance, connexion) VALUES ('$nom', '$nomutil', '$password_hash', '$naissance', '$connexion')";
     mysqli_query($con, $sql);
     mysqli_close($con);
}

function user_model_view($request){
     echo ("Dans models/user.php --> user_model_view" . "<br>");
     require (CONNEX_DIR);
     foreach($request as $key=>$value){
          $$key=mysqli_real_escape_string($con, $value);
          echo $value;
     }
     $sql = "Select * FROM utilisateurs where idutilisateur = '$id'";
     $result = mysqli_query($con, $sql);
     $result = mysqli_fetch_assoc($result);
     mysqli_close($con);
     return $result;
}

function user_model_edit($request){
     echo ("Dans models/user.php --> user_model_edit" . "<br>");
     require (CONNEX_DIR);
     foreach ($request as $key => $value) {
          $$key = mysqli_real_escape_string($con, $value);
     }
     $sql="UPDATE utilisateurs SET nom ='$nom', 
          nomutil='$nomutil', naissance= '$naissance' 
          WHERE idutilisateur = '$idutilisateur'";
     echo $sql;
     $result = mysqli_query($con, $sql);
     mysqli_close($con);
     }

function user_model_delete($request){
     echo ("Dans models/user.php --> user_model_delete" . "<br>");
     require (CONNEX_DIR);
     $userId = mysqli_real_escape_string($con, $_POST['userId']);
     $sql = "DELETE FROM utilisateurs WHERE idutilisateur = '$userId'";
     $result = mysqli_query($con, $sql);
     mysqli_close($con);
}


?>