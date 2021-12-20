<!DOCTYPE html>
<html lang="en">
<title>AV Esports</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles.css">
<head>
  <link rel="stylesheet" href="pogchamp.css">
</head>
<style>
@import url('http://fonts.cdnfonts.com/css/monument-extended');
h3 {font-family: Courier, monospace; font-weight: 1000;}
body {
  font-family: "Monument Extended";
  background-color: rgb(235, 235, 235);
}
::-webkit-scrollbar {
    display: none;
}
.mySlides {display: none}
.lecard {
  opacity: 0.9;
}

<?php
$connection = mysqli_connect("localhost","root", "1234", "roman");
?>

</style>
<body style = "background-image: url(https://i.redd.it/10degajn59s41.png) " >

    <div class="container2">
        <div class="text-wrapper">
            <div class="text-1 text">The One The Only</div>
            <div class="text-2 text">The One The Only</div>
            <div class="text-3 text">The One The Only</div>
            <div class="text-4 text">The One The Only</div>
            <div class="text-5 text">The One The Only</div>
            <div class="text-6 text">THE TROPHIES</div>
            <div class="text-7 text">The One The Only</div>
            <div class="text-8 text">The One The Only</div>
            <div class="text-9 text">The One The Only</div>
            <div class="text-10 text">The One The Only</div>
            <div class="text-11 text">The One The Only</div>
        </div>
    </div>    

<!-- Navbar -->
<div class="container" style = "display:inline">
  <div class="w3-top">
    <div class="lecard center w3-center container3 w3-khaki">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
      <br>
      <br>
      <i class="fa fa-bars"></i></a>
      <a href="Homepage.html" class=".center w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-yellow">
        <br>
        <br>HOME</a>
      <a href="PlayersPage.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-black w3-hover-text-yellow">
        <br>
        <br>PLAYERS</a>
      <a href="EventsPage.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-black w3-hover-text-yellow">
        <br>
        <br>EVENTS</a>
      <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-black w3-hover-text-yellow">
        <br>
        <br>ACHIEVEMENTS</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-padding-large w3-button w3-hover-black w3-hover-text-yellow" title="More">
          <br>
          <br>MORE <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="store.html" class="w3-bar-item w3-button w3-hover-black w3-hover-text-yellow">Merchandise</a>
          <a href="Sponsors.html" class="w3-bar-item w3-button w3-hover-black w3-hover-text-yellow">Sponsors</a>
        </div>
      </div>
      <a href="javascript:void(0)" class="w3-padding-large w3-hover-black w3-hide-small w3-right w3-hover-text-yellow">
        <br>
        <br><i class="fa fa-search"></i></a>
    </div>
  </div>


<div class = " container-bottom" style = " margin:200px">
<table class="table table-dark ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Placement</th>
      <th scope="col">Prize Pool</th>
      <th scope="col">Achievements</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
            $connection = mysqli_connect('localhost', 'root', '1234', 'roman');
            $sql = "SELECT Num,Placement,Prize_pool, Achievements FROM trophies ORDER BY Num";
            $result = mysqli_query($connection, $sql);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['Num'] .'</td>';
                    echo '<td>'. $row['Placement'] .'</td>';
                    echo '<td>'. $row['Prize_pool'] .'</td>';
                    echo '<td>'. $row['Achievements'] .'</td>';
                    echo '</tr>';
                }
            }
        ?>

</table>
<div>

</body>
