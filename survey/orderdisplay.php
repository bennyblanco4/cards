<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Your Cards</title>
<meta charset="utf-8">
  
  <link rel="stylesheet" type="text/css" href="main.css">

  
  
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <meta name="viewport" content="width=device-width,initial-scale=1">
  



</head>


<style>

body {
  
  background-color: #fafdff;
  min-width: 450px;  

}

html body {
margin:0;
padding:0;
width: 100%;
height:100%;

}

.header {


  width:100%;
 height: 117px;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.05);
}

#logoimg {

  padding-left: 20px;
}

.logo {

padding-top: 40px;


}

.logout {
float: right;
margin-right: 65px;
margin-top:-10px;
text-decoration: none;
font-weight: bold;
text-align: center;
width: 144px;
height: 51px;
line-height:51px;
background: #E19930;
box-shadow: 3px 4px 4px rgba(24, 57, 107, 0.1);
border-radius: 13px;
color:white;
}

.logout:hover {


opacity: 0.8;
}

.username {

float:right;
margin: 0 ;
    
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight:bold;
    font-size: 24px;
    line-height: 33px;
    letter-spacing: 0.02em;
    color: #333333;
  padding-right: 20px;



}

.orders-container {


margin-top: 200px;
max-width: 1190px;
margin-left: 8%;
}

.orders-container-wrapper {



}


@media screen and (max-width: 860px) {.orders-container { margin-left: 0px; text-align: center;}}


.orders {

  
  display:flex;
  
  display:inline-block;

}

.order {

border: none;

  text-decoration: none;
  text-align: center;
  position: relative;
  display: inline-block;
  font-size: 16px;
  border-radius: 10px;
  cursor: pointer;
  
  margin-right: 20px;
margin-bottom:  20px;
background-color: #2C4052;



}

.addnew {


background-color: #365B69;
  border: none;
  
  opacity: 0.57;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 10px;
  cursor: pointer;
  transition: 0.3s;
  margin-right: 20px;
margin-bottom:  20px;
position: relative;

}


.order, .addnew {

 height: 383px;
  width: 374px;


}


.dots {


  
  width: 140px;
  

 
  

position:absolute;
top:240px;
right:0px;
}







.yourcards {

font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight:bold;
    font-size: 42px;
    line-height: 33px;
    letter-spacing: 0.02em;
    color: #333333;
position: absolute;
margin-top: 75px;
margin-left:8%;
min-width: 209px;
}





.addnew:hover {

  opacity: 1;



}


.plus {

border: none;
  
  width: 120px;
  
  
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 10px;
  cursor: pointer;
  
  

position:absolute;
top:108.5px;
right:127px;
}

.carddata {


position:absolute;
padding-left: 30px;
padding-top: 35px;
}

.card-data {


font-family: 'Roboto', sans-serif;
    font-style: normal;
    
    line-height: 33px;
    letter-spacing: 0.02em;
    color: white;
text-align: left;

}

#card-name {

font-weight:bold;
font-size: 28px;
padding-top: 25px

}

#card-age {
font-size: 21px;
padding-top: 5px;
}


#card-rel1 {

font-size: 16px;
padding-top: 10px;

}

#card-rel2 {

font-size: 21px;
font-weight:bold;

}


#card-date1 {

font-size: 16px;
padding-top: 15px;
padding-bottom: 10px;
}

#card-date2 {

font-size: 21px;
font-weight:bold;
border-style: solid;
  border-width: 1px;
  border-color: white;
  border-radius: 10px;
 width: 210px;
 height: 50px;
 text-align: center;
 vertical-align: center;
 line-height: 50px;

}





</style>


<body>
  




<div class="header">
        <div class="logo">
          <a href=""><img id="logoimg" src="group.svg" width="80px"></a>
    <a class="logout" href="/php/index.php?logout">Logout</a>
    <div class="username"> Hello  <?php  session_start(); echo $_SESSION['user_name'];?> ! </div>

        </div>
</div>


  <div class="yourcards"> Your cards</div>

<div class="orders-container-wrapper">

<div class="orders-container">

<?php

$servername = "localhost";
$username = "arjon";
$password = "arjonsadikaj";
$dbname = "login";


$username1 = $_SESSION['user_name'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/** $sql = "SELECT firstname, lastname, relationship FROM cards"; **/
$sql="SELECT firstname, lastname, relationship, date FROM `cards` WHERE `username`='$username1'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
   while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
  printf(

"


<div class='orders'>

<div class='order'>


<div class='carddata'>




<div class='card-data' id='card-name'>%s %s</div>

<div class='card-data' id='card-rel1'>Relationship to you</div>
<div class='card-data' id='card-rel2'>%s</div>
<div class='card-data' id='card-date1'>Date you want to send out the card</div>
<div class='card-data' id='card-date2'>%s</div>

</div>


<img class='dots' src='dots.svg'> 


</div>


</div>







", $row['firstname'], $row['lastname'],$row['relationship'],$row['date']);















}
} else {
    echo "0 results";
}







$conn->close();


?>

<a href="/php/add-record-form-card.php" class="addnew"><img class="plus" src="addnew.svg"></a>

</div>

</div>


</body>

 


</html>


