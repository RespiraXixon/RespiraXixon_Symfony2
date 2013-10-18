<?php

/* RXBundle::layout.html.twig */
class __TwigTemplate_9d1f6c182df9bacbc35916a2e4c589974e6d203c098be450bb93f8f6daae7416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_navigation($context, array $blocks = array())
    {
        // line 5
        echo "     <nav id=\"nav\">
                            <li class=\"current\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("rx_caso1");
        echo "\">Inicio</a></li>
                                <li>
                                    <a href=\"#\">Estaciones</a>
                                        <ul> 
                                            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("rx_caso1");
        echo "\">Caso 1 - Pintar mapa</a></li>
                                            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("rx_caso2");
        echo "\">Caso 2 - Mapa con localización de estaciones</a></li>
                                            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("rx_caso3");
        echo "\">Caso 3 - Mapa de estaciones con todos sus datos</a></li>
                                        </ul>
                                </li>
                                <li>
                                    <a href=\"#\">Contaminantes</a>
                                        <ul>
                                            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("rx_caso4");
        echo "\">Caso 4 - Mapa de datos de contaminación</a></li>
                                            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("rx_caso5");
        echo "\">Caso 5 - Mapa de datos de contaminación (Diagrama de Barras)</a></li>
                                        </ul>
                                </li>
                                <li>
                                     <a href=\"#\">Herramientas Usadas</a>
                                        <ul>
                                            <li><a href=\"http://openstreetmaps.org\">OpenStreetMaps</a></li>
                                            <li><a href=\"http://leafletjs.com/\">Leaflet</a></li>
                                            <li><a href=\"http://humangeo.github.io/leaflet-dvf/\">Leaflet-DVF</a></li>
                                        </ul>
                                </li>
     </nav>
";
    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        // line 34
        echo "    Sidebar
";
    }

    public function getTemplateName()
    {
        return "RXBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  80 => 33,  63 => 19,  59 => 18,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  32 => 5,  29 => 4,);
    }
}
