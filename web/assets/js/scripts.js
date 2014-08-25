function centrarVert(elemento){
	altura1=elemento.parent().height();
	altura2=elemento.height();
	elemento.css("margin-top",(altura1/2)-(altura2/2)+"px");
}
function centrarVertPad(elemento){
	altura1=elemento.parent().height();
	altura2=elemento.height();
	elemento.css("padding-top",(altura1/2)-(altura2/2)+"px");
}
function centrarHor(elemento){
	ancho1=elemento.parent().width();
	ancho2=elemento.width();
	elemento.css("margin-left",(ancho1/2)-(ancho2/2)+"px");
}
function enviarAlFondo(elemento){
	altura1=elemento.parent().height();
	altura2=elemento.height();
	elemento.css("margin-top",(altura1)-(altura2)+"px");
}
function enviarAlFondoPad(elemento){
	altura1=elemento.parent().height();
	altura2=elemento.height();
	elemento.css("padding-top",(altura1)-(altura2)+"px");
}
$(window).load(function () {
	// body...
		$('.contenedor-centrar').each(function () {
		centrarVert($(this));
	});
	$('.contenedor-centrarPad').each(function () {
		centrarVertPad($(this));
	});
	$('.contenedor-ancho').each(function () {
		centrarHor($(this));
	});
	$('.contenedor-fondo').each(function () {
		enviarAlFondo($(this));
	});
	$('.contenedor-fondoPad').each(function () {
		enviarAlFondoPad($(this));
	});
});