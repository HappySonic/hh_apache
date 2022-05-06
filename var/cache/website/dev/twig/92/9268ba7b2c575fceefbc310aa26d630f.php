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

/* @SuluWebsite/Sitemap/sitemap.xml.twig */
class __TwigTemplate_7b6b529e5a8c017e7f08176b3517b48e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'namespaces' => [$this, 'block_namespaces'],
            'url' => [$this, 'block_url'],
            'loc' => [$this, 'block_loc'],
            'lastmod' => [$this, 'block_lastmod'],
            'changefreq' => [$this, 'block_changefreq'],
            'priority' => [$this, 'block_priority'],
            'alternateLinks' => [$this, 'block_alternateLinks'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Sitemap/sitemap.xml.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Sitemap/sitemap.xml.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" ";
        // line 3
        $this->displayBlock('namespaces', $context, $blocks);
        echo ">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "        ";
            $context["location"] = twig_get_attribute($this->env, $this->source, $context["entry"], "loc", [], "any", false, false, false, 5);
            // line 6
            echo "
        ";
            // line 7
            if (twig_in_filter((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 7, $this->source); })()), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 7, $this->source); })()))) {
                // line 8
                echo "            <url>
                ";
                // line 9
                $this->displayBlock('url', $context, $blocks);
                // line 43
                echo "            </url>
        ";
            }
            // line 45
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</urlset>
";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_6_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_namespaces($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "namespaces"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "namespaces"));

        echo "xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url"));

        // line 10
        echo "                    ";
        $this->displayBlock('loc', $context, $blocks);
        // line 13
        echo "
                    ";
        // line 14
        $this->displayBlock('lastmod', $context, $blocks);
        // line 19
        echo "
                    ";
        // line 20
        $this->displayBlock('changefreq', $context, $blocks);
        // line 25
        echo "
                    ";
        // line 26
        $this->displayBlock('priority', $context, $blocks);
        // line 31
        echo "
                    ";
        // line 32
        $this->displayBlock('alternateLinks', $context, $blocks);
        // line 42
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_loc($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loc"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loc"));

        // line 11
        echo "                        <loc>";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</loc>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_lastmod($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lastmod"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lastmod"));

        // line 15
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 15, $this->source); })()), "lastmod", [], "any", false, false, false, 15)) {
            // line 16
            echo "                            <lastmod>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 16, $this->source); })()), "lastmod", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true);
            echo "</lastmod>
                        ";
        }
        // line 18
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_changefreq($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "changefreq"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "changefreq"));

        // line 21
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 21, $this->source); })()), "changefreq", [], "any", false, false, false, 21)) {
            // line 22
            echo "                            <changefreq>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 22, $this->source); })()), "changefreq", [], "any", false, false, false, 22), "html", null, true);
            echo "</changefreq>
                        ";
        }
        // line 24
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_priority($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "priority"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "priority"));

        // line 27
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 27, $this->source); })()), "priority", [], "any", false, false, false, 27)) {
            // line 28
            echo "                            <priority>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 28, $this->source); })()), "priority", [], "any", false, false, false, 28), "html", null, true);
            echo "</priority>
                        ";
        }
        // line 30
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_alternateLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alternateLinks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alternateLinks"));

        // line 33
        echo "                        ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 33, $this->source); })()), "alternateLinks", [], "any", false, false, false, 33)) > 1)) {
            // line 34
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 34, $this->source); })()), "alternateLinks", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["alternateLink"]) {
                // line 35
                echo "                                ";
                $context["href"] = twig_get_attribute($this->env, $this->source, $context["alternateLink"], "href", [], "any", false, false, false, 35);
                // line 36
                echo "                                ";
                if (( !twig_test_empty((isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 36, $this->source); })())) && twig_in_filter((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 36, $this->source); })()), (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 36, $this->source); })())))) {
                    // line 37
                    echo "                                    <xhtml:link rel=\"alternate\" hreflang=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["alternateLink"], "locale", [], "any", false, false, false, 37), ["_" => "-"]), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 37, $this->source); })()), "html", null, true);
                    echo "\"/>
                                ";
                }
                // line 39
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alternateLink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        ";
        }
        // line 41
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SuluWebsite/Sitemap/sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 41,  331 => 40,  325 => 39,  317 => 37,  314 => 36,  311 => 35,  306 => 34,  303 => 33,  293 => 32,  283 => 30,  277 => 28,  274 => 27,  264 => 26,  254 => 24,  248 => 22,  245 => 21,  235 => 20,  225 => 18,  219 => 16,  216 => 15,  206 => 14,  193 => 11,  183 => 10,  173 => 42,  171 => 32,  168 => 31,  166 => 26,  163 => 25,  161 => 20,  158 => 19,  156 => 14,  153 => 13,  150 => 10,  140 => 9,  121 => 3,  111 => 1,  107 => 46,  93 => 45,  89 => 43,  87 => 9,  84 => 8,  82 => 7,  79 => 6,  76 => 5,  59 => 4,  55 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" {% block namespaces %}xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"{% endblock %}>
    {% for entry in entries %}
        {% set location = entry.loc %}

        {% if domain in location %}
            <url>
                {% block url %}
                    {% block loc %}
                        <loc>{{ location }}</loc>
                    {% endblock %}

                    {% block lastmod %}
                        {% if entry.lastmod %}
                            <lastmod>{{ entry.lastmod|date('Y-m-d') }}</lastmod>
                        {% endif %}
                    {% endblock %}

                    {% block changefreq %}
                        {% if entry.changefreq %}
                            <changefreq>{{ entry.changefreq }}</changefreq>
                        {% endif %}
                    {% endblock %}

                    {% block priority %}
                        {% if entry.priority %}
                            <priority>{{ entry.priority }}</priority>
                        {% endif %}
                    {% endblock %}

                    {% block alternateLinks %}
                        {% if entry.alternateLinks|length > 1 %}
                            {% for alternateLink in entry.alternateLinks %}
                                {% set href = alternateLink.href %}
                                {% if href is not empty and domain in href %}
                                    <xhtml:link rel=\"alternate\" hreflang=\"{{ alternateLink.locale|replace({'_': '-'}) }}\" href=\"{{ href }}\"/>
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    {% endblock %}
                {% endblock %}
            </url>
        {% endif %}
    {% endfor %}
</urlset>
{% endapply %}
", "@SuluWebsite/Sitemap/sitemap.xml.twig", "/home/mrmidi/highhack/highhack2/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Sitemap/sitemap.xml.twig");
    }
}
