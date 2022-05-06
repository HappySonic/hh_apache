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

/* @SuluWebsite/Sitemap/sitemap-index.xml.twig */
class __TwigTemplate_ffb408cbb816f1447d053a426b0181bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Sitemap/sitemap-index.xml.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Sitemap/sitemap-index.xml.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 4
        $macros["self"] = $this->macros["self"] = $this;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["sitemaps"]) || array_key_exists("sitemaps", $context) ? $context["sitemaps"] : (function () { throw new RuntimeError('Variable "sitemaps" does not exist.', 5, $this->source); })()), function ($__sitemap__) use ($context, $macros) { $context["sitemap"] = $__sitemap__; return twig_get_attribute($this->env, $this->source, $context["sitemap"], "maxPage", [], "any", false, false, false, 5); }));
        foreach ($context['_seq'] as $context["_key"] => $context["sitemap"]) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["sitemap"], "maxPage", [], "any", false, false, false, 6)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 7
                echo "    <sitemap>
        ";
                // line 8
                echo twig_call_macro($macros["self"], "macro_loc", [twig_get_attribute($this->env, $this->source, $context["sitemap"], "alias", [], "any", false, false, false, 8), $context["page"], ((array_key_exists("scheme", $context)) ? (_twig_default_filter((isset($context["scheme"]) || array_key_exists("scheme", $context) ? $context["scheme"] : (function () { throw new RuntimeError('Variable "scheme" does not exist.', 8, $this->source); })()))) : ("")), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 8, $this->source); })()))) : (""))], 8, $context, $this->getSourceContext());
                echo "

        ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["sitemap"], "lastmod", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "        <lastmod>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sitemap"], "lastmod", [], "any", false, false, false, 11), "c"), "html", null, true);
                    echo "</lastmod>
        ";
                }
                // line 13
                echo "    </sitemap>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitemap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</sitemapindex>
";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_7_);
        // line 18
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function macro_loc($__alias__ = null, $__page__ = null, $__scheme__ = null, $__domain__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "alias" => $__alias__,
            "page" => $__page__,
            "scheme" => $__scheme__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "loc"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "loc"));

            // line 20
            echo "    ";
            if ((((array_key_exists("scheme", $context)) ? (_twig_default_filter((isset($context["scheme"]) || array_key_exists("scheme", $context) ? $context["scheme"] : (function () { throw new RuntimeError('Variable "scheme" does not exist.', 20, $this->source); })()))) : ("")) && ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 20, $this->source); })()))) : ("")))) {
                // line 21
                echo "        <loc>";
                echo twig_escape_filter($this->env, (isset($context["scheme"]) || array_key_exists("scheme", $context) ? $context["scheme"] : (function () { throw new RuntimeError('Variable "scheme" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "://";
                echo twig_escape_filter($this->env, (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 21, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_website.paginated_sitemap", ["alias" => (isset($context["alias"]) || array_key_exists("alias", $context) ? $context["alias"] : (function () { throw new RuntimeError('Variable "alias" does not exist.', 21, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })())]), "html", null, true);
                echo "</loc>
    ";
            } else {
                // line 23
                echo "        <loc>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sulu_website.paginated_sitemap", ["alias" => (isset($context["alias"]) || array_key_exists("alias", $context) ? $context["alias"] : (function () { throw new RuntimeError('Variable "alias" does not exist.', 23, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })())]), "html", null, true);
                echo "</loc>
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
        return "@SuluWebsite/Sitemap/sitemap-index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 23,  132 => 21,  129 => 20,  107 => 19,  96 => 18,  94 => 1,  90 => 16,  84 => 15,  77 => 13,  71 => 11,  69 => 10,  64 => 8,  61 => 7,  56 => 6,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% import _self as self %}
    {% for sitemap in sitemaps|filter(sitemap => sitemap.maxPage) %}
    {% for page in range(1, sitemap.maxPage) %}
    <sitemap>
        {{ self.loc(sitemap.alias, page, scheme|default(), domain|default()) }}

        {% if sitemap.lastmod %}
        <lastmod>{{ sitemap.lastmod|date('c') }}</lastmod>
        {% endif %}
    </sitemap>
    {% endfor %}
    {% endfor %}
</sitemapindex>
{% endapply %}

{% macro loc(alias, page, scheme, domain) %}
    {% if scheme|default() and domain|default() %}
        <loc>{{ scheme }}://{{ domain }}{{ path('sulu_website.paginated_sitemap', {alias: alias, page: page}) }}</loc>
    {% else %}
        <loc>{{ url('sulu_website.paginated_sitemap', {alias: alias, page: page}) }}</loc>
    {% endif %}
{% endmacro %}
", "@SuluWebsite/Sitemap/sitemap-index.xml.twig", "/home/mrmidi/highhack/highhack2/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Sitemap/sitemap-index.xml.twig");
    }
}
