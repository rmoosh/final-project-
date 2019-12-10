
<?php 
// Prevent caching.
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: text/html; charset=utf-8');

 include 'sqlopen_pdo.php';
if (session_id() == "") 
   {session_start();} 
 

  $status  = 0; //
  $txt ="";
  $msg=array();


  
 


   if ($_POST && isset($_POST['isSelected'])) {
$giveus_Id=@$_POST['id'];	   
$giveus_status=0;
$stmt = $db->prepare("Update giveusidea  set giveus_status='$giveus_status' where giveus_Id='$giveus_Id' ") ;
$stmt->execute( array());

if($stmt){

   print(1);    
} else {

   print(0);
}

}

if ($_POST && isset($_POST['isNotSelected'])) {
$giveus_Id=@$_POST['id'];	
$giveus_status=1;
$stmt = $db->prepare("Update giveusidea  set giveus_status='$giveus_status' where giveus_Id='$giveus_Id' ") ;
$stmt->execute( array());
 

if($stmt){

   print(1);    
} else {

   print(0);
}

}
 
  
  
$stmt = null;
$db = null; //include 'sqlclose.php';


 


?>

    
