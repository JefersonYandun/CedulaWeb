const apiUrl = 'http://localhost:3000';

async function validarCedula() {
    const cedula = document.getElementById('cedulaInput').value;
    const resultadoDiv = document.getElementById('resultado');

    if (!cedula) {
        resultadoDiv.textContent = 'Por favor ingrese un número de cédula.';
        return;
    }

    try {
        const response = await fetch(`${apiUrl}/validcedulaec/${cedula}`);
        const data = await response.json();

        if (data.mensaje === 'La cédula es válida') {
            resultadoDiv.textContent = `${data.mensaje}. Provincia: ${data.provincia}`;
        } else {
            resultadoDiv.textContent = `${data.mensaje}. Provincia: ${data.provincia}`;
        }
    } catch (error) {
        resultadoDiv.textContent = 'Hubo un error al validar la cédula. Por favor, intente nuevamente.';
    }
}
