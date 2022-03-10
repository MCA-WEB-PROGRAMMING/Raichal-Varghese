<html>
    <body bgcolor="Pink">
        <center>
        <?php
            $num=array("Rohan","Zara","Helen","Kiran","Marina","Austin");
            echo "<br><br>";
            echo "<h3><u>Array</u></h3>";
            echo "<br><br>";
            echo " Inserted array displayed using <b>print_r</b> : ";
            print_r($num);
            echo "<br><br><br>";
            echo " Array sorted in <u>Ascending Order</u> using <b>asort</b>:  ";
            asort($num);
            print_r($num);
            echo "<br><br><br>";
            echo " Array sorted in <u>Descending Order</u> using <b>arsort</b>:  ";
            arsort($num);
            print_r($num);
            echo "<br>";
        ?>
        </center>
    </body>
</html>