/*
 * Parse the data using Papa Parse Library. http://papaparse.com
 * Create graph using C3js library. http://c3js.org
 */
function parseData(createGraph) { //parse data from data.csv to createGraph function 
	Papa.parse("data.csv", {
		download: true,
		complete: function(results) {
			createGraph(results.data);
		}
	});
}

function createGraph(data) { //Create graph from data parsed by parseData function
	var stemp = ["Pipe Surface Temperature"]; //array to store pipe surface temperature
    var atemp = ["Ambient Air Temperature"]; //array to store ambient air temperature
	var time = []; //array to store time

	for (var i = data.length - 20; i < data.length; i++) { //sort & push fields from data array to pipe surface temperature, ambient air temperature and time arrays
		stemp.push(data[i][0]);
        atemp.push(data[i][1]);
		time.push(data[i][3]);
	}

	console.log(time); //console log for testing
	console.log(stemp);
    console.log(atemp);

	var chart = c3.generate({ //generate chart 
		bindto: '#chart', //bind to chart html element with id 'chart'
	    data: {
	        columns: [ 
	        	stemp, atemp //set data sources for y axis
	        ]
	    },
	    axis: {
	        x: {
	            type: 'category',
	            categories: time, //set data source for x axis
	            tick: {
	            	multiline: false,
                	culling: {
                    	max: 20 //max number of lables on x axis
                	}
            	}
	        }
	    },
	    legend: {
	        position: 'bottom' //set position of legend
	    }
        
	});
}

parseData(createGraph); //run parseData function with createGraph parameter