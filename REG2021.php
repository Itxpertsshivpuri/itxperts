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

        $gender = $_POST['gender'];
        $gender = stripslashes($gender);
        $gender = addslashes($gender);

        $class = $_POST['class'];
        $class = stripslashes($class);
        $class = addslashes($class);

        $school = $_POST['school'];
        $school = stripslashes($school);
        $school = addslashes($school);


        $subject = $_POST['subject'];
        $subject = stripslashes($subject);
        $subject = addslashes($subject);

        $email = $_POST['email'];
        $email = stripslashes($email);
        $email = addslashes($email);

        $mobile = $_POST['mobile'];
        $mobile = stripslashes($mobile);
        $mobile = addslashes($mobile);
        $str="SELECT email from students WHERE email='$email'";
        $result=mysqli_query($con,$str);
        
        if((mysqli_num_rows($result))>0)    
        {
            echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
            header("refresh:0;url=REG2021.php");
        }
        else
        {
            $str="insert into students set name='$name',dob='$birthday',gender='$gender',class='$class',school='$school',subject='$subject',email='$email',mobile='$mobile'";
            if((mysqli_query($con,$str)))   
            {
                $to=$email; // Receiver Email ID, Replace with your email ID
		        $subject1='Registration @Itxperts';
		        $message="Congratulations!! $name\nYou have successfully registered with Itxperts\n\nYour registration details are as below \n\n"."Name :".$name."\n"."Class:".$class."\n"."School:".$school."\n"."Subject:".$subject."\n"."Mobile:".$mobile."\n\n\n"."Please note for any furthor activities/schedule you will get the email notification on you registered email address";
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
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Itxperts Registration">
    <meta name="author" content="Itxperts">
    <meta name="keywords" content="Itxperts Registration">

    <!-- Title Page-->
    <title>Itxperts | Students Registration form|CBSE|CS|IP|C,C++,Java,Python,PHP,HTML,MYSQL and other programming langiage trainning institute in shivpuri Madhya pradesh, india</title>

    <!-- Icons font CSS-->
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
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <p style="color:blueviolet;">@Itxperts, Year 2021</p><br>
                    <form method="post" action="REG2021.php" enctype="multipart/form-data">
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
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" required>
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class" required>
                                    <option disabled="disabled" selected="selected">CLASS</option>
                                    
                                    <option>CPCT(2021)</option>
                                    <option>11th CBSE</option>
                                    <option>12th CBSE</option>
                                    <option>11th MPBOARD</option>
                                    <option>12th MPBOARD</option>
                                    <option>10th ICSE</option>
                                    <option>B.Tech.</option>
                                    <option>BSC(IT)</option>
                                    <option>BCA</option>
                                    <option>MCA</option>
                                    <option>MSC(IT)</option>
                                    <option>Other</option>
                                   
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="school" required>
                                    <option disabled="disabled" selected="selected">SCHOOL</option>
                                    <option>St. Benedict School Shivpuri</option>
                                    <option>Happy Days School Shivpuri</option>
                                    <option>Kendriya Vidhya ITBP, Shivpuri</option>
                                    <option>Geeta Public School, Shivpuri</option>
                                    <option>Shivpuri Public School, Shivpuri</option>
                                    <option>Eastern Height Public, Shivpuri</option>
                                    <option>Ganesha Blessed Public School, Shivpuri</option>
                                    <option>Bal Shiksha Niketan , Shivpuri</option>
                                    <option>Guru Nanak School, Shivpuri</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject" required>
                                    <option disabled="disabled" selected="selected">SUBJECT</option>
                                     <option>CPCT(2021)</option>
                                   
                                    <option>COMPUTER SCIENCE (CS)</option>
                                    <option>INFORMATICS PRACTICES (IP)</option>
                                    <option>C-LANGUAGE</option>
                                    <option>C++</option>
                                    <option>JAVA</option>
                                    <option>PYTHON</option>
                                    <option>PHP</option>
                                    <option>.NET</option>
                                    <option>C#</option>
                                    <option>MYSQL</option>
                                    <option>ORACLE</option>
                                    <option>HTML</option>
                                    <option>CSS</option>
                                    <option>WESITE DESIGNING</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
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
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="reg/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="reg/vendor/select2/select2.min.js"></script>
    <script src="reg/vendor/datepicker/moment.min.js"></script>
    <script src="reg/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="reg/js/global.js"></script>

</body>
</html>
<!-- end document-->
