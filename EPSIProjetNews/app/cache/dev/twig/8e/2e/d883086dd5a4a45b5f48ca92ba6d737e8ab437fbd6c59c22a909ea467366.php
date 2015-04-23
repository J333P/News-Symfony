<?php

/* EPSINewsBundle:TestsTwig:FooterImage.html.twig */
class __TwigTemplate_8e2ed883086dd5a4a45b5f48ca92ba6d737e8ab437fbd6c59c22a909ea467366 extends Twig_Template
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
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
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

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    
";
    }

    // line 5
    public function block_footer($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"center\">
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eef9d69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eef9d69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/epsi_epsi_1.png");
            // line 8
            echo "<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" width=\"25%\" height=\"25%\" alt=\"\">
";
        } else {
            // asset "eef9d69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eef9d69") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/epsi.png");
            echo "<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" width=\"25%\" height=\"25%\" alt=\"\">
";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    <br />
    ";
        // line 11
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:TestsTwig:FooterImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  69 => 10,  55 => 8,  51 => 7,  48 => 6,  45 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
