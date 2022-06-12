//selección de los slides
const slides = document.querySelectorAll(".slide");
//selección del contenedor de los controles del slide
const slideshow_controllers = document.querySelector(".slideshow-controllers");

//creación de los controles del slide
slides.forEach((e, i) => {
  let slide_controller = document.createElement("div");
  slide_controller.setAttribute("class", "control-slide");
  slide_controller.setAttribute("data-slide", i);
  if (i == 0) {
    slide_controller.classList.add("control-active");
  }
  slideshow_controllers.appendChild(slide_controller);
});

//funcionalidad slideshow

const slides_length = slides.length - 1;

let index = 0;

let nIntervalId;

//función que activa un contendor slide de manera secuencial
//también activa su controlador correspondiente
function interval() {
  const sldCtrl = document.querySelectorAll(".control-slide");

  slides.forEach((element, i) => {
    if (i == index) {
      element.classList.add("active");
      sldCtrl[index].classList.add("control-active");
    } else {
      element.classList.remove("active");
    }
  });

  sldCtrl.forEach((el, i) => {
    if (i != index) {
      el.classList.remove("control-active");
    }
  });

  if (index == slides_length) {
    index = 0;
  } else {
    index++;
  }
}
//cambio de slide
function changeInterval() {
  if (!intervalId) {
    intervalId = setInterval(interval, 7000);
  }
}
//detiene el slide
function stopSlideInterval() {
  clearInterval(intervalId);
  intervalId = null;
}
const slideshow_container = document.querySelector(".slideshow-container");
//función que se activa por defecto al cargar por primera vez el documento
intervalId = setInterval(interval, 7000);
//eventos del mouse, si entra el puntero del mouse en el contenedor de los slide se detiene el cambio de slide
//si sale se reactiva de nuevo
slideshow_container.addEventListener("mouseenter", stopSlideInterval);
slideshow_container.addEventListener("mouseleave", changeInterval);

//funcionalidad control slides

const data_slides = document.querySelectorAll(".control-slide");

data_slides.forEach((e) => {
  let index;
  e.addEventListener("click", () => {
    index = e.getAttribute("data-slide");
    slides[index].classList.add("active");
    data_slides[index].classList.add("control-active");
    slides.forEach((e, i) => {
      if (i != index) {
        e.classList.remove("active");
      }
    });
    data_slides.forEach((e, i) => {
      if (i != index) {
        e.classList.remove("control-active");
      }
    });
    console.log(index);
  });
});
