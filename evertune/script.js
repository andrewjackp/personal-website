const toggle = document.querySelector("#toggle");

toggle.addEventListener("click", function() {
	this.closest(".metric-item").classList.toggle("open");
});

var trace1 = {
  x: [1, 2, 3, 4],
  y: [10, 15, 13, 17],
  type: 'scatter'
};

var trace2 = {
  x: [1, 2, 3, 4],
  y: [16, 5, 11, 9],
  type: 'scatter'
};

var data = [trace1, trace2];

Plotly.newPlot('myDiv', data);

var trace3 = {
  x: ['South Korea', 'China', 'Canada'],
  y: [24, 10, 9],
  name: 'Gold',
  type: 'bar',
};

var trace4 = {
  x: ['South Korea', 'China', 'Canada'],
  y: [13, 15, 12],
  name: 'Silver',
  type: 'bar',
};

var trace5 = {
  x: ['South Korea', 'China', 'Canada'],
  y: [11, 8, 12],
  name: 'Bronze',
  type: 'bar',
};

var second_data = [trace3, trace4, trace5];

var second_layout = {
  scattermode: 'group',
  title: {
    text: 'Grouped by Country'
  },
  xaxis: {
    title: {
      text: 'Country'
    }
  },
  yaxis: {
    title: {
      text: 'Medals'
    }
  },
  barcornerradius: 15,
};

Plotly.newPlot('graphDiv', second_data, second_layout);
