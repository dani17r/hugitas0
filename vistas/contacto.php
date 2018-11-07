<?php 
	require_once 'header.php';
?>
		<!--  -->
		<div id="map" class="map" style="position: relative; overflow: hidden;">
			<div id="map" class="map">
					<iframe width="100%" height="350px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15706.406693355877!2d-71.3023488!3d10.2129664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1541352057690" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
	  </div>
		<!--  -->
		<div class="container content">
	    	<div class="row margin-bottom-30">
			    <div class="col-md-8 mb-margin-bottom-30">
			        <div class="headline">
			            <h2>¿Podemos ayudarte?</h2>
			        </div>
			        <p>Contacta a través del formulario para solicitarnos información sobre nuestros servicios, o para cualquier otra consulta que quieras realizarnos. Te contestaremos con la mayor brevedad.</p>
			        <div class="clearfix" id="page-contacto-frm-contacto-container">
			            <form id="formulario-contacto">
			                <div class="row">
			                    <div class="col-sm-5">
			                        <div class="form-group" id="page-contacto-campo-nombre-container">
			                            <label class="control-label" for="page-contacto-campo-nombre">Nombre<span class="color-red margin-left-5">*</span></label>
			                            <input type="text" class="form-control" id="page-contacto-campo-nombre" name="nombre" maxlength="50" required>
			                            <span id="page-contacto-campo-nombre-help-block" class="help-block"></span>
			                        </div>
			                    </div>
			                    <div class="col-sm-7">
			                        <div class="form-group" id="page-contacto-campo-apellidos-container">
			                            <label class="control-label" for="page-contacto-campo-apellidos">Apellidos<span class="color-red margin-left-5">*</span></label>
			                            <input type="text" class="form-control" id="page-contacto-campo-apellidos" name="apellidos" maxlength="50" required>
			                            <span id="page-contacto-campo-apellidos-help-block" class="help-block"></span>
			                        </div>
			                    </div>
			                </div>
			                <div class="form-group" id="page-contacto-campo-email-container">
			                    <label class="control-label" for="page-contacto-campo-email">Correo electrónico<span class="color-red margin-left-5">*</span></label>
			                    <input type="email" class="form-control" id="page-contacto-campo-email" name="email" maxlength="250" required> 
			                    <span id="page-contacto-campo-email-help-block" class="help-block"></span>
			                </div>
			                <div class="row">
			                    <div class="col-xs-5">
			                        <div class="form-group" id="page-contacto-campo-prefijo-container">
			                            <label class="control-label" for="page-contacto-campo-prefijo">Prefijo</label>
			                            <select class="form-control rounded" id="page-contacto-campo-prefijo" name="prefijo">
			                              <option value="355" data-pais="Albania" data-iso2="AL" data-iso3="ALB">Venezuela - 58</option>
																		<option value="49" data-pais="Alemania" data-iso2="DE" data-iso3="DEU">Alemania - 49</option>
																	</select>
			                            <span id="page-contacto-campo-prefijo-help-block" class="help-block"></span>
			                        </div>
			                    </div>
			                    <div class="col-xs-7">
			                        <div class="form-group" id="page-contacto-campo-telefono-container">
			                            <label class="control-label" for="page-contacto-campo-telefono">Teléfono<span class="color-red margin-left-5">*</span></label>
			                            <input type="tel" class="form-control rounded" id="page-contacto-campo-telefono" name="telefono" maxlength="15" required>
			                            <span id="page-contacto-campo-telefono-help-block" class="help-block"></span>
			                        </div>
			                    </div>
			                </div>
			                <div class="form-group" id="page-contacto-campo-localidad-container">
			                    <label class="control-label" for="page-contacto-campo-localidad">Localidad<span class="color-red margin-left-5">*</span></label>
			                    <input type="text" class="form-control rounded" id="page-contacto-campo-localidad" name="localidad" maxlength="30" required>
			                    <span id="page-contacto-campo-localidad-help-block" class="help-block"></span>
			                </div>
			                <div class="form-group" id="page-contacto-campo-departamento-container">
			                    <label class="control-label" for="page-contacto-campo-departamento">¿Con quién deseas contactar?<span class="color-red margin-left-5">*</span></label>
			                    <select class="form-control rounded" id="page-contacto-campo-departamento" name="departamento" required>
			                        <option value="0" selected="selected" disabled="disabled"></option>
			                        <option value="1">Dpto. Administración - (facturación, recibos, pagos, etc.)</option>
			                        <option value="2">Dpto. Comercial ------ (información de servicios, contratación, etc.)</option>
			                        <option value="3">Dpto. Soporte -------- (asistencia técnica, incidencias, averías, etc.)</option>
			                        <option value="4">Dpto. Instalaciones -- (sólo para comprobación de cobertura)</option>
			                        <option value="5">Otro</option>
			                    </select>
			                    <span id="page-contacto-campo-departamento-help-block" class="help-block"></span>
			                </div>
			                <div class="form-group" id="page-contacto-campo-mensaje-container">
			                    <label class="control-label" for="page-contacto-campo-mensaje">Mensaje<span class="color-red margin-left-5">*</span></label>
			                    <textarea class="form-control" id="page-contacto-campo-mensaje" name="message" rows="8" maxlength="400" placeholder="Escribe tu consulta aquí" required></textarea>
			                    <span id="page-contacto-campo-mensaje-help-block" class="help-block"></span>
			                </div>
			                <div class="checkbox" id="page-contacto-campo-aceptar-condiciones-container">
			                    <label>
			                        <input type="checkbox" id="page-contacto-campo-aceptar-condiciones" name="condiciones" required> Entiendo y acepto la <a data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">cláusula LOPD</a>
			                    </label>
			                    <span id="page-contacto-campo-aceptar-condiciones-help-block" class="help-block"></span>
			                </div>
			                <div class="form-group">
			                    <p id="page-contacto-condiciones" class="collapse text-muted">Según la Ley Orgánica 15/1999 de 13 de diciembre sobre protección de Datos de Carácter Personal (LOPD), le informamos de que los datos proporcionados a través de este formulario serán usados únicamente para responder a la propia consulta y para posibles comunicaciones comerciales derivadas de la misma. Los datos estarán gestionados exclusivamente por Hybtel Comunicaciones S.L. y nunca serán cedidos a terceros.</p>
							</div>
							<div class="form-group">
			                <input class="btn btn-u btn-md rounded" value="Enviar" type="submit">
			            </div>
			            </form>
			            
			            <p class="margin-top-20 text-muted"><span class="margin-right-5">*</span>Campos obligatorios.</p>
			        </div>
			        <div class="clearfix shadow-wrapper margin-top-20" id="page-contacto-frm-contacto-resultado-container" style="display: none">
			            <div class="tag-box tag-box-v6 box-shadow shadow-effect-2">
			                <div class="message text-center margin-top-20 margin-bottom-30">
			                    <h4 id="page-contacto-campo-resultado-mensaje"></h4>
			                    <p id="page-contacto-campo-resultado-mensaje-agradecimiento" class="margin-bottom-20"></p>
			                    <button type="button" class="btn btn-u rounded margin-top-20" id="page-contacto-ctrl-resultado-aceptar"></button>
			                </div>
			            </div>
			        </div>
				    </div>
				    <div class="col-md-3 col-md-offset-1">
				        <div class="headline"><h2>Oficina Central</h2></div>
				        <ul class="list-unstyled who margin-bottom-30">
				            <li>C/ Valle de Vidriales, 23</li>
				            <li>Pol. Ind. Los Zamoranos</li>
				            <li>29700 Vélez-Málaga, Málaga, España</li>
				            <li><a href="#"><i class="fa fa-envelope"></i>info@Hybtel.es</a></li>
				            <li><a href="#"><i class="fa fa-phone"></i>(+34) 951 238 600 </a></li>
				            <li><a href="#"><i class="fa fa-globe"></i>#</a></li>
				        </ul>
				        <div class="headline"><h2>Horario</h2></div>
				        <ul class="list-unstyled margin-bottom-30">
				            <li><strong>Lunes-Viernes:</strong> De 9 a 20 horas</li>
				            <li><strong>Sábado:</strong> Cerrado</li>
				            <li><strong>Domingo:</strong> Cerrado</li>
				        </ul>
				        <div class="headline"><h2>Cómo llegar</h2></div>
				        <p>Localiza el trayecto más adecuado para venir a visitarnos:</p>
				        <ul class="list-unstyled who">
				            <li><i class="fa fa-map-o color-green margin-right-5"></i><a target="_blank" href="#">Ampliar mapa</a></li>
				            <li><i class="fa fa-map-marker color-green margin-right-5"></i>GPS: 36.791858, -4.103898</li>
				        </ul>
				    </div>
			</div>
		</div>
		<!--  -->
		<div class="axa-bg-verde-100" id="call-to-action-paquetes-listos-para-llevar">
		    <div class="container content-sm">
		        <div class="row">
		            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-0">
		                <img class="sm-margin-bottom-30 md-margin-bottom-30 img-responsive mv-center" src="img/paquete.png">
		            </div>
		            <div class="col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-1">
		                <div class="mb40">
		                    <h2 class="sm-margin-bottom-20 color-white">PAQUETES LISTOS PARA LLEVAR</h2>
		                    <p class="lead mb30 color-white">
		                        Unifica con Hybtel todos tus servicios de comunicación y ahorra en tu factura.
		                        Consulta nuestro catálogo de paquetes y elige el que mejor se adapte a tus necesidades, o
		                        configura el tuyo a tu medida.</p>
		                    <a class="btn-u btn-brd btn-brd-hover btn-u-light rounded">VER TODOS LOS PAQUETES</a>
		                    <a class="btn-u btn-brd btn-brd-hover btn-u-light rounded">CONFIGURAR MI PAQUETE</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--  -->
		<div class="container content-sm" id="content-part-configura-comprueba-contrata">
		    <div class="row content-boxes-v1 margin-bottom-40">
		        <div class="col-sm-4 sm-margin-bottom-40">
		            <h2 class="heading-sm">
		                <i class="icon-base icon-chemistry color-green fs-40"></i>
		                <span>Configura tu oferta</span>
		            </h2>
		            <p class="margin-bottom-20">Configura el pack ideal para ti, y paga sólo por lo que necesites. ¡Hazlo a tu medida!</p>
		            <a class="btn-u btn-u-sm rounded" data-toggle="modal" data-target="#exampleModal">Configurar</a>
		        </div>
		        <div class="col-sm-4 sm-margin-bottom-40">
		            <h2 class="heading-sm">
		                <i class="icon icon-035 color-green fs-40"></i>
		                <span>Comprueba tu cobertura</span>
		            </h2>
		            <p class="margin-bottom-20">Comprueba qué servicios llegan a tu hogar. Te informamos de la mejor oferta para ti. ¡Y sin compromiso!</p>
		            <a class="btn-u btn-u-sm rounded" data-toggle="modal" data-target="#exampleModal">Comprobar</a>
		        </div>
		        <div class="col-sm-4 sm-margin-bottom-40">
		            <h2 class="heading-sm">
		                <i class="icon-base icon-rocket color-green fs-40"></i>
		                <span>¡Contrata ahora!</span>
		            </h2>
		            <p class="margin-bottom-20">Llámanos ya al <b>951 238 600</b> y empieza a disfrutar de los servicios de Hybtel.</p>
		            <a class="btn-u btn-u-sm rounded" data-toggle="modal" data-target="#exampleModal">Contactar</a>
		        </div>
		    </div>
		</div>
		<!--  -->
		<div class="axa-bg-azul-90 axa-bg-img-megavillanos">
		    <div class="container content-sm">
		        <div class="row">
		            <div class="col-md-12">
		                <h2 class="mb40 color-white fs-40 text-center mb20" style="line-height: 40px;">
		                    <strong class="axa-verde-100"><i>SUPERTARIFA</i></strong>
		                    <br class="visible-xs-block">
		                    <small><i>VS</i></small>
		                    <strong class=""><i>MEGAVILLANOS</i></strong>
		                </h2>
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-sm-6 col-sm-offset-3">
		                <div class="text-center"><img class="sm-margin-bottom-10 md-margin-bottom-10 img-responsive mv-center" src="img/heroe.png"></div>
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-sm-12">
		                <div class="text-center pt30">
		                    <p class="mb10 color-white fs-14  text-center" style="letter-spacing: 0.5px;">
		                        <span class="fs-25 font-bold">¿Todavía te crees los anuncios de otros operadores?</span>
		                    </p>
		                    <p class="mb30 color-white  fs-14 font-light text-center" style="letter-spacing: 1px;">
		                        <span class="fs-16">En Hybtel no empleamos ni engaños ni trucos para <br class="visible-xs-block"> ofrecerte un buen servicio a un precio justo</span>
		                    </p>
		                    <a class="btn-u btn-brd btn-brd-hover btn-u-light rounded" href="ventajas">DESCUBRE NUESTRAS VENTAJAS</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--  -->
		<div class="call-action-v1 bg-color-light axa-cab axa-cab-azul-10">
		    <div class="container">
		        <div class="call-action-v1-box">
		            <div class="call-action-v1-in">
		                <h2 id="nuestras-tiendas"><span class="icon-base icon-bag margin-right-10 axa-cab-icon"></span>NUESTRAS TIENDAS</h2>
		            </div>
		        </div>
		    </div>
		</div>
		<!--  -->
		<div class="container content">
	    <div class="row">
	        <div class="col-md-9">
	            <h2 class="color-green">Tiendas Hybtel</h2>
	            <p class="lead margin-bottom-5">Nuestros expertos a tu disposición.</p>
	            <div class="margin-bottom-40"></div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12 shadow-wrapper">
	            <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
	                <div class="row">
	                    <div class="col-md-6 col-sm-6">
	                        <div class="">
	                            <h3>HYBTEL Nerja</h3>
	                            <hr class="mn mv20">
	                            <h3>Dirección</h3>
	                            <ul class="list-unstyled who">
	                                <li>Plaza de la Ermita, 18</li>
	                                <li>29780 Nerja, Málaga, España</li>
	                                <li><a href="#"><i class="fa fa-envelope fa-fw"></i>info@Hybtel.es</a></li>
	                                <li><a href="#"><i class="fa fa-phone fa-fw"></i>(+34) 951 238 600 </a></li>
	                                <li><i class="fa fa-map-o fa-fw color-green"></i><a target="_blank" href="#">Ampliar mapa</a></li>
	                                <li><i class="fa fa-map-marker fa-fw color-green"></i>GPS: 36.748930, -3.878249</li>
	                            </ul>
	                            <hr class="mn mv20">
	                            <h3>Horario de apertura</h3>
	                            <ul class="list-unstyled">
	                                <li><strong>Lunes-Viernes:</strong> De 9 a 14 horas y de 17 a 20 horas</li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-md-6 col-sm-6 shadow-wrapper">
	                        <div id="map-axartel-nerja" class="height-450">
														<iframe width="100%" height="350px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15706.406693355877!2d-71.3023488!3d10.2129664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1541352057690" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
													</div>
											</div>
	                    <div id="panorama-axartel-nerja"></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	   <div class="row">
	        <div class="col-md-12 shadow-wrapper">
	            <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
	                <div class="row">
	                    <div class="col-md-6 col-sm-6">
	                        <div class="">
	                            <h3>HYBTEL Torrox</h3>
	                            <hr class="mn mv20">
	                            <h3>Dirección</h3>
	                            <ul class="list-unstyled who">
	                                <li>Urbanización Laguna Beach, s/n</li>
	                                <li>Locales Oeste 2</li>
	                                <li>29793 Torrox, Málaga, España</li>
	                                <li><a href="#"><i class="fa fa-envelope fa-fw"></i>info@Hybtel.es</a></li>
	                                <li><a href="#"><i class="fa fa-phone fa-fw"></i>(+34) 951 238 600 </a></li>
	                                <li><i class="fa fa-map-o fa-fw color-green"></i><a target="_blank" href="#">Ampliar mapa</a></li>
	                                <li><i class="fa fa-map-marker fa-fw color-green"></i>GPS: 36.733979, -3.975110</li>
	                            </ul>
	                            <hr class="mn mv20">
	                            <h3>Horario de apertura</h3>
	                            <ul class="list-unstyled">
	                                <li><strong>Lunes-Viernes:</strong> De 9 a 14 horas y de 17 a 20 horas</li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-md-6 col-sm-6 shadow-wrapper">
	                        <div id="map-axartel-nerja" class="height-450">
														<iframe width="100%" height="350px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15706.406693355877!2d-71.3023488!3d10.2129664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1541352057690" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
													</div>
											</div>
											<div id="panorama-axartel-nerja"></div>
	                </div>
	            </div>
	        </div>
	    </div>
		<!--  -->
		<?php 
        require_once 'footer.php'; 
    ?>
