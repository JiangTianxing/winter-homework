var cwelcome = document.querySelector('.close-w');
var cp = document.querySelector('.cen-pic');
var write = document.querySelector('.write');
var home = document.querySelector('.home');
var journal = document.querySelector('.journal');
var ablum = document.querySelector('.ablum');
var pri = document.querySelector('.private');
cwelcome.addEventListener('click',function(){
	cp.style.display = "none";
});
home.addEventListener('click',function(){
	location.href = "index.php";
});
journal.addEventListener('click',function(){
	location.href = "index/jour.php";
});
ablum.addEventListener('click',function(){
	location.href = "index/album.php";
});
pri.addEventListener('click',function(){
	location.href = "index/revise.php";
});
write.addEventListener('click',function(){
	location.href = "index/write.php";
});