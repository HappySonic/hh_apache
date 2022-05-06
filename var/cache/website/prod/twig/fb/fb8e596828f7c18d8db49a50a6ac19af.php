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
class __TwigTemplate_3772f616b3abcfb458815a9919914c01 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["image_first"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_image", [], "any", false, false, false, 3), "formats", [], "any", false, false, false, 3)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["920x.webp"] ?? null) : null);
        // line 4
        echo "<section class=\"hero\" id=\"home\"><div class=\"overlay\"></div>
      <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["image_first"] ?? null), "html", null, true);
        echo "\" alt=\"Car1\" class=\"d-block\" style=\"width:100%\">
    <div class=\"text py-5\">
      <h1> ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo " <span></span></h1>
      <p class=\"lead\"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "subtitle_home", [], "any", false, false, false, 8), "html", null, true);
        echo " </p>
    </div>
  </section>
<section class=\"padding bg-grey\">
  <div class=\"column\">

<div class=\"textbread\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sulu_breadcrumb')->getCallable(), [($context["uuid"] ?? null)]));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>

  
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "blocks", [], "any", false, false, false, 22));
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
$context["block"], "view" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 25
($context["view"] ?? null), "blocks", [], "any", false, false, false, 25)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25)] ?? null) : null)]));
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
        return array (  120 => 27,  118 => 25,  117 => 24,  115 => 23,  98 => 22,  92 => 19,  89 => 18,  78 => 16,  74 => 15,  64 => 8,  60 => 7,  55 => 5,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/default.html.twig", "/var/www/vspj.ru/templates/pages/default.html.twig");
    }
}
