<?php  include('dbconnect.php');
    $sql = "DROP TABLE pictures";

    $delete = mysqli_query($connect, $sql);

    $sql = "CREATE TABLE pictures (
        picture_number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        subject VARCHAR(30) NOT NULL,
        location VARCHAR(30) NOT NULL,
        date_taken DATE,
        picture_url VARCHAR(200) NOT NULL UNIQUE);";

    if (! (mysqli_query($connect, $sql))) {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    
    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (1, 'CN tower', 'Ontario', '2021-06-11', 'https://i.imgur.com/MnweRaP.jpeg')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (2, 'Golden Temple', 'India', '2018-04-18', 'https://i.imgur.com/BFenZpS.jpeg')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (3, 'Washington', 'D.C, United States', '2020-08-21', 'https://i.imgur.com/NBd8lsF.jpeg')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    
    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (4, 'Golden sunset', 'India', '2012-02-24', 'https://i.imgur.com/FBnIa3p.jpeg')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (5, 'Beach', 'Maldives', '2018-05-03', 'https://i.imgur.com/aTjpkgP.jpeg')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (6, 'Glaciers', 'Iceland', '2017-05-20', 'https://images.pexels.com/photos/6270193/pexels-photo-6270193.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    
    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (7, 'Toronto', 'Ontario', '2019-09-17', 'https://i.imgur.com/FkHYerS.jpeg')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    
    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (8, 'Jardin Majorelle', 'Marrakech, Morocco', '2021-04-05', 'https://imgur.com/t/marrakech/LoK3G8i')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    
    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (9, 'Mountians', 'Bali, Indonesia', '2012-02-16', 'https://i.imgur.com/yXKS67W.jpeg')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    
    $sql = "INSERT INTO pictures (picture_number, subject, location, date_taken, picture_url) VALUES (10, 'Forest', 'Norway', '2017-05-23', 'https://images.pexels.com/photos/1453627/pexels-photo-1453627.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')";
    $stid=oci_parse($connect,$sql); 
    oci_execute($stid);
    if (mysqli_query($connect, $sql)) {
        echo "New record of picture was made sucessfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    

    


?>
<?php
    $localhost = "localhost";
    $username = "vlobo";
    $password = "Ounvidofa";
    $database = "vlobo"; 
    $connect = mysqli_connect($localhost, $username, $password, $database); 

    
?>