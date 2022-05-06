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

/* pages/overview.html.twig */
class __TwigTemplate_70543aa946192c99ee27dd8c08848443 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/overview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/overview.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/overview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        $context["image_first"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 3, $this->source); })()), "first_image", [], "any", false, false, false, 3), "formats", [], "any", false, false, false, 3), "920x.webp", [], "array", false, false, false, 3);
        // line 4
        echo "<section class=\"hero\" id=\"home\"><div class=\"overlay\"></div>
      <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["image_first"]) || array_key_exists("image_first", $context) ? $context["image_first"] : (function () { throw new RuntimeError('Variable "image_first" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" alt=\"Car1\" class=\"d-block\" style=\"width:100%\">
    <div class=\"text py-5\">
      <h1>   <span></span></h1>
      <p class=\"lead\"> </p>
    </div>
  </section>
<section class=\"padding bg-grey\">
\t\t<div class=\"container\">
\t\t\t";
        // line 13
        echo twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13);
        echo "
\t\t</div>
</section>

<ul class=\"pagination\">
    ";
        // line 18
        $context["page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 18, $this->source); })()), "pages", [], "any", false, false, false, 18), "page", [], "any", false, false, false, 18);
        // line 19
        echo "
    ";
        // line 20
        if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()) - 1) >= 1)) {
            // line 21
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 21, $this->source); })()), "url", [], "any", false, false, false, 21)), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()) - 1), "html", null, true);
            echo "\">&laquo;</a></li>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 24, $this->source); })()), "pages", [], "any", false, false, false, 24), "hasNextPage", [], "any", false, false, false, 24)) {
            // line 25
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 25, $this->source); })()), "url", [], "any", false, false, false, 25)), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 25, $this->source); })()) + 1), "html", null, true);
            echo "\">&raquo;</a></li>
    ";
        }
        // line 27
        echo "</ul>

<div property=\"pages\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 30, $this->source); })()), "pages", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 31
            echo "        <div class=\"col-lg-";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 31, $this->source); })()), "pages", [], "any", false, false, false, 31), "presentAs", [], "any", false, false, false, 31) == "two")) ? ("6") : ("12"));
            echo "\">
            <h2>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 33)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
            </h2>

            <p>
                <i>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "excerptTitle", [], "any", false, false, false, 37), "html", null, true);
            echo "</i> | <i>";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["page"], "excerptTags", [], "any", false, false, false, 37), ", "), "html", null, true);
            echo "</i>
            </p>

            ";
            // line 40
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "excerptImages", [], "any", false, false, false, 40)) > 0)) {
                // line 41
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "excerptImages", [], "any", false, false, false, 41), 0, [], "array", false, false, false, 41), "thumbnails", [], "any", false, false, false, 41), "50x50", [], "array", false, false, false, 41), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "excerptImages", [], "any", false, false, false, 41), 0, [], "array", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
                echo "\"/>
            ";
            }
            // line 43
            echo "
            ";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["page"], "article", [], "any", false, false, false, 44);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 47,  165 => 44,  162 => 43,  154 => 41,  152 => 40,  144 => 37,  135 => 33,  129 => 31,  125 => 30,  120 => 27,  112 => 25,  110 => 24,  107 => 23,  99 => 21,  97 => 20,  94 => 19,  92 => 18,  84 => 13,  73 => 5,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block content %}
{% set image_first = content.first_image.formats['920x.webp'] %}
<section class=\"hero\" id=\"home\"><div class=\"overlay\"></div>
      <img src=\"{{ image_first }}\" alt=\"Car1\" class=\"d-block\" style=\"width:100%\">
    <div class=\"text py-5\">
      <h1>   <span></span></h1>
      <p class=\"lead\"> </p>
    </div>
  </section>
<section class=\"padding bg-grey\">
\t\t<div class=\"container\">
\t\t\t{{ content.description|raw }}
\t\t</div>
</section>

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
                <img src=\"{{ page.excerptImages[0].thumbnails['50x50'] }}\" alt=\"{{ page.excerptImages[0].title }}\"/>
            {% endif %}

            {{ page.article|raw }}
        </div>
    {% endfor %}
</div>

{% endblock %}", "pages/overview.html.twig", "/home/mrmidi/highhack/highhack2/templates/pages/overview.html.twig");
    }
}
