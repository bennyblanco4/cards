<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
<meta charset="utf-8">
  
  <link rel="stylesheet" type="text/css" href="main.css">

  
  
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="Submit card reciever information">
  <meta name="keywords" content="information,name,lastname,gender">
  <meta name="author" content="DW">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  



</head>


<style>


/* Hide all steps by default: */

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


.logo {

padding-top: 40px;


}


.tab {
  display: none;
  margin-top: 50px;

}


#tit1 {
    margin: 0 ;
    margin-left: 10px;
    padding-top: 21px;
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight:bold;
    font-size: 24px;
    line-height: 33px;
    letter-spacing: 0.02em;
    color: #333333;
    padding-bottom: 50px;
    padding-top: 40px;
}


#p1 {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 19px;
    letter-spacing: 0.02em;
    color: #3BA616;
    float:left;
    margin-left: 30px;
       
}


#p2 {

margin: 0;
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 19px;
    letter-spacing: 0.02em;
    color: #3BA616;
    float:left;
    margin-left: 20px;



}


#p3 {

margin: 0;
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 19px;
    letter-spacing: 0.02em;
    color: #3BA616;
    float:left;
    



}


.title1 {


max-width: 550px;

}



.title2 {


max-width: 400px;

}


.title3 {

width: 241px;
float:;


}

.tab {


 
}


#kindofgreeting, #typeofcard {

    margin:0;
    background: #3150CF;
    border-radius: 10px 10px 10px 10px;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    display: inline;
    width: 250px;
    height: 55px;
    color: white;
    text-align: center;

    font-size: 15px;
    font-family: 'FontAwesome','roboto';
    text-align-last: center;
    -webkit-appearance: none;
    text-transform: uppercase;

}




#typeofcard > option{
    background: white;
    color: #444;



}


#kindofgreeting > option {

  background: white;
    color: #444;

}

#nextBtn {



   
    display: block;
    margin: 0 auto;
  padding: 12px 57px;
    background: #3BA616;
    box-shadow: 2px 4px 4px rgba(154, 225, 130, 0.57);
    border-radius: 10px;
    text-align: center;
  text-decoration: none;
  text-transform: none;
  font-family: 'Open Sans', sans-serif;
    font-style: normal;
    font-weight: bold;
    font-size: 16px;
    letter-spacing: 0.02em;
    color: #FFFFFF;
     margin:0 auto;
     margin-top:70px
}


#nextBtn:hover {

  background:#2f8712 ;
}

#nextBtn.focus, #nextBtn:focus {
    outline: 0;
    box-shadow: none!important;
}

label, h1 {


    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 21px;
    letter-spacing: 0.02em;
    color: #333333;
   float:left;
   

}





.dategender {

display: flex;

}


input[type=text]{
    margin: 23px 0 30px 0;
    width: 445px;
    height: 43px;
    background: #FFFFFF;
    border: hidden;
    box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.1);
    border-radius: 1px;
   font-size: 20px;
   padding-left: 10px;
}


.reciever {

width: 400px;


}


.firstlastrelationship {


padding-top: 0px;
width: 100%;

}



.gender {


  margin-left: 140px;
}

#firstName,#lastName, #relationship {


   width: 100% !important;
   max-width: none !important;



}



.logout {
float: right;
padding-right: 30px;
margin-top: 6.5px;
text-decoration: none;
font-weight: bold;

}

a:visited {color:green;}

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

#plantab {



}


.plans {

  
  display:flex;
  
  display:inline-block;


}

.subscription {

width: 250px;

transition: 0.2s;

}

#middlesubscription {

padding-left: 15px;
padding-right: 15px;


}

.subscription:hover {




}

.plans-container {

text-align: center;
height:300px;

}


#logoimg {

  padding-left: 20px;
}







.cards input[type=radio]{
    display:none
}

.cards input[type=radio]:checked + .card{
-webkit-box-shadow:inset 0px 0px 0px 5px blue;
    -moz-box-shadow:inset 0px 0px 0px 5px blue;
    box-shadow:inset 0px 0px 0px 5px blue;
}


.cards-container {
text-align: center;
max-width: 1100px;
}




.cards  {

  
  display:flex;
  
  display:inline-block;


}


.card {

margin-left: 20px;
margin-bottom:20px;
background-color: grey;
width:250px;
height:250px;
cursor:pointer;
border-radius: 10px;
position: relative;
line-height: 250px;
}

