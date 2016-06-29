var x = $(document);
x.ready(inicializar);

function inicializar() {
	var x = $('#btn-eliminar');
	x.click(confirmar);
}

function confirmar() {
	var eliminar = confirm('Realmente deseas eliminar este item?');
	if (!eliminar) {
		return false;
	}
}