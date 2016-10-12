<?php

/* AppBundle:circuit:index.html.twig */
class __TwigTemplate_bd212c90297dca2bc99b0ada1e3af064a49188ef350262094b3e0456e3ded922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::agvoybase.html.twig", "AppBundle:circuit:index.html.twig", 1);
        $this->blocks = array(
            'headBanner' => array($this, 'block_headBanner'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_738ff0a4331bb28459f86764b4f8082bc7d9ef059aa29e81992a68a8eaf4f95f = $this->env->getExtension("native_profiler");
        $__internal_738ff0a4331bb28459f86764b4f8082bc7d9ef059aa29e81992a68a8eaf4f95f->enter($__internal_738ff0a4331bb28459f86764b4f8082bc7d9ef059aa29e81992a68a8eaf4f95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:circuit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738ff0a4331bb28459f86764b4f8082bc7d9ef059aa29e81992a68a8eaf4f95f->leave($__internal_738ff0a4331bb28459f86764b4f8082bc7d9ef059aa29e81992a68a8eaf4f95f_prof);

    }

    // line 4
    public function block_headBanner($context, array $blocks = array())
    {
        $__internal_832d0207f7227d7afd9a9a6ccec041b2cf1b1b8c33afd8eff5b736d39636a0ff = $this->env->getExtension("native_profiler");
        $__internal_832d0207f7227d7afd9a9a6ccec041b2cf1b1b8c33afd8eff5b736d39636a0ff->enter($__internal_832d0207f7227d7afd9a9a6ccec041b2cf1b1b8c33afd8eff5b736d39636a0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headBanner"));

        // line 5
        echo "    <h1>Nos circuits</h1>
";
        
        $__internal_832d0207f7227d7afd9a9a6ccec041b2cf1b1b8c33afd8eff5b736d39636a0ff->leave($__internal_832d0207f7227d7afd9a9a6ccec041b2cf1b1b8c33afd8eff5b736d39636a0ff_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_242592eb453039097f9085dc4cb6f1cd661802e561762d83f4590d5b3a6920b6 = $this->env->getExtension("native_profiler");
        $__internal_242592eb453039097f9085dc4cb6f1cd661802e561762d83f4590d5b3a6920b6->enter($__internal_242592eb453039097f9085dc4cb6f1cd661802e561762d83f4590d5b3a6920b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Paysdepart</th>
                <th>Villedepart</th>
                <th>Villearrivee</th>
                <th>Dureecircuit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) ? $context["circuits"] : $this->getContext($context, "circuits")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">détails</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
    
";
        
        $__internal_242592eb453039097f9085dc4cb6f1cd661802e561762d83f4590d5b3a6920b6->leave($__internal_242592eb453039097f9085dc4cb6f1cd661802e561762d83f4590d5b3a6920b6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:circuit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  106 => 34,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  55 => 10,  49 => 9,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'AppBundle::agvoybase.html.twig' %}*/
/* */
/* */
/* {% block headBanner %}*/
/*     <h1>Nos circuits</h1>*/
/* {% endblock %}*/
/* */
/* */
/* {% block main %}*/
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Description</th>*/
/*                 <th>Paysdepart</th>*/
/*                 <th>Villedepart</th>*/
/*                 <th>Villearrivee</th>*/
/*                 <th>Dureecircuit</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for circuit in circuits %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('circuit_show', { 'id': circuit.id }) }}">{{ circuit.id }}</a></td>*/
/*                 <td>{{ circuit.description }}</td>*/
/*                 <td>{{ circuit.paysDepart }}</td>*/
/*                 <td>{{ circuit.villeDepart }}</td>*/
/*                 <td>{{ circuit.villeArrivee }}</td>*/
/*                 <td>{{ circuit.dureeCircuit }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('circuit_show', { 'id': circuit.id }) }}">détails</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     */
/* {% endblock %} {# main #}*/
/* */
