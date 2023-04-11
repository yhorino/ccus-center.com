<?php
 session_start();

 include_once('CCUS_items.php');

 $CCUS_items = new CCUS_items($_POST);

 $CCUS_items->web2case();

 header('Location: done.php');
 exit;

?>
