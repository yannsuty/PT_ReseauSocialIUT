<?php

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_e547ff392dd54b642f1d517970792d894119f1277175b908fe89092cc8f61201 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->source); })()), "messages", array())) > 0)) {
            // line 7
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->source); })()), "exceptionsCount", array())) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/messenger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->source); })()), "messages", array())), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->source); })()), "buses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 15
                echo "                ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->source); })()), "exceptionsCount", array(0 => $context["bus"]), "method");
                // line 16
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 17
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</b>
                    <span
                        title=\"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new Twig_Error_Runtime('Variable "exceptionsCount" does not exist.', 19, $this->source); })()), "html", null, true);
                echo " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                // line 20
                echo (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new Twig_Error_Runtime('Variable "exceptionsCount" does not exist.', 20, $this->source); })())) ? ("red") : (""));
                echo "\"
                    >
                        ";
                // line 22
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->source); })()), "messages", array(0 => $context["bus"]), "method")), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 27
            echo "
        ";
            // line 28
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => "messenger", "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 28, $this->source); })())));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        echo "<span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->source); })()), "exceptionsCount", array())) ? ("label-status-error") : (""));
        echo "\">
    <span class=\"icon\">";
        // line 34
        echo twig_include($this->env, $context, "@WebProfiler/Icon/messenger.svg");
        echo "</span>
    <strong>Messages</strong>

    <span class=\"count\">
        <span>";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->source); })()), "messages", array())), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_head($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 44
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 115px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item .sf-toggle-content.sf-toggle-visible { display: table-row-group; }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 63
        echo "    ";
        $context["helper"] = $this;
        // line 64
        echo "
    <h2>Messages</h2>

    ";
        // line 67
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 67, $this->source); })()), "messages", array()))) {
            // line 68
            echo "        <div class=\"empty\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } else {
            // line 72
            echo "
    <div class=\"sf-tabs message-bus\">
        <div class=\"tab\">
            ";
            // line 75
            $context["messages"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 75, $this->source); })()), "messages", array());
            // line 76
            echo "            ";
            $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 76, $this->source); })()), "exceptionsCount", array());
            // line 77
            echo "            <h3 class=\"tab-title\">All<span class=\"badge ";
            echo (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new Twig_Error_Runtime('Variable "exceptionsCount" does not exist.', 77, $this->source); })())) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new Twig_Error_Runtime('Variable "exceptionsCount" does not exist.', 77, $this->source); })()) == twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 77, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 77, $this->source); })())), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                ";
            // line 81
            echo $context["helper"]->macro_render_bus_messages((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 81, $this->source); })()), true);
            echo "
            </div>
        </div>

        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 85, $this->source); })()), "buses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 86
                echo "        <div class=\"tab message-bus\">
            ";
                // line 87
                $context["messages"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 87, $this->source); })()), "messages", array(0 => $context["bus"]), "method");
                // line 88
                echo "            ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 88, $this->source); })()), "exceptionsCount", array(0 => $context["bus"]), "method");
                // line 89
                echo "            <h3 class=\"tab-title\">";
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "<span class=\"badge ";
                echo (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new Twig_Error_Runtime('Variable "exceptionsCount" does not exist.', 89, $this->source); })())) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new Twig_Error_Runtime('Variable "exceptionsCount" does not exist.', 89, $this->source); })()) == twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 89, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 89, $this->source); })())), "html", null, true);
                echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 92
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</code> bus</p>
                ";
                // line 93
                echo $context["helper"]->macro_render_bus_messages((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 93, $this->source); })()));
                echo "
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    ";
        }
        // line 98
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 102
            echo "    ";
            $context["discr"] = twig_random($this->env);
            // line 103
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 103, $this->source); })()));
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
            foreach ($context['_seq'] as $context["i"] => $context["dispatchCall"]) {
                // line 104
                echo "    <table class=\"message-item\">
        <thead>
        <tr>
            <th colspan=\"2\" class=\"sf-toggle\"
                data-toggle-selector=\"#message-item-";
                // line 108
                echo twig_escape_filter($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new Twig_Error_Runtime('Variable "discr" does not exist.', 108, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "-details\"
                data-toggle-initial=\"";
                // line 109
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) ? ("display") : (""));
                echo "\"
            >
                <span class=\"dump-inline\">";
                // line 111
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", array()), "type", array()));
                echo "</span>
                ";
                // line 112
                if ((isset($context["showBus"]) || array_key_exists("showBus", $context) ? $context["showBus"] : (function () { throw new Twig_Error_Runtime('Variable "showBus" does not exist.', 112, $this->source); })())) {
                    // line 113
                    echo "                    <span class=\"label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", array()), "html", null, true);
                    echo "</span>
                ";
                }
                // line 115
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", array(), "any", true, true)) {
                    // line 116
                    echo "                    <span class=\"label status-error\">exception</span>
                ";
                }
                // line 118
                echo "                <a class=\"toggle-button\">
                    <span class=\"icon icon-close\">";
                // line 119
                echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
                echo "</span>
                    <span class=\"icon icon-open\">";
                // line 120
                echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
                echo "</span>
                </a>
            </th>
        </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 125
                echo twig_escape_filter($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new Twig_Error_Runtime('Variable "discr" does not exist.', 125, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "-details\" class=\"sf-toggle-content\">
            ";
                // line 126
                if ((isset($context["showBus"]) || array_key_exists("showBus", $context) ? $context["showBus"] : (function () { throw new Twig_Error_Runtime('Variable "showBus" does not exist.', 126, $this->source); })())) {
                    // line 127
                    echo "            <tr>
                <td class=\"text-bold\">Bus</td>
                <td>";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", array()), "html", null, true);
                    echo "</td>
            </tr>
            ";
                }
                // line 132
                echo "            <tr>
                <td class=\"text-bold\">Message</td>
                <td>";
                // line 134
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", array()), "value", array()), 2);
                echo "</td>
            </tr>
            <tr>
                <td class=\"text-bold\">Envelope items</td>
                <td>
                    ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "envelopeItems", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 140
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    echo "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 142
                    echo "                        <span class=\"text-muted\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                </td>
            </tr>
            <tr>
                <td class=\"text-bold\">Result</td>
                <td>
                    ";
                // line 149
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "result", array(), "any", true, true)) {
                    // line 150
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "result", array()), "seek", array(0 => "value"), "method"), 2);
                    echo "
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 151
$context["dispatchCall"], "exception", array(), "any", true, true)) {
                    // line 152
                    echo "                        <span class=\"text-danger\">No result as an exception occurred</span>
                    ";
                }
                // line 154
                echo "                </td>
            </tr>
            ";
                // line 156
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", array(), "any", true, true)) {
                    // line 157
                    echo "            <tr>
                <td class=\"text-bold\">Exception</td>
                <td>
                    ";
                    // line 160
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", array()), "value", array()), 1);
                    echo "
                </td>
            </tr>
            ";
                }
                // line 164
                echo "        </tbody>
    </table>
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
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/messenger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 164,  484 => 160,  479 => 157,  477 => 156,  473 => 154,  469 => 152,  467 => 151,  462 => 150,  460 => 149,  453 => 144,  446 => 142,  438 => 140,  433 => 139,  425 => 134,  421 => 132,  415 => 129,  411 => 127,  409 => 126,  403 => 125,  395 => 120,  391 => 119,  388 => 118,  384 => 116,  381 => 115,  375 => 113,  373 => 112,  369 => 111,  364 => 109,  358 => 108,  352 => 104,  334 => 103,  331 => 102,  312 => 101,  301 => 98,  298 => 97,  288 => 93,  284 => 92,  273 => 89,  270 => 88,  268 => 87,  265 => 86,  261 => 85,  254 => 81,  244 => 77,  241 => 76,  239 => 75,  234 => 72,  228 => 68,  226 => 67,  221 => 64,  218 => 63,  209 => 62,  181 => 44,  172 => 43,  158 => 38,  151 => 34,  146 => 33,  137 => 32,  124 => 28,  121 => 27,  118 => 26,  108 => 22,  103 => 20,  99 => 19,  94 => 17,  91 => 16,  88 => 15,  83 => 14,  81 => 13,  78 => 12,  73 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  50 => 5,  40 => 1,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length > 0 %}
        {% set status_color = collector.exceptionsCount ? 'red' %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/messenger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.messages|length }}</span>
        {% endset %}

        {% set text %}
            {% for bus in collector.buses %}
                {% set exceptionsCount = collector.exceptionsCount(bus) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ bus }}</b>
                    <span
                        title=\"{{ exceptionsCount }} message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-{{ exceptionsCount ? 'red' }}\"
                    >
                        {{ collector.messages(bus)|length }}
                    </span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'messenger', status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label {{ collector.exceptionsCount ? 'label-status-error' }}\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/messenger.svg') }}</span>
    <strong>Messages</strong>

    <span class=\"count\">
        <span>{{ collector.messages|length }}</span>
    </span>
