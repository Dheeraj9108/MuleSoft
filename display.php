<?php

$server="localhost";                    //server name
$user="root";                           //user name
$password="";                           //password is empty for sql
$db="db_movies";                              //database name

$conn = mysqli_connect($server,$user,$password,$db);    //connecting to database
?>
<!Doctype HTML>
<html>
<head>
	<title>Employee details</title>
	<link rel="stylesheet" href="dashboardGB.css" type="text/css"/>
    <link rel="stylesheet" href="tablenew.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body>

<div id="main" >
    <h1> MOVIE DETAILS </h1>
    <br>
    <div class="header_fixed">
    <!-- <div class="card-body" >
        <div class="table-responsive">
        <table border ="5" class="table table-bordered"> -->
        <table>
        <thead>
        <tr>
            <th scope="col"> Sl No </th>
            <th scope="col"> Name </th>
            <th scope="col"> Actor </th>
            <th scope="col"> Actress </th>
            <th scope="col"> Director </th>
            <th scope="col"> Year </th>
        </tr>
        </thead>
        <tbody>
        <?php
             $query = "SELECT * FROM movie";     
             $res = mysqli_query($conn , $query);
             $total = mysqli_num_rows($res);
             $sl=0;  
             if($total!=0)
             {
             while($row=mysqli_fetch_array($res))
             {
                 $sl++;
        ?>
                
        <tr>
                <td><?php echo $sl; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['actor']; ?></td>
                <td><?php echo $row['actress']; ?></td>
                <td><?php echo $row['director']; ?></td>
                <td><?php echo $row['year']; ?></td>
        </tr>
        <?php } 
              }
              else
              {
                echo '<script type="text/javascript">';
                echo 'alert("No records found");';
                echo 'window.location.href="bdashboard.php";';
                echo "</script>";  
              }
            ?>
        </tbody>
        </table>
        <!-- </div> -->
    </div>
    <div class="container">
     <form action="actor_disp.php" method="POST">
       <div class="title" style="color:white;"><h1>Enter a actor name to fetch his movies</h1></div>
        <input type="text" name="actor_name" placeholder="Enter a actor name" required>
        <input type="submit" value="GO" />
        <div class="underline"></div>
            </div>
        
     </form>  
    </div>
</div>
</body>
</html