let wage = parseInt(prompt("What is your wage per hour?"));
let hours = parseInt(prompt("How much hours do you work per day?"));
let days = parseInt(prompt("How much days do you work per month?"));

const tax = 0.25;
let salary = (wage, hours, days) => {
    return wage * hours * days;
}

let taxedSalary = (amount, tax) => {
    return amount * (1- tax);
}

let money = salary(wage, hours, days);

let afterTax = taxedSalary(money, tax);

alert("Your salary before tax is: " + money);
alert("Your salary after tax is: " + afterTax);

