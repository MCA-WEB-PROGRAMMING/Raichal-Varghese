<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    
<?php
$player = array("Virat Kohli","Rohit Sharma","M S Dhoni","Hardhik Pandya","Jasprit Bumrah","Mohammed Shami");
echo "<table cellpadding=20 border=2><tr><th></th><th>Indian Cricket Players</th></tr>";
$count = 0;
foreach($player as $p){
    echo "<tr>";
    $count = $count+1;
    echo "<td>$count</td><td>$p</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>