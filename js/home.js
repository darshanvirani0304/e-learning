// -------------------- Auto Typing --------------------
var typing = new Typed(".language", {
    strings : ['HTML', 'CSS', 'JavaScript', 'React Js', 'NodeJs', 'MongoDB', 'C', 'C++', 'Java', 'Python'],
    loop: true,
    typeSpeed: 150,
    backSpeed: 150
})

// -------------------- Count Number --------------------
let countNumber = document.querySelectorAll(".count-numbers");
let speed = 300;

countNumber.forEach((element) =>{
    let updateNumber = () =>{
        let targetNumber = parseInt(element.dataset.number);
        let initialNum = parseInt(element.innerText);
        let incrementNumber = Math.trunc(targetNumber / speed);
        
        if(initialNum < targetNumber){
            element.innerText = `${initialNum + incrementNumber}+`;
            setTimeout(updateNumber, 10);
        }
    };

    updateNumber();

});

// -------------------- Slider Card --------------------
let swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 50,
    loop: true,
    cneterSlide: 'true',
    fade: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0:{
            slidesPerView: 1
        },
        768:{
            slidesPerView: 2
        },
        1000:{
            slidesPerView: 3
        }
    }
});