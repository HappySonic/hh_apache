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
class __TwigTemplate_0b8a4b01e1f7edc68ebe75701eb750e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/blocks/smart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/blocks/smart.html.twig"));

        // line 1
        echo "<div class=\"block\">
<ul class=\"pagination\">
    ";
        // line 3
        $context["page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 3, $this->source); })()), "pages", [], "any", false, false, false, 3), "page", [], "any", false, false, false, 3);
        // line 4
        echo "
    ";
        // line 5
        if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()) - 1) >= 1)) {
            // line 6
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 6, $this->source); })()), "url", [], "any", false, false, false, 6)), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()) - 1), "html", null, true);
            echo "\">&laquo;</a></li>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 9, $this->source); })()), "pages", [], "any", false, false, false, 9), "hasNextPage", [], "any", false, false, false, 9)) {
            // line 10
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 10, $this->source); })()), "url", [], "any", false, false, false, 10)), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()) + 1), "html", null, true);
            echo "\">&raquo;</a></li>
    ";
        }
        // line 12
        echo "</ul>

<div property=\"pages\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 15, $this->source); })()), "pages", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 16
            echo "        <div class=\"col-lg-";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 16, $this->source); })()), "pages", [], "any", false, false, false, 16), "presentAs", [], "any", false, false, false, 16) == "two")) ? ("6") : ("12"));
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "excerptImages", [], "any", false, false, false, 26), 0, [], "array", false, false, false, 26), "thumbnails", [], "any", false, false, false, 26), "sulu-50x50.webp", [], "array", false, false, false, 26), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "excerptImages", [], "any", false, false, false, 26), 0, [], "array", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  129 => 32,  120 => 29,  117 => 28,  109 => 26,  107 => 25,  99 => 22,  90 => 18,  84 => 16,  80 => 15,  75 => 12,  67 => 10,  65 => 9,  62 => 8,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block\">
<ul class=\"pagination\">
    {% set page = view.pages.page %}

    {% if page-1 >= 1 %}
        <li><a href=\"{{ sulu_content_path(content.url) }}?p={{ page-1 }}\">&laquo;</a></li>
    {% endif %}

    {% if view.pages.hasNextPage %}
        <li><a href=\"{{ sulu_content_path(content.url) }}?p={{ page+1 }}\">&raquo;</a></li>
    {% endif %}
</ul>

<div property=\"pages\">
    {% for page in content.pages %}
        <div class=\"col-lg-{{ view.pages.presentAs == 'two' ? '6' : '12' }}\">
            <h2>
                <a href=\"{{ sulu_content_path(page.url) }}\">{{ page.title }}</a>
            </h2>

            <p>
                <i>{{ page.excerptTitle }}</i> | <i>{{ page.excerptTags|join(', ') }}</i>
            </p>

            {% if page.excerptImages|length > 0 %}
                <img src=\"{{ page.excerptImages[0].thumbnails['sulu-50x50.webp'] }}\" alt=\"{{ page.excerptImages[0].title }}\"/>
            {% endif %}

            {{ page.excerptDescription|raw }}
        </div>
    {% endfor %}
</div>
</div>", "includes/blocks/smart.html.twig", "/home/mrmidi/highhack/highhack2/templates/includes/blocks/smart.html.twig");
    }
}
