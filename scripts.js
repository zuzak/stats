$(document).ready(function() {
//$('#debt').text('foo');
var foo;
foo = 0;
setInterval(function(){
     foo = foo + 3;
     $('#debt').text('£'+foo);
        }, 1);
});