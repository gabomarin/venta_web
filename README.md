Gestor de pedidos para la Empresa TD-Informática
=========
Una tienda solicita una pagina web interactiva con el usuario, donde este pueda comprar productos desde la pagina siempre y
cuando esten disponibles. En el momento que usuario haga una compra de un producto se le generará una factura,
la cual el encargado de ventas la aprobara. 
Se lleva un control de usuarios con diferentes permisos entre ello
(utilizando consultas en mysql), para ello se tiene un login y register
Cada tipo de usuario tiene un rol diferente y tendra opciones o acceso a paginas diferentes segun su tipo de usuario.

##Intervienen diferentes usuario:
* Visitante ( tipo = 0 )
* Cliente ( tipo = 1 )
* Encargado de ventas ( tipo = 2 )
* Encargado de inventario ( tipo = 3 )

###Cliente
* Realizar compra: Con el catalogo de productos el cliente podra seleccionar el  o los productos que desee agregar 
  al carro de compras, una ves terminado tendra que confirmar el pedido llenando los datos necesarios (direccion, telefono 
  metodo de pago, y paqueteria para el envio). Una vez confirmado no se podra cancelar el pedido.
* Consulta de productos
* Consulta de facturas
* Ver el estatus de su compra
* Que compras ha realizado
* Ver las facturas en historial


###Encargado del inventario
* Puede consultar cantidad de producto consultar estado de producto(espera, disponible, agotado, descontinuado),
* podra modificar campos como la cantidad de productos, el cual permitira modificar fallas en existencias.

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
   * Codigo: 206587844
   * Email: lexds_1591@hotmail.com  
* Ortiz Valdovinos Gabriel
   * Codigo: 210224446
   * Email: gabrielortiz_26@hotmail.com
