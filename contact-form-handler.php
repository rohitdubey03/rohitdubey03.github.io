<?php
    
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $visitor_email=$_POST['email'];
        $message=$_POST['message'];
        $mailFrom=$_POST['dubeyrohit1999@gmail.com']
        
        $mailTo = "dubeyrohit1999@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an e-mail from  ".$name.".\n\n".$message;


        mail($mailTo, $subject, $txt, $headers );
        header("Location: contact.html?mailsend");
    }


    $email_from='dubeyrohit1999@gmail.com'


?>