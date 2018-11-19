<?php

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_5dde049c8dfdbafe295c86658b57331eac2d71b2f03e594599d1d284cefa8105 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        // line 1
        echo "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 5, $this->source); })()), "route", array())) ? (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 5, $this->source); })()), "route", array())) : ("(none)")), "html", null, true);
        echo "</span>
        <span class=\"label\">Matched route</span>
    </div>

    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 9, $this->source); })()), "route", array())) {
            // line 10
            echo "        <div class=\"metric\">
            <span class=\"value\">";
            // line 11
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new Twig_Error_Runtime('Variable "traces" does not exist.', 11, $this->source); })())), "html", null, true);
            echo "</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    ";
        }
        // line 15
        echo "</div>

";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 17, $this->source); })()), "route", array())) {
            // line 18
            echo "    <h3>Route Parameters</h3>

    ";
            // line 20
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 20, $this->source); })()), "routeParams", array()))) {
                // line 21
                echo "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 25
                echo "        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 25, $this->source); })()), "routeParams", array()), "labels" => array(0 => "Name", 1 => "Value")), false);
                echo "
    ";
            }
        }
        // line 28
        echo "
";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new Twig_Error_Runtime('Variable "router" does not exist.', 29, $this->source); })()), "redirect", array())) {
            // line 30
            echo "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new Twig_Error_Runtime('Variable "router" does not exist.', 34, $this->source); })()), "targetUrl", array()), "html", null, true);
            echo "
        ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new Twig_Error_Runtime('Variable "router" does not exist.', 35, $this->source); })()), "targetRoute", array())) {
                echo "<span class=\"text-muted\">(route: \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new Twig_Error_Runtime('Variable "router" does not exist.', 35, $this->source); })()), "targetRoute", array()), "html", null, true);
                echo "\")</span>";
            }
            // line 36
            echo "    </div>
";
        }
        // line 38
        echo "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 42, $this->source); })()), "pathinfo", array()), "html", null, true);
        echo "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new Twig_Error_Runtime('Variable "traces" does not exist.', 55, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 56
            echo "        <tr class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["trace"], "level", array()) == 1)) ? ("status-warning") : ((((twig_get_attribute($this->env, $this->source, $context["trace"], "level", array()) == 2)) ? ("status-success") : (""))));
            echo "\">
            <td class=\"font-normal text-muted nowrap\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
            echo "</td>
            <td class=\"break-long-words\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "name", array()), "html", null, true);
            echo "</td>
            <td class=\"break-long-words\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "path", array()), "html", null, true);
            echo "</td>
            <td class=\"font-normal\">
                ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["trace"], "level", array()) == 1)) {
                // line 62
                echo "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "log", array()), "html", null, true);
                echo "</span>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 64
$context["trace"], "level", array()) == 2)) {
                // line 65
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "log", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 67
                echo "                    Path does not match
                ";
            }
            // line 69
            echo "            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Router/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 72,  182 => 69,  178 => 67,  172 => 65,  170 => 64,  166 => 63,  163 => 62,  161 => 61,  156 => 59,  152 => 58,  148 => 57,  143 => 56,  126 => 55,  110 => 42,  104 => 38,  100 => 36,  94 => 35,  90 => 34,  84 => 30,  82 => 29,  79 => 28,  72 => 25,  66 => 21,  64 => 20,  60 => 18,  58 => 17,  54 => 15,  47 => 11,  44 => 10,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">{{ request.route ?: '(none)' }}</span>
        <span class=\"label\">Matched route</span>
    </div>

    {% if request.route %}
        <div class=\"metric\">
            <span class=\"value\">{{ traces|length }}</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    {% endif %}
</div>

{% if request.route %}
    <h3>Route Parameters</h3>

    {% if request.routeParams is empty %}
        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: request.routeParams, labels: ['Name', 'Value'] }, with_context = false) }}
    {% endif %}
{% endif %}

{% if router.redirect %}
    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        {{ router.targetUrl }}
        {% if router.targetRoute %}<span class=\"text-muted\">(route: \"{{ router.targetRoute }}\")</span>{% endif %}
    </div>
{% endif %}

<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>{{ request.pathinfo }}</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    {% for trace in traces %}
        <tr class=\"{{ trace.level == 1 ? 'status-warning' : trace.level == 2 ? 'status-success' }}\">
            <td class=\"font-normal text-muted nowrap\">{{ loop.index }}</td>
            <td class=\"break-long-words\">{{ trace.name }}</td>
            <td class=\"break-long-words\">{{ trace.path }}</td>
            <td class=\"font-normal\">
                {% if trace.level == 1 %}
                    Path almost matches, but
                    <span class=\"newline\">{{ trace.log }}</span>
                {% elseif trace.level == 2 %}
                    {{ trace.log }}
                {% else %}
                    Path does not match
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
", "@WebProfiler/Router/panel.html.twig", "/home/eureka/www/suty/PT_ReseauSocialIUT/Test/vendor/symfony/web-profiler-bundle/Resources/views/Router/panel.html.twig");
    }
}
