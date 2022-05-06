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

/* @SuluWebsite/Extension/seo.html.twig */
class __TwigTemplate_65dc09dd1af2af4f5a30c41d59635373 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'keywords' => [$this, 'block_keywords'],
            'robots' => [$this, 'block_robots'],
            'urls' => [$this, 'block_urls'],
            'canonical' => [$this, 'block_canonical'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Extension/seo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Extension/seo.html.twig"));

        // line 8
        if ( !array_key_exists("localizations", $context)) {
            // line 9
            echo "    ";
            @trigger_error("The \"urls\" variable is deprecated, set \"localizations\" instead in the \"seo.html.twig\"."." (\"@SuluWebsite/Extension/seo.html.twig\" at line 9).", E_USER_DEPRECATED);
            // line 10
            echo "    ";
            $context["localizations"] = [];
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["locale"] => $context["url"]) {
                // line 12
                echo "        ";
                $context["localizations"] = twig_array_merge((isset($context["localizations"]) || array_key_exists("localizations", $context) ? $context["localizations"] : (function () { throw new RuntimeError('Variable "localizations" does not exist.', 12, $this->source); })()), [                // line 13
$context["locale"] => ["locale" =>                 // line 14
$context["locale"], "url" => $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(                // line 15
$context["url"], null, $context["locale"])]]);
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 22
        $context["seo"] = twig_array_merge(((array_key_exists("seo", $context)) ? (_twig_default_filter((isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 22, $this->source); })()), [])) : ([])), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 22), "attributes", [], "any", false, true, false, 22), "get", [0 => "_seo", 1 => []], "method", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 22), "attributes", [], "any", false, true, false, 22), "get", [0 => "_seo", 1 => []], "method", false, false, false, 22), [])) : ([])));
        // line 25
        $context["seoTitle"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "title", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "title", [], "any", false, false, false, 25), ((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, false, 25))) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, false, 25))) : (""))));
        // line 26
        $context["seoDescription"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "description", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "description", [], "any", false, false, false, 26))) : (""));
        // line 27
        $context["seoKeywords"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "keywords", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "keywords", [], "any", false, false, false, 27))) : (""));
        // line 28
        echo "
