const found=[{
  "category" : "Books",
  "date" : "23/April/2019",
  "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
  "photo" : "https://firebasestorage.googleapis.com/v0/b/my-project-1542441274128.appspot.com/o/1554109011282?alt=media&token=b264b323-b9ab-4806-b850-24d75a153cba"
},{
  "category" : "pens",
  "date" : "23/April/2019",
  "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
  "photo" : "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZWVkVXIlx7rSIIq8GdSDukueEt0oyJvTtMi1-EbDW8svyL6qE9Q"
},{
  "category" : "Books",
  "date" : "23/April/2019",
  "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
  "photo" : "https://i.pinimg.com/originals/07/25/8b/07258b0914f95191e26311811e63ae0f.jpg"
},{
  "category" : "Books",
  "date" : "23/April/2019",
  "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
  "photo" : "https://i.pinimg.com/originals/07/25/8b/07258b0914f95191e26311811e63ae0f.jpg"
},{
  "category" : "Books",
  "date" : "23/April/2019",
  "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
  "photo" : "https://ileadsantaclarita.org/wp-content/uploads/2019/02/lost_and_found_header-e1549147148680.jpeg"
},{
  "category" : "Books",
  "date" : "23/April/2019",
  "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.addsa",
  "photo" : "https://i.pinimg.com/originals/07/25/8b/07258b0914f95191e26311811e63ae0f.jpg"
},{
  "category" : "Books",
  "date" : "23/April/2019",
  "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
  "photo" : "https://www.odt.co.nz/sites/default/files/styles/odt_story_slideshow/public/slideshow/node-1245328/2017/05/mike_wilkinson_0.jpg?itok=696xZmVu"
},{
  "category" : "Books",
  "date" : "23/April/2019",
  "description" : "love you babe",
  "photo" : "https://www.odt.co.nz/sites/default/files/styles/odt_story_slideshow/public/slideshow/node-1245328/2017/05/mike_wilkinson_0.jpg?itok=696xZmVu"
},{
  "category" : "reverse",
  "date" : "23/April/2019",
  "description" : "this is only a good change to stay in position",
  "photo" : "https://www.odt.co.nz/sites/default/files/styles/odt_story_slideshow/public/slideshow/node-1245328/2017/05/mike_wilkinson_0.jpg?itok=696xZmVu"
}];
var new_found=found.reverse();

function handleClick(photo,d,l)
{
    var des=d.split(",");
    des=des.join(" ");
    
    console.log(photo);
   alert(des);
     console.log(l);
    
    
   /* document.getElementById("modals").innerHTML=`

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
     
      <div class="modal-content">
      
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">hello</h4>
        </div>
                <div class="photo">    
                     <img src="${photo}" alt="just">
                    </div>
        <div class="modal-body">
          <p>${des}</p>
        </div>
        <div class="modal-footer">
<p>${l}</p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      
      </div>
    </div>
  </div>
`;*/
}

function founded(d){
     
    var newa=d.description.split(" ");
    var newd=newa.join(",");
    return `<div class="mycard">
                    <div class="photo">    
                     <img src="${d.photo}" alt="just">
                    </div>
                    
                    <h4>${d.category.toUpperCase()}</h4>
                     <p>${d.description.slice(0, 30)+" . . . "}</p><br>
                        <p>${d.date}</p>

                     <div class="button">
                           <input type="text" class="form-control" id="usr" placeholder="Given to...">
                        <button class="btn btn-success" onclick="removeDiv(this)">Accepted</button> 
                       <button name=${d.photo+";;"+newd+";;"+d.date} class="btn btn-primary details" data-toggle="modal" data-target="#myModal">In details</button>   
                     </div>
                  </div>`;
}

document.getElementById("cardfield").innerHTML=`

${new_found.map(founded).join(" ")}`;

function removeDiv(btn){
   
        var  inputValue=  document.getElementById("usr").value;
    alert(inputValue);
            (btn.parentNode).parentNode.remove();
        }




/*1.function—>adding item to the top
2.function—>show specific info in module format
3.function—>call function which enables to send data to the student app
4.function—>Send General news to students*/