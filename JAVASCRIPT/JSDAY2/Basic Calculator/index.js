let number1 = 0;
let clear = document.querySelector(".calc_input");
let op = null;
let screen = document.querySelector(".calc_input").focus();

const binOp = (symbol) => {
    number1 = parseInt(document.querySelector(".calc_input").value);
    document.querySelector(".calc_input").focus();
    clear.value = number1; 
    clear.focus(clear.setSelectionRange(0,clear.value.length));
    op = symbol;
    
}




const equal = () => {
    number2 = parseInt(document.querySelector(".calc_input").value);
    switch(op) {
        case "+":
        clear.value =number1 + number2;
        break;
        case "-":
        clear.value =number1 - number2;
        break;
        case "*":
        clear.value =number1 * number2;
        break;
        case "/":
        clear.value =number1 / number2;
        break;
        

    }
}
