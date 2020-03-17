<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Receiving input</title>
    </head>
    <body>
        <h1>Thank you: got your input</h1>
        <?php
          foreach ($_POST as $key => $value) {
            print ("<br>Your $key is $value");
          }
        ?>
    </body>
</html>