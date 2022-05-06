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

/* @SuluWebsite/Preview/preview.html.twig */
class __TwigTemplate_eb6e8553c9626dd3c283692333f8b0a8 extends Template
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
        return $this->loadTemplate(($context["previewParentTemplate"] ?? null), "@SuluWebsite/Preview/preview.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo ($context["previewContentReplacer"] ?? null);
        echo "
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 6
        echo ($context["previewContentReplacer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SuluWebsite/Preview/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SuluWebsite/Preview/preview.html.twig", "/var/www/vspj.ru/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Preview/preview.html.twig");
    }
}
