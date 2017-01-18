function parseData(createGraph) {
	Papa.parse("data.csv", {
		download: true,
		complete: function(results) {
			createGraph(results.data);
		}
	});
}

function status(data){
    var stemp = ["Pipe Surface Temperature"];
    var atemp = ["Ambient Air Temperature"];
	var time = [];
    var date = [];

	for (var i = 1; i < data.length; i++) {
		stemp.push(data[i][1]);
        atemp.push(data[i][0]);
		time.push(data[i][4]);
        date.push(data[i][3]);
	}
    
    
    var currentstemp = stemp[stemp.length - 1]; 
    var currentatemp = atemp[atemp.length - 1];
    var currenttime = time[time.length - 1];
    var currentdate = date[date.length - 1];
    
    console.log(currentstemp);
    console.log(currentatemp);
    console.log(currenttime);
    console.log(currentdate);
    
    document.getElementById("currentstemp").innerHTML = "Pipe Surface Temperature: " + currentstemp + "°C";
    document.getElementById("currentatemp").innerHTML = "Ambient Air Temperature: " + currentatemp + "°C";
    document.getElementById("currenttime").innerHTML = "Data Measured at " + currenttime + " " + currentdate;
}

parseData(status);