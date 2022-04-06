////////////////////////////
// Hamburger
const btnHamburger = document.querySelector("#btnHamburger");
const body = document.querySelector("body");
const header = document.querySelector(".header");
const overlay = document.querySelector(".overlay");
const fadeElems = document.querySelectorAll(".has-fade");

btnHamburger.addEventListener("click", function () {
  console.log("click hamburger");

  if (header.classList.contains("open")) {
    // Close Hamburger Menu
    body.classList.remove("noscroll");
    header.classList.remove("open");
    fadeElems.forEach(function (element) {
      element.classList.remove("fade-in");
      element.classList.add("fade-out");
    });
  } else {
    // Open Hamburger Menu
    body.classList.add("noscroll");
    header.classList.add("open");
    fadeElems.forEach(function (element) {
      element.classList.remove("fade-out");
      element.classList.add("fade-in");
    });
  }
});

///////////////////////////////////////
// Slider
const slider = function () {
  const slides = document.querySelectorAll(".slide");
  const btnLeft = document.querySelector(".slider__btn--left");
  const btnRight = document.querySelector(".slider__btn--right");
  const dotContainer = document.querySelector(".dots");

  let curSlide = 0;
  const maxSlide = slides.length;

  // Functions
  const createDots = function () {
    slides.forEach(function (_, i) {
      dotContainer.insertAdjacentHTML(
        "beforeend",
        `<button class="dots__dot" data-slide="${i}"></button>`
      );
    });
  };

  const activateDot = function (slide) {
    document
      .querySelectorAll(".dots__dot")
      .forEach((dot) => dot.classList.remove("dots__dot--active"));

    document
      .querySelector(`.dots__dot[data-slide="${slide}"]`)
      .classList.add("dots__dot--active");
  };

  const goToSlide = function (slide) {
    slides.forEach(
      (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
    );
  };

  // Next slide
  const nextSlide = function () {
    if (curSlide === maxSlide - 1) {
      curSlide = 0;
    } else {
      curSlide++;
    }

    goToSlide(curSlide);
    activateDot(curSlide);
  };

  // SLIDING AFTER EACH 3 SECONDS
  setInterval(() => {
    nextSlide();
  }, 3000);

  const prevSlide = function () {
    if (curSlide === 0) {
      curSlide = maxSlide - 1;
    } else {
      curSlide--;
    }
    goToSlide(curSlide);
    activateDot(curSlide);
  };

  const init = function () {
    goToSlide(0);
    createDots();

    activateDot(0);
  };
  init();

  // Event handlers
  btnRight.addEventListener("click", nextSlide);
  btnLeft.addEventListener("click", prevSlide);

  document.addEventListener("keydown", function (e) {
    if (e.key === "ArrowLeft") prevSlide();
    e.key === "ArrowRight" && nextSlide();
  });

  dotContainer.addEventListener("click", function (e) {
    if (e.target.classList.contains("dots__dot")) {
      const { slide } = e.target.dataset;
      goToSlide(slide);
      activateDot(slide);
    }
  });
};

const slides = document.querySelectorAll(".slide");
// Checking if the current page has slider
if (slides.length != 0) {
  slider();
}

////////////////////
// ACTIVITIES GALLERY
const imgBox = document.querySelectorAll(".gallery__img-box");

imgBox.forEach((box) => {
  box.addEventListener("mouseenter", function (e) {
    const color = e.target.dataset.color;

    e.target.style.borderColor = color;
  });
});

///////////////////////////
// VIDEO PLAYER

const playBtn = document.querySelector(".play-pause");
const videoPlayer = document.querySelector(".video-player");
const playBtnIcon = document.querySelector(".play-btn-icon");

if (playBtn) {
  playBtn.addEventListener("click", function () {
    if (videoPlayer.paused) {
      playBtnIcon.setAttribute("href", "images/play-pause.svg#icon-pause");
      playBtn.style.backgroundColor = "transparent";
      videoPlayer.play();

      let timeLeft = (videoPlayer.duration - videoPlayer.currentTime) * 1000;
      setTimeout(() => {
        playBtn.style.backgroundColor = "rgba(0, 0, 0, 0.322)";
        playBtnIcon.setAttribute("href", "images/play-pause.svg#icon-play2");
      }, timeLeft);
    } else {
      playBtnIcon.setAttribute("href", "images/play-pause.svg#icon-play2");
      playBtn.style.backgroundColor = "rgba(0, 0, 0, 0.322)";
      videoPlayer.pause();
    }
  });
}
