<style type="text/css">
body{   
    margin:0 auto;
    overflow:hidden; 
	background-color:#fff; }
</style>
<?php
header("Refresh:30");
require "inc/ServerStatus.class.php";
$status = new ServerStatus( "LOCALHOST", "LOCALHOST", "USERNAME", "PASSWORD", "DATABASE" );
?>
<div id="login"><span class="status"><?php  echo ($status->getStatus('map'))?'<img src="img/on.png" />':'<img src="img/off.png" />'; ?></span></div>