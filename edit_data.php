<?php
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM data WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
     
   $id  = $_POST['id '];
          
   $name_doc = $_POST['name_doc'];
          
   $expired = $_POST['expired'];
          
   $pic = $_POST['pic'];
          
   $keterangan = $_POST['keterangan'];
        // variables for input data

 // sql query for update data into database
  $sql_query="UPDATE data SET `id `='$id ',`name_doc`='$name_doc',`expired`='$expired',`pic`='$pic',`keterangan`='$keterangan' WHERE id=".$_GET['edit_id'];

 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('data updated successfully');
  window.location.href='indexdata.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: indexdata.php");
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

<div id="container"> &<div   id="table-responsive">
    <form method="post" enctype="multipart/form-data">
    <table  class="table table-striped">
    <tr>
   <td>
   <label for="id " class="form-label">Id :</label>
   </td>
    <td>
    <input type="number" value="<?php echo $fetched_row['id '] ?>" class="form-control" id="id " name="id ">
</td>
    </tr>
  <tr>
   <td>
   <label for="name_doc" class="form-label">Name_doc:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['name_doc'] ?>" class="form-control" id="name_doc" name="name_doc">
</td>
    </tr>
  <tr>
   <td>
   <label for="expired" class="form-label">Expired:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['expired'] ?>" class="form-control" id="expired" name="expired">
</td>
    </tr>
  <tr>
   <td>
   <label for="pic" class="form-label">Pic:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['pic'] ?>" class="form-control" id="pic" name="pic">
</td>
    </tr>
  <tr>
    <td>
<textarea  class="form-control" id="keterangan" name="keterangan">     <?php echo $fetched_row['keterangan'] ?>       </textarea>
</td>
    </tr>
        <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
