<?php

/* gesGfctBundle:Alumno:all.html.twig */
class __TwigTemplate_46743a0ac04ae747cb7707c228bf927dfb213cbd7339b0164f0ec53f2b66c34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:Alumno:all.html.twig", 1);
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
        $__internal_7601cf2d6f85d39eff60125035f4aef4b34deb94064cda3c3bb6b5cb68843dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7601cf2d6f85d39eff60125035f4aef4b34deb94064cda3c3bb6b5cb68843dc4->enter($__internal_7601cf2d6f85d39eff60125035f4aef4b34deb94064cda3c3bb6b5cb68843dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Alumno:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7601cf2d6f85d39eff60125035f4aef4b34deb94064cda3c3bb6b5cb68843dc4->leave($__internal_7601cf2d6f85d39eff60125035f4aef4b34deb94064cda3c3bb6b5cb68843dc4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_75af79b276ce9b9b281a6245f86ece9c45626c3dd1ffe16dcd8d654b556a33be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75af79b276ce9b9b281a6245f86ece9c45626c3dd1ffe16dcd8d654b556a33be->enter($__internal_75af79b276ce9b9b281a6245f86ece9c45626c3dd1ffe16dcd8d654b556a33be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Alumno:all.html.twig"));

        // line 3
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Listado de Alumnos</div>
      <table class=\"table\">
        <tr>
          <th><b>id</b></th>
          <td><b>nombre</b></td>
          <td><b>apellido1</b></td>
          <td><b>apellido2</b></td>
          <td><b>ciclo</b></td>
          <td><b>empresa_id</b></td>

        </tr>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NumAlumno"]) ? $context["NumAlumno"] : $this->getContext($context, "NumAlumno")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno1"]) {
            // line 16
            echo "        <tr>
          <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "id", array()), "html", null, true);
            echo "</th>
          <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "apellido1", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "apellido2", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "ciclo", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno1"], "empresa", array()), "id", array()), "html", null, true);
            echo "</td>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </table>
    </div>
    </div>
    </body>
    ";
        
        $__internal_75af79b276ce9b9b281a6245f86ece9c45626c3dd1ffe16dcd8d654b556a33be->leave($__internal_75af79b276ce9b9b281a6245f86ece9c45626c3dd1ffe16dcd8d654b556a33be_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Alumno:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
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
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Listado de Alumnos</div>
      <table class=\"table\">
        <tr>
          <th><b>id</b></th>
          <td><b>nombre</b></td>
          <td><b>apellido1</b></td>
          <td><b>apellido2</b></td>
          <td><b>ciclo</b></td>
          <td><b>empresa_id</b></td>

        </tr>
        {% for alumno1 in NumAlumno %}
        <tr>
          <th>{{ alumno1.id}}</th>
          <td>{{ alumno1.nombre }}</td>
          <td>{{ alumno1.apellido1 }}</td>
          <td>{{ alumno1.apellido2 }}</td>
          <td>{{ alumno1.ciclo }}</td>
          <td>{{ alumno1.empresa.id }}</td>

        </tr>
        {% endfor %}
      </table>
    </div>
    </div>
    </body>
    {% endblock %}
", "gesGfctBundle:Alumno:all.html.twig", "C:\\xampp\\symfony\\Gfct2\\src\\gesGfctBundle/Resources/views/Alumno/all.html.twig");
    }
}
