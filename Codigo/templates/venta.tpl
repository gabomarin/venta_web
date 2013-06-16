 <div class="well span7">

			<h1>
				Consulta de Ventas
			</h1>
			<hr>
			<div class="row-fluid">
				<div class="span12">
		                  {if is_array($ventas) }
					<table class="table table-hover table-bordered tabla">
						<thead>
							<tr>
								<th>
									ID
								</th>
								<th>
									Fecha
								</th>

								<th>
									Total
								</th>
								<th>
									Cliente
								</th>
								
							</tr>
						</thead>
						
						<tbody>
							<!-- Crear el Script para la consulta SQL -->
							{foreach item=venta from=$ventas}
							<tr>
								<td>
									{$venta.id}
								</td>
								<td>
									{$venta.fecha}
								</td>
								<td>
								        {$venta.total}
								</td>
								<td>
								        {$venta.nombre}
								</td>
								
							</tr>
							{/foreach}
						</tbody>
					</table>
					<a href="temp/{$pdf}.pdf" target="_blank"> <button class="btn btn-primary">Generar Reporte PDF</button></a>
					<a href="temp/reporte.xls" target="_blank"> <button class="btn btn-primary">Generar Reporte EXCEL</button></a>
                    
			</div>
			<div class="row-fluid">
			</div>
			<hr>
		{else}
        <p>{$ventas}</p>
        {/if}			  
		
	</div>
</div>
