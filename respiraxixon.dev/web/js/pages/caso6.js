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
	
	// Añadimos la capa de mapa 
        // Inicializamos la leyenda y la añadimos al mapa
	var layerControl = new L.Control.Layers({
		'Capa original': osm 
	}).addTo(map);
	
	//Creamos una funcion para añadir grupos de capas de datos al mapa
	var createLayerGroup = function (name) {
		var layerGroup = new L.LayerGroup();
		
		map.addLayer(layerGroup);
		layerControl.addOverlay(layerGroup, name);
		
		return layerGroup;
	};
		
	//Añadimos colores
	
	//SO2
	/*Niveles correctos para SO2
	var so2_verdeclaro_azul = new L.HSLHueFunction(new L.Point(0,120), new L.Point(63,205));
	var so2_azul_amarillo = new L.HSLHueFunction(new L.Point(64,205), new L.Point(125,60));
	var so2_amarillo_rojo = new L.HSLHueFunction(new L.Point(126,60), new L.Point(188,0));
	var so2_color =  new L.PiecewiseFunction([so2_verdeclaro_azul,so2_azul_amarillo,so2_amarillo_rojo]);
	*/
	
	//TODO: Niveles de color para demo de ejemplo. Poner niveles reales. 
	var co_verdeclaro_azul = new L.HSLHueFunction(new L.Point(0,120), new L.Point(0.5,205));
	var co_azul_amarillo = new L.HSLHueFunction(new L.Point(0.5,205), new L.Point(1,60));
	var co_amarillo_rojo = new L.HSLHueFunction(new L.Point(1,60), new L.Point(3,0));
	var co_color =  new L.PiecewiseFunction([co_verdeclaro_azul,co_azul_amarillo,co_amarillo_rojo]);
	
	var so2_verdeclaro_azul = new L.HSLHueFunction(new L.Point(0,120), new L.Point(6,205));
	var so2_azul_amarillo = new L.HSLHueFunction(new L.Point(6,205), new L.Point(8,60));
	var so2_amarillo_rojo = new L.HSLHueFunction(new L.Point(8,60), new L.Point(10,0));
	var so2_color =  new L.PiecewiseFunction([so2_verdeclaro_azul,so2_azul_amarillo,so2_amarillo_rojo]);

	var o3_verdeclaro_azul = new L.HSLHueFunction(new L.Point(0,120), new L.Point(3,205));
	var o3_azul_amarillo = new L.HSLHueFunction(new L.Point(3,205), new L.Point(6,60));
	var o3_amarillo_rojo = new L.HSLHueFunction(new L.Point(6,60), new L.Point(20,0));
	var o3_color =  new L.PiecewiseFunction([o3_verdeclaro_azul,o3_azul_amarillo,o3_amarillo_rojo]);
	
		
	var no_verdeclaro_azul = new L.HSLHueFunction(new L.Point(0,120), new L.Point(40,205));
	var no_azul_amarillo = new L.HSLHueFunction(new L.Point(40,205), new L.Point(90,60));
	var no_amarillo_rojo = new L.HSLHueFunction(new L.Point(90,60), new L.Point(107,0));
	var no_color =  new L.PiecewiseFunction([no_verdeclaro_azul,no_azul_amarillo,no_amarillo_rojo]);
	
	var radiusFunction = new L.LinearFunction(new L.Point(0,0), new L.Point(100,110));


	var options = {
		recordsField: 'calidadairemediatemporales.calidadairemediatemporal',
		latitudeField: 'latitud',
		longitudeField: 'longitud',
		locationMode: L.LocationModes.LATLNG,
		chartOptions: {
			'co': {
                            minValue: 0,
                            maxValue: 15,
                            minHeight: 4,
                            maxHeight: 200,
                            displayName: 'Concentraci&oacute;n CO'
			},
			'so2': {
                            minValue: 0,
                            maxValue: 188,
                            minHeight: 4,
                            maxHeight: 200,
                            displayName: 'Concentraci&oacute;n SO2'
                        },
                        'o3': {
                            minValue: 0,
                            maxValue: 180,
                            minHeight: 4,
                            maxHeight: 200,
                            displayName: 'Concentraci&oacute;n de Ozono'
			},			
			'no': {
                            minValue: 0,
                            maxValue: 300,
                            minHeight: 4,
                            maxHeight: 200,
                            displayName: 'Concentraci&oacute;n NO',
                            fillColor: no_color,
                            radius: radiusFunction
			}
		},		
		filter: function (record) {
			return record.fechasolar_utc_.valueOf()=="2013-10-16T09:00:00";
		},
		layerOptions: {
			fillOpacity: 0.5,
			opacity: 1,			
                        weight: 1,
                        width: 8,
                        dropShadow: true,
                        lineCap: 'square',
                        lineJoin: 'miter'		
                },
                displayOptions: {
			'co': {
				fillColor: co_color,
                                displayName: 'Concentraci&oacute;n CO'
                                
			},
			'so2': {
				fillColor: so2_color,
                                displayName: 'Concentraci&oacute;n SO2'
                        },
			'o3': {  
				fillColor: o3_color,
				displayName: 'Concentraci&oacute;n de Ozono'
			},			

                        'no': {
				fillColor: no_color,
				displayName: 'Concentraci&oacute;n NO',
                                radius: radiusFunction
			}
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
	};
	
		var colorLayer = new L.BarChartDataLayer(datos,options);
	
		layerControl.addOverlay(colorLayer, 'Contaminantes');
                
                // Inicializamos la leyenda y la a�adimos al mapa
                var legendControl = new L.Control.Legend();
	
                legendControl.addTo(map);

		
		map.addLayer(colorLayer);
}
