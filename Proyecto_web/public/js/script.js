function updateTotalPrice(price) {
    const quantity = parseFloat(document.getElementById('quantity').value);
    const totalPrice = price * quantity;

    // Actualizar el contenido visible en el HTML con formato monetario
    document.getElementById('totalPrice').innerText = '$' + totalPrice.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

    // Actualizar el campo oculto con el valor sin formato (sin comas ni símbolo de dólar)
    document.getElementById('hiddenTotalPrice').value = totalPrice.toFixed(2);
}

document.addEventListener('DOMContentLoaded', function() {
    // Obtener el precio unitario desde el atributo data-price del elemento
    const price = parseFloat(document.getElementById('quantity').getAttribute('data-price'));
    
    // Llamar a la función para inicializar el totalPrice al cargar la página
    updateTotalPrice(price);
});



