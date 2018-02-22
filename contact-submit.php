<?php
$EmailFrom = Trim(stripslashes($_POST['Email']));
$Name = $_POST['Name'];
$EmailTo = "teatradecafe@warinternational.org"; // where message will be emailed to
$Subject = "New Message Received through the Tea Trade Website"; //email subject
$Message = Trim(stripslashes($_POST['Message'])); 
// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-error.html\">";
  exit;
}
// prepare email body text
$Body = "";
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
// send email 
$success = mail($EmailTo, $Subject, $Body, "From: hello@mattandabby.us");
// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-error.html\">";
}
?>