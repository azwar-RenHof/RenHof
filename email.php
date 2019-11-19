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
    $headers = "From: twentyfive2596@gmail.com";
    
    if (mail($to,$subject,$message,$headers)){
        echo "Your message already sent to advertiser";
    }else{
        echo "fail";
    }
}
?>

<form action="contact.php" method="POST">
<label>To</label><br>
   <input type="input" name="emailto" ><br>


   <label>Subject</label><br>
   <input type="input" name="subject" ><br>

   <label>Message</label><br>
   <textarea name="message" col="45" row="6"></textarea>
   
<input type="submit" value="submit" name="submit">
  
</form>

</body>
</html>