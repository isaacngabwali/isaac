<?php

$EmailFrom = Trim(stripslashes($_POST['name'])).", Your Web Visitor".;
$EmailTo = " isaacngabwali@gmail.com";
$Name = Trim(stripslashes($_POST['name']));
$Subject = Trim(stripslashes($_POST['subject'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  header("location:index.php?success= Walaaa!!, Message has been sent.");
}
else{
  header("location:index.php?fail= aaahhh!!, something went wrong!!!, try again.");
}
?>