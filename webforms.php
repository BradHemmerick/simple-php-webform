<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Forms</title>
</head>
<body>
<?php
  echo '<h2> Thank you for submitting your request! </h2>';

  echo 'Here are your form details: <br><br>';
  echo "<b>Name</b>: " . $_GET['firstname'] . " " . $_GET['lastname'] . "<br>";
  echo "<b>Contact details</b>: " . $_GET['email'] . ", " . $_GET['phone'] . "<br>";
  echo "Looking to buy a " . $_GET['propertytype'] . "<br>";
?>
</body>
</html>
