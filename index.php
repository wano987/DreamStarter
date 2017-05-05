<?php //17.18.5 index.php
$core=dreamstarter
if($_GET['a']){$core = $_GET['a'];}
die(include './'.$core.'.php');
?>
