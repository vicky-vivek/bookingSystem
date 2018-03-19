<?php  
session_start();
if(!isset($_SESSION['name'])){
  header('location:login.php');
  exit();
}
?>
<html>
<head>
	<title></title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     
      <link rel="stylesheet" type="text/css" href="styles.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="app.js"></script>
      <script>
        function loadlogout() {
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             window.location = 'http://localhost/bookingsystem/login.php';
          }
        };
        xhttp.open("GET", "logincontroller.php?logoutaction=logout", true);
        xhttp.send();
      }
    </script>
    
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" value="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="subcatlist.php">Bus Tickets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booklist.php">Booked History</a>
      </li>
    </ul>
  </div>
  <div style="margin-right: 30px;">Hi, <?php session_start(); echo $_SESSION['name']; ?></div>
  <button type="submit" onclick="loadlogout()" class="btn btn-default right">Logout</button>
</nav>

<div class="row" style="margin-top: 10px;">
  <div class="col-sm-8">
    <h5>Bus 1</h5>
  </div>

  <div class="col-sm-4">
    <button class="btn btn-primary btn-md accordion" id="1">View Seats</button>
      <div class="panel">
        <div class="row row--1">
          <ol class="cabin">
            <li class="seats"> <label for="1A">
              <input type="checkbox" value="1A"><span class="checkmark"><img src="car-seat.png" width="20" height="20"></span>
             </label>
            </li>
            <li class="seats"> <label for="2A">
              <input type="checkbox" value="1B"><span class="checkmark"><img src="car-seat.png" width="20" height="20"></span>
             </label>
            </li>
               <li class="seats"> <label for="3A">
              <input type="checkbox" value="1C"><span class="checkmark">1C</span>
             </label>
            </li>
            <li class="seats"> <label for="4A">
              <input type="checkbox" value="1D"><span class="checkmark">1D</span>
             </label>
            </li>
            <li class="seats"> <label for="5A">
              <input type="checkbox" value="1E"><span class="checkmark">1E</span>
              </label>
            </li>
            <li class="seats"> <label for="6A">
              <input type="checkbox" value="1F"><span class="checkmark">1F</span>
             </label>
            </li>
            <li class="seats"> <label for="7A">
              <input type="checkbox" value="1G"><span class="checkmark">1G</span>
             </label>
            </li>
               <li class="seats"> <label for="8A">
              <input type="checkbox" value="1H"><span class="checkmark">1H</span>
             </label>
            </li>
            <li class="seats"> <label for="9A">
              <input type="checkbox" value="1I"><span  class="checkmark">1I</span>
             </label>
            </li>
            <li class="seats"> <label for="10A">
              <input type="checkbox" value="1J"><span class="checkmark"><img src="car-seat.png" width="20" height="20"></span>
              </label>
            </li>
           </ol>
        </div>
        
        <div class="row row--close">
          <ol class="cabin">
            <li class="seats"> <label for="1A">
              <input type="checkbox" value="2A"><span class="checkmark"><img src="car-seat.png" width="20" height="20"></span>
             </label>
            </li>
            <li class="seats"> <label for="2A">
              <input type="checkbox" value="2B"><span class="checkmark">2B</span>
             </label>
            </li>
               <li class="seats"> <label for="3A">
              <input type="checkbox" value="2C"><span class="checkmark">2C</span>
             </label>
            </li>
            <li class="seats"> <label for="4A">
              <input type="checkbox" value="2D"><span class="checkmark">2D</span>
             </label>
            </li>
            <li class="seats"> <label for="5A">
              <input type="checkbox" value="2E"><span class="checkmark">2E</span>
              </label>
            </li>
            <li class="seats"> <label for="6A">
              <input type="checkbox" value="2F"><span class="checkmark">2F</span>
             </label>
            </li>
            <li class="seats"> <label for="7A">
              <input type="checkbox" value="2G"><span class="checkmark">2G</span>
             </label>
            </li>
               <li class="seats"> <label for="8A">
              <input type="checkbox" value="2H"><span class="checkmark">2H</span>
             </label>
            </li>
            <li class="seats"> <label for="9A">
              <input type="checkbox" value="2I" id="2I"><span class="checkmark">2I</span>
             </label>
            </li>
            <li class="seats"> <label for="10A">
              <input type="checkbox" value="2J"><span class="checkmark">2J</span>
              </label>
            </li>
           </ol>
        </div>

        <div class="row-center">
          <li class="seats"> <label for="4A">
            <input type="checkbox" value="3A"><span class="checkmark">3A</span>
           </label>
          </li>
        </div>

        <div class="row row--1">
          <ol class="cabin">
            <li class="seats"> <label for="1A">
              <input type="checkbox" value="4A"><span class="checkmark">4A</span>
             </label>
            </li>
            <li class="seats"> <label for="2A">
              <input type="checkbox" value="4B"><span class="checkmark">4B</span>
             </label>
            </li>
               <li class="seats"> <label for="3A">
              <input type="checkbox" value="4C"><span class="checkmark">4C</span>
             </label>
            </li>
            <li class="seats"> <label for="4A">
              <input type="checkbox" value="4D"><span class="checkmark">4D</span>
             </label>
            </li>
            <li class="seats"> <label for="5A">
              <input type="checkbox" value="4E"><span class="checkmark">4E</span>
              </label>
            </li>
            <li class="seats"> <label for="6A">
              <input type="checkbox" value="4F"><span class="checkmark">4F</span>
             </label>
            </li>
            <li class="seats"> <label for="7A">
              <input type="checkbox" value="4G"><span class="checkmark">4G</span>
             </label>
            </li>
               <li class="seats"> <label for="8A">
              <input type="checkbox" value="4H"><span class="checkmark">4H</span>
             </label>
            </li>
            <li class="seats"> <label for="9A">
              <input type="checkbox" value="4I"><span class="checkmark">4I</span>
             </label>
            </li>
            <li class="seats"> <label for="10A">
              <input type="checkbox" value="4J"><span class="checkmark">4J</span>
              </label>
            </li>
           </ol>
        </div>
        
        <div class="row row--close">
          <ol class="cabin">
            <li class="seats"> <label for="1A">
              <input type="checkbox" value="5A"><span class="checkmark">5A</span>
             </label>
            </li>
            <li class="seats"> <label for="2A">
              <input type="checkbox" value="5B"><span class="checkmark">5B</span>
             </label>
            </li>
               <li class="seats"> <label for="3A">
              <input type="checkbox" value="5C"><span class="checkmark">5C</span>
             </label>
            </li>
            <li class="seats"> <label for="4A">
              <input type="checkbox" value="5D"><span class="checkmark">5D</span>
             </label>
            </li>
            <li class="seats"> <label for="5A">
              <input type="checkbox" value="5E"><span class="checkmark">5E</span>
              </label>
            </li>
            <li class="seats"> <label for="6A">
              <input type="checkbox" value="5F"><span class="checkmark">5F</span>
             </label>
            </li>
            <li class="seats"> <label for="7A">
              <input type="checkbox" value="5G"><span class="checkmark">5G</span>
             </label>
            </li>
               <li class="seats"> <label for="8A">
              <input type="checkbox" value="5H"><span class="checkmark">5H</span>
             </label>
            </li>
            <li class="seats"> <label for="9A">
              <input type="checkbox" value="5I" ><span class="checkmark">5I</span>
             </label>
            </li>
            <li class="seats"> <label for="10A">
              <input type="checkbox" value="5J"><span class="checkmark">5J</span>
              </label>
            </li>
           </ol>
        </div>
      </div>
    <button  class="btn btn-sm btn-primary book"  hidden="true">book</button>
  </div>
