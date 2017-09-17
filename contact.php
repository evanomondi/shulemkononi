<?php 
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];
 
$to = 'evanomondi7@gmail.com';
$subject = 'the subject';
$message = 'FROM: '.$name.'  Email: '.$email.'  Phone: '.$phone.'  Subject: '.$subject.'  Message: '.$message;
$headers = 'From: info@shulemkononi.co.ke' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your email was sent!"; // success message
}else{
echo "Invalid Email!";
}

 ?>
