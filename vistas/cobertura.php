<?php 
	require_once 'header.php';
?>
		<!--  -->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left" style="margin-top: 13px;">Cobertura</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li class="active">Cobertura</li>
            </ul>
        </div>
    </div>
    <!--  -->
    <div class="container content-sm">
        <div class="title-v1 no-margin-bottom">
            <span class="fs-20 color-green display-b">Comprueba tu cobertura y descubre la mejor oferta para ti</span>
            <p class="no-margin-bottom">
                Para poder comprobar los servicios disponibles en tu zona, necesitamos que nos indiques tu dirección.
            </p>
        </div>
    </div>
    <!--  -->
		<div id="formulario-coberturas-block">
		  <div id="map" class="map">
					<iframe width="100%" height="350px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15706.406693355877!2d-71.3023488!3d10.2129664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1541352057690" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="container content">
		        <div class="row margin-bottom-30">
		            <div class="col-md-12 md-margin-bottom-30">
		                <div class="row">
		                    <div class="col-md-7">
		                        <div class="shadow-wrapper" id="page-cobertura-frm-cobertura-container">
		                            <div class="tag-box tag-box-v2 box-shadow shadow-effect-2 rounded">
		                                <form id="formulario-cobertura">
		                                    <div class="row">
		                                        <div class="col-md-12">
		                                            <div class="form-group" id="page-cobertura-campo-tipo-conexion-container">
		                                                <label class="control-label" for="page-cobertura-campo-tipo-conexion">¿Qué tipo de conexión prefieres?<span class="color-red margin-left-5">*</span></label>
		                                                <select class="form-control rounded" id="page-cobertura-campo-tipo-conexion" name="tipo-conexion">
		                                                    <option value="0" selected="selected" disabled="disabled"></option>
		                                                    <option value="1">Sólo me interesa conexión a través de fibra óptica</option>
		                                                    <option value="2">Sólo me interesa conexión a través de WiMAX (wifi)</option>
		                                                    <option value="3">Fibra óptica, pero no descarto WiMAX (wifi) si aún no llega la fibra a mi zona</option>
		                                                    <option value="4">Cualquiera, mientras exista cobertura en mi zona</option>
		                                                </select>
		                                                <span id="page-cobertura-campo-tipo-conexion-help-block" class="help-block"></span>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <hr class="mv10">
		                                    <div id="formulario-coordenadas" style="display: none;">
		                                        <h5><span class="badge badge-u margin-right-10 rounded-4x">?</span>Localiza tu dirección en el mapa</h5>
		                                        <div class="margin-bottom-10">
		                                            <p>
		                                                Utiliza el mapa para buscar tu dirección y haz clic cuando la encuentres. <a class="margin-left-5" role="button" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">Ayuda</a>
		                                            </p>
		                                            <div class="well well-small margin-top-20 collapse" id="page-cobertura-ayuda">
		                                                <dl>
		                                                    <dt class="margin-bottom-5">Mover el mapa</dt>
		                                                    <dd class="margin-bottom-10">Para mover el mapa, haz clic en el ratón y mantenlo pulsado mientras lo arrastras.</dd>
		                                                    <dt class="margin-bottom-5">Aumentar o reducir la vista</dt>
		                                                    <dd class="margin-bottom-10">Para aumentar o reducir la vista, ve a la parte inferior derecha y utiliza los botones + y -. También puedes hacer doble clic para aumentar el mapa.</dd>
		                                                    <dt class="margin-bottom-5">Explorar el mapa</dt>
		                                                    <dd class="margin-bottom-10">Haz clic una vez en cualquier lugar del mapa para obtener información sobre un lugar.</dd>
		                                                    <dt class="margin-bottom-5">Ver imágenes de satélite</dt>
		                                                    <dd class="margin-bottom-10">Para ver imágenes de satélite, ve a la parte superior izquierda y utiliza el botón 'Satélite'. Puedes alternar entre vista satélite y mapa.</dd>
		                                                    <dt class="margin-bottom-5">Vista a pantalla completa</dt>
		                                                    <dd class="margin-bottom-10">Para ver el mapa a pantalla completa, ve a la parte superior derecha y haz clic sobre el botón 'Cambiar vista a pantalla completa'. Para restaurar la vista pulsa de nuevo en el mismo botón.</dd>
		                                                </dl>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-sm-6">
		                                                <div class="form-group" id="page-cobertura-campo-latitud-container">
		                                                    <label class="control-label" for="page-cobertura-campo-latitud">Latitud<span class="color-red margin-left-5">*</span></label>
		                                                    <input type="text" class="form-control rounded" id="page-cobertura-campo-latitud" name="latitud" maxlength="20" readonly="readonly">
		                                                    <span id="page-cobertura-campo-latitud-help-block" class="help-block"></span>
		                                                </div>
		                                            </div>
		                                            <div class="col-sm-6">
		                                                <div class="form-group" id="page-cobertura-campo-longitud-container">
		                                                    <label class="control-label" for="page-cobertura-campo-longitud">Longitud<span class="color-red margin-left-5">*</span></label>
		                                                    <input type="text" class="form-control rounded" id="page-cobertura-campo-longitud" name="longitud" maxlength="20" readonly="readonly">
		                                                    <span id="page-cobertura-campo-longitud-help-block" class="help-block"></span>
		                                                </div>
		                                            </div>
		                                            <div class="col-sm-12">
		                                                <div class="form-group" id="page-cobertura-campo-address-container">
		                                                    <span class="text-muted font-normal margin-bottom-5" id="page-cobertura-campo-address"></span>
		                                                    <span id="page-cobertura-campo-address-help-block" class="help-block"></span>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <hr class="mv10">
		                                    </div>
		                                    <h5><span class="badge badge-u margin-right-10 rounded-4x">?</span>Déjanos tus datos</h5>
		                                    <div class="row">
		                                        <div class="col-sm-12">
		                                            <div class="row">
		                                                <div class="col-sm-5">
		                                                    <div class="form-group" id="page-cobertura-campo-nombre-container">
		                                                        <label class="control-label" for="page-cobertura-campo-nombre">Nombre<span class="color-red margin-left-5">*</span></label>
		                                                        <input type="text" class="form-control rounded" id="page-cobertura-campo-nombre" name="nombre" maxlength="50">
		                                                        <span id="page-cobertura-campo-nombre-help-block" class="help-block"></span>
		                                                    </div>
		                                                </div>
		                                                <div class="col-sm-7">
		                                                    <div class="form-group" id="page-cobertura-campo-apellidos-container">
		                                                        <label class="control-label" for="page-cobertura-campo-apellidos">Apellidos<span class="color-red margin-left-5">*</span></label>
		                                                        <input type="text" class="form-control rounded" id="page-cobertura-campo-apellidos" name="apellidos" maxlength="50">
		                                                        <span id="page-cobertura-campo-apellidos-help-block" class="help-block"></span>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                            <div class="form-group" id="page-cobertura-campo-direccion-container">
		                                                <label class="control-label" for="page-cobertura-campo-direccion">Dirección<span class="color-red margin-left-5">*</span><span class="margin-left-10 text-muted font-normal">necesitamos que nos indiques tu dirección completa</span></label>
		                                                <input type="text" class="form-control rounded" id="page-cobertura-campo-direccion" name="direccion" maxlength="150">
		                                                <span class="text-muted">
		                                                    <span class="margin-bottom-10 inline-group">ejemplo: Calle Jorge Castaños, 23, 4º Dcha., Urbanización Las Sirenas, 29780, Nerja, Málaga</span>
		                                                </span>
		                                                <span id="page-cobertura-campo-direccion-help-block" class="help-block"></span>
		                                            </div>
		                                            <div class="form-group" id="page-cobertura-campo-inmueble-container" style="display: none">
		                                                <label class="control-label" for="page-cobertura-campo-inmueble">Inmueble</label>
		                                                <input type="text" class="form-control rounded" id="page-cobertura-campo-inmueble" name="inmueble" maxlength="150">
		                                                <span class="text-muted">Tipo, edificio, portal, planta, puerta, escalera... </span>
		                                                <span id="page-cobertura-campo-inmueble-help-block" class="help-block"></span>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-xs-5">
		                                                    <div class="form-group" id="page-cobertura-campo-prefijo-container">
		                                                        <label class="control-label" for="page-cobertura-campo-prefijo">Prefijo<span class="color-red margin-left-5">*</span></label>
		                                                        <select class="form-control rounded" id="page-cobertura-campo-prefijo" name="prefijo">
		                                                            <option value="93" data-pais="Afganistán" data-iso2="AF" data-iso3="AFG">Afganistán - 93</option>
																																<option value="355" data-pais="Albania" data-iso2="AL" data-iso3="ALB">Albania - 355</option>
																																<option value="49" data-pais="Alemania" data-iso2="DE" data-iso3="DEU">Alemania - 49</option>
																															</option>
																															<option value="58" data-pais="Venezuela" data-iso2="VE" data-iso3="VEN">Venezuela - 58</option></select><span id="page-cobertura-campo-prefijo-help-block" class="help-block"></span>
		                                                    </div>
		                                                </div>
		                                                <div class="col-xs-7">
		                                                    <div class="form-group" id="page-cobertura-campo-telefono-container">
		                                                        <label class="control-label" for="page-cobertura-campo-telefono">Teléfono<span class="color-red margin-left-5">*</span></label>
		                                                        <input type="text" class="form-control rounded" id="page-cobertura-campo-telefono" name="telefono" maxlength="15">
		                                                        <span id="page-cobertura-campo-telefono-help-block" class="help-block"></span>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                            <div class="form-group" id="page-cobertura-campo-email-container">
		                                                <label class="control-label" for="page-cobertura-campo-email">Email<span class="color-red margin-left-5">*</span></label>
		                                                <input type="email" class="form-control rounded" id="page-cobertura-campo-email" name="email" maxlength="250">
		                                                <span id="page-cobertura-campo-email-help-block" class="help-block"></span>
		                                            </div>
		                                            <hr class="mv10">
		                                            <div class="form-group" id="page-cobertura-campo-mensaje-container">
		                                                <label class="control-label" for="page-cobertura-campo-mensaje">Comentarios</label>
		                                                <textarea class="form-control rounded" id="page-cobertura-campo-mensaje" name="mensaje" rows="5" maxlength="400"></textarea>
		                                                <span id="page-cobertura-campo-mensaje-help-block" class="help-block"></span>
		                                            </div>
		                                            <div class="checkbox" id="page-cobertura-campo-aceptar-condiciones-container">
		                                                <label>
		                                                    <input type="checkbox" id="page-cobertura-campo-aceptar-condiciones" name="condiciones"> Entiendo y acepto la <a data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">cláusula LOPD<span class="color-red margin-left-5">*</span></a>
		                                                </label>
		                                                <span id="page-cobertura-campo-aceptar-condiciones-help-block" class="help-block"></span>
		                                            </div>
		                                            <div class="form-group">
		                                                <p id="page-cobertura-condiciones" class="collapse text-muted">Según la Ley Orgánica 15/1999 de 13 de diciembre sobre protección de Datos de Carácter Personal (LOPD), le informamos de que los datos proporcionados a través de este formulario serán usados únicamente para responder a la propia consulta y para posibles comunicaciones comerciales derivadas de la misma. Los datos estarán gestionados exclusivamente por Hybtel Comunicaciones S.L. y nunca serán cedidos a terceros.</p>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </form>
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <div class="form-group">
		                                            <button class="btn btn-u btn-md rounded" id="page-cobertura-ctrl-enviar" data-toggle="modal" data-target="#exampleModal">Enviar<i class="fa fa-refresh fa-spin margin-left-10" style="display:none"></i></button>
		                                        </div>
		                                        <p class="margin-top-20 text-muted"><span class="margin-right-5 color-red">*</span>Campos obligatorios.</p>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="clearfix shadow-wrapper margin-top-20" id="page-cobertura-frm-resultado-container" style="display: none">
		                            <div class="tag-box tag-box-v6 box-shadow shadow-effect-2">
		                                <div class="message text-center margin-top-20 margin-bottom-30">
		                                    <h4 id="page-cobertura-campo-resultado-mensaje"></h4>
		                                    <p id="page-cobertura-campo-resultado-mensaje-agradecimiento" class="margin-bottom-20"></p>
		                                    <button type="button" class="btn btn-u rounded margin-top-20" id="page-cobertura-ctrl-resultado-aceptar"></button>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-md-4 col-md-offset-1">
		                        <div class="headline">
		                            <h2>Nuestra cobertura</h2>
		                        </div>
		                        <p>Gracias a nuestra propia red de acceso, con tecnologías de radio (<strong>WiMAX</strong>) y de <strong>Fibra óptica</strong>, Hybtel proporciona accesos a Internet de banda ancha sin la necesidad de contar con cobertura de otros operadores o líneas de telefonía convencional...</p>
		                        <div class="headline"><h2>Te lo explicamos bien</h2></div>
		                        <dl>
		                            <dt class="margin-bottom-5"><i class="fa fa-question-circle color-green margin-right-5"></i>¿Por qué tengo que comprobar mi cobertura?</dt>
		                            <dd class="margin-bottom-10">Vamos a comprobar qué productos Hybtel llegan a tu hogar para informarte de la mejor oferta disponible.</dd>
		                            <dt class="margin-bottom-5"><i class="fa fa-question-circle color-green margin-right-5"></i>¿Por qué tengo que dar mis datos?</dt>
		                            <dd class="margin-bottom-10">
		                                <p>Tu dirección nos permite comprobar qué servicios tenemos disponibles en tu zona. Tu nombre, email y teléfono para poder estar en contacto contigo e informarte de nuestros servicios</p></dd>
		                            <dt class="margin-bottom-5"><i class="fa fa-question-circle color-green margin-right-5"></i>¿Se van a utilizar mis datos con otro fin?</dt>
		                            <dd>Puedes estar tranquilo. Tus datos serán usados únicamente para responder a la propia consulta y para posibles comunicaciones comerciales derivadas de la misma. Nunca serán cedidos a terceros.</dd>
		                        </dl>
		                        <div class="headline"><h2>¿Tienes más dudas?</h2></div>
		                        <p>Si necesitas ayuda o quieres más información sobre cualquier tema, llámanos o escríbenos a:</p>
		                        <ul class="list-unstyled who margin-bottom-30">
		                            <li><i class="fa fa-phone"></i>951 238 600 </li>
		                            <li><a href="#"><i class="fa fa-envelope"></i>info@Hybtel.es</a></li>
		                        </ul>
		                    </div>
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
		                <h2 id="municipios"><span class="icon-base icon-bag margin-right-10 axa-cab-icon"></span>INTERNET EN LA AXARQUIA</h2>
		            </div>
		        </div>
		    </div>
		</div>
		<!--  -->
		<div class="container content">
		    <div class="headline">
					<h3>El mejor wifi en casa</h3>
				</div>
		    <p>Contrata tus servicios de Internet, Teléfono y Televisión con Hybtel, el proveedor líder de la Axarquía y disfruta del mejor servicio de voz y datos. Actualmente damos cobertura en todos estos municipios de la Axarquía:</p>
		    <div class="row">
		        <div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Alcaucín</a>
							</h4>
							<p>Alcaucín, El Cerro, El Toril, Espino, Los Cortijillos, Pilarejo, Puente de Salia, Venta Baja.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Algarrobo</a>
							</h4>
							<p>Algarrobo, Algarrobo-Costa.</p>
						</div>
						<div class="clearfix visible-sm visible-md"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Almáchar</a>
							</h4>
							<p>Almáchar, Rio Almáchar.</p>
						</div>
						<div class="clearfix visible-lg">
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Arenas</a>
							</h4>
							<p>Arenas</p>
						</div>
						<div class="clearfix visible-sm visible-md"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Benamargosa</a>
							</h4>
							<p>Benamargosa</p>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Benamocarra</a>
							</h4>
							<p>Benamocarra</p>
						</div>
						<div class="clearfix visible-sm visible-md visible-lg"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Canillas de Aceituno</a>
							</h4>
							<p>Canillas de Aceituno</p>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5"><a href="#">Cobertura Internet en Canillas de Albaida</a>
							</h4>
							<p>Canillas de Albaida</p>
						</div>
						<div class="clearfix visible-sm visible-md"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Cómpeta</a>
							</h4>
						<p>Cómpeta, Los Jurcos, Espejo.</p>
						</div>
						<div class="clearfix visible-lg"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en El Borge</a>
							</h4>
							<p>El Borge, Santo Pitar.</p>
						</div>
						<div class="clearfix visible-sm visible-md"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Frigiliana</a>
							</h4>
							<p>Frigiliana, Cortijo de San Rafael, Camino Viejo de Málaga, Los Cipreses, El Acebuchal, El Cerro, Caracoles.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en La Viñuela</a>
							</h4>
							<p>La Viñuela, Cortijuelos, Los Millares, Los Paulas.</p>
						</div>
						<div class="clearfix visible-sm visible-md visible-lg"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Macharaviaya</a>
							</h4>
							<p>Macharaviaya, Benaque, Vallejos.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Moclinejo</a>
							</h4>
							<p>Moclinejo, Valdés.</p>
							</div>
						<div class="clearfix visible-sm visible-md"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Nerja</a>
							</h4>
							<p>Nerja, Maro, Punta Lara, Oasis de Capistrano, Capistrano Playa, Capistrano Village, San Juan de Capistrano, Rio Seco, La Noria, Pueblo Rocío, Camino de Enmedio, La Exótica, Tamango Hill, Ladera del Mar, Tropicana, Rio Chillar, Barranco del Puerto, Imaroga, Castillo Alto.</p>
						</div>
						<div class="clearfix visible-lg"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Periana</a>
							</h4>
							<p>Periana</p>
						</div>
						<div class="clearfix visible-sm visible-md"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Salares</a>
							</h4>
							<p>Salares</p>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4"><h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Sayalonga</a>
							</h4>
							<p>Sayalonga, Corumbela.</p>
						</div>
						<div class="clearfix visible-sm visible-md visible-lg"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Sedella</a>
							</h4>
							<p>Sedella, Rubite, Valverdes.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Torrox</a>
							</h4>
							<p>Torrox, Amberes, Barranco del Negro, Barranco Plano, Benamar, Calaceite, Castillo Bajo - Conejito, Carlaja, Conchales, El Culebral, El Manzano, El Meli, El Morche, Generación del 27, Güi (Huit), La Cebadilla, La Coscoja, La Dehesa, La Rábita, La Rabitilla, Los Llanos, Mascuñar, Montealegre, Morente, Palagares, Patamalara, Pedro López, Peñoncillo, Torrox-Costa, Residencial Cortijo Amaya.</p>
						</div>
						<div class="clearfix visible-sm visible-md"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Totalán</a>
							</h4>
							<p>Totalán</p>
						</div>
						<div class="clearfix visible-lg"></div>
						<div class="col-md-6 col-sm-6 col-lg-4">
							<h4 class="fs-14 mb5">
								<a href="#">Cobertura Internet en Vélez-Málaga</a>
							</h4>
							<p>Vélez-Málaga, Almayate, Benajarafe, Cabrillas, Cajiz, Caleta de Vélez, Chilches, Lagos, Mezquitilla, Torre del Mar, Trapiche, Triana.</p>
						</div>
						<div class="clearfix visible-sm visible-md"></div>
		    </div>
		</div>
		<!--  -->
		<?php 
        require_once 'footer.php'; 
    ?>