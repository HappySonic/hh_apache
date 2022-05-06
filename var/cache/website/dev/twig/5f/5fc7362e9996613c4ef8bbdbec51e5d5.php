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

/* @SuluWebsite/Profiler/layout.html.twig */
class __TwigTemplate_2a589976e53b86ee1f7bc03562e417ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Profiler/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Profiler/layout.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@SuluWebsite/Profiler/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 19
        echo "    ";
        $macros["self"] = $this;
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        echo twig_call_macro($macros["self"], "macro_logo", [], 21, $context, $this->getSourceContext());
        echo "
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Portal</b>
            <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "data", [0 => "portal"], "method", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Webspace</b>
            <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "data", [0 => "webspace"], "method", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 33)) {
            // line 34
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Structure</b>
            <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 36), "template", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
        </div>
        ";
        }
        // line 39
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Localization</b>
            <span>
                ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "data", [0 => "localization"], "method", false, false, false, 42), "html", null, true);
        echo "
                ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 43)) {
            // line 44
            echo "                (";
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 44), "shadowOn", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 44), "shadowBaseLanguage", [], "any", false, false, false, 44), "html", null, true))) : (print ("no shadow")));
            echo ")
                ";
        }
        // line 46
        echo "            </span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@SuluWebsite/Profiler/layout.html.twig", 49)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 49, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 53
        $macros["self"] = $this;
        // line 54
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 55
        echo twig_call_macro($macros["self"], "macro_logo", [], 55, $context, $this->getSourceContext());
        echo "</span>
    <strong>Sulu</strong>
