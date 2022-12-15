<?php 
include('routine/upload.php');

// var_dump(SelectAll('t_etudiants'))
// var_dump(SelectWhere('t_etudiants',"Login_Etd","rubens"))
if (isset($_POST['submit'])) {
  echo uploadCv($_FILES['file']);
}

?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="send" name="submit">
</form>