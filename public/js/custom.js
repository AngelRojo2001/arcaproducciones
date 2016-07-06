$(document).ready(function() {
	$('.btn-eliminar').click(function() {
		var eliminar = confirm('¿Realmente deseas eliminar la publicación?');
		if (eliminar) {
			var pagina = $(this).attr('href');
			window.location = pagina;
		}
		else {
			return false;
		}
	});
	$('.btn-editar').click(function() {
		var editar = confirm('¿Realmente deseas editar la imagen?');
		if (editar) {
			var pagina = $(this).attr('href');
			window.location = pagina;
		}
		else {
			return false;
		}
	});
});