var x = $(document);
x.ready(inicializar);

function inicializar() {
	var x = $('#btn-eliminar');
	x.click(confirmar);
}

function confirmar() {
	var eliminar = confirm('¿Realmente deseas eliminar la imagen?');
	if (!eliminar) {
		return false;
	}
}