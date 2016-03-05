var top = document.querySelector('.backtop');
top.addEventListener('click',function(){
	location.href = "#navigation";
});
var back = document.querySelector('.home');
back.addEventListener('click',function(){
	history.back(-1);
});
