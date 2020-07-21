var score=0 ; 
var total =10;
var point =1;
var highest= total*point;
function init(){
	sessionStorage.setItem('a1','a');
	sessionStorage.setItem('a2','a');
	sessionStorage.setItem('a3','a');
	sessionStorage.setItem('a4','a');
	sessionStorage.setItem('a5','a');
	sessionStorage.setItem('a6','a');
	sessionStorage.setItem('a7','a');
	sessionStorage.setItem('a8','a');
	sessionStorage.setItem('a9','a');
	sessionStorage.setItem('a10','a');
}


$(document).ready (function(){
	$('.questionform').hide();

	$('#q1').show();

	$('#q1 #next').click(function(){
		$('.questionform').hide();
		process('q1');
		$('#q2').fadeIn(300);

		return false;
	});

	$('#q2 #next').click(function(){
		$('.questionform').hide();
		process('q2');
		$('#q3').fadeIn(300);
		return false;
	});

	$('#q3 #next').click(function(){
		$('.questionform').hide();
		process('q3');
		$('#q4').fadeIn(300);
		return false;
	});
	$('#q4 #next').click(function(){
		$('.questionform').hide();
		process('q4');
		$('#q5').fadeIn(300);
		return false;
	});
	$('#q5 #next').click(function(){
		$('.questionform').hide();
		process('q5');
		$('#q6').fadeIn(300);
		return false;
	});
	$('#q6 #next').click(function(){
		$('.questionform').hide();
		process('q6');
		$('#q7').fadeIn(300);
		return false;
	});
	$('#q7 #next').click(function(){
		$('.questionform').hide();
		process('q7');
		$('#q8').fadeIn(300);
		return false;
	});
	$('#q8 #next').click(function(){
		$('.questionform').hide();
		process('q8');
		$('#q9').fadeIn(300);
		return false;
	});
	$('#q9 #next').click(function(){
		$('.questionform').hide();
		process('q9');
		$('#q10').fadeIn(300);
		return false;
	});
	$('#q10 #next').click(function(){
		$('.questionform').hide();
		process('q10');
		$('#results').fadeIn(300);
		return false;
	});
});

	
function process(q){
	if(q=="q1"){
		var submitted = $('input[name=q1]:checked').val();
		if(submitted==sessionStorage.a1){
			score++;
		}

	}
	if(q=="q2"){
		var submitted = $('input[name=q2]:checked').val();
		if(submitted==sessionStorage.a2){
			score++;
		}

	}
	if(q=="q3"){
		var submitted = $('input[name=q3]:checked').val();
		if(submitted==sessionStorage.a3){
			score++;
		}

	}
	if(q=="q4"){
		var submitted = $('input[name=q4]:checked').val();
		if(submitted==sessionStorage.a4){
			score++;
		}

	}
	if(q=="q5"){
		var submitted = $('input[name=q5]:checked').val();
		if(submitted==sessionStorage.a5){
			score++;
		}

	}
	if(q=="q6"){
		var submitted = $('input[name=q6]:checked').val();
		if(submitted==sessionStorage.a6){
			score++;
		}

	}
	if(q=="q7"){
		var submitted = $('input[name=q7]:checked').val();
		if(submitted==sessionStorage.a7){
			score++;
		}

	}
	
	if(q=="q8"){
		var submitted = $('input[name=q8]:checked').val();
		if(submitted==sessionStorage.a8){
			score++;
		}

	}
	if(q=="q9"){
		var submitted = $('input[name=q9]:checked').val();
		if(submitted==sessionStorage.a9){
			score++;
		}

	}
	if(q=="q10"){
		var submitted = $('input[name=q10]:checked').val();
		if(submitted==sessionStorage.a10){
			score++;
		}
         $('#results').html('<h3>Your final score is :'+score+' out of 10</h3><a href="Quiz.html">Take Quiz Again</a>');
	}
return false;
}

window.addEventListener('load',init,false);

