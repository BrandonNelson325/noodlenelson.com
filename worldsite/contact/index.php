<?php
session_start();

/*
 * Handle the contact page process
 */

if($_POST['messagesent'] == 'Send'){
//collect the data
    $first = $_POST['first'];
    $last= $_POST['last'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
//validate the data
    if(empty($first) or empty($last) or empty($email) or empty($subject) or empty($message)){
      $errors[] = 'All fiels are required.';
    }
         
 if($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
  $errors['security'] = 'Sorry, your entered security code does not match the security image.';
 }
 
 if(!empty($errors)){
        include 'contact.php';
        exit;
    } else {
        $to = 'Noodlenelson@gmail.com';
        $from = 'From:'.$email;
        $fullname = $first.' '.$last;
        $message .= "\n\n$fullname";
        
        $result = mail($to, $subject, $message, $from);
        if($result){
            $message = 'Thanks, your message has been sent!';
        }
        else{
            $message = 'Sorry, the message could not be sent.';
        }
    include 'contact.php';
    exit;
    }
        
} else {
 include 'contact.php';
 exit;
}
?> 