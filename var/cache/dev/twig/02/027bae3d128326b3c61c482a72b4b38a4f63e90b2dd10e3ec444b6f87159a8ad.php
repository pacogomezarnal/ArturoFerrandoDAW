<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11639d286d9d8bb8cf2569f7057e4a77959af8e954d25c339483c2572db0c9c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b35a6d3fc61bd8fc9cf173b302daec6be0bffdcbd2a1d2c71ca063a5e9a489d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b35a6d3fc61bd8fc9cf173b302daec6be0bffdcbd2a1d2c71ca063a5e9a489d->enter($__internal_5b35a6d3fc61bd8fc9cf173b302daec6be0bffdcbd2a1d2c71ca063a5e9a489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b35a6d3fc61bd8fc9cf173b302daec6be0bffdcbd2a1d2c71ca063a5e9a489d->leave($__internal_5b35a6d3fc61bd8fc9cf173b302daec6be0bffdcbd2a1d2c71ca063a5e9a489d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d32ef0f13819b014e9520573b81e29d2d4d286dedc0e2dd947b47a81403d148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d32ef0f13819b014e9520573b81e29d2d4d286dedc0e2dd947b47a81403d148->enter($__internal_1d32ef0f13819b014e9520573b81e29d2d4d286dedc0e2dd947b47a81403d148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1d32ef0f13819b014e9520573b81e29d2d4d286dedc0e2dd947b47a81403d148->leave($__internal_1d32ef0f13819b014e9520573b81e29d2d4d286dedc0e2dd947b47a81403d148_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_654d7e3f80a6587dc923adf9c002cd2b885b86a2573afed415268caed961c15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654d7e3f80a6587dc923adf9c002cd2b885b86a2573afed415268caed961c15c->enter($__internal_654d7e3f80a6587dc923adf9c002cd2b885b86a2573afed415268caed961c15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_654d7e3f80a6587dc923adf9c002cd2b885b86a2573afed415268caed961c15c->leave($__internal_654d7e3f80a6587dc923adf9c002cd2b885b86a2573afed415268caed961c15c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5261c9a38de5d58df5d6ab2f931a4f82eb1405f6f07176beb93223cc45ab15e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5261c9a38de5d58df5d6ab2f931a4f82eb1405f6f07176beb93223cc45ab15e2->enter($__internal_5261c9a38de5d58df5d6ab2f931a4f82eb1405f6f07176beb93223cc45ab15e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5261c9a38de5d58df5d6ab2f931a4f82eb1405f6f07176beb93223cc45ab15e2->leave($__internal_5261c9a38de5d58df5d6ab2f931a4f82eb1405f6f07176beb93223cc45ab15e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
