<html>
    <head>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>
                        Enter the meter no.<input type='number' name='num'>
                    </td>
                </tr>
                    <td>
                        Enter the Number of Units:<input type='number' name='unit'>
                    </td>
                <tr>
                    <td>
                        Enter the category:
                        <select name="tariff">
                            <option>select</option>
                            <option>Rural</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="SUBMIT">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
    $num=$_POST['num'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff == "Rural"){
        if($unit>0 && $unit<=50){
            $a=10;
            $amount=(($unit*0.5)+$a);
            echo "Amount";
        }
        else if($unit>50 && $unit<=100){
            $a=10;
            $amount=(($unit*0.7)+$a);
        }
        else if($unit>100 && $unit<=250){
            $a=10;
            $amount=(($unit*1.2)+$a);
        }
        else if($unit>250 && $unit<=400){
            $a=10;
            $amount=(($unit*1.7)+$a);
        }
        else if($unit>400){
            $a=10;
            $amount=(($unit*2.5)+$a);
        }
    }
    if($tariff == "Residential"){
        if($unit>0 && $unit<=50){
            $a=25;
            $amount=(($unit*0.8)+$a);
            echo "Amount";
        }
        else if($unit>50 && $unit<=100){
            $a=25;
            $amount=(($unit*1.5)+$a);
        }
        else if($unit>100 && $unit<=250){
            $a=25;
            $amount=(($unit*1.9)+$a);
        }
        else if($unit>250 && $unit<=400){
            $a=25;
            $amount=(($unit*2.5)+$a);
        }
        else if($unit>400){
            $a=25;
            $amount=(($unit*3.5)+$a);
        }
    }
    if($tariff == "Commercial"){
        if($unit>0 && $unit<=50){
            $a=35;
            $amount=(($unit*1.5)+$a);
            echo "Amount";
        }
        else if($unit>50 && $unit<=100){
            $a=35;
            $amount=(($unit*2)+$a);
        }
        else if($unit>100 && $unit<=250){
            $a=35;
            $amount=(($unit*3.2)+$a);
        }
        else if($unit>250 && $unit<=400){
            $a=35;
            $amount=(($unit*3.7)+$a);
        }
        else if($unit>400){
            $a=35;
            $amount=(($unit*4)+$a);
        }
    }
    echo "Your Meter Number is:".$num;
    echo "<br>";
    echo "Units are:".$unit;
    echo "<br>";
    echo "Extra Charge:".$a;
    echo "<br>";
    echo "Total $unit units of charges Rs.:".$amount;
    echo "<br>";
}


?>