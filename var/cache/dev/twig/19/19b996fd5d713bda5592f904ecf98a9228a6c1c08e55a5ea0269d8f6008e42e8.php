<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2aa3a0641cce386df59e09988f74e143c215dec8630ebd5175800405b296e158 extends Twig_Template
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
        $__internal_4d35c67c092820047924fe51462d70976e0fa4c1d608a204d4a3ccd7ac5ff728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d35c67c092820047924fe51462d70976e0fa4c1d608a204d4a3ccd7ac5ff728->enter($__internal_4d35c67c092820047924fe51462d70976e0fa4c1d608a204d4a3ccd7ac5ff728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d35c67c092820047924fe51462d70976e0fa4c1d608a204d4a3ccd7ac5ff728->leave($__internal_4d35c67c092820047924fe51462d70976e0fa4c1d608a204d4a3ccd7ac5ff728_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d273b33e6b7803e260f40a26cd7d6e07a1f5616f9207ab4f4f2750ab486ed245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d273b33e6b7803e260f40a26cd7d6e07a1f5616f9207ab4f4f2750ab486ed245->enter($__internal_d273b33e6b7803e260f40a26cd7d6e07a1f5616f9207ab4f4f2750ab486ed245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d273b33e6b7803e260f40a26cd7d6e07a1f5616f9207ab4f4f2750ab486ed245->leave($__internal_d273b33e6b7803e260f40a26cd7d6e07a1f5616f9207ab4f4f2750ab486ed245_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec024f9bc3c507ef51e0836b51ca3b562d63c016e5a0811d4dc053453c6d74f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec024f9bc3c507ef51e0836b51ca3b562d63c016e5a0811d4dc053453c6d74f9->enter($__internal_ec024f9bc3c507ef51e0836b51ca3b562d63c016e5a0811d4dc053453c6d74f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ec024f9bc3c507ef51e0836b51ca3b562d63c016e5a0811d4dc053453c6d74f9->leave($__internal_ec024f9bc3c507ef51e0836b51ca3b562d63c016e5a0811d4dc053453c6d74f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e8dd0d72b797af258a0d18af8a9ae9959cd9b382d947b49a0db937032821a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8dd0d72b797af258a0d18af8a9ae9959cd9b382d947b49a0db937032821a77->enter($__internal_0e8dd0d72b797af258a0d18af8a9ae9959cd9b382d947b49a0db937032821a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0e8dd0d72b797af258a0d18af8a9ae9959cd9b382d947b49a0db937032821a77->leave($__internal_0e8dd0d72b797af258a0d18af8a9ae9959cd9b382d947b49a0db937032821a77_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\symfony\\Gfct2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