</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 61
        echo "    ";
        $macros["self"] = $this;
        // line 62
        echo "    <h2>Webspace</h2>
    <table>
        <tbody>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "data", [0 => "webspace"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 66
            echo "            <tr>
                <th>";
            // line 67
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</th>
                <td>
                ";
            // line 69
            if (twig_test_iterable($context["value"])) {
                // line 70
                echo "                    ";
                echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                echo "
                ";
            } else {
                // line 72
                echo "                    ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                ";
            }
            // line 74
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
    <h2>Portal</h2>
    <table>
        <tbody>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "data", [0 => "portal"], "method", false, false, false, 82));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 83
            echo "            <tr>
                <th>";
            // line 84
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</th>
                <td>
                ";
            // line 86
            if (twig_test_iterable($context["value"])) {
                // line 87
                echo "                    ";
                echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                echo "
                ";
            } else {
                // line 89
                echo "                    ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                ";
            }
            // line 91
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
    </table>
    <h2>Structure</h2>
    ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 97)) {
            // line 98
            echo "    <table>
        <tbody>
            ";
            // line 100
            echo twig_call_macro($macros["self"], "macro_table_row", ["id", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 100), "id", [], "any", false, false, false, 100)], 100, $context, $this->getSourceContext());
            echo "
            ";
            // line 101
            echo twig_call_macro($macros["self"], "macro_table_row", ["path", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 101), "path", [], "any", false, false, false, 101)], 101, $context, $this->getSourceContext());
            echo "
            ";
            // line 102
            echo twig_call_macro($macros["self"], "macro_table_row", ["nodeType", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 102, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 102), "nodeType", [], "any", false, false, false, 102)], 102, $context, $this->getSourceContext());
            echo "
            ";
            // line 103
            echo twig_call_macro($macros["self"], "macro_table_row", ["internal", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 103, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 103), "internal", [], "any", false, false, false, 103)) ? ("yes") : ("no"))], 103, $context, $this->getSourceContext());
            echo "
            ";
            // line 104
            echo twig_call_macro($macros["self"], "macro_table_row", ["nodeState", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 104), "nodeState", [], "any", false, false, false, 104)], 104, $context, $this->getSourceContext());
            echo "
            ";
            // line 105
            echo twig_call_macro($macros["self"], "macro_table_row", ["published", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 105), "published", [], "any", false, false, false, 105), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 105)], 105, $context, $this->getSourceContext());
            echo "
            ";
            // line 106
            echo twig_call_macro($macros["self"], "macro_table_row", ["nodeState", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 106), "nodeState", [], "any", false, false, false, 106)], 106, $context, $this->getSourceContext());
            echo "
            ";
            // line 107
            echo twig_call_macro($macros["self"], "macro_table_row", ["navContexts", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 107), "navContexts", [], "any", false, false, false, 107)], 107, $context, $this->getSourceContext());
            echo "
            ";
            // line 108
            echo twig_call_macro($macros["self"], "macro_table_row", ["shadowLocales", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 108, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 108), "shadowLocales", [], "any", false, false, false, 108)], 108, $context, $this->getSourceContext());
            echo "
            ";
            // line 109
            echo twig_call_macro($macros["self"], "macro_table_row", ["contentLocales", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 109, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 109), "contentLocales", [], "any", false, false, false, 109)], 109, $context, $this->getSourceContext());
            echo "
            ";
            // line 110
            echo twig_call_macro($macros["self"], "macro_table_row", ["shadowOn", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 110, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 110), "shadowOn", [], "any", false, false, false, 110)) ? ("yes") : ("no"))], 110, $context, $this->getSourceContext());
            echo "
            ";
            // line 111
            echo twig_call_macro($macros["self"], "macro_table_row", ["shadowBaseLanguage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 111, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 111), "shadowBaseLanguage", [], "any", false, false, false, 111)], 111, $context, $this->getSourceContext());
            echo "
            ";
            // line 112
            echo twig_call_macro($macros["self"], "macro_table_row", ["template", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 112), "template", [], "any", false, false, false, 112)], 112, $context, $this->getSourceContext());
            echo "
            ";
            // line 113
            echo twig_call_macro($macros["self"], "macro_table_row", ["has children", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 113), "hasSub", [], "any", false, false, false, 113)) ? ("yes") : ("no"))], 113, $context, $this->getSourceContext());
            echo "
            ";
            // line 114
            echo twig_call_macro($macros["self"], "macro_table_row", ["creator", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 114, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 114), "creator", [], "any", false, false, false, 114)], 114, $context, $this->getSourceContext());
            echo "
            ";
            // line 115
            echo twig_call_macro($macros["self"], "macro_table_row", ["changer", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 115, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 115), "changer", [], "any", false, false, false, 115)], 115, $context, $this->getSourceContext());
            echo "
            ";
            // line 116
            echo twig_call_macro($macros["self"], "macro_table_row", ["created", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 116, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 116), "created", [], "any", false, false, false, 116), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 116)], 116, $context, $this->getSourceContext());
            echo "
            ";
            // line 117
            echo twig_call_macro($macros["self"], "macro_table_row", ["changed", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "data", [0 => "structure"], "method", false, false, false, 117), "changed", [], "any", false, false, false, 117), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 117)], 117, $context, $this->getSourceContext());
            echo "
        </tbody>
    </table>
    ";
        } else {
            // line 121
            echo "        No structure was found.
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function macro_logo(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "logo"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "logo"));

            // line 4
            echo "    <?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
        <title>Artboard</title>
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <g id=\"Artboard\" fill=\"#FFFFFF\">
                <path d=\"M23.8841274,12.750735 C24.1025274,12.394735 24.0041274,11.902735 23.6665274,11.657135 L17.9913274,7.53393504 C17.6537274,7.28833504 17.3417274,6.74753504 17.2977274,6.33233504 L16.9009274,2.55153504 C16.8577274,2.13633504 16.4977274,1.90513504 16.1017274,2.03713504 L0.51612745,7.24913504 C0.12012745,7.38193504 -0.0942725502,7.81313504 0.0401274498,8.20913504 L2.99132745,16.899535 C3.12572745,17.294735 3.56972745,17.690735 3.97772745,17.778735 L18.0929274,20.830735 C18.5009274,20.918735 19.0137274,20.699535 19.2313274,20.343535 L23.8841274,12.750735 L23.8841274,12.750735 Z M11.0425274,8.89153504 C10.7961274,9.22913504 10.2609274,9.43153504 9.85292745,9.34193504 L3.22572745,7.88433504 C2.81772745,7.79473504 2.80812745,7.61313504 3.20412745,7.48033504 L14.2153274,3.79793504 C14.6113274,3.66513504 14.7337274,3.83313504 14.4881274,4.17073504 L11.0425274,8.89153504 L11.0425274,8.89153504 Z M15.5241274,4.56913504 C15.7705274,4.23153504 16.0073274,4.29553504 16.0513274,4.71073504 L17.4057274,17.626735 C17.4489274,18.041935 17.2841274,18.105135 17.0393274,17.766735 L11.9305274,10.717935 C11.6857274,10.379535 11.6865274,9.82753504 11.9329274,9.48993504 L15.5241274,4.56913504 L15.5241274,4.56913504 Z M1.53372745,9.27393504 C1.39932745,8.87873504 1.62332745,8.62833504 2.03132745,8.71793504 L9.76652745,10.419535 C10.1745274,10.509135 10.7089274,10.859535 10.9537274,11.197135 L16.5249274,18.882735 C16.7697274,19.221135 16.6369274,19.425135 16.2281274,19.336335 L4.79692745,16.860335 C4.38892745,16.771535 3.94492745,16.376335 3.81052745,15.980335 L1.53372745,9.27393504 L1.53372745,9.27393504 Z M17.6065274,9.27713504 C17.5633274,8.86193504 17.8041274,8.72273504 18.1417274,8.96833504 L22.2353274,11.942735 C22.5729274,12.188335 22.6713274,12.680335 22.4529274,13.036335 L19.0481274,18.601135 C18.8305274,18.957135 18.6161274,18.909135 18.5729274,18.493935 L17.6065274,9.27713504 L17.6065274,9.27713504 Z\" id=\"Shape\"></path>
            </g>
        </g>
    </svg>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 125
    public function macro_table_row($__field__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_row"));

            // line 126
            echo "    <tr>
        <th>";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 127, $this->source); })()), "html", null, true);
            echo "</th>
        <td>
        ";
            // line 129
            if (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 129, $this->source); })()))) {
                // line 130
                echo "            ";
                echo twig_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 130, $this->source); })())), "html", null, true);
                echo "
        ";
            } else {
                // line 132
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 132, $this->source); })()), "html", null, true);
                echo "
        ";
            }
            // line 134
            echo "    </tr>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SuluWebsite/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 134,  449 => 132,  443 => 130,  441 => 129,  436 => 127,  433 => 126,  413 => 125,  386 => 4,  368 => 3,  356 => 121,  349 => 117,  345 => 116,  341 => 115,  337 => 114,  333 => 113,  329 => 112,  325 => 111,  321 => 110,  317 => 109,  313 => 108,  309 => 107,  305 => 106,  301 => 105,  297 => 104,  293 => 103,  289 => 102,  285 => 101,  281 => 100,  277 => 98,  275 => 97,  270 => 94,  262 => 91,  256 => 89,  250 => 87,  248 => 86,  243 => 84,  240 => 83,  236 => 82,  229 => 77,  221 => 74,  215 => 72,  209 => 70,  207 => 69,  202 => 67,  199 => 66,  195 => 65,  190 => 62,  187 => 61,  177 => 60,  163 => 55,  160 => 54,  158 => 53,  148 => 52,  137 => 49,  132 => 46,  126 => 44,  124 => 43,  120 => 42,  115 => 39,  109 => 36,  105 => 34,  103 => 33,  98 => 31,  91 => 27,  87 => 25,  85 => 24,  82 => 23,  76 => 21,  73 => 20,  70 => 19,  60 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% macro logo() %}
    <?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
        <title>Artboard</title>
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <g id=\"Artboard\" fill=\"#FFFFFF\">
                <path d=\"M23.8841274,12.750735 C24.1025274,12.394735 24.0041274,11.902735 23.6665274,11.657135 L17.9913274,7.53393504 C17.6537274,7.28833504 17.3417274,6.74753504 17.2977274,6.33233504 L16.9009274,2.55153504 C16.8577274,2.13633504 16.4977274,1.90513504 16.1017274,2.03713504 L0.51612745,7.24913504 C0.12012745,7.38193504 -0.0942725502,7.81313504 0.0401274498,8.20913504 L2.99132745,16.899535 C3.12572745,17.294735 3.56972745,17.690735 3.97772745,17.778735 L18.0929274,20.830735 C18.5009274,20.918735 19.0137274,20.699535 19.2313274,20.343535 L23.8841274,12.750735 L23.8841274,12.750735 Z M11.0425274,8.89153504 C10.7961274,9.22913504 10.2609274,9.43153504 9.85292745,9.34193504 L3.22572745,7.88433504 C2.81772745,7.79473504 2.80812745,7.61313504 3.20412745,7.48033504 L14.2153274,3.79793504 C14.6113274,3.66513504 14.7337274,3.83313504 14.4881274,4.17073504 L11.0425274,8.89153504 L11.0425274,8.89153504 Z M15.5241274,4.56913504 C15.7705274,4.23153504 16.0073274,4.29553504 16.0513274,4.71073504 L17.4057274,17.626735 C17.4489274,18.041935 17.2841274,18.105135 17.0393274,17.766735 L11.9305274,10.717935 C11.6857274,10.379535 11.6865274,9.82753504 11.9329274,9.48993504 L15.5241274,4.56913504 L15.5241274,4.56913504 Z M1.53372745,9.27393504 C1.39932745,8.87873504 1.62332745,8.62833504 2.03132745,8.71793504 L9.76652745,10.419535 C10.1745274,10.509135 10.7089274,10.859535 10.9537274,11.197135 L16.5249274,18.882735 C16.7697274,19.221135 16.6369274,19.425135 16.2281274,19.336335 L4.79692745,16.860335 C4.38892745,16.771535 3.94492745,16.376335 3.81052745,15.980335 L1.53372745,9.27393504 L1.53372745,9.27393504 Z M17.6065274,9.27713504 C17.5633274,8.86193504 17.8041274,8.72273504 18.1417274,8.96833504 L22.2353274,11.942735 C22.5729274,12.188335 22.6713274,12.680335 22.4529274,13.036335 L19.0481274,18.601135 C18.8305274,18.957135 18.6161274,18.909135 18.5729274,18.493935 L17.6065274,9.27713504 L17.6065274,9.27713504 Z\" id=\"Shape\"></path>
            </g>
        </g>
    </svg>
{% endmacro %}

