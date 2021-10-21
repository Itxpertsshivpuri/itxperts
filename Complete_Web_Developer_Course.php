<?php
    $con= new mysqli('localhost','u679156045_itxperts','Admin143@','u679156045_exam')or die("Could not connect to mysql".mysqli_error($con));
    session_start();
    if(isset($_POST['submit']))
    {   
        $name = $_POST['name'];
        $name = stripslashes($name);
        $name = addslashes($name);

        $birthday = $_POST['birthday'];
        $birthday = stripslashes($birthday);
        $birthday = addslashes($birthday);

        $email = $_POST['email'];
        $email = stripslashes($email);
        $email = addslashes($email);

        $mobile = $_POST['mobile'];
        $mobile = stripslashes($mobile);
        $mobile = addslashes($mobile);
        $str="SELECT email from website WHERE email='$email'";
        $result=mysqli_query($con,$str);
        
        if((mysqli_num_rows($result))>0)    
        {
            echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
            header("refresh:0;url=Complete_Web_Developer_Course.php");
        }
        else
        {
            $str="insert into website set name='$name',dob='$birthday',email='$email',mobile='$mobile'";
            if((mysqli_query($con,$str)))   
            {
                $to=$email; // Receiver Email ID, Replace with your email ID
		        $subject1='Registration @Itxperts';
		        $message="Congratulations!! $name\nYou have successfully registered with Itxperts\n\nYour registration details are as below \n\n"."Name :".$name."\n"."Mobile:".$mobile."\n\n\n"."Please note for any furthor activities/schedule you will get the email notification on you registered email address";
		        $headers="From: ".'info@itxperts.co.in';
		        if(mail($to, $subject1, $message, $headers)){
			        echo "<center><h3><script>alert('Congratulations!! $name You have successfully registered.We will contact you shortly');</script></h3></center>";
			         header("refresh:0;url=index.php");
		        }
		        else{
			            echo "Something went wrong!";
	            	}
                
            }    
          }
      }
  ?>



<!DOCTYPE html>
<html lang="eng">

<head>
    <title>The Complete Web Developer Course |Learn Web Development by building websites using HTML, CSS, JavaScript, PHP, MySQL & more! | Itxperts </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Web Designing, Web Development,web designer for schools,how can website design, website design price in india, website cost in india, affordable website designing, create a website, design my company website, responsive website design, cheap website designing company, website making cost, web designing, how to create a website, design new website for small business, dynamic website design, new website, how to make a website, dynamic website cost, website designing company, create professional website, small business website design cost, website design companies near me, low cost website designing, create new website for company, startup website design
    " />
        <meta property="og:image" content="http://www.itxperts.co.in/logo.png"/
        <link rel="image_src" href="http://www.itxperts.co.in/logo.png" />
        <meta property="og:image" content="logo.png" /> 
        <meta name="theme-color" content="#0068b7" />    
        <meta property="fb:pages" content="451583101719394" />
    
    <link href="reg/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="reg/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="reg/css/main.css" rel="stylesheet" media="all">

    
</head>

<body>
    

<div class="page-wrapper bg-white p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w700">
            
            <div class="card card-1">
                <div class="card-body">
                    <img src="https://www.itxperts.co.in/logo.png" height="100px" width="100px" class="img-responsive"/>
                    
                    <h1 class="title">The Complete Web Developer Course</h2>
                    <p><i>Learn Web Development by building websites using HTML, CSS, JavaScript, PHP, MySQL & more!</i></p>
                    <br><hr><br>
                    <div class="card-body" style="border:1px solid;">
                    <h2 class="title">What you'll learn?</h2>
                    <p><i>
                        <ul>
                            <li>Build websites and webapps</li>
                            <li>Build HTML-based mobile apps</li>
                            <li>Get a job as a junior web developer</li>
                            <li>Bild for projects on freelance websites</li>
                            <li>Start their own online business</li>
                            <li>Be a comfortable front-end developer</li>
                            
                            <li>Be proficient with databases and server-side languages</li>
                            
                        </ul>
                        </i></p>
                    </div>
                        
                        <br>
                    <div class="card-body" style="border:1px solid;">
                    
                    <h2 class="title">Course content</h2>
                    <p><i>
                        <ul>
                            <li>Getting started</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>Bootstrap</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>APIs</li>
                            
                        </ul>
                        </i></p>
                    </div>
                    
                    <br>
                    <div class="card-body" style="border:1px solid;">
                    
                    <h2 class="title">Requirements</h2>
                    <p><i>
                        <ul>
                           <li>No pre-knowledge is required - enthusiasm is all you need!</li>
                            <li>A PC or Mac is required</li>
                           <li>    No software is required in advance of the course (all software used in the course is free)</li>
 
                        </ul>
                        </i></p>
                    </div>
                    <br>
                    <div class="card-body" style="border:1px solid;">
                    
                    <h2 class="title">Description</h2>
                    <p><i>You’re here because you’re ready to start building professional, career-boosting websites.
Or maybe you’re coding already and want to take things to the next level? 
I’m here because I’m the creator of the best-selling, highest-rated coding courses—and I love to share my secrets with you.
</i></p>
                    </div>
                    <br>
                    <div class="card-body" style="border:1px solid;">
                    
                   <h2 class="title">Who this course is for:</h2>
                    <p><i>
                        <ul>
                           <li>Anyone who wants to learn to code</li>
                           <li>Anyone who wants to generate new income streams</li>
                            <li>Anyone who wants to build websites</li>
                            <li>Anyone who wants to become financially independent</li>
                            <li>Anyone who wants to start their own business or become freelance</li>
 
                        </ul>
                        </i></p>     
                    </div>
                    <br><br>
                    <h2 class="title">Enter your details</h2>
                   
                    <form method="post" action="Complete_Web_Developer_Course.php" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name" required>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            
                        </div>
                        
                        

                        

        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="email" placeholder="EMAIL ID" name="email" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="MOBILE NUMBER" name="mobile" required>
                                </div>
                            </div>
                         
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
 <center>&copy2021 <a href="https://www.itxperts.co.in/">Itxperts</a></center>
<br>
            </div>

        </div>
    </div>










<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?21198';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Itxperts",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://www.itxperts.co.in/logo.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"918966968576"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>





</body>
    <script src="reg/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="reg/vendor/select2/select2.min.js"></script>
    <script src="reg/vendor/datepicker/moment.min.js"></script>
    <script src="reg/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="reg/js/global.js"></script>

</html>