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

/* pages/default.html.twig */
class __TwigTemplate_0518e219d8509cd6e389b9578ae1d620 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/default.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/default.html.twig", 1);
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
      <h1> ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo " <span></span></h1>
      <p class=\"lead\"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 8, $this->source); })()), "subtitle_home", [], "any", false, false, false, 8), "html", null, true);
        echo " </p>
    </div>
  </section>
<section class=\"padding bg-grey\">
  <div class=\"column\">

<div class=\"textbread\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sulu_breadcrumb')->getCallable(), [(isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new RuntimeError('Variable "uuid" does not exist.', 15, $this->source); })())]));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "        ><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 16)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
    <h1>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>

  
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 22, $this->source); })()), "blocks", [], "any", false, false, false, 22));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 23
            echo "        ";
            $this->loadTemplate((("includes/blocks/" . twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 23)) . ".html.twig"), "pages/default.html.twig", 23)->display(twig_array_merge($context, ["content" =>             // line 24
$context["block"], "view" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 25, $this->source); })()), "blocks", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25), [], "array", false, false, false, 25)]));
            // line 27
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 27,  136 => 25,  135 => 24,  133 => 23,  116 => 22,  110 => 19,  107 => 18,  96 => 16,  92 => 15,  82 => 8,  78 => 7,  73 => 5,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block content %}
{% set image_first = content.first_image.formats['920x.webp'] %}
<section class=\"hero\" id=\"home\"><div class=\"overlay\"></div>
      <img src=\"{{ image_first }}\" alt=\"Car1\" class=\"d-block\" style=\"width:100%\">
    <div class=\"text py-5\">
      <h1> {{ content.title }} <span></span></h1>
      <p class=\"lead\"> {{ content.subtitle_home }} </p>
    </div>
  </section>
<section class=\"padding bg-grey\">
  <div class=\"column\">

<div class=\"textbread\">
    {% for item in sulu_breadcrumb(uuid) %}
        ><a href=\"{{ sulu_content_path(item.url) }}\">{{ item.title }}</a>
    {% endfor %}
        </div>
    <h1>{{ content.title }}</h1>

  
    {% for block in content.blocks %}
        {% include 'includes/blocks/' ~ block.type ~ '.html.twig' with {
            content: block,
            view: view.blocks[loop.index0],
        } %}
    {% endfor %}
{% endblock %}



", "pages/default.html.twig", "/home/mrmidi/highhack/highhack2/templates/pages/default.html.twig");
    }
}
