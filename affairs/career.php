<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: ../login.html");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - found</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Staff Management</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" >Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>

        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">hello</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Students List</span>
        </a>
      </li>



      <li class="nav-item active">
        <a class="nav-link" href="career.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Students Career</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="career.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Students Management</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="career.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Students Management</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">IUTsnap</a>
          </li>
          <li class="breadcrumb-item active">Students Career</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
           Students Career</div>
          <div class="card-body">


            <div class="container">
              <div class="row">

                    <form  id="myForm" class="form-inline">

                      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Field...</option>
                        <option value="Web development">Web development</option>
                        <option value="Desktop development">Desktop development</option>
                        <option value="Android development">Android development</option>
                        <option value="IOS development">IOS development</option>
                      </select>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Working language...">
                      </div>



                      <button onclick="myFunction()" class="btn btn-primary my-1">Search</button>
                    </form>
            </div>


    <div class="row">
      <!--card box zone-->

  <div id="aboutPage" class="row">


            </div>

            </div>
            </div>
           </div>
            </div>



</div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> Copyright © IUT Snap 2019</span>
          </div>
        </div>
      </footer>

    </div>



  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

<!--modals-->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>

<script>

setInterval(() => {
  jQuery(document).ready(function(){
        ( function ( $ ){
      $ ( '.goFlip' ).on ( "click" , function (event){
        $(this).parent().parent().parent().toggleClass ( 'rotate-3d' );

      $ ( '.card-back' ).toggleClass ( 'z-up' );
      $ ( '.card-back .> AboutHeader> h2 ' ).addClass ( 'fadeInUp' );
      $ ( '.backContent-wrap backContent').addClass ( 'fadeInUp' );
    });
  }) ( jQuery );
});

}, 2000);

var config = {
    apiKey: "AIzaSyAD8Ii7hCNqVBvsIujCl7j8rCJw80MNUwM",
    authDomain: "my-project-1542441274128.firebaseapp.com",
    databaseURL: "https://my-project-1542441274128.firebaseio.com",
    projectId: "my-project-1542441274128",
    storageBucket: "my-project-1542441274128.appspot.com",
    messagingSenderId: "934562985641"
  };
  firebase.initializeApp(config);

    const temp = [];
    var ref = firebase.database().ref('Career');
    ref.once('value').then(function(snapshot){
      snapshot.forEach((element)=>{
        temp.push({
                  "id": `${element.key}`,
                  "AdditionSkill": `${element.val().additionSkill}`,
                  "Email": `${element.val().email}`,
                  "ID": `${element.val().studentID}`,
                  "Name": `${element.val().name}`,
                  "Skill": `${element.val().skill}`,
                  "Tel": `${element.val().tel}`,
                  "Year": `${element.val().year}`,
                  "YearAlias": `${element.val().yearAlias}`,
                  "notified": `${element.val().notified}`
                });
      });
      document.getElementById("aboutPage").innerHTML=`${temp.map(overwrite).join(" ")}`;
    });




     function overwrite(s){

if(s.notified=='false')
{
     return `<div class="layout-card aboutMe" id="${s.id}">
                  <article class="aboutMeContainer card-front">
                    <header class="aboutHeader">
                        <img class="headerProfile" src="web-developer.png" alt="header image" />
                      <h1 class="fadeInLeft animated">${s.Name}</h1>
                      <h2 class="fadeInLeft animated">${s.ID}</h2>

                      <p class="fadeInLeft animated prof">${s.Skill}</p> 
                    </header>

                    <div class="frontContent">
                      <div class="backContent animated">

                        <p><b>Extra skill: </b>${s.AdditionSkill}</p>
                        <p class="list">
                          <b>Additional Info:</b>
                          <br />
                          <br />
                          • <strong>(+998) ${s.Tel}</strong><br/><br/>
                          • <strong>${s.Year} year Student &#8212; ${s.YearAlias}</strong>
                          <br />
                          <br />

                        </p>
                        <div class="additional-removable">
                        <p class="list">
                         <br />
                         <br/>
                         <br/>
                        </p>
                        </div>  
                      </div>
                    </div>
                    <footer class="aboutFooter">
                      <a class="goContact" style="color: white;" onclick="setNotified(${s.id})">Notify</a>
                      <a class="goFlip">More...</a>
                    </footer>
                  </article>

                  <div class="aboutMeContainer card-back">

                    <header class="aboutHeader">
                        <h2 class="animated">SKILLS</h2>
                    </header>

                    <div class="backContent-wrap">
                    <div class="alert alert-warning" role="alert">
 This place is under-development mode</div>
 <img style='width:75%; display: block; margin-left: auto; margin-right: auto;' src="https://cdn.iconscout.com/icon/free/png-256/pie-chart-1430973-1208737.png" alt="chart">
                    </div>

                    <footer class="aboutFooter">
                      <a class="goContact">Notify</a>
                      <a class="goFlip">Back</a>
                    </footer>
                </div>
                </div>
            `;

              }else
              {

               return `<div class="layout-card aboutMe" id="${s.id}">
                  <article class="aboutMeContainer card-front">
                    <header class="aboutHeader">
                        <img class="headerProfile" src="web-developer.png" alt="header image" />
                      <h1 class="fadeInLeft animated">${s.Name}
                    </h1>
                      <p class="fadeInLeft animated prof">${s.Skill}</p>
                    </header>

                    <div class="frontContent">
                    <div class="alert alert-success" role="alert">
 This student has already been notified.If you want to notify him/her, Click the button Re-Notify</div>
                      <div class="backContent animated">

                        <p><b>Extra skill: </b>${s.Tel}</p>
                        <p class="list">
                         • HTML5, CSS3, JavaScript, jQuery<br />
                         • 4 years Experience in field of front end
                         <br/>
                         • Photoshop, 3dMax designer<br />
                        </p>
                      </div>
                    </div>
                    <footer class="aboutFooter">
                      <a class="goContact" style="color: white;" onclick="setNotified(${s.id})">Re-Notify</a>

                    </footer>
                  </article>

                </div>  `;
              }
            }


     
   function setNotified(id){
     
     document.getElementById(id).getElementsByClassName("additional-removable")[0].innerHTML=`
     <div class="alert alert-info" role="alert">
 Successfully Notified</div>`;

      var careerById = firebase.database().ref(`Career/${id}`);
      careerById.update({
        notified: true
      },(err)=>{
        console.log(err);
      });
   }
   function  myFunction()
   {
      var x = document.getElementById("myForm").elements[0].value;
      var y = document.getElementById("myForm").elements[1].value;
 alert(x+y);
     }
</script>

</body>
</html>
