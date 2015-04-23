<?php

/* EPSINewsBundle:Other:index.html.twig */
class __TwigTemplate_11acfee8404f82ce0dcfe8b4561d6138ed845232df0f552d85661bc93b937279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Salut, ceci est la deuxième vue avec une autre route ! Je parie que tu t'appelles ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " !";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:Other:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
