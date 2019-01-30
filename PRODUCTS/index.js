


class Product {
    constructor(name,price,quantity,button) {
      this.name = name;
      this.price = price;
      this.quantity = quantity;
    }

    sell() {
       return this.quantity -= 1;

    }
    store(count) {
        this.quantity += count;
    }

    element() {
        let name = this.name;
        let price = this.price;
        let quantity = this.quantity;
        let element = document.createElement("div");
        element.className = "products"
        element.innerHTML = (
            `<div class="name">${name}</div>
                <div class="price">Price:${price}</div>
                <div data-${name}="what" class="quant">Quantity:${quantity}</div>
                <button class="btn" type="button">Buy</button>
            </div`

        );
    
    return element;
    }





}

const products = [
    new Product('Nike', '200 $',20),
    new Product('Adidas', '300 $',20),  
    new Product('Carhartt', '199 $',120),
    new Product('Vans', '250 $',1200),
    new Product('Geox', '200 $',2000),
    new Product('Levis', '200 $',20),
    new Product('Zara', '300 $',20),  
];


document.addEventListener('DOMContentLoaded', () => {
    let shop = document.querySelector('.shop');
    for(let Product of products) {
      shop.appendChild(Product.element());
    };
    const buttons =document.querySelectorAll(".btn");
    let quantity= document.querySelector(".quant");
    for(let button of buttons){
        button.addEventListener("click", () =>{
        for(let Product of products) {
            quantity.innerHTML= "Quantity " + Product.sell(); 
        }
        });
    }
    
});










