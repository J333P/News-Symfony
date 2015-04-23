<?php

/* EPSINewsBundle:Categorie:insertCategorie.html.twig */
class __TwigTemplate_20c8dcb2fd0eab00c84a6605270b9da744b69c2406595ab697ef215018c5f353 extends Twig_Template
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
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 5
            echo "        <div class=\"text-center\">
            <form action=\"\" method=\"post\">
                ";
            // line 7
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
            </form>
        </div>
    ";
        } else {
            // line 11
            echo "        <div class=\"text-center\">
            <h2>Vous devez être connecté pour pouvoir créer une catégorie</h2>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:Categorie:insertCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  46 => 7,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
