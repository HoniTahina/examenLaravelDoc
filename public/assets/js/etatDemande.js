Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var elt = document.getElementById("repEtat");
var graph = new Chart(elt, {
  type: 'pie',
  data: {
    labels: _yDemandeData,
    datasets: [{
        label: 'My First Dataset',
        data: _xDemandeData,
        backgroundColor: [
            'rgb(12, 244, 237)',
            'rgb(30, 214, 2)',
            'rgb(255, 0, 0)',
            'rgb(0, 12, 255)',
        ],
        hoverOffset: 4
      }],
  }
  
});