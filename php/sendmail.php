<?php
$to      = 'sangam.sunar@deerwalk.edu.np';
$subject = 'Test email from PHP mail()';
$message = "
<html>
<head>
  <title>Test Email</title>
</head>
<body>
  <h2>Hello from PHP</h2>
  <p>This is an <strong>HTML</strong> email sent with mail().</p>
</body>
</html>
";

// To send HTML mail, set Content-type header
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

// Additional headers
$headers .= "From: Sender Name kirtanmalakar@gmail.com\r\n";
$headers .= "Reply-To: sangam.sunar@deerwalk.edu.np\r\n";

// Send
$success = mail($to, $subject, $message, $headers);

if ($success) {
    echo "Mail sent successfully";
} else {
    echo "Failed to send mail";
}