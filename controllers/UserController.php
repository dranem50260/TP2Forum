<?php

function user_controller_index(){
     // echo ("Dans la fonction: user_controller_index" . "<br>");
     require_once(MODEL_DIR.'/user.php');
     $data = user_model_list();
     render(VIEW_DIR.'/user/index.php', $data);
}

function user_controller_create(){
     // echo ("Dans la fonction: user_controller_create" . "<br>");
     render(VIEW_DIR.'/user/create.php');
}

function user_controller_insert($request){
     // echo ("Dans la fonction: user_controller_insert" . "<br>");
     require_once(MODEL_DIR.'/user.php');
     user_model_insert($request);
     header("Location: ?module=user&action=index");
}

function user_controller_view($request){
     // echo ("Dans la fonction: user_controller_view" . "<br>");
     require_once(MODEL_DIR.'/user.php');
     $user = user_model_view($request);
     
     $data = array_merge(array('user' => $user));

     render(VIEW_DIR.'/user/view.php', $data);
}

function user_controller_edit($request){
     // echo ("Dans la fonction: user_controller_edit" . "<br>");
     require_once(MODEL_DIR.'/user.php');
     user_model_edit($request);
     header("Location: ?module=user&action=index");
}

function user_controller_delete($request){
     // echo ("Dans la fonction: user_controller_delete" . "<br>");
     require_once(MODEL_DIR.'/user.php');
     user_model_delete($request);
     header("Location: ?module=user&action=index");
}

?>