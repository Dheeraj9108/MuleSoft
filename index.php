<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('RRR' , 'rajesh' , 'kamath' , 'adarsh' , 2021),('dgf 2' , 'yashraj' , 'nirja' , 'suneel' , 2012),('vikram' , 'sunny deol' , 'lakshmi' , 'prakash' , 2011),('don' , 'shiva' , 'priyanka' , 'mendon' , 2021)";       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movies added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>