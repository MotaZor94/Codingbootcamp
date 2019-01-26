

const salary = () => {
    let money = document.querySelector("#wage");
    let hrs = document.querySelector("#hours");
    let day = document.querySelector("#days");
    let total = document.querySelector(".total");
    let message = document.querySelector(".msg");
    let salary = money.value*hrs.value*day.value;
    message.innerHTML = "Your salary is";
    total.innerHTML = salary + "€";
}


