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
class __TwigTemplate_b79af79f2f8242f2e431594a8b194d2b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["image_first"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_image", [], "any", false, false, false, 4), "formats", [], "any", false, false, false, 4)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["920x.webp"] ?? null) : null);
        // line 5
        echo "<section class=\"hero\" id=\"home\"><div class=\"overlay\"></div>
      <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["image_first"] ?? null), "html", null, true);
        echo "\" alt=\"Car1\" class=\"d-block\" style=\"width:100%\">
    <div class=\"text py-5\">
      <h1> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " <span></span></h1>
      <p class=\"lead\"> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "subtitle_home", [], "any", false, false, false, 9), "html", null, true);
        echo " </p>
    </div>
  </section>
<section class=\"padding bg-grey\">
\t\t<div class=\"container\">
\t\t\t";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "description", [], "any", false, false, false, 14);
        echo "
\t\t</div>
</section>

<section class=\"padding bg-grey\">
<div class=\"container\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "teasers", [], "any", false, false, false, 20));
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
            $context["teaserImage"] = $this->extensions['Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension']->resolveMediaFunction(twig_get_attribute($this->env, $this->source, $context["teaser"], "mediaId", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "locale", [], "any", false, false, false, 26));
            // line 27
            echo "
             ";
            // line 28
            if (($context["teaserImage"] ?? null)) {
                // line 29
                echo "                 <img src=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["teaserImage"] ?? null), "formats", [], "any", false, false, false, 29)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["sulu-260x"] ?? null) : null), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teaserImage"] ?? null), "title", [], "any", false, false, false, 29), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "teasers2", [], "any", false, false, false, 47));
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
            $context["teaserImage"] = $this->extensions['Sulu\Bundle\MediaBundle\Twig\MediaTwigExtension']->resolveMediaFunction(twig_get_attribute($this->env, $this->source, $context["teaser"], "mediaId", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 53), "locale", [], "any", false, false, false, 53));
            // line 54
            echo "
             ";
            // line 55
            if (($context["teaserImage"] ?? null)) {
                // line 56
                echo "                 <img src=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["teaserImage"] ?? null), "formats", [], "any", false, false, false, 56)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["sulu-260x"] ?? null) : null), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teaserImage"] ?? null), "title", [], "any", false, false, false, 56), "html", null, true);
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "imagesCarousel", [], "any", false, false, false, 76))) {
            // line 77
            echo "\t    <div class=\"container-fluid bg-dark\" id=\"car\">
        <div id=\"carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"mycarousel\">
            <div class=\"carousel-indicators\">
    ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "imagesCarousel", [], "any", false, false, false, 80)) - 1)));
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["ariacurrent"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "imagesCarousel", [], "any", false, false, false, 87));
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\">

            <img src=\"";
                // line 91
                echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["image"], "formats", [], "any", false, false, false, 91)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["920x.webp"] ?? null) : null), "html", null, true);
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
        return array (  327 => 107,  312 => 94,  295 => 91,  289 => 89,  282 => 88,  265 => 87,  260 => 84,  239 => 82,  229 => 81,  212 => 80,  207 => 77,  205 => 76,  195 => 68,  185 => 64,  181 => 63,  175 => 60,  171 => 58,  163 => 56,  161 => 55,  158 => 54,  156 => 53,  150 => 50,  146 => 48,  142 => 47,  134 => 41,  124 => 37,  120 => 36,  114 => 33,  110 => 31,  102 => 29,  100 => 28,  97 => 27,  95 => 26,  89 => 23,  85 => 21,  81 => 20,  72 => 14,  64 => 9,  60 => 8,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/homepage.html.twig", "/var/www/vspj.ru/templates/pages/homepage.html.twig");
    }
}
