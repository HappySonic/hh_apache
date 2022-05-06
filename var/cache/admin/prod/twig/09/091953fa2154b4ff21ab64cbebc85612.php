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

/* @SuluAdmin/Admin/main.html.twig */
class __TwigTemplate_efad0e5bdd031b684c69614fde0bb57a extends Template
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
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'application' => [$this, 'block_application'],
            'config' => [$this, 'block_config'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('style', $context, $blocks);
        // line 12
        echo "
</head>
<body>
    ";
        // line 15
        $this->displayBlock('application', $context, $blocks);
        // line 18
        echo "
    <script>";
        // line 20
        $context["config"] = ["initialLoginState" => $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED"), "translations" =>         // line 22
($context["translations"] ?? null), "fallbackLocale" =>         // line 23
($context["fallback_locale"] ?? null), "endpoints" =>         // line 24
($context["endpoints"] ?? null), "suluVersion" =>         // line 25
($context["sulu_version"] ?? null), "appVersion" =>         // line 26
($context["app_version"] ?? null)];
        // line 29
        $this->displayBlock('config', $context, $blocks);
        // line 32
        echo "</script>

    ";
        // line 34
        $this->displayBlock('javascript', $context, $blocks);
        // line 38
        echo "</body>
</html>
";
    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Sulu";
    }

    // line 9
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.css", "sulu_admin"), "html", null, true);
        echo "\">";
    }

    // line 15
    public function block_application($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div id=\"application\"></div>
    ";
    }

    // line 29
    public function block_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "const SULU_CONFIG = Object.freeze(";
        echo json_encode(($context["config"] ?? null), twig_constant("JSON_PRETTY_PRINT"));
        echo ");";
    }

    // line 34
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.js", "sulu_admin"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@SuluAdmin/Admin/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 36,  132 => 34,  126 => 30,  122 => 29,  117 => 16,  113 => 15,  107 => 11,  103 => 9,  91 => 7,  83 => 4,  77 => 38,  75 => 34,  71 => 32,  69 => 29,  67 => 26,  66 => 25,  65 => 24,  64 => 23,  63 => 22,  62 => 20,  59 => 18,  57 => 15,  52 => 12,  49 => 9,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SuluAdmin/Admin/main.html.twig", "/var/www/vspj.ru/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Resources/views/Admin/main.html.twig");
    }
}
