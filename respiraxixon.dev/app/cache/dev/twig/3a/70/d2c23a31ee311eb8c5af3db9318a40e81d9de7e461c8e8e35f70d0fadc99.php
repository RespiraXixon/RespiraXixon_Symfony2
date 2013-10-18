<?php

/* ::base.html.twig */
class __TwigTemplate_3a70d2c23a31ee311eb8c5af3db9318a40e81d9de7e461c8e8e35f70d0fadc99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_page' => array($this, 'block_javascripts_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>RespiraXixon</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"containerWrap\">
            <div class=\"header\">
                <div class=\"logo\">
                    <h1>RespiraXixon</h1>
                </div>
                    ";
        // line 36
        $this->displayBlock('navigation', $context, $blocks);
        // line 39
        echo "                <div class=\"content\" id=\"wrapper\">
                    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "                </div>
            </div>
        
            <footer>
               <div class=\"top\"> 
               <!--end footer -->
               </div>
                <div class=\"footerWrapper\" id=\"footercontent\">
                  <li><a href=\"#\">Inicio</a></li> 
                   <li><a href=\"#\">Uno</a></li> 
                   <li><a href=\"#\">Dos</a></li> 
                   <li><a href=\"#\">Tres</a></li> 
                   <li><a href=\"http://respiraxixon.com\" target=\"_blank\">RespiraXixon</li>
               </div> 
           </footer> 
    </div>        
    ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "    ";
        $this->displayBlock('javascripts_page', $context, $blocks);
        // line 76
        echo "    </body>
</html>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <style type=\"text/css\">
                <!--
                body {
                        margin-top: 0px;
                        background-image: url(";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bg_repeat.png"), "html", null, true);
        echo ");
                        background-repeat: repeat-x;
                        background-position: top;
                        background-color: #E7E7E7;
                }
                -->
            </style>
            <!-- Cargamos la hoja de estilo de la página -->
            <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\" />
            <!-- Incluimos Leaflet -->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/leaflet.css"), "html", null, true);
        echo "\" />
            <!-- Cargamos la hoja de estilo del tema -->
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/xom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 36
    public function block_navigation($context, array $blocks = array())
    {
        // line 37
        echo "                       
                    ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "                    ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "                <script  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
                
 \t\t<script  src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.formatDateTime.js"), "html", null, true);
        echo "\"></script>
                
 \t\t<script  src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.xdomainajax.js"), "html", null, true);
        echo "\"></script>
                
 \t\t<script  src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/leaflet.js"), "html", null, true);
        echo "\"></script>
                
 \t\t<script  src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/leaflet-dvf.js"), "html", null, true);
        echo "\"></script>
                
                <script  src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/leaflet.GeometryUtil.js"), "html", null, true);
        echo "\"></script>
 \t\t
                <script  src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/RXUtils.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 73
    public function block_javascripts_page($context, array $blocks = array())
    {
        // line 74
        echo "                
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 74,  175 => 73,  169 => 71,  164 => 69,  159 => 67,  154 => 65,  149 => 63,  144 => 61,  138 => 59,  135 => 58,  131 => 41,  128 => 40,  123 => 37,  120 => 36,  114 => 26,  109 => 24,  104 => 22,  93 => 14,  87 => 10,  84 => 9,  78 => 76,  75 => 73,  73 => 58,  55 => 42,  53 => 40,  50 => 39,  48 => 36,  36 => 28,  34 => 9,  24 => 1,  43 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
