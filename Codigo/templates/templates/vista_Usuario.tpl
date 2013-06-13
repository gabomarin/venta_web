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

	 
        {if is_array($usuarios) }
        <table class="table table-hover table-bordered tabla">
						<thead>
							<tr>
								<th>
									ID
								</th>
								<th>
									Nombre
								</th>
								<th>
									Correo
								</th>
								<th>
									RFC
								</th>
								<th>
									Direccion
								</th>
								<th>
									Tipo
								</th>
                                <th>
                                    Estatus
                                </th>
                                <th>
                                    Editar
                                </th>
                                <th>
                                    Eliminar
                                </th>
                                
								
							</tr>
		</thead>
         <tbody>   
		{foreach item=usuario from=$usuarios}
					
						
							<!-- Crear el Script para la consulta SQL -->
							<tr>
								<td>
									{$usuario.id}
								</td>
								<td>
									{$usuario.nombre}
								</td>
								<td>
									{$usuario.mail}
								</td>
								<td>
									{$usuario.rfc}
								</td>
								<td>
									{$usuario.direccion}
								</td>
								<td>
									{if $usuario.tipo==1}
                                    Cliente
                                    {elseif $usuario.tipo==2}
                                    Ventas
                                    
                                    {else}
                                    Inventario
                                    {/if}
								</td>
                                <td>
                                {if $usuario.estatus==1}
                                Activo
                                {else}
                                Inactivo
                                {/if}
                                </td>
                                <td>
                                   <a href="index.php?modulo=usuario&action=modificarUsuario&id={$usuario.id}"><img class="offset2" src="images/editar.png"></a> 
                                </td>
                                <td>
                                    <a href="index.php?modulo=usuario&action=eliminar&id={$usuario.id}"><img class="offset2" src="images/eliminar.png"></a>
                                </td>
								
							</tr>
					
					
		{/foreach}
        	</tbody>
         
         
        </table>
        
        <button class="btn btn-primary">Generar Reporte</button>
        
        {else}
        <p>{$usuarios}</p>
        {/if}

	</div>
  </div>

