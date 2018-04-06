$( document ).ready(function() {
	$('#form-wins').validate({
	  submitHandler: function(form){
	    $(form).ajaxSubmit({
	      beforeSend: function() {
	        //Desactiva formulario
	        $('#form-wins').find('input, textarea, button, select').attr('disabled',true);
	      },
	      success: function(respuesta){
	      	respuesta = respuesta.split("|");
	        $('#form-wins').find('input, textarea, button, select').attr('disabled',false);
	        if (respuesta[0] == "1")
	        {
	        	$('#id_api_fortnite_add').html(respuesta[1]);
		        $('#id_api_fortnite_edit').html(respuesta[1]);
		        $('#alerta-contador-done').removeClass('hidden');
		    }
	      },
	      error: function(xhr, ajaxOptions, thrownError){
	      }
	    })
	  }
	})
});