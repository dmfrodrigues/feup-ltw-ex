let form = document.getElementsByTagName("form")[0];
console.log(form);

let secondInput = document.querySelector("form :nth-child(2)");
console.log(secondInput);

let inputs = document.querySelectorAll("form input");
for(let i = 0; i < inputs.length; ++i){
    console.log(inputs[i]);
}
