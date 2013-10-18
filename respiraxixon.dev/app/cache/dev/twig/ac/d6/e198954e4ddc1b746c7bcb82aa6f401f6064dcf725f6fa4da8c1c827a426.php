<?php

/* RXBundle:pages:index.html.twig */
class __TwigTemplate_acd6e198954e4ddc1b746c7bcb82aa6f401f6064dcf725f6fa4da8c1c827a426 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/pages/caso5.js"), "html", null, true);
        echo "\"></script>
<script>
    cargaDatos(tipoCarga,fichero_calidadaire);
</script>
";
    }

    public function getTemplateName()
    {
        return "RXBundle:pages:index.html.twig";
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
