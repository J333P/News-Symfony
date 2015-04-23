<?php

/* EPSINewsBundle:TestsTwig:index.html.twig */
class __TwigTemplate_1408b37aacb25314f4ded1be7ce6cf834a6039dee102faa68c2988cd72445f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["directrice"] = "Sylvie Malezieux";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9c89d2b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9c89d2b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9c89d2b_style_1.css");
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "9c89d2b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9c89d2b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9c89d2b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Tests Twig";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <h2>Mes tests Twig</h2>

    <div class=\"news\">
        <p>
            Bonjour Pierre Welmant, nous sommes le ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
            <br />
        </p>
        <p>
            La directrice de l'EPSI Montpellier est ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["directrice"]) ? $context["directrice"] : $this->getContext($context, "directrice")), "html", null, true);
        echo "
            <br />
        </p>
        <p>
            Nos professeurs sont : ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profs"]) ? $context["profs"] : $this->getContext($context, "profs")));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            <br />
        </p>
        <p>
            Et votre professeur de Symfony est : ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profs"]) ? $context["profs"] : $this->getContext($context, "profs")));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            echo " ";
            if (($context["index"] == (isset($context["profSymfony"]) ? $context["profSymfony"] : $this->getContext($context, "profSymfony")))) {
                echo " ";
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            <br />
        </p>
    </div>
";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        $this->env->loadTemplate("EPSINewsBundle:Default:FooterImage.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:TestsTwig:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  133 => 34,  126 => 30,  111 => 29,  106 => 26,  95 => 25,  88 => 21,  81 => 17,  75 => 13,  72 => 12,  66 => 10,  50 => 7,  45 => 4,  42 => 3,  38 => 2,  36 => 1,  11 => 2,);
    }
}
