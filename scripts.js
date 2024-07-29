document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll('button[name="añadir"]');

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function(event) {
            const form = button.closest('form');
            const formData = new FormData(form);

            fetch('carrito.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert("Paquete añadido al carrito.");
                console.log(data);
            })
            .catch(error => console.error('Error:', error));
        });
    });
});

