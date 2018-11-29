<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_c783157b7b4cc756f166e8be3902b6834a68ccb22b80851b73d1169a1c095b3b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        echo "<div class=\"exception-summary ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->source); })()), "message", array()))) ? ("exception-without-message") : (""));
        echo "\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 5, $this->source); })()), "allPrevious", array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 6
            echo "                    ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, $context["previousException"], "class", array()));
            echo "
                    <span class=\"icon\">";
            // line 7
            echo twig_include($this->env, $context, "@Twig/images/chevron-right.svg");
            echo "</span>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 9, $this->source); })()), "class", array()));
        echo "
            </h2>
            <h2 class=\"exception-http\">
                HTTP ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message ";
        // line 19
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 19, $this->source); })()), "message", array())) > 180)) ? ("long") : (""));
        echo "\">";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 20, $this->source); })()), "message", array()), "html", null, true)));
        // line 21
        echo "</h1>

            <div class=\"exception-illustration hidden-xs-down\">
                ";
        // line 24
        echo twig_include($this->env, $context, "@Twig/images/symfony-ghost.svg");
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            ";
        // line 33
        $context["exception_as_array"] = twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 33, $this->source); })()), "toarray", array());
        // line 34
        echo "            ";
        $context["_exceptions_with_user_code"] = array();
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["e"], "trace", array()));
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
                // line 37
                echo "                    ";
                if (((( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", array())) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", array()))) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                    // line 38
                    echo "                        ";
                    $context["_exceptions_with_user_code"] = twig_array_merge((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 38, $this->source); })()), array(0 => $context["i"]));
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "                ";
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
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <h3 class=\"tab-title\">
                ";
        // line 43
        if ((twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 43, $this->source); })())) > 1)) {
            // line 44
            echo "                    Exceptions <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 44, $this->source); })())), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 46
            echo "                    Exception
                ";
        }
        // line 48
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 51, $this->source); })()));
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
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 52
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces.html.twig", array("exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "expand" => (twig_in_filter($context["i"], (isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 52, $this->source); })())) || (twig_test_empty((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 52, $this->source); })())) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())))), false);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>

        ";
        // line 57
        if ((isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "        <div class=\"tab ";
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 58, $this->source); })()), "logs", array()))) ? ("disabled") : (""));
            echo "\">
            <h3 class=\"tab-title\">
                Logs
                ";
            // line 61
            if ((((twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", array())))) ? (twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", array())) : (false))) {
                echo "<span class=\"badge status-error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 61, $this->source); })()), "counterrors", array()), "html", null, true);
                echo "</span>";
            }
            // line 62
            echo "            </h3>

            <div class=\"tab-content\">
                ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 65, $this->source); })()), "logs", array())) {
                // line 66
                echo "                    ";
                echo twig_include($this->env, $context, "@Twig/Exception/logs.html.twig", array("logs" => twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 66, $this->source); })()), "logs", array())), false);
                echo "
                ";
            } else {
                // line 68
                echo "                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                ";
            }
            // line 72
            echo "            </div>
        </div>
        ";
        }
        // line 75
        echo "
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                ";
        // line 78
        if ((twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 78, $this->source); })())) > 1)) {
            // line 79
            echo "                    Stack Traces <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 79, $this->source); })())), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 81
            echo "                    Stack Trace
                ";
        }
        // line 83
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 86, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 87
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces_text.html.twig", array("exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "num_exceptions" => twig_get_attribute($this->env, $this->source, $context["loop"], "length", array())), false);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </div>
        </div>

        ";
        // line 92
        if ( !twig_test_empty((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new Twig_Error_Runtime('Variable "currentContent" does not exist.', 92, $this->source); })()))) {
            // line 93
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                ";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new Twig_Error_Runtime('Variable "currentContent" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 101
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 101,  340 => 97,  334 => 93,  332 => 92,  327 => 89,  310 => 87,  293 => 86,  288 => 83,  284 => 81,  278 => 79,  276 => 78,  271 => 75,  266 => 72,  260 => 68,  254 => 66,  252 => 65,  247 => 62,  241 => 61,  234 => 58,  232 => 57,  227 => 54,  210 => 52,  193 => 51,  188 => 48,  184 => 46,  178 => 44,  176 => 43,  173 => 42,  167 => 41,  153 => 40,  150 => 39,  147 => 38,  144 => 37,  126 => 36,  121 => 35,  118 => 34,  116 => 33,  104 => 24,  99 => 21,  97 => 20,  94 => 19,  82 => 12,  75 => 9,  59 => 7,  54 => 6,  37 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"exception-summary {{ exception.message is empty ? 'exception-without-message' }}\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                {% for previousException in exception.allPrevious|reverse %}
                    {{ previousException.class|abbr_class }}
                    <span class=\"icon\">{{ include('@Twig/images/chevron-right.svg') }}</span>
                {% endfor %}
                {{ exception.class|abbr_class }}
            </h2>
            <h2 class=\"exception-http\">
                HTTP {{ status_code }} <small>{{ status_text }}</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message {{ exception.message|length > 180 ? 'long' }}\">
                {{- exception.message|nl2br|format_file_from_text -}}
            </h1>

            <div class=\"exception-illustration hidden-xs-down\">
                {{ include('@Twig/images/symfony-ghost.svg') }}
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            {% set exception_as_array = exception.toarray %}
            {% set _exceptions_with_user_code = [] %}
            {% for i, e in exception_as_array %}
                {% for trace in e.trace %}
                    {% if (trace.file is not empty) and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and not loop.last %}
                        {% set _exceptions_with_user_code = _exceptions_with_user_code|merge([i]) %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Exceptions <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Exception
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for i, e in exception_as_array %}
                    {{ include('@Twig/Exception/traces.html.twig', { exception: e, index: loop.index, expand: i in _exceptions_with_user_code or (_exceptions_with_user_code is empty and loop.first) }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if logger %}
        <div class=\"tab {{ logger.logs is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">
                Logs
                {% if logger.counterrors ?? false %}<span class=\"badge status-error\">{{ logger.counterrors }}</span>{% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if logger.logs %}
                    {{ include('@Twig/Exception/logs.html.twig', { logs: logger.logs }, with_context = false)  }}
                {% else %}
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                {% endif %}
            </div>
        </div>
        {% endif %}

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Stack Traces <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Stack Trace
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for e in exception_as_array %}
                    {{ include('@Twig/Exception/traces_text.html.twig', { exception: e, index: loop.index, num_exceptions: loop.length }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if currentContent is not empty %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                {{ currentContent }}
            </div>
        </div>
        {% endif %}
    </div>
</div>
", "@Twig/Exception/exception.html.twig", "/home/eureka/www/PT_ReseauSocialIUT/Symfony/my_project/vendor/symfony/twig-bundle/Resources/views/Exception/exception.html.twig");
    }
}
