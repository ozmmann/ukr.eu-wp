window.onload = function(){
	var url = '/wp-content/themes/ukreu';
	var slide = document.getElementsByClassName('HP-slide')[0];
	var bgUrl = [ url + "/img/HP-slide1.png", url + "/img/HP-slide2.png"];
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