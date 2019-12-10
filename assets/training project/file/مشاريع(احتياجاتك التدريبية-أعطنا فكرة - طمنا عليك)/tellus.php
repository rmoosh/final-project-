<html>
<head>
<title>طمنا عليك</title>
<?php
require_once("header.php"); 
?>


<div id="content_area">

	<br/>
	
	 <ul id="menu">
<li><a href="index.php">الرئيسية</a></li> </ul><br>
		<h3> الغياب /التأخير</h3><br/>
      
	<form action="tellus.php" method="post" name="RForm" dir="rtl" align="center" onsubmit="myFunction()"/>
<center>	
	<table align="center">
		<tr>
			<td><label class="control-label">اليوم</label></td>
			<td><select name="attend_day" class="control-input" required>
    <option value="الأحد">الأحد</option>
    <option value="الاثنين">الاثنين</option>
    <option value="الثلاثاء">الثلاثاء</option>
    <option value="الأربعاء">الأربعاء</option>
    <option value="الخميس">الخميس</option>
  </select></td>				
		</tr>
		<tr>
			<td><label class="control-label">التاريخ</label></td>
			<td><input type="date" name="attend_date" class="control-input"   /></td>
		</tr>
		<tr>
			<td><label class="control-label">اسم الموظفة</label></td>
			<td><input type="text" name="Emp_name" class="control-input"  required/></td>
		</tr>
		<tr>
			<td><label class="control-label">البريد الرسمي</label></td>
			<td><input type="email" name="Email" class="control-input" required /></td>
		</tr>
		<tr>
			<td><label class="control-label">إدارة</label></td>
			<td><select name="dep_name" class="control-input" required>
    <option value="إدارة التنمية المهنية الأكاديمية">إدارة التنمية المهنية الأكاديمية</option>
    <option value="دارة التنمية المهنية التدريبية">إدارة التنمية المهنية التدريبية</option>
    <option value="إدارة المواردالبشرية والمادية">إدارة المواردالبشرية والمادية</option>
    <option value="إدارة الوحدات  المساندة">إدارة الوحدات  المساندة</option>
  </select></td>
		</tr>
		
		<tr>
			<td><label class="control-label"> نوع الوظيفة</label></td>
			<td><select name="emp_type" class="control-input" required>
    <option value="إداري">إداري</option>
    <option value="فني">فني</option>
  </select></td>
		</tr>
		<tr>
			<td><label class="control-label"> الحالة</label></td>
			<td><select name="attend_type" class="control-input" required>
    <option >تأخير</option>
    <option >غياب</option>
  </select></td>
		</tr>
		<td><label class="control-label"> أسباب التأخير/الغياب(مع ذكر المدة)</label></td>
			<td><textarea name="attend_why" class="control-input" required></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td align="center" style="margin: 0px auto;" colspan="5"><button type="submit" class="btn" name="submit1" >إرسال</button></td>
		</tr>
	</table>
</center>	
	</form>
	
	<script type="text/javascript">
function myFunction() {


alert(" ألف سلامة ,ماتشوف شر " );

}
	</script>
	<br><br>
	<?php
if(isset($_POST["attend_day"])){
			$conn = new mysqli($servername, $username, $password,$dbname);
			$conn->query("SET NAMES utf8");
			$conn->query("SET CHARACTER SET utf8");
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$attend_day= "'".$_POST['attend_day']."'";
			$attend_date ="'".$_POST['attend_date']."'";
            $date= date('Y-m-d', strtotime(str_replace('-','/', $attend_date)));
			$Emp_name = "'".$_POST['Emp_name']."'";
			$Email = "'".$_POST['Email']."'";
			$dep_name = "'".$_POST['dep_name']."'";
			$emp_type = "'".$_POST['emp_type']."'";
			$attend_type = "'".$_POST['attend_type']."'";
			$attend_why = "'".$_POST['attend_why']."'";
			
			$sql = "INSERT INTO tellus (attend_day, attend_date, Emp_name, Email, dep_name,emp_type,attend_type,attend_why) VALUES 
			(".$attend_day.", ".$date.", ".$Emp_name.", ".$Email.", ".$dep_name.",".$emp_type.",".$attend_type.",".$attend_why.")";
			$isSuccess = $conn->query($sql);
			if ($isSuccess === TRUE) {
				echo "<h3>تم إرسال بياناتك</h3>";
			} else {

				echo "<h3>خطأ:فشل الإرسال<br>" . $conn->error ."</h3>";
			}
			$conn->close();	
			} ?>
			
			
			<?php
if(isset($_POST["submit"])){

if(!empty($_POST['Emp_name']) && !empty($_POST['Password'])) {
	$Emp_name=$_POST['Emp_name'];
	$Password=$_POST['Password'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('minsdb') or die("Connection failed");

	$query=mysql_query("SELECT * FROM register1 WHERE Emp_name='".$Emp_name."' AND Password='".$Password."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['Emp_name'];
	$dbpassword=$row['Password'];
	}

	if($Emp_name == $dbusername && $Password == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$Emp_name;

	/* Redirect browser */
	header("Location: tabletellus.php");
	}
	} else {
	echo "اسم الموظفة/كلمة المرور غير صحيحة";
	}

} else {
	echo "كل الحقول مطلوبة";
}
}
?>
       __________________________
	   <h3> خاص بالمسؤول</h3><br>
<form action="" method="post" name="HForm" dir="rtl" align="center"/>
<center>	
	<table align="center">
		<tr>
			<td><label class="control-label">اسم المسؤول</label></td>
			<td><input type="text" name="Emp_name" class="control-input"  required></td>				
		</tr>
		<tr>
			<td><label class="control-label">كلمة المرور</label></td>
			<td><input  name="Password" type="Password" class="control-input" placeholder="xxxxxxxx"  required/></td>
		</tr>
		<tr>
			<td></td>
			<td align="center" style="margin: 0px auto;" colspan="5"><button type="submit"  name="submit" >تسجيل دخول</button></td>
		</tr>
		</center>
</table>
</div>


		
		
		
		<?php
require_once("footer.php"); 
?>