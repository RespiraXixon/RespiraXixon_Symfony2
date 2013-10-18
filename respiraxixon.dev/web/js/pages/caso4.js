var map;
var lastLayer;
var legendControl;

function inicializa_mapa(datos) {
	
	// crea mapa
	map = new L.Map('mapa');

	// crea el layer
	var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
	var osmAttrib='Map data � OpenStreetMap contributors';
	var osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 18, attribution: osmAttrib});		

	// Comenzamos el mapa en Gijon
	map.setView(new L.LatLng(43.5450394,-5.6626443),13);
	map.addLayer(osm);
	
	// A�adimos la capa de mapa

		
	var layerControl = new L.Control.Layers({
		'Capa original': osm 
	});
	
	//Creamos una funcion para a�adir grupos de capas de datos al mapa

	var createLayerGroup = function (name) {
		var layerGroup = new L.LayerGroup();
		map.addLayer(layerGroup);
		layerControl.addOverlay(layerGroup, name);
		return layerGroup;
	};

	//TODO:Poner los datos a continuaci�n del display Name
	// Crear una nueva capa
	
	var dataLayer1 = new L.DataLayer(datos,{
		recordsField: 'calidadairemediatemporales.calidadairemediatemporal',
		latitudeField: 'latitud',
		longitudeField: 'longitud',
		locationMode: L.LocationModes.LATLNG,
		displayOptions: {
			'titulo': {
				displayName: 'Estaci&oacute;n: '
			},
			'co': {
				displayName: 'CO: '
			},
			'so2': {
				displayName: 'S02: '
			},
			'o3': {
				displayName: 'Ozono: '
			},
			'fechasolar_utc_': {
				displayName: 'Fecha:',
				displayText: function (value) {
					return new Date(value).toLocaleString(); 
				}
			}
		},
		layerOptions: {
			numberOfSides: 4,
			radius: 10,
			weight: 1,
			color: '#000',
			opacity: 0.2,
			fillOpacity: 0.7,
			dropShadow: true
		},
		tooltipOptions: {
			iconSize: new L.Point(200,210),
			iconAnchor: new L.Point(-4,210)
		},
		onEachRecord: function (layer,record) {
			var $html = L.HTMLUtils.buildTable(record);
			
			layer.bindPopup($html.wrap('<div/>').parent().html(),{
				minWidth: 400,
				maxWidth: 400
			});
		}
	});
	
	var contaminantesLayer1 = createLayerGroup('Emisiones 1');
	
	contaminantesLayer1.addLayer(dataLayer1);
	
	//TODO:Poner los datos a continuaci�n del display Name
	// Crear una nueva capa
	var dataLayer2 = new L.DataLayer(datos,{
		recordsField: 'calidadairemediatemporales.calidadairemediatemporal',
		latitudeField: 'latitud',
		longitudeField: 'longitud',
		locationMode: L.LocationModes.LATLNG,
		displayOptions: {
			'titulo': {
				displayName: 'Estaci&oacute;n: '
			},
			'no': {
				displayName: 'NO: '
			},
			'ben': {
				displayName: 'Benceno: '
			},
			'fechasolar_utc_': {
				displayName: 'Fecha:',
				displayText: function (value) {
					return new Date(value).toLocaleString(); 
				}
			}
		},
		filter: function (record) {
			return record.fechasolar_utc_.valueOf()=="2013-10-16T09:00:00";
		},

		layerOptions: {
			numberOfSides: 4,
			radius: 10,
			weight: 1,
			color: '#000',
			opacity: 0.2,
			fillOpacity: 0.7,
			dropShadow: true
		},
		tooltipOptions: {
			iconSize: new L.Point(200,210),
			iconAnchor: new L.Point(-4,210)
		},
		onEachRecord: function (layer,record) {
			var $html = L.HTMLUtils.buildTable(record);
			
			layer.bindPopup($html.wrap('<div/>').parent().html(),{
				minWidth: 400,
				maxWidth: 400
			});
		}
	});
	var contaminantesLayer2 = createLayerGroup('Emisiones 2');
	
	contaminantesLayer2.addLayer(dataLayer2);
	
	// Inicializamos la leyenda y la a�adimos al mapa
	
	var legendControl = new L.Control.Legend();
	
	legendControl.addTo(map);
	
	layerControl.addTo(map);
}