 <?php
if (session_id() == "") 
   {session_start();}
   

?>

 		


<!DOCTYPE html>
<html dir="rtl">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
 
        <title>شاشة التسجيل</title>
       
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
   
         <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link href="default.css" rel="stylesheet" type="text/css" />
		<script src="js/modernizr.js"></script> 
	  	<script src="js/jquery-2.1.4.js"></script>


 	<style type="text/css">
				
     input[type=checkbox],
  input[type=radio] {
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.07);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.07);
    background-color: #fff;
    color: #333;
    outline: 0;
    -webkit-transition: .05s border-color ease-in-out;
    transition: .05s border-color ease-in-out
  }

  input[type=checkbox]:focus,
  input[type=radio]:focus {
    border-color: #5b9dd9;
    -webkit-box-shadow: 0 0 2px rgba(30,140,190,.8);
    box-shadow: 0 0 2px rgba(30,140,190,.8)
  }

  input[type=checkbox],
  input[type=radio] {
    border: 1px solid #bbb;
    background: #fff;
    color: #555;
    clear: none;
    cursor: pointer;
    display: inline-block;
    line-height: 0;
    height: 16px;
    margin: -4px 4px 0 0;
    outline: 0;
    padding: 0!important;
    text-align: center;
    vertical-align: middle;
    width: 16px;
    min-width: 16px;
    -webkit-appearance: none;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    -webkit-transition: .05s border-color ease-in-out;
    transition: .05s border-color ease-in-out
  }

  input[type=radio] {
    -webkit-border-radius: 50%;
    border-radius: 50%;
    margin-right: 4px;
    line-height: 10px
  }
  input[type=checkbox] {
    -webkit-border-radius: 50%;
    border-radius: 50%;
    margin-right: 4px;
    line-height: 10px
  }

  input[type=checkbox]:checked:before,
  input[type=radio]:checked:before {
    float: left;
    display: inline-block;
    vertical-align: middle;
    width: 16px;
    font: 400 21px/1 dashicons;
    speak: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
  }

  input[type=checkbox]:checked:before {
    content: '\f147';
    margin: -3px 0 0 -4px;
    color: #1e8cbe
  }

  input[type=radio]:checked:before {
    content: '\2022';
    text-indent: -9999px;
    -webkit-border-radius: 50px;
    border-radius: 50px;
    font-size: 24px;
    width: 6px;
    height: 6px;
    margin: 4px;
    line-height: 16px;
    background-color: #1e8cbe
  }		
		
		
		.auto-style1 {
		font-size: large;
	}
		#bo{border:grey 3px solid;
		margin-left:200pt;
		font-size:50px;
		font-weight:bold;}
		
		#go{font-size:20px;
		font-weight:bold;}
		</style>



    </head>
  
    
    
    <body>
   <?php
 	   $Emp_Id=@$_SESSION['Emp_Id'];
		$Emp_name=@$_SESSION['Emp_name'];
		$Level=@$_SESSION['Level'];
	
		?>        
    <div class="news">
    <div class="nav">
      <ul>
       <?php
      if(isset($_SESSION["Emp_Id"]) && isset($_SESSION["Emp_name"]))
      {
      ?>
      
      <li class="tutorials"><a  href="logout.php">تسجيل خروج</a></li>
      
      <?php
      }
      else
      {
      ?>

        <li class="tutorials"><a  href="login.php">تسجيل دخول</a></li>
         <?php
      }
		?>
        
        
        <li class="tutorials"><a href="trainerneeds.php">احتياجاتك التدريبية </a></li>
        <li class="tutorials"><a href="giveusidea.php">أعطنا فكرة </a></li>
		   <?php
      if($Level==2 )
      {
      ?>

		<li class="tutorials"><a href="tellusrpt.php">طمنا عليك </a></li> 
		 <?php
      }
      else
      {
      ?>
  		<li class="tutorials"><a href="tellus.php">طمنا عليك </a></li> 

         <?php
      }
		?>
		<li class="tutorials"><a href="stratigicplan.php">الخطةالاستراتيجية</a></li>
        <li class="tutorials"><a  href="index.php">الرئيسية</a></li>
       


      </ul>
    </div>
</div>
       
                   
         
           
                    <div id="header" >
    <h1 >الإدارة العامة للتدريب والابتعاث</h1>
	
	
<img src="images/mins.png" alt="" width="250" height="80" class="image2"/>
 </div>

            <section>				
                <div id="container_demo"  >
    
 <h3 class="auto-style1" > 
 <?php
 

if(!isset($_SESSION["Emp_Id"]) && isset($_SESSION["Emp_name"])){
	 مرحبا :   echo $Emp_name; 
	 }
?>
                               
  </h3>
            
                
                    <div >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    </div>
                    <div id="wrapper" >
                        <div id="login" class="animate form" style="left: 0px; top: 37px">
                            <form id="loginform" name="loginform"  method="post" data-ajax="false" >

                           
	<div>
		<span class="auto-style1">
	<br> <br></span><h2 id ="bo"class="auto-style1">
	
	الرؤية
	</h2>
<br class="auto-style1">	
		<span  id="go"class="auto-style1">الريادة في التنمية المهنية التعليمية لبناء مجتمع معرفي.
<br><br></span><h2 id ="bo"class="auto-style1">
الرسالة
</h2>
<br class="auto-style1"> 
		<span id="go" class="auto-style1">تسعى الادارة العامه لتدريب والابتعاث الى التميز في التطوير المهني لشاغلات الوظائف التعليمية من خلال تأهيل وتدريب نوعي متخصص وفق معايير مهنيه معتمده بتوظيف فعال للتقنية واستثمار امثل للشراكات المحلية والعالمية 
<br>
		</span>
</div>	
		
 
                                
                            </form>
                        </div>

             
						
                    </div>
                </div>  
            </section>
  <div id="footer" ><br>
<p>

<em>
جميع الحقوق محفوظة للإدارة العامة للتدريب والابتعاث </em></p>
</div>
     
    </body>
    
</html>