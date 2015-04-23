<?php

/* EPSINewsBundle:News:detailNews.html.twig */
class __TwigTemplate_997db30e9bacc3a289470a8419301f7726366cefb485f314a5b465528fc78436 extends Twig_Template
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
        echo "    <div class=\"alert alert-danger\" role=\"alert\">
        <strong>Page actuelle : Détail des News</strong>
    </div>
    </br>
    <style>
    p {width: 50%;}
    </style>
    <div>
        <center>
    <p class=\"bg-primary\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "titre", array()), "html", null, true);
        echo "
    </p>
     <p class=\"bg-info\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "contenu", array()), "html", null, true);
        echo "
               </p>
     <p class=\"bg-success\">
          Edité le  ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "date", array()), "html", null, true);
        echo "
       par ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "user", array()), "username", array()), "html", null, true);
        echo "
         Dans ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "categorie", array()), "nomCategorie", array()), "html", null, true);
        echo "

</br>
                 Tags: ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "intitule", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
        </center>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:News:detailNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  77 => 25,  71 => 22,  67 => 21,  63 => 20,  57 => 17,  51 => 14,  39 => 4,  36 => 3,  11 => 1,);
    }
}