{% block toolbar %}
    {% import _self as self %}
    {% set icon %}
        {{ self.logo }}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Portal</b>
            <span>{{ collector.data('portal').name }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Webspace</b>
            <span>{{ collector.data('webspace').name }}</span>
        </div>
        {% if collector.data('structure') %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Structure</b>
            <span>{{ collector.data('structure').template }}</span>
        </div>
        {% endif %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Localization</b>
            <span>
                {{ collector.data('localization') }}
                {% if collector.data('structure') %}
                ({{ collector.data('structure').shadowOn ? collector.data('structure').shadowBaseLanguage : 'no shadow' }})
                {% endif %}
            </span>
        </div>
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
{% import _self as self %}
<span class=\"label\">
    <span class=\"icon\">{{ self.logo }}</span>
    <strong>Sulu</strong>
</span>
{% endblock %}

{% block panel %}
    {% import _self as self %}
    <h2>Webspace</h2>
    <table>
        <tbody>
            {% for field, value in collector.data('webspace') %}
            <tr>
                <th>{{ field }}</th>
                <td>
                {% if value is iterable %}
                    {{ value|json_encode }}
                {% else %}
                    {{ value }}
                {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <h2>Portal</h2>
    <table>
        <tbody>
            {% for field, value in collector.data('portal') %}
            <tr>
                <th>{{ field }}</th>
                <td>
                {% if value is iterable %}
                    {{ value|json_encode }}
                {% else %}
                    {{ value }}
                {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <h2>Structure</h2>
    {% if collector.data('structure') %}
    <table>
        <tbody>
            {{ self.table_row('id', collector.data('structure').id) }}
            {{ self.table_row('path', collector.data('structure').path) }}
            {{ self.table_row('nodeType', collector.data('structure').nodeType) }}
            {{ self.table_row('internal', collector.data('structure').internal ? 'yes' : 'no') }}
            {{ self.table_row('nodeState', collector.data('structure').nodeState) }}
            {{ self.table_row('published', collector.data('structure').published.format('Y-m-d H:i:s')) }}
            {{ self.table_row('nodeState', collector.data('structure').nodeState) }}
            {{ self.table_row('navContexts', collector.data('structure').navContexts) }}
            {{ self.table_row('shadowLocales', collector.data('structure').shadowLocales) }}
            {{ self.table_row('contentLocales', collector.data('structure').contentLocales) }}
            {{ self.table_row('shadowOn', collector.data('structure').shadowOn ? 'yes' : 'no') }}
            {{ self.table_row('shadowBaseLanguage', collector.data('structure').shadowBaseLanguage) }}
            {{ self.table_row('template', collector.data('structure').template) }}
            {{ self.table_row('has children', collector.data('structure').hasSub ? 'yes' : 'no') }}
            {{ self.table_row('creator', collector.data('structure').creator) }}
            {{ self.table_row('changer', collector.data('structure').changer) }}
            {{ self.table_row('created', collector.data('structure').created.format('Y-m-d H:i:s')) }}
            {{ self.table_row('changed', collector.data('structure').changed.format('Y-m-d H:i:s')) }}
        </tbody>
    </table>
    {% else %}
        No structure was found.
    {% endif %}
{% endblock %}

{% macro table_row(field, value) %}
    <tr>
        <th>{{ field }}</th>
        <td>
        {% if value is iterable %}
            {{ value | json_encode }}
        {% else %}
            {{ value }}
        {% endif %}
    </tr>
{% endmacro %}
", "@SuluWebsite/Profiler/layout.html.twig", "/home/mrmidi/highhack/highhack2/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Profiler/layout.html.twig");
    }
}
