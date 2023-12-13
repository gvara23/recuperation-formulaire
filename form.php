<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo "Thank you $name for contacting us about $subject. One of our advisors will contact you either at $email or by telephone at $phone as soon as possible to process your request: $message";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>

<form action="form.php" method="post">
 <label for="name">Name:</label><br>
 <input type="text" id="name" name="name"><br>
 <label for="name">Surname:</label><br>
 <input type="text" id="name" name="name"><br>
 <label for="email">E-mail:</label><br>
 <input type="text" id="email" name="email"><br>
 <label for="phone">Phone number:</label><br>
 <input type="text" id="phone" name="phone"><br>
 <label for="subject">Subject:</label><br>
 <select id="subject" name="subject">
    <option value="Option 1">Option 1</option>
    <option value="Option 2">Option 2</option>
    <option value="Option 3">Option 3</option>
 </select><br>
 <label for="message">Message:</label><br>
 <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
 <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>