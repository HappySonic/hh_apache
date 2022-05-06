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

/* includes/blocks/imageGallery.html.twig */
class __TwigTemplate_2a1d5171291a073e486f1fd7e7f30926 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/blocks/imageGallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/blocks/imageGallery.html.twig"));

        // line 1
        echo "
<div class=\"block\">
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 3, $this->source); })()), "images_list", [], "any", false, false, false, 3));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 4) % 2) == 1)) {
                // line 5
                echo "      <div class=\"row\">
    ";
            }
            // line 7
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "formats", [], "any", false, false, false, 7), "920x.webp", [], "array", false, false, false, 7), "html", null, true);
            echo "\" data-toggle=\"lightbox\" data-gallery=\"image-gallery\" class=\"col-sm-4\">
          <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "formats", [], "any", false, false, false, 8), "sulu-260x.webp", [], "array", false, false, false, 8), "html", null, true);
            echo "\" class=\"img-fluid\"> 
    ";
            // line 9
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9) % 2) == 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 9))) {
                // line 10
                echo "      </div>
    ";
            }
            // line 12
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </div>





";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/blocks/imageGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 13,  86 => 12,  82 => 10,  80 => 9,  76 => 8,  71 => 7,  67 => 5,  64 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"block\">
 {% for image in content.images_list %}
    {% if loop.index % 2 == 1 %}
      <div class=\"row\">
    {% endif %}
          <a href=\"{{ image.formats['920x.webp'] }}\" data-toggle=\"lightbox\" data-gallery=\"image-gallery\" class=\"col-sm-4\">
          <img src=\"{{ image.formats['sulu-260x.webp'] }}\" class=\"img-fluid\"> 
    {% if loop.index % 2 == 0 or loop.last %}
      </div>
    {% endif %}
  {% endfor %}
  </div>





", "includes/blocks/imageGallery.html.twig", "/home/mrmidi/highhack/highhack2/templates/includes/blocks/imageGallery.html.twig");
    }
}
