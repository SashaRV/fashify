function render_my_graph(arMetrica) {

    var arHostNames = Object.keys(arMetrica);
    var hostsDatasets = new Array();

    for(var host in arMetrica) {
        var color = randomColor();
        var snap =  {
            label: host,
            data: arMetrica[host]["SNAPS"],
            backgroundColor: color,
            borderColor: color,
            fill: false,
            lineTension: 0,
            borderWidth: 2
            //pointRadius: 0 // replace points
        }
        hostsDatasets.push(snap);
    }

    var config = {
    	type: "line",
    	data: {
            datasets: hostsDatasets
    	},
    	options: {
    		responsive: true,
    		title: {
    			display: true,
    			text: "Load average"
    		},
    		scales: {
    			xAxes: [{
    				type: "time",
    				display: true,
    				scaleLabel: {
    					display:true,
    					labelString: 'Date'
    				}
    			}],
    			yAxes:[{
    				display: true,
    				scaleLabel: {
    					display:true,
    					labelString: 'value'
    				}
    			}]
    		}
    	}
    }

    var ctx = document.getElementById("bizprofi-graph-canvas").getContext("2d");
    var graph = new Chart(ctx, config);

    // table 
    var table = document.createElement('table');
    var trHead = document.createElement('tr');

    var thHost = document.createElement('th');
    var thMin = document.createElement('th');
    var thMax = document.createElement('th');
    var thAvg = document.createElement('th');
    var thCurrent = document.createElement('th');

    var txtHost = document.createTextNode('hosts');
    var txtMin = document.createTextNode('min');
    var txtMax = document.createTextNode('max');
    var txtAvg = document.createTextNode('avg');
    var txtCurrent = document.createTextNode('current');

    thHost.appendChild(txtHost);
    thMin.appendChild(txtMin);
    thMax.appendChild(txtMax);
    thAvg.appendChild(txtAvg);
    thCurrent.appendChild(txtCurrent);

    trHead.appendChild(thHost);
    trHead.appendChild(thMin);
    trHead.appendChild(thMax);
    trHead.appendChild(thAvg);
    trHead.appendChild(thCurrent);

    table.appendChild(trHead);

    for(var i = 0; i < arHostNames.length; ++i) {
        var host = arHostNames[i];
        var tr = document.createElement('tr');
        for(var j = 0; j < 5; ++j) {
            var td = document.createElement('td');
            var text;

            switch(j) {
                case 0:
                    text = document.createTextNode(host);
                break;

                case 1:
                    text = document.createTextNode(arMetrica[host]["MIN"]);
                break;

                case 2:
                    text = document.createTextNode(arMetrica[host]["MAX"]);
                break;

                case 3:
                    text = document.createTextNode(arMetrica[host]["AVG"]);
                break;

                case 4:
                    var length = arMetrica[host]["SNAPS"].length;
                    var currentLoad = Math.round(arMetrica[host]["SNAPS"][length-1]['y'] * 100) / 100;
                    text = document.createTextNode(currentLoad);
                break;

            }
            td.appendChild(text);
            tr.appendChild(td);
        }
        
        table.appendChild(tr);
    }

    var divGraphWrap = document.getElementById('bizprofi-graph');
    divGraphWrap.appendChild(table);


    // Helper functions
    function randomColorFactor() {
        return Math.round(Math.random() * 100 * (Math.random() > 0.5 ? -1 : 1));
    }

    function randomColor(opacity) {
        return 'rgba(' + randomColorFactor() + ', ' + randomColorFactor() + ', ' + randomColorFactor() + ',' + (opacity || '.5') + ')';
    }

}