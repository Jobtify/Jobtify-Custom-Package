$(document).ready(function(){

});

function buscar($rfc) {
	var search =  $("#inputbusqueda"). val();
	var search = search.split('-');
	var dom = $(location).attr('href');
	var url = dom+"search/"+search;
	location.href = url;
	return false;
};