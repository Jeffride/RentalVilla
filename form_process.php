<!DOCTYPE html>
<html lang="Eng">

<head>
  <title>Form</title>
  <link rel="stylesheet" href="formcss.css"/>


<?php
$msg = "Booking enquiry from $_POST['datein'] until $_POST["dateout"]\n
        name = $_POST['name']\n
        email = $_POST['email']";
mail("attridej@gmail.com", "Booking Enquiry", $msg);

?>
</head>
<body>
  Thanks <?php echo $_POST["name"];?> for submiting your details, <br>
   a member of staff will contact you via your email address: <?php echo $_POST["email"];?><br>
</body>
</html>
