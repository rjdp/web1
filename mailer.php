<?php
$to = "rjdp9736@gmail.com, buggydebugger@gmail.com";
$subject = "HTML email";

$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$message=$_POST["message"];

// Check that data was sent to the mailer.
        if ( $name=="" OR $message=="" OR $phone=="" $email="") {
            // Set a 400 (bad request) response code and exit.
            
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }


$email_content = "
<html>
<head>
<title>HTML email</title>
</head>
<body style='font-family: arial,sans-serif;'>
<div style='max-width:600px;margin-left:auto;margin-right:auto;background-color:#1295c9;color:white;padding:5px'>
<div style='text-align:center;padding:5px 0;background-color: white;'>
<a href='http://divyaeyeclinicpune.com' style='text-decoration:none;color:#fff;/* background-color: white; */' target='_blank'><img width='130' src='https://openmerchantaccount.com/img/plainlogobrandsv2out.png' style='width: 35%;margin-left: -6%;
'></a><br>
 <b style='color:black;'>Query Details!</b></div>
 <div style='text-align:center;background-color:#f4f4f4;padding:10px;margin-top:6px'>
 


 <div style='background-color:white;padding:10px;border:1px solid #ddd;margin-top:10px;border-bottom:4px solid #ddd'>
 <div style='color:#1295c9;margin-top:3px'><b>Name</b>&nbsp;</div>
 <hr color='#ddd' size='1'>
 <div style='margin-top:5px;display:inline-block;color:#333;width:187px'>
 <b>". $name ."</b>
 </div>
 </div>

  <div style='background-color:white;padding:10px;border:1px solid #ddd;margin-top:10px;border-bottom:4px solid #ddd'>
 <div style='color:#1295c9;margin-top:3px'><b>Email-Id</b>&nbsp;</div>
 <hr color='#ddd' size='1'>
 <div style='margin-top:5px;display:inline-block;color:#333;width:187px'>
 <b>". $email ."</b>
 </div>
 </div>

 <div style='background-color:white;padding:10px;border:1px solid #ddd;margin-top:10px;border-bottom:4px solid #ddd'>
 <div style='color:#1295c9;margin-top:3px'><b>Phone</b>&nbsp;</div>
 <hr color='#ddd' size='1'>
 <div style='margin-top:5px;display:inline-block;color:#333;width:187px'>
 <b>". $phone ."</b>
 </div>
 </div>

  <div style='background-color:white;padding:10px;border:1px solid #ddd;margin-top:10px;border-bottom:4px solid #ddd'>
 <div style='color:#1295c9;margin-top:3px'><b>Message</b>&nbsp;</div>
 <hr color='#ddd' size='1'>
 <div style='margin-top:5px;display:inline-block;color:#333;width:187px'>
 <b>". $message ."</b>
 </div>
 </div>

</div>
</div>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <rjdp9737@gmail.com>' . "\r\n";
$headers .= 'Cc: sharmarajdeep4@gmail.com' . "\r\n";


if (mail($to,$subject,$email_content,$headers)) {
 
            echo "Thank You..! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
           
            echo "Oops! Something went wrong and we couldn't send your message.";
        }


?>