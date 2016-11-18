<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0188b57dce673c67d60f6c09d46c2b9f6dbbafbc8ba78226f80354fce2e6994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63cf3565d2edd0f67680cd339e2fc46955fc870b8e043970cc1e7ae6dc4e0a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cf3565d2edd0f67680cd339e2fc46955fc870b8e043970cc1e7ae6dc4e0a9d->enter($__internal_63cf3565d2edd0f67680cd339e2fc46955fc870b8e043970cc1e7ae6dc4e0a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63cf3565d2edd0f67680cd339e2fc46955fc870b8e043970cc1e7ae6dc4e0a9d->leave($__internal_63cf3565d2edd0f67680cd339e2fc46955fc870b8e043970cc1e7ae6dc4e0a9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12a8d8c8c84bd1b367225e2a9e856fafe925568274ea6976fb5eea944448a399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a8d8c8c84bd1b367225e2a9e856fafe925568274ea6976fb5eea944448a399->enter($__internal_12a8d8c8c84bd1b367225e2a9e856fafe925568274ea6976fb5eea944448a399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_12a8d8c8c84bd1b367225e2a9e856fafe925568274ea6976fb5eea944448a399->leave($__internal_12a8d8c8c84bd1b367225e2a9e856fafe925568274ea6976fb5eea944448a399_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6c007d29765ae23e03b30f8848567fe4c45b7de0bad5442ae72accc48152eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c007d29765ae23e03b30f8848567fe4c45b7de0bad5442ae72accc48152eb5->enter($__internal_a6c007d29765ae23e03b30f8848567fe4c45b7de0bad5442ae72accc48152eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a6c007d29765ae23e03b30f8848567fe4c45b7de0bad5442ae72accc48152eb5->leave($__internal_a6c007d29765ae23e03b30f8848567fe4c45b7de0bad5442ae72accc48152eb5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8e44fcbc987ca18821a7ce4935cd0e94037d408b71969654d4a06281e33dab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e44fcbc987ca18821a7ce4935cd0e94037d408b71969654d4a06281e33dab8->enter($__internal_e8e44fcbc987ca18821a7ce4935cd0e94037d408b71969654d4a06281e33dab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8e44fcbc987ca18821a7ce4935cd0e94037d408b71969654d4a06281e33dab8->leave($__internal_e8e44fcbc987ca18821a7ce4935cd0e94037d408b71969654d4a06281e33dab8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\Gfct2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
