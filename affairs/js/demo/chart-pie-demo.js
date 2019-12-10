// Set new default font family and font color to mimic Bootstrap's default styling




Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example



var ctx = document.getElementById("myPieChart");
var ctxs = document.getElementById("myPieCharts");

var myPieChart = new Chart(ctx,
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
