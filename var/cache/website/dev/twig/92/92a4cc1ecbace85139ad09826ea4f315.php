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

/* @SuluPage/Export/Snippet/1.2.xliff.twig */
class __TwigTemplate_86ae5257bad3c2d0987ba92bb8432f0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'snippet' => [$this, 'block_snippet'],
            'view' => [$this, 'block_view'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SuluPage/Export/Snippet/base.export.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluPage/Export/Snippet/1.2.xliff.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluPage/Export/Snippet/1.2.xliff.twig"));

        $this->parent = $this->loadTemplate("@SuluPage/Export/Snippet/base.export.twig", "@SuluPage/Export/Snippet/1.2.xliff.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:1.2\" version=\"1.2\">

";
        // line 7
        $this->displayParentBlock("main", $context, $blocks);
        echo "
</xliff>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_snippet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "snippet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "snippet"));

        // line 12
        echo "    <file source-language=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 12, $this->source); })()), "locale", [], "any", false, false, false, 12), "html", null, true);
        echo "\" datatype=\"plaintext\" original=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 12, $this->source); })()), "uuid", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
        <body>";
        // line 14
        $this->displayParentBlock("snippet", $context, $blocks);
        // line 15
        echo "</body>
    </file>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_view($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "view"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "view"));

        // line 21
        ob_start();
        // line 22
        echo "    ";
        $context["attributes"] = "";
        // line 23
        echo "    ";
        $context["target"] = "";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "translate", [], "any", true, true, false, 24) &&  !twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })()), "translate", [], "any", false, false, false, 24))) {
            // line 25
            $context["attributes"] = ((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 25, $this->source); })()) . " translate=\"no\"");
            // line 26
            echo "        ";
            $context["target"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 26, $this->source); })());
        }
        // line 28
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 28, $this->source); })()) == "text_editor")) {
            // line 29
            echo "        ";
            $context["attributes"] = ((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 29, $this->source); })()) . " datatype=\"html\"");
            // line 30
            echo "    ";
        }
        // line 31
        echo "    ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo twig_spaceless($___internal_parse_3_);
        // line 32
        echo "    ";
        // line 33
        echo "
            <!-- ";
        // line 34
        echo (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 34, $this->source); })());
        echo ": ";
        echo (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 34, $this->source); })());
        echo " -->
            <trans-unit id=\"";
        // line 35
        echo $this->extensions['Sulu\Bundle\PageBundle\Twig\ExportTwigExtension']->counter();
        echo "\" resname=\"";
        echo (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 35, $this->source); })());
        echo "\"";
        echo (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 35, $this->source); })());
        echo ">
                <source>";
        // line 36
        echo $this->extensions['Sulu\Bundle\PageBundle\Twig\ExportTwigExtension']->escapeXmlContent((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 36, $this->source); })()));
        echo "</source>
                <target>";
        // line 37
        echo $this->extensions['Sulu\Bundle\PageBundle\Twig\ExportTwigExtension']->escapeXmlContent((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 37, $this->source); })()));
        echo "</target>
            </trans-unit>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SuluPage/Export/Snippet/1.2.xliff.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 37,  177 => 36,  169 => 35,  163 => 34,  160 => 33,  158 => 32,  156 => 21,  153 => 31,  150 => 30,  147 => 29,  145 => 28,  141 => 26,  139 => 25,  137 => 24,  134 => 23,  131 => 22,  129 => 21,  119 => 20,  107 => 15,  105 => 14,  98 => 12,  88 => 11,  75 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SuluPage/Export/Snippet/base.export.twig\" %}

{% block main %}
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:1.2\" version=\"1.2\">

{{ parent() }}
</xliff>
{% endblock main %}

{% block snippet %}
    <file source-language=\"{{ document.locale }}\" datatype=\"plaintext\" original=\"{{ document.uuid }}\">
        <body>
        {{- parent() -}}
        </body>
    </file>
{% endblock snippet %}

{# view #}
{%- block view -%}
    {% apply spaceless %}
    {% set attributes = '' %}
    {% set target = '' %}
    {%- if options.translate is defined and not options.translate -%}
        {% set attributes = attributes  ~ ' translate=\"no\"' %}
        {% set target = value %}
    {%- endif -%}
    {% if type == 'text_editor' %}
        {% set attributes = attributes ~ ' datatype=\"html\"' %}
    {% endif %}
    {% endapply %}
    {% autoescape false %}

            <!-- {{ name }}: {{ type }} -->
            <trans-unit id=\"{{ sulu_content_type_export_counter() }}\" resname=\"{{ name }}\"{{ attributes }}>
                <source>{{ sulu_content_type_export_escape(value) }}</source>
                <target>{{ sulu_content_type_export_escape(target) }}</target>
            </trans-unit>
    {% endautoescape %}
{%- endblock view -%}
", "@SuluPage/Export/Snippet/1.2.xliff.twig", "/home/mrmidi/highhack/highhack2/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Resources/views/Export/Snippet/1.2.xliff.twig");
    }
}
