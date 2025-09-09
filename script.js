document.addEventListener('DOMContentLoaded', () => {

    const API_URL = 'php_logic/';

    // Formulario y campos
    const form = document.getElementById('registration-form');
    const registrationIdInput = document.getElementById('registration-id');
    const recordSelect = document.getElementById('record-select');

    // Botones
    const saveButton = document.getElementById('save-data');
    const newButton = document.getElementById('btn-new');
    const deleteButton = document.getElementById('btn-delete');
    const dniSearchButton = document.getElementById('btn-dni-search');
    const viewToggleButton = document.getElementById('view-toggle-btn');
    const cardView = document.getElementById('card-view');
    const listView = document.getElementById('list-view');

    // Asistencia
    const ASISTIO = 'A';
    const FALTO = 'F';

    // --- CARGA INICIAL ---

    loadAllRegistrations();

    // --- EVENT LISTENERS ---

    document.getElementById('export-pdf').addEventListener('click', exportToPDF);
    document.getElementById('export-excel').addEventListener('click', exportToExcel);
    document.getElementById('btn-dni-search').addEventListener('click', searchByDni);
    viewToggleButton.addEventListener('click', toggleView);
    document.getElementById('list-search-input').addEventListener('keyup', filterRecordList);

    // --- Delegated event listeners ---
    listView.addEventListener('click', async (e) => {
        const target = e.target;
        const recordId = target.closest('tr')?.dataset.recordId;

        if (!recordId) return;

        if (target.classList.contains('btn-list-view')) {
            await loadRegistrationData(recordId);
            toggleView(); // Switch back to card view
        }
        if (target.classList.contains('btn-list-print')) {
            await loadRegistrationData(recordId);
            // Give the browser a moment to render the data before printing
            setTimeout(() => window.print(), 200);
        }
        if (target.classList.contains('btn-list-delete')) {
            // Re-use the existing delete logic by loading the ID into the form
            registrationIdInput.value = recordId;
            deleteButton.click(); // Programmatically click the main delete button
        }
    });

    cardView.addEventListener('click', async (e) => {
        const target = e.target;
        if (target.classList.contains('btn-clear-block')) {
            const registrationId = registrationIdInput.value;
            if (!registrationId) {
                alert('Por favor, cargue un registro primero.');
                return;
            }

            if (confirm('¿Está seguro de que desea limpiar todas las asistencias de este bloque?')) {
                const block = target.closest('.attendance-block');
                const eventBlockId = block.dataset.blockId;

                try {
                    const response = await fetch(`${API_URL}clear_attendance_block.php`, {
                        method: 'DELETE',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: `registration_id=${registrationId}&event_block=${eventBlockId}`
                    });
                    const result = await response.json();

                    if (result.success) {
                        // Clear the cells visually
                        block.querySelectorAll('td').forEach(td => {
                            td.textContent = '';
                            td.className = '';
                            delete td.dataset.status;
                        });
                        alert(result.message);
                    } else {
                        alert(`Error: ${result.message}`);
                    }
                } catch (error) {
                    console.error('Error al limpiar el bloque:', error);
                    alert('Ocurrió un error de red.');
                }
            }
        }
    });

    // Cargar un registro al seleccionarlo del dropdown
    recordSelect.addEventListener('change', () => {
        const selectedId = recordSelect.value;
        if (selectedId) {
            loadRegistrationData(selectedId);
        } else {
            clearForm();
        }
    });

    // Guardar (Crear o Actualizar) un registro
    saveButton.addEventListener('click', async () => {
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());

        // --- VALIDACIÓN FRONTAL ---
        if (!data.control_card || !data.parent_name || !data.parent_dni) {
            alert('Por favor, complete los campos requeridos:\n- N° de Tarjeta de Control\n- Nombre del Apoderado\n- DNI del Apoderado');
            return; // Detiene la ejecución si faltan datos
        }

        const url = data.id ? `${API_URL}update.php` : `${API_URL}create.php`;
        const method = data.id ? 'PUT' : 'POST';

        // Para PUT, los datos no se envían como FormData, sino como string
        const body = new URLSearchParams(data).toString();

        try {
            const response = await fetch(url, {
                method: method,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: body
            });
            const result = await response.json();

            if (result.success) {
                alert(result.message);
                clearForm();
                loadAllRegistrations(); // Recargar la lista
            } else {
                alert(`Error: ${result.message}`);
            }
        } catch (error) {
            console.error('Error al guardar:', error);
            alert('Ocurrió un error de red.');
        }
    });

    // Botón para limpiar el formulario y empezar un nuevo registro
    newButton.addEventListener('click', clearForm);

    // Botón para eliminar un registro
    deleteButton.addEventListener('click', async () => {
        const registrationId = registrationIdInput.value;
        if (!registrationId) {
            alert('Por favor, primero cargue un registro para eliminar.');
            return;
        }

        if (confirm('¿Está seguro de que desea eliminar este registro? Esta acción no se puede deshacer.')) {
            try {
                const response = await fetch(`${API_URL}delete.php`, {
                    method: 'DELETE',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `id=${registrationId}`
                });
                const result = await response.json();

                if (result.success) {
                    alert(result.message);
                    clearForm();
                    loadAllRegistrations();
                } else {
                    alert(`Error: ${result.message}`);
                }
            } catch (error) {
                console.error('Error al eliminar:', error);
                alert('Ocurrió un error de red.');
            }
        }
    });

    // Manejar clics en las tablas de asistencia (usando delegación de eventos)
    document.querySelector('.container').addEventListener('click', (e) => {
        if (e.target.tagName === 'TD') {
            handleAttendanceClick(e.target);
        }
    });


    // --- FUNCIONES ---

    /**
     * Carga todos los registros y los pone en el select dropdown.
     */
    async function loadAllRegistrations() {
        clearForm(); // Asegura que el estado inicial sea 'nuevo registro'
        try {
            const response = await fetch(`${API_URL}read.php`);
            const result = await response.json();

            if (result.success) {
                recordSelect.innerHTML = '<option value="">-- Cargar un registro existente --</option>';
                result.data.forEach(reg => {
                    const option = document.createElement('option');
                    option.value = reg.id;
                    option.textContent = `${reg.parent_name} (DNI: ${reg.parent_dni})`;
                    recordSelect.appendChild(option);
                });
            }
        } catch (error) {
            console.error('Error cargando registros:', error);
        }
    }

    /**
     * Carga los datos de un único registro en el formulario y sus asistencias.
     * @param {number} id - El ID del registro a cargar.
     */
    async function loadRegistrationData(id) {
        saveButton.textContent = 'Actualizar Registro';
        try {
            // Cargar datos del formulario
            const formResponse = await fetch(`${API_URL}read.php?id=${id}`);
            const formResult = await formResponse.json();

            if (formResult.success && formResult.data.length > 0) {
                const data = formResult.data[0];
                for (const key in data) {
                    const input = form.querySelector(`[name="${key}"]`);
                    if (input) {
                        input.value = data[key];
                    }
                }
                registrationIdInput.value = data.id; // Asegurarse de que el ID oculto está seteado
            } else {
                throw new Error(formResult.message);
            }

            // Cargar datos de asistencia
            const attendanceResponse = await fetch(`${API_URL}attendance_handler.php?registration_id=${id}`);
            const attendanceResult = await attendanceResponse.json();

            clearAttendanceTables();
            if (attendanceResult.success) {
                displayAttendance(attendanceResult.data);
            }

        } catch (error) {
            console.error(`Error al cargar el registro ${id}:`, error);
            alert('No se pudieron cargar los datos del registro.');
            clearForm();
        }
    }

    /**
     * Limpia el formulario y las tablas de asistencia.
     */
    function clearForm() {
        form.reset();
        registrationIdInput.value = '';
        recordSelect.value = '';
        clearAttendanceTables();
        saveButton.textContent = 'Guardar Nuevo Registro';
    }

    /**
     * Limpia todos los iconos de las tablas de asistencia.
     */
    function clearAttendanceTables() {
        document.querySelectorAll('.attendance-block td').forEach(td => {
            td.textContent = '';
            td.className = '';
            delete td.dataset.status;
        });
    }

    /**
     * Muestra las asistencias guardadas en las tablas.
     * @param {object} attendanceData - Objeto con los datos de asistencia.
     */
    function displayAttendance(attendanceData) {
        for (const event_block in attendanceData) {
            const blockDiv = document.querySelector(`[data-block-id="${event_block}"]`);
            if (blockDiv) {
                const blockData = attendanceData[event_block];
                for (const event_index in blockData) {
                    const status = blockData[event_index];
                    const cell = blockDiv.querySelectorAll('td')[event_index];
                    if (cell) {
                        cell.dataset.status = status;
                        cell.textContent = status == 1 ? ASISTIO : FALTO;
                        cell.className = status == 1 ? 'asistio' : 'falto';
                    }
                }
            }
        }
    }

    /**
     * Maneja el clic en una celda de asistencia.
     * @param {HTMLElement} cell - La celda (TD) que fue clickeada.
     */
    async function handleAttendanceClick(cell) {
        const registrationId = registrationIdInput.value;
        if (!registrationId) {
            alert('Por favor, cargue un registro antes de marcar la asistencia.');
            return;
        }

        const currentStatus = cell.dataset.status;
        let newStatus;

        // Ciclo: vacio -> Asistió (1) -> Faltó (0) -> vacio
        if (currentStatus === undefined || currentStatus === '') {
            newStatus = 1; // Asistió
            cell.dataset.status = '1';
            cell.className = 'asistio';
            cell.textContent = ASISTIO;
        } else if (currentStatus === '1') {
            newStatus = 0; // Faltó
            cell.dataset.status = '0';
            cell.className = 'falto';
            cell.textContent = FALTO;
        } else { // currentStatus === '0'
            newStatus = null; // vacio
            delete cell.dataset.status;
            cell.className = '';
            cell.textContent = '';
        }

        // Obtener identificadores de la celda
        const blockDiv = cell.closest('.attendance-block');
        const event_block = blockDiv.dataset.blockId;
        const cells = Array.from(blockDiv.querySelectorAll('td'));
        const event_index = cells.indexOf(cell);

        // Guardar el cambio en la BD
        try {
            const response = await fetch(`${API_URL}attendance_handler.php`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    registration_id: registrationId,
                    event_block: event_block,
                    event_index: event_index,
                    status: newStatus // puede ser null, el backend debe manejarlo
                })
            });
            const result = await response.json();
            if (!result.success) {
                alert(`Error guardando asistencia: ${result.message}`);
                // Revertir el cambio visual si falla
                loadRegistrationData(registrationId);
            }
        } catch (error) {
            console.error('Error de red al guardar asistencia:', error);
            alert('Error de red. No se pudo guardar el cambio.');
            loadRegistrationData(registrationId);
        }
    }

    // --- FUNCIONES DE EXPORTACIÓN ---

    /**
     * Exporta el contenido de las dos páginas a un archivo PDF.
     */
    function exportToPDF() {
        const { jsPDF } = window.jspdf;
        const page1 = document.getElementById('page1');
        const page2 = document.getElementById('page2');
        const pdf = new jsPDF({
            orientation: 'p',
            unit: 'mm',
            format: 'a4'
        });

        const A4_WIDTH = 210;
        const A4_HEIGHT = 297;

        alert('Iniciando la exportación a PDF. Esto puede tardar un momento...');

        html2canvas(page1, { scale: 2, useCORS: true }).then(canvas1 => {
            const imgData1 = canvas1.toDataURL('image/png');
            pdf.addImage(imgData1, 'PNG', 0, 0, A4_WIDTH, A4_HEIGHT);

            html2canvas(page2, { scale: 2, useCORS: true }).then(canvas2 => {
                pdf.addPage();
                const imgData2 = canvas2.toDataURL('image/png');
                pdf.addImage(imgData2, 'PNG', 0, 0, A4_WIDTH, A4_HEIGHT);

                const parentName = form.querySelector('[name="parent_name"]').value || 'registro';
                pdf.save(`Registro_Asistencia_${parentName.replace(/ /g, '_')}.pdf`);
            });
        }).catch(err => {
            console.error("Error al generar PDF:", err);
            alert("Hubo un error al generar el PDF. Revisa la consola para más detalles.");
        });
    }

    /**
     * Exporta un resumen de asistencias a un archivo CSV (compatible con Excel).
     */
    function exportToExcel() {
        const registrationId = registrationIdInput.value;
        if (!registrationId) {
            alert('Por favor, cargue un registro para poder exportar sus datos.');
            return;
        }

        let csvContent = "data:text/csv;charset=utf-8,";

        // Encabezados
        const headers = [
            "ID Registro", "Nro Tarjeta", "Nombre Apoderado", "DNI Apoderado",
            "Evento", "Asistencias (A)", "Inasistencias (F)"
        ];
        csvContent += headers.join(",") + "\r\n";

        // Datos del apoderado
        const card = form.querySelector('[name="control-card"]').value;
        const name = form.querySelector('[name="parent_name"]').value;
        const dni = form.querySelector('[name="parent_dni"]').value;

        // Contar asistencias e inasistencias
        const attendanceSummary = {};
        document.querySelectorAll('.attendance-block').forEach(block => {
            const blockId = block.dataset.blockId;
            let asistioCount = 0;
            let faltoCount = 0;
            block.querySelectorAll('td').forEach(td => {
                if (td.dataset.status === '1') asistioCount++;
                if (td.dataset.status === '0') faltoCount++;
            });
            attendanceSummary[blockId] = { asistio: asistioCount, falto: faltoCount };
        });

        // Crear filas del CSV
        for (const blockId in attendanceSummary) {
            const summary = attendanceSummary[blockId];
            const row = [
                registrationId,
                `"${card}"`,
                `"${name}"`,
                `"${dni}"`,
                blockId,
                summary.asistio,
                summary.falto
            ];
            csvContent += row.join(",") + "\r\n";
        }

        // Descargar el archivo
        const encodedUri = encodeURI(csvContent);
        const link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        const parentName = form.querySelector('[name="parent_name"]').value || 'registro';
        link.setAttribute("download", `Resumen_Asistencia_${parentName.replace(/ /g, '_')}.csv`);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    /**
     * Busca un registro por DNI y lo carga en el formulario.
     */
    async function searchByDni() {
        const dniInput = document.getElementById('dni-search-input');
        const dni = dniInput.value.trim();

        if (!dni) {
            alert('Por favor, ingrese un DNI para buscar.');
            return;
        }

        const originalButtonText = dniSearchButton.textContent;
        dniSearchButton.disabled = true;
        dniSearchButton.textContent = 'Buscando...';

        try {
            const response = await fetch(`${API_URL}read.php?dni=${encodeURIComponent(dni)}`);
            const result = await response.json();

            if (result.success && result.data.length > 0) {
                // Si se encuentra, carga el primer resultado.
                const registrationId = result.data[0].id;
                await loadRegistrationData(registrationId);
                // Actualiza el select para que muestre el registro cargado
                recordSelect.value = registrationId;
            } else {
                alert('No se encontró ningún registro con el DNI proporcionado.');
                clearForm();
            }
        } catch (error) {
            console.error('Error al buscar por DNI:', error);
            alert('Ocurrió un error de red durante la búsqueda por DNI.');
        } finally {
            dniSearchButton.disabled = false;
            dniSearchButton.textContent = originalButtonText;
        }
    }

    // --- VIEW TOGGLING AND RENDERING ---

    /**
     * Toggles between the card view and the list view.
     */
    async function toggleView() {
        const isListViewHidden = listView.classList.contains('hidden');
        if (isListViewHidden) {
            // Switching to List View
            await renderListView();
            cardView.classList.add('hidden');
            listView.classList.remove('hidden');
            viewToggleButton.textContent = 'Ver Tarjeta de Asistencia';
        } else {
            // Switching to Card View
            cardView.classList.remove('hidden');
            listView.classList.add('hidden');
            viewToggleButton.textContent = 'Ver Lista de Registros';
        }
    }

    /**
     * Fetches all records and renders them into a table in the list view.
     */
    async function renderListView() {
        const tableContainer = document.getElementById('list-table-container');
        tableContainer.innerHTML = '<h2>Cargando lista...</h2>';
        try {
            const response = await fetch(`${API_URL}read.php`);
            const result = await response.json();

            if (result.success) {
                let tableHTML = `
                    <table class="records-table">
                        <thead>
                            <tr>
                                <th>N° Tarjeta</th>
                                <th>Nombre del Apoderado</th>
                                <th>DNI</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                `;
                result.data.forEach(reg => {
                    tableHTML += `
                        <tr data-record-id="${reg.id}">
                            <td>${reg.control_card || ''}</td>
                            <td>${reg.parent_name}</td>
                            <td>${reg.parent_dni}</td>
                            <td class="list-actions">
                                <button class="btn-list-view">Ver/Editar</button>
                                <button class="btn-list-print">Imprimir</button>
                                <button class="btn-list-delete">Eliminar</button>
                            </td>
                        </tr>
                    `;
                });
                tableHTML += '</tbody></table>';
                tableContainer.innerHTML = tableHTML;
            } else {
                throw new Error(result.message);
            }
        } catch (error) {
            console.error('Error al renderizar la lista:', error);
            tableContainer.innerHTML = '<h2>Error al cargar la lista de registros.</h2>';
        }
    }

    /**
     * Filters the records in the list view based on DNI or Name.
     */
    function filterRecordList() {
        const filter = document.getElementById('list-search-input').value.toUpperCase();
        const table = listView.querySelector('.records-table');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) { // Start from 1 to skip header row
            const nameTd = tr[i].getElementsByTagName('td')[1];
            const dniTd = tr[i].getElementsByTagName('td')[2];
            if (nameTd || dniTd) {
                const nameTxtValue = nameTd.textContent || nameTd.innerText;
                const dniTxtValue = dniTd.textContent || dniTd.innerText;
                if (nameTxtValue.toUpperCase().indexOf(filter) > -1 || dniTxtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
});
