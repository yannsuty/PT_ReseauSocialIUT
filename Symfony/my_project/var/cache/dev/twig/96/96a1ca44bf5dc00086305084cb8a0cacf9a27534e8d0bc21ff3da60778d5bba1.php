<?php

/* accueil/index.html.twig */
class __TwigTemplate_ec04ef3229549a7fbaabad2984a9c95c15dc272536cfa0615de105ba42c739ba extends Twig_Template
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
            'header' => array($this, 'block_header'),
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

        echo "Hello !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "\t\t<div id=\"headerHaut\">
\t\t<div id=\"logo_site\" class=\"divhead\">
\t\t\t<img id=\"logosite\" src=\"image/logo.png\" alt=\"logo\">
\t\t</div>
\t\t<div id=\"connexion\" class=\"divhead\">
\t\t\t<div id=\"connexion2\">
\t\t\t\t<input type=\"text\" id=\"login\" placeholder=\"Login\"/><br>
\t\t\t\t<input type=\"text\" id=\"mdp\" placeholder=\"Mot de Passe\"/><br>
\t\t\t\t<input id=\"submit\" class=\"bouton\" type=\"submit\" value=\"connexion\"/>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"headerBas\">
\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\" class=\"active\">Accueil</a></li>
\t\t\t\t<li><a href=\"/Forum\" class=\"boutonMenu\">Forum</a></li>
\t\t\t\t<li><a href=\"/EmploiDuTemps\" class=\"boutonMenu\">Emploi du temps</a></li>
\t\t\t\t<li><a href=\"/News\" class=\"boutonMenu\">News</a></li>
\t\t\t\t<li><a href=\"/Aide\" class=\"boutonMenu\">Aide</a></li>
\t\t\t\t<input href=\"#\" class=\"barreRech\" name=\"recherche\" type=\"text\" placeholder=\"Rechercher\" required/>
                <i class=\"material-icons\">search</i>
\t\t\t</ul>
\t\t</div>
\t</div>
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
        return array (  72 => 5,  63 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}{#recupere base html head, body#}

{% block title %}Hello !{% endblock %}{#titre#}
{% block header %}{#insert le header#}
\t\t<div id=\"headerHaut\">
\t\t<div id=\"logo_site\" class=\"divhead\">
\t\t\t<img id=\"logosite\" src=\"image/logo.png\" alt=\"logo\">
\t\t</div>
\t\t<div id=\"connexion\" class=\"divhead\">
\t\t\t<div id=\"connexion2\">
\t\t\t\t<input type=\"text\" id=\"login\" placeholder=\"Login\"/><br>
\t\t\t\t<input type=\"text\" id=\"mdp\" placeholder=\"Mot de Passe\"/><br>
\t\t\t\t<input id=\"submit\" class=\"bouton\" type=\"submit\" value=\"connexion\"/>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"headerBas\">
\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\" class=\"active\">Accueil</a></li>
\t\t\t\t<li><a href=\"/Forum\" class=\"boutonMenu\">Forum</a></li>
\t\t\t\t<li><a href=\"/EmploiDuTemps\" class=\"boutonMenu\">Emploi du temps</a></li>
\t\t\t\t<li><a href=\"/News\" class=\"boutonMenu\">News</a></li>
\t\t\t\t<li><a href=\"/Aide\" class=\"boutonMenu\">Aide</a></li>
\t\t\t\t<input href=\"#\" class=\"barreRech\" name=\"recherche\" type=\"text\" placeholder=\"Rechercher\" required/>
                <i class=\"material-icons\">search</i>
\t\t\t</ul>
\t\t</div>
\t</div>
{% endblock %}
", "accueil/index.html.twig", "/home/eureka/www/PT_ReseauSocialIUT/Symfony/my_project/templates/accueil/index.html.twig");
    }
}
