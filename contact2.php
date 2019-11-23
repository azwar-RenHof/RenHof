<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $to =$_POST['emailto'];;
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['emailfrom'];
    $headers =  "FROM : .$from.";
    
    if (mail($to,$subject,$message,$headers)){
        echo "Your message already sent to advertiser";
    }else{
        echo "fail";
    }
}
?>

<form action="contact.php" method="POST">
<label></label><br>
   <input  type="hidden" name="emailto" value="$email" ><br>


   <label>Subject</label><br>
   <input type="input" name="subject" ><br>

   <label>Message</label><br>
   <textarea name="message" col="45" row="6"></textarea><br>
   
    <label>From(Your email address)</label><br>
   <input type="input" name="emailfrom" ><br>

   
<input type="submit" value="Sent" name="submit">
  
</form>

</body>
</html>