Gestor de pedidos para la Empresa TD-Informática
=========
La pagina se trata de una tienda  donde el usuario puede comprar productos desde la pagina siempre y
cuando esten disponibles. Se lleva un control de usuarios con diferentes permisos entre ello
(utilizando consultas en mysql), para ello se tiene un login y register
Cada tipo de usuario tiene un rol diferente y tendra opciones o acceso a paginas diferentes segun su tipo de usuario.

##Intervienen diferentes usuario:
* Cliente
* Encargado de ventas
* Encargado de inventario
* Visitante

###Cliente
* Consulta de productos
* Consulta de facturas
* Ver el estatus de su compra
* Que compras ha realizado
* Ver las facturas en historial
* 
###Encargado del inventario
* Puede consultar cantidad de producto consultar estado de producto(espera, disponible, agotado, descontinuado)  
pero no puede hacer ningun otro manejo sobre la base de datos como modificar campos etc.

###Encargado de ventas
* Es el encargado de monitorear las compras que realiza el cliente y asegurarse de que hayan hecho correctamente,  
* Consulta de productos
* Consulta de clientes que han realizado pedido y expedirles factura
 
###Visitante
* Solo puede navegar por el sitio y ver los productos


##Lenguajes contemplados:
* HTML5
* PHP
* MySQL


##Desarrolladores
* Duarte Sanchez Alejandro
   * Codigo: 
   * Email: lexds_1591@hotmail.com  
* Ortiz Valdovinos Gabriel
   * Codigo: 210224446
   * Email: gabrielortiz_26@hotmail.com
