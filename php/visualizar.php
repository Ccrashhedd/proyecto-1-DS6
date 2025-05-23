<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Información del Empleado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="field"><label>Primer Nombre</label><input type="text" readonly></div>
                <div class="field"><label>Segundo Nombre</label><input type="text" readonly></div>
                <div class="field"><label>Primer Apellido</label><input type="text" readonly></div>
                <div class="field"><label>Segundo Apellido</label><input type="text" readonly></div>
                <div class="field"><label>Género</label><input type="text" placeholder="Ej: Masculino" readonly></div>
                <div class="field"><label>Estado Civil</label><input type="text" placeholder="Ej: Soltero/a" readonly></div>
                <div class="field"><label>Tipo de Sangre</label><input type="text" placeholder="Ej: O+" readonly></div>
                <div class="field"><label>Fecha de Nacimiento</label><input type="date" readonly></div>
                <div class="field full-width">
                    <label>¿Usa apellido de casada?</label>
                    <input type="text" placeholder="Apellido del esposo" readonly>
                </div>
                <div class="field"><label>Nacionalidad</label><input type="text" placeholder="Ej: Panamá" readonly></div>
            </div>
        </div>

        <div class="section">
            <h2>Información de Contacto</h2>
            <div class="field-group">
                <div class="field"><label>Celular</label><input type="tel" readonly></div>
                <div class="field"><label>Teléfono Fijo</label><input type="tel" readonly></div>
                <div class="field"><label>Correo Electrónico</label><input type="email" readonly></div>
            </div>
        </div>

        <div class="section">
            <h2>Información de Ubicación</h2>
            <div class="field-group">
                <div class="field"><label>Provincia</label><input type="text" placeholder="Ej: Panamá" readonly></div>
                <div class="field"><label>Distrito</label><input type="text" placeholder="Ej: San Miguelito" readonly></div>
                <div class="field"><label>Corregimiento</label><input type="text" placeholder="Ej: Amelia Denis de Icaza" readonly></div>
                <div class="field"><label>Calle</label><input type="text" readonly></div>
                <div class="field"><label>Casa/Apto</label><input type="text" readonly></div>
                <div class="field"><label>Comunidad/Urbanización</label><input type="text" readonly></div>
            </div>
        </div>

        <div class="section">
            <h2>Información Laboral</h2>
            <div class="field-group">
                <div class="field"><label>Fecha de Contratación</label><input type="date" readonly></div>
                <div class="field"><label>Estado</label><input type="text" placeholder="Ej: Activo" readonly></div>
                <div class="field"><label>Departamento</label><input type="text" placeholder="Ej: Recursos Humanos" readonly></div>
                <div class="field"><label>Cargo</label><input type="text" placeholder="Ej: Analista" readonly></div>
                <div class="field"><label>Salario a ganar:</label><input type="number" placeholder="xxxxx.xx" min="0" step="0.01" required readonly></div>
                <div class="field"><label>Rol dentro de la empresa</label> <input type="text" readonly ></input></div>
                <div class="field"><label>Contraseña de usuario</label><input type="text" readonly></div>
            </div>
        </div>
        <!-- Botón para volver al perfil del administrador -->
        <div class="section">
            <div class="submit-buttons">
                <button type="button" class="btn-secondary" onclick="window.location.href='perfil_admin.php'">Volver al Perfil</button>
            </div>
        </div>
    </form>
</body>
</html>
