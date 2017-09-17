window.onload = function(){

	var slide = document.getElementsByClassName('HP-slide')[0];
	var bgUrl = ["../img/HP-slide1.png","../img/HP-slide2.png"];
	var count = 0;
	function changeBg(){
		if(count == bgUrl.length){
			count = 0;
		}
		slide.style.background = 'url('+bgUrl[count]+') no-repeat center top';
		count++;
	}
	setInterval(function(){changeBg()}, 5000);
}	