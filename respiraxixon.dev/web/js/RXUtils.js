/**
 * RXUtils v1.0
 * 
 * Script de utilidades necesarias en aplicaci�n REspira Xixon 
 */
//tipoCarga hace que el tipo de carga de datos Json se realice desde servidor(1) o desde fichero(2)
var tipoCarga=2;

var url_calidadaire='http://opendata.gijon.es/descargar.php?id=1&tipo=JSON';
var url_estaciones='http://opendata.gijon.es/descargar.php?id=4&tipo=JSON';
var fichero_estaciones='../js/datos/estaciones.json';
var fichero_calidadaire='../js/datos/calidadaire.json';
function lee_json(url) {
	 var inicio,fin=0;
	 
	 //Usamos la libreria jquery.xdomainajax.js
	 json=$.ajax({      
			    type: 'GET',                                                                                                                                                                                               
			    url: url,    
			    success: function(json) {
				    //La respuesta viene con html. Dejamos el texto plano y lo parseamos
				    inicio=json.responseText.indexOf('<p>')+3;
				    fin=json.responseText.indexOf('</p>');
				    inicializa_mapa(jQuery.parseJSON(json.responseText.substring(inicio,fin)));
				    return json;
				},                                                                                                                                                                                       
			    error: function() { console.log('Error'); }							                                                                                                                                
			});	
	 return json;
}

function lee_fichero_json(url){
	json=$.getJSON(url,function(datos){
		inicializa_mapa(datos);
	});
	return json;
}

function cargaDatos(tipoCarga,url) {
	if (tipoCarga==1){
		datos=lee_json(url);
	}else{
		datos=lee_fichero_json(url);
	}
	return datos;
}

function distancia_estacion(map,layer,latlng){
                var latLngs=[];
                var i=0;
                for (var key in layer._layers) {
                    latLngs[i]=layer._layers[key]._latlng;
                    i++;
                }
                return(L.GeometryUtil.closest(map,latLngs,latlng));
}

