window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title: {
            text: ""
        },
        axisY: {
            title: "Impacted Users",
            suffix: ",000,000"
        },
        axisX: {
            title: "Users Impacted"
        },
        data: [{
            type: "column",
            yValueFormatString: "#,##0.#\",000,000\"",
            dataPoints: [
                { label: "Microsoft", y: 44 },	
                { label: "Facebook", y: 419 },	
                { label: "Marriot Hotels", y: 383 },
                { label: "Twitter", y: 330 },	
                { label: "MyFitnessPal", y: 150 }
                
            ]
        }]
    });
    chart.render();
    
    }