<?php
if(empty($_POST['name'])) {$errors['name']=true;}
if(empty($_POST['email'])) {$errors['email']=true;}
if(empty($_POST['message'])) {$errors['message']=true;}

if(empty($errors))
  {
  $message = "
  Name : ".$_POST['name']."
  Email : ".$_POST['email']."
  Message : ".$_POST['message'];

  mail("tournier.anthony@laposte.net", "Formulaire portfolio",$message,"From:".$_POST['name']."<".$_POST['email'].">"."\nReply-To:".$_POST['email']);
  echo "Message sent !";
} else {
   echo "Message not sent...";
  }
?>
