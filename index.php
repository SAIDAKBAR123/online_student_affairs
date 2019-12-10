<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.html");
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin Area | Dashboard</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     
    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
    <!--<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">-->
 
  </head>
  <body>

   <div class="naving">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IUT snap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
               <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Saidakbar</a></li>
            <li><a href="login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
           
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> SECURITY <small>IUT adminstrative page</small></h1>
        
          </div>

          
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Announcement zone
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Send message</a></li>
                <li><a href="#">system</a></li>
                <li><a href="#">system</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
 <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
        <!--  <li class="active"> Page</li>-->
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="lost.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Lost item<span class="badge" id="lostBadgeId"></span></a>
              <a href="found.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Found item <span class="badge" id="foundBadgeId"></span></a>
            
            </div>

           
          </div>
          <div class="col-md-9">
           
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Student Analysis Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2 id="user_num"><!--<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203--></h2>
                    <h4>All Students</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div href="lost.php" class="well dash-box back_color">
                      <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span id="lostPanelId"></span></h2>
                    <h4>Lost Items</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span id="foundPanelId"></span></h2>
                    <h4>Found items</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 2</h2>
                    <h4>Available Items</h4>
                  </div>
                </div>
              </div>
              </div>

              <!----------------- Latest Users------------------ -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">All Students</h3>
                </div>
                <div class="panel-body" >
                  
        <!--------------------- DataTables Example ---------------------------->
        <div class="card mb-3">
               
                <div align="center">  
                     <input type="text" name="search" id="search" class="form-control" placeholder="filter elements..."/>  
                </div>  
                <div class="table-responsive">
            <table id="tables-student" class="table table-striped table-bordered table-responsive table-hover" style="width:100%">
       
                </table>
  
</div>
              </div>   
                   </div>
                  <div id="navigation">
                   <!-- <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>-->
            </div></div>
                    </div>  
              </div>
          </div>
    </section>

    <footer id="footer">
      <p>Copyright IUT Snap, &copy; 2019</p>
    </footer>

    <!------------------------------ Modals-------------------- -->

   <div id="student-call">
   <!--
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         
         <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>-->
  
   </div>
   
   
   
    <!-------------------------- Add Page modals --------------------------------->
 <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alert Students</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Message Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Message Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
       <input type="file" name="pic" accept="image/*">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </div>
    </form>
    </div>
  </div>
</div>



   
   
   
   
   
   
   
   
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
     CKEDITOR.replace( 'editor1' );
 </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/table.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>

     <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->

  <script src="bootstrap/vendor/datatables/jquery.dataTables.js"></script>
  <script src="bootstrap/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <!--<script src="js/sb-admin.min.js"></script>-->

  <!-- Demo scripts for this page-->
  <script src="bootstrap/js/demo/datatables-demo.js"></script>

 <script>
   var config = {
  apiKey: "AIzaSyAD8Ii7hCNqVBvsIujCl7j8rCJw80MNUwM",
  authDomain: "my-project-1542441274128.firebaseapp.com",
  databaseURL: "https://my-project-1542441274128.firebaseio.com",
  projectId: "my-project-1542441274128",
  storageBucket: "my-project-1542441274128.appspot.com",
  messagingSenderId: "934562985641"
  };
  firebase.initializeApp(config);

  var foundref = firebase.database().ref('/Archive');
foundref.once("value")
.then(function(snapshot){
  var number = snapshot.numChildren();
  document.getElementById('foundBadgeId').textContent = number; 
  document.getElementById('foundPanelId').textContent=number;
});
var lostref = firebase.database().ref('/LostFound');
lostref.once("value")
.then(function(snapshot){
  var number = snapshot.numChildren();
  document.getElementById('lostBadgeId').textContent = number; 
  document.getElementById('lostPanelId').textContent=number;
});
   </script>
  </body>
</html>
