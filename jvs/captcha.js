function randomnum()
{
		var number1 = 5;
        var number2 = 50;
        var randomnum = (parseInt(number2) - parseInt(number1)) + 1;
        var rand1 = Math.floor(Math.random()*randomnum)+parseInt(number1);
        var rand2 = Math.floor(Math.random()*randomnum)+parseInt(number1);
		$(".rand1").html(rand1);
		$(".rand2").html(rand2);
}

$(document).ready(function(){
$(".re").click(function(){
		randomnum();
});

$("#submit").click(function(){
		
	var total=parseInt($('.rand1').html())+parseInt($('.rand2').html());
	var total1=$('#total').val();
	if(total!=total1)
	{
		alert(" total incorrect !!!");
		randomnum();
		return false;
	}
	else
	{
		alert("total correct !!!"); return true ;
	}
});
randomnum();
});
