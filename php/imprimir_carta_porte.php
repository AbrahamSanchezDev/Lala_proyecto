<?php
    include "registro_load.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <script>
    function printTable() {
        // Selecciona la tabla que deseas imprimir
        const table = document.querySelector('.table-container').innerHTML;

        // Abre una nueva ventana de impresión
        const printWindow = window.open('', '', 'height=500,width=800');
        printWindow.document.write('<html><head><title>Imprimir Tabla</title>');
        printWindow.document.write('<style>');
        printWindow.document.write('table { width: 100%; border-collapse: collapse; }');
        printWindow.document.write('th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }');
        printWindow.document.write('th { background-color: #f2f2f2; }');
        printWindow.document.write('</style></head><body>');
        printWindow.document.write(table);
        printWindow.document.write('</body></html>');

        // Cierra el documento y activa la ventana de impresión
        printWindow.document.close();
        printWindow.print();
    }



    const printAll = <?php echo json_encode($printAll); ?>;
    const doPrint = <?php echo json_encode($doPrint); ?>;

    function updateDisplay(elemento) {
        const operador = elemento["operador"];
        const placa_de_transporte = elemento["placa_de_transporte"];
        const modelo = elemento["modelo"];
        const ciudad_origen = elemento["ciudad_origen"];
        const fecha_de_salida = elemento["fecha_de_salida"];
        const hora_de_salida_de_transporte = elemento["hora_de_salida_de_transporte"];
        const direccion_de_destino = elemento["direccion_de_destino"];
        const numero_de_contacto = elemento["numero_de_contacto"];

        if (elemento != undefined && elemento != "") {
            console.log(operador);
            console.log(placa_de_transporte);
            console.log(modelo);
            console.log(ciudad_origen);
            console.log(fecha_de_salida);
            console.log(hora_de_salida_de_transporte);
            console.log(direccion_de_destino);
            console.log(numero_de_contacto);
        }


        const operadorInput = document.getElementById("operador");
        const placa_de_transporteInput = document.getElementById("placa_de_transporte");
        const modeloInput = document.getElementById("modelo");
        const ciudad_origenInput = document.getElementById("ciudad_origen");
        const fecha_de_salidaInput = document.getElementById("fecha_de_salida");
        const hora_de_salida_de_transporteInput = document.getElementById("hora_de_salida_de_transporte");
        const direccion_de_destinoInput = document.getElementById("direccion_de_destino");
        const numero_de_contactoInput = document.getElementById("numero_de_contacto");


        operadorInput.value = operador == undefined ? "" : operador;
        placa_de_transporteInput.value = placa_de_transporte == undefined ? "" : placa_de_transporte;
        modeloInput.value = modelo == undefined ? "" : modelo;
        ciudad_origenInput.value = ciudad_origen == undefined ? "" : ciudad_origen;
        fecha_de_salidaInput.value = fecha_de_salida == undefined ? "" : fecha_de_salida;
        hora_de_salida_de_transporteInput.value = hora_de_salida_de_transporte == undefined ? "" :
            hora_de_salida_de_transporte;
        direccion_de_destinoInput.value = direccion_de_destino == undefined ? "" : direccion_de_destino;
        numero_de_contactoInput.value = numero_de_contacto == undefined ? "" : numero_de_contacto;

        operadorInput.innerHTML = operador == undefined ? "" : operador;
    }

    if (doPrint) {
        if (printAll) {
            printTable();
        } else {
            const elemento = <?php echo json_encode($carta_porte_a_imprimir); ?>;
            updateDisplay(elemento);
            printElement();

        }
        <?php 
                    $doPrint = false;
                    $printAll = false;
                ?>;
    }

    function printElement() {
        // Selecciona la tabla que deseas imprimir
        const formContainer = document.getElementById('cartaPorteForm');

        const formClone = formContainer.cloneNode(true);

        const inputs = formClone.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            if (input.tagName === 'TEXTAREA') {
                // Para textareas, copia el contenido actual al texto interno
                input.textContent = input.value;
            } else if (input.tagName === 'SELECT') {
                // Para selects, asegura que el valor seleccionado esté reflejado
                const selectedOption = input.querySelector(`option[value="${input.value}"]`);
                if (selectedOption) selectedOption.setAttribute('selected', 'selected');
            } else {
                // Para inputs, copia el valor actual al atributo 'value'
                input.setAttribute('value', input.value);
            }
        });

        const styles = Array.from(document.querySelectorAll('link[rel="stylesheet"], style'))
            // .filter(style => !(style.href && style.href.includes('bootstrap.min.css')))
            .map(style => style.outerHTML)
            .join('');

        const headerHTML = `
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="../imgs/SEPRADO.png" alt="Logo" style="width: 150px; height: auto;">
            <h1 style="font-size: 24px; margin: 10px 0;">CARTA PORTE</h1>
            <p style="font-size: 14px; margin: 5px 0;">
                Av. Irapuato 1790, Ciudad. Industrial Irapuato, <br>
                36541 Irapuato, Gto.
            </p>
        </div>
    `;
        // Abre una nueva ventana de impresión
        const printWindowElement = window.open('', '', 'height=500,width=800');

        printWindowElement.document.write('<html><head><title>Imprimir Carta Porte</title>');
        //Agregar los estilos originales
        printWindowElement.document.write(styles);
        printWindowElement.document.write('</head><body>');
        printWindowElement.document.write(headerHTML);
        printWindowElement.document.write(formClone.innerHTML);
        printWindowElement.document.write('</body></html>');

        // Cierra el documento y activa la ventana de impresión
        printWindowElement.document.close();
        printWindowElement.print();
    }
    </script>
</body>

</html>