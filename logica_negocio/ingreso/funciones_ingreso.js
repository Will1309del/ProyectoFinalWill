$(function(){
	console.log("Todo esta integrado");

	$("#formulario_login").submit(function(event)){
			event.preventDefaultl();
			var datos = $("#formulario_login").serialize();
			console.log("evento submit",datos);
	});
})