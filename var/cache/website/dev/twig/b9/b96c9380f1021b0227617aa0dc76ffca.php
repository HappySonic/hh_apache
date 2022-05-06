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

/* @SuluWebsite/Analytics/matomo/head-close.html.twig */
class __TwigTemplate_f0075ed37e4fac588666daca3698de29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Analytics/matomo/head-close.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Analytics/matomo/head-close.html.twig"));

        // line 1
        echo "<script>
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 6, $this->source); })()), "content", [], "any", false, false, false, 6), "url", [], "any", false, false, false, 6), "/"), "html", null, true);
        echo "\";
        _paq.push(['setTrackerUrl', u+'/piwik.php']);
        _paq.push(['setSiteId', '";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 8, $this->source); })()), "content", [], "any", false, false, false, 8), "siteId", [], "any", false, false, false, 8), "html", null, true);
        echo "']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'/piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SuluWebsite/Analytics/matomo/head-close.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u=\"{{ analytics.content.url|trim('/') }}\";
        _paq.push(['setTrackerUrl', u+'/piwik.php']);
        _paq.push(['setSiteId', '{{ analytics.content.siteId }}']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'/piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
", "@SuluWebsite/Analytics/matomo/head-close.html.twig", "/home/mrmidi/highhack/highhack2/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Analytics/matomo/head-close.html.twig");
    }
}
