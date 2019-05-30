<?php
$abc = "";
$abc = isset($_POST['search']) ? $_POST['search'] : '';
$logfile = fopen('data.txt','a+');
fwrite($logfile,$abc);
fclose($logfile);
?>
