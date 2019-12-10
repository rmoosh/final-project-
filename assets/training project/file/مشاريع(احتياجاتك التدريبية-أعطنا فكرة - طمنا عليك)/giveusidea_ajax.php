
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

$Emp_Id=@$_SESSION['Emp_Id'];
$giveus_type=@$_POST['giveus_type'];
$giveus_title=@$_POST['giveus_title'];
$giveus_topic=@$_POST['giveus_topic'];
$giveus_Date=date('Y-m-d H:i:s');

if( $Emp_Id==""  ) 
{
 
		$msg["status"] = 0;
		$msg["txt"] = "يجب التسجيل";
		die(json_encode($msg));
exit();
 
}

if( $giveus_type=="" || $giveus_title=="" || $giveus_topic==""  ) 
{
 
		$msg["status"] = 0;
		$msg["txt"] = "يوجد حقل فارغ";
		die(json_encode($msg));
exit();
 
}




$stmt = $db->prepare("select giveusidea.*  from giveusidea where Emp_Id=:Emp_Id and  giveus_title=:giveus_title ") ;

$stmt->execute( array(':Emp_Id'=>$Emp_Id,':giveus_title' => $giveus_title));

$row0 = $stmt->fetch();

	if($row0)
	{
		$msg["status"] = 0;
		$msg["txt"] = "هذا الموضوع مسجل مسبقا";
		die(json_encode($msg));
		exit();
    $stmt = null;

    }

 else
 {

$stmt = $db->prepare("INSERT INTO giveusidea(Emp_Id,giveus_type,giveus_title,giveus_topic,giveus_Date) 
VALUES (:Emp_Id,:giveus_type,:giveus_title,:giveus_topic,:giveus_Date) ");

$stmt->execute(array(':Emp_Id'=>$Emp_Id,
':giveus_type'=>$giveus_type,
 ':giveus_title'=>$giveus_title,
 ':giveus_topic'=>$giveus_topic,
 ':giveus_Date'=>$giveus_Date
 )) ;

$stmt = null;

			$msg["status"] = 1;
			$msg["txt"] = "giveusidea.php";
			die(json_encode($msg));
			exit();
}

$db = null; //include 'sqlclose.php';


 


?>

    
