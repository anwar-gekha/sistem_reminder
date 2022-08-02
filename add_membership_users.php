<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))
{
 // variables for input data
     $id = $_POST['id'];
      $photo =  $_FILES["photo"]["name"];
 $file_name = $_FILES["photo"]["name"];
$file_tmp = $_FILES["photo"]["tmp_name"];
  if($file_name!=''){
        move_uploaded_file($file_tmp,"uploads/".$file_name);
  }
      $memberID = $_POST['memberID'];
      $passMD5 = md5($_POST['passMD5']);
       $email = $_POST['email'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO membership_users (`id`,`photo`,`memberID`,`passMD5`,`email`) VALUES('".$id."','".$photo."','".$memberID."','".$passMD5."','".$email."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('membership_users added Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Core PHP Crud functions By PHP Code Builder</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>Core PHP - <a href="" target="_blank"></a></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data" >
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>



      <tr>
    <td>
    <input type="number" class="form-control" id="id" name="id" required placeholder="Id">
    </td>
    </tr>
    <tr>
    <td>
    <input type="file" class="form-control" id="photo" name="photo" required placeholder="Photo">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="memberID" name="memberID" required placeholder="MemberID">
    </td>
    </tr>
    <tr>
    <td>
    <input type="password" class="form-control" id="passMD5" name="passMD5" required placeholder="PassMD5">
    </td>
    </tr>
    <tr>
    <td>
    <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
    </td>
    </tr>
  



    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
