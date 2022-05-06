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

/* base.html.twig */
class __TwigTemplate_5d608b495727e5b92f6f969b05630a0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "_")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('style', $context, $blocks);
        // line 21
        echo "</head>
<body>
    <header>
        ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "    </header>


    <main>
        ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "    </main>

    <footer>
        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "    </footer>

    ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "</body>
</html>


";
    }

    // line 8
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        ";
        $this->loadTemplate("@SuluWebsite/Extension/seo.html.twig", "base.html.twig", 9)->display(twig_array_merge($context, ["seo" => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["extension"] ?? null), "seo", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extension"] ?? null), "seo", [], "any", false, false, false, 10), [])) : ([])), "content" => ((        // line 11
array_key_exists("content", $context)) ? (_twig_default_filter(($context["content"] ?? null), [])) : ([])), "localizations" => ((        // line 12
array_key_exists("localizations", $context)) ? (_twig_default_filter(($context["localizations"] ?? null), [])) : ([])), "shadowBaseLocale" => ((        // line 13
array_key_exists("shadowBaseLocale", $context)) ? (_twig_default_filter(($context["shadowBaseLocale"] ?? null))) : (""))]));
        // line 15
        echo "    ";
    }

    // line 17
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
        ";
        // line 19
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
    }

    // line 24
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
    <nav class=\"navbar navbar-light navbar-expand-lg bg-light absolute-top\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"http://vspj.ru:8000/\">Menu</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
      <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Menu</h5>
        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
      </div>
      <div class=\"offcanvas-body\">
        <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"http://vspj.ru:8000/\">Home</a>
          </li>
          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sulu_navigation_root_tree')->getCallable(), ["main"]));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link smooth-link\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, $context["item"], "webspaceKey", [], "any", false, false, false, 44)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
                         </li>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </ul>
      </div>
    </div>
  </div>
</nav>

        ";
    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            <p>Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Rick and Morty</p>
        ";
    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 69,  195 => 68,  188 => 64,  184 => 63,  178 => 59,  168 => 48,  156 => 44,  153 => 43,  149 => 42,  130 => 25,  126 => 24,  120 => 19,  117 => 18,  113 => 17,  109 => 15,  107 => 13,  106 => 12,  105 => 11,  104 => 10,  102 => 9,  98 => 8,  90 => 71,  88 => 68,  84 => 66,  82 => 63,  77 => 60,  75 => 59,  69 => 55,  67 => 24,  62 => 21,  60 => 17,  57 => 16,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/vspj.ru/templates/base.html.twig");
    }
}
