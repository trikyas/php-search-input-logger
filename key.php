<?php
$trikyas = "";
$trikyas = isset($_POST['search']) ? $_POST['search'] : '';
$logfile = fopen('data.txt','a+');
fwrite($logfile,$trikyas);
fclose($logfile);
?>
