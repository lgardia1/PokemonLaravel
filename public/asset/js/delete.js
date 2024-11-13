(function () {
    const formDelete = document.getElementById('formDelete');
    const tabla = document.getElementById('tablaProducto');

    if(tabla) {
        tabla.addEventListener('click', clickTable);
    }

    function clickTable(event) {
        let target = event.target;
        if(target.tagName === 'A' && target.getAttribute('class') === 'borrar') {
            event.preventDefault();
            if(confirm('Confirm delete?')) {
                let url = target.dataset.href;
                formDelete.action = url;
                formDelete.submit();
            }
        }
    }
})();