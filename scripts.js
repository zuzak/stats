$(document).ready(function() {
	//$('#debt').text('foo');
	var count = 0;
	var speed = 1;
	setInterval(function(){
		count = count + speed;
     	$('#debt').text('£'+count*31);
     	$('#birthbar').width((count/42)%100);
     	$('#deathbar').width((count/66)%100);
     	$('#births').text(Math.floor(count/4200));
     	$('#deaths').text(Math.floor(count/6600));
     	$('#ukchange').text(Math.floor(count/4200)-Math.floor(count/6600));
	}, 10);
	$('#speed').click(function(){
		if (speed == 1000) {
			speed = 1;
		} else {
			speed = speed * 10;
		}
		$('#speed').text('1:'+speed);
	});
});