</span>
{% endblock %}

{% block head %}
    {{ parent() }}
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 115px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item .sf-toggle-content.sf-toggle-visible { display: table-row-group; }
    </style>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>Messages</h2>

    {% if collector.messages is empty %}
        <div class=\"empty\">
            <p>No messages have been collected.</p>
        </div>
    {% else %}

    <div class=\"sf-tabs message-bus\">
        <div class=\"tab\">
            {% set messages = collector.messages %}
            {% set exceptionsCount = collector.exceptionsCount %}
            <h3 class=\"tab-title\">All<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                {{ helper.render_bus_messages(messages, true) }}
            </div>
        </div>

        {% for bus in collector.buses %}
        <div class=\"tab message-bus\">
            {% set messages = collector.messages(bus) %}
            {% set exceptionsCount = collector.exceptionsCount(bus) %}
            <h3 class=\"tab-title\">{{ bus }}<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of messages dispatched on the <code>{{ bus }}</code> bus</p>
                {{ helper.render_bus_messages(messages) }}
            </div>
        </div>
        {% endfor %}
    {% endif %}

{% endblock %}

{% macro render_bus_messages(messages, showBus = false) %}
    {% set discr = random() %}
    {% for i, dispatchCall in messages %}
    <table class=\"message-item\">
        <thead>
        <tr>
            <th colspan=\"2\" class=\"sf-toggle\"
                data-toggle-selector=\"#message-item-{{ discr }}-{{ i }}-details\"
                data-toggle-initial=\"{{ loop.first ? 'display' }}\"
            >
                <span class=\"dump-inline\">{{ profiler_dump(dispatchCall.message.type) }}</span>
                {% if showBus %}
                    <span class=\"label\">{{ dispatchCall.bus }}</span>
                {% endif %}
                {% if dispatchCall.exception is defined %}
                    <span class=\"label status-error\">exception</span>
                {% endif %}
                <a class=\"toggle-button\">
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square.svg') }}</span>
                </a>
            </th>
        </tr>
        </thead>
        <tbody id=\"message-item-{{ discr }}-{{ i }}-details\" class=\"sf-toggle-content\">
            {% if showBus %}
            <tr>
                <td class=\"text-bold\">Bus</td>
                <td>{{ dispatchCall.bus }}</td>
            </tr>
            {% endif %}
            <tr>
                <td class=\"text-bold\">Message</td>
                <td>{{ profiler_dump(dispatchCall.message.value, maxDepth=2) }}</td>
            </tr>
            <tr>
                <td class=\"text-bold\">Envelope items</td>
                <td>
                    {% for item in dispatchCall.envelopeItems %}
                        {{ profiler_dump(item) }}
                    {% else %}
                        <span class=\"text-muted\">No items</span>
                    {% endfor %}
                </td>
            </tr>
            <tr>
                <td class=\"text-bold\">Result</td>
                <td>
                    {% if dispatchCall.result is defined %}
                        {{ profiler_dump(dispatchCall.result.seek('value'), maxDepth=2) }}
                    {% elseif dispatchCall.exception is defined %}
                        <span class=\"text-danger\">No result as an exception occurred</span>
                    {% endif %}
                </td>
            </tr>
            {% if dispatchCall.exception is defined %}
            <tr>
                <td class=\"text-bold\">Exception</td>
                <td>
                    {{ profiler_dump(dispatchCall.exception.value, maxDepth=1) }}
                </td>
            </tr>
            {% endif %}
        </tbody>
    </table>
    {% endfor %}
{% endmacro %}
", "@WebProfiler/Collector/messenger.html.twig", "/home/eureka/www/suty/PT_ReseauSocialIUT/Test/vendor/symfony/web-profiler-bundle/Resources/views/Collector/messenger.html.twig");
    }
}
