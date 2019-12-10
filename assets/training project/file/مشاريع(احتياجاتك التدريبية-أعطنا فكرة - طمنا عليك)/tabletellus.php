<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:tellus.php");
} else {
?>
<!DOCTYPE html>
<html dir="rtl">
<head> <title>بيانات الموظفين</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid black;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
require_once("header.php"); 
?>

<?php
if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
   die(mysql_error());
	mysql_select_db('minsdb') or die("Connection failed");
	mysql_query("SET NAMES utf8");
			mysql_query("SET CHARACTER SET utf8");
 $selectSQL = 'SELECT * FROM `tellus`';
 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
?>
<br>
 <ul id="menu">
<li><a href="tellus.php">رجوع</a></li>
<li><a href="index.php">الرئيسية</a></li>
<li><a href="OutTellus.php">خروج</a></li> </ul><br>
		<h3> الغياب /التأخير</h3>
<br>
<center>
<table > 

 <tr>
    <th>اسم الموظفة</th>
    <th>اليوم</th>
    <th>التاريخ</th>
    <th>البريد الرسمي</th>
    <th>الإدارة</th>
	 <th>نوع الوظيفة</th>
    <th>الحالة</th>
    <th>سبب الغياب/التأخير</th>  </tr>


<tbody>
  
   <?php
   
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['Emp_name']}</td><td>{$row['attend_day']}</td><td>{$row['attend_date']}</td>
		  <td>{$row['Email']}</td><td>{$row['dep_name']}</td><td>{$row['emp_type']}</td>
		  <td>{$row['attend_type']}</td><td>{$row['attend_why']}</td></tr>\n";
        }
      }
    ?>
</table>
</center>
<?php
  }

?>
	
		<?php
require_once("footer.php"); 
?>

<?php
}
?>