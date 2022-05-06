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
class __TwigTemplate_d088fce6bc95e2a438570f13ab629311 extends Template
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
            $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? null));
            foreach ($context['_seq'] as $context["locale"] => $context["url"]) {
                // line 12
                echo "        ";
                $context["localizations"] = twig_array_merge(($context["localizations"] ?? null), [                // line 13
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
        $context["seo"] = twig_array_merge(((array_key_exists("seo", $context)) ? (_twig_default_filter(($context["seo"] ?? null), [])) : ([])), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 22), "attributes", [], "any", false, true, false, 22), "get", [0 => "_seo", 1 => []], "method", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 22), "attributes", [], "any", false, true, false, 22), "get", [0 => "_seo", 1 => []], "method", false, false, false, 22), [])) : ([])));
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
            $context["seoRobots"] = (($context["seoRobots"] ?? null) . "noIndex");
        } else {
            // line 33
            $context["seoRobots"] = (($context["seoRobots"] ?? null) . "index");
        }
        // line 35
        if (((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", [], "any", false, false, false, 35), false)) : (false))) {
            // line 36
            $context["seoRobots"] = (($context["seoRobots"] ?? null) . ",noFollow");
        } else {
            // line 38
            $context["seoRobots"] = (($context["seoRobots"] ?? null) . ",follow");
        }
        // line 41
        $context["seoCanonical"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", [], "any", false, false, false, 41))) : (""));
        // line 43
        if ((( !($context["seoCanonical"] ?? null) && ($context["shadowBaseLocale"] ?? null)) && ((twig_get_attribute($this->env, $this->source, ($context["localizations"] ?? null), ($context["shadowBaseLocale"] ?? null), [], "array", true, true, false, 43)) ? (_twig_default_filter((($__internal_compile_0 = ($context["localizations"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["shadowBaseLocale"] ?? null)] ?? null) : null))) : ("")))) {
            // line 44
            echo "    ";
            $context["seoCanonical"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["localizations"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["shadowBaseLocale"] ?? null)] ?? null) : null), "url", [], "any", false, false, false, 44);
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
    }

    // line 49
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        if (($context["seoTitle"] ?? null)) {
            // line 51
            echo "<title>";
            echo twig_escape_filter($this->env, ($context["seoTitle"] ?? null), "html", null, true);
            echo "</title>";
        }
    }

    // line 55
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        if (($context["seoDescription"] ?? null)) {
            // line 57
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, ($context["seoDescription"] ?? null), "html", null, true);
            echo "\"/>";
        }
    }

    // line 61
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        if (($context["seoKeywords"] ?? null)) {
            // line 63
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, ($context["seoKeywords"] ?? null), "html", null, true);
            echo "\"/>";
        }
    }

    // line 67
    public function block_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        if (($context["seoRobots"] ?? null)) {
            // line 69
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, ($context["seoRobots"] ?? null), "html", null, true);
            echo "\"/>";
        }
    }

    // line 73
    public function block_urls($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        if ((twig_length_filter($this->env, ($context["localizations"] ?? null)) > 1)) {
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["localizations"] ?? null));
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
    }

    // line 84
    public function block_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("seoCanonical", $context)) ? (_twig_default_filter(($context["seoCanonical"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "uri", [], "any", false, false, false, 86))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "uri", [], "any", false, false, false, 86))), "html", null, true);
        echo "\"/>";
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
        return array (  202 => 86,  198 => 84,  184 => 78,  182 => 77,  178 => 76,  176 => 75,  172 => 73,  165 => 69,  163 => 68,  159 => 67,  152 => 63,  150 => 62,  146 => 61,  139 => 57,  137 => 56,  133 => 55,  126 => 51,  124 => 50,  120 => 49,  116 => 84,  114 => 73,  112 => 67,  110 => 61,  108 => 55,  106 => 49,  102 => 44,  100 => 43,  98 => 41,  95 => 38,  92 => 36,  90 => 35,  87 => 33,  84 => 31,  82 => 30,  80 => 29,  77 => 28,  75 => 27,  73 => 26,  71 => 25,  69 => 22,  62 => 18,  60 => 15,  59 => 14,  58 => 13,  56 => 12,  51 => 11,  48 => 10,  45 => 9,  43 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SuluWebsite/Extension/seo.html.twig", "/var/www/vspj.ru/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Extension/seo.html.twig");
    }
}
