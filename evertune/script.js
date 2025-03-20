// const toggle = document.querySelector("#toggle");

// toggle.addEventListener("click", function() {
// 	this.closest(".metric-item").classList.toggle("open");
// });

var metricBtn = document.querySelectorAll('.metric-item');
//Add this for toggling btn color
lastOpened = null;

metricBtn.forEach(btn => btn.addEventListener('click', function() {
  var blueBtn = this.closest('.metric-item');
  blueBtn.classList.toggle("visited");
  
  if (lastOpened && lastOpened !== blueBtn)
      lastOpened.classList.remove("visited");
      lastOpened = blueBtn;
}));


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

Plotly.newPlot('myDiv', data, {responsive: true});

// second graph
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

Plotly.newPlot('graphDiv', second_data, second_layout, {responsive: true});

// third graph
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

var third_graph_data = [trace3, trace4, trace5];

var third_graph_layout = {
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

Plotly.newPlot('graphDivTwo', third_graph_data, third_graph_layout, {responsive: true});


// fourth graph
Plotly.d3.csv('https://raw.githubusercontent.com/plotly/datasets/master/normal-clusters.csv', function(err, rows){
function unpack(rows, key) {
  return rows.map(function(row) { return parseFloat(row[key]); });
}
  
var button_layer_height = 1.2
var x0 = unpack(rows,'x0')
var x1 = unpack(rows,'x1')
var x2 = unpack(rows,'x2')
var y0 = unpack(rows,'y0')
var y1 = unpack(rows,'y1')
var y2 = unpack(rows,'y2')

var fourthgraph_data = [{
    x: x0, 
    y: y0,
    mode: 'markers',
    marker: {color: '#835AF1'}
  },
  {
    x: x1, 
    y: y1,
    mode: 'markers',
    marker: {color: '#7FA6EE'}
  },
  {
    x: x2, 
    y: y2,
    mode: 'markers',
    marker: {color: '#B8F7D4'}
  },
  
]

var cluster0 = {type: 'circle',
                 xref: 'x', yref: 'y',
                 x0: Math.min(...x0), y0: Math.min(...y0), 
                 x1: Math.max(...x0), y1: Math.max(...y0), 
                 opacity: 0.25,
                 line: {color: '#835AF1'},
                 fillcolor: '#835AF1'}

var cluster1 = {type: 'circle',
                 xref: 'x', yref: 'y',
                 x0: Math.min(...x1), y0: Math.min(...y1), 
                 x1: Math.max(...x1), y1: Math.max(...y1), 
                 opacity: 0.25,
                 line: {color: '#7FA6EE'},
                 fillcolor: '#7FA6EE'}

var cluster2 = {type: 'circle',
                 xref: 'x', yref: 'y',
                 x0: Math.min(...x2), y0: Math.min(...y2), 
                 x1: Math.max(...x2), y1: Math.max(...y2), 
                 opacity: 0.25,
                 line: {color: '#B8F7D4'},
                 fillcolor: '#B8F7D4'}

var updatemenus=[
    {
        buttons: [   
            {
                args: ['shapes', []],
                label: 'None',
                method: 'relayout'
            },
            {
                args: ['shapes', [cluster0]],
                label: 'Cluster 0',
                method: 'relayout'
            },
            {
                args: ['shapes', [cluster1]],
                label: 'Cluster 1',
                method: 'relayout'
            },
            {
                args: ['shapes', [cluster2]],
                label: 'Cluster 2',
                method: 'relayout'
            },
            {
                args: ['shapes', [cluster0, cluster1, cluster2]],
                label: 'All',
                method: 'relayout'
            },
        ],
        direction: 'left',
        pad: {'r': 10, 't': 10},
        showactive: true,
        type: 'buttons',
        x: 0.1,
        xanchor: 'left',
        y: button_layer_height,
        yanchor: 'top' 
    },
    
]

var fourthgraph_layout = {
    updatemenus: updatemenus,
    showlegend: false
}


Plotly.plot("fourthDiv", fourthgraph_data, fourthgraph_layout, {showSendToCloud: true});

});
