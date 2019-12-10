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

  <script type="text/javascript">
    
 
  
    $(document).ready(function(){
	$('#loginform').submit(function(e) {

		loginf();
		e.preventDefault();
			
			});
				
			});


function loginf()
{
 
	error(0);
	console.log($('#loginform').serializeArray());
	 //alert("Email: " + $('#Email').val() );

	$.ajax({
		type: "POST",
		url: "login_ajax.php",
		data:$('#loginform').serialize(),
		dataType: "json",
		success: function(msg){
			
			if(parseInt(msg.status)==1)
			{
				alert('مرحبا بك');
		
				window.location=msg.txt;
			}
			else if(parseInt(msg.status)==0)
			{
				error(1,msg.txt);
			}
		
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
		
		
		</style>



    </head>
    
    
    
    <body>
         
    <div class="news">
    <div class="nav">
      <ul>
        
          <li class="tutorials"><a  href="login.php">تسجيل دخول</a></li>
        <li class="tutorials"><a  href="register.php">تسجيل جديد</a></li>
        <li class="tutorials"><a  href="index.php">الرئيسية</a></li>
       		
        <li class="about"><a href="#">  مساعدة   </a></li>


      </ul>
    </div>
</div>
       
                   
         
           
                  
           
                    <div id="header" >
   
<img src="images/mins.png" alt="" width="250" height="80" class="image2"/>
 
 </div>


            <section>				
                <div id="container_demo"  >
                    <div >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    </div>
                    <div id="wrapper" >
                        <div id="login" class="animate form" style="left: 0px; top: 37px">
                            <form id="loginform" name="loginform"  method="post" data-ajax="false" >

                                <h1>تسجيل الدخول:</h1>
                           

 
                                <p > 
                                    <label for="Email" class="uname"  > البريد الالكتروني </label>
                                    <input id="Email" name="Email"  type="text" placeholder="myemail@mail.com"/>
                                </p>
                                
                                <p > 
                                    <label for="Password" class="youpasswd" > كلمة المرور </label>
                                    <input id="Password" name="Password" type="password" placeholder="xxxxxxxx" /> 
                                </p>
                                <p > 
									<input type="radio" name="loginkeeping" id="loginkeeping" value="loginkeeping" style="width: 28px" /> 
									<label for="loginkeeping">احفظ تسجيل دخولي</label>
								</p>
								 <div  id="error" style="color:red;font-size:large"></div>

                                <p class="login button"> 
                                    <input type="submit" value="دخول" /> 
								</p>
                                <p class="change_link">
									لست عضوا حتى الآن ؟
									<a href="register.php" class="to_register">انضم إلينا</a>
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