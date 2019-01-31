

document.addEventListener('DOMContentLoaded', () => {
  let plus = document.querySelector(".btn-plus");
  let minus = document.querySelector(".btn-minus");
  let knob = document.querySelector(".knob");
  let number = document.querySelector("#counter");
  let value = number.innerHTML;
  plus.addEventListener("click", () => { 
    if (value <= 10) {
      number.innerHTML = value ++;
    knob.style.width = value * 10 + "%";
   }

  });
  minus.addEventListener("click", () => {
    if (value >= 1) {
    number.innerHTML = value--;
    knob.style.width = value * 10 + "%";
    }
  });
});