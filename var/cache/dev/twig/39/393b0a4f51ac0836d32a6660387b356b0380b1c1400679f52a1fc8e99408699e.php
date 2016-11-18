<?php

/* base.html.twig */
class __TwigTemplate_6cf131d5ecaf581dd73cdc4103bcc8079179f0722941bc825611ccef4c971637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7db3019299c27e9b0874589cbf2806041f5be5369a6b7211f8eadd25fffa0a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db3019299c27e9b0874589cbf2806041f5be5369a6b7211f8eadd25fffa0a46->enter($__internal_7db3019299c27e9b0874589cbf2806041f5be5369a6b7211f8eadd25fffa0a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7db3019299c27e9b0874589cbf2806041f5be5369a6b7211f8eadd25fffa0a46->leave($__internal_7db3019299c27e9b0874589cbf2806041f5be5369a6b7211f8eadd25fffa0a46_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bde2831fc0dabe2c76a36e29e708859abaea0f23ef3988ea0ea5dbbed35e2a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde2831fc0dabe2c76a36e29e708859abaea0f23ef3988ea0ea5dbbed35e2a80->enter($__internal_bde2831fc0dabe2c76a36e29e708859abaea0f23ef3988ea0ea5dbbed35e2a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_bde2831fc0dabe2c76a36e29e708859abaea0f23ef3988ea0ea5dbbed35e2a80->leave($__internal_bde2831fc0dabe2c76a36e29e708859abaea0f23ef3988ea0ea5dbbed35e2a80_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcdc86d87da4c8bfc83aa14624ada906d6b10e352caf7a4b33e91689fc1bd385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdc86d87da4c8bfc83aa14624ada906d6b10e352caf7a4b33e91689fc1bd385->enter($__internal_dcdc86d87da4c8bfc83aa14624ada906d6b10e352caf7a4b33e91689fc1bd385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_dcdc86d87da4c8bfc83aa14624ada906d6b10e352caf7a4b33e91689fc1bd385->leave($__internal_dcdc86d87da4c8bfc83aa14624ada906d6b10e352caf7a4b33e91689fc1bd385_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aabfae7ebfabdc95ef83e3f92e003e43d883097dbf23c95a8e7716f48a55d0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabfae7ebfabdc95ef83e3f92e003e43d883097dbf23c95a8e7716f48a55d0a9->enter($__internal_aabfae7ebfabdc95ef83e3f92e003e43d883097dbf23c95a8e7716f48a55d0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_aabfae7ebfabdc95ef83e3f92e003e43d883097dbf23c95a8e7716f48a55d0a9->leave($__internal_aabfae7ebfabdc95ef83e3f92e003e43d883097dbf23c95a8e7716f48a55d0a9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb9ca52b153e12403ef7e3239f72469a5e9e710a9dface33015bcd9dc128a371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9ca52b153e12403ef7e3239f72469a5e9e710a9dface33015bcd9dc128a371->enter($__internal_bb9ca52b153e12403ef7e3239f72469a5e9e710a9dface33015bcd9dc128a371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_bb9ca52b153e12403ef7e3239f72469a5e9e710a9dface33015bcd9dc128a371->leave($__internal_bb9ca52b153e12403ef7e3239f72469a5e9e710a9dface33015bcd9dc128a371_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\GFCT\\app\\Resources\\views\\base.html.twig");
    }
}
