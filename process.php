<?php $name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$formcontent="From:$name \n Message:$message";
$recipient="mlmfamilymedicine@gmail.com";
$subject="Inquiry from website";
$mailheader="Form: $email\r\n";
mail($recipient, $subject,$formcontent,$mailheader)or die("Error!");
echo "Your message has been sent. Click the browser's back button to return to MLM Family Medicine.";
?>