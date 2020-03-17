<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Receiving input</title>
    </head>
    <body>
        <h1>Thank you: got your input</h1>
        <?php
          $email = $_POST['email'];
          $contact = $_POST['contact'];
          print ("<br>Your email is $email");
          print ("<br>Contact preference is  $contact");
        ?>
    </body>
</html>