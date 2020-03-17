<html>
    <head>
        <title>Coin flip!</title>
    </head>
    <body>
        <font size="4" color="blue">Please Pick Heads or Tails! </font>
        
        <form action="GotFlip.php" method="PƠST">
            <?php
                print "<input type=\"radio\" name=\"pick\" value=0> Heads";
                print "<input type=\"radio\" name=\"pick\" value=1> Tails";
                print "<br>";
            ?>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
    </body>
</html>