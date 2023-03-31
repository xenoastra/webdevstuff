<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 9 Part E</title>
</head>

<p> Refresh the page for a random image </p>
<?php
$connect = mysqli_connect("localhost", "vlobo", "Ounvidof", "vlobo")
or die(mysql_error());

$sql = "SELECT * FROM PHOTOGRAPHS ORDER BY RAND() LIMIT 1";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) >0){
    while($row = mysqli_fetch_assoc($result)){
        $url = $row["pic_url"];
        echo "<br>";
        echo "<br>";
        echo "<img src=\"$url\" style = 'height: 500px; width: 600px; margin-left: 600px;'>";
        echo "<figcaption style= 'text-align: center; font-size: 2em; font-family: Times New Roman; font-weight: bold;'> picture";
    }

}
else{
    echo "<p style='text-align: center;'> No results for image";
}
?>
</body>
</html>