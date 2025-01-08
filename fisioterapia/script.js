document.getElementById("form-reserva").addEventListener("submit", function (event) {
    const nombre = document.getElementById("nombre").value.trim();
    const correo = document.getElementById("correo").value.trim();

    if (nombre === "" || correo === "") {
        alert("Por favor, completa todos los campos.");
        event.preventDefault(); 
    }
});
