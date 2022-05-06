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

/* @SuluWebsite/Analytics/matomo/body-open.html.twig */
class __TwigTemplate_393f08d608114247f4345b7002644c6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Analytics/matomo/body-open.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Analytics/matomo/body-open.html.twig"));

        // line 1
        echo "<noscript><p><img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 1, $this->source); })()), "content", [], "any", false, false, false, 1), "url", [], "any", false, false, false, 1), "html", null, true);
        echo "/piwik.php?idsite=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 1, $this->source); })()), "content", [], "any", false, false, false, 1), "siteId", [], "any", false, false, false, 1), "html", null, true);
        echo "\" style=\"border:0;\" alt=\"\" /></p></noscript>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SuluWebsite/Analytics/matomo/body-open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<noscript><p><img src=\"{{ analytics.content.url }}/piwik.php?idsite={{ analytics.content.siteId }}\" style=\"border:0;\" alt=\"\" /></p></noscript>
", "@SuluWebsite/Analytics/matomo/body-open.html.twig", "/home/mrmidi/highhack/highhack2/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Analytics/matomo/body-open.html.twig");
    }
}
