 <?php
if (session_id() == "") 
   {session_start();}
   

?>

<!DOCTYPE html>
<html dir="rtl">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    
        <title>أعطنا فكرة</title>
         <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
   
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
         <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link href="default.css" rel="stylesheet" type="text/css" />
		
		<script src="js/modernizr.js"></script> 
	  	<script src="js/jquery-2.1.4.js"></script>
	  	<script src="js/bootstrap.min.js"></script>


 <script type="text/javascript">
 

    $(document).ready(function(){
	$('#giveusideaform').submit(function(e) {

		giveusideaf();
		e.preventDefault();
			
			});
				
			});



function giveusideaf()
{


	console.log($('#giveusideaform').serializeArray());
	//alert("user_Locker_Id: " + $('#user_Locker_Id').val() );

	$.ajax({
		type: "POST",
		url: "giveusidea_ajax.php",
		data:$('#giveusideaform').serialize(),
		dataType: "json",
		success: function(msg){
			
			if(parseInt(msg.status)==1)
			{
				alert("تم الحفظ بنجاح");
				
				window.location=msg.txt;
			
			}
			else if(parseInt(msg.status)==0)
			{
				alert(msg.txt);
			
			}
			
			//hideshow('error',0);
		}
	});

}




function hideshow(el,act)
{
	if(act) $('#'+el).css('visibility','visible');
	else $('#'+el).css('visibility','hidden');
}

function error(act,txt)
{
	hideshow('error',act);
	if(txt) $('#error').html(txt);
}



 </script>



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
		
		
		</style>



    </head>
    
    
    
    <body>
         
    <div class="news">
    <div class="nav">
      <ul>
          <?php
        $Emp_Id=@$_SESSION['Emp_Id'];
		$Emp_name=@$_SESSION['Emp_name'];
		$Level=@$_SESSION['Level'];

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
	 
	
<img src="images/mins.png" alt="" width="250" height="80" class="image2"/>
 </div>

            <section>				
                <div id="container_demo"  >
                    <div >
                   
                    </div>
               
                             
                           
                           
                                <h1> الاقتراحات::</h1> 
                             <?php
                             if($Level==2)
         					{
                        
                             ?>
                        <h1 class="text-left"><a href="complaint.php">لاستعراض الشكاوى </a></h1>
  
                          <?php
                          }
                          ?>
                          
                          
                          
<table class="table table-inverse">                            
	    


  <thead>
    <tr>
      <th class="text-center" style="height: 33px"><strong>العنوان</strong></th>
      <th class="text-center" style="height: 33px"><strong>الموضوع</strong></th>
      <th class="text-center" style="height: 33px"><strong>الاسم</strong></th>
      <th class="text-center" style="height: 33px"><strong>التاريخ</strong></th>
      

    </tr>
 </thead>

<?php
include 'sqlopen_pdo.php';
$giveustype="إقتراح";
		$stmt = $db->prepare("select giveusidea.*,register.*   from giveusidea  INNER JOIN register ON (register.Emp_Id = giveusidea.Emp_Id)  where giveus_type='$giveustype' ");
					
					$stmt->execute(array()) ;
				
				if(!empty($stmt))
				{
				while($rows = $stmt->fetch(PDO::FETCH_ASSOC))
				{	
				
				?>
								
				<tbody>
    <tr>
      <td > <strong> <?php echo $rows["giveus_title"]; ?>  </strong>  </td>
      <td><strong><?php echo $rows["giveus_topic"]; ?> </strong> </td>
       <td><strong><?php echo $rows["Emp_name"];?> </strong> </td>
      <td><strong><?php echo $rows["giveus_Date"];?> </strong> </td>
     

    </tr>
     
  </tbody>
				
							
			
				
				<?php
				}
				}
?>
</table>

          </div>

</section>

            <section>				
                <div id="container_demo"  >
                    <div >
                   
                    </div>
                    <div id="wrapper" >
                               <div id="giveusidea" class="animate form" style="left: 0px; top: 37px">
                           
                            <form name="giveusideaform" id="giveusideaform"   class="statform_trigger" method="post" data-ajax="false">
                                <h2 class="text-center"> إضافة شكوى /اقتراح:</h2> 
                                                              
                                <p > 
                       

									<label for="giveus_type">اختر العملية:</label>	
									<select name="giveus_type" id="giveus_type"  data-native-menu="false" style="width: 117px; height: 25px">	
														
									<option value="شكوى">شكوى </option>
										<option value="إقتراح">إقتراح</option>
						
									</select>
							 </p>
 								<p > 
                                    <label for="giveus_title" >العنوان</label>
                                    <input id="giveus_title" name="giveus_title" type="text"  value="" />
                               </p>
                              <p > 
                                    <label for="giveus_topic" >الموضوع</label>
                                     <span dir="rtl">
		  						<textarea name="giveus_topic" value="" style="width: 431px; height: 263px" style="width: 468px; height: 175px"></textarea></span>                               
		  						</p>

                                 
                               
                                
                                 <div  id="error" style="color:red;font-size:large"></div>

                                <p class="signin button" style="text-align: center"> 
									
									
								<button  name="add" id="add" type="submit" data-role="button" data-mini="false"  value="حفظ" >حفظ</button>
					
							  <button  name="clear" id="clear" type="reset" data-role="button"  >جديد</button>
							
												
								</p>

        
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