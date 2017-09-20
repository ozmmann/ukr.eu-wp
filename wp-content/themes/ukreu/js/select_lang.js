function changeLanguige (){
	var obj = {};

	if (document.documentElement.scrollWidth>768) {
			obj.select = document.getElementsByClassName('lang')[1];
			obj.div = document.getElementsByClassName('selec')[1];
			//var langBox = document.getElementsByClassName('lang-container')[1];
		}else{
			obj.select = document.getElementsByClassName('lang')[0];
			obj.div = document.getElementsByClassName('selec')[0];
			//var langBox =  document.getElementsByClassName('lang-container')[0];
		}
	
		var select = obj.select;
		var div = obj.div;
		var type = true;
		var firstOption = div.children[0]; 

		div.onclick = function fun(e){
				if(type){
					div.classList.add('clicked');
				for(var i = 0; i<div.children.length; i++){
					div.children[i].classList.remove('hide');}
				}else{
					div.classList.remove('clicked');
					for(var i = 1; i<select.children.length; i++){
						div.children[i].classList.add('hide');}
					}
			type = !type;
		}

		for(var i = 0; i<div.children.length; i++){
			div.children[i].onclick = function(){
				var a = this.innerHTML;
				var b = div.children[0].innerHTML;
				var colection = select.children;
				div.children[0].innerHTML = a;
				this.innerHTML = b;

				for(var i = 0; i<colection.length; i++){
					if(colection[i].value == a.toLowerCase()){
						colection[i].setAttribute('selected','selected');
					}else{
						colection[i].removeAttribute('selected');
					}	
				}
			}
		}
	}

changeLanguige();
window.addEventListener('resize',changeLanguige,false);