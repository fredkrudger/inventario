# Inventario
<p align="center">

<img src="https://raw.github.com/fredkrudger/inventario/master/img/sumipan.png">
</p>
El sistema de inventario cuenta con 4 modulos Relacionados con el Inventario y 1 modulo <b>Usuarios</b> el cual esta disponible solo para el Administrador ya que los usuarios no tiene ese rol para realizar esa acción, además también se le incorporo un ventana en el panel de administrador llamada: <b>Productos con Stock Minimo</b> Para Estar Siempre Alerta y Mantener La Cantidad de Productos Siempre Optima.

En cuanto a la Base de Datos (DB) Relacional, Cuenta con Disparadores <b>(Triggers)</b>, En todos Los Modulos Mencionados Anteriormente, Para cada Una de las Acciones que Realize <b>(Insertar | Editar | Eliminar)</b>.

# Clientes
Dentro de Clientes Podemos Agregar un Nuevo Cliente, en caso de que no se encuentre ninguno en la Base de datos, 
y una vez registrado el cliente,  tenemos las Opciones de <b>Ver, Editar, Eliminar.</b>

# Proveedores
En Proveedores También Podemos Agregar un Nuevo Proveedor, en caso de que no se encuentre ninguno almacenado, 
ya una vez almacendo el Proveedor,  Podemos Realizar las Acciones de <b>Ver, Editar, Eliminar.</b>

# Productos
En Productos También esta la Opcion Agregar un Nuevo Producto, en caso de que no se encuentre ninguno en la Base de datos. 
ya registrado el Producto,   podemos <b>Ver, Editar, Eliminar.</b>
Además cuenta con una opcion de <b>Agregar Nuevo Grupo o Categorias</b> en caso de que no este la categoria o grupo que se busca.

<b>Nota:</b> Es importe mencionar que para registrar o Guardar un Producto, Primero debes tener Al menos Un Proveedor Almacenado en la Base de Datos, Para que así se Pueda Guardar Dicho Producto.

# Envios
Ya Dentro de esta Parte Podemos Agregar un Nuevo Envio, en caso de que se encuentre ninguno almacenado en la Base de datos. 
y una vez almacenado el Envio, Estan las Opciones de:  <b>Detalles, Eliminar.</b> Y además También Cuenta con la Opcion de Generar un Reporte <b>PDF</b> Haciendo Uso de la libreria <b>FPDF</b>

# Usuarios 
En esta seccion el administrador tiene la opcion de agregar uno o varios usuarios que puedan hacer solo consultas y registros, ya que se trabaja por roles. 
 

