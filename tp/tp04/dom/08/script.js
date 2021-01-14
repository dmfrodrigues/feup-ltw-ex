function sum(l){
    let ret = 0;
    for(let i = 0; i < l.length; ++i){
        ret += l[i];
    }
    return ret;
}

let form = document.getElementsByTagName('form')[0];
let table = document.getElementById("products");
form.addEventListener('submit', function(event) {
    event.preventDefault();

    let data = new FormData(form);
    
    let newLine = document.createElement("tr");
    newLine.innerHTML = `<td>${data.get('description')}</td><td><input value="${data.get('quantity')}" onchange="updateTotal()" onkeyup="updateTotal()"></td><td><input type="button" value="Remove" onclick="this.parentNode.parentNode.remove(); updateTotal();"></td>`;
    table.append(newLine);

    updateTotal();
});

let total = document.getElementById("total");
function updateTotal(){
    let items = [...table.querySelectorAll("input:not([type='button'])")];
    let itemQuantities = items.map(u => parseInt(u.value));
    total.innerHTML = sum(itemQuantities);
}
