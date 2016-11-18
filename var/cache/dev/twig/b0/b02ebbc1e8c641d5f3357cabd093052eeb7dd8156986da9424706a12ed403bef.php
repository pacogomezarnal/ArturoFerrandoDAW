<?php

/* gesGfctBundle:Empresa:new.html.twig */
class __TwigTemplate_2b5d76f4e9d7bef117977940a66c831d2734b6e422fbdc4d370ff5d89a1124ca extends Twig_Template
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
        $__internal_bd0e2739c0601513b27df651fb4498c142f7f485223d9b942f13515386330579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0e2739c0601513b27df651fb4498c142f7f485223d9b942f13515386330579->enter($__internal_bd0e2739c0601513b27df651fb4498c142f7f485223d9b942f13515386330579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Empresa:new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Formulario</title>
    <h1>Inserta los datos</h1>

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
        
        $__internal_bd0e2739c0601513b27df651fb4498c142f7f485223d9b942f13515386330579->leave($__internal_bd0e2739c0601513b27df651fb4498c142f7f485223d9b942f13515386330579_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d9fc84e3abdcd65eab64dccfbe764150227e94613873c4797c8381fc759fcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9fc84e3abdcd65eab64dccfbe764150227e94613873c4797c8381fc759fcb7->enter($__internal_1d9fc84e3abdcd65eab64dccfbe764150227e94613873c4797c8381fc759fcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:new.html.twig"));

        // line 9
        echo "     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilosForm.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_1d9fc84e3abdcd65eab64dccfbe764150227e94613873c4797c8381fc759fcb7->leave($__internal_1d9fc84e3abdcd65eab64dccfbe764150227e94613873c4797c8381fc759fcb7_prof);

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
    <title>Formulario</title>
    <h1>Inserta los datos</h1>

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
", "gesGfctBundle:Empresa:new.html.twig", "C:\\xampp\\symfony\\Gfct2\\src\\gesGfctBundle/Resources/views/Empresa/new.html.twig");
    }
}
