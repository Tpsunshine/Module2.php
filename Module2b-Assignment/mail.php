<?php
$receiver_email = "tpdawnsun@gmail.com";
$subject = "Enquiry about BMW320i 2021 Model";
$message = "Kindly send me the details of the new model available of 320i 2021 model";
/* Email validation: */
if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $receiver_email)) {
    echo "<h3>Invalid email address</h3>";
}
elseif (mail($receiver_email,$subject,$message)) {
    echo "<h4>Thank you for sending email</h4>";
}
else{
    echo "<h4>Can't send email to $receiver_email</h4>";
}
?>