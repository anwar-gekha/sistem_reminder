<?php
include_once 'dbconfig.php';

if(isset($_GET['view_id']))
{
 $sql_query="SELECT * FROM membership_users WHERE id=".$_GET['view_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
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
        <label>Core PHP Crud functions - <a href=""_blank"></a></label>
    </div>
</div>

 <table align="center">
   <tr>
   <th colspan="5">id: <?php echo $fetched_row['id'] ?></th>
</tr>
 <tr>
   <th colspan="5">memberID: <?php echo $fetched_row['memberID'] ?></th>
</tr>
 <tr>
   <th colspan="5">email: <?php echo $fetched_row['email'] ?></th>
</tr>
 </table>
</center>
</body>
</html>
