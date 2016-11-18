<?php

/* gesGfctBundle:Empresa:all.html.twig */
class __TwigTemplate_fbee07bc3831c3235944507acb5a41dc963883e33494bb075bc17243fead606d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tiitle' => array($this, 'block_tiitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fedded5a156c3dee76cba831f7fb8457510137d221575b471ea089c553255a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedded5a156c3dee76cba831f7fb8457510137d221575b471ea089c553255a27->enter($__internal_fedded5a156c3dee76cba831f7fb8457510137d221575b471ea089c553255a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Empresa:all.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
\t<title>";
        // line 6
        $this->displayBlock('tiitle', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
  ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
</body>
</html>
";
        
        $__internal_fedded5a156c3dee76cba831f7fb8457510137d221575b471ea089c553255a27->leave($__internal_fedded5a156c3dee76cba831f7fb8457510137d221575b471ea089c553255a27_prof);

    }

    // line 6
    public function block_tiitle($context, array $blocks = array())
    {
        $__internal_d6689279df65544b23a6346f72c8811c26b2f96bae087b71efcea28232e81ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6689279df65544b23a6346f72c8811c26b2f96bae087b71efcea28232e81ce5->enter($__internal_d6689279df65544b23a6346f72c8811c26b2f96bae087b71efcea28232e81ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:all.html.twig"));

        echo "GFCT";
        
        $__internal_d6689279df65544b23a6346f72c8811c26b2f96bae087b71efcea28232e81ce5->leave($__internal_d6689279df65544b23a6346f72c8811c26b2f96bae087b71efcea28232e81ce5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21535d48b01a201d201ba1b37f778997e2c6b51aa5d84c8d35d4483ef37a8a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21535d48b01a201d201ba1b37f778997e2c6b51aa5d84c8d35d4483ef37a8a84->enter($__internal_21535d48b01a201d201ba1b37f778997e2c6b51aa5d84c8d35d4483ef37a8a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:all.html.twig"));

        // line 8
        echo "   <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\">
   ";
        
        $__internal_21535d48b01a201d201ba1b37f778997e2c6b51aa5d84c8d35d4483ef37a8a84->leave($__internal_21535d48b01a201d201ba1b37f778997e2c6b51aa5d84c8d35d4483ef37a8a84_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_691ce78c9d7ef683517d4f0af12f7743ac451872e4e005c6801f8112ca80117f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691ce78c9d7ef683517d4f0af12f7743ac451872e4e005c6801f8112ca80117f->enter($__internal_691ce78c9d7ef683517d4f0af12f7743ac451872e4e005c6801f8112ca80117f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:all.html.twig"));

        echo "<h1>GFCT</h1><br>
    <div>
      <table class=\"tabla\">
        <tr>
          <th><b>id</b></th>
          <th><b>nombre</b></th>
          <th><b>direccion</b></th>
          <th><b>codigopostal</b></th>
          <th><b>telefono1</b></th>
          <th><b>telefono2</b></th>
          <th><b>fechaCreacion</b></th>

        </tr>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NumEmpresas"]) ? $context["NumEmpresas"] : $this->getContext($context, "NumEmpresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa1"]) {
            // line 26
            echo "        <tr>
          <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "id", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "nombre", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "direccion", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "cp", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "telefono1", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "telefono2", array()), "html", null, true);
            echo "</th>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </table>
    </div>
    ";
        
        $__internal_691ce78c9d7ef683517d4f0af12f7743ac451872e4e005c6801f8112ca80117f->leave($__internal_691ce78c9d7ef683517d4f0af12f7743ac451872e4e005c6801f8112ca80117f_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Empresa:all.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 36,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  106 => 26,  102 => 25,  82 => 12,  72 => 8,  66 => 7,  54 => 6,  44 => 39,  42 => 12,  38 => 10,  36 => 7,  32 => 6,  25 => 1,);
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
  <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
\t<title>{% block tiitle %}GFCT{% endblock %}</title>
  {% block stylesheets %}
   <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/estilos.css')}}\">
   {% endblock %}
</head>
<body>
  {% block body %}<h1>GFCT</h1><br>
    <div>
      <table class=\"tabla\">
        <tr>
          <th><b>id</b></th>
          <th><b>nombre</b></th>
          <th><b>direccion</b></th>
          <th><b>codigopostal</b></th>
          <th><b>telefono1</b></th>
          <th><b>telefono2</b></th>
          <th><b>fechaCreacion</b></th>

        </tr>
        {% for empresa1 in NumEmpresas %}
        <tr>
          <th>{{ empresa1.id}}</th>
          <th>{{ empresa1.nombre }}</th>
          <th>{{ empresa1.direccion }}</th>
          <th>{{ empresa1.cp }}</th>
          <th>{{ empresa1.telefono1 }}</th>
          <th>{{ empresa1.telefono2 }}</th>

        </tr>
        {% endfor %}
      </table>
    </div>
    {% endblock %}

</body>
</html>
", "gesGfctBundle:Empresa:all.html.twig", "C:\\xampp\\htdocs\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/Empresa/all.html.twig");
    }
}
