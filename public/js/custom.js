$(document).ready(function() {
	$('.btn-eliminar').click(function() {
		var eliminar = confirm('¿Realmente deseas eliminar la publicación?');
		if (!eliminar) {
			return false;
		}
	});
	$('.btn-editar').click(function() {
		var editar = confirm('¿Realmente deseas editar la imagen?');
		if (!editar) {
			return false;
		}
	});
});