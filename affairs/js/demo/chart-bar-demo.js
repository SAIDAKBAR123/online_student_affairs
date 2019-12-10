// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example

const studentCareer=[
  {"ID":"U1410081",
  "name":"abdullaev",
  "year":"4",
  "department":"SOCIE",
  "yearAlias":"Senior",
  "email":"n.mukhammadaliev@student.inha.uz",
  "content" : " olup  enim voluptatibus, sed doloribus sapiente esse repellat aliquid? Alias, facere",
  "skill": "javacript,c++"
  },
  {"ID":"U1410222",
  "name":"azamat  ",
  "year":"4",
  "department":"SOCIE",
  "yearAlias":"Senior",
  "email":"n.mukhammadaliev@student.inha.uz",
  "content" : " olup  enim voluptatibus, sed doloribus sapiente esse repellat aliquid? Alias, facere",
  "skill": "c#,ruby"
  }

  ];



  //conver string to array and get index of element in n position and return a value

  var item=[];

studentCareer.forEach(element => {
  console.log(element);
  //var x=Object.values(studentCareer);
  //x=x[0].skill.split(",");
  item.push(element.ID);

  
   

 
 
//chart part
 


var ctx = document.getElementById("myBarChart");

var myLineChart = new Chart(ctx, {


  type: 'bar',
  data: {
    labels: [`JavaScript`, "Laravel", "Swift", "Java", "C#", "C++"],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [569, 333, 625, 784, 821, 120],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 1500,
          maxTicksLimit: 6
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
});