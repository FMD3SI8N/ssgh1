<?php
  //3 lines of code to retrieve the form data sent via the "post" method
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['message'];

/*creation of the $msg variable and
 supplementally adding more details to it.*/
    $msg="EMAIL SENT FROM WEBSITE:\r\n " ;
    $msg.="Senders Name: $name \r\n ";
    $msg.="Senders E-mail: $email\r\n ";
    $msg.="Comment:    $comment ";


    $to="1994smurf@gmail.com";   //where is the email to be sent
    $subject="web Site Feedback";   //what subject should the email display
    $mailheaders="From: $email\r\n";  //what email  will display for the sender


    $formsent=mail($to, $subject, $msg, $mailheaders); //send the email
    if ($formsent)
     {
      echo "<p> Form sent successfully!</p>";
     }
     else
     {
      echo "<p> There is a problem. The form has not been sent !</p>";
     }
     ?>


    <p>Here are the details from your completed form!<br />
       <?php
       echo  $msg;
       ?>