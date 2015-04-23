<?php

/* ::base.html.twig */
class __TwigTemplate_7af714abe5a5f13e351f8c95f7fc249814594e130900e1fecbf7e810c7720a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'image' => array($this, 'block_image'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
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
            <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            ";
        // line 15
        $this->displayBlock('image', $context, $blocks);
        // line 20
        echo "
            ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        </header>

    <body>
    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "        <br />
        ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "            </div>
    </body>
</html>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "               <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("@EPSINewsBundle/web/bundles/epsinews/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("@EPSINewsBundle/web/bundles/epsinews/dist/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("@EPSINewsBundle/web/bundles/epsinews/css/homepage.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("@EPSINewsBundle/web/bundles/epsinews/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("@EPSINewsBundle/Resources/public/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            ";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo " EPSINews ";
    }

    // line 15
    public function block_image($context, array $blocks = array())
    {
        // line 16
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51438ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51438ac_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/51438ac_news_1.jpg");
            // line 17
            echo "                <center> <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></center>
                ";
        } else {
            // asset "51438ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51438ac") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/51438ac.jpg");
            echo "                <center> <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></center>
                ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "            ";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $this->env->loadTemplate("EPSINewsBundle:TestTwig:Header.html.twig")->display($context);
        echo " ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        echo "<h2>Bienvenue sur notre site expérimental !</h2>
            <h4>
                <center>
                    ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 31
            echo "                        Hi ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                    ";
        }
        // line 33
        echo "                </center>
            </h4>
        <center>
            <button type=\"button\" class=\"btn-default\"><a href=\"http://localhost:8000/app_dev.php/login\">Login</a></button>
            <button type=\"button\" class=\"btn-default\"><a href=\"http://localhost:8000/app_dev.php/register\">Créer un compte</a></button>
            <button type=\"button\" class=\"btn-default\"><a href=\"http://localhost:8000/app_dev.php/logout\">Deconnexion</a></button>
        </center>
        <nav class=\"navbar navbar-default text-center\" role=\"navigation\">
            <button type=\"button\" class=\"btn btn-default navbar-btn\"><a href=\"http://localhost:8000/app_dev.php/news/index\">Page d'accueil</a></button>
            <button type=\"button\" class=\"btn btn-default navbar-btn\"><a href=\"http://localhost:8000/app_dev.php/news/getnews\">Voir les news</a></button>
            <button type=\"button\" class=\"btn btn-default navbar-btn\"><a href=\"http://localhost:8000/app_dev.php/news/modifynews\">Modifier des news</a></button>
            <button type=\"button\" class=\"btn btn-default navbar-btn\"><a href=\"http://localhost:8000/app_dev.php/news/insertnews\">Insérer des news</a></button>
        </nav>
        ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "            <div class=\"center\">
                <hr />
            ";
        // line 52
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eef9d69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eef9d69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/epsi_epsi_1.png");
            // line 53
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" width=\"25%\" height=\"25%\" alt=\"\">
                ";
        } else {
            // asset "eef9d69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eef9d69") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/epsi.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" width=\"25%\" height=\"25%\" alt=\"\">
                ";
        }
        unset($context["asset_url"]);
        // line 55
        echo "                <br />
            Webmaster : ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
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
        return array (  206 => 56,  203 => 55,  189 => 53,  185 => 52,  181 => 50,  178 => 49,  173 => 47,  156 => 33,  150 => 31,  148 => 30,  141 => 27,  134 => 21,  130 => 19,  116 => 17,  111 => 16,  108 => 15,  102 => 14,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  79 => 7,  76 => 6,  69 => 57,  67 => 49,  64 => 48,  61 => 47,  59 => 27,  52 => 23,  49 => 22,  47 => 21,  44 => 20,  42 => 15,  38 => 14,  35 => 13,  33 => 6,  26 => 1,);
    }
}
