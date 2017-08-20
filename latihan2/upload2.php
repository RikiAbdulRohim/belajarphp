<html>
<body>

<?php

 $uploaddir = 'uploads/';
 $uploadfile = $uploaddir . $_FILES['userfile'] ['name'];

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{ echo "File telah berhasil diupload"; }
   else
{ echo "File gagal diupload"; }

?>



</body>
</html>
