<?php

/* gesGfctBundle:Empresa:all.html.twig */
class __TwigTemplate_677d1fb2a273508601112a615c48d1c44cf349a1a9732e81bd49d764867099d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:Empresa:all.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be16845c99cb978fc31cb05e83135da980aeac26be9fcfe7a01239774b369c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be16845c99cb978fc31cb05e83135da980aeac26be9fcfe7a01239774b369c5->enter($__internal_9be16845c99cb978fc31cb05e83135da980aeac26be9fcfe7a01239774b369c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Empresa:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be16845c99cb978fc31cb05e83135da980aeac26be9fcfe7a01239774b369c5->leave($__internal_9be16845c99cb978fc31cb05e83135da980aeac26be9fcfe7a01239774b369c5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_67f44ff6dac11076f69f8224fa113b009efadb3b96ec5a08b2c471fd1af394c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f44ff6dac11076f69f8224fa113b009efadb3b96ec5a08b2c471fd1af394c1->enter($__internal_67f44ff6dac11076f69f8224fa113b009efadb3b96ec5a08b2c471fd1af394c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:all.html.twig"));

        // line 3
        echo "  <h1>GFCT</h1><br>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Listado de Empresa</div>
      <table class=\"table\">
        <tr>
          <th><b>id</b></th>
          <td><b>nombre</b></td>
          <td><b>direccion</b></td>
          <td><b>codigopostal</b></td>
          <td><b>telefono1</b></td>
          <td><b>telefono2</b></td>
          <td><b>fechaCreacion</b></td>

        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NumEmpresas"]) ? $context["NumEmpresas"] : $this->getContext($context, "NumEmpresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa1"]) {
            // line 18
            echo "        <tr>
          <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "id", array()), "html", null, true);
            echo "</th>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "direccion", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "cp", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "telefono1", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "telefono2", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["empresa1"], "fechaCreacion", array()), "date", array()), "html", null, true);
            echo "</td>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </table>
    </div>
    </body>
    ";
        
        $__internal_67f44ff6dac11076f69f8224fa113b009efadb3b96ec5a08b2c471fd1af394c1->leave($__internal_67f44ff6dac11076f69f8224fa113b009efadb3b96ec5a08b2c471fd1af394c1_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Empresa:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
  {% block body %}
  <h1>GFCT</h1><br>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Listado de Empresa</div>
      <table class=\"table\">
        <tr>
          <th><b>id</b></th>
          <td><b>nombre</b></td>
          <td><b>direccion</b></td>
          <td><b>codigopostal</b></td>
          <td><b>telefono1</b></td>
          <td><b>telefono2</b></td>
          <td><b>fechaCreacion</b></td>

        </tr>
        {% for empresa1 in NumEmpresas %}
        <tr>
          <th>{{ empresa1.id}}</th>
          <td>{{ empresa1.nombre }}</td>
          <td>{{ empresa1.direccion }}</td>
          <td>{{ empresa1.cp }}</td>
          <td>{{ empresa1.telefono1 }}</td>
          <td>{{ empresa1.telefono2 }}</td>
          <td>{{ empresa1.fechaCreacion.date }}</td>

        </tr>
        {% endfor %}
      </table>
    </div>
    </body>
    {% endblock %}
", "gesGfctBundle:Empresa:all.html.twig", "C:\\xampp\\symfony\\Gfct2\\src\\gesGfctBundle/Resources/views/Empresa/all.html.twig");
    }
}
