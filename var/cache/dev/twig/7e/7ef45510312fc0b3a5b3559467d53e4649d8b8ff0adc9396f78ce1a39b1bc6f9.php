<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_da76e4253a7ec72619aa5acc6924896bb29200fcd9d3ab38ac3120d9f65ff5a2 extends Twig_Template
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
        $__internal_55f6a96511d5f11bba57e9c8e9c2e66ba9f663608eb8679bf9881f873cb5031e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f6a96511d5f11bba57e9c8e9c2e66ba9f663608eb8679bf9881f873cb5031e->enter($__internal_55f6a96511d5f11bba57e9c8e9c2e66ba9f663608eb8679bf9881f873cb5031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55f6a96511d5f11bba57e9c8e9c2e66ba9f663608eb8679bf9881f873cb5031e->leave($__internal_55f6a96511d5f11bba57e9c8e9c2e66ba9f663608eb8679bf9881f873cb5031e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d9742d106d30b6b253efb111a374445ffed833872c420178d579dc6c9946b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9742d106d30b6b253efb111a374445ffed833872c420178d579dc6c9946b8d->enter($__internal_8d9742d106d30b6b253efb111a374445ffed833872c420178d579dc6c9946b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_8d9742d106d30b6b253efb111a374445ffed833872c420178d579dc6c9946b8d->leave($__internal_8d9742d106d30b6b253efb111a374445ffed833872c420178d579dc6c9946b8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b6c85741b496fc77d257638cd76e8bc749bae195feac8f72c9372de3e75be3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6c85741b496fc77d257638cd76e8bc749bae195feac8f72c9372de3e75be3b->enter($__internal_0b6c85741b496fc77d257638cd76e8bc749bae195feac8f72c9372de3e75be3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b6c85741b496fc77d257638cd76e8bc749bae195feac8f72c9372de3e75be3b->leave($__internal_0b6c85741b496fc77d257638cd76e8bc749bae195feac8f72c9372de3e75be3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f111e6d559732b659cd1869b79e62b956775577c984c3989f0eccd666002d6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f111e6d559732b659cd1869b79e62b956775577c984c3989f0eccd666002d6ca->enter($__internal_f111e6d559732b659cd1869b79e62b956775577c984c3989f0eccd666002d6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f111e6d559732b659cd1869b79e62b956775577c984c3989f0eccd666002d6ca->leave($__internal_f111e6d559732b659cd1869b79e62b956775577c984c3989f0eccd666002d6ca_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
