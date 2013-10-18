<?php

/* RXBundle:Pages:caso5.html.twig */
class __TwigTemplate_059938a6bea2c874292a3b5774a78483435f69170d84c6482a2de9d0aae2f1aa extends Twig_Template
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
        echo "<script  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/caso5.js"), "html", null, true);
        echo "\"></script>
<script>
    cargaDatos(tipoCarga,fichero_calidadaire);
</script>
";
    }

    public function getTemplateName()
    {
        return "RXBundle:Pages:caso5.html.twig";
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
