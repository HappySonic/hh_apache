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

/* @DoctrinePHPCR/Collector/icon.svg */
class __TwigTemplate_9172d640d89bffa611b5bd6d4470e94a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrinePHPCR/Collector/icon.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrinePHPCR/Collector/icon.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"20px\" height=\"20px\" viewBox=\"0 0 20 20\" enable-background=\"new 0 0 20 20\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M15.298,10.932c0,0.455-0.372,0.828-0.831,0.828h-9.66c-0.454,0-0.827-0.373-0.827-0.828V9.091c0-0.455,0.373-0.828,0.827-0.828h9.66c0.459,0,0.831,0.373,0.831,0.828V10.932z M9.049,15.047c0,0.456-0.373,0.829-0.829,0.829H6.875c-0.453,0-0.827-0.373-0.827-0.829v-1.84c0-0.454,0.374-0.827,0.827-0.827h1.346c0.456,0,0.829,0.373,0.829,0.827V15.047z M10.393,19.165c0,0.456-0.372,0.826-0.829,0.826H5.531c-0.456,0-0.827-0.37-0.827-0.826v-1.839c0-0.456,0.371-0.829,0.827-0.829h4.013c0.455,0,0.828,0.373,0.828,0.829L10.393,19.165L10.393,19.165z M15.298,2.677c0,0.456-0.372,0.829-0.831,0.829H2.284c-0.456,0-0.828-0.373-0.828-0.829v-1.84c0-0.456,0.372-0.829,0.828-0.829h12.183c0.459,0,0.831,0.373,0.831,0.829V2.677z M9.049,6.794c0,0.455-0.373,0.829-0.829,0.829H6.875c-0.453,0-0.827-0.374-0.827-0.829V4.953c0-0.455,0.374-0.828,0.827-0.828h1.346c0.456,0,0.829,0.373,0.829,0.828V6.794z M18.544,6.794c0,0.455-0.373,0.829-0.828,0.829h-4.033c-0.456,0-0.829-0.374-0.829-0.829V4.953c0-0.455,0.373-0.828,0.829-0.828h4.014c0.455,0,0.828,0.373,0.828,0.828L18.544,6.794L18.544,6.794z\"/>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@DoctrinePHPCR/Collector/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"20px\" height=\"20px\" viewBox=\"0 0 20 20\" enable-background=\"new 0 0 20 20\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M15.298,10.932c0,0.455-0.372,0.828-0.831,0.828h-9.66c-0.454,0-0.827-0.373-0.827-0.828V9.091c0-0.455,0.373-0.828,0.827-0.828h9.66c0.459,0,0.831,0.373,0.831,0.828V10.932z M9.049,15.047c0,0.456-0.373,0.829-0.829,0.829H6.875c-0.453,0-0.827-0.373-0.827-0.829v-1.84c0-0.454,0.374-0.827,0.827-0.827h1.346c0.456,0,0.829,0.373,0.829,0.827V15.047z M10.393,19.165c0,0.456-0.372,0.826-0.829,0.826H5.531c-0.456,0-0.827-0.37-0.827-0.826v-1.839c0-0.456,0.371-0.829,0.827-0.829h4.013c0.455,0,0.828,0.373,0.828,0.829L10.393,19.165L10.393,19.165z M15.298,2.677c0,0.456-0.372,0.829-0.831,0.829H2.284c-0.456,0-0.828-0.373-0.828-0.829v-1.84c0-0.456,0.372-0.829,0.828-0.829h12.183c0.459,0,0.831,0.373,0.831,0.829V2.677z M9.049,6.794c0,0.455-0.373,0.829-0.829,0.829H6.875c-0.453,0-0.827-0.374-0.827-0.829V4.953c0-0.455,0.374-0.828,0.827-0.828h1.346c0.456,0,0.829,0.373,0.829,0.828V6.794z M18.544,6.794c0,0.455-0.373,0.829-0.828,0.829h-4.033c-0.456,0-0.829-0.374-0.829-0.829V4.953c0-0.455,0.373-0.828,0.829-0.828h4.014c0.455,0,0.828,0.373,0.828,0.828L18.544,6.794L18.544,6.794z\"/>
</svg>
", "@DoctrinePHPCR/Collector/icon.svg", "/home/mrmidi/highhack/highhack2/vendor/doctrine/phpcr-bundle/src/Resources/views/Collector/icon.svg");
    }
}
