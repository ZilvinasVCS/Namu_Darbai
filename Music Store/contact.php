<?php
    session_start();
    include('includes/header.php'); 

    $result = '';
    $name = '';
    $email = '';
    $message = '';
    $error = '';
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(!$_POST['name']) {
            $error .= 'Please enter your Name';
        }
        
        if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error .= "Please enter your email ";
        }
        
        if(!$_POST['message']) {
            $error .= "Please enter your message ";
        }
    }

    //Send Email

    if($error == '') {
        $from = 'dyanovyanovsky@gmail.com';
        $to = 'dyanovyanovsky@gmail.com';
        $subject = 'Message from website';
        $body = "From: $name ($email) \n Message \n $message";
        $headers = "MIME-Version: 1/0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <'.$from.'>' . "\r\n";
        
        if(mail($to,$subject,$body,$headers)) {
           $result = '<div class="alert alert-success">Mail Sent!<br>' . $error . '</div>'; 
        } else {
            $result = '<div class="alert alert-danger">Mail was not sent<br>' . $error . '</div>';
        }
        
        
        
    } else {
        $result = '<div class="alert alert-danger">There are some errors: <br>' . $error . '</div>';
    }

?>
<title>Contact Us</title>
</head>
<body>
<?php include('includes/navigation.php');?>
<!--Contact Form-->
<section id="form" class="start">
  <div class="container">
    <h1 class="form-header text-center">Contact Us</h1>
    <form action="contact.php" method="POST" class="contact-form">
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control" id="name" name="name">
          <p class="text-danger">Please enter your name</p>
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" class="form-control" id="email" name="email">
        <p class="text-danger">Please enter your email</p>
      </div>
      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea class="form-control" id="message" rows="4" name="message"></textarea>
        <p class="text-danger">Please enter your message</p>
      </div>
      <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
      <div class="form-group">
       <div class="text-danger">
        <?php echo $result; ?>
       </div>
      </div>
    </form>
  </div>
</section>
<!--End of Contact-->        
<?php include('includes/newsletter.php');?>     
<?php include('includes/footer.php');?>         