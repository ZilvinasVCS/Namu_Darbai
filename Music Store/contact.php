<?php
    $msg = "";
    $msgClass = "";
    
    if(filter_has_var(INPUT_POST, 'submit')) {
        //Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        if(!empty($email) && !empty($name) && !empty($message)) {
            //Passed
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = 'Please, use valid email address';
                $msgClass = 'alert-danger';
            } else {
                $toEmail = 'dyanovyanovsky@gmail.com';
                $subject = 'New Message from '.$name;
                $body = '<h2>New Message</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                ';
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset= UTF-8" . "\r\n";
                $headers .= "From: " .$name. "<".$email.">" . "\r\n";
                
                if(mail($toEmail, $subject, $body, $headers)) {
                    $msg = 'Your email successfully sent!';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Something went wrong';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            $msg = 'Please, kindly fill all fields';
            $msgClass = 'alert-danger';
        }
    }
?>
<?php include('includes/header.php'); ?>
<title>Contact Us</title>
</head>
<body>
<?php include('includes/navigation.php');?>
<!--Contact Form-->
<section id="form" class="start">
  <div class="container">
   <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
   <?php endif; ?>
    <h1 class="form-header text-center">Contact Us</h1>
    <form action="mailer.php" method="POST" class="contact-form">
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>
      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea class="form-control" id="message" rows="4" name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>
<!--End of Contact-->        
<?php include('includes/newsletter.php');?>     
<?php include('includes/footer.php');?>         