.bday, .ann  {

display:inline-block;
text-align: center;
text-decoration: none;

}




</style>




<body>






        <div class="header">
        
        <div class="logo">
           <a href="index.php"><img id="logoimg" src="survey/group.svg" width="80px">
    <a class="logout" href="/php/index.php?logout">Logout</a>
    <div class="username"> Hello  <?php  session_start(); echo $_SESSION['user_name'];?> ! </div>

        </div>

         
        


        
       </div>
  



<!--<h2> Hello  <?php  session_start(); echo $_SESSION['user_name'];?> ! </h2>

 <a href="/php/index.php?logout">Logout</a> -->
  
        




<form action="insert-card.php" method="post" id="regForm" style=";">
	





 
 




  <!-- One "tab" for each step in the form: -->
  






 
<center>




  <div class="tab" style="margin-top: 50px;">




<div class="title1">
 
 <div id="p1">QUESTION 1.</div>
          


 <div id="tit1">What kind of greeting would you like to send?</div>


</div>


<select id="kindofgreeting" name="kindofgreeting" style="margin-bottom: 42px";>
  <option  value="select">Select &#xf0d7;</option>
  <option value="1">Birthday</option>
  <option value="2">Anniversary</option>
</select>
</p>



  </div>
  







  <div class="tab">


<div class="title2">

<div id="p2">QUESTION 2.</div>
          


 <div id="tit1">What kind of cards do you enjoy ?
</div>


</div>

<select id="typeofcard" name="typeofcard" style="margin-bottom: 42px;">
  <option value="">Select...</option>
  <option value="1">Crazy and Goofy</option>
  <option value="2">Dark or Nervous Humor</option>
  <option value="3">Campy Humor</option>
  <option value="4">Heartfelt and Meaningful</option>
  <option value="5">Beautiful</option>
  <option value="6">Theme oriented</option>
  <option value="7">Cute</option>
  <option value="8">Wishful Thinking</option>
  <option value="9">Romantic</option>
</select>



  </div>


<center>

  <div class="tab">


<div class="cards-container">

  

  <div class="cards">
    
   <div class="bday cute">
    <input type="radio" name="cardselection" value="1" id="r1"/>
    <label class="card" for="r1">Birthday/Cute</label>
    </div>

    
<div  class="bday hnm crazy">
    <input type="radio" name="cardselection" value="2" id="r2" />
    <label class="card" for="r2">Birthday /Heartfelt/crazy</label>
    </div>

 <div  class="bday theme wishful">   
    <input type="radio" name="cardselection" value="3" id="r3" />
    <label class="card" for="r3">Birthday/theme/wishful</label>
    
 </div>  

   <div  class="bday campy romantic"> 

    <input type="radio" name="cardselection" value="4" id="r4" />
    <label class="card" for="r4">Birthday/campy/romantic</label>
    
 </div>   

 <div  class="ann cute theme">   
    <input type="radio" name="cardselection" value="5" id="r5" />
    <label class="card" for="r5">Anniversary/cute/theme</label>
    </div>

      
  <div  class="ann hnm campy">
  <input type="radio" name="cardselection" value="6" id="r6" />
  <label class="card" for="r6">Anniversary/Heartfelt/campy</label>
</div>

  <div  class="ann campy beautiful" >
  <input type="radio" name="cardselection" value="7" id="r7" />
  <label class="card" for="r7">Anniversary /campy/beautiful</label>
</div>

  <div  class="ann campy dark"  >
  <input type="radio" name="cardselection" value="8" id="r8" />
  <label class="card" for="r8">Anniversary/campy/ dark</label>
</div>


</div>


</div>


    <h2>Glitter:</h2>
  <input type="radio" name="glitter" value="yes">Yes
  <input type="radio" name="glitter" value="no">No
    
  
   


   </div>
  






</center>








<div class="tab">


<div class="reciever" style="padding-left:20px; padding-right: 20px;">

<div class="title3" style="margin-bottom: 50px; float:left;">

<div id="p3">QUESTION 3.</div>
<div id="tit1" style="padding-bottom: 0px; margin-left: -15px;">Reciever Information</div>

</div>
        



