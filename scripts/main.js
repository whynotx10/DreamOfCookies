document.addEventListener("DOMContentLoaded", () => {
    fetch("/list_ajax.php").then(function(response) {
        return response.json();
    }).then(function(data) {
        document.querySelector("#requests_counter").innerText = data.length;
    }).catch(function(err) {
        console.log('Fetch Error :-S', err);
    });
});