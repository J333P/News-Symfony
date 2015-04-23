<?php

/* EPSINewsBundle:Default:LayoutNews.html.twig */
class __TwigTemplate_dd52aaead8e3866fd3d8ff1ec43820de3451a6cdd527d0a6920d29effac81ba7 extends Twig_Template
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
        echo "<div class=\"alert alert-danger\" role=\"alert\">
    <strong>Page actuelle : Accueil</strong>
</div>

";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8169bbc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8169bbc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/8169bbc_newspaper_1.jpg");
            // line 6
            echo "<center> <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></center>
";
        } else {
            // asset "8169bbc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8169bbc") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/8169bbc.jpg");
            echo "<center> <img src =\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/></center>
";
        }
        unset($context["asset_url"]);
        // line 8
        echo "

<hr />
<hr />
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:Default:LayoutNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
