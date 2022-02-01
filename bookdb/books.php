<!DOCTYPE html>
<html>
<head>
    <title>Book Information</title>
</head>
<body>

    <h1><u>Book Information</u></h1>
    <div>
    <form name = "f1" method="POST">
        <table cellpadding="5">
            <tr><td><b>1. Accession Number</b><td><input type="number" name="accession_no"></td></td></tr>
            <tr><td><b>2. Title</b><td><input type="text" name="title" ></td></td></tr>
            <tr><td><b>3. Author</b><td><input type="text" name="author" ></td></td></tr>
            <tr><td><b>4. Edition</b><td><input type="number" name="edition"></td></td></tr>
            <tr><td><b>5. Publisher</b><td><input type="text" name="publisher"></td></td></tr>
            <td><input type="submit" value="Submit" name="submit"></td></tr>

            <tr><td></td></tr><br>
        </table>
    </form>
    </div>
    <div>
    <form name = "f2" method="POST">
        <table cellpadding = "5">
            <tr><td><input type="text" placeholder="search with title" name="titlee"></td>
            <td><input type="submit" value="Search" name="search"></td></tr>
            <tr><td></td></tr><br>
        </table>
    </form>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $accession_number = $_POST['accession_no'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];
    $conn = mysqli_connect("localhost","root","","book");
if($conn){
    echo("Database Successfully connected");
    echo"<br>";
}
else{
    echo("error");
    echo"<br>";
}
$sql = "INSERT INTO bookinfo(accession_number,title,author,editionn,publisher) VALUES('{$accession_number}','{$title}','{$author}','{$edition}','{$publisher}');";
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
    $titlee = $_POST['titlee'];
    $conn = mysqli_connect("localhost","root","","book");

    $search = "SELECT * FROM bookinfo where title='$titlee' ";
    $data = mysqli_query($conn,$search);
    echo("<b>Search Book</b>");
    echo("<table colspan='5' border='2'><tr><th>Accession Number</th><th>Title</th><th>Author</th><th>Edition</th><th>Publisher</th></tr>");
    while($result = mysqli_fetch_assoc($data)){
        echo '<tr><td>',$result['accession_number'],'</td>',' ';
        echo '<td>',$result['title'],'</td>',' ';
        echo '<td>',$result['author'],'</td>',' ';
        echo '<td>',$result['editionn'],'</td>',' ';
        echo '<td>',$result['publisher'],'</td>',' '; 
    }
    
}

?>