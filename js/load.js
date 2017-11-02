$(document).ready(function(){
	$('.btn-load').click(function(){
		$('.loader').show();
		JSONObject = document.getElementById('races').innerHTML;
		JSONObject = JSON.parse(JSONObject);
		//JSONObject = JSON.stringify(JSONObject);
		JSONObject = JSONObject.MRData.RaceTable.Races;
		var length2 = Object.keys(JSONObject).length;
		var length2 = Object.keys(JSONObject).length;
		setTimeout(function(){		
			for (var c = 0; c <= length2; c++){
				round = JSONObject[c].round;
				date = JSONObject[c].date;
				datelength = date.length;
				year =date.substr(0, 4);
				month =date.substr(5,2);
				day = date.substr(datelength -2);	
				date = day+"/"+month+"/"+year;
				time = JSONObject[c].time;
				time = time.substr(0,5);
				race = JSONObject[c].raceName;
				circuit = JSONObject[c].Circuit.circuitName;
				country = JSONObject[c].Circuit.Location.country;
				flag = '<img src ="/assets/design/images/'+country+'.png" style="margin-right:9px; margin-bottom: -3px;"/>';
				row = "<tr><td>"+round+"</td><td>"+date+"</td><td>"+time+"</td><td>"+race+"</td><td>"+circuit+"</td><td><span>"+flag+country+"</span></td></tr>";
				$(".data-table").append(row);
				
			}
		});
		setTimeout(function(){
			$('.loader').hide();
			$('.data-table-wrapper').show();
		},1000);
	});
});
