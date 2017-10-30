    $.getJSON("game.php",
    {
        opa:"",
    },
    function(result){
        //console.log(result);
        $.each(result, function(i, field){
            myChart.data.labels.push(field.username);
            myChart.data.datasets[0].data.push(field.result);
        });
        myChart.update();
    });


    $.getJSON("game.php",
        function(result){
        //console.log(result);
        $.each(result, function(i, field){
            mChart.data.labels.push(field.username);
            mChart.data.datasets[0].data.push(field.result);
            mChart.data.datasets[0].data.push("rgb(150, 151, 150)");
            mChart.data.datasets[0].backgroundColor.push("rgb(70, 50, 250)");
            mChart.data.datasets[0].borderColor.push("aqua");            

        });
        mChart.update();
    });


    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        options: {
            scales: {
                xAxes: [{ 
                    ticks: {
                  fontColor: "white", // this here
              },
          }],
          yAxes: [{
            ticks: {
                  fontColor: "white", // this here
              },
          }],
      },
      legend: {
        labels: {
            fontColor: 'white'
        }
    }
},
data: {
    labels: [],
    datasets: [{
        label: 'My result',
        borderColor: 'rgb(250, 200, 132)',
        data: [],
        borderWidth: 2,
        backgroundColor: ["orange"],
    }, ]
},   
});

    var c = document.getElementById("mChart").getContext('2d');
    var mChart = new Chart(c, {
        type: 'bar',
        options: {
            scales: {
                xAxes: [{ 
                    ticks: {
                  fontColor: "white", // this here
              },
          }],
          yAxes: [{
            ticks: {
                  fontColor: "white", // this here
              },
          }],
      },
      legend: {
        labels: {
            fontColor: 'white'
        }
    }
},
data: {
    labels: [],
    datasets: [{
        label: 'All result',
        borderColor: ["aqua"],
        data: [],
        borderWidth: 2,
        backgroundColor: [],
    }, ]
},   
});
