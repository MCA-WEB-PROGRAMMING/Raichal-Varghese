<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee</title>
</head>
<body>
    <div>
        <form method="POST">
            <h1><u>Employee Information</u></h1>
        <table cellpadding="5">
            <tr><td><b>1. Employee ID</b><td><input type="number" name="emp_id"></td></td></tr>
            <tr><td><b>2. Name</b><td><input type="text" name="name" ></td></td></tr>
            <tr><td><b>3. Job</b><td><input type="text" name="job" ></td></td></tr>
            <tr><td><b>4. Manager_id</b><td><input type="number" name="manager_id"></td></td></tr>
            <tr><td><b>5. Salary</b><td><input type="number" name="salary"></td></td></tr>
            <td><input type="submit" value="Submit" name="submit"></td></tr>
            <tr><td></td></tr><br>
        </table>
        </form>
    </div>
    <div>
    <h1><u>Employees With Salary greater than 35000</u></h1>
    <form name = "f2" method="POST">
        <table cellpadding = "5">
            <td><input type="submit" value="Search" name="search"></td></tr>
            <tr><td></td></tr><br>
        </table>
    </form>
    </div>
</html>

<?php

if(isset($_POST['submit'])){
    $emp_id = $_POST['emp_id'];
    $name = $_POST['name'];
    $job = $_POST['job'];
    $manager_id = $_POST['manager_id'];
    $salary = $_POST['salary'];
    $conn = mysqli_connect("localhost","root","","employees");
if($conn){
    echo("Database Successfully connected");
    echo"<br>";
}
else{
    echo("error");
    echo"<br>";
}

$sql = "INSERT INTO emp(emp_id,emp_name,job_name,manager_id,salary) VALUES('{$emp_id}','{$name}','{$job}','{$manager_id}','{$salary}');";

if(mysqli_query($conn,$sql)){
    echo("Inserted successfully");
    echo'<br>';
}
else{
    echo("Insertion failed");
    echo'<br>';
}
}

if(isset($_POST['search'])){
    $conn = mysqli_connect("localhost","root","","employees");

    $search = "SELECT * FROM emp where salary>35000 ";
    $data = mysqli_query($conn,$search);
    echo("<b>Search</b>");
    echo("<table colspan='5' border='2'><tr><th>EMP_id</th><th>Name</th><th>Job</th><th>Manager_id</th><th>Salary</th></tr>");
    while($result = mysqli_fetch_assoc($data)){
        echo '<tr><td>',$result['emp_id'],'</td>',' ';
        echo '<td>',$result['emp_name'],'</td>',' ';
        echo '<td>',$result['job_name'],'</td>',' ';
        echo '<td>',$result['manager_id'],'</td>',' ';
        echo '<td>',$result['salary'],'</td>',' '; 
    }
    
}

?>