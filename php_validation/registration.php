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
    }
}

?>
<html>
<head>
    <title>Registration Form</title>
    <style>
    body{background-color: pink;}
    table{
        background-color: lightgrey;
        margin-left: auto;
        margin-right: auto;
        margin-top:1em;
        padding:1em;
        box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19);
    }
    input[type=text],select{
        display:block;
        border: 2px solid rgb(130, 31, 31);
        border-radius:0.5cm;
        margin:8px;
        padding:1em;
    }
    input[type=number]{
        display:block;
        border: 2px solid rgb(130, 31, 31);
        border-radius:0.5cm;
        margin:8px;
        padding:12px;
    }
    input[type=date]{
        display:block;
        border: 2px solid rgb(130, 31, 31);
        border-radius:0.5cm;
        margin:8px;
        padding:12px;
    }
    input[type=password]{
        display:block;
        border: 2px solid rgb(130, 31, 31);
        border-radius:0.5cm;
        margin:8px;
        padding:12px;
    }
    #address{
        display:block;
        border: 2px solid rgb(130, 31, 31);
        border-radius:0.5cm;
        margin:8px;
        padding:12px;
    }
    </style>
</head>
<body>
    
    <form name="f1" method="POST">
        <table name="t1" >

            <tr><td>Name:</td><td><input type="text"></td></tr>

            <tr><td>Age:</td><td><input type="number" name="age"></td></tr>

            <tr><td>Gender:</td>
            <td><input type="radio" name="gender">Female</td></tr>

            <tr><td></td><td><input type="radio" name="gender">Male</td></tr>

            <tr><td>Address:</td><td><textarea placeholder="MUST include PIN code" rows="4" id="address"></textarea></td>

            <tr><td>Nationality:</td><td><input type="text"></td></tr>

            <tr><td>Phone:</td><td><input type="number"  name="phone" placeholder="atleast 10 digits" ></td></tr>

            <tr><td>Username:</td><td><input type="text" name="username" placeholder="username"></td></tr>

            <tr><td>Email:</td><td><input type="text"  name="email" placeholder="enter email" ></td></tr>

            <tr><td>Password:</td><td><input type="password" name="password" placeholder="password"></td></tr>

            <tr><td><input type="submit" value="SUBMIT" name="submit"></td></tr>

        </table>
    </form>
</body>

</html>

