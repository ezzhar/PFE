/* les slider entete */
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
    
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

function slidefun(n) {
	
	let i;
	for(i = 0;i<mySwiper.length;i++){
		mySwiper[i].style.display = "none";
	}
	for(i = 0;i<dot.length;i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > mySwiper.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = mySwiper.length;
	   }
	mySwiper[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}

/* les slider الأنشطة */
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });



  function updateNavbarBackground() {
    var navbar = document.querySelector('.navbar');
    if (window.pageYOffset > 0) {
      navbar.classList.add('white');
    } else {
      navbar.classList.remove('white');
    }
  }
  
  window.addEventListener('scroll', function() {
    updateNavbarBackground();
  })





  var swiper = new Swiper(".slide-container", {
    slidesPerView: 4,
    spaceBetween: 20,
    sliderPerGroup: 4,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1000: {
        slidesPerView: 4,
      },
    },
  });
  

