let form = document.getElementsByTagName('form')[0];
form.addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Submitted!');
});
