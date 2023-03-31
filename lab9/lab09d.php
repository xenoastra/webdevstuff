<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 9 Part D</title>
</head>
    <h2 style="text-align: center; padding: 10px 10px;">Problem 4</h2>
    <div class="problem">
        <div class="form">
            <form id="form1" method= "POST" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h3>Problem 4</h3>

                <p>Pick a location:</p> 
                <div style="padding: 5px 10px;">
                    <input type="radio" id="location" name="location" value="home">
                    <label for="location">home</label><br>
                    <input type="radio" id="location" name="location" value="India">
                    <label for="location">India</label><br>
                    <input type="radio" id="location" name="location" value="United States">
                    <label for="location">United States</label><br>
                    <input type="radio" id="location" name="location" value="Canada">
                    <label for="location">Canada</label><br>
                    <input type="radio" id="location" name="location" value="Ontario">
                    <label for="location">Ontario</label><br>
                </div>

                <div style="padding: 5px 10px;">
                    <p>Pick a year: </p> 
                    <input type="radio" id="date" name="date" value="2022" >
                    <label for="date">2021</label><br>
                    <input type="radio" id="date" name="date" value="2021" >
                    <label for="date">2020</label><br>

                </div>

                <button type="submit" value="Click">Submit</button>
            </form>
        </div>
    </div>


    <?php
    $connect = mysqli_connect("localhost", "vlobo", "Ounvidof", "vlobo") 
    or die(mysql_error());

    $location = $year = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $location = $_POST["location"];
        $year = $_POST["date"];

        $sql = "SELECT * FROM PHOTOGRAPHS WHERE loc= '$location'";
        $result = mysqli_query($connect, $sql);
        
        if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            $url = $row["pic_url"];
            echo "<br>";
            echo "<br><img src=\"$url\" style= 'height: 500px; width: 600px; margin-left: 650px;'>";
            echo "<figcaption style= 'text-align: center; font-size: 1em; font-family: Times New Roman; font-weight: bold;'>picture" ;
        }
        } else {
        echo "<p style='text-align: center;'>No results.";
        }
    }

    ?>

</body>
</html>