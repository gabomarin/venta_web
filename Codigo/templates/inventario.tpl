<style type="text/css">
		span{
			  color:#8B8B8B;
		  }
		  
		  .pdf
		  {
			border: solid 1px #000;
		  }
		  
		  table
{
border-collapse:collapse;
}
table,th, td
{
border: 1px solid black;
}

 </style>


<body>
  <div class="well span7" >
	<h3>Reporte de Inventario</h3>
    <hr>

	<div class="row-fluid">

	 
        {if is_array($inventarios) }
        <table class="table table-hover table-bordered tabla pdf" >
						<thead>
							<tr>
								<th>
									ID
								</th>
								<th>
									Fecha
								</th>
								<th>
									# Productos
								</th>
								<th>
									# Real
								</th>
								<th>
									# Esperada
								</th>
								<th>
									Descripcion
								</th>
                                <th>
                                    Usuario Id
                                </th>
                                
                                
                                
								
							</tr>
		</thead>
         <tbody>   
		{foreach item=inventario from=$inventarios}
					
						
							<!-- Crear el Script para la consulta SQL -->
							<tr>
								<td>
									{$inventario.id}
								</td>
								<td>
									{$inventario.fecha}
								</td>
								<td>
									{$inventario.cantidadProducto}
								</td>
								<td>
									{$inventario.cantidadReal}
								</td>
								<td>
									{$inventario.cantidadEsperada}
								</td>
								<td>
									{$inventario.descripcion}
								</td>
                                <td>
                                {$inventario.usuario_id}
                                </td>

								
							</tr>
					
					
		{/foreach}
        	</tbody>

         
         
        </table>
        
       <a href="temp/{$pdf}.pdf" target="_blank"> <button class="btn btn-primary">Generar Reporte</button></a>
        
        {else}
        <p>{$inventarios}</p>
        {/if}

	</div>
  </div>

