<?php

/* RXBundle:pages:caso2.html.twig */
class __TwigTemplate_972d13d82edf7e405c210f1f7763d2b924039829b5ebe3b5fa3ff69b6b191866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RXBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts_page' => array($this, 'block_javascripts_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RXBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<article>
  <div id=\"mapa\">
  </div>
</article>
";
    }

    // line 10
    public function block_javascripts_page($context, array $blocks = array())
    {
        // line 11
        echo "<script>
        var map;

        function inicializa_mapa(datos) {
                console.log(datos);
                // crea mapa
                map = new L.Map('mapa');

                // crea el layer
                var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                var osmAttrib='Map data © OpenStreetMap contributors';
                var osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 18, attribution: osmAttrib});\t\t

                // Comenzamos el mapa en Gijon
                map.setView(new L.LatLng(43.5450394,-5.6626443),13);
                map.addLayer(osm);

                //Insertamos iconos

                var LeafIcon = L.Icon.extend({
                        options: {
                                iconSize:     [15, 35],
                                iconAnchor:   [15, 35],
                                popupAnchor:  [-3, -76]
                        }
                });

                var semaforo_verde = new LeafIcon({iconUrl: '../images/semaforo_verde.jpg'});

                //Procesamos el jason
                \$.each(datos.estaciones.estacion, function() {
                    console.log(this);
                    L.marker([this.latitud,this.longitud], {icon: semaforo_verde}).bindPopup(this.titulo).addTo(map);
                });
        }


        function lee_json() {
                         var inicio,fin=0;
                         var obj_json;

                         var url='http://opendata.gijon.es/descargar.php?id=4&tipo=JSON';

                         //Usamos la libreria jquery.xdomainajax.js 
                         //TODO: Ver otra opcion de poder descargar los ficheros en remoto sin usar la libreria jquery.xdomainajax.js
                         \$.ajax({      
                                            type: 'GET', 
                                            async:false,                                                                                                                                                                                                
                                            url: url,                                                                                                                                           
                                            success: function(json) { 
                                                    //La respuesta viene con html. Dejamos el texto plano y lo parseamos
                                                    inicio=json.responseText.indexOf('<p>')+3;
                                                    fin=json.responseText.indexOf('</p>');
                                                    inicializa_mapa(jQuery.parseJSON(json.responseText.substring(inicio,fin)));
                                                },                                                                                                                                                                                       
                                            error: function() { console.log('Error'); }\t\t\t\t\t\t\t                                                                                                                                
                                        });\t\t\t 
        }

                lee_json();\t\t\t\t

</script>
";
    }

    public function getTemplateName()
    {
        return "RXBundle:pages:caso2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
