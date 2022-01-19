<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
$name = array("Jane","Helen","Adhi","Rahul");
echo "Array:";
print_r($name);
echo "<br>";
echo "Array sorted using asort:";
asort($name);
print_r($name);
echo "<br>";
echo "Array sorted using arsort:";
arsort($name);
print_r($name);
?>
</body>
</html>