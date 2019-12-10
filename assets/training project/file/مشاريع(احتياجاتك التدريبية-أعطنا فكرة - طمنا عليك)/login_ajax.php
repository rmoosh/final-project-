<?php 
if (session_id() == "") 
   {session_start();} 
 
include 'sqlopen_pdo.php'; 

  $status  = 0; //
  $txt ="";
$msg=array();
	
$Email=@$_POST['Email'];
$Password=@$_POST['Password'];
$Emp_name ="";

 $Active="مفعل";	
	 
if($Email == ""  || $Password=="" ) 
{
$msg["status"] = 0;
$msg["txt"] = "يوجد حقل فارغ";
die(json_encode($msg));
exit();
}


$stmt = $db->prepare("select register.*  from register  where register.Email=? and register.Password=? ");
$stmt->execute(array($Email,$Password));						 
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
if(empty($rows))
{
	$msg["status"] = 0;
	$msg["txt"] ="خطأ في كلمة المرور أو اسم المستخدم";
	
die(json_encode($msg));
exit();

} 

$stmt = $db->prepare("select register.*  from register  where register.Email=? and register.Password=? and Active=? ");
$stmt->execute(array($Email,$Password,$Active));						 
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
if(empty($rows))
{
	$msg["status"] = 0;
	$msg["txt"] = "الحساب غير مفعل";
	
	die(json_encode($msg));
exit();

} 



if(!empty($rows))
{

$Emp_Id = $rows ['Emp_Id'];
$Emp_name = $rows ['Emp_name'];
$Level = $rows ['Level'];
$Email = $rows ['Email'];
 
	
}

$_SESSION['Emp_Id'] =$Emp_Id;
$_SESSION['Emp_name'] =$Emp_name;
$_SESSION['Level'] =$Level;
$_SESSION['Email'] =$Email;

//cookie
setcookie("Emp_Id", $Emp_Id, strtotime( '+30 days' ), "/", "", "", TRUE);
setcookie("Email", $Email, strtotime( '+30 days' ), "/", "", "", TRUE);
setcookie("Level", $Level, strtotime( '+30 days' ), "/", "", "", TRUE); 
setcookie("Emp_name", $Emp_name, strtotime( '+30 days' ), "/", "", "", TRUE); 
$msg["status"] = 1;
$msg["txt"] ="index.php";
die(json_encode($msg));
exit();	





?>

    
