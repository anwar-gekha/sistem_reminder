<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))
{
 // variables for input data
     $id = $_POST['id'];
      $name_doc = $_POST['name_doc'];
      $expired = $_POST['expired'];
      $pic = $_POST['pic'];
      $keterangan = $_POST['keterangan'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO data (`id`,`name_doc`,`expired`,`pic`,`keterangan`) VALUES('".$id."','".$name_doc."','".$expired."','".$pic."','".$keterangan."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('data added Successfully ');
  window.location.href='indexdata.php';
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="container"> <div id="table-responsive">
                <label>Core PHP Crud functions - <a href="" target="_blank">Code Builder</a></label>
    </div>
</div>
<div id="container"> &<div   id="table-responsive">
    <form method="post" enctype="multipart/form-data" >
    <table  class="table table-striped">
    <tr>
    <td align="center"><a href="indexdata.php">back to main page</a></td>
    </tr>



      <tr>
     <td>
   <label for="id" class="form-label">Id:</label>
   </td>
    <td>
    <input type="number" class="form-control" id="id" name="id" required placeholder="Id">
    </td>
    </tr>
    <tr>
     <td>
   <label for="name_doc" class="form-label">Name_doc:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="name_doc" name="name_doc" required placeholder="Name_doc">
    </td>
    </tr>
    <tr>
     <td>
   <label for="expired" class="form-label">Expired:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="expired" name="expired" required placeholder="Expired">
    </td>
    </tr>
    <tr>
     <td>
   <label for="pic" class="form-label">Pic:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="pic" name="pic" required placeholder="Pic">
    </td>
    </tr>
    <tr>
    <td>
<textarea  class="form-control" id="keterangan" name="keterangan"></textarea>
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
