
window.setTimeout(function () {
    	document.body.classList.add('loaded', 'loaded_hiding');

    }, 4000);
    window.setTimeout(function(){
    	document.body.classList.add('loadeds');
    	document.body.classList.remove('loaded_hiding');
    }, 5500);

// -----ПРЕЛОАДЕР-----





    var knop = document.querySelector('.knop')
	var chh = document.querySelector('.ch')

	var form_r = document.querySelector('.forma')
	var form_v = document.querySelector('.forma_v')
	var open_r = document.querySelector('.regb')
	var close_r = document.querySelector('.close_r')

	var open_v = document.querySelector('.vhodb')
	var close_v = document.querySelector('.close_v')

	var con = document.getElementsByClassName('container')
	var conn = document.querySelector('.container1')
	var slider = document.querySelector('.sliderimg')
	var lines = document.getElementsByClassName('lines')



    window.setTimeout(function () {
    	knop.setAttribute("disabled", "disabled");

    }, 1000);




	function Open_r(){
		console.log(con);
		for(var i = 0; i < con.length; i++){
			// con[i].style.opacity = '0.3';
			con[i].style.filter = 'blur(7px)';
		}

		for(var j = 0; j < lines.length; j++){
			// lines[j].style.opacity = '0.3';
			lines[j].style.filter = 'blur(7px)';
		}

		// conn.style.opacity = '0.3';
		conn.style.filter = 'blur(7px)';

		// slider.style.opacity = '0.3';
		slider.style.filter = 'blur(7px)';

		form_r.style.display = 'block';
	// 	document.onclick = function(e){
	//     if ( event.target.className != 'forma' ) {
	//         form_r.style.display = 'none';
	//     };
	// };
		}





	function Close_r(){
		for(var i = 0; i < con.length; i++){
			con[i].style.opacity = '1';
			con[i].style.filter = '';
		}

		for(var j = 0; j < lines.length; j++){
			lines[j].style.opacity = '1';
			lines[j].style.filter = '';
		}


		conn.style.opacity = '1';
		conn.style.filter = '';

		slider.style.opacity = '1';
		slider.style.filter = '';

		form_r.style.display = 'none';
		f.usernamer.value = '';
			f.email.value = '';
			f.number.value = '';
			f.userpassr.value = '';
			f.userpass2.value = '';
			chh.classList.remove('active');
			knop.classList.remove('active');
			document.getElementById('error').innerHTML = '';
			knop.setAttribute("disabled", "disabled");
	}





	




	function Open_v(){
		console.log(con);
		for(var i = 0; i < con.length; i++){
			// con[i].style.opacity = '0.3';
			con[i].style.filter = 'blur(7px)';
		}

		for(var j = 0; j < lines.length; j++){
			// lines[j].style.opacity = '0.3';
			lines[j].style.filter = 'blur(7px)';
		}

		// conn.style.opacity = '0.3';
		conn.style.filter = 'blur(7px)';

		// slider.style.opacity = '0.3';
		slider.style.filter = 'blur(7px)';

		form_v.style.display = 'block';
		}




	function Close_v(){
		for(var i = 0; i < con.length; i++){
			con[i].style.opacity = '1';
			con[i].style.filter = '';
		}

		for(var j = 0; j < lines.length; j++){
			lines[j].style.opacity = '1';
			lines[j].style.filter = '';
		}


		conn.style.opacity = '1';
		conn.style.filter = '';

		slider.style.opacity = '1';
		slider.style.filter = '';

		form_v.style.display = 'none';
	}





	open_r.addEventListener('click', Open_r);
	close_r.addEventListener('click', Close_r)

	open_v.addEventListener('click', Open_v);
	close_v.addEventListener('click', Close_v)
	



// -----ВАЛИДАЦИЯ ФОРМЫ-----

	chh.addEventListener('click', function(){
		this.classList.toggle('active');
		knop.classList.toggle('active');
		knop.toggleAttribute("disabled");
	})

	var f = document.querySelector('.regf')
		var name = f.usernamer.value;
		var email = f.email.value;
		var number = f.number.value;
		var userpassr = f.userpassr.value;
		var userpass2 = f.userpass2.value;

		var error = "";

	function checkform(f){
		var f = document.querySelector('.regf')
		var name = f.usernamer.value;
		var email = f.email.value;
		var number = f.number.value;
		var userpassr = f.userpassr.value;
		var userpass2 = f.userpass2.value;

		var error = "";
		
		var checklog = /^[\w]{6,}$/;
		var regExp = /\S+@\S+\.\S+/;
		var telcheck = /^\+?[78][-\(]?\d{3}\)?-?\d{3}-?\d{2}-?\d{2}$/;
		

		if(name == "" || email == "" || number == "" || userpassr == "" ||userpass2 == "")
			error = "Заполните все поля!";

		else if(name.length < 6)
			error += "Логин слишком короткий!";

		else if( !checklog.test(name) )
			error += "Неверно указан логин!";
		
		else if( !regExp.test(email) )
			error += "Неверно указан email!";

		else if( isNaN(number) )
			error += "Номер телефона должен содержать цифры!";

		else if(number.length < 11)
			error += "Номер телефона слишком короткий!";

		else if( !telcheck.test(number) )
			error += "Неверно указан номер телефона!";

		else if(userpassr.length < 6)
			error += "Слишком короткий пароль!";

		else if(userpassr != userpass2)
			error += "Пароли должны совпадать!";

		if(error != ""){
			document.getElementById('error').innerHTML = error;
			// return false;
		}

		else {
			alert("Все данные корректно заполнены!");
			console.log("\nЛогин: ", name)
			console.log("email: ", email)
			console.log("Номер телефона: ", number)
			console.log("Пароль: ", userpassr);

			f.usernamer.value = '';
			f.email.value = '';
			f.number.value = '';
			f.userpassr.value = '';
			f.userpass2.value = '';
			chh.classList.remove('active');
			knop.classList.remove('active');
			document.getElementById('error').innerHTML = error;
			knop.toggleAttribute("disabled");
			// return true;
				
		}

}



