<?php

/* RXBundle:pages:caso1.html.twig */
class __TwigTemplate_ca4279368120777798dde15b880d5a9c066dba81317f5778d567858bde671925 extends Twig_Template
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
\t\t
        var map;
        var ajaxRequest;
        var plotlist;
        var plotlayers=[];

        function inicializa_mapa() {
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

                var semaforo_verde = new LeafIcon({iconUrl: '../images/semaforo_verde.jpg'}),
                        semaforo_ambar = new LeafIcon({iconUrl: '../images/semaforo_rojo.jpg'}),
                        semaforo_rojo = new LeafIcon({iconUrl: '../images/semaforo_ambar.jpg'});

                L.marker([43.5355709,-5.6470224], {icon: semaforo_verde}).bindPopup(\"Avenida de la Costa\").addTo(map);
                L.marker([43.5352659,-5.6436193], {icon: semaforo_ambar}).bindPopup(\"El Bibio\").addTo(map);
                L.marker([43.5603303,-5.7053427], {icon: semaforo_rojo}).bindPopup(\"El Musel\").addTo(map);


        }
        inicializa_mapa();
</script>
";
    }

    public function getTemplateName()
    {
        return "RXBundle:pages:caso1.html.twig";
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
