<?php
require_once '../include.php';
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
if($act=="logout")
{
    logout();
}else if($act=="addAdmin")
{
    $mes=addAdmin();
}elseif ($act=="editAdmin")
{
    $mes=editAdmin($id);
    
}elseif($act=="delAdmin")
{
    $mes=delAdmin($id);
}
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Insert title here</title>
</head>
  <body>
    <?php 
      if($mes)
      {
          echo $mes;
      }
    ?>
     
  </body>
</html>