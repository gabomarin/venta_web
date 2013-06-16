  <style type="text/css">
		span{
			  color:#8B8B8B;
		  }

  </style>

  <title></title>
</head>

<body>
  <div class="well span7">
	<h3>Resultados de Busqueda</h3>
    <hr>

	<div class="row-fluid">

	 
        {if is_array($productos) }
        <table class="table table-hover table-bordered tabla">
						<thead>
							<tr>
								<th>
									ID
								</th>
								<th>
									Imagen
								</th>
								<th>
									Nombre
								</th>
								<th>
									Descripcion
								</th>
								<th>
									Precio
								</th>
								
                                <th>
                                    Estatus
                                </th>
                                <th>
                                    Editar
                                </th>
                               
								
							</tr>
		</thead>
         <tbody>   
		{foreach item=producto from=$productos}
					
						
							<!-- Crear el Script para la consulta SQL -->
							<tr>
								<form action="index.php?modulo=producto&action=checaProducto" method="post">	      
								<td >
								      <input type="hidden" value="{$producto.id}" id="id" name="id" >
									{$producto.id}
								</td>
								<td >
								      <input type="hidden" id="imagen" name="imagen" value="{$producto.imagen}" >
									<img src="{$producto.imagen}" height="70px" width="70px">
								</td>
								<td >
								      <input type="hidden" id="nombre" name="nombre" value="{$producto.nombre}" >
									{$producto.nombre}
								</td>
								
								<td >
								      <input type="hidden" id="descripcion" name="descripcion" value="{$producto.descripcion}" >
									{$producto.descripcion}
								</td>
								<td >
								      <input type="hidden" id="precio" name="precio" value="{$producto.precio}" >
									$ {$producto.precio}
								</td>
								
                                <td>
                                {if $producto.estatus==1}
									<input type="hidden" id="estatus" name="estatus" value="{$producto.estatus}" >
									<input type="hidden" id="categoria" name="categoria" value="{$producto.categoria}" >
									<input type="hidden" id="existencia" name="existencia" value="{$producto.existencia}" >
                                Disponible
                                {else}
                                Agotado
                                {/if}
                                </td>
                                <td>
                                   <button type="submit" class="offset2" >Editar</button> 
                                </td>
                                
			</form>				
								
							</tr>
					
					
		{/foreach}
        	</tbody>
         
         
        </table>        
        {else}
        <p>{$producto}</p>
        {/if}

	</div>
  </div>

