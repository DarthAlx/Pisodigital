<html>
		<head>
			<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
				<style type="text/css">
						body { margin: 0px; }     body, table { font: 10px/18px "Lucida Grande", Arial, Verdana, sans-serif; }     table.border { font: 11px/18px "Lucida Grande", Arial, Verdana, sans-serif; }     table.border { border-right: 1px solid #eee; border-bottom: 1px solid #eee; }     table.border td { border-top: 1px solid #eee; border-left: 1px solid #eee; }     table span { color: #888; }
				</style>

		</head>
		<body>
				<table class="invoice" width="100%" cellspacing="0" cellpadding="6">
						<tbody>
							<tr>
								<td colspan="2">
									<img src="{{url('/img')}}/logo.png" alt="" class="pull-left" style="width:100px;">
								</td>
							</tr>
							<tr>
								<td>
									<div class="pull-right">

									</div>
								</td>
								<td align="right">
									<div class="pull-right">
										<p style="float: right;">
											<strong>Fecha:</strong> {{date('d-m-Y')}}<br>
										</p>
									</div>
								</td>
							</tr>
								<tr>
										<td>
											<p><strong>Organización Hafikoman</strong>
											</p>
											<p>
												<strong>Historial de cotizaciones</strong>
											</p>
										</td>
										<td align="right"> </td>
								</tr>
								<tr>
										<td colspan="2">
										<table class="bordered striped highlight responsive-table" width="100%" cellspacing="0" cellpadding="6">
												<tbody>
														<tr>
																<td style="width: 20%;"><span>Nombre</span></td>
																<td style="width: 5%;"><span>Edad</span></td>
																<td style="width: 10%;"><span>Email</span></td>
																<td style="width: 10%;"><span>Habitación</span></td>
                                <td style="width: 10%;"><span>Vista</span></td>
																<td style="width: 5%;"><span>Adultos</span></td>
																<td style="width: 5%;"><span>Niños</span></td>
																<td style="width: 10%;"><span>Telefono</span></td>
                                <td style="width: 10%;"><span>Cotización</span></td>
														</tr>
														@foreach ($cotizaciones as $datos)
															<tr class="text">
																<td style="width: 20%;"><span>{{$datos->nombre}}</span></td>
																<td style="width: 5%;"><span>{{$datos->edad}}</span></td>
																<td style="width: 10%;"><span>{{$datos->email}}</span></td>
																<td style="width: 10%;"><span>{{$datos->habitacion}}</span></td>
																<td style="width: 10%;"><span>{{$datos->vista}}</span></td>
																<td style="width: 5%;"><span>{{$datos->adultos}}</span></td>
																<td style="width: 5%;"><span>{{$datos->ninos}}</span></td>
																<td style="width: 10%;"><span>{{$datos->telefono}}</span></td>
																<td style="width: 10%;"><span>{{$datos->paquete}}</span></td>
															</tr>
														@endforeach

												</tbody>
										</table>


										</td>
								</tr>
						</tbody>
				</table>
		</body>
</html>
