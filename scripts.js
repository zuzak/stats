$(document).ready(function() {
	//$('#debt').text('foo');
	var count = 0;
	setInterval(function(){
		count = count + 1;
     	$('#debt').text('£'+count*31);
     	$('#birthbar').width((count/42)%100);
     	$('#deathbar').width((count/66)%100);
     	$('#births').text(Math.floor(count/4200));
     	$('#deaths').text(Math.floor(count/6600));
     	$('#ukchange').text(Math.floor(count/4200)-Math.floor(count/6600));
	}, 10);
});