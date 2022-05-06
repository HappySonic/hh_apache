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

/* @DoctrinePHPCR/Collector/phpcr.html.twig */
class __TwigTemplate_4d3781fef0bd4cb97c3f046b16e64beb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrinePHPCR/Collector/phpcr.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrinePHPCR/Collector/phpcr.html.twig"));

        // line 2
        $macros["phpcr"] = $this->macros["phpcr"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrinePHPCR/Collector/phpcr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "callcount", [], "any", false, false, false, 5) > 0)) {
            // line 6
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 6, $this->source); })()), 1)) : (1));
            // line 7
            echo "
        ";
            // line 8
            ob_start();
            // line 9
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 9, $this->source); })()) == 1)) {
                // line 10
                echo "                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN5JREFUeNpiZAACe3v7+UAqgYF0kHjw4MEFyAJMUFqBgTyAoY+JgcqABUo3AvEHIBYgQe8DIF6ALsiISzUwXN9DLQBZpAgMqw9QcZA3z2OxvBGopgGflwWQaAO0cMPmE3uahiE2sAHmZaBXDiCJX0CSQwYTsYYhMIzWkxA5jWiWoboQaJgDkAogwYcHgfgATdMhuoEXoJgY8AHddYTS4XqkSAkk14XIABSW4DCFhi3FBlIlDNHDCEYTG65Y0yEoa9WjFU0foGnuAjk5JQFHYXuRGJfSJQwfEAhTvAAgwAArLzncFel3VAAAAABJRU5ErkJggg==\" />
                <span class=\"sf-toolbar-status";
                // line 11
                if ((50 < twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "callcount", [], "any", false, false, false, 11))) {
                    echo " sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "callcount", [], "any", false, false, false, 11), "html", null, true);
                echo "</span>
                ";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "callcount", [], "any", false, false, false, 12) > 0)) {
                    // line 13
                    echo "                    <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 13, $this->source); })()), "time", [], "any", false, false, false, 13) * 1000)), "html", null, true);
                    echo " ms</span>
                ";
                }
                // line 15
                echo "            ";
            } else {
                // line 16
                echo "                    ";
                $context["status"] = (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "callcount", [], "any", false, false, false, 16) > 50)) ? ("yellow") : (""));
                // line 17
                echo "
                    ";
                // line 18
                echo twig_include($this->env, $context, "@DoctrinePHPCR/Collector/icon.svg");
                echo "

                    <span class=\"sf-toolbar-value\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "callcount", [], "any", false, false, false, 20), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                // line 23
                echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "time", [], "any", false, false, false, 23) * 1000)), "html", null, true);
                echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
            ";
            }
            // line 27
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 28
            echo "
        ";
            // line 29
            ob_start();
            // line 30
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>PHPCR Calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "callcount", [], "any", false, false, false, 32), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Call time</b>
                <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "time", [], "any", false, false, false, 36) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            echo "
        ";
            // line 40
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 40, $this->source); })()), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 40, $this->source); })()), "")) : (""))]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 45
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 45, $this->source); })()), 1)) : (1));
        // line 46
        echo "
    ";
        // line 47
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 47, $this->source); })()) == 1)) {
            // line 48
            echo "        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>PHPCR</strong>
            <span class=\"count\">
                <span>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "callcount", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
                <span>";
            // line 53
            echo twig_escape_filter($this->env, twig_sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "time", [], "any", false, false, false, 53) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>
    ";
        } else {
            // line 57
            echo "        <span class=\"label ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "callcount", [], "any", false, false, false, 57) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 58
            echo twig_include($this->env, $context, "@DoctrinePHPCR/Collector/icon.svg");
            echo "</span>
            <strong>PHPCR</strong>
        </span>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 65
        echo "    <h2>Calls</h2>

    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "calls", [], "any", false, false, false, 67));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["calls"]) {
            // line 68
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "connections", [], "any", false, false, false, 68)) > 1)) {
                // line 69
                echo "            <h3>Connection <em>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo "</em></h3>
        ";
            }
            // line 71
            echo "
        ";
            // line 72
            if (twig_test_empty($context["calls"])) {
                // line 73
                echo "            <div class=\"empty\">
                <p>No calls.</p>
            </div>
        ";
            } else {
                // line 77
                echo "            <table class=\"alt\" id=\"callsPlaceholder-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 77), "html", null, true);
                echo "\">
                <thead>
                <tr>
                    <th onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 80), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                    <th onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 81), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85), "html", null, true);
                echo "\">
                ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["calls"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["call"]) {
                    // line 87
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 87), "loop", [], "any", false, false, false, 87), "index", [], "any", false, false, false, 87), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
                    echo "\">
                        <td>";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 88), "html", null, true);
                    echo "</td>
                        <td class=\"nowrap\">";
                    // line 89
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["call"], "executionMS", [], "any", false, false, false, 89) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                        <td>
                            ";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["call"], "method", [], "any", false, false, false, 91);
                    echo "<br>

                            <strong class=\"font-normal text-small\">Parameters:</strong>
                            ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, $context["call"], "params", [], "any", false, false, false, 94)), "html", null, true);
                    echo " <br>
                            <strong class=\"font-normal text-small\">Environment:</strong>
                            ";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, $context["call"], "env", [], "any", false, false, false, 96)), "html", null, true);
                    echo " <br>
                            ";
                    // line 97
                    if (twig_get_attribute($this->env, $this->source, $context["call"], "caller", [], "any", true, true, false, 97)) {
                        // line 98
                        echo "                                <strong class=\"font-normal text-small\">Callers</strong>
                                <ul>
                                    ";
                        // line 100
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["call"], "caller", [], "any", false, false, false, 100));
                        foreach ($context['_seq'] as $context["_key"] => $context["caller"]) {
                            // line 101
                            echo "                                        <li> - ";
                            echo twig_escape_filter($this->env, $context["caller"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caller'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 103
                        echo "                                </ul>
                            ";
                    }
                    // line 105
                    echo "                        </td>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                </tbody>
            </table>
        ";
            }
            // line 111
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['calls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
    <h2>Database Connections</h2>
    ";
        // line 114
        echo twig_call_macro($macros["phpcr"], "macro_key_value_table", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 114, $this->source); })()), "connections", [], "any", false, false, false, 114), "Name", "Service", "No connections"], 114, $context, $this->getSourceContext());
        echo "

    <h2>Document Managers</h2>
    ";
        // line 117
        echo twig_call_macro($macros["phpcr"], "macro_key_value_table", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "managers", [], "any", false, false, false, 117), "Name", "Service", "No document managers"], 117, $context, $this->getSourceContext());
        echo "

    <h2>Document Mapping</h2>

    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "documents", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 122
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "managers", [], "any", false, false, false, 122)) > 1)) {
                // line 123
                echo "            <h3>Manager <small>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo "</small></h3>
        ";
            }
            // line 125
            echo "
        ";
            // line 126
            if (twig_test_empty($context["classes"])) {
                // line 127
                echo "            <div class=\"empty\">
                <p>No loaded documents.</p>
            </div>
        ";
            } else {
                // line 131
                echo "            <table>
                <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                    </tr>
                </thead>

                <tbody>
                ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 140
                    echo "                    <tr>
                        <td>";
                    // line 141
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                </tbody>
            </table>
        ";
            }
            // line 147
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function macro_key_value_table($__rows__ = null, $__key_label__ = null, $__value_label__ = null, $__empty_message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "rows" => $__rows__,
            "key_label" => $__key_label__,
            "value_label" => $__value_label__,
            "empty_message" => $__empty_message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "key_value_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "key_value_table"));

            // line 152
            echo "    ";
            if ((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 152, $this->source); })())) {
                // line 153
                echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\" >";
                // line 156
                echo twig_escape_filter($this->env, ((array_key_exists("key_label", $context)) ? (_twig_default_filter((isset($context["key_label"]) || array_key_exists("key_label", $context) ? $context["key_label"] : (function () { throw new RuntimeError('Variable "key_label" does not exist.', 156, $this->source); })()), "Key")) : ("Key")), "html", null, true);
                echo "</th>
                    <th scope=\"col\" >";
                // line 157
                echo twig_escape_filter($this->env, ((array_key_exists("value_label", $context)) ? (_twig_default_filter((isset($context["value_label"]) || array_key_exists("value_label", $context) ? $context["value_label"] : (function () { throw new RuntimeError('Variable "value_label" does not exist.', 157, $this->source); })()), "Value")) : ("Value")), "html", null, true);
                echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
                // line 161
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 161, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 162
                    echo "                <tr>
                    <th scope=\"row\" >";
                    // line 163
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 164
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "            </tbody>
        </table>
    ";
            } else {
                // line 170
                echo "        <div class=\"empty\">
            <p>";
                // line 171
                echo twig_escape_filter($this->env, ((array_key_exists("empty_message", $context)) ? (_twig_default_filter((isset($context["empty_message"]) || array_key_exists("empty_message", $context) ? $context["empty_message"] : (function () { throw new RuntimeError('Variable "empty_message" does not exist.', 171, $this->source); })()), "No data")) : ("No data")), "html", null, true);
                echo ".</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@DoctrinePHPCR/Collector/phpcr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 171,  562 => 170,  557 => 167,  548 => 164,  544 => 163,  541 => 162,  537 => 161,  530 => 157,  526 => 156,  521 => 153,  518 => 152,  496 => 151,  482 => 147,  477 => 144,  468 => 141,  465 => 140,  461 => 139,  451 => 131,  445 => 127,  443 => 126,  440 => 125,  434 => 123,  431 => 122,  427 => 121,  420 => 117,  414 => 114,  410 => 112,  396 => 111,  391 => 108,  375 => 105,  371 => 103,  362 => 101,  358 => 100,  354 => 98,  352 => 97,  348 => 96,  343 => 94,  337 => 91,  332 => 89,  328 => 88,  319 => 87,  302 => 86,  298 => 85,  291 => 81,  287 => 80,  280 => 77,  274 => 73,  272 => 72,  269 => 71,  263 => 69,  260 => 68,  243 => 67,  239 => 65,  229 => 64,  214 => 58,  209 => 57,  202 => 53,  198 => 52,  192 => 48,  190 => 47,  187 => 46,  184 => 45,  174 => 44,  161 => 40,  158 => 39,  152 => 36,  145 => 32,  141 => 30,  139 => 29,  136 => 28,  133 => 27,  126 => 23,  120 => 20,  115 => 18,  112 => 17,  109 => 16,  106 => 15,  100 => 13,  98 => 12,  90 => 11,  87 => 10,  84 => 9,  82 => 8,  79 => 7,  76 => 6,  73 => 5,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}
{% import _self as phpcr %}

{% block toolbar %}
    {% if collector.callcount > 0 %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN5JREFUeNpiZAACe3v7+UAqgYF0kHjw4MEFyAJMUFqBgTyAoY+JgcqABUo3AvEHIBYgQe8DIF6ALsiISzUwXN9DLQBZpAgMqw9QcZA3z2OxvBGopgGflwWQaAO0cMPmE3uahiE2sAHmZaBXDiCJX0CSQwYTsYYhMIzWkxA5jWiWoboQaJgDkAogwYcHgfgATdMhuoEXoJgY8AHddYTS4XqkSAkk14XIABSW4DCFhi3FBlIlDNHDCEYTG65Y0yEoa9WjFU0foGnuAjk5JQFHYXuRGJfSJQwfEAhTvAAgwAArLzncFel3VAAAAABJRU5ErkJggg==\" />
                <span class=\"sf-toolbar-status{% if 50 < collector.callcount %} sf-toolbar-status-yellow{% endif %}\">{{ collector.callcount }}</span>
                {% if collector.callcount > 0 %}
                    <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                {% endif %}
            {% else %}
                    {% set status = collector.callcount > 50 ? 'yellow' %}

                    {{ include('@DoctrinePHPCR/Collector/icon.svg') }}

                    <span class=\"sf-toolbar-value\">{{ collector.callcount }}</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>PHPCR Calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.callcount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Call time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>PHPCR</strong>
            <span class=\"count\">
                <span>{{ collector.callcount }}</span>
                <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
            </span>
        </span>
    {% else %}
        <span class=\"label {{ collector.callcount == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@DoctrinePHPCR/Collector/icon.svg') }}</span>
            <strong>PHPCR</strong>
        </span>
    {% endif %}
{% endblock %}

{% block panel %}
    <h2>Calls</h2>

    {% for connection, calls in collector.calls %}
        {% if collector.connections|length > 1 %}
            <h3>Connection <em>{{ connection }}</em></h3>
        {% endif %}

        {% if calls is empty %}
            <div class=\"empty\">
                <p>No calls.</p>
            </div>
        {% else %}
            <table class=\"alt\" id=\"callsPlaceholder-{{ loop.index }}\">
                <thead>
                <tr>
                    <th onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                    <th onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                {% for i, call in calls %}
                    <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td>{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(call.executionMS * 1000) }}&nbsp;ms</td>
                        <td>
                            {{ call.method|raw }}<br>

                            <strong class=\"font-normal text-small\">Parameters:</strong>
                            {{ call.params|yaml_encode }} <br>
                            <strong class=\"font-normal text-small\">Environment:</strong>
                            {{ call.env|yaml_encode }} <br>
                            {% if call.caller is defined %}
                                <strong class=\"font-normal text-small\">Callers</strong>
                                <ul>
                                    {% for caller in call.caller %}
                                        <li> - {{ caller }}</li>
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Database Connections</h2>
    {{ phpcr.key_value_table(collector.connections, \"Name\", \"Service\", \"No connections\") }}

    <h2>Document Managers</h2>
    {{ phpcr.key_value_table(collector.managers, \"Name\", \"Service\", \"No document managers\") }}

    <h2>Document Mapping</h2>

    {% for manager, classes in collector.documents %}
        {% if collector.managers|length > 1 %}
            <h3>Manager <small>{{ manager }}</small></h3>
        {% endif %}

        {% if classes is empty %}
            <div class=\"empty\">
                <p>No loaded documents.</p>
            </div>
        {% else %}
            <table>
                <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                    </tr>
                </thead>

                <tbody>
                {% for class in classes %}
                    <tr>
                        <td>{{ class }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}
{% endblock %}

{# Display a flat associative array as an HTML table #}
{% macro key_value_table(rows, key_label, value_label, empty_message) %}
    {% if rows %}
        <table>
            <thead>
                <tr>
                    <th scope=\"col\" >{{ key_label|default(\"Key\")}}</th>
                    <th scope=\"col\" >{{ value_label|default(\"Value\")}}</th>
                </tr>
            </thead>
            <tbody>
            {% for key, value in rows %}
                <tr>
                    <th scope=\"row\" >{{ key }}</th>
                    <td>{{ value }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>{{ empty_message|default(\"No data\") }}.</p>
        </div>
    {% endif %}
{% endmacro %}
", "@DoctrinePHPCR/Collector/phpcr.html.twig", "/home/mrmidi/highhack/highhack2/vendor/doctrine/phpcr-bundle/src/Resources/views/Collector/phpcr.html.twig");
    }
}
