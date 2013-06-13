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
	<h1>Consulta Compras</h1>
    <hr>

	<div class="row-fluid">

	 
        {if is_array($ventas) }
        <table class="table table-hover table-bordered tabla pdf" >
						<thead>
							<tr>
								<th>
									Folio
								</th>
								<th>
									Fecha
								</th>
								<th>
									Total
								</th>
								<th>
									Factura
								</th>
                                
                                
                                
								
							</tr>
		</thead>
         <tbody>   
		{foreach item=venta from=$ventas}
					
						
							<!-- Crear el Script para la consulta SQL -->
							<tr>
								<td>
									{$venta.factura_id}
								</td>
								<td>
									{$venta.fecha}
								</td>
								<td>
									{$venta.total}
								</td>
								    <td>
									<a href="index.php?modulo=factura&action=pdf&id={$venta.id}"  target="_blank" id="factura">PDF</a>
								</td>

								
							</tr>
					
					
		{/foreach}
        	</tbody>

         
         
        </table>  
        {else}
        <p>{$ventas}</p>
        {/if}

	</div>
  </div>

