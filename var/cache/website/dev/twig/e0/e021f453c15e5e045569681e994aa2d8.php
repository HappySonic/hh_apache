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

/* pages/homepage.html.twig */
class __TwigTemplate_7c6e840f962f6f8c1bbbeacd0dac7bd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $context["image_first"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 4, $this->source); })()), "first_image", [], "any", false, false, false, 4), "formats", [], "any", false, false, false, 4), "920x.webp", [], "array", false, false, false, 4);
        // line 5
        echo "<section class=\"hero\" id=\"home\"><div class=\"overlay\"></div>
      <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["image_first"]) || array_key_exists("image_first", $context) ? $context["image_first"] : (function () { throw new RuntimeError('Variable "image_first" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\" alt=\"Car1\" class=\"d-block\" style=\"width:100%\">
    <div class=\"text py-5\">
      <h1> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " <span></span></h1>
      <p class=\"lead\"> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 9, $this->source); })()), "subtitle_home", [], "any", false, false, false, 9), "html", null, true);
        echo " </p>
    </div>
  </section>
<section class=\"padding bg-grey\">
\t\t<div class=\"container\">
\t\t\t";
        // line 14
        echo twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14);
        echo "
\t\t</div>
</section>

<section class=\"padding bg-grey\">
<div class=\"container\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 20, $this->source); })()), "teasers", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["teaser"]) {
            // line 21
            echo "        <article>
             <h3>
                 ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teaser"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "
             </h3>

             ";
            // line 26
            $context["teaserImage"] = $this->extensions['Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension']->resolveMediaFunction(twig_get_attribute($this->env, $this->source, $context["teaser"], "mediaId", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "locale", [], "any", false, false, false, 26));
            // line 27
            echo "
             ";
            // line 28
            if ((isset($context["teaserImage"]) || array_key_exists("teaserImage", $context) ? $context["teaserImage"] : (function () { throw new RuntimeError('Variable "teaserImage" does not exist.', 28, $this->source); })())) {
                // line 29
                echo "                 <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["teaserImage"]) || array_key_exists("teaserImage", $context) ? $context["teaserImage"] : (function () { throw new RuntimeError('Variable "teaserImage" does not exist.', 29, $this->source); })()), "formats", [], "any", false, false, false, 29), "sulu-260x", [], "array", false, false, false, 29), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teaserImage"]) || array_key_exists("teaserImage", $context) ? $context["teaserImage"] : (function () { throw new RuntimeError('Variable "teaserImage" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
             ";
            }
            // line 31
            echo "
             <div>
                  ";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["teaser"], "description", [], "any", false, false, false, 33);
            echo "
             </div>

             <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["teaser"], "url", [], "any", false, false, false, 36)), "html", null, true);
            echo "\">
                 ";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["teaser"], "moreText", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["teaser"], "moreText", [], "any", false, false, false, 37), "Read more")) : ("Read more")), "html", null, true);
            echo "
             </a>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teaser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
</section>


<section class=\"padding bg-grey\">
<div class=\"container\">
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 47, $this->source); })()), "teasers2", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["teaser"]) {
            // line 48
            echo "        <article>
             <h3>
                 ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teaser"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "
             </h3>

             ";
            // line 53
            $context["teaserImage"] = $this->extensions['Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension']->resolveMediaFunction(twig_get_attribute($this->env, $this->source, $context["teaser"], "mediaId", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "locale", [], "any", false, false, false, 53));
            // line 54
            echo "
             ";
            // line 55
            if ((isset($context["teaserImage"]) || array_key_exists("teaserImage", $context) ? $context["teaserImage"] : (function () { throw new RuntimeError('Variable "teaserImage" does not exist.', 55, $this->source); })())) {
                // line 56
                echo "                 <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["teaserImage"]) || array_key_exists("teaserImage", $context) ? $context["teaserImage"] : (function () { throw new RuntimeError('Variable "teaserImage" does not exist.', 56, $this->source); })()), "formats", [], "any", false, false, false, 56), "sulu-260x", [], "array", false, false, false, 56), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teaserImage"]) || array_key_exists("teaserImage", $context) ? $context["teaserImage"] : (function () { throw new RuntimeError('Variable "teaserImage" does not exist.', 56, $this->source); })()), "title", [], "any", false, false, false, 56), "html", null, true);
                echo "\">
             ";
            }
            // line 58
            echo "
             <div>
                  ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["teaser"], "description", [], "any", false, false, false, 60);
            echo "
             </div>

             <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["teaser"], "url", [], "any", false, false, false, 63)), "html", null, true);
            echo "\">
                 ";
            // line 64
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["teaser"], "moreText", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["teaser"], "moreText", [], "any", false, false, false, 64), "Read more")) : ("Read more")), "html", null, true);
            echo "
             </a>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teaser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
</section>
\t\t\t

<!-- S L I D E R -->