";
        // line 29
        $context["seoRobots"] = "";
        // line 30
        if (((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noIndex", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noIndex", [], "any", false, false, false, 30), false)) : (false))) {
            // line 31
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 31, $this->source); })()) . "noIndex");
        } else {
            // line 33
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 33, $this->source); })()) . "index");
        }
        // line 35
        if (((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", [], "any", false, false, false, 35), false)) : (false))) {
            // line 36
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 36, $this->source); })()) . ",noFollow");
        } else {
            // line 38
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 38, $this->source); })()) . ",follow");
        }
        // line 41
        $context["seoCanonical"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", [], "any", false, false, false, 41))) : (""));
        // line 43
        if ((( !(isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context) ? $context["seoCanonical"] : (function () { throw new RuntimeError('Variable "seoCanonical" does not exist.', 43, $this->source); })()) && (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 43, $this->source); })())) && ((twig_get_attribute($this->env, $this->source, ($context["localizations"] ?? null), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 43, $this->source); })()), [], "array", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["localizations"] ?? null), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 43, $this->source); })()), [], "array", false, false, false, 43))) : ("")))) {
            // line 44
            echo "    ";
            $context["seoCanonical"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizations"]) || array_key_exists("localizations", $context) ? $context["localizations"] : (function () { throw new RuntimeError('Variable "localizations" does not exist.', 44, $this->source); })()), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 44, $this->source); })()), [], "array", false, false, false, 44), "url", [], "any", false, false, false, 44);
        }
        // line 49
        $this->displayBlock('title', $context, $blocks);
        // line 55
        $this->displayBlock('description', $context, $blocks);
        // line 61
        $this->displayBlock('keywords', $context, $blocks);
        // line 67
        $this->displayBlock('robots', $context, $blocks);
        // line 73
        $this->displayBlock('urls', $context, $blocks);
        // line 84
        $this->displayBlock('canonical', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 49
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 50
        if ((isset($context["seoTitle"]) || array_key_exists("seoTitle", $context) ? $context["seoTitle"] : (function () { throw new RuntimeError('Variable "seoTitle" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "<title>";
            echo twig_escape_filter($this->env, (isset($context["seoTitle"]) || array_key_exists("seoTitle", $context) ? $context["seoTitle"] : (function () { throw new RuntimeError('Variable "seoTitle" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "</title>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        // line 56
        if ((isset($context["seoDescription"]) || array_key_exists("seoDescription", $context) ? $context["seoDescription"] : (function () { throw new RuntimeError('Variable "seoDescription" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoDescription"]) || array_key_exists("seoDescription", $context) ? $context["seoDescription"] : (function () { throw new RuntimeError('Variable "seoDescription" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        // line 62
        if ((isset($context["seoKeywords"]) || array_key_exists("seoKeywords", $context) ? $context["seoKeywords"] : (function () { throw new RuntimeError('Variable "seoKeywords" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoKeywords"]) || array_key_exists("seoKeywords", $context) ? $context["seoKeywords"] : (function () { throw new RuntimeError('Variable "seoKeywords" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "robots"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "robots"));

        // line 68
        if ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 69, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_urls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "urls"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "urls"));

        // line 75
        if ((twig_length_filter($this->env, (isset($context["localizations"]) || array_key_exists("localizations", $context) ? $context["localizations"] : (function () { throw new RuntimeError('Variable "localizations" does not exist.', 75, $this->source); })())) > 1)) {
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localizations"]) || array_key_exists("localizations", $context) ? $context["localizations"] : (function () { throw new RuntimeError('Variable "localizations" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
                // line 77
                if (( !twig_get_attribute($this->env, $this->source, $context["localization"], "alternate", [], "any", true, true, false, 77) || twig_get_attribute($this->env, $this->source, $context["localization"], "alternate", [], "any", false, false, false, 77))) {
                    // line 78
                    echo "<link rel=\"alternate\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localization"], "url", [], "any", false, false, false, 78), "html", null, true);
                    echo "\" hreflang=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["localization"], "locale", [], "any", false, false, false, 78), ["_" => "-"]), "html", null, true);
                    echo "\"/>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        // line 86
        echo "<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("seoCanonical", $context)) ? (_twig_default_filter((isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context) ? $context["seoCanonical"] : (function () { throw new RuntimeError('Variable "seoCanonical" does not exist.', 86, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "uri", [], "any", false, false, false, 86))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "uri", [], "any", false, false, false, 86))), "html", null, true);
        echo "\"/>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SuluWebsite/Extension/seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 86,  270 => 84,  250 => 78,  248 => 77,  244 => 76,  242 => 75,  232 => 73,  219 => 69,  217 => 68,  207 => 67,  194 => 63,  192 => 62,  182 => 61,  169 => 57,  167 => 56,  157 => 55,  144 => 51,  142 => 50,  132 => 49,  122 => 84,  120 => 73,  118 => 67,  116 => 61,  114 => 55,  112 => 49,  108 => 44,  106 => 43,  104 => 41,  101 => 38,  98 => 36,  96 => 35,  93 => 33,  90 => 31,  88 => 30,  86 => 29,  83 => 28,  81 => 27,  79 => 26,  77 => 25,  75 => 22,  68 => 18,  66 => 15,  65 => 14,  64 => 13,  62 => 12,  57 => 11,  54 => 10,  51 => 9,  49 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#-
 # content array
 # seo array
 # shadowBaseLocale string
 # localizations array
-#}

{% if localizations is not defined %}
    {% deprecated 'The \"urls\" variable is deprecated, set \"localizations\" instead in the \"seo.html.twig\".' %}
    {% set localizations = {} %}
    {% for locale, url in urls %}
        {% set localizations = localizations|merge({
            (locale): {
                locale: locale,
                url: sulu_content_path(url, null, locale),
            }
        }) %}
    {% endfor %}
{% endif %}

{#- merge seo data with _seo from attributes for custom urls -#}
{% set seo = seo|default([])|merge(app.request.attributes.get('_seo', [])|default([])) %}

{#- fallback to content title when no seo title is set -#}
{% set seoTitle = seo.title|default(content.title|default()) %}
{% set seoDescription = seo.description|default() %}
{% set seoKeywords = seo.keywords|default() %}

{% set seoRobots = '' %}
{%- if seo.noIndex|default(false) -%}
    {% set seoRobots = seoRobots ~ 'noIndex' -%}
{%- else -%}
    {% set seoRobots = seoRobots ~ 'index' -%}
{%- endif -%}
{%- if seo.noFollow|default(false) -%}
    {% set seoRobots = seoRobots ~ ',noFollow' -%}
{%- else -%}
    {% set seoRobots = seoRobots ~ ',follow' -%}
{%- endif -%}

{% set seoCanonical = seo.canonicalUrl|default() %}

{%- if not seoCanonical and shadowBaseLocale and localizations[shadowBaseLocale]|default() %}
    {% set seoCanonical = localizations[shadowBaseLocale].url %}
{%- endif -%}

{#- render blocks -#}

{%- block title -%}
    {%- if seoTitle -%}
        <title>{{ seoTitle }}</title>
    {%- endif -%}
{%- endblock -%}

{%- block description -%}
    {%- if seoDescription -%}
        <meta name=\"description\" content=\"{{ seoDescription }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block keywords -%}
    {%- if seoKeywords -%}
        <meta name=\"keywords\" content=\"{{ seoKeywords }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block robots -%}
    {%- if seoRobots -%}
        <meta name=\"robots\" content=\"{{ seoRobots }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block urls -%}
    {#- when only one language do not show alternative -#}
    {%- if localizations|length > 1 -%}
        {%- for localization in localizations -%}
            {%- if localization.alternate is not defined or localization.alternate -%}
                <link rel=\"alternate\" href=\"{{ localization.url }}\" hreflang=\"{{ localization.locale|replace({'_': '-'}) }}\"/>
            {%- endif -%}
        {%- endfor -%}
    {%- endif -%}
{%- endblock -%}

{%- block canonical -%}
    {#- Set canonical to itself if a bot clone the page -#}
    <link rel=\"canonical\" href=\"{{ seoCanonical|default(app.request.uri) }}\"/>
{%- endblock -%}
", "@SuluWebsite/Extension/seo.html.twig", "/home/mrmidi/highhack/highhack2/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Extension/seo.html.twig");
    }
}
