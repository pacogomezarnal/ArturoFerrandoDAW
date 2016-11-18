<?php

/* gesGfctBundle:Empresa:new.html.twig */
class __TwigTemplate_afe3cce8cd63b16ca17cea64ffa693fd5861340b80b6abb950731c96874884ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ca4ae1a3dd1680bf93a4a0d90f14c927c09a3781b5b784c6e5796a3b46e9c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca4ae1a3dd1680bf93a4a0d90f14c927c09a3781b5b784c6e5796a3b46e9c4b->enter($__internal_3ca4ae1a3dd1680bf93a4a0d90f14c927c09a3781b5b784c6e5796a3b46e9c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Empresa:new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Formulario New</title>
    <h1>Formulario, Insertar datos</h1>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>
  <body>
    <div class=\"contenedor\">
    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "
    </div>
  </body>
</html>
";
        
        $__internal_3ca4ae1a3dd1680bf93a4a0d90f14c927c09a3781b5b784c6e5796a3b46e9c4b->leave($__internal_3ca4ae1a3dd1680bf93a4a0d90f14c927c09a3781b5b784c6e5796a3b46e9c4b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39e8cdf8c98627dee32358359c93ed25e4c565f6019e25641cc94cf731aeb868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e8cdf8c98627dee32358359c93ed25e4c565f6019e25641cc94cf731aeb868->enter($__internal_39e8cdf8c98627dee32358359c93ed25e4c565f6019e25641cc94cf731aeb868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:new.html.twig"));

        // line 9
        echo "     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilosForm.css"), "html", null, true);
        echo "\">
     ";
        
        $__internal_39e8cdf8c98627dee32358359c93ed25e4c565f6019e25641cc94cf731aeb868->leave($__internal_39e8cdf8c98627dee32358359c93ed25e4c565f6019e25641cc94cf731aeb868_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Empresa:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  39 => 14,  34 => 11,  32 => 8,  23 => 1,);
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
    <meta charset=\"utf-8\">
    <title>Formulario New</title>
    <h1>Formulario, Insertar datos</h1>

    {% block stylesheets %}
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/estilosForm.css')}}\">
     {% endblock %}
  </head>
  <body>
    <div class=\"contenedor\">
    {{form(formulario)}}
    </div>
  </body>
</html>
", "gesGfctBundle:Empresa:new.html.twig", "C:\\xampp\\htdocs\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/Empresa/new.html.twig");
    }
}
