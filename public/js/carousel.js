const carousel_items = document.querySelectorAll('.carousel-item');

const carousel_indicators = document.querySelectorAll(".carousel-indicators li");

const car_length = carousel_items.length;

let count = 0;

setInterval(()=>{
  if (count == car_length) {
    count = 0;
  }
  carousel_items.forEach((e, index )=> {
    if(index == count){
      e.classList.add('active');
      carousel_indicators[count].classList.add("active");
    }else{
      e.classList.remove('active');
      carousel_indicators[index].classList.remove("active");
    }
  });
  
  count++;
},5000);

//control indicadores

carousel_indicators.forEach((el, i) => { 
  el.addEventListener('click', ()=> {
    carousel_items[i].classList.add('active');
    carousel_indicators[i].classList.add('active');
    carousel_items.forEach((e, index)=>{
      if(index !== i){
        e.classList.remove('active');
      }
    })
  });
  
});
