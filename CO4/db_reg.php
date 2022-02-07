<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    
    <form name="f1" method="POST">
        <table name="t1" >

            <tr><td>Name:</td><td><input type="text"></td></tr>

            <tr><td>Age:</td><td><input type="number" name="age"></td></tr>

            <tr><td>Phone:</td><td><input type="number"  name="phone" placeholder="atleast 10 digits" ></td></tr>

            <tr><td>Username:</td><td><input type="text" name="username" placeholder="username"></td></tr>

            <tr><td>Email:</td><td><input type="text"  name="email" placeholder="enter email" ></td></tr>

            <tr><td>Password:</td><td><input type="password" name="password" placeholder="password"></td></tr>

            <tr><td></td><td><input type="submit" value="SUBMIT" name="submit"></td></tr>

        </table>
    </form>
</body>

</html>
<?php

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $uppercase=preg_match('@[A-Z]@',$password);
    $lowercase=preg_match('@[a-z]@',$password);
    $number=preg_match('@[0-9]@',$password);
    $pattern='/[a-zA-Z0-9]@[a-zA-Z][.a-zA-Z$]/';
    $char=preg_match($pattern,$email);

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "phpreg";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if($conn){
    echo("Successfully connected");
    echo"<br>";
}
else{
    echo("error");
    echo"<br>";
}

if($username==""){
    echo("Enter a valid username <br>");
}
if($password=="" || strlen($password)<8){
    echo("Enter a valid password <br>");
}
else if(!$uppercase || !$lowercase || !$number){
    echo("Enter the password in  a valid format <br>");
} 
if($phone=="" || strlen($phone)!=10 ){
    echo("Enter a valid phone <br>");
}
if($email=="" || !$char){
    echo("Enter a valid email");
    echo'<br>';
}
}


    $sql = "INSERT INTO users(user_name,user_pwd) VALUES('{$username}','{$password}') ;";
if(mysqli_query($conn,$sql)){
    echo("Inserted successfully");
    echo'<br>';
}
else{
    echo("Insertion failed");
    echo'<br>';
}

$search = "SELECT * FROM users";
$data = mysqli_fetch_array($conn,$search);
echo('<table><tr><th>Username</th><th>Password</th></tr>');
while($result = mysqli_fetch_assoc($data)){
    echo '<tr><td>',$result['user_name'],'</td>',' ';
    echo '<td>', $result['user_pwd'],'</td>','</tr>',' ';
}

?>
