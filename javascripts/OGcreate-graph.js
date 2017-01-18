/*
 * Parse the data and create a graph with the data.
 */
function parseData(createGraph) {
	Papa.parse("./data.csv", {
		download: true,
		complete: function(results) {
			createGraph(results.data);
		}
	});
}

function createGraph(data) {
	var stemp = ["Pipe Surface Temperature"];
	var time = [];

	for (var i = 1; i < data.length; i++) {
		stemp.push(data[i][0]);
		time.push(data[i][3]);
	}

	console.log(time);
	console.log(stemp);

	var chart = c3.generate({
		bindto: '#chart',
	    data: {
	        columns: [
	        	stemp
	        ]
	    },
	    axis: {
	        x: {
	            type: 'category',
	            categories: time,
	            tick: {
	            	multiline: false,
                	culling: {
                    	max: 15
                	}
            	}
	        }
	    },
	    zoom: {
        	enabled: true
    	},
	    legend: {
	        position: 'right'
	    }
	});
}

parseData(createGraph);