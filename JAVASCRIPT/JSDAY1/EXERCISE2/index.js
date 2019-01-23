

let upperLimit = parseInt(prompt("What is your desired highest number in this game?"));
let lowerLimit = parseInt(prompt("What is your desired lowest number in this game?"));

let dice = () => {
   return Math.floor(Math.random() * (upperLimit)+(lowerLimit));
}

let roll1 = dice();

alert("Your random number is " + roll1);
