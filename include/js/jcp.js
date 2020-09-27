
var url = "https://www.ssdoutsourcing.com/bolsa-de-empleo";
$(document).ready(function(){

	$('form[data-toggle="validator"]').validator({
		custom: {
			pattern: function ($el) {
				//console.log($el.val());
				//var pattern = new RegExp($el.data('pattern'))
				//alert(pattern);
				//console.log($el.val());
				var pattern =   /^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ0“”*\:\’\&\+\$\|\•\-.,;:><()\s\n%¿?!¡\/]+$/;
				if (!$el.val().match(pattern)) {
				    return "Caracteres no aceptados.";
				}
			}
		},


	});

	

	var btnFinish = $('<button></button>').text('Finalizar')
        .addClass('btn btn-success')
        .on('click', function(){
	        if( !$(this).hasClass('disabled')){
	            var elmForm = $("#myForm");
	                if(elmForm){
	                    elmForm.validator('validate');
	                    var elmErr = elmForm.find('.has-error');
	                    if(elmErr && elmErr.length > 0){
	                        alert('Por favor llena el formulario correctamente');
	                        return false;
	                    }else{
	                        
	                        //elmForm.submit();
	                        
	                        var datos = new FormData();
	                        /*
	                        	Envía el perfil personal
	                         */
						    datos.append('datospersonales', true);
						    datos.append('usuario', $("input[name=usuario]").val());
						    datos.append('email', $("input[name=email]").val());
						    datos.append('password', $("input[name=password]").val());
						    datos.append('nombre', $("input[name=nombre]").val());
						    datos.append('apellido1', $("input[name=apellido1]").val());
						    datos.append('apellido2', $("input[name=apellido2]").val());
						    datos.append('sexo', $( "#sexo option:selected" ).val());
						    datos.append('fnacimiento', $("input[name=date]").val());
						    datos.append('profesion', $("input[name=profesion]").val());
						    datos.append('direccion', $("input[name=direccion]").val());
						    datos.append('cp', $("input[name=cp]").val());
						    datos.append('telefono', $("input[name=telefono]").val());
						    datos.append('entidad', $( "#entidad option:selected" ).val());
						    datos.append('municipio', $( "#municipio option:selected" ).val());
						    datos.append('localidad', $( "#localidad option:selected" ).val());
						    datos.append('nivelestudios', $( "#nivelestudios option:selected" ).val());
						    datos.append('categoria', $( "#categoria option:selected" ).val());
						    /*
						    	Envía el apartado "Sobre mi"
						     */
						    datos.append('sobremi', $("#sobremi").val());
						    /*
						    	Envía el bloque de experiencia laboral
						     */
						    datos.append('empresa1', $("input[name=empresa1]").val());
						    datos.append('puesto1', $("input[name=titulo1]").val());
						    datos.append('inicio1', $("input[name=inicio1]").val());
						    datos.append('fin1', $("input[name=fin1]").val());
						    datos.append('descripcion1', $("textarea[name=descripcion1]").val());
						    datos.append('empresa2', $("input[name=empresa2]").val());
						    datos.append('puesto2', $("input[name=titulo2]").val());
						    datos.append('inicio2', $("input[name=inicio2]").val());
						    datos.append('fin2', $("input[name=fin2]").val());
						    datos.append('descripcion2', $("textarea[name=descripcion2]").val());
						    datos.append('empresa3', $("input[name=empresa3]").val());
						    datos.append('puesto3', $("input[name=titulo3]").val());
						    datos.append('inicio3', $("input[name=inicio3]").val());
						    datos.append('fin3', $("input[name=fin3]").val());
						    datos.append('descripcion3', $("textarea[name=descripcion3]").val());
						    /*
						    	Envía el bloque de historial académico
						     */
						    datos.append('institucioned1', $("input[name=institucion1]").val());
						    datos.append('cursoed1', $("input[name=curso1]").val());
						    datos.append('inicioed1', $("input[name=inicioed1]").val());
						    datos.append('fined1', $("input[name=fined1]").val());
						    datos.append('descripcioned1', $("textarea[name=descripcioned1]").val());

						    datos.append('institucioned2', $("input[name=institucion2]").val());
						    datos.append('cursoed2', $("input[name=curso2]").val());
						    datos.append('inicioed2', $("input[name=inicioed2]").val());
						    datos.append('fined2', $("input[name=fined2]").val());
						    datos.append('descripcioned2', $("textarea[name=descripcioned2]").val());

						    datos.append('institucioned3', $("input[name=institucion3]").val());
						    datos.append('cursoed3', $("input[name=curso3]").val());
						    datos.append('inicioed3', $("input[name=inicioed3]").val());
						    datos.append('fined3', $("input[name=fined3]").val());
						    datos.append('descripcioned3', $("textarea[name=descripcioned3]").val());
						    /*
						    	Envía la información complementaria
						     */
						    datos.append('infoadicional', $("textarea[name=infoadicional]").val());
						    /*
						    	Envía el archivo pdf
						     */
						    var file_data = $('#cvpdf').prop('files')[0];
						    datos.append('cvpdf', file_data);
						    /**
						     * Envía la imagen de perfil si existe.
						     */
						    var img_data = $('#imagenperfil').prop('files')[0];
						    datos.append('imgperfil', img_data);
						    $.ajax({
						        url:"jcp-ajax.php",
						        method:"POST",
						        data:datos,
						        cache:false,
						        contentType:false,
						        processData:false,
						        beforeSend: function() {
						            $("#loading").removeClass('d-none');
						        },
						        success: function(regreso){
						        	$("#loading").addClass('d-none');
						        	if(regreso==1){
						        		$(location).attr('href',url+'/thanks');
						        	}else{
						        		$("#modal-body").empty();
						        		$("#modal-body").append(regreso);
						        		$('#modal').modal('show');
						        	}
						        	console.log(regreso);
						        	
						        }
						    });
	           
	                        event.preventDefault();
	                    }
	                }
	        }
    	});


	$('#smartwizard').smartWizard({
		theme: 'arrows',
		lang: {
			next: 'Siguiente',
			previous: 'Anterior'
		},
		keyNavigation: false,
		autoAdjustHeight:true,
		//backButtonSupport: true,
		//cycleSteps: false,
		anchorSettings: {
            //anchorClickable: true, // Enable/Disable anchor navigation
            //enableAllAnchors: false, // Activates all anchors clickable all times
            //markDoneStep: true, // add done css
            //enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        },
        transitionEffect: 'fade', // Effect on navigation, none/slide/fade
        transitionSpeed: '400',
        toolbarSettings: {
        	toolbarPosition: 'bottom',
            toolbarExtraButtons: [btnFinish]
        },
        anchorSettings: {
            //markDoneStep: true, // add done css
            //markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
            //removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
            //	enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        }

	});
	

	$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        var elmForm = $("#form-step-" + stepNumber);
        elmForm.validator({
			custom: {
				pattern: function ($el) {
					var pattern =   /^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ0“”*\:\’\&\+\$\|\•\-.,;:><()\s\n%¿?!¡\/]+$/;
					if (!$el.val().match(pattern)) {
					    return "Algún caracter no es aceptado.";
					}
				}
			}
		});

        if(stepDirection === 'forward' && elmForm){
            elmForm.validator('update');
            elmForm.validator('validate');
            elmForm.validator('update');
            if($('.has-error').length > 0){
                // Form validation failed
                return false;
            }
        }
        return true;
    });
    

	/*
		Obtiene y actualiza los estados en el formulario de registro
	 */	
	if($('#entidad').length){
		var datos = new FormData();
		datos.append("getEstados", true);
		$.ajax({
            url:"jcp-ajax.php",
            method:"POST",
            dataType: 'JSON',
            data:datos,
            cache:false,
			contentType:false,
			processData:false,
            beforeSend: function () {
            	$('#entidad').prop('disabled', true);
            },
            success:  function (r){
            	console.log(r);
                $('#entidad').prop('disabled', false);

                Object.keys(r).forEach(function( key ) {
					$('#entidad').append('<option value="' + r[key].id+ '">' +r[key].nombre + '</option>');
            	}); 
            },
        });   
	}


	/*
		Obtiene y actualiza los municipios según el estado seleccionado en el formulario de registro
	 */
	$('#municipio').prop('disabled', true);
	$( "#entidad" ).change(function() {
		var entidad = $('select[name=entidad]').val();

		var datos = new FormData();
		datos.append("getMunicipios", true);
		datos.append("entidad",entidad);
		$.ajax({
	  		url:"jcp-ajax.php",
			method:"POST",
			dataType: 'JSON',
			data:datos,
			cache:false,
			contentType:false,
			processData:false,
			success: function(regreso){
				$('#municipio').prop('disabled', false);
				$('#municipio').empty();
				$('#localidad').empty();
				$('#municipio').append('<option value="">Elige una opción</option>');
				Object.keys( regreso ).forEach(function( key ) {
					$('#municipio').append('<option value="' + regreso[key].id+ '">' +regreso[key].nombre + '</option>');
            	});
			}
	  	});
	});


	/*
		Obtiene y actualiza las localidade según el municipio seleccionado en el formulario de registro
	 */
	$('#localidad').prop('disabled', true);
	$( "#municipio" ).change(function() {
		var municipio = $('select[name=municipio]').val();

		var datos = new FormData();
		datos.append("getLocalidades", true);
		datos.append("municipio",municipio);
		$.ajax({
	  		url:"jcp-ajax.php",
			method:"POST",
			dataType: 'JSON',
			data:datos,
			cache:false,
			contentType:false,
			processData:false,
			success: function(regreso){
				$('#localidad').prop('disabled', false);
				$('#localidad').empty();
				$('#localidad').append('<option value="">Elige una opción</option>');
				Object.keys( regreso ).forEach(function( key ) {
					$('#localidad').append('<option value="' + regreso[key].id+ '">' +regreso[key].nombre + '</option>');
            	});	
			}
	  	});
	});


	/*
		Obtiene y lista los nieveles de estudio disponibles
	 */	
	$('#nivelestudios').prop('disabled', true);
	if($('#nivelestudios').length){ 
		var datos = new FormData();
		datos.append("getNivelesEstudio", true);
		$.ajax({
            url:"jcp-ajax.php",
            method:"POST",
            dataType: 'JSON',
            data:datos,
            cache:false,
			contentType:false,
			processData:false,
            beforeSend: function () {
            	$('#nivelestudios').prop('disabled', true);
            },
            success:  function (r){
                $('#nivelestudios').prop('disabled', false);
                Object.keys(r).forEach(function( key ) {
					$('#nivelestudios').append('<option value="' + r[key].id+ '">' +r[key].nombre + '</option>');
            	}); 
            },
        });   
	}

	/*
		Obtiene y lista los nieveles de estudio disponibles
	 */	
	$('#categoria').prop('disabled', true);
	if($('#categoria').length){ 
		var datos = new FormData();
		datos.append("getCategorias", true);
		$.ajax({
            url:"jcp-ajax.php",
            method:"POST",
            dataType: 'JSON',
            data:datos,
            cache:false,
			contentType:false,
			processData:false,
            beforeSend: function () {
            	$('#categoria').prop('disabled', true);
            },
            success:  function (r){
                $('#categoria').prop('disabled', false);
                Object.keys(r).forEach(function( key ) {
					$('#categoria').append('<option value="' + r[key].id+ '">' +r[key].nombre + '</option>');
            	}); 
            },
        });   
	}


	/**
	 * Actualiza el contador de caracteres de la sección Sobre mi
	 * 
	 */
	var sobremimax = 2000;
	if ($('#sobremi').length){
		var actual = $('#sobremi').val().length;
		var d = sobremimax -actual;
		$('#caracteres').html(d);
	}


	/**
	 * Contador del textarea "Sobre mi"
	 */
	$('#sobremi').keyup(function() {
        var chars = $(this).val().length;
        var diff = sobremimax - chars;
        $('#caracteres').html(diff);   
    });

    /**
	 * Contador del textarea "Información Complementaria"
	 */
	$('#infoadicional').keyup(function() {
        var chars2 = $(this).val().length;
        var diff2 = sobremimax - chars2;
        $('#caracteres2').html(diff2);   
    });


	//////////////Funcionamiento del área Experienia laboral//////////
	var faltantes=0;
	var limite = 3;
	for (var i=1; i<=3; i++) {
   		if($('#experiencia'+i).hasClass('d-none')){
   			faltantes++;
   		}
	}
	var actual = limite-faltantes;
	if(actual==3){
		$('#nexperiencialab').addClass('d-none');
	}
	$('#nexperiencialab').click(function() {
		actual++;
		$('#experiencia'+actual).removeClass('d-none');
		//Hace requeridos los campos del formulario
		$('#empresa'+actual).prop('required', true);
		$('#titulo'+actual).prop('required', true);
		$('#inicio'+actual).prop('required', true);
		$('#fin'+actual).prop('required', true);
		$('#descripcion'+actual).prop('required', true);

		if(actual==3){
			$('#nexperiencialab').addClass('d-none');
		}
		if(actual>0){
			$('#dexperiencialab ').removeClass('d-none');
		}

	});
	$('#dexperiencialab').click(function() {
		$('#experiencia'+actual).addClass('d-none');
		//Quita los valores de los inputs
		$('#empresa'+actual).val("");
		$('#titulo'+actual).val("");
		$('#inicio'+actual).val("");
		$('#fin'+actual).val("");
		$('#descripcion'+actual).val("");

		//Quita los campos requeridos del formulario
		$('#empresa'+actual).prop('required', false);
		$('#titulo'+actual).prop('required', false);
		$('#inicio'+actual).prop('required', false);
		$('#fin'+actual).prop('required', false);
		$('#descripcion'+actual).prop('required', false);
		actual--;
		if(actual<3){
			$('#nexperiencialab').removeClass('d-none');
		}
		if(actual==0){
			$('#dexperiencialab').addClass('d-none');
		}

	});



	//////////////Funcionamiento del área Historial académico//////////
	var faltan=0;
	var lim = 3;
	for (var p=1; p<=3; p++) {
   		if($('#educacion'+p).hasClass('d-none')){
   			faltan++;
   		}
	}
	var act = lim-faltan;
	if(faltan==0){ 
		$('#neducapro').addClass('d-none');
	}
	$('#neducapro').click(function() {
		act++;
		$('#educacion'+act).removeClass('d-none');
		//Hace requeridos los campos del formulario
		$('#institucion'+act).prop('required', true);
		$('#curso'+act).prop('required', true);
		$('#inicioed'+act).prop('required', true);
		$('#fined'+act).prop('required', true);
		$('#descripcioned'+act).prop('required', true);

		if(act==3){
			$('#neducapro').addClass('d-none');
		}
		if(act>0){
			$('#deducapro').removeClass('d-none');
		}
	});
	$('#deducapro').click(function() {
		$('#educacion'+act).addClass('d-none');
		//Quita los valores de los inputs
		$('#institucion'+act).val("");
		$('#curso'+act).val("");
		$('#inicioed'+act).val("");
		$('#fined'+act).val("");
		$('#descripcioned'+act).val("");

		//Quita los campos requeridos del formulario
		$('#institucion'+act).prop('required', false);
		$('#curso'+act).prop('required', false);
		$('#inicioed'+act).prop('required', false);
		$('#fined'+act).prop('required', false);
		$('#descripcioned'+act).prop('required', false);

		act--;
		if(act<3){
			$('#neducapro').removeClass('d-none');
		}
		if(act==0){
			$('#deducapro').addClass('d-none');
		}
	});



	$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
		var input_label = $(this).closest('.input-group').find('.file-input-label'),
			log = numFiles > 1 ? numFiles + ' files selected' : label;
		if( input_label.length ) {
			input_label.text(log);
		} else {
			if( log ) alert(log);
		}
	});






	$('#cvpdf').change(function(e){
    	var file_data = $(this).prop('files')[0];
    	var ext = $( this ).val().split('.').pop();
    	if ($( this ).val() != '') {
		    if(ext !== "pdf"){
		    	alert("Archivo no válido");
		    	$(this).val('');
		    }
		}

	});

	$('#imagenperfil').change(function(e){
		var file = this.files[0];
		var fileType = file["type"];
		var validImageTypes = ["image/gif", "image/jpeg", "image/png"];
		if ($.inArray(fileType, validImageTypes) < 0) {
		    alert("Archivo no válido");
		    $(this).val('');
		}
	});

});


$(document).on('change', '.btn-file :file', function() {
  	var input = $(this),
    numFiles = input.get(0).files ? input.get(0).files.length : 1,
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  	input.trigger('fileselect', [numFiles, label]);
});


