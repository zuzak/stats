$(document).ready(function() {
//$('#debt').text('foo');
var debt;
debt = 0;
setInterval(function(){
     debt = debt + 31;
     $('#debt').text('£'+debt);
        }, 10);
});