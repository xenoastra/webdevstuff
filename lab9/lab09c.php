<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 9 Part C</title>
</head>

<h2>Problem 3</h2>
    <?php
    $connect = mysqli_connect("localhost", "vlobo", "Ounvidof", "vlobo") 
    or die(mysql_error());
    echo "<p style= 'font-size: 1.3em; font-family: Times New Roman;'> Successfully Connected to MySQL";

    $sql = "SELECT * FROM PHOTOGRAPHS WHERE loc= 'Ontario'";
    $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result) > 0) {
    
      while($row = mysqli_fetch_assoc($result)) {
        echo "<br>";
        echo "<br><p style= 'font-size: 1.5em; font-family: Times New Roman; font-weight: bold'>". $row["pic_num"] . " " . $row["sub"] . " " . $row["loc"] . " " . $row["date_taken"] ."<br>". $row["pic_url"]. " ";
      }
    } else {
      echo "<p style= 'font-size: 1.3em; font-family: Times New Roman;'> There aren't any photos in Ontario.";
    }
    
    
    ?>
    
</body>
</html>