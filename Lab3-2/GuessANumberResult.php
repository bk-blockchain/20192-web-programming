<html>
    <head><title>Guess a number</title></head>
    <body>
        <font size="8">Result:</font>
        <br/>
        <?php
            srand((double) microtime() * 10000000);
            $guess_num = (int)$_POST["number"];
//            print gettype($guess_num);
            $rand_num = rand(0, 100);
//            print $guess_num;
//            print $rand_num;
            if($guess_num < $rand_num){
                print "Wrong. Please try a higher number. You have guessed 1 time!";
            }
            else{
                print "Wrong. Please try a lower number. You have guessed 1 time!";
            }
        ?>
    </body>
</html>