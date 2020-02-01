<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* videogame/details.html.twig */
class __TwigTemplate_f5f6437f124dd6aa87b6c786c6704466f5278700e167c45b7124320a331ad238 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videogame/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videogame/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "videogame/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "video game details";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
           <p class=\"m-0\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
           <p class=\"m-0\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
            <p class=\"m-0\">";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 9, $this->source); })()), "releasedate", [], "any", false, false, false, 9), "Y-m-d"), "html", null, true);
        echo "</p>
            <p class=\"m-0\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 10, $this->source); })()), "editor", [], "any", false, false, false, 10), "societyname", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
            <p class=\"m-0\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 11, $this->source); })()), "support", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>

            <a href=\"\"> </a>


            ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogame_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Edit</a>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogame_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Delete</a>
            ";
        }
        // line 20
        echo "        </div>
    <br>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "videogame/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 20,  122 => 18,  117 => 17,  115 => 16,  107 => 11,  103 => 10,  99 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}video game details{% endblock %}

{% block body %}
    <div class=\"container\">
           <p class=\"m-0\">{{ videogame.title }}</p>
           <p class=\"m-0\">{{ videogame.description }}</p>
            <p class=\"m-0\">{{ videogame.releasedate|date('Y-m-d') }}</p>
            <p class=\"m-0\">{{ videogame.editor.societyname }}</p>
            <p class=\"m-0\">{{ videogame.support }}</p>

            <a href=\"\"> </a>


            {% if is_granted(\"ROLE_ADMIN\") %}
                <a href=\"{{ path('videogame_edit', {'id': videogame.id}) }}\">Edit</a>
                <a href=\"{{ path('videogame_delete', {'id': videogame.id}) }}\">Delete</a>
            {% endif %}
        </div>
    <br>
    {# <a href=\"{{ path('videogame') }}\">List</a> #}
{% endblock %}
", "videogame/details.html.twig", "C:\\wamp64\\www\\ProjetPhp\\SymfonyGameStore1\\templates\\videogame\\details.html.twig");
    }
}
