window.onload = function() {
 
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [{
            type: "pie",
            startAngle: 0,
            yValueFormatString: "##0.00\"%\"",
            indexLabel: "{label} {y}",
            dataPoints: [
                {y: 25, label: "Analysis"},
                {y: 20, label: "Design"},
                {y: 20, label: "Construction"},
                {y: 25, label: "Testin"},
                {y: 15, label: "Promotion"}
            ]
        }]
    });
    chart.render();
     
    }    