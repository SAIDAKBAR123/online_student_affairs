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
    <title>Admin Area | Lost Page</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>
<div class="container-fluid">
    

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">IUTSnap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
               <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Saidakbar</a></li>
            <li><a  href="login.html"> Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
         
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Found Item<small> IUT administrative zone</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Announcement zone
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Send message</a></li>
                <li><a href="#">System</a></li>
                <li><a href="#">System</a></li>
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
          <li class="active">Lost Items list</li>
        </ol>
      </div>
    </section>

    <section id="main" class="vue">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
             <a href="lost.php" class="list-group-item "><span class="glyphicon glyphicon-list-alt" aria-hidden="true" ></span> Lost item <span class="badge" id="lostBadgeId"></span></a>
             
              <a href="found.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Found item <span class="badge" id="foundBadgeId"></span></a>
            </div>

           
          </div>
          <div class="col-md-9">
           
            
             
               <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Lost Items</h3>
              </div>
              <div class="panel-body">
                <div class="filterzone">
                <div class="dropdown droplist">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter Items
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
     
      <li><a  @click="handleClickTech">{{message1}}</a></li>
      <li><a  @click="handleClickBook">{{message2}}</a></li>
      <li><a  @click="handleClickCloth">{{message3}}</a></li>
      <li><a  @click="handleClickOther">{{message4}}</a></li>
    </ul>
  </div>
                 <div align="center" id="filter">  
                   <input type="text" id="myFilter" class="form-control" onkeyup="mySearch()" placeholder="Search for names..">  
                </div> 
                </div>

                 <div id="cardfield" class="vue">

                  </div>
                  </div>

                 </div> 
              </div>
          </div>
        </div>
  
    </section>

    <footer id="footer">
      <p>Copyright IUT Snap, &copy; 2019</p>
    </footer>
      </div>
    <!-- Modals -->
   
  <!-- Add Page -->
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
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </div>
    </form>
    </div>
  </div>
</div>



  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/edit.js"></script>
      <script src="js/table.js"></script>
   
     <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--FIREBASE-->

  <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
  <script>
  var found=[{
  "category" : "Books",
  "date" : "23/April/2019",
  "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
  "photo" : "https://firebasestorage.googleapis.com/v0/b/my-project-1542441274128.appspot.com/o/1554109011282?alt=media&token=b264b323-b9ab-4806-b850-24d75a153cba"
}];
  var config = {
  apiKey: "AIzaSyAD8Ii7hCNqVBvsIujCl7j8rCJw80MNUwM",
  authDomain: "my-project-1542441274128.firebaseapp.com",
  databaseURL: "https://my-project-1542441274128.firebaseio.com",
  projectId: "my-project-1542441274128",
  storageBucket: "my-project-1542441274128.appspot.com",
  messagingSenderId: "934562985641"
  };
  firebase.initializeApp(config);
  
  var ref = firebase.database().ref("/LostFound");
  
  const temp=[];
  ref.once("value")
  .then(function(snapshot) {
       var number = snapshot.numChildren();
      
       snapshot.forEach((element)=>{              
                temp.push({
                  "id": `${element.key}`,
                  "category": `${element.val().category}`,
                  "date": `${element.val().date}`,
                  "description": `${element.val().description}`,
                  "photo": `${element.val().photo}`
                });         
      });
      console.log(temp);
      console.log(temp.reverse());
      document.getElementById('lostBadgeId').textContent = number;    
  document.getElementById("cardfield").innerHTML=`
  
  ${temp.map(founded).join(" ")}`;


  var elements= document.getElementsByClassName("details");
     var i=0;
     console.log(elements.length);
     for(i=0;i<elements.length;i++)
         {
            elements[i].addEventListener("click", function(){
               this.parentElement.parentElement.getElementsByClassName("description-hidden")[0].style.visibility="visible";
                
               this.parentElement.parentElement.getElementsByClassName("description-hidden")[0].addEventListener("click",function(){
                   this.style.visibility="hidden";
               })
               
               
            });  
           
         }
  
      
});
var foundref = firebase.database().ref('/Archive');
foundref.once("value")
.then(function(snapshot){
  var number = snapshot.numChildren();
  document.getElementById('foundBadgeId').textContent = number; 
});
function handleClick(photo,d,l)
{
    var des=d.split(",");
    des=des.join(" ");
    alert("Hello");
    console.log(des);
    alert(l);
}

function founded(d){
    var newa=d.description.split(" ");

    var newd=newa.join(",");
    
    return `
      <div v-bind:class="{check}" class="mycard rotate-container">
        <div class="description-hidden">
            <p>${d.description}</p>
        </div>
        <div>
            <div class="photo card-body">    
                <img style='height: 100%; width: 100%; object-fit: contain' id="imgobj" src="${d.photo}" alt="just">
            </div>
            <img id="idsrc" src="${d.id}" alt=""> 
            <h4 class="card-title" id="catobj">${d.category.toUpperCase()}</h4>
            <p id="descobj">${d.description.slice(0, 30)+" . . . "}</p>
            <p id="dateobj">${d.date}</p><br/>
        </div>
        <div class="button">
            <input type="text" class="form-control" id="usr" placeholder="Given to...">
            <button class="btn btn-success" onclick="removeDiv(this)">Accepted</button> 
            <button name=${d.photo+";;"+newd+";;"+d.date} class="btn btn-primary details" data-toggle="modal" data-target="#myModal">More</button>   
        </div>
      </div> 
     `;
}

function removeDiv(btn){
        var inputValue = (btn.parentNode).children[0].value;
        
        
        var archive = firebase.database().ref('Archive');
        var postid = ((btn.parentNode).parentNode).children[1].children[1].src.split('/')[4];
        var photoURL = ((btn.parentNode).parentNode).children[1].children[0].children[0].src;
        var desc = ((btn.parentNode).parentNode).children[1].children[3].innerHTML;
        var cat =  ((btn.parentNode).parentNode).children[1].children[2].innerHTML;
        var datep =  ((btn.parentNode).parentNode).children[1].children[4].innerHTML;
         console.log("PHOTO URL="+photoURL);
         const xxx = {
          originalPostId: postid,
          givenTo: inputValue,
          photo: photoURL,
          category: cat,
          description: desc,
          postedDate: datep
        }
        console.log(postid);
        console.log(xxx);
        archive.push(xxx);
        var deleteRef = firebase.database().ref(`LostFound/${postid}`);
        deleteRef.remove()
        .then(function(){
          console.log("REMOVED");
        }).catch(function(err){
          console.log(err.message);
        });
        console.log(inputValue);
        (btn.parentNode).parentNode.remove();
        
}
      
      
      function mySearch()
{
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("cardfield");
    cards = cardContainer.getElementsByClassName("mycard");
    for (i = 0; i < cards.length; i++) 
    {
        title = cards[i].querySelector(".card-body h4.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
  <!-- Demo scripts for this page-->
 <script src="/bootstrap/js/demo/datatables-demo.js"></script>
      

 <script>

  var app = new Vue({

  el: '.vue',
  data: {
    message1: 'Technology',
    message2:'Books',
    message3:'Clothes',
    message4: 'Others',
    cotegoryType: false,
    check: 'hidden'
  },

  methods: {
    handleClickTech: function() {

     alert(this.message1.toUpperCase());

    },

    handleClickBook: function() {
     alert(this.message2.toUpperCase());

    },
    handleClickCloth: function() {
     alert(this.message3.toUpperCase());

    },
    handleClickOther: function() {
     alert(this.message4.toUpperCase());

    }

    }

})
      </script>
  </body>
</html>
