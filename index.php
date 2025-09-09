<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Asistencia APAFA 2025-2026</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="view-toggle-bar">
        <button id="view-toggle-btn">Ver Lista de Registros</button>
    </div>
    <div id="card-view">
        <!-- Página 1 -->
        <div class="page" id="page1">
            <section class="half-page">
                <div class="header-left">
                    <img src="images/inca_garcilaso_de_la_vega.jpg" alt="Inca Garcilaso de la Vega" class="header-img-large">
                    <div class="hymn">
                        <p><strong>Himno al Colegio Garcilaso</strong></p>
                        <p>Entonemos un himno de gloria,<br>
                        cual se canta una marcha triunfal,<br>
                        en honor a la ilustre memoria<br>
                        del Colegio sin par.<br>
                        (Fragmento)</p>
                    </div>
                </div>
                <div class="header-right">
                    <img src="images/insignia_igv.png" alt="Insignia I.G.V." class="header-img-small">
                    <div class="board-members">
                        <p><strong>DRA. FELICITAS QUISPS MERMA</strong><br><em>Directora General</em></p>
                        <p><strong>Presidente:</strong> Aristides Lovon Fuentes</p>
                        <p><strong>Visepresidente:</strong> Edwin Guzman Ascara</p>
                        <p><strong>Secretario:</strong> Juan Ccotohuanca Pucho</p>
                        <p><strong>Tesorera:</strong> Yolanda Galicia Jimenes</p>
                        <p><strong>Vocal 1:</strong> Yuri Ernesto Lima Ojeda</p>
                        <p><strong>Vocal 2:</strong> Justina Rivera Tapara</p>
                        <p><strong>Vocal 3:</strong> Liz Karem Bayona Ttupa</p>
                    </div>
                </div>
            </section>
            <section class="half-page">
                <div class="page1-bottom-left">
                    <div class="main-title">
                        <h1>Institucion educativa Emblematica</h1>
                        <h2>G.U.E INCA GARCILASO DE LA VEGA</h2>
                    </div>
                    <img src="images/foto_grande.jpg" alt="Foto del Colegio" class="main-photo">
                    <p class="cursive-text" style="margin-top: auto;">"Despierta Garcilaso"</p>
                </div>
                <div class="page1-bottom-right">
                    <div class="apafa-title">
                        APAFA 2025 - 2026
                    </div>
                    <div id="ui-controls">
                        <!-- Selector de Registros -->
                        <div class="dni-search">
                            <label for="dni-search-input">Buscar por DNI:</label>
                            <input type="text" id="dni-search-input" placeholder="DNI del apoderado">
                            <button type="button" id="btn-dni-search">Buscar</button>
                        </div>
                        <div class="record-selector">
                            <label for="record-select">O seleccionar de la lista:</label>
                            <select id="record-select">
                                <option value="">-- Cargar un registro existente --</option>
                            </select>
                        </div>

                        <form id="registration-form" class="registration-form">
                            <input type="hidden" id="registration-id" name="id">
                            <div class="form-group-inline">
                            <label for="control-card">N° DE TARJETA DE CONTROL:</label>
                            <input type="text" id="control-card" name="control_card">
                        </div>
                        <fieldset>
                            <legend>Registro del Alumno(s)</legend>
                            <div class="student-info">
                                <input type="text" name="student_grade" placeholder="Grado">
                                <input type="text" name="student_section" placeholder="Sección">
                                <input type="text" name="student_level" placeholder="Nivel">
                                <input type="text" name="student_shift" placeholder="Turno">
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Registro del Padre o Apoderado</legend>
                            <div class="parent-info">
                                <input type="text" name="parent_name" placeholder="Nombre Completo">
                                <input type="text" name="parent_dni" placeholder="DNI">
                                <input type="text" name="parent_phone" placeholder="Celular">
                            </div>
                        </fieldset>
                    </form>
                    <div class="main-actions">
                        <button type="button" id="save-data">Guardar Nuevo Registro</button>
                        <button type="button" id="btn-new">Nuevo</button>
                        <button type="button" id="btn-delete">Eliminar</button>
                    </div>
                    </div> <!-- End of #ui-controls -->
                    <p style="margin-top: auto; text-align: right; font-weight: bold;">CUSCO - PERÚ</p>
                </div>
            </section>
        </div>

        <!-- Página 2 -->
        <div class="page" id="page2">
            <div class="page2-content">
                <section class="attendance-section" id="morning-shift">
                    <h3 class="attendance-title blue-text">Turno Mañana</h3>
                    <div class="attendance-block" data-block-id="asambleas_manana">
                        <div class="table-title-container">
                            <h4 class="table-title">Asambleas Generales</h4>
                            <button type="button" class="btn-clear-block" title="Limpiar esta tabla">Limpiar</button>
                        </div>
                        <table>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                    <div class="attendance-block" data-block-id="faenas_manana">
                        <div class="table-title-container">
                            <h4 class="table-title">Faenas</h4>
                            <button type="button" class="btn-clear-block" title="Limpiar esta tabla">Limpiar</button>
                        </div>
                        <table>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                    <div class="attendance-block" data-block-id="bapes_manana">
                        <div class="table-title-container">
                            <h4 class="table-title">Bapes</h4>
                            <button type="button" class="btn-clear-block" title="Limpiar esta tabla">Limpiar</button>
                        </div>
                        <table>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                    <div class="attendance-block" data-block-id="psicologia_manana">
                        <div class="table-title-container">
                            <h4 class="table-title">Psicología - Escuela de padres</h4>
                            <button type="button" class="btn-clear-block" title="Limpiar esta tabla">Limpiar</button>
                        </div>
                        <table>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                </section>
                <section class="attendance-section" id="afternoon-shift">
                    <h3 class="attendance-title blue-text">Turno Tarde</h3>
                    <div class="attendance-block" data-block-id="asambleas_tarde">
                        <div class="table-title-container">
                            <h4 class="table-title">Asambleas Generales</h4>
                            <button type="button" class="btn-clear-block" title="Limpiar esta tabla">Limpiar</button>
                        </div>
                        <table>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                    <div class="attendance-block" data-block-id="faenas_tarde">
                        <div class="table-title-container">
                            <h4 class="table-title">Faenas</h4>
                            <button type="button" class="btn-clear-block" title="Limpiar esta tabla">Limpiar</button>
                        </div>
                        <table>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                    <div class="attendance-block" data-block-id="bapes_tarde">
                        <div class="table-title-container">
                            <h4 class="table-title">Bapes</h4>
                            <button type="button" class="btn-clear-block" title="Limpiar esta tabla">Limpiar</button>
                        </div>
                        <table>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                    <div class="attendance-block" data-block-id="psicologia_tarde">
                        <div class="table-title-container">
                            <h4 class="table-title">Psicología - Escuela de padres</h4>
                            <button type="button" class="btn-clear-block" title="Limpiar esta tabla">Limpiar</button>
                        </div>
                        <table>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                </section>
            </div>
            <div class="observations">
                <label for="observations">Observaciones:</label>
                <textarea id="observations" name="observations" rows="2"></textarea>
            </div>
        </div>
    </div>
    <div id="list-view" class="hidden">
        <h2>Lista de Registros</h2>
        <div class="list-search-bar">
            <input type="text" id="list-search-input" placeholder="Filtrar por DNI o Nombre del Apoderado...">
        </div>
        <div id="list-table-container">
            <!-- The list of records will be dynamically inserted here by script.js -->
        </div>
    </div>

    <div class="export-print-actions">
        <button onclick="window.print()">Imprimir</button>
        <button id="export-pdf">Exportar a PDF</button>
        <button id="export-excel">Exportar a Excel</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
