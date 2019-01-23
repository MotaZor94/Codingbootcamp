/*let account1 = (000256784,790);
let account2 = 000986056;
let account3 = 001546238;
let account4 = 030987456;

let accNumber = parseInt(prompt("What is your account number?"));

if (accNumber === account1) {
    alert("Your Account balance is 790 euro");
} else if (accNumber === account2) {
    alert("Your Account balance is 5600 euro");
} else if (accNumber === account3) {
    alert("Your Account balance is 78 065 euro");
} else if (accNumber === account4) {
    alert("Your Account balance is 120 910 euro");
} else {
    alert("Invalid account number");
} */

/*
const account1 = "000256784";
const account2 = "000986056";
const account3 = "001546238";
const account4 = "030987456";

let balance1 = 790;
let balance2 = 5600;
let balance3 = 78065;
let balance4 = 120910;


let accNumber = prompt("What is your account number?");

if (accNumber === account1) {
    alert(`Your Account balance is ${balance1} euro`);
    let withdraw = parseInt(prompt("How much would you like to withdraw?"));
    alert(`You just withdrawed ${withdraw} euro`);
    let total = balance1 - withdraw;
    balance1 = total;
    alert(`Your total balance after withdraw is ${balance1}`)
} 
else if (accNumber === account2) {
    alert(`Your Account balance is ${balance2} euro`);
    let withdraw = parseInt(prompt("How much would you like to withdraw?"));
    alert(`How much would you like to withdraw?`);
    let total = balance2 - withdraw;
    balance2 = total;
    alert(`Your total balance after withdraw is ${balance2}`);
} 
else if (accNumber === account3) {
    alert(`Your Account balance is ${balance3} euro`);
    let withdraw = parseInt(prompt("How much would you like to withdraw?"));
    alert(`How much would you like to withdraw?`);
    let total = balance3 - withdraw;
    balance3 = total;
    alert(`Your total balance after withdraw is ${balance3}`);
    
} 
else if (accNumber === account4) {
    alert(`Your Account balance is ${balance4} euro`);
    let withdraw = parseInt(prompt("How much would you like to withdraw?"));
    alert(`How much would you like to withdraw?`);
    let total = balance4 - withdraw;
    balance4 = total;
    alert(`Your total balance after withdraw is ${balance4}`);
}


*/


const account1 = "000256784";
const account2 = "000986056";
const account3 = "001546238";
const account4 = "030987456";

let balance1 = 790;
let balance2 = 5600;
let balance3 = 78065;
let balance4 = 120910;


let userAccount = prompt("Your acccount number: ");
let userAction = prompt("Your action: ");

if(userAction === "balance") {
    let userBalance = null;

if (userAccount === account1) {
    userBalance = balance1;
} else if (userAccount === account2) {
    userBalance = balance2;
} else if (userAccount === account3) {
    userBalance = balance3;
} else if (userAccount === account4) {
    userBalance = balance4;
}


