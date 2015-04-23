<?php

/* EPSINewsBundle:News:getNews.html.twig */
class __TwigTemplate_f9c1a719fa8ef54ae7a5714d80f7c39c2d75cbaa60589cfd064c6fdc29df25af extends Twig_Template
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
        <strong>Page actuelle : Voir les News</strong>
    </div>
    </br>
        <style>
    p {width: 90%;}
    </style>
    <center>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newstab"]) ? $context["newstab"] : $this->getContext($context, "newstab")));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 13
            echo "        <div>
            <p class=\"bg-info\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("epsi_news_getnews_detail", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "titre", array()), "html", null, true);
            echo "</a>
            </p>
            <p class=\"bg-warning\">
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "contenu", array()), "html", null, true);
            echo "
            </p>
        </div>
    </br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </center>
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:News:getNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  65 => 18,  57 => 15,  53 => 13,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