// 	function checkform(f){
// 		var name = f.usernamer.value;
// 		var email = f.email.value;
// 		var number = f.number.value;
// 		var userpassr = f.userpassr.value;
// 		var userpass2 = f.userpass2.value;

// 		var error = "";

// 		if(name == "" || email == "" || number == "" || userpassr == "" ||userpass2 == "")
// 			error = "Заполните все поля!";

// 		else if(userpassr != userpass2)
// 			error += "Пароли должны совпадать!";

// 		else if( isNaN(number) )
// 			error += "Номер телефона должен содержать цифры!";

// 		if(error != ""){
// 			document.getElementById('error').innerHTML = error;
// 			return false;
// 		}
// 		else {
// 			alert("Все данные корректно заполнены!");
// 			// Console.log(name, email, number, userpassr, userpass2)
// 			return true;
				
// 		}

// }


var zar = document.querySelector('.knopkareg')
zar.addEventListener('click', checkform)


var navham = document.querySelector('.navham')
var hamm = document.querySelector('.ham')
var shap = document.querySelector('.shapka')
var slid = document.querySelector('.slider')

hamm.addEventListener('click', function(){
	navham.classList.toggle('active')
	slid.classList.toggle('active')
	shap.classList.toggle('active')
})

// shap.addEventListener('click', function(){
// 	shap.classList.toggle('active')
// })
// -----ВАЛИДАЦИЯ ФОРМЫ-----


	// new Swiper('.sw', {
	// 	navigation:{
	// 		nextEl:'.swiper-button-next',
	// 		prevEl: '.swiper-button-prev'
	// 	},
	// });
	
	const screenWidth = window.screen.width
	console.log(screenWidth)

	var left = document.querySelector('.left');
	var right = document.querySelector('.right');
	var sl = document.querySelector('.sl');
	var stran = document.querySelector('.stran');

	

	var slides = document.querySelectorAll('.sw_slide');
	stran.innerHTML = "1/" + slides.length;
	var currentSlide = 0;


 
