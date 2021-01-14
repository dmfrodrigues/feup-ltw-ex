let form = document.getElementsByTagName('form')[0];
let table = document.getElementById("products");
form.addEventListener('submit', function(event) {
    event.preventDefault();

    let data = new FormData(form);
    
    let newLine = document.createElement("tr");
    newLine.innerHTML = `<td>${data.get('description')}</td><td><input value="${data.get('quantity')}"></td><td><input type="button" value="Remove"></td>`;
    table.append(newLine);

    alert('Submitted!');
});

