# 🏠 Sistema de Control, Registro y Administración de Gastos del Hogar en Excel & VBA

Este repositorio contiene la solución completa para el sistema de gestión de movimientos económicos desarrollado en **Microsoft Excel** con **Visual Basic para Aplicaciones (VBA)**.

---

## 📁 Estructura del Libro Excel (`Sistema_Control_Gastos.xlsm`)

El libro de Excel cuenta exactamente con las 4 hojas principales solicitadas:

1. **🏠 1. Hoja de Inicio (Dashboard Principal):**
   - Muestra el nombre del sistema y encabezado institucional.
   - Panel de usuario activo: Nombre de usuario, Rol/Nivel de permiso y Fecha/Hora de último acceso.
   - KPI Cards en tiempo real con fórmulas dinámicas de Excel:
     - **🟢 Total Ingresos**: `=SUMIF('Datos Registrados'!D7:D1000, "Ingreso", 'Datos Registrados'!G7:G1000)`
     - **🔴 Total Salidas**: `=SUMIF('Datos Registrados'!D7:D1000, "Salida", 'Datos Registrados'!G7:G1000)`
     - **💰 Saldo Disponible**: `=Total Ingresos - Total Salidas`
     - **📊 Total Registros**: `=COUNTA('Datos Registrados'!A7:A1000)`
   - Tabla con los últimos 6 movimientos registrados.

2. **📋 2. Hoja de Datos Registrados:**
   - Tabla organizada para almacenar el histórico de todas las operaciones económicas.
   - Columnas: `N.º de Orden`, `Fecha`, `Usuario`, `Tipo de Movimiento`, `Categoría`, `Descripción del gasto o movimiento`, `Monto`, `Medio de Pago`, `Observaciones`, `Estado`.

3. **👥 3. Hoja de Usuarios:**
   - Control de credenciales y roles para la autenticación y permisos.
   - Columnas: `ID Usuario`, `Usuario`, `Nombre Completo`, `Contraseña`, `Nivel de Permiso`, `Estado`, `Último Acceso`.
   - Incluye usuarios por defecto:
     - **Administrador**: `admin` / `admin123` (Rol: Administrador, Control total).
     - **Editor**: `editor` / `editor123` (Rol: Editor, Registro y consulta).

4. **💰 4. Hoja de Registro de Gastos:**
   - Resumen estadístico agrupado por categorías de gasto (Alimentación, Servicios, Mantenimiento, Compras, Transporte, Vivienda, Salud, Educación, Entretenimiento, Sueldo, Otros) y porcentaje sobre el gasto total.
   - Resumen de distribución por Medio de Pago (Efectivo, Tarjeta Débito/Crédito, Transferencia, Yape/Plin).

---

## 🔐 Sistema de Usuarios y Permisos

- **Administrador:**
  - Control total del sistema.
  - Registrar nuevos movimientos.
  - Editar y actualizar registros.
  - Eliminar cualquier registro.
  - Administrar usuarios (crear/modificar usuarios, asignar roles).
  - Consultar todos los movimientos y reportes.

- **Editor:**
  - Registrar nuevos movimientos.
  - Editar registros existentes.
  - Consultar información.
  - **Restricciones:** No puede eliminar registros ni acceder a la administración de usuarios.

---

## 📝 Registro Automático y Botones de Acción

Cada movimiento registrado incluye la generación automática de:
- **N.º de Orden:** Generado automáticamente correlativo (`ORD-0001`, `ORD-0002`, ...).
- **Fecha y Hora:** Capturada automáticamente del sistema en el momento del registro.
- **Usuario:** Asignado automáticamente según la sesión activa.

### Botones Principales Disponibles:
- 📝 **Registrar**: Valida y crea un nuevo movimiento.
- ✏️ **Editar**: Carga los datos de un registro seleccionado para modificación.
- 🔄 **Actualizar**: Guarda los cambios de un registro modificado.
- 🗑️ **Eliminar**: Elimina el registro seleccionado previa verificación del rol Administrador.
- 🔍 **Buscar**: Localiza un registro por su N.º de Orden.
- 🧹 **Limpiar**: Restablece el formulario para un nuevo ingreso.
- 🚪 **Cerrar Sesión**: Finaliza la sesión actual y vuelve a la pantalla de login.

---

## 💻 Código VBA Incluido en `vba_source/`

- **`Modulo_Sistema.bas`**: Variables globales de sesión, procedimientos de login/logout, generador correlativo `ORD-XXXX`, verificación de permisos por rol, actualización automática del Dashboard.
- **`FrmLogin.frm`**: Formulario modal de inicio de sesión con validación de credenciales.
- **`FrmRegistro.frm`**: Formulario para las operaciones CRUD con validación de campos.
- **`FrmUsuarios.frm`**: Formulario exclusivo para que el Administrador gestione cuentas de usuario.
- **`FrmMenuPrincipal.frm`**: Panel interactivo con accesos directos a todas las hojas y formularios.
- **`ThisWorkbook.cls`**: Eventos `Workbook_Open` (inicia el login al abrir Excel) y `Workbook_BeforeSave`.

---

## 🚀 Cómo importar los módulos VBA a Microsoft Excel

1. Abra el archivo `Sistema_Control_Gastos.xlsm` en Microsoft Excel.
2. Presione `ALT + F11` para abrir el **Editor de Visual Basic (VBA)**.
3. En el menú superior, seleccione **Archivo > Importar archivo...** (o haga clic derecho en la ventana de proyectos).
4. Importe todos los archivos contenidos en la carpeta `vba_source/`:
   - `Modulo_Sistema.bas`
   - `FrmLogin.frm`
   - `FrmRegistro.frm`
   - `FrmUsuarios.frm`
   - `FrmMenuPrincipal.frm`
   - Copie/pegue el contenido de `ThisWorkbook.cls` en el objeto `ThisWorkbook` de su proyecto VBA.
5. Guarde el libro como **Libro de Excel habilitado para macros (.xlsm)**.
