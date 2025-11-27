<?php
date_default_timezone_set('Asia/Kathmandu');

$currentDate = date("l, F j, Y");       
$currentTime = date("h:i A");           

$today = new DateTime();
$endOfYear = new DateTime(date("Y") . "-12-31");
$daysLeft = $today->diff($endOfYear)->days;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Date and Time</title>
</head>
<body>

<p>
    Today is <?php echo $currentDate; ?>, and the time is <?php echo $currentTime; ?>.
</p>

<p>
    Days remaining until the end of the year: <strong><?php echo $daysLeft; ?></strong>
</p>

</body>
</html>
