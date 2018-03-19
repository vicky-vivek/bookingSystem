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
        <a class="nav-link" href="home.php">Bus Tickets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booklist.php">Booked History</a>
      </li>
    </ul>
  </div>
  <div style="margin-right: 30px;">Hi, <?php session_start(); echo $_SESSION['name']; ?></div>
  <button type="submit" onclick="loadlogout()" class="btn btn-default right">Logout</button>
</nav>

<table class="table table-stripped" id="book_history">
  <th>Transaction Id</th>
  <th>Bus Name</th>
  <th>Booked Seat</th>
  <th>Book Time</th>
  <th>Status</th>  
</table>



<!-- Modal goes here -->

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Cancel log</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="">
      
      <div class="form-group">
        <div class="row">
          <div class="col-sm-3">
            <h5>Transaction Id</h5>
          </div>
          <div class="col-sm-3">
            <label id="tid"></label>
          </div>
          <div class="col-sm-3">
            <h5>Bus Name</h5>
          </div>
          <div class="col-sm-3">
            <label id="busname">Bus Name</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div  id="bookseat">

        </div>
      </div>    

      

      <div class="form-group">
        <button id="editcancel" class="btn btn-sm btn-danger" style="margin-left: 177px;">Cancel</button>
      </div>
    </form>


      </div>
      
      <!-- Modal footer -->
     <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
</div>


<!-- Modal ends here -->

</body>
</html>