<div class="firstlastrelationship">
 
  

  <label for="firstName" style="position: absolute; margin-top: 100px;">First Name</label>
        
      

        <input type="text" name="firstname" id="firstName">
    

 


 <label for="lastName">Last Name</label>
        
    
    
        <input type="text" name="lastname" id="lastName">
    




<label for="relationship">Relationship to Person</label>
        
      
        <input type="text" name="relationship" id="relationship">
    


<!-- <h1>Relationship to Person</h1>



<select id="relationship" name="relationship">
  <option value="">Select...</option>
  <option value="Friend">Friend</option>
  <option value="Best Friend">Best Friend</option>
  <option value="Kids">Kids</option>
  <option value="Girls">Girls</option>
  <option value="Boys">Boys</option>
  <option value="Dad">Dad</option>
  <option value="Mom">Mom</option>
  <option value="Stepdad">Stepdad</option>
  <option value="Stepmom">Stepmom</option>
  <option value="Grandma">Grandma</option>
  <option value="Grandpa">Grandpa</option>
  <option value="Son">Son</option>
  <option value="Daughter">Daughter</option>
  <option value="Brother">Brother</option>
  <option value="Wife">Wife</option>
  <option value="Husband">Husband</option>
  <option value="Grandson">Grandson</option>
  <option value="Granddaughter">Granddaughter</option>
  <option value="Teacher">Teacher</option>
  <option value="Co-worker">Co-worker</option>
  <option value="Nephew">Nephew</option>
  <option value="Neice">Neice</option>
  <option value="Dog">Dog</option>
  <option value="Cat">Cat</option>
</select>

-->

</div>






<center>

<div class="dategender">


<div class="date">

<label for="start"><h1>Date of greeting</h1></label>

<p></p>

<input type="date" id="date" name="date"
       value="2019-07-22"
       min="" max="">


</div>



<div class="gender">

<h1>Gender</h1>

 <p></p>

<select id="gender" name="gender">
  <option value="">Select...</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>


</div>


</div>
  


</center>

</div>

</div>

</center>


 




<!-- plan selection page -->


<div class="tab" width="100%">

<div class="plans-container">

<div class="plans">
    
   
<a href=""><img class="subscription" src="survey/plan1.svg"></a>
    
    <a href=""><img class="subscription" id="middlesubscription" src="survey/plan2.svg" ></a>

    
    <a href=""><img class="subscription" src="survey/plan3.svg"></a>


</div>

</div>


</div>



  </div>
  







</center>



<center>

  <div style="overflow:auto;">
    <div>
      <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> -->
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Submit</button>
    </div>
  

  </div>
  
</center>

  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
     <span class="step"></span>
  </div>
</form>




<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>



<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>





<script>

$(function(){
            
              $('#kindofgreeting').change(function(){
                if($(this).val()==1){
                     $('.ann').hide();
                }else if($(this).val()==2){
                                
                                $('.bday').hide();
                } 
              
               

              })            
        })

$(function(){
            
               $('#typeofcard').change(function(){
               
               if($(this).val()==1){


                  $('.bday:not(.crazy)').hide();          
                  $('.ann:not(.crazy)').hide();
  

               }
                
              

                else if($(this).val()==2){


                  $('.bday:not(.dark)').hide();          
                  $('.ann:not(.dark)').hide();
  

               }

                else if($(this).val()==3){


                  $('.bday:not(.campy)').hide();          
                  $('.ann:not(.campy)').hide();
  

               }

                
                else if($(this).val()==4){
                                
                     $('.bday:not(.hnm)').hide();          
                     $('.ann:not(.hnm)').hide(); 

                }               
               



                else if($(this).val()==5){


                  $('.bday:not(.beautiful)').hide();          
                  $('.ann:not(.beautiful)').hide();
  

               }

                else if($(this).val()==6){


                  $('.bday:not(.theme)').hide();          
                  $('.ann:not(.theme)').hide();
  

               }
                
                else if($(this).val()==7){


                  $('.bday:not(.cute)').hide();          
                  $('.ann:not(.cute)').hide();
  

               }


               else if($(this).val()==8){


                  $('.bday:not(.wishful)').hide();          
                  $('.ann:not(.wishful)').hide();
  

               }
                 

              else if($(this).val()==9){


                  $('.bday:not(.romantic)').hide();          
                  $('.ann:not(.romantic)').hide();
  

               }





              })            
        })

</script>





</body>



</html>