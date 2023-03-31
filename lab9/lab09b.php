<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lab 9 Part B</title>
</head>
<body style="background: linear-gradient(to right, #C45CC4, #5CC4B6, AF23D6); font-family: Times New Roman;">
    <h2>Problem 2</h2>
    <?php
    $connect = mysqli_connect("localhost", "vlobo", "Ounvidof", "vlobo") 
    or die(mysql_error());
    echo "<p style= 'font-size: 1.3em; font-family: Times New Roman;'> Successfully Connected to MySQL";

    echo "<br>";
    echo "<p style= 'font-size: 1.3em; font-family: Times New Roman;'>Sorted from newest to oldest:";

    $sql = "SELECT * FROM PHOTOGRAPHS";
    $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result) > 0) {
    
      while($row = mysqli_fetch_assoc($result)) {
        echo "<br>";
        echo "<p style= 'font-size: 1.5em; font-family: Times New Roman; font-weight: bold'>". $row["pic_num"] . " " . $row["sub"] . " " . $row["loc"] . " " . $row["date_taken"] ."<br>". $row["pic_url"]. " ";
      }
    } else {
      echo "No results.";
    }
    
    
    ?>
</body>
</html>