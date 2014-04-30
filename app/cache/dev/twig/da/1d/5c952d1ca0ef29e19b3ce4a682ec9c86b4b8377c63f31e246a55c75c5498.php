<?php

/* ::principal_layout.html.twig */
class __TwigTemplate_da1d5c952d1ca0ef29e19b3ce4a682ec9c86b4b8377c63f31e246a55c75c5498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>

    <header>
        <div class=\"logo\"></div>  
    </header>
    <nav class=\"navbar\" role=\"banner\">
        
        <div class=\"search_form\">
            <form method=\"POST\">
                <input class=\"input-search-query\" type=\"text\" placeholder=\"Recherche...\">
            </form>
        </div>
        <div class=\"menu\">
            <table>
                <tr>
                    <td><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("vieille_sardine_catalogue_homepage");
        echo "\">Catalogue</a></td>
                    <td><a href=\"\">Commande rapide</a></td>
                    <td>
                        ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "                            <span style=\"color: white\">Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " </span> 
                            <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Afficher compte</a>
                            <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Modifier compte</a>
                            <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                        ";
        } else {
            // line 33
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                        ";
        }
        // line 35
        echo "                    </td>
                    <td><a href=\"\">Mon panier</a></td>
                </tr>
            </table>
        </div>
    </nav>

    <div style=\"min-height:700px; border:solid\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    </div>
    
    <footer>
        <div>
            <h1>A REMPLACER PAR LA BANIERE FOOTER DU SITE</h1>
        </div>
    </footer>

    ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "
        ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "        ";
        // line 57
        echo "        <script
        src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 60
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::principal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 60,  145 => 59,  141 => 57,  139 => 55,  136 => 54,  131 => 44,  128 => 43,  121 => 7,  118 => 6,  112 => 5,  108 => 62,  106 => 54,  96 => 46,  94 => 43,  84 => 35,  78 => 33,  73 => 31,  69 => 30,  65 => 29,  60 => 28,  58 => 27,  52 => 24,  35 => 9,  33 => 6,  29 => 5,  23 => 1,  31 => 4,  28 => 3,);
    }
}
