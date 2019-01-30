let p = document.querySelector("p");
let img = document.querySelector("img");
let body = document.querySelector("body");

const reveal = () => {
    p.innerHTML = `The opposite of love is not despite,it's<br>
    insensibility.The opposite of profession is not<br>
    ugliness,it's indifference. The opposite of faith<br>
    is not recusancy,it's indifference.And the<br>
    opposite of animation is not decease,it's<br>
    mediocrity.`;
}

const hide = () => {
    p.innerHTML = "";
}

const change = () => {
    body.style.backgroundColor = "black";
}


document.addEventListener("DOMContentLoaded", () => {
    img.addEventListener("mouseenter",reveal);
    img.addEventListener("mouseleave",hide);
    img.addEventListener("click",change);
});

