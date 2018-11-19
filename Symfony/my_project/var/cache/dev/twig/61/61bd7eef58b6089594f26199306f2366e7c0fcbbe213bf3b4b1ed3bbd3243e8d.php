<?php

/* @Twig/Exception/trace.html.twig */
class __TwigTemplate_f68dac04a77341dff5e42b9f319cf78e9dd201a98f63e26755653442384e151c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.html.twig"));

        // line 1
        echo "<div class=\"trace-line-header break-long-words ";
        echo ((((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array()), false)) : (false))) ? ("sf-toggle") : (""));
        echo "\" data-toggle-selector=\"#trace-html-";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo ((((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 1, $this->source); })()) == "expanded")) ? ("display") : (""));
        echo "\">
    ";
        // line 2
        if (((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 3
            echo "        <span class=\"icon icon-close\">";
            echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
            echo "</span>
        <span class=\"icon icon-open\">";
            // line 4
            echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
            echo "</span>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if ((((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 7, $this->source); })()) != "compact") && twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->source); })()), "function", array()))) {
            // line 8
            echo "        <span class=\"trace-class\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->source); })()), "class", array()));
            echo "</span>";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->source); })()), "type", array()))) {
                echo "<span class=\"trace-type\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->source); })()), "type", array()), "html", null, true);
                echo "</span>";
            }
            echo "<span class=\"trace-method\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->source); })()), "function", array()), "html", null, true);
            echo "</span><span class=\"trace-arguments\">(";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgs(twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 8, $this->source); })()), "args", array()));
            echo ")</span>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 12
            echo "        ";
            $context["line_number"] = ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array()), 1)) : (1));
            // line 13
            echo "        ";
            $context["file_link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 13, $this->source); })()), "file", array()), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 13, $this->source); })()));
            // line 14
            echo "        ";
            $context["file_path"] = twig_replace_filter(strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 14, $this->source); })()), "file", array()), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 14, $this->source); })()))), array((" at line " . (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 14, $this->source); })())) => ""));
            // line 15
            echo "        ";
            $context["file_path_parts"] = twig_split_filter($this->env, (isset($context["file_path"]) || array_key_exists("file_path", $context) ? $context["file_path"] : (function () { throw new Twig_Error_Runtime('Variable "file_path" does not exist.', 15, $this->source); })()), twig_constant("DIRECTORY_SEPARATOR"));
            // line 16
            echo "
        <span class=\"block trace-file-path\">
            in
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["file_link"]) || array_key_exists("file_link", $context) ? $context["file_link"] : (function () { throw new Twig_Error_Runtime('Variable "file_link" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, (isset($context["file_path_parts"]) || array_key_exists("file_path_parts", $context) ? $context["file_path_parts"] : (function () { throw new Twig_Error_Runtime('Variable "file_path_parts" does not exist.', 19, $this->source); })()), 0,  -1), twig_constant("DIRECTORY_SEPARATOR")), "html", null, true);
            echo twig_escape_filter($this->env, twig_constant("DIRECTORY_SEPARATOR"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["file_path_parts"]) || array_key_exists("file_path_parts", $context) ? $context["file_path_parts"] : (function () { throw new Twig_Error_Runtime('Variable "file_path_parts" does not exist.', 19, $this->source); })())), "html", null, true);
            echo "</strong></a>";
            // line 20
            if ((((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 20, $this->source); })()) == "compact") && twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 20, $this->source); })()), "function", array()))) {
                echo "<span class=\"trace-type\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 20, $this->source); })()), "type", array()), "html", null, true);
                echo "</span><span class=\"trace-method\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 20, $this->source); })()), "function", array()), "html", null, true);
                echo "</span>";
            }
            // line 21
            echo "            (line ";
            echo twig_escape_filter($this->env, (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new Twig_Error_Runtime('Variable "line_number" does not exist.', 21, $this->source); })()), "html", null, true);
            echo ")
        </span>
    ";
        }
        // line 24
        echo "</div>
";
        // line 25
        if (((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array()), false)) : (false))) {
            // line 26
            echo "    <div id=\"trace-html-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 26, $this->source); })()) . "-") . (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 26, $this->source); })())), "html", null, true);
            echo "\" class=\"trace-code sf-toggle-content\">
        ";
            // line 27
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 27, $this->source); })()), "file", array()), twig_get_attribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 27, $this->source); })()), "line", array()), 5), array("#DD0000" => "#183691", "#007700" => "#a71d5d", "#0000BB" => "#222222", "#FF8000" => "#969896"));
            // line 32
            echo "
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  128 => 27,  123 => 26,  121 => 25,  118 => 24,  111 => 21,  103 => 20,  95 => 19,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  76 => 11,  73 => 10,  57 => 8,  55 => 7,  52 => 6,  47 => 4,  42 => 3,  40 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"trace-line-header break-long-words {{ trace.file|default(false) ? 'sf-toggle' }}\" data-toggle-selector=\"#trace-html-{{ prefix }}-{{ i }}\" data-toggle-initial=\"{{ style == 'expanded' ? 'display' }}\">
    {% if trace.file|default(false) %}
        <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square.svg') }}</span>
        <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square.svg') }}</span>
    {% endif %}

    {% if style != 'compact' and trace.function %}
        <span class=\"trace-class\">{{ trace.class|abbr_class }}</span>{% if trace.type is not empty %}<span class=\"trace-type\">{{ trace.type }}</span>{% endif %}<span class=\"trace-method\">{{ trace.function }}</span><span class=\"trace-arguments\">({{ trace.args|format_args }})</span>
    {% endif %}

    {% if trace.file|default(false) %}
        {% set line_number = trace.line|default(1) %}
        {% set file_link = trace.file|file_link(line_number) %}
        {% set file_path = trace.file|format_file(line_number)|striptags|replace({ (' at line ' ~ line_number): '' }) %}
        {% set file_path_parts = file_path|split(constant('DIRECTORY_SEPARATOR')) %}

        <span class=\"block trace-file-path\">
            in
            <a href=\"{{ file_link }}\">{{ file_path_parts[:-1]|join(constant('DIRECTORY_SEPARATOR')) }}{{ constant('DIRECTORY_SEPARATOR') }}<strong>{{ file_path_parts|last }}</strong></a>
            {%- if style == 'compact' and trace.function %}<span class=\"trace-type\">{{ trace.type }}</span><span class=\"trace-method\">{{ trace.function }}</span>{% endif %}
            (line {{ line_number }})
        </span>
    {% endif %}
</div>
{% if trace.file|default(false) %}
    <div id=\"trace-html-{{ prefix ~ '-' ~ i }}\" class=\"trace-code sf-toggle-content\">
        {{ trace.file|file_excerpt(trace.line, 5)|replace({
            '#DD0000': '#183691',
            '#007700': '#a71d5d',
            '#0000BB': '#222222',
            '#FF8000': '#969896'
        })|raw }}
    </div>
{% endif %}
", "@Twig/Exception/trace.html.twig", "/home/eureka/www/suty/PT_ReseauSocialIUT/Test/vendor/symfony/twig-bundle/Resources/views/Exception/trace.html.twig");
    }
}
