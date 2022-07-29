<?php
include_once 'dbconfig.php';

if(isset($_GET['view_id']))
{
 $sql_query="SELECT * FROM data WHERE id=".$_GET['view_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
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
        <label>Core PHP Crud functions - <a href="http://www.phpcodebuilder.com" target="_blank">By PHP Code Builder</a></label>
    </div>
</div>

 <table  class="table table-striped">
   <tr>
    <td>
   <label for="id" class="form-label">Id:</label>
   </td>
   <th colspan="5"> <?php echo $fetched_row['id'] ?></th>
</tr>
 <tr>
    <td>
   <label for="name_doc" class="form-label">Name_doc:</label>
   </td>
   <th colspan="5"> <?php echo $fetched_row['name_doc'] ?></th>
</tr>
 <tr>
    <td>
   <label for="expired" class="form-label">Expired:</label>
   </td>
   <th colspan="5"> <?php echo $fetched_row['expired'] ?></th>
</tr>
 <tr>
    <td>
   <label for="pic" class="form-label">Pic:</label>
   </td>
   <th colspan="5"> <?php echo $fetched_row['pic'] ?></th>
</tr>
 <tr>
    <td>
   <label for="keterangan" class="form-label">Keterangan:</label>
   </td>
   <th colspan="5"> <?php echo $fetched_row['keterangan'] ?></th>
</tr>
 </table>
</center>
</body>
</html>
