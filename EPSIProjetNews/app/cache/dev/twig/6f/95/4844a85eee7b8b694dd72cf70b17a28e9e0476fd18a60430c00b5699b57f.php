<?php

/* base.html.twig */
class __TwigTemplate_6f954844a85eee7b8b694dd72cf70b17a28e9e0476fd18a60430c00b5699b57f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
            'image' => array($this, 'block_image'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <meta charset=\"UTF-8\" />
    <header>

            ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        </header>

    <body>

    ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "

    <div id =\"div1\">
        <center>

        </br>

        ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "            </br> Copyright L'HOSTIS Jean-Pierre 2014
        </div>
        </center>
    </body>
</html>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "               <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/epsinews/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/epsinews/dist/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/epsinews/css/homepage.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/epsinews/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/public/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            ";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "
            <h4>
                <center>
                    <div class=\"alert alert-info\" role=\"alert\">
                        <strong>Vous êtes sur le site de News de l'EPSI </strong>
                    </div>


                </center>
            </h4>
    <center>
            <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
                <div class=\"btn-group\" role=\"\"><a href=\"http://localhost:75/EpsiProjetNews/web/app_dev.php/login\"><button type=\"button\" class=\"btn btn-default\">Login</button></a></div>
                <div class=\"btn-group\" role=\"group\"><a href=\"http://localhost:75/EpsiProjetNews/web/app_dev.php/register\"><button type=\"button\" class=\"btn btn-default\">Créer un compte</button></a></div>
                <div class=\"btn-group\" role=\"group\"><a href=\"http://localhost:75/EpsiProjetNews/web/app_dev.php/logout\"><button type=\"button\" class=\"btn btn-default\">Deconnexion</button></a></div>
        </div>
        ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 37
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <strong>Bienvenue ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ",  nous sommes le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
            echo ".</strong>
            </div>
        ";
        }
        // line 41
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51438ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51438ac_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/51438ac_news_1.jpg");
            // line 42
            echo "        <center> <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></center>
        ";
        } else {
            // asset "51438ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51438ac") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/51438ac.jpg");
            echo "        <center> <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></center>
        ";
        }
        unset($context["asset_url"]);
        // line 44
        echo "        </br>
        <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
            <div class=\"btn-group\" role=\"group\"><a href=\"http://localhost:75/EpsiProjetNews/web/app_dev.php/news/index\"><button type=\"button\" class=\"btn btn-default\">Accueil</button></a></div>
                <div class=\"btn-group\" role=\"group\"><a href=\"http://localhost:75/EpsiProjetNews/web/app_dev.php/news/getnews\"><button type=\"button\" class=\"btn btn-default\">News (read only)</button></a></div>
                    <div class=\"btn-group\" role=\"group\"><a href=\"http://localhost:75/EpsiProjetNews/web/app_dev.php/news/modifynews\"><button type=\"button\" class=\"btn btn-default\">News (update, delete)</button></a></div>
                        <div class=\"btn-group\" role=\"group\"><a href=\"http://localhost:75/EpsiProjetNews/web/app_dev.php/news/insertnews\"><button type=\"button\" class=\"btn btn-default\">News (create only)</button></a></div>
        </div>
    </center>
        ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "        <div id =\"div2\">
            <h1></h1>
            </br>
            ";
        // line 66
        $this->displayBlock('image', $context, $blocks);
        // line 74
        echo "            ";
    }

    // line 66
    public function block_image($context, array $blocks = array())
    {
        // line 67
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bcce7f4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bcce7f4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/bcce7f4_epsi_1.png");
            // line 68
            echo "                <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                ";
        } else {
            // asset "bcce7f4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bcce7f4") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/bcce7f4.png");
            echo "                <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 70
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8a8da5a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a8da5a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/8a8da5a_symfony_1.png");
            // line 71
            echo "                <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                ";
        } else {
            // asset "8a8da5a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a8da5a") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/8a8da5a.png");
            echo "                <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 73
        echo "            ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 73,  215 => 71,  210 => 70,  196 => 68,  191 => 67,  188 => 66,  184 => 74,  182 => 66,  177 => 63,  174 => 62,  169 => 54,  164 => 53,  152 => 44,  138 => 42,  133 => 41,  125 => 38,  122 => 37,  120 => 36,  102 => 20,  99 => 19,  93 => 11,  89 => 10,  85 => 9,  81 => 8,  76 => 7,  73 => 6,  64 => 75,  62 => 62,  53 => 55,  50 => 54,  47 => 53,  45 => 19,  37 => 14,  34 => 13,  32 => 6,  25 => 1,);
    }
}
