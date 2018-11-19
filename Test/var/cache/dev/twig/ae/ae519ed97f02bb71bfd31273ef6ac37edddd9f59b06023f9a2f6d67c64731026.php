<?php

/* accueil/index.html.twig */
class __TwigTemplate_d0535667e25af6724c717f9775ba04c8397143889a1d7b7ad03de683dd018c03 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

\t<header>
\t\t\t<div id=\"headerHaut\">
\t\t\t<div id=\"logo_site\" class=\"divhead\">
\t\t\t\t<img id=\"logosite\" src=\"image/logo.png\" alt=\"logo\">
\t\t\t</div>
\t\t\t<div id=\"connexion\" class=\"divhead\">
\t\t\t\t<div id=\"connexion2\">
\t\t\t\t\t<input type=\"text\" id=\"login\" placeholder=\"Login\"/><br>
\t\t\t\t\t<input type=\"text\" id=\"mdp\" placeholder=\"Mot de Passe\"/><br>
\t\t\t\t\t<input id=\"submit\" class=\"bouton\" type=\"submit\" value=\"connexion\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"headerBas\">
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\" class=\"active\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"/Forum\" class=\"boutonMenu\">Forum</a></li>
\t\t\t\t\t<li><a href=\"/EmploiDuTemps\" class=\"boutonMenu\">Emploi du temps</a></li>
\t\t\t\t\t<li><a href=\"/News\" class=\"boutonMenu\">News</a></li>
\t\t\t\t\t<li><a href=\"/Aide\" class=\"boutonMenu\">Aide</a></li>
\t\t\t\t\t<input href=\"#\" class=\"barreRech\" name=\"recherche\" type=\"text\" placeholder=\"Rechercher\" required/>
\t\t\t\t\t<i class=\"material<F4>icons\">search</i>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</header>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello {{ controller_name }}!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

\t<header>
\t\t\t<div id=\"headerHaut\">
\t\t\t<div id=\"logo_site\" class=\"divhead\">
\t\t\t\t<img id=\"logosite\" src=\"image/logo.png\" alt=\"logo\">
\t\t\t</div>
\t\t\t<div id=\"connexion\" class=\"divhead\">
\t\t\t\t<div id=\"connexion2\">
\t\t\t\t\t<input type=\"text\" id=\"login\" placeholder=\"Login\"/><br>
\t\t\t\t\t<input type=\"text\" id=\"mdp\" placeholder=\"Mot de Passe\"/><br>
\t\t\t\t\t<input id=\"submit\" class=\"bouton\" type=\"submit\" value=\"connexion\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"headerBas\">
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\" class=\"active\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"/Forum\" class=\"boutonMenu\">Forum</a></li>
\t\t\t\t\t<li><a href=\"/EmploiDuTemps\" class=\"boutonMenu\">Emploi du temps</a></li>
\t\t\t\t\t<li><a href=\"/News\" class=\"boutonMenu\">News</a></li>
\t\t\t\t\t<li><a href=\"/Aide\" class=\"boutonMenu\">Aide</a></li>
\t\t\t\t\t<input href=\"#\" class=\"barreRech\" name=\"recherche\" type=\"text\" placeholder=\"Rechercher\" required/>
\t\t\t\t\t<i class=\"material<F4>icons\">search</i>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</header>


{% endblock %}
", "accueil/index.html.twig", "/home/eureka/www/suty/PT_ReseauSocialIUT/Test/templates/accueil/index.html.twig");
    }
}
