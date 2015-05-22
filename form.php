<?php

if (!empty($_POST)) {
   var_dump($_POST);
}

if (!empty($_FILES)) {
   var_dump($_FILES);
}

move_uploaded_file($_FILES['yoga']['tmp_name'], 'D:\Program Files\open server 522\OpenServer\domains\\'.$_FILES['yoga']['name']);

   $filename = 'D:\Program Files\open server 522\OpenServer\domains\archive.txt';
$somecontent = $_POST['city'].$_POST['login'];

$handle = fopen($filename,'a+');
          fwrite($handle, $somecontent);
          fclose($handle);