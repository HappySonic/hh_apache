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

/* includes/blocks/smart.html.twig */
class __TwigTemplate_241b5157d501cb93280c27e7e32e92cb extends Template
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
        // line 1
        echo "<div class=\"block\">
<ul class=\"pagination\">
    ";
        // line 3
        $context["page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "pages", [], "any", false, false, false, 3), "page", [], "any", false, false, false, 3);
        // line 4
        echo "
    ";
        // line 5
        if (((($context["page"] ?? null) - 1) >= 1)) {
            // line 6
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "url", [], "any", false, false, false, 6)), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
            echo "\">&laquo;</a></li>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "pages", [], "any", false, false, false, 9), "hasNextPage", [], "any", false, false, false, 9)) {
            // line 10
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "url", [], "any", false, false, false, 10)), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "\">&raquo;</a></li>
    ";
        }
        // line 12
        echo "</ul>

<div property=\"pages\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "pages", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 16
            echo "        <div class=\"col-lg-";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "pages", [], "any", false, false, false, 16), "presentAs", [], "any", false, false, false, 16) == "two")) ? ("6") : ("12"));
            echo "\">
            <h2>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 18)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
            </h2>

            <p>
                <i>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "excerptTitle", [], "any", false, false, false, 22), "html", null, true);
            echo "</i> | <i>";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["page"], "excerptTags", [], "any", false, false, false, 22), ", "), "html", null, true);
            echo "</i>
            </p>

            ";
            // line 25
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "excerptImages", [], "any", false, false, false, 25)) > 0)) {
                // line 26
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["page"], "excerptImages", [], "any", false, false, false, 26)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "thumbnails", [], "any", false, false, false, 26)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["sulu-50x50.webp"] ?? null) : null), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["page"], "excerptImages", [], "any", false, false, false, 26)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "title", [], "any", false, false, false, 26), "html", null, true);
                echo "\"/>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["page"], "excerptDescription", [], "any", false, false, false, 29);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "includes/blocks/smart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  114 => 29,  111 => 28,  103 => 26,  101 => 25,  93 => 22,  84 => 18,  78 => 16,  74 => 15,  69 => 12,  61 => 10,  59 => 9,  56 => 8,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/blocks/smart.html.twig", "/var/www/vspj.ru/templates/includes/blocks/smart.html.twig");
    }
}
