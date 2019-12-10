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

  <title>IUT admin Page</title>

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
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Action</a>
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
          <a class="dropdown-item" href="#">Something else here</a>
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
          <li class="breadcrumb-item active">Listed Students</li>
        </ol>
        <div class="container">
            <div class="row">
    

              <div class="col-8 col-sm-6 col-lg-4">
                    <div class="card bg-light">
                      <div class="card-body">
                          
                        <h4 class="card-title">All Students</h4>
                            <h5>student amount: 1285</h5>
                            <canvas id="myPieChart" width="100%" height="100"></canvas>
                                 
                     
                      </div>
                    </div>
                  </div>

                  <div class="col-8 ">
                      <div class="card bg-light">
                        <div class="card-body">
                          <h4 class="card-title">Ability in Programming Languages</h4>
                             
                        <canvas id="myBarChart" width="100%" height="50"></canvas>
                          <p class="card-text"></p>
                        </div>
                      </div>
                    </div>

                </div>
             </div>
             <div><hr></div>
</div>
       
       
       
       
       
        <!-- DataTables Example -->

        <div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-table"></i>
            Students List 
            </div>
          <div class="card-body">
              <input type="text" class="form-control" id="search" aria-label="Small" placeholder="search student..."aria-describedby="inputGroup-sizing-sm"><br>
           
                  <div class="container">  
                  <div class="row">
                        
       
            <table id="tempTable" class="table table-responsive">
          
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Department</th>
                      <th scope="col">Year</th>
                      <th scope="col">YearAlias</th>
                      <th scope="col">Mail</th>
                      <th scope="col">Action</th>
                    </tr>
                    
                  </thead>
         </table>
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
            <span>Copyright © IUT Snap 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

 
  

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
 
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>-->
        </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/table.js"></script>
  <script>
  $.getJSON("mails.json",function(mails){
        var item=[];
        $.each(mails,function(key,val){
        
          item.push("<tr id='"+key+"'>");
          item.push("<td>"+val.ID+"</td>");
          item.push("<td>"+val.name+"</td>");
          item.push("<td>"+val.department+"</td>");
          item.push("<td>"+val.year+"</td>");
          item.push("<td>"+val.yearAlias+"</td>");
          item.push("<td>"+val.email+"</td>");
          item.push(`<td><button type="button" id="`+(key+1)+`"  class="hello btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="triggerModal()">View</button></td>`);
          item.push("</tr>");
          
        });
       
        $("<tbody/>",{html: item.join(" ")}).appendTo("table");

        $('#tempTable').find('button').click(function() {
         currentRow = $(this).closest('tr');
         var x=currentRow;
         console.log(x);
         x=Object.values(x);
         console.log(x);
         //console.log(x[0].innerHTML);
         x=x[0].textContent;
         var arrays=x.split(" ");
       document.getElementById("exampleModalCenter").innerHTML=`
       <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">${arrays[2]} ${arrays[3]}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="modal-position modal-body">
              <div class="img-position">
                
<img src="https://png.pngtree.com/svg/20160902/dd6e35959c.png" alt="Paris" width="150" height="180">

              </div>
              
                <div class="position">
                <h6>STUDENT ID</h6><p>${arrays[1]}</p>
               <h6>DEPARTMENT</h6><p> ${arrays[4]}</p>
               <h6>STATUS</h6><p>${arrays[6]}</p>
               <h6>EMAIL ADDRESS</h6><p>${arrays[7]}</p>
               </div> 
              </div>
            <div class="modal-body modal-lg">
            <canvas id="myPieCharts" width="100%" height="100"></canvas>
            </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </div>
          </div>
       `;

      });
       //var x=document.getElementsByTagName("tr");
        //console.log(x);
      


        }, 1000);


        $(document).ready(function(){
           $('#search').keyup(function(){
                search_table($(this).val());
           });
           function search_table(value){
                $('#tempTable tr').each(function(){
                     var found = 'false';
                     $(this).each(function(){
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                          {
                               found = 'true';
                          }
                     });
                     if(found == 'true')
                     {
                          $(this).show();
                     }
                     else
                     {
                          $(this).hide();
                     }
                });
           }
      });


     /* function triggerModal()
{
  
  var myDiv = document.createElement('div');
   myDiv.id = 'chartEl';
   document.body.innerHTML=``;
  ctxs = document.getElementById("myPieCharts");
  var myPieChart = new Chart(ctxs,
  {
  type: 'pie',
  data: {
    labels: ["Website App", "Desktop App", "Mobile App"],
    datasets: [{
      data: [24, 39, 50],
      backgroundColor: ['#e2402b', '#4946a3', 'green'],
    }],
  },
});
}*/

    </script>




</body>

</html>
