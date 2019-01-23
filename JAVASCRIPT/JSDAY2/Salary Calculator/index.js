let wage = document.querySelector("#wage");
let hours = document.querySelector("#hours");
let days = document.querySelector("#days");


const salary = () => {
    let money = wage.value;
    let hrs = hours.value;
    let day = days.value;
    let total = document.querySelector(".total");
    let message = document.querySelector(".msg");
    let salary = money*hrs*day;
    message.innerHTML = "Your salary is"
    total.innerHTML = salary + "€";
}


