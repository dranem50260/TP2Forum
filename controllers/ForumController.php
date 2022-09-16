<?php

function forum_controller_index(){
     // echo ("Dans la fonction: forum_controller_index" . "<br>");
     require_once(MODEL_DIR.'/forum.php');
     $data = forum_model_list();
     render(VIEW_DIR.'/forum/index.php', $data);
}

function forum_controller_create(){
     // echo ("Dans la fonction: forum_controller_create" . "<br>");
     render(VIEW_DIR.'/forum/create.php');
}

function forum_controller_insert($request){
     // echo ("Dans la fonction: forum_controller_insert" . "<br>");
     require_once(MODEL_DIR.'/forum.php');
     forum_model_insert($request);
     header("Location: ?module=forum&action=index");
}

function forum_controller_view($request){
     // echo ("Dans la fonction: forum_controller_view" . "<br>");
     require_once(MODEL_DIR.'/forum.php');
     $user = forum_model_view($request);
     
     $data = array_merge(array('user' => $user));

     render(VIEW_DIR.'/forum/view.php', $data);
}

function forum_controller_edit($request){
     // echo ("Dans la fonction: forum_controller_edit" . "<br>");
     require_once(MODEL_DIR.'/forum.php');
     forum_model_edit($request);
     header("Location: ?module=forum&action=index");
}

function forum_controller_connect($request){
     //echo ("Dans la fonction: forum_controller_connect" . "<br>");.
     require_once(MODEL_DIR.'/forum.php');
     forum_model_login( $request, 1 );
     // header("Location: ?module=forum&action=login-result");
}

function forum_controller_delete($request){
     // echo ("Dans la fonction: forum_controller_delete" . "<br>");
     require_once(MODEL_DIR.'/forum.php');
     forum_model_delete($request);
     header("Location: ?module=forum&action=index");
}

function forum_controller_login($request){
     // echo ("Dans la fonction: forum_controller_login" . "<br>");
     render(VIEW_DIR.'/forum/login.php');
}

?>