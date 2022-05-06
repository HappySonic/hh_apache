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

/* includes/blocks/singleImage.html.twig */
class __TwigTemplate_3cad2a137b7f4a339daa39104d09e615 extends Template
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
        echo "<div class=\"block>
";
        // line 2
        $context["i"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "single_Image", [], "any", false, false, false, 2), "formats", [], "any", false, false, false, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["sulu-400x400.webp"] ?? null) : null);
        // line 3
        echo "<img src=\"";
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "\" alt=\"\">

</div>";
    }

    public function getTemplateName()
    {
        return "includes/blocks/singleImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/blocks/singleImage.html.twig", "/var/www/vspj.ru/templates/includes/blocks/singleImage.html.twig");
    }
}
