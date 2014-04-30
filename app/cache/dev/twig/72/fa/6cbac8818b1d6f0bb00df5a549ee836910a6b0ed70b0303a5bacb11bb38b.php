<?php

/* VieilleSardineCatalogueBundle:Catalogue:index.html.twig */
class __TwigTemplate_72fa6cbac8818b1d6f0bb00df5a549ee836910a6b0ed70b0303a5bacb11bb38b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::principal_layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::principal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "   <h1>Notre page d'accueil qui va contenir le catalogue</h1>
";
    }

    public function getTemplateName()
    {
        return "VieilleSardineCatalogueBundle:Catalogue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
