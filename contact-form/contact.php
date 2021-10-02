<html>

<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact-style.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="phone" placeholder="Phone No" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <div class="g-recaptcha" data-sitekey="6Ld3F3UcAAAAAO6XfJGNuCT1P0PSJY_hEG8oRPhp"></div>
            <input type="submit" name="submit" value="Send Message" class="submit-btn">
        </form>

        <div class="status">
            <?php /**
        if(isset($_POST['submit']))
        {
            $user_name = $_POST['name'];
            $phone = $_POST['phone'];
            $user_email = $_POST['email'];
            $user_message = $_POST['message'];

            $email_form = 'mosiur.n00b@gmail.com';
            $email_subject = 'New Form Submission';
            $email_body = "Name: $user_name.\n".
                            "Phone No: $phone.\n".
                            "Email Id: $user_email.\n".
                            "User Message: $user_message.\n".
            
            $to_email = "mosiur.n00b@gmail.com";
            $headers = "From: $email_from \r\n";
            $headers .= "Reply-To $user_email \r\n";
        } */
            ?>
        </div>

        <div>
</body>

</html>