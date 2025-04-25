<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro de Empleado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/añadir.css">
</head>
<body>
    <form>
        <div class="section">
            <h2>Nuevo Empleado</h2>
            <div class="field-group">
                <div class="field">
                    <label>Cédula</label>
                    <div class="cedula-group">
                        <!-- Primer campo: Select con opciones -->
                        <select required>
                            <option value="" disabled selected>Seleccione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="P">P</option>
                            <option value="E">E</option>
                            <option value="NE">NE</option>
                        </select>
                    
                        <!-- Segundo campo: Entrada numérica -->
                        <input 
                            type="number" 
                            placeholder="Ej: 1234" 
                            min="0" 
                            maxlength="4" 
                            oninput="if(this.value.length > 4) this.value = this.value.slice(0, 4);" 
                            required>
                    
                        <!-- Tercer campo: Entrada numérica -->
                        <input 
                            type="number" 
                            placeholder="Ej: 12345" 
                            min="0" 
                            maxlength="5" 
                            oninput="if(this.value.length > 5) this.value = this.value.slice(0, 5);" 
                            required>
                    </div>
                </div>
                <div class="field"><label>Primer Nombre</label>
                    <input 
                        type="text" 
                        placeholder="Ej: Juan" 
                        pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+" 
                        oninput="this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ ]/g, '')" 
                        required>
                </div>
                <div class="field"><label>Segundo Nombre</label>
                    <input 
                        type="text" 
                        placeholder="Ej: Carlos" 
                        pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+" 
                        oninput="this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ ]/g, '')">
                </div>
                <div class="field"><label>Primer Apellido</label>
                    <input 
                        type="text" 
                        placeholder="Ej: Pérez" 
                        pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+" 
                        oninput="this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ ]/g, '')" 
                        required>
                </div>
                <div class="field"><label>Segundo Apellido</label>
                    <input 
                        type="text" 
                        placeholder="Ej: Gómez" 
                        pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+" 
                        oninput="this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ ]/g, '')">
                </div>
                <div class="field"><label>Género</label>
                    <select>
                        <option>Seleccione...</option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                        <option>Otro</option>
                    </select>
                </div>
                <div class="field"><label>Estado Civil</label>
                    <select>
                        <option>Seleccione...</option>
                        <option>Soltero/a</option>
                        <option>Casado/a</option>
                        <option>Divorciado/a</option>
                        <option>Viudo/a</option>
                    </select>
                </div>
                <div class="field"><label>Tipo de Sangre</label>
                    <select>
                        <option>Seleccione...</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                </div>
                <div class="field"><label>Fecha de Nacimiento</label><input type="date"></div>
                <div class="field full-width">
                    <label>¿Está usted casada?</label>
                    <select id="apellidoCasadaSelect" onchange="toggleApellidoCasada()">
                        <option value="" disabled selected>Seleccione...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <label>Si esta casada, por favor, escriba su apellido de casada aqui:</label>
                    <input 
                        type="text" 
                        id="apellidoCasadaInput" 
                        placeholder="Apellido de casada" 
                        disabled>
                </div>
                <div class="field"><label>Nacionalidad</label>
                    <select>
                        <option>Panamá</option>
                        <option>Colombia</option>
                        <option>Venezuela</option>
                        <option>Otro</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Información de Contacto</h2>
            <div class="field-group">
                <div class="field"><label>Celular</label><input type="tel"></div>
                <div class="field"><label>Teléfono Fijo</label><input type="tel"></div>
                <div class="field"><label>Correo Electrónico</label><input type="email"></div>
            </div>
        </div>

        <div class="section">
            <h2>Información de Ubicación</h2>
            <div class="field-group">
                <div class="field">
                    <label>Provincia</label>
                    <select id="provincia" onchange="cargarDistritos()" required>
                        <option value="" disabled selected>Seleccione una provincia</option>
                    </select>
                </div>
                <div class="field">
                    <label>Distrito</label>
                    <select id="distrito" onchange="cargarCorregimientos()" required>
                        <option value="" disabled selected>Seleccione un distrito</option>
                    </select>
                </div>
                <div class="field">
                    <label>Corregimiento</label>
                    <select id="corregimiento" required>
                        <option value="" disabled selected>Seleccione un corregimiento</option>
                    </select>
                </div>
            </div>
            <div class="field-group">
                <div class="field"><label>Calle</label><input type="text"></div>
                <div class="field"><label>Casa/Apto</label><input type="text"></div>
                <div class="field"><label>Comunidad/Urbanización</label><input type="text"></div>
            </div>
        </div>

        <div class="section">
            <h2>Información Laboral</h2>
            <div class="field-group">
                <div class="field"><label>Fecha de Contratación</label><input type="date"></div>
                <div class="field"><label>Estado</label><select><option>Seleccione</option></select></div>
                <div class="field"><label>Departamento</label><select><option>Seleccione</option></select></div>
                <div class="field"><label>Cargo</label><select><option>Seleccione un departamento primero</option></select></div>
                <div class="field">
                    <label>Salario a ganar:</label>
                    <input type="number" placeholder="xxxxx.xx" min="0" step="0.01" required>
                </div>
                <div class="field"><label>Rol dentro de la empresa</label>
                    <select>
                        <option  disabled selected>Seleccione</option>
                        <option>Administrador</option>
                        <option>Empleado</option>
                    </select>
                </div>
                <div class="field"><label>Contraseña de usuario</label><input type="text"></div>
            
            </div>
        </div>

        <div class="submit-buttons">
            <button type="submit" class="btn-primary">Guardar</button>
            <button type="reset" class="btn-secondary" onclick="window.location.href='perfil_admin.php'">Cancelar</button>
        </div>
    </form>
    <script>
        function toggleApellidoCasada() {
            const select = document.getElementById("apellidoCasadaSelect");
            const input = document.getElementById("apellidoCasadaInput");
    
            if (select.value === "si") {
                input.disabled = false; // Activa el campo si la respuesta es "Sí"
                input.required = true; // Hace que el campo sea obligatorio
            } else {
                input.disabled = true; // Desactiva el campo si la respuesta es "No"
                input.required = false; // Elimina la obligatoriedad del campo
                input.value = ""; // Limpia el campo
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            cargarProvincias();
        });

        function cargarProvincias() {
            fetch('../php/backend/ubicaciones.php?tipo=provincias&id=0')
                .then(response => response.json())
                .then(data => {
                    const provinciaSelect = document.getElementById('provincia');
                    provinciaSelect.innerHTML = '<option value="" disabled selected>Seleccione una provincia</option>';
                    data.forEach(provincia => {
                        const option = document.createElement('option');
                        option.value = provincia.id; // Cambiado de provincia.id_provincia a provincia.id
                        option.textContent = provincia.nombre;
                        provinciaSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error al cargar provincias:', error));
        }

        function cargarDistritos() {
            const provinciaId = document.getElementById('provincia').value;
            console.log('Provincia seleccionada:', provinciaId); // Depuración

            fetch(`../php/backend/ubicaciones.php?tipo=distritos&id=${provinciaId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Datos de distritos:', data); // Depuración
                    const distritoSelect = document.getElementById('distrito');
                    distritoSelect.innerHTML = '<option value="" disabled selected>Seleccione un distrito</option>';
                    data.forEach(distrito => {
                        const option = document.createElement('option');
                        option.value = distrito.id;
                        option.textContent = distrito.nombre;
                        distritoSelect.appendChild(option);
                    });

                    // Limpiar corregimientos al cambiar de distrito
                    document.getElementById('corregimiento').innerHTML = '<option value="" disabled selected>Seleccione un corregimiento</option>';
                })
                .catch(error => console.error('Error al cargar distritos:', error));
        }

        function cargarCorregimientos() {
            const distritoId = document.getElementById('distrito').value;
            console.log('Distrito seleccionado:', distritoId); // Depuración

            fetch(`../php/backend/ubicaciones.php?tipo=corregimientos&id=${distritoId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Datos de corregimientos:', data); // Depuración
                    const corregimientoSelect = document.getElementById('corregimiento');
                    corregimientoSelect.innerHTML = '<option value="" disabled selected>Seleccione un corregimiento</option>';
                    data.forEach(corregimiento => {
                        const option = document.createElement('option');
                        option.value = corregimiento.id;
                        option.textContent = corregimiento.nombre;
                        corregimientoSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error al cargar corregimientos:', error));
        }

        document.querySelector('form').addEventListener('submit', function (event) {
            const provincia = document.getElementById('provincia').value;
            const distrito = document.getElementById('distrito').value;
            const corregimiento = document.getElementById('corregimiento').value;

            if (!provincia || !distrito || !corregimiento) {
                event.preventDefault();
                alert('Por favor, seleccione una provincia, un distrito y un corregimiento antes de enviar el formulario.');
            }
        });
    </script>
</body>
</html>