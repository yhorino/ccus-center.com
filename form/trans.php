<?php
 session_start();

 include_once('CCUS_items.php');

 $CCUS_items = new CCUS_items($_POST);

 $CCUS_items->web2case();

 header('Location: done.php');
 exit;


/* ----------------------------------------- */

 function upload_file($name, $filename, $tmp_name){
  if($filename != ''){
    $msec = str_replace('.','',microtime(true));
    $img_name = $name.$msec.$filename;
    $img_name = str_replace(' ','',$img_name);
    $img_name = str_replace('　','',$img_name);

    //画像を保存
    move_uploaded_file($tmp_name, './upload/' . $img_name);
    $img_url = 'https://'.$_SERVER['HTTP_HOST'].'/form/upload/'.$img_name;
  }
  return $img_url;
 } 

?>
