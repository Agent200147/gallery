
window.setTimeout(function () {
    	document.body.classList.add('loaded', 'loaded_hiding');

    }, 4000);
    window.setTimeout(function(){
    	document.body.classList.add('loadeds');
    	document.body.classList.remove('loaded_hiding');
    }, 5500);

// -----ПРЕЛОАДЕР-----

	
	var item = document.querySelectorAll('.item');
	var user = document.querySelector('.user');
	var avatarka = document.querySelector('.avatarka');
	var men = document.querySelector('.menu');

	user.addEventListener('click', function(){
		if(user.classList.contains("active3")){
			user.classList.add('active4');
			user.classList.remove('active_r');
			men.style.opacity = "0";

			window.setTimeout(function(){
    	user.classList.add('active5');
    	user.classList.remove('active2');
			user.classList.remove('active3');
			}, 350);
			
		}
		else{
			men.style.opacity = "1";
			user.classList.remove('active4');
			user.classList.remove('active5');
			user.classList.add('active2');
			user.classList.add('active_r');
		window.setTimeout(function(){
    	user.classList.add('active3');}, 40);
		}
		// user.classList.toggle('active2');
		// window.setTimeout(function(){
  //   	user.classList.toggle('active3');}, 500);

	});


	var slider = document.querySelector('.sliderimg');





	var all_f = document.querySelector('.all_f');
	var sw = document.querySelector('.sw');

	var f_1 = document.querySelector('.f_1');
	var f_2 = document.querySelector('.f_2');

	f_1.addEventListener('click', function(){

		if(f_1.innerHTML == "Все фото"){

			all_f.style.display = "block";
			sw.style.display = "none";

			f_1.innerHTML = "Мои фото";
			f_2.innerHTML = "Все фото";
		}

		else if(f_1.innerHTML == "Мои фото"){
			all_f.style.display = "none";
			sw.style.display = "flex";

			f_1.innerHTML = "Все фото";
			f_2.innerHTML = "Мои фото";
		}

	})






	const screenWidth = window.screen.width;
	console.log(screenWidth);

	var left = document.querySelector('.left');
	var right = document.querySelector('.right');
	var sl = document.querySelector('.sl');
	var stran = document.querySelectorAll('.round');
	var rounds = document.querySelector('.rounds');
	stran[0].style.background = "black";
	

	var slides_non = document.querySelectorAll('.non');
	var com = document.querySelectorAll('.comon');
	var slides_all = document.querySelectorAll('.sw_slide');
	// var com = document.querySelectorAll('.comon');

	if(com.length == 0){
		right.style.opacity = '0';
		right.style.cursor = 'auto';
	}


	if(com.length > 0 && com.length <= 9){
		slides_all[1].classList.remove('non');
		slides_all[1].classList.add('show');
		var slides = document.querySelectorAll('.show');
		
		right.style.opacity = '1';
		right.style.cursor = 'pointer';
		console.log(slides.length);
		console.log(com.length);
	}

	if(com.length > 9 && com.length <= 18){
		slides_all[1].classList.remove('non');
		slides_all[1].classList.add('show');
		
		slides_all[2].classList.remove('non');
		slides_all[2].classList.add('show');
		var slides = document.querySelectorAll('.show');
		// var com = document.querySelectorAll('.comon');

		console.log(slides.length);
		console.log(com.length);
		console.log("usus");
	}

	if(com.length > 18 && com.length <= 27){
		slides_all[3].classList.add('show');
		var slides = document.querySelectorAll('.show');
		var com = document.querySelectorAll('.comon');
		slides_all[3].classList.remove('non');
		console.log(slides.length);
		console.log(com.length);

	}


	for(var i = 0; i < slides.length; i++){
		stran[i].style.display = "block";
		console.log("qqq")
	}

	rounds.style.width = (slides.length * 16 + (slides.length - 1) * 62) + "px";

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
	    slides[currentSlide].style.transform = "scale(0.7)";
	    // slides[currentSlide].style.transform = "rotate(0.5turn)";


	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    slides[currentSlide].style.transform = "scale(1)";
	    // slides[currentSlide].style.transform = "rotate(1turn)";

	    stran[currentSlide - 1].style.background = "";
	    stran[currentSlide].style.width = "60px";

	    window.setTimeout(function(){
	    for(var i = 0; i < slides.length; i++){
    		stran[i].style.width = "12px";
    		stran[i].style.height = "12px";
    		stran[currentSlide].style.width = "17px";
    		stran[currentSlide].style.height = "17px";}}, 300);


	    stran[currentSlide].style.background = "black";
	    
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
	    slides[currentSlide].style.transform = "scale(0.7)";
	    // slides[currentSlide].style.transform = "rotate(0.5turn)";
	    

	    currentSlide = (n+slides.length)%slides.length;

	    slides[currentSlide].style.marginLeft = '0px';
	    slides[currentSlide].style.opacity = '1';
	    slides[currentSlide].style.transform = "scale(1)";
	    // slides[currentSlide].style.transform = "rotate(1turn)";
	    
	    stran[currentSlide + 1].style.background = "";
	    stran[currentSlide].style.width = "60px";
	    window.setTimeout(function(){
    	    for(var i = 0; i < slides.length; i++){
    		stran[i].style.width = "12px";
    		stran[i].style.height = "12px";
    		stran[currentSlide].style.width = "17px";
    	stran[currentSlide].style.height = "17px";
    		}}, 300);

	    stran[currentSlide].style.background = "black";
	    
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