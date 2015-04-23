<?php

/* EPSINewsBundle:News:insertNews.html.twig */
class __TwigTemplate_55b280dad6d7f47b4d37648c35b27413d52dfa008a4d59c3c93321905a2db775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"alert alert-danger\" role=\"alert\">
        <strong>Page actuelle : Insérer des News</strong>
    </div>
    </br>
    ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 9
            echo "        <div class=\"text-center\">
            <button type=\"button\" class=\"btn btn-default\"><a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("epsi_news_insertcategorie");
            echo "\">Ajouter une Catégorie</a></button>

            </br>
            <form action=\"\" method=\"post\">
                <input hidden value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "\" id=\"id_user\" name=\"id_user\">
                ";
            // line 15
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
                <span><i>(*): Si vous voulez ajouter plusieurs tags, séparez les par des \"/\"</i></span>
            </form>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"text-center\">
            <h2>Vous devez être connecté pour pouvoir créer une news</h2>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:News:insertNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  61 => 15,  57 => 14,  50 => 10,  47 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
