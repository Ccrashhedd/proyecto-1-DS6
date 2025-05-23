<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar un empleado</title>
    <meta name="viewport" content="width=device-width, content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/visualizar.css">
</head>
<body>
    <form id="buscarCedulaForm" method="POST" action="buscar_empleado.php">
        <div class="section">
            <h2>Buscar Empleado</h2>
            <div class="field-group">
                <div class="field">
                    <label for="cedulaBuscar">Cédula</label>
                    <input 
                        type="text" 
                        id="cedulaBuscar" 
                        name="cedula" 
                        placeholder="Ej: 8-1234-123456" 
                        pattern="[0-9\-]+" 
                        oninput="this.value = this.value.replace(/[^0-9\-]/g, '')" 
                        required>
                </div>
                <div class="field submit-buttons">
                    <button type="submit" class="btn-primary">Buscar</button>
                </div>
            </div>
        </div>
    </form>
    
    <form>
        <div class="section">
            <h2>Información del Empleado</h2>
            <div class="field-group">
                <div class="field"><label>Cédula</label><input type="text" placeholder="Ej: 8-1234-123456" readonly></div>
                <div class="field"><label>Primer Nombre</label><input type="text"></div>
                <div class="field"><label>Segundo Nombre</label><input type="text"></div>
                <div class="field"><label>Primer Apellido</label><input type="text"></div>
                <div class="field"><label>Segundo Apellido</label><input type="text"></div>
                <div class="field"><label>Género</label><input type="text" placeholder="Ej: Masculino"></div>
                <div class="field"><label>Estado Civil</label><input type="text" placeholder="Ej: Soltero/a"></div>
                <div class="field"><label>Tipo de Sangre</label><input type="text" placeholder="Ej: O+"></div>
                <div class="field"><label>Fecha de Nacimiento</label><input type="date"></div>
                <div class="field full-width">
                    <label>¿Usa apellido de casada?</label>
                    <input type="text" placeholder="Apellido del esposo">
                </div>
                <div class="field"><label>Nacionalidad</label><input type="text" placeholder="Ej: Panamá"></div>
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
                <div class="field"><label>Provincia</label><input type="text" placeholder="Ej: Panamá"></div>
                <div class="field"><label>Distrito</label><input type="text" placeholder="Ej: San Miguelito"></div>
                <div class="field"><label>Corregimiento</label><input type="text" placeholder="Ej: Amelia Denis de Icaza"></div>
                <div class="field"><label>Calle</label><input type="text"></div>
                <div class="field"><label>Casa/Apto</label><input type="text"></div>
                <div class="field"><label>Comunidad/Urbanización</label><input type="text"></div>
            </div>
        </div>

        <div class="section">
            <h2>Información Laboral</h2>
            <div class="field-group">
                <div class="field"><label>Fecha de Contratación</label><input type="date"></div>
                <div class="field"><label>Estado</label><input type="text" placeholder="Ej: Activo"></div>
                <div class="field"><label>Departamento</label><input type="text" placeholder="Ej: Recursos Humanos"></div>
                <div class="field"><label>Cargo</label><input type="text" placeholder="Ej: Analista"></div>
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

        <!-- Nueva sección para editar empleado -->
        <div class="section">
            <h2>¿Desea guardar los cambios?</h2>
            <div class="submit-buttons">
                <button type="button" class="btn-primary" onclick="guardarCambios()">Guardar Cambios</button>
                <button type="button" class="btn-secondary" onclick="window.location.href='perfil_admin.php'">Cancelar y Volver</button>
            </div>
        </div>
    </form>

    <script>
        function guardarCambios() {
            if (confirm("¿Está seguro de que desea guardar los cambios?")) {
                // Aquí puedes agregar la lógica para guardar los cambios
                alert("Cambios guardados correctamente.");
                // Redirigir o realizar otra acción después de guardar
                window.location.href = 'perfil_admin.php';
            }
        }
    </script>
</body>
</html>