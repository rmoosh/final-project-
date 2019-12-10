
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
  



$Emp_Id=@$_POST['Emp_Id'];  
$email_from=@$_POST['email_from'];
$email_to=@$_POST['email_to'];
$giveus_title=@$_POST['giveus_title'];
$giveus_topic=@$_POST['giveus_topic'];
$email_date=date('Y-m-d H:i:s');	
 if($email_from=="" || $email_to=="" || $giveus_title=="" || $giveus_topic=="" )
 {
	 
	 $msg["status"] = 0;
			$msg["txt"] = "يوجد حقل فارغ";
			die(json_encode($msg));
			exit();
	 
 }	 
 
 
 
    $to = $email_to;  
    $from = $email_from;  
    $emp_name = $_POST['emp_name'];
    $last_name = $_POST['last_name'];
    $subject = $giveus_title;
	$message =   $giveus_topic;
    $headers = "From:" . $from;
   
    mail($to,$subject,$message,$headers);
    
	//save email_date
	$stmt = $db->prepare("INSERT INTO sendemail(Emp_Id,email_from,email_to,giveus_title,giveus_topic,email_date) 
VALUES (:Emp_Id,:email_from,:email_to,:giveus_title,:giveus_topic,:email_date) ");

$stmt->execute(array(
':Emp_Id'=>$Emp_Id,
':email_from'=>$email_from,
':email_to'=>$email_to,
 ':giveus_title'=>$giveus_title,
 ':giveus_topic'=>$giveus_topic,
 ':giveus_Date'=>$email_date
 )) ;
	
	
   $msg["status"] = 1;
			$msg["txt"] = "تم الارسال بنجاح";
			die(json_encode($msg));
			exit();



			
 

 


?>

    