// -----FULL-----
// -----FULL-----
// -----FULL-----
	if(screenWidth > 1200){

	right.addEventListener('click', function(){
		nextSlide_full();
	})

	left.addEventListener('click', function(){
		previousSlide_full();
	})

	}




	



	function nextSlide_full() {
	    goToSlide1_full(currentSlide+1);
	}
	 
	function previousSlide_full() {
	    goToSlide2_full(currentSlide-1);
	}
	 
	function goToSlide1_full(n) {
		if (n == slides.length - 1)
		{
			right.style.opacity = '0';
			right.style.cursor = 'auto';
		}
		if(n == slides.length){
			slides[currentSlide].style.marginLeft = '0px';

		}
		else {
		left.style.opacity = '1';
		left.style.cursor = 'pointer';

		// slides[currentSlide - 1].style.marginLeft = '-2052px'
	    slides[currentSlide].style.marginLeft = '-1026px';
	    slides[currentSlide].style.opacity = '0';


	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}
	function goToSlide2_full(n) {
		if(currentSlide == 1){
			left.style.opacity = '0';
			left.style.cursor = 'auto';
		}
		if(n == -1){
			slides[0].style.marginLeft = '0px';
			currentSlide = 0;
		}
		else{
		right.style.opacity = '1';
		right.style.cursor = 'pointer';

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '0';
	    

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}

// -----FULL-----
// -----FULL-----
// -----FULL-----





// -----991-1200-----
// -----991-1200-----
// -----991-1200-----

	if(screenWidth <= 1200 && screenWidth > 991){
	right.addEventListener('click', function(){
		nextSlide_1200();
		console.log("dffdhd")
	})

	left.addEventListener('click', function(){
		previousSlide_1200();
	})

	}




	



	function nextSlide_1200() {
	    goToSlide1_1200(currentSlide+1);
	}
	 
	function previousSlide_1200() {
	    goToSlide2_1200(currentSlide-1);
	}
	 
	function goToSlide1_1200(n) {
		if (n == slides.length - 1)
		{
			right.style.opacity = '0';
			right.style.cursor = 'auto';
		}
		if(n == slides.length){
			slides[currentSlide].style.marginLeft = '0px';

		}
		else {
		left.style.opacity = '1';
		left.style.cursor = 'pointer';

		// slides[currentSlide - 1].style.marginLeft = '-2052px'
	    slides[currentSlide].style.marginLeft = '-816px';
	    slides[currentSlide].style.opacity = '0';

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}
	function goToSlide2_1200(n) {
		if(currentSlide == 1){
			left.style.opacity = '0';
			left.style.cursor = 'auto';
		}
		if(n == -1){
			slides[0].style.marginLeft = '0px';
			currentSlide = 0;
		}
		else{
		right.style.opacity = '1';
		right.style.cursor = 'pointer';

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '0';

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}

// -----991-1200-----
// -----991-1200-----
// -----991-1200-----




// -----767-991-----
// -----767-991-----
// -----767-991-----

	if(screenWidth <= 991 && screenWidth > 767){
	right.addEventListener('click', function(){
		nextSlide_991();
		console.log("dffdhd")
	})

	left.addEventListener('click', function(){
		previousSlide_991();
	})

	}




	



	function nextSlide_991() {
	    goToSlide1_991(currentSlide+1);
	}
	 
	function previousSlide_991() {
	    goToSlide2_991(currentSlide-1);
	}
	 
	function goToSlide1_991(n) {
		if (n == slides.length - 1)
		{
			right.style.opacity = '0';
			right.style.cursor = 'auto';
		}
		if(n == slides.length){
			slides[currentSlide].style.marginLeft = '0px';

		}
		else {
		left.style.opacity = '1';
		left.style.cursor = 'pointer';

		// slides[currentSlide - 1].style.marginLeft = '-2052px'
	    slides[currentSlide].style.marginLeft = '-633px';
	    slides[currentSlide].style.opacity = '0';

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}
	function goToSlide2_991(n) {
		if(currentSlide == 1){
			left.style.opacity = '0';
			left.style.cursor = 'auto';
		}
		if(n == -1){
			slides[0].style.marginLeft = '0px';
			currentSlide = 0;
		}
		else{
		right.style.opacity = '1';
		right.style.cursor = 'pointer';

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '0';

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}

// -----767-991-----
// -----767-991-----
// -----767-991-----





// -----565-767-----
// -----565-767-----
// -----565-767-----

	if(screenWidth <= 767 && screenWidth > 565){
	right.addEventListener('click', function(){
		nextSlide_767();
	})

	left.addEventListener('click', function(){
		previousSlide_767();
	})

	}




	



	function nextSlide_767() {
	    goToSlide1_767(currentSlide+1);
	}
	 
	function previousSlide_767() {
	    goToSlide2_767(currentSlide-1);
	}
	 
	function goToSlide1_767(n) {
		if (n == slides.length - 1)
		{
			right.style.opacity = '0';
			right.style.cursor = 'auto';
		}
		if(n == slides.length){
			slides[currentSlide].style.marginLeft = '0px';

		}
		else {
		left.style.opacity = '1';
		left.style.cursor = 'pointer';

		// slides[currentSlide - 1].style.marginLeft = '-2052px'
	    slides[currentSlide].style.marginLeft = '-472px';
	    slides[currentSlide].style.opacity = '0';

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}
	function goToSlide2_767(n) {
		if(currentSlide == 1){
			left.style.opacity = '0';
			left.style.cursor = 'auto';
		}
		if(n == -1){
			slides[0].style.marginLeft = '0px';
			currentSlide = 0;
		}
		else{
		right.style.opacity = '1';
		right.style.cursor = 'pointer';

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '0';

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}

// -----565-991-----
// -----565-991-----
// -----565-991-----





// -----MIN-----
// -----MIN-----
// -----MIN-----

	if(screenWidth <= 565){
	right.addEventListener('click', function(){
		nextSlide_565();
	})

	left.addEventListener('click', function(){
		previousSlide_565();
	})

	}




	



	function nextSlide_565() {
	    goToSlide1_565(currentSlide+1);
	}
	 
	function previousSlide_565() {
	    goToSlide2_565(currentSlide-1);
	}
	 
	function goToSlide1_565(n) {
		if (n == slides.length - 1)
		{
			right.style.opacity = '0';
			right.style.cursor = 'auto';
		}
		if(n == slides.length){
			slides[currentSlide].style.marginLeft = '0px';

		}
		else {
		left.style.opacity = '1';
		left.style.cursor = 'pointer';

		// slides[currentSlide - 1].style.marginLeft = '-2052px'
	    slides[currentSlide].style.marginLeft = 'calc(-95.7% - 20px)';
	    slides[currentSlide].style.opacity = '0';

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}
	function goToSlide2_565(n) {
		if(currentSlide == 1){
			left.style.opacity = '0';
			left.style.cursor = 'auto';
		}
		if(n == -1){
			slides[0].style.marginLeft = '0px';
			currentSlide = 0;
		}
		else{
		right.style.opacity = '1';
		right.style.cursor = 'pointer';

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '0';

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    stran.innerHTML = currentSlide + 1 + "/" + slides.length;
		}
	}

// -----MIN-----
// -----MIN-----
// -----MIN-----