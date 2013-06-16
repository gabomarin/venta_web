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
                                
								
							</tr>
		</thead>
         <tbody>   
		{foreach item=usuario from=$usuarios}
					
						
							<!-- Crear el Script para la consulta SQL -->
			    
							<tr>
							<form action="index.php?modulo=usuario&action=checaUsuario" method="post">	      
								<td >
								      <input type="hidden" value="{$usuario.id}" id="id" name="id" >
									{$usuario.id}
								</td>
								<td >
								      <input type="hidden" id="nombre" name="nombre" value="{$usuario.nombre}" >
									{$usuario.nombre}
								</td>
								<td >
								      <input type="hidden" id="mail" name="mail" value="{$usuario.mail}" >
									{$usuario.mail}
								</td>
								<td >
								      <input type="hidden" id="rfc" name="rfc" value="{$usuario.rfc}" >
									{$usuario.rfc}
								</td>
								<td >
								      <input type="hidden" id="direccion" name="direccion" value="{$usuario.direccion}" >
									{$usuario.direccion}
							        <td style="display: none">
								      <input type="hidden" id="telefono" name="telefono" value="{$usuario.telefono}"  >
									{$usuario.telefono}
								</td>
								<td >
								      <input type="hidden" id="tipo" name="tipo" value="{$usuario.tipo}" >
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
                                   <button type="submit" class="offset2" >Editar</button> 
                                </td>
			</form>					
			    </tr>
					
			    	
		{/foreach}
        	</tbody>
         
         
        </table>
        
        {else}
        <p>{$usuarios}</p>
        {/if}

	</div>
  </div>

