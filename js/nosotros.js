$(document).on("ready",inicio_nosotroscrp);
function inicio_nosotroscrp () {
	$(".bthdos").on("click",abrircjajg);
}
function abrircjajg () {
	var nuc=$(this).attr("data-nm");
	console.log(nuc);
	$("#cj"+nuc).slideToggle();
}