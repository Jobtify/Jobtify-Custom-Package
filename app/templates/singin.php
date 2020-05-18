<br><br>
<div class="container">
    <h3>Crea tu cuenta como candidato</h3>
    <hr>
    <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">Perfil personal<br /></a></li>
                <li><a href="#step-2">Sobre mi<br /></a></li>
                <li><a href="#step-3">Experiencia laboral<br /></a></li>
                <li><a href="#step-4">Historial académico<br /></a></li>
                <li><a href="#step-5">Información complementaria<br /></a></li>
                <li><a href="#step-6">Cargar Mi CV<br /></a></li>
                <li><a href="#step-7">Finalizar<br /></a></li>
            </ul>
            <br><br>

            <div>
                <div id="step-1" class="">
                    <div id="form-step-0" role="form" data-toggle="validator">
                        
                        <!-- Inicio Fila 0 -->
                        <div class="row">
                            <!-- Inicio Columna 1 -->
                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Usuario*</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="usuario" name="usuario" class="form-control" min="5" max="24" placeholder="usuario" 
                                        pattern="[a-zA-Z0-9]+" required>
                                        <small class="form-text text-muted">Acepta letras y números. Sin espacio.</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Columna 1 -->

                            <!-- Inicio Columna 2 -->
                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Email*</label>
                                    <div class="col-sm-8">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="nombre@corre.com" required> 
                                        <small class="form-text text-muted">Acepta solo correos electrónicos.</small>
                                        <div class="help-block with-errors"></div>
                                     </div>
                                </div>
                            </div>
                            <!-- Fin Columna 2 -->

                            <!-- Inicio Columna 3 -->
                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Contraseña*</label>
                                    <div class="col-sm-8">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="********" min="5" max="10"  required>
                                        <small class="form-text text-muted">Acepta letras y números. Sin espacio.</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>                 
                        </div>
                        <!-- Fin Fila 0 -->

                        <!-- Inicio Fila 1 -->
                        <div class="row">
                            <!-- Inicio Columna 1 -->
                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Nombre*</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nombre" class="form-control"placeholder="Ej. Elías" min="5" max="30" 
                                        pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                                        <small class="form-text text-muted">Acepta solo letras.</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Columna 1 -->

                            <!-- Inicio Columna 2 -->
                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Apellido Paterno*</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="apellido1" class="form-control" placeholder="Ej. Acosta" min="5" max="30" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required> 
                                        <small class="form-text text-muted">Acepta solo letras.</small>
                                        <div class="help-block with-errors"></div>
                                     </div>
                                </div>
                            </div>
                            <!-- Fin Columna 2 -->

                            <!-- Inicio Columna 3 -->
                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Apellido Materno*</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="apellido2" class="form-control" placeholder="Ej. González" min="5" max="30" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                                        <small class="form-text text-muted">Acepta solo  letras.</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>                 
                        </div>
                        <!-- Fin Fila 1 -->
                        
                        <!-- Inicio Fila 2 -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row form-group additional-information">
                                    <label class="col-sm-4 label-title">Sexo*</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="sexo" name="sexo" tabindex="5" required="">
                                            <option value="" >Elige una opción</option>
                                            <option value="M" >Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                            <small class="form-text text-muted">Selecciona una opción.</small>
                                            <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Fecha de nacimiento*</label>
                                    <div class="col-sm-8">
                                        <div id="filterDate2">
                                            <div class="input-group date" data-date-format="yyyy.dd.mm">
                                                <input class="form-control" id="date" name="date" 
                                                data-format="aaaa-mm-dd"
                                                pattern="/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/" type="date" required="" value="">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                                <small class="form-text text-muted">Acepta solo fecha en el formato especificado.</small>
                                                <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Profesión</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="profesion" class="form-control" placeholder="Eje. Gerente en .." pattern="^[a-zA-Z.ñÑáéíóúÁÉÍÓÚ()\s]+" maxlength="50">
                                            <small class="form-text text-muted">Acepta solo letras.</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                            </div>                  
                        </div>
                        <!-- Fin Fila 2 -->
                        
                        <!-- Inicio Fila 3 -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row form-group">
                                     <label class="col-sm-4 label-title">Dirección*</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="direccion" class="form-control" placeholder="Av. Los robles Num. 9" maxlength="80"
                                            pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ#.,\s]+" required> 
                                            <small class="form-text text-muted">Escribe tu dirección completa.</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                            </div>
                                                
                                                
                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Código postal</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="cp" class="form-control" placeholder="99809" pattern="[0-9]{5}" minlength="5" maxlength="5" size="5"> 
                                            <small class="form-text text-muted">Acepta solo números.</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                            </div>
                                                
                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Teléfono</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="telefono" class="form-control" placeholder="2293073015" pattern="[0-9]{10}">
                                        <small class="form-text text-muted">Acepta solo numeros (10 dígitos).</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>                
                        </div>
                        <!-- Fin Fila 3 -->
                        
                        <!-- Inicio Fila 4 -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row form-group additional-information">
                                    <label class="col-sm-4 label-title">Entidad federativa*</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="entidad" name="entidad" tabindex="5" required>
                                            <option value="">Elige una opción</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Se necesita una opción para poder guardar los datos.</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                 </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row form-group additional-information">
                                    <label class="col-sm-4 label-title">Municipio*</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="municipio" name="municipio" tabindex="5" required="">
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Se necesita una opción para poder guardar los datos.</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="row form-group additional-information">
                                    <label class="col-sm-4 label-title">Localidad*</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="localidad" name="localidad" tabindex="5" required="">
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Se necesita una opción para poder guardar los datos.</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                        <!-- Fin Fila 4 -->
                        
                        <!-- Inicio Fila 5 -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row form-group additional-information">
                                    <label class="col-sm-4 label-title">Nivel de estudios*</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="nivelestudios" name="nivelestudios" required="">
                                            <option value="">Elige una opción</option>
                                            </select>
                                            <small id="Help" class="form-text text-muted">Se necesita una opción para poder guardar los datos.</small>
                                            <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row form-group">
                                    <label class="col-sm-4 label-title">Área de interés*</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="categoria" name="categoria" required="">
                                                <option value="">Elige una opción</option>
                                            </select>
                                            <small class="form-text text-muted">Elige la categoría de tu empleo deseado.</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Fila 5 -->
                    </div>
                </div>
                <div id="step-2" class="">
                    <div id="form-step-1" role="form" data-toggle="validator">
                        <h5>Sobre mi*</h5>
                        <p>Agrega una descripción de impacto. "<b>Vende</b>" tu perfil profesional. Menciona tus objetivos, habilidades, logros, etc.</p>
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <textarea class="form-control" id="sobremi" maxlength="2000" rows="8" data-pattern="foo"></textarea>
                                <small class="form-text text-muted">Acepta letras, números y: <b>“”*:’&+$|•-.,;:><()¿?!¡/</b></small>
                                <p>Máximo 2000 caracteres. Restantes <span id="caracteres"></span></p>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div id="step-3" class="">
                    <div id="form-step-2" role="form" data-toggle="validator">
                        <h5>Experiencia laboral</h5>
                        <p>Agrega de uno hasta tres  bloques de experiencia laboral. Si no cuentas con experiencia puedes dejar vacíos los campos.</p>
                        <div class="section experiencialab">
                            <div class="experiencias d-none" id="experiencia1">
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Empresa*</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="empresa1" id="empresa1" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+" >
                                        <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Puesto*</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="titulo1" id="titulo1" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+" >
                                            <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                
                                <div class="row form-group time-period">
                                    <label class="col-sm-3 label-title">Periodo* (Inicio / Fin)</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="date" name="inicio1" id="inicio1" class="form-control">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="date" name="fin1" id="fin1" class="form-control pull-right">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row form-group job-description">
                                    <label class="col-sm-3 label-title">Descripción*</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="descripcion1" id="descripcion1" placeholder="Describe tus funciones, logros o algo por resaltar en este empleo." rows="8" data-pattern="foo"></textarea>
                                            <small class="form-text text-muted">Acepta letras, números y: <b>“”*:’&+$|•-.,;:><()¿?!¡/</b></small>
                                            <div class="help-block with-errors"></div>  
                                        </div>
                                </div> 
                                <hr>                  
                            </div>
                            <div class="experiencias d-none" id="experiencia2">
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Empresa*</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="empresa2" id="empresa2" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+">
                                        <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Puesto*</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="titulo2" id="titulo2" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+">
                                            <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                <div class="row form-group time-period">
                                    <label class="col-sm-3 label-title">Periodo* (Inicio / Fin)</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="date" name="inicio2" id="inicio2" class="form-control" >
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="date" name="fin2" id="fin2" class="form-control pull-right">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row form-group job-description">
                                    <label class="col-sm-3 label-title">Descripción*</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="descripcion2" id="descripcion2" placeholder="Describe tus funciones, logros o algo por resaltar en este empleo." rows="8" data-pattern="foo"></textarea>
                                            <small class="form-text text-muted">Acepta letras, números y: <b>“”*:’&+$|•-.,;:><()¿?!¡/</b></small>
                                            <div class="help-block with-errors"></div>      
                                        </div>
                                </div>
                                <hr>                   
                            </div>
                            <div class="experiencias d-none" id="experiencia3">
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Empresa*</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="empresa3" id="empresa3" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Puesto*</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="titulo3" id="titulo3" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                <div class="row form-group time-period">
                                    <label class="col-sm-3 label-title">Periodo* (Inicio / Fin)</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="date" name="inicio3" id="inicio3" class="form-control" >
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="date" name="fin3" id="fin3" class="form-control pull-right" >
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row form-group job-description">
                                    <label class="col-sm-3 label-title">Descripción*</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="descripcion3" id="descripcion3" placeholder="Describe tus funciones, logros o algo por resaltar en este empleo." rows="8" data-pattern="foo"></textarea>
                                            <small class="form-text text-muted">Acepta letras, números y: <b>“”*:’&+$|•-.,;:><()¿?!¡/</b></small>
                                            <div class="help-block with-errors"></div>      
                                        </div>
                                </div>                
                            </div>
                        </div>


                        <div class="buttons">
                            <button class="btn btn-primary" id="nexperiencialab" type="button">Nueva experiencia</button>
                            <button class="btn btn-danger d-none" id="dexperiencialab" type="button">Eliminar actual</button>
                        </div>
                    </div>
                </div>
                <div id="step-4" class="">
                    <div id="form-step-3" role="form" data-toggle="validator">
                        <h5>Historial académico</h5>
                        <p>Agrega de uno hasta tres  bloques de historial académico. Aunque los campos son opcionales, es altamente recomendable agregar por lo menos uno.</p>

                        <div class="section educacionlab">
                            <div class="educaciones d-none" id="educacion1">
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Institución*</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="institucion1" id="institucion1" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+" >
                                        <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Título obtenido*</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="curso1" id="curso1" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+" >
                                            <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Periodo* (Inicio / Fin)</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="date" name="inicioed1" id="inicioed1" class="form-control">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="date" name="fined1" id="fined1" class="form-control pull-right">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Descripción*</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="descripcioned1" id="descripcioned1" rows="8" data-pattern="foo"></textarea>
                                            <small class="form-text text-muted">Acepta letras, números y: <b>“”*:’&+$|•-.,;:><()¿?!¡/</b></small>
                                            <div class="help-block with-errors"></div>     
                                        </div>
                                </div>
                                <hr>
                            </div>
                            <div class="educaciones d-none" id="educacion2">
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Institución*</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="institucion2" id="institucion2" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+" >
                                        <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Título obtenido*</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="curso2" id="curso2" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+" >
                                            <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Periodo* (Inicio / Fin)</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="date" name="inicioed2" id="inicioed2" class="form-control">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="date" name="fined2" id="fined2" class="form-control pull-right">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Descripción*</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="descripcioned2" id="descripcioned2" rows="8" data-pattern="foo"></textarea>
                                            <small class="form-text text-muted">Acepta letras, números y: <b>“”*:’&+$|•-.,;:><()¿?!¡/</b></small>
                                            <div class="help-block with-errors"></div>     
                                        </div>
                                </div>
                                <hr>
                            </div>
                            <div class="educaciones d-none" id="educacion3">
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Institución*</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="institucion3" id="institucion3" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+" >
                                        <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Título obtenido*</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="curso3" id="curso3" class="form-control" pattern="[^'\x22][/^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s.,()\-\/]+" >
                                            <small class="form-text text-muted">Acepta letras, números y .,()/-</small>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Periodo* (Inicio / Fin)</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="date" name="inicioed3" id="inicioed3" class="form-control">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="date" name="fined3" id="fined3" class="form-control pull-right">
                                                    <small class="form-text text-muted">Acepta el formato de fecha establecido.</small>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Descripción*</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="descripcioned3" id="descripcioned3" rows="8" data-pattern="foo"></textarea>
                                            <small class="form-text text-muted">Acepta letras, números y: <b>“”*:’&+$|•-.,;:><()¿?!¡/</b></small>
                                            <div class="help-block with-errors"></div>     
                                        </div>
                                </div>
                            </div>


                        <div class="buttons">
                            <button class="btn btn-primary" id="neducapro" type="button">Nueva educación</button>
                            <button class="btn btn-danger d-none" id="deducapro" type="button">Eliminar actual</button>
                        </div>
                                        </div>
                    </div>
                </div>
                <div id="step-5" class="">
                    <div id="form-step-4" role="form" data-toggle="validator">
                        <h5>Información complementaria</h5>
                        <p>Agrega algún dato adicional que no quieras pasar desapercibido: certificaciones, referencias, cursos, aptitudes, reconocimientos, etc.</p>

                        <div class="form-group">
                            <textarea class="form-control easyeditor" id="infoadicional" name="infoadicional" rows="8" maxlength="2000" data-pattern="foo"></textarea>
                            <small class="form-text text-muted">Acepta letras, números y: <b>“”*:’&+$|•-.,;:><()¿?!¡/</b></small>
                            <p>Máximo 2000 caracteres. Restantes <span id="caracteres2"></span></p>
                            <div class="help-block with-errors"></div>      
                        </div>
                    </div>
                </div>
                <div id="step-6" class="">
                    <div class="d-flex justify-content-center">
                       <div class="col-lg-6 col-sm-6 col-12">
                            <h5>Selecciona tu CV</h5>
                            <p></p>
                            <div id="form-step-5" role="form" data-toggle="validator">
                                <div class="form-group input-group">
                                  <span class="input-group-btn">
                                    <label class="btn btn-primary btn-file" for="multiple_input_group">
                                      <div class="input required"><input id="cvpdf" name="cvpdf" type="file" required></div> Buscar
                                    </label>
                                  </span>
                                  <div class="help-block with-errors"></div>
                                  <span class="file-input-label"></span>
                                    <span class="help-block"><b>El archivo tiene que ser en formato pdf.</b></span>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
                <div id="step-7" class="">
                    <div class="d-flex justify-content-center">
                       <div class="col-sm-">
                            <h5>Imágen de perfil</h5>
                            <p>De preferencia sube una imagen de frente, que no sea tipo selfie. Se lo más profesional posible.</p>

                            <div id="form-step-6" role="form" data-toggle="validator">
                                <div class="form-group input-group">
                                  <span class="input-group-btn">
                                    <label class="btn btn-primary btn-file" for="multiple_input_group">
                                      <div class="input required"><input id="imagenperfil" name="imagenperfil" type="file"></div> Buscar
                                    </label>
                                  </span>
                                  <span class="file-input-label"></span>
                                    <span class="help-block"><b>El archivo tiene que ser en formato .png o .jpg.</b></span>
                                </div>
                                <div class="form-group">
                                    <label for="terms">Al registrarme, acepto los <a href="terminos-y-condiciones-de-uso" target="_blank">términos y condiciones</a> del sitio.</label>
                                    <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
<br><br>