window.onload = function () {
	var select = document.getElementById('lang');
		var div = document.getElementById('select');
		var type = true;
		var firstOption = div.children[0];
		div.addEventListener('click', fun, true);
		function fun(e){
			if(type){
				for(var i = 0; i<div.children.length; i++){
					div.children[i].classList.remove('hide');}
				}else{
					for(var i = 1; i<select.children.length; i++){
						div.children[i].classList.add('hide');}
					}
			type = !type;
		}

		for(var i = 0; i<div.children.length; i++){
			div.children[i].onclick = function(){
				var a = this.innerHTML;
				console.log(this);
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