</div>


<div class="row" style="margin-top: 5px;">
  <div class="col-sm-8">
    <h5>Bus 2</h5>
  </div>

  <div class="col-sm-4">
    <button class="btn btn-primary btn-md accordion" id="2">View Seats</button>
      <div class="panel">
        <div class="row row--1">
          <ol class="cabin">
            <li class="seats"> <label for="1A">
              <input type="checkbox" value="1A"><span class="checkmark">1A</span>
             </label>
            </li>
            <li class="seats"> <label for="2A">
              <input type="checkbox" value="1B"><span class="checkmark">1B</span>
             </label>
            </li>
               <li class="seats"> <label for="3A">
              <input type="checkbox" value="1C"><span class="checkmark">1C</span>
             </label>
            </li>
            <li class="seats"> <label for="4A">
              <input type="checkbox" value="1D"><span class="checkmark">1D</span>
             </label>
            </li>
            <li class="seats"> <label for="5A">
              <input type="checkbox" value="1E"><span class="checkmark">1E</span>
              </label>
            </li>
            <li class="seats"> <label for="6A">
              <input type="checkbox" value="1F"><span class="checkmark">1F</span>
             </label>
            </li>
            <li class="seats"> <label for="7A">
              <input type="checkbox" value="1G"><span class="checkmark">1G</span>
             </label>
            </li>
               <li class="seats"> <label for="8A">
              <input type="checkbox" value="1H"><span class="checkmark">1H</span>
             </label>
            </li>
            <li class="seats"> <label for="9A">
              <input type="checkbox" value="1I"><span  class="checkmark">1I</span>
             </label>
            </li>
            <li class="seats"> <label for="10A">
              <input type="checkbox" value="1J"><span class="checkmark">1J</span>
              </label>
            </li>
           </ol>
        </div>
        
        <div class="row row--close">
          <ol class="cabin">
            <li class="seats"> <label for="1A">
              <input type="checkbox" value="2A"><span class="checkmark">2A</span>
             </label>
            </li>
            <li class="seats"> <label for="2A">
              <input type="checkbox" value="2B"><span class="checkmark">2B</span>
             </label>
            </li>
               <li class="seats"> <label for="3A">
              <input type="checkbox" value="2C"><span class="checkmark">2C</span>
             </label>
            </li>
            <li class="seats"> <label for="4A">
              <input type="checkbox" value="2D"><span class="checkmark">2D</span>
             </label>
            </li>
            <li class="seats"> <label for="5A">
              <input type="checkbox" value="2E"><span class="checkmark">2E</span>
              </label>
            </li>
            <li class="seats"> <label for="6A">
              <input type="checkbox" value="2F"><span class="checkmark">2F</span>
             </label>
            </li>
            <li class="seats"> <label for="7A">
              <input type="checkbox" value="2G"><span class="checkmark">2G</span>
             </label>
            </li>
               <li class="seats"> <label for="8A">
              <input type="checkbox" value="2H"><span class="checkmark">2H</span>
             </label>
            </li>
            <li class="seats"> <label for="9A">
              <input type="checkbox" value="2I" id="2I"><span class="checkmark">2I</span>
             </label>
            </li>
            <li class="seats"> <label for="10A">
              <input type="checkbox" value="2J"><span class="checkmark">2J</span>
              </label>
            </li>
           </ol>
        </div>

        <div class="row-center">
          <li class="seats"> <label for="4A">
            <input type="checkbox" value="3A"><span class="checkmark">3A</span>
           </label>
          </li>
        </div>

        <div class="row row--1">
          <ol class="cabin">
            <li class="seats"> <label for="1A">
              <input type="checkbox" value="4A"><span class="checkmark">4A</span>
             </label>
            </li>
            <li class="seats"> <label for="2A">
              <input type="checkbox" value="4B"><span class="checkmark">4B</span>
             </label>
            </li>
               <li class="seats"> <label for="3A">
              <input type="checkbox" value="4C"><span class="checkmark">4C</span>
             </label>
            </li>
            <li class="seats"> <label for="4A">
              <input type="checkbox" value="4D"><span class="checkmark">4D</span>
             </label>
            </li>
            <li class="seats"> <label for="5A">
              <input type="checkbox" value="4E"><span class="checkmark">4E</span>
              </label>
            </li>
            <li class="seats"> <label for="6A">
              <input type="checkbox" value="4F"><span class="checkmark">4F</span>
             </label>
            </li>
            <li class="seats"> <label for="7A">
              <input type="checkbox" value="4G"><span class="checkmark">4G</span>
             </label>
            </li>
               <li class="seats"> <label for="8A">
              <input type="checkbox" value="4H"><span class="checkmark">4H</span>
             </label>
            </li>
            <li class="seats"> <label for="9A">
              <input type="checkbox" value="4I"><span class="checkmark">4I</span>
             </label>
            </li>
            <li class="seats"> <label for="10A">
              <input type="checkbox" value="4J"><span class="checkmark">4J</span>
              </label>
            </li>
           </ol>
        </div>
        
        <div class="row row--close">
          <ol class="cabin">
            <li class="seats"> <label for="1A">
              <input type="checkbox" value="5A"><span class="checkmark">5A</span>
             </label>
            </li>
            <li class="seats"> <label for="2A">
              <input type="checkbox" value="5B"><span class="checkmark">5B</span>
             </label>
            </li>
               <li class="seats"> <label for="3A">
              <input type="checkbox" value="5C"><span class="checkmark">5C</span>
             </label>
            </li>
            <li class="seats"> <label for="4A">
              <input type="checkbox" value="5D"><span class="checkmark">5D</span>
             </label>
            </li>
            <li class="seats"> <label for="5A">
              <input type="checkbox" value="5E"><span class="checkmark">5E</span>
              </label>
            </li>
            <li class="seats"> <label for="6A">
              <input type="checkbox" value="5F"><span class="checkmark">5F</span>
             </label>
            </li>
            <li class="seats"> <label for="7A">
              <input type="checkbox" value="5G"><span class="checkmark">5G</span>
             </label>
            </li>
               <li class="seats"> <label for="8A">
              <input type="checkbox" value="5H"><span class="checkmark">5H</span>
             </label>
            </li>
            <li class="seats"> <label for="9A">
              <input type="checkbox" value="5I" ><span class="checkmark">5I</span>
             </label>
            </li>
            <li class="seats"> <label for="10A">
              <input type="checkbox" value="5J"><span class="checkmark">5J</span>
              </label>
            </li>
           </ol>
        </div>
      </div>
    <button  class="btn btn-sm btn-primary book"  hidden="true">book</button>
  </div>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        $('.accordion').html($(this).text() == 'View Seats' ? 'Hide Seats' : 'View Seats');
        var panel = this.nextElementSibling;
        
        if (panel.style.display === "block") {
            panel.style.display = "none";
            $('~ :button:not(.accordion)' , this).attr("hidden",true);
        } else {
            panel.style.display = "block";
            $('~ :button:not(.accordion)' , this).attr("hidden",false);
        }
    });
}
</script>
</body>
</html>


