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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <div id=\"videogame-details-container\">
        <div id=\"videogame-details-description\">
            <p><b>Description :</b></p><br>
            <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
        </div>
        <div id=\"videogame-details-infos\">
            <div>
                <p><b>Release date :</b></p>
                <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 16, $this->source); })()), "releasedate", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true);
        echo "</p>
            </div>
            <div>
            <p><b>Edited by :</b></p>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 20, $this->source); })()), "editor", [], "any", false, false, false, 20), "societyname", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
            </div>
            <div>
            <p><b>Support on :</b></p>
                <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 24, $this->source); })()), "support", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
            </div>
            ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "                <div id=\"videogame-details-admin\">
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogame_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Edit</a>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogame_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["videogame"]) || array_key_exists("videogame", $context) ? $context["videogame"] : (function () { throw new RuntimeError('Variable "videogame" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Delete</a>
                </div>
            ";
        }
        // line 32
        echo "        </div>
    </div>
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
        return array (  139 => 32,  133 => 29,  129 => 28,  126 => 27,  124 => 26,  119 => 24,  112 => 20,  105 => 16,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ videogame.title }}{% endblock %}

{% block body %}
    <h1>{{ videogame.title }}</h1>

    <div id=\"videogame-details-container\">
        <div id=\"videogame-details-description\">
            <p><b>Description :</b></p><br>
            <p>{{ videogame.description }}</p>
        </div>
        <div id=\"videogame-details-infos\">
            <div>
                <p><b>Release date :</b></p>
                <p>{{ videogame.releasedate|date('Y-m-d') }}</p>
            </div>
            <div>
            <p><b>Edited by :</b></p>
                <p>{{ videogame.editor.societyname }}</p>
            </div>
            <div>
            <p><b>Support on :</b></p>
                <p>{{ videogame.support }}</p>
            </div>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <div id=\"videogame-details-admin\">
                    <a href=\"{{ path('videogame_edit', {'id': videogame.id}) }}\">Edit</a>
                    <a href=\"{{ path('videogame_delete', {'id': videogame.id}) }}\">Delete</a>
                </div>
            {% endif %}
        </div>
    </div>
    {# <a href=\"{{ path('videogame') }}\">List</a> #}
{% endblock %}
", "videogame/details.html.twig", "C:\\wamp64\\www\\SymfonyGameStoreProjectFinalV\\templates\\videogame\\details.html.twig");
    }
}
