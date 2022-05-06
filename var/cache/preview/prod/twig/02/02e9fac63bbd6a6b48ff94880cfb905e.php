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

/* includes/blocks/article.html.twig */
class __TwigTemplate_b4e1ae3e8c53a91a575a67ce83a6ee83 extends Template
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
        echo "<div class=\"block1\">

";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "article", [], "any", false, false, false, 3);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "includes/blocks/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/blocks/article.html.twig", "/var/www/vspj.ru/templates/includes/blocks/article.html.twig");
    }
}
