<?php
   if(isset ($_POST['submit'])){
       $Name=$_POST['name'];
       $Mailid=$_POST['mailid'];
       $Topic=$_POST['topic'];
       $Comment=$_POST['comment'];

       $to='techbeetle3@gmail.com'; 
       $subject='Form Submission';
       $message="Name :".$name."\n"."Mailid :".$Mailid."\n"."Topic :".$Topic."\n"."Comment :".$Comment."\n".;
       $headers="From: ".$email;

       if(mail($to, $subject, $message, $headers)){
           echo "<h1>Submitted Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
       }
       else{
           echo "Something went wrong!";
       }
   }
?>