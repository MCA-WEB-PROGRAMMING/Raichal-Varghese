<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>employee Information</title>
</head>
<body>
    <div>
        <form name='f1' method="POST">
            <h1><u>Employee Information</u></h1>
            <table>
                <tr><td><b>1. Employee Id</b></td><td><input type="number" name="empid" id=""></td></tr>
                <tr><td><b>2. Employee Name</b></td><td><input type="text" name="empname"></td></tr>
                <tr><td><b>3. Job Name</b></td><td><input type="text" name="jobname"></td></tr>
                <tr><td><b>4. Manager Id</b></td><td><input type="number" name="managerid"></td></tr>
                <tr><td><b>5. Salary</b></td><td><input type="number" name="salary"></td></tr>
                <tr><td></td><td><input type="submit" name="submit" value="SUBMIT"></td></tr>
            </table>
        </form>
    </div>
    <div>
        <form name="f2" method="POST">
            <h3><u>Employees with salary greater than 35000</u></h3>
            <table>
                <tr><td><input type="submit" name="search" value="SEARCH"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $empid = $_POST['empid'];
    $empname = $_POST['empname'];
    $jobname = $_POST['jobname'];
    $managerid = $_POST['managerid'];
    $salary = $_POST['salary'];
    $conn = mysqli_connect("localhost","root","","employee");

if($conn){
    echo("Database connected");
    echo("<br>");
}
else{
    echo("Error");
}
$sql = "INSERT INTO emp(empid,emp_name,job_name,manager_id,salary) VALUES('{$empid}','{$empname}','{$jobname}','{$managerid}','{$salary}');";

if(mysqli_query($conn,$sql)){
    echo("Inserted Succesfully");
}
else{
    echo("Insertion Failed");
}
}
if(isset($_POST['search'])){
    $conn =mysqli_connect("localhost","root","","employee");
    $search = "SELECT emp_name,salary FROM emp WHERE salary>35000;";
    $data = mysqli_query($conn,$search);
    echo ("<table border='2'><tr><td>Employee Name</td><td>Salary</td></tr>");
    while($result = mysqli_fetch_assoc($data)){
        echo '<tr><td>' ,$result['emp_name'], '</td>',' ';
        echo '<td>', $result['salary'], '</td>',' ';
    }
}
?>