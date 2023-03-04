<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "a.n.v.chaithu05@gmail.com"; // specify your email address here
  $subject = "Vulnerability Report";
  $message = "Asset: ".$_POST["assets"]."\n\n"; // modify this line to include all the fields from your form

  // send email
  if(mail($to, $subject, $message)){
      echo "Thank you for submitting your vulnerability report. We will review it soon.";
  } else{
      echo "Sorry, something went wrong. Please try again later.";
  }
}
?>