";
        // line 76
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 76, $this->source); })()), "imagesCarousel", [], "any", false, false, false, 76))) {
            // line 77
            echo "\t    <div class=\"container-fluid bg-dark\" id=\"car\">
        <div id=\"carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"mycarousel\">
            <div class=\"carousel-indicators\">
    ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 80, $this->source); })()), "imagesCarousel", [], "any", false, false, false, 80)) - 1)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 81
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 81)) {
                    $context["active"] = "active";
                    echo " ";
                    $context["ariacurrent"] = "aria-current=\"true\"";
                } else {
                    $context["active"] = "";
                    $context["areacurrent"] = "";
                }
                // line 82
                echo "        <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 82, $this->source); })()), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["ariacurrent"]) || array_key_exists("ariacurrent", $context) ? $context["ariacurrent"] : (function () { throw new RuntimeError('Variable "ariacurrent" does not exist.', 82, $this->source); })()), "html", null, true);
                echo " aria-label=\"Slide 1\"></button>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    </div>
\t<div class=\"carousel-inner\">

    ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 87, $this->source); })()), "imagesCarousel", [], "any", false, false, false, 87));
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
                // line 88
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 88)) {
                    $context["active"] = "active";
                } else {
                    $context["active"] = "";
                }
                // line 89
                echo "            <div class=\"carousel-item  ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 89, $this->source); })()), "html", null, true);
                echo "\">

            <img src=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "formats", [], "any", false, false, false, 91), "920x.webp", [], "array", false, false, false, 91), "html", null, true);
                echo "\" class=\"d-block w-100\" alt=\"slide 2\">
            </div>
    ";
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
            // line 94
            echo "    </div>

            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
  </div>
</section> 
";
        }
        // line 107
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 107,  330 => 94,  313 => 91,  307 => 89,  300 => 88,  283 => 87,  278 => 84,  257 => 82,  247 => 81,  230 => 80,  225 => 77,  223 => 76,  213 => 68,  203 => 64,  199 => 63,  193 => 60,  189 => 58,  181 => 56,  179 => 55,  176 => 54,  174 => 53,  168 => 50,  164 => 48,  160 => 47,  152 => 41,  142 => 37,  138 => 36,  132 => 33,  128 => 31,  120 => 29,  118 => 28,  115 => 27,  113 => 26,  107 => 23,  103 => 21,  99 => 20,  90 => 14,  82 => 9,  78 => 8,  73 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
\t\t<div class=\"container\">
\t\t\t{{ content.description|raw }}
\t\t</div>
</section>

<section class=\"padding bg-grey\">
<div class=\"container\">
    {% for teaser in content.teasers %}
        <article>
             <h3>
                 {{ teaser.title }}
             </h3>

             {% set teaserImage = sulu_resolve_media(teaser.mediaId, app.request.locale) %}

             {% if teaserImage %}
                 <img src=\"{{ teaserImage.formats['sulu-260x'] }}\" alt=\"{{ teaserImage.title }}\">
             {% endif %}

             <div>
                  {{ teaser.description|raw }}
             </div>

             <a href=\"{{ sulu_content_path(teaser.url) }}\">
                 {{ teaser.moreText|default('Read more') }}
             </a>
        </article>
    {% endfor %}
</div>
</section>


<section class=\"padding bg-grey\">
<div class=\"container\">
    {% for teaser in content.teasers2 %}
        <article>
             <h3>
                 {{ teaser.title }}
             </h3>

             {% set teaserImage = sulu_resolve_media(teaser.mediaId, app.request.locale) %}

             {% if teaserImage %}
                 <img src=\"{{ teaserImage.formats['sulu-260x'] }}\" alt=\"{{ teaserImage.title }}\">
             {% endif %}

             <div>
                  {{ teaser.description|raw }}
             </div>

             <a href=\"{{ sulu_content_path(teaser.url) }}\">
                 {{ teaser.moreText|default('Read more') }}
             </a>
        </article>
    {% endfor %}
</div>
</section>
\t\t\t

<!-- S L I D E R -->



{% if content.imagesCarousel is not empty %}
\t    <div class=\"container-fluid bg-dark\" id=\"car\">
        <div id=\"carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"mycarousel\">
            <div class=\"carousel-indicators\">
    {% for i in 0..content.imagesCarousel|length - 1 %}
        {% if loop.first %}{% set active = 'active' %} {% set ariacurrent = 'aria-current=\"true\"' %}{% else %}{% set active = '' %}{% set areacurrent = '' %}{% endif %}
        <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"{{ i }}\" class=\"{{ active }}\" {{ ariacurrent }} aria-label=\"Slide 1\"></button>
    {% endfor %}
    </div>
\t<div class=\"carousel-inner\">

    {% for image in content.imagesCarousel %}
            {% if loop.first %}{% set active = 'active' %}{% else %}{% set active = '' %}{% endif %}
            <div class=\"carousel-item  {{ active }}\">

            <img src=\"{{ image.formats['920x.webp'] }}\" class=\"d-block w-100\" alt=\"slide 2\">
            </div>
    {% endfor %}
    </div>

            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
  </div>
</section> 
{% endif %}



{# %dump(content) #}
{% endblock %}

", "pages/homepage.html.twig", "/home/mrmidi/highhack/highhack2/templates/pages/homepage.html.twig");
    }
}
