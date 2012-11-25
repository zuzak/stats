$(document).ready(function() {
	//$('#debt').text('foo');
	var count = 0;
	var speed = 1;
	setInterval(function(){
		count = count + speed;
     	$('#debt').text('£'+count*31);
     	$('#birthbar').width((count/49)%100);
     	$('#deathbar').width((count/52)%100);
     	$('#births').text(Math.floor(count/4900));
     	$('#deaths').text(Math.floor(count/5200));
     	$('#ukchange').text(Math.floor(count/4900)-Math.floor(count/5200));
     	$('#germanychange').text(Math.floor(count/4700)-Math.floor(count/3500));
     	$('#runtime').text(secondsToString(count));
     	$('#worlddeath').text(Math.floor(count/57));
     	$('#worldbirth').text(Math.floor(count/24));
     	$('#worldchange').text(Math.floor(count/24)-Math.floor(count/57));
	}, 10);
	$('#speed').click(function(){
		if (speed == 10000000000) {
			speed = 1;
		} else {
			speed = speed * 10;
		}
		if (speed > 10000000) {
			$('#speed').text('1:'+(speed/1000000000)+'b');
		} else if (speed > 100000) {
			$('#speed').text('1:'+(speed/1000000)+'m');
		} else if (speed > 1000) {
			$('#speed').text('1:'+(speed/1000)+'k');
		} else {
			$('#speed').text('1:'+speed);
		}
	});
});

function secondsToString(ms)
{
seconds = ms / 100;
var nummilleniums = Math.floor(seconds / 315360000000);
var numcenturies = Math.floor(seconds / 3153600000);
var numyears = Math.floor(seconds / 31536000);
var numdays = Math.floor((seconds % 31536000) / 86400); 
var numhours = Math.floor(((seconds % 31536000) % 86400) / 3600);
var numminutes = Math.floor((((seconds % 31536000) % 86400) % 3600) / 60);
var numseconds = Math.floor((((seconds % 31536000) % 86400) % 3600) % 60);
if (nummilleniums > 0) {
	return nummilleniums + 'M';
} else if (numcenturies > 0) {
	return numcenturies + 'c';
} else if (numyears > 0) {
	return numyears + 'y';
} else if (numdays > 0) {
	return numdays + 'd';
} else if (numhours > 0) {
	return numhours + 'h';
} else if (numminutes > 0) {
	return numminutes + 'm';
} else if (numseconds > 0) {
	return numseconds + 's';
} else {
	return "...";